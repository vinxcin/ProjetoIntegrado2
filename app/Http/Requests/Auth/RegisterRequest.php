<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'user.name'           => 'required',
            'user.email'          => ['required', 'email'],
            'user.username'       => ['required', 'size:12'],
            'user.cpf'            => 'required',
            'user.password'       => ['required', 'min:8'],
            'phones.0.number'     => ['required', 'size:14'],
            'phones.1.number'     => ['required', 'size:15'],
            'address.cep'         => ['required', 'size:2'],
            'address.uf'          => 'required',
            'address.cidade'      => 'required',
            'address.rua'         => 'required',
            'address.numero'      => ['required', 'numeric', 'integer'],
            'address.bairro'      => 'required',
            'address.complemento' => ['nullable', 'max:25'],

            'user.matricula' => ['nullable', 'numeric', 'max:6'],
        ];
    }
}
