<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Http\Responses\BaseResponse;
use App\Http\Responses\FailResponse;
use App\Http\Responses\SuccessResponse;
use App\Models\Comment;
use App\Models\Film;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class CommentController extends Controller
{
    /**
     * Получение отзывов к фильму.
     *
     * @return BaseResponse
     */
    public function index(Film $film): BaseResponse
    {
        $comments = $film->comments()->get();
        return new SuccessResponse($comments);
    }

    /**
     * Добавление отзыва к фильму.
     *
     * @return BaseResponse
     */
    public function store(CommentRequest $request, Film $film): BaseResponse
    {
        /** @var User|null $user */
        $user = Auth::user();

        $comment = $film->comments()->create([
            'comment_id' => $request->get('comment_id', null),
            'text' => $request->input('text'),
            'rating' => $request->input('rating'),
            'user_id' => $user->id,
        ]);

        $film->calculateRating();

        return new SuccessResponse($comment);
    }

    /**
     * Редактирование отзыва к фильму.
     *
     * @return BaseResponse
     */
    public function update(CommentRequest $request, Comment $comment): BaseResponse
    {
        if (Gate::denies('comment-edit', $comment)) {
            return new FailResponse('Недостаточно прав.', Response::HTTP_FORBIDDEN);
        }

        $comment->update([
            'text' => $request->input('text'),
            'rating' => $request->input('rating'),
        ]);

        $film = $comment->film;
        $film->calculateRating();

        return new SuccessResponse($comment);
    }

    /**
     * Удаление отзыва к фильму.
     *
     * @return BaseResponse
     */
    public function destroy(Request $request, Comment $comment): BaseResponse
    {
        if (Gate::denies('comment-delete', $comment)) {
            return new FailResponse('Недостаточно прав.', Response::HTTP_FORBIDDEN);
        }

        $comment->children()->delete();
        $comment->delete();

        $film = $comment->film;
        $film->calculateRating();

        return new SuccessResponse(null, Response::HTTP_NO_CONTENT);
    }
}
