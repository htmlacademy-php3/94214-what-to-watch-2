<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

/**
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Actor[] $actors
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Genre[] $genres
 */
class Film extends Model
{
    use HasFactory;

    public const STATUS_READY = 'ready';
    public const STATUS_PENDING = 'pending';
    public const STATUS_MODERATE = 'moderate';

    public const ORDER_BY_RELEASED = 'released';
    public const ORDER_BY_RATING = 'rating';

    public const ORDER_TO_ASC = 'asc';
    public const ORDER_TO_DESC = 'desc';

    /**
     * Атрибуты, которые можно массово присваивать.
     *
     * @var array<string>
     */
    protected $fillable = [
        'name',
        'poster_image',
        'preview_image',
        'background_image',
        'background_color',
        'video_link',
        'preview_video_link',
        'description',
        'director',
        'released',
        'run_time',
        'rating',
        'scores_count',
        'imdb_id',
        'status',
    ];

    /**
     * Отношения, которые всегда загружаются с моделью.
     *
     * @var array
     */
    protected $with = [
        'actors',
        'genres',
    ];

    /**
     * Атрибуты, которые должны быть приведены к определенному типу.
     *
     * @var array<string,string>
     */
    protected $casts = [
        'released' => 'integer',
        'rating' => 'float',
    ];

    /**
     * Дополнительные вычисляемые атрибуты.
     *
     * @var array
     */
    protected $appends = [
        'starring',
        'genre',
        'is_favorite',
    ];

    /**
     * Скрытые атрибуты.
     *
     * @var array<int,string>
     */
    protected $hidden = [
        'actors',
        'genres',
    ];

    /**
     * Отношение "многие ко многим" к модели Genre.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'film_genre', 'film_id', 'genre_id');
    }

    /**
     * Отношение "многие ко многим" к модели Actor.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function actors()
    {
        return $this->belongsToMany(Actor::class, 'actor_film');
    }

    /**
     * Отношение "многие ко многим" к модели User (пользователи, добавившие фильм в избранное).
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function favoritedByUsers()
    {
        return $this->belongsToMany(User::class, 'user_favorites');
    }

    /**
     * Отношение "один ко многим" к модели Comment (комментарии фильма).
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * Рассчитывает рейтинг фильма на основе комментариев.
     *
     * @return void
     */
    public function calculateRating()
    {
        $averageRating = $this->comments()->avg('rating');
        $averageRating = $averageRating ? round($averageRating, 1) : 0;

        $this->saveRating($averageRating);
    }

    /**
     * Сохраняет рейтинг фильма.
     *
     * @param  float  $rating
     * @return void
     */
    public function saveRating(float $rating)
    {
        $this->rating = $rating;
        $this->save();
    }

    /**
     * Получает список актеров фильма.
     *
     * @return array
     */
    public function getStarringAttribute(): array
    {
        return $this->actors->pluck('name')->toArray();
    }

    /**
     * Получает список жанров фильма.
     *
     * @return array
     */
    public function getGenreAttribute(): array
    {
        return $this->genres->pluck('name')->toArray();
    }

    /**
     * Проверяет, является ли фильм избранным для текущего пользователя.
     *
     * @return bool
     */
    public function getIsFavoriteAttribute(): bool
    {
        /** @var User|null $user */
        $user = Auth::user();

        if ($user) {
            return $this->favoritedByUsers()->where('user_id', $user->id)->exists();
        }

        return false;
    }
}
