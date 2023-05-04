<?php

namespace App\Http\Requests;

use App\Models\Film;
use Illuminate\Foundation\Http\FormRequest;

class FilmRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'page' => 'nullable|integer|min:1',
            'genre' => 'nullable|string|exists:genres,name',
            'status' => 'nullable|string|in:' . implode(',', [
                Film::STATUS_READY,
                Film::STATUS_PENDING,
                Film::STATUS_MODERATE]
            ),
            'order_by' => 'nullable|string|in:' . implode(',', [
                Film::ORDER_BY_RELEASED,
                Film::ORDER_BY_RATING
            ]),
            'order_to' => 'nullable|string|in:' . implode(',', [
                Film::ORDER_TO_ASC,
                Film::ORDER_TO_DESC
            ]),
        ];
    }
}
