<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property-read User $user
 */
class Comment extends Model
{
    use HasFactory;

    public const ANONYMOUS_NAME = 'Гость';

    /**
     * Атрибуты, которые можно массово присваивать.
     *
     * @var array<string>
     */
    protected $fillable = [
        'user_id',
        'film_id',
        'comment_id',
        'text',
        'rating',
        'is_external',
    ];

    /**
     * Дополнительные вычисляемые атрибуты.
     *
     * @var array
     */
    protected $appends = [
        'author_name',
    ];

    /**
     * Отношение "один ко многим" к модели User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Отношение "один ко многим" к модели Film.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function film()
    {
        return $this->belongsTo(Film::class);
    }

    /**
     * Отношение "многие к одному" к модели Comment (родительский комментарий).
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo(Comment::class, 'comment_id');
    }

    /**
     * Отношение "один ко многим" к модели Comment (дочерние комментарии).
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function children()
    {
        return $this->hasMany(Comment::class, 'comment_id');
    }

    /**
     * Проверяет, имеет ли комментарий дочерние комментарии.
     *
     * @return bool
     */
    public function doesNotHaveChildren()
    {
        return $this->children()->count() === 0;
    }

    /**
     * Получает имя автора комментария.
     *
     * @return string
     */
    protected function getAuthorNameAttribute()
    {
        if ($this->is_external) {
            return $this::ANONYMOUS_NAME;
        }
        return $this->user->name;
    }

    /**
     * Получает дату последнего внешнего комментария.
     *
     * @return Carbon|null
     */
    public static function getLastExternalCommentDate(): ?Carbon
    {
        $lastCommentDate = self::where('is_external', true)->max('created_at');

        return $lastCommentDate ? Carbon::parse($lastCommentDate) : null;
    }
}
