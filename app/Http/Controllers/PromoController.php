<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Responses\BaseResponse;
use App\Http\Responses\SuccessResponse;
use App\Http\Responses\FailResponse;
use Symfony\Component\HttpFoundation\Response;

class PromoController extends Controller
{
    /**
     * Получение текущего промо-фильма
     *
     * @return BaseResponse
     */
    public function index(): BaseResponse
    {
        try {
            //
            return new SuccessResponse();
        } catch (\Exception $e) {
            return new FailResponse(null, null, $e);
        }
    }

    /**
     * Установка нового промо-фильма
     *
     * @return BaseResponse
     */
    public function store(Request $request): BaseResponse
    {
        if (/* проверка авторизации пользователя */) {
            return new FailResponse('Необходима авторизация', Response::HTTP_UNAUTHORIZED);
        }

        try {
            //
            return new SuccessResponse();
        } catch (\Exception $e) {
            return new FailResponse(null, null, $e);
        }
    }
}
