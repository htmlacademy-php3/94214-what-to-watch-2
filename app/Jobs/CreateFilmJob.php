<?php

namespace App\Jobs;

use App\Models\Film;
use App\Services\FilmService;
use App\Services\MovieService\MovieService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class CreateFilmJob implements ShouldQueue
{
    use Dispatchable;
    use InteractsWithQueue;
    use Queueable;
    use SerializesModels;

    public $data;

    /**
     * Конструктор класса CreateFilmJob.
     *
     * @param array $data Данные для создания фильма.
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Обработка задачи по созданию фильма.
     *
     * @param MovieService $movieService Сервис для работы с фильмами.
     * @param FilmService $filmService Сервис для работы с фильмами.
     * @return void
     */
    public function handle(MovieService $movieService, FilmService $filmService)
    {
        $imdbId = $this->data['imdb_id'];
        Log::info("Задача CreateFilmJob начала выполняться для фильма с IMDB id {$imdbId}.");

        $movieData = $movieService->getMovie($imdbId);

        if ($movieData) {
            $filmService->updateFromData($movieData, Film::STATUS_MODERATE);
        } else {
            $filmService->deleteFilm($imdbId);
        }

        Log::info("Задача CreateFilmJob завершила выполнение для фильма с IMDB id {$imdbId}.");
    }
}
