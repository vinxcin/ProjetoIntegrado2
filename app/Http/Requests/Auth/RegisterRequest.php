<?php
namespace App\Http\Requests\Auth;
use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Cpf;

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
            'user.email'          => ['required', 'email', 'unique:users,email'],
            'user.username'       => ['required', 'max:15', 'min:10', 'unique:users,username'],
            'user.cpf'            => ['required', new Cpf, 'unique:users,cpf'],
            'user.password'       => ['required', 'min:8', 'confirmed'],
            'phones.0.number'     => ['required', 'size:14'],
            'phones.1.number'     => ['required', 'size:15'],
            'address.cep'         => 'required',
            'address.uf'          => ['required', 'size:2'],
            'address.cidade'      => 'required',
            'address.rua'         => 'required',
            'address.numero'      => ['required', 'numeric', 'integer'],
            'address.bairro'      => 'required',
            'address.complemento' => ['nullable', 'max:25'],
            'user.matricula' => ['nullable', 'numeric', 'max:6'],
        ];
    }

    public function attributes() {
        return [
            'user.name'           => 'nome',
            'user.email'          => 'e-mail',
            'user.username'       => 'nome de usuário',
            'user.cpf'            => 'CPF',
            'user.password'       => 'senha',
            'phones.0.number'     => 'telefone',
            'phones.1.number'     => 'celular',
            'address.cep'         => 'CEP',
            'address.uf'          => 'UF',
            'address.cidade'      => 'cidade',
            'address.rua'         => 'logradouro',
            'address.numero'      => 'número',
            'address.bairro'      => 'bairro',
            'address.complemento' => 'complemento',

            'user.matricula'      => 'matrícula',
        ];
    }
}
