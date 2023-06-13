<?php

namespace App\Services\MovieService;

use Carbon\Carbon;
use App\DTO\FilmData;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class MovieAcademyRepository implements MovieRepositoryInterface
{
    private string $baseUrl;
    private int $cachingTime;

    public function __construct()
    {
        $this->baseUrl = config('services.academy.base_url');
        $this->cachingTime = (int)config('services.academy.caching_time');
    }

    /**
     * Находит фильм по его IMDB ID.
     *
     * @param string $imdbId IMDB ID фильма.
     * @return array|null Данные фильма в виде массива или null, если фильм не найден.
     */
    public function findMovieById(string $imdbId): ?array
    {
        $cacheKey = 'movie_'.$imdbId;

        if (Cache::has($cacheKey)) {
            return Cache::get($cacheKey);
        }

        $response = Http::get($this->baseUrl . $imdbId);

        if (!$response->successful()) {
            return null;
        }

        $movieData = $response->json();

        $filmData = new FilmData(
            $movieData['name'] ?? null,
            $movieData['desc'] ?? null,
            $movieData['director'] ?? null,
            (int) ($movieData['released'] ?? 0),
            (int) ($movieData['run_time'] ?? 0),
            $movieData['imdb_id'] ?? null,
            $movieData['actors'] ?? null,
            $movieData['genres'] ?? null
        );

        $filmData->poster_image = $movieData['poster'] ?? null;
        $filmData->preview_image = $movieData['icon'] ?? null;
        $filmData->background_image = $movieData['background'] ?? null;
        $filmData->video_link = $movieData['video'] ?? null;
        $filmData->preview_video_link = $movieData['preview'] ?? null;

        $data = $filmData->toArray();
        $cachingTimeCarbon = Carbon::now()->addSeconds($this->cachingTime);
        Cache::put($cacheKey, $data, $cachingTimeCarbon);

        return $data;
    }
}
