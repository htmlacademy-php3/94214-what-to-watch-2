<?php

namespace App\Http\Controllers;

use App\Http\Requests\FilmRequest;
use App\Http\Requests\StoreFilmRequest;
use App\Http\Requests\UpdateFilmRequest;
use App\Http\Responses\BaseResponse;
use App\Http\Responses\FailResponse;
use App\Http\Responses\SuccessPaginationResponse;
use App\Http\Responses\SuccessResponse;
use App\Jobs\CreateFilmJob;
use App\Models\Film;
use App\Services\ActorService;
use App\Services\GenreService;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class FilmController extends Controller
{
    /**
     * Получение списка фильмов.
     *
     * @return BaseResponse
     */
    public function index(FilmRequest $request): BaseResponse
    {
        $pageQuantity = config('pagination.films_per_page');
        $page = $request->query('page');
        $genre = $request->query('genre');
        $status = $request->query('status', Film::STATUS_READY);
        $order_by = $request->query('order_by', Film::ORDER_BY_RELEASED);
        $order_to = $request->query('order_to', Film::ORDER_TO_DESC);

        if (Gate::denies('view-films-with-status', $status)) {
            return new FailResponse("Недостаточно прав для просмотра фильмов в статусе $status", Response::HTTP_FORBIDDEN);
        }

        $films = Film::query()
            ->when($genre, function ($query, $genre) {
                return $query->whereRelation('genres', 'name', $genre);
            })
            ->when($status, function ($query, $status) {
                return $query->where('status', $status);
            })
            ->orderBy($order_by, $order_to)
            ->paginate($pageQuantity);

        return new SuccessPaginationResponse($films);
    }

    /**
     * Добавление фильма в базу.
     *
     * @return BaseResponse
     */
    public function store(StoreFilmRequest $request)
    {
        $imdbId = $request->input('imdb_id');

        $data = [
            'imdb_id' => $imdbId,
            'status' => Film::STATUS_PENDING,
        ];

        Film::create($data);
        CreateFilmJob::dispatch($data);

        return new SuccessResponse($data, Response::HTTP_CREATED);
    }

    /**
     * Получение информации о фильме.
     *
     * @return BaseResponse
     */
    public function show(Film $film): BaseResponse
    {
        return new SuccessResponse($film);
    }

    /**
     * Редактирование фильма.
     *
     * @return BaseResponse
     */
    public function update(UpdateFilmRequest $request, Film $film): BaseResponse
    {
        $film->update($request->validated());

        if ($request->has('starring')) {
            app(ActorService::class)->syncActors($film, $request->input('starring'));
        }

        if ($request->has('genre')) {
            app(GenreService::class)->syncGenres($film, $request->input('genre'));
        }

        return new SuccessResponse($film);
    }
}
