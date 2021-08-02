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
            'username'  => 'required|unique:user',
            'password'  => 'min:5|required_with:confirm|same:confirm',
            'confirm'   => 'required'
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
            'username.unique'        => 'Username sudah terdaftar.',
            'email.required'         => 'Email wajib diisi.',
            'email.email'            => 'Email tidak valid.',
            'email.unique'           => 'Email sudah terdaftar.',
            'confirm.required'       => 'confirm wajib diisi'
        ];
    }
}
