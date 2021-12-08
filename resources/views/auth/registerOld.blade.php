@extends('layouts.app')

@section('content')
<div class="bg-gradient-primary" style="height: 94vh;">

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-body">
                    <div class="card-header"  style="background: #c3c3c3;"> <h3>{{ __('Cadastrar') }}</h3></div>

                    <div class="card-body" style='background:white;color:black'>
                        <!-- <form method="POST" action="{{ route('register') }}"> -->
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Nome de Usuário') }}</label>

                                <div class="col-md-6">
                                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                    @error('username') = "error error";
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirme a Senha') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>


                            <!-- <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioDisabled" disabled>
                                <label class="form-check-label" for="flexRadioDisabled">
                                    Disabled radio
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioCheckedDisabled" checked disabled>
                                <label class="form-check-label" for="flexRadioCheckedDisabled">
                                    Disabled checked radio
                                </label>
                            </div> -->

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('CPF') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('cpf') is-invalid @enderror" name="cpf" value="{{ old('cpf') }}" required autocomplete="cpf" autofocus>

                                    @error('cpf')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="checkbox" name="check">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Trabalha na prefeitura?
                                </label>
                            </div>


                            <div id="checkVal" class="row my-2 mx-1 py-2 border rounded" style="display: none;">

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Matricula') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('matricula') is-invalid @enderror" name="matricula" value="{{ old('matricula') }}" autofocus>

                                        @error('matricula')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Cargo') }}</label>

                                    <div class="col-md-6">
                                        <select class="form-select" name="cargo" aria-label="Default select example">
                                            <option selected></option>
                                            <option value="Agente administrativo">Agente administrativo</option>
                                            <option value="Professor">Professor</option>
                                            <option value="Assistente">Assistente adminstrativo</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Sede') }}</label>

                                    <div class="col-md-6">
                                        <select class="form-select" name="sede" aria-label="Default select example">
                                            <option selected></option>
                                            <option value="SEDUC">SEDUC</option>
                                            <option value="Escola">Escola</option>
                                            <option value="SDS">Secretaria da Saúde</option>
                                        </select>

                                        @error('sede')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('TIPO') }}</label>

                                    <div class="col-md-6">

                                        <select class="form-select" name="tipo" aria-label="Default select example">
                                            <option selected></option>
                                            <option value="1">Não sei</option>
                                            <option value="2">Sei lá</option>
                                            <option value="3">Ainda não sei</option>
                                        </select>

                                        @error('tipo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Cadastrar') }}
                                        </button>
                                    </div>
                            </div>
                        </form>
                    </div>



                </div>


            </div>
        </div>
    </div>
</div>

@endsection
