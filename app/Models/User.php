<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;
    use HasFactory;
    use Notifiable;
    use HasApiTokens;

    public const ROLE_USER = 'user';
    public const ROLE_MODERATOR = 'moderator';

    /**
     * Атрибуты, которые можно массово присваивать.
     *
     * @var array<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
        'role',
    ];

    /**
     * Скрытые атрибуты.
     *
     * @var array<int,string>
     */
    protected $hidden = [
        'password',
    ];

    /**
     * Отношение "многие ко многим" к модели Film (избранные фильмы пользователя).
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function favoriteFilms()
    {
        return $this->belongsToMany(Film::class, 'user_favorites');
    }

    /**
     * Отношение "один ко многим" к модели Comment (комментарии пользователя).
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * Проверяет, является ли пользователь модератором.
     *
     * @return bool
     */
    public function isModerator(): bool
    {
        return $this->role === self::ROLE_MODERATOR;
    }

    /**
     * Проверяет, находится ли фильм в избранном у пользователя.
     *
     * @return bool
     */
    public function hasFavorite($filmId): bool
    {
        return $this->favoriteFilms()->where('film_id', $filmId)->exists();
    }
}
