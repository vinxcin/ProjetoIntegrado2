<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\{User, Address};
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\RegisterRequest;


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
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name'      => ['required', 'string', 'min:15', 'max:255'],
    //         'email'     => ['required', 'string', 'email', 'max:40', 'unique:users'],
    //         'password'  => ['required', 'string', 'min:8', 'confirmed'],
    //         'username'  => ['required', 'string', 'min:8', 'unique:users,username'],
    //         'check'     => ['sometimes'],
    //         'matricula' => ['required_with:check,on', 'max:5'],
    //     ]);
    // }


    public function create() {
        return view('auth.register');
    }

    public function store(RegisterRequest $request) {

        $requestData = $request->all();

        $resquestData['user']['tipo'] = 'participant';

        $user = User::create($requestData['user']);

        $user->address()->create($requestData['address']); // cadastro do endereço do usuário a partir do relacionamento

        foreach($requestData['phones'] as $phone){
            $user->phones()->create($phone);
        }
    }
    // /**
    //  * Create a new user instance after a valid registration.
    //  *
    //  * @param  array  $data
    //  * @return \App\Models\User
    //  */
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name'      => $data['name'],
    //         'email'     => $data['email'],
    //         'password'  => Hash::make($data['password']),
    //         'username'  => $data['username'],
    //         'cpf'       => $data['cpf'],
    //         'cargo'     => $data['cargo'],
    //         'sede'      => $data['sede'],
    //         'matricula' => $data['matricula'],
    //         'tipo'      => $data['tipo']
    //     ]);
    // }
}
