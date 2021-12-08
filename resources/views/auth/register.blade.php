@extends('layouts.app')

@section('content')
<div class="bg-gradient-primary" style="height: 120vh;">

    <h1 class="text-center pt-4">Criar conta</h1>

    <div class="card shadow my-3 w-75 mx-auto">
        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Nome"
                                name="name"
                            >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input
                                type="email"
                                class="form-control"
                                placeholder="E-mail"
                                name="email"
                            >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input
                                type="text"
                                class="form-control"
                                placeholder="CPF"
                                name="cpf"
                            >
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Nome de usuário"
                                name="username"
                            >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input
                                id="password"
                                type="password"
                                placeholder="Coloque a sua senha"
                                class="form-control @error('password') is-invalid @enderror"
                                name="password" required autocomplete="new-password"
                            >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <input
                            id="password-confirm"
                            type="password"
                            class="form-control"
                            placeholder="Confirme a sua senha"
                            name="password_confirmation" required autocomplete="new-password"
                        >
                    </div>

                    <div><hr/></div>

                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checkbox" name="check">
                            <label class="form-check-label" for="flexCheckChecked">
                                Trabalha na prefeitura?
                            </label>
                        </div>
                    </div>

                    <div></div>

                    <div id="checkVal" class="mt-4" style="display: none;">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input
                                    id="name"
                                    placeholder="Matricula"
                                    type="text"
                                    class="form-control @error('matricula') is-invalid @enderror"
                                    name="matricula"
                                    value="{{ old('matricula') }}" autofocus>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <select class="form-select" name="cargo" aria-label="Default select example" >
                                    <option selected>Cargo</option>
                                    <option value="Agente administrativo">Agente administrativo</option>
                                    <option value="Professor">Professor</option>
                                    <option value="Assistente">Assistente adminstrativo</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <select class="form-select" name="sede" aria-label="Default select example" >
                                    <option selected>Sede</option>
                                    <option value="SEDUC">SEDUC</option>
                                    <option value="Escola">Escola</option>
                                    <option value="SDS">Secretaria da Saúde</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <select class="form-select" name="tipo" aria-label="Default select example" >
                                    <option selected>Tipo</option>
                                    <option value="Administrador">Administrador</option>
                                    <option value="Participante">Participante</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary col-md-12 mt-3 rounded">
                            {{ __('Cadastrar') }}
                        </button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>


@endsection
