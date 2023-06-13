<?php

namespace App\Http\Controllers;

use App\Http\Responses\BaseResponse;
use App\Http\Responses\SuccessResponse;
use App\Models\Film;
use Symfony\Component\HttpFoundation\Response;

class SimilarController extends Controller
{
    /**
     * Получение списка фильмов, похожих на данный.
     *
     * @param Film $film.
     * @return BaseResponse
     */
    public function index(Film $film): BaseResponse
    {
        $status = Film::STATUS_READY;
        $similarFilmsCount = 4;
        $filmGenres = $film->genres->pluck('id');

        $similarFilms = Film::where('status', $status)
            ->where('id', '!=', $film->id)
            ->whereHas('genres', function ($query) use ($filmGenres) {
                $query->whereIn('genres.id', $filmGenres);
            })
            ->withCount(['genres as genres_count' => function ($query) use ($filmGenres) {
                $query->whereIn('genres.id', $filmGenres);
            }])
            ->orderByDesc('genres_count')
            ->limit($similarFilmsCount)
            ->get();

        if ($similarFilms->isEmpty()) {
            return new SuccessResponse(null, Response::HTTP_NO_CONTENT);
        }

        return new SuccessResponse($similarFilms);
    }
}
