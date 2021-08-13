<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'      => 'required',
            'email'     => 'required|email|unique:user',
            'username'  => 'required',
            'password'  => 'min:5|required_with:confirm|same:confirm',
            'age'       => 'required',
            'confirm'   => 'min:5'
        ];
    }

    public function messages()
    {
        return [
            'name.required'          => 'Nama wajib diisi.',
            'password.required'      => 'Password wajib diisi.',
            'password.min'           => 'Password minimal diisi dengan 5 karakter.',
            'password.same'          => 'Password dan confirm harus sama',
            'username.required'      => 'Username wajib diisi.',
            'email.required'         => 'Email wajib diisi.',
            'email.email'            => 'Email tidak valid.',
            'email.unique'           => 'Email sudah terdaftar.',
            'age.required'           => 'wajib diisi.',
            'confirm.min'            => 'confirm minimal diisi dengan 5 karakter'
        ];
    }
}
