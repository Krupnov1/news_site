<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrdersEdit extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'tel' => ['required', 'numeric'],
            'email' => ['required', 'email'],
            'comment' => ['required']
        ];
    }

    public function attributes(): array
    {
        return [
            'tel' => "Телефон",
            'email' => 'Электронная почта',
            'comment' => 'Комментарий'
        ];
    }
}
