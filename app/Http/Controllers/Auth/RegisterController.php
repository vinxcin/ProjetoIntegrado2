<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'      => ['required', 'string', 'min:15', 'max:255'],
            'email'     => ['required', 'string', 'email', 'max:40', 'unique:users'],
            'password'  => ['required', 'string', 'min:8', 'confirmed'],
            'username'  => ['required', 'string', 'min:8', 'unique:users,username'],
            'check'     => ['sometimes'],
            'matricula' => ['required_with:check,on', 'max:5'],
<<<<<<< HEAD
            'cpf'       => ['required', 'integer' ,'unique:users'],
=======
            'cpf'       => ['required', 'integer', 'unique:users'],
>>>>>>> b96675e11aae52f7ba3e6b25eae7dfc9f89494e0
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name'      => $data['name'],
            'email'     => $data['email'],
            'password'  => Hash::make($data['password']),
            'username'  => $data['username'],
            'cpf'       => $data['cpf'],
            'cargo'     => $data['cargo'],
            'sede'      => $data['sede'],
            'matricula' => $data['matricula'],
            'tipo'      => $data['tipo']
        ]);
    }
}
