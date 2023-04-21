<?php

namespace App\Http\Controllers;

use App\Http\Responses\BaseResponse;
use App\Http\Responses\SuccessResponse;
use App\Http\Responses\FailResponse;

class RegisterController extends Controller
{
    /**
     * Выполняет регистрацию пользователя в сервисе
     *
     * @return BaseResponse
     */
    public function register(): BaseResponse
    {
        try {
            //
            return new SuccessResponse();
        } catch (\Exception $e) {
            return new FailResponse(null, null, $e);
        }
    }
}