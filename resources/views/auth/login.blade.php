@extends('layouts.app')

@section('content')

<div class="bg-gradient-primary">

    <div class="container-fluid" style="height: 94vh;">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
                            <div class="col-lg-6 d-none d-lg-block">
                                 <img src="{{ asset('img/logo.png') }}" width="100%" height="100%" />
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login</h1>
                                    </div>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <!-- <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div> -->

                                        <div class="form-group row">
                                            <label for="username" class="col-md-5 col-form-label text-md-right">{{ __('Nome de Usuário') }}</label>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-user form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus id="exampleInputEmail" aria-describedby="emailHelp" placeholder="username">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="col-md-5 col-form-label text-md-right">{{ __('Senha') }}</label>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="senha" name="password">
                                                </div>

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-6 offset-md-4">
                                                <div class="form-check">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck" {{ old('remember') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="customCheck">
                                                        {{ __('Remember Me') }}
                                                    </label>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-10 offset-md-2">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Entrar') }}
                                                </button>

                                                @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Esqueceu sua senha?') }}
                                                </a>
                                                @endif
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
@endsection
