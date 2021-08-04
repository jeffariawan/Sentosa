<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'username'  => 'required',
            'password'  => 'min:5|required'
        ];
    }

    public function messages()
    {
        return [
            'password.required'      => 'Password wajib diisi.',
            'password.min'           => 'Password minimal diisi dengan 5 karakter.',
            'username.required'      => 'Username wajib diisi.'
        ];
    }
}
