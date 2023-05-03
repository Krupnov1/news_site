<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Orders extends FormRequest
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
            'tel' => "Номер телефона",
            'email' => 'Email - адрес',
            'comment' => 'Что Вы хотите получить?'
        ];
    }
}
