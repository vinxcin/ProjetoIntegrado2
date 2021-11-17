@extends('layouts.app')

@section('content')

<div class="bg-gradient-primary">

    <div class="container-fluid" style="height: 94vh;">
        <!-- Nested Row within Card Body -->
        <div class="row justify-content-center pt-5">
            <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
            <div class="card" style="width: 50%; height:100%; background-color:white;">
                <div class="col-lg-7 mt-5">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Crie uma conta!</h1>
                        </div>
                        <form class="user" method="POST" action=" {{ route('register') }} ">
                            @csrf

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Nome completo" name="name">
                                </div>

                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Username" name="username">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="E-mail" name="email">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Senha" name="password">
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="exampleRepeatPassword password-confirm" placeholder="Repita a sua senha" required autocomplete="new-password" name="password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" style=" width: 100%; border-radius: 20px;">
                                {{ __("Crie a sua conta")}}
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="{{ route('login') }}">Já tem uma conta? Entre!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
