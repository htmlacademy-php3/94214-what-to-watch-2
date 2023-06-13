<?php

namespace App\Jobs;

use App\Models\Comment;
use App\Models\Film;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;

class UpdateCommentsForAllFilmJob implements ShouldQueue
{
    use Dispatchable;
    use InteractsWithQueue;
    use Queueable;
    use SerializesModels;

    /**
     * Обработка задачи по обновлению комментариев для всех фильмов.
     *
     * @return void
     */
    public function handle()
    {
        $lastCommentDate = Comment::getLastExternalCommentDate();

        $params = [];
        if ($lastCommentDate) {
            $params['after'] = $lastCommentDate;
        }

        $response = Http::get('http://guide.phpdemo.ru/api/comments', $params);

        if ($response->successful()) {
            $newComments = $response->json();

            $filmsWithNewComments = Film::whereIn('imdb_id', array_column($newComments, 'imdb_id'))->get();

            $filmsWithNewComments->each(function ($film) use ($newComments) {
                $commentsForThisFilm = array_filter($newComments, function ($comment) use ($film) {
                    return $comment['imdb_id'] == $film->imdb_id;
                });

                UpdateCommentsForFilmJob::dispatch($film, $commentsForThisFilm);
            });
        }
    }
}
