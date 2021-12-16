@extends('layouts.app')

@section('content')
<div class="bg-gradient-primary" style="height: 180vh;">

    <h1 class="text-center pt-4">Criar conta</h1>

    <div class="card shadow my-3 w-75 mx-auto">
        <div class="card-body">
            <form method="POST" action="{{ route('auth.register.store') }}">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <input
                                type="text"
                                class="form-control {{ $errors->has('user.name') ? 'is-invalid' : '' }}"
                                placeholder="Nome"
                                name="user[name]"
                                value="{{ old('user.name') }}"
                            >
                            <div class="invalid-feedback">{{ $errors->first('user.name') }}</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input
                                type="email"
                                class="form-control {{ $errors->has('user.email') ? 'is-invalid' : '' }}"
                                placeholder="E-mail"
                                name="user[email]"
                                value="{{ old('user.email') }}"
                            >
                            <div class="invalid-feedback">{{ $errors->first('user.email') }}</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input
                                type="text"
                                class="form-control cpf {{ $errors->has('user.cpf') ? 'is-invalid' : '' }}"
                                placeholder="CPF"
                                name="user[cpf]"
                                value="{{ old('user.cpf') }}"
                            >
                            <div class="invalid-feedback">{{ $errors->first('user.cpf') }}</div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input
                                type="text"
                                class="form-control {{ $errors->has('user.username') ? 'is-invalid' : '' }}"
                                placeholder="Nome de usuário"
                                name="user[username]"
                                value="{{ old('user.username') }}"
                            >
                            <div class="invalid-feedback">{{ $errors->first('user.username') }}</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input
                                id="password"
                                type="password"
                                placeholder="Coloque a sua senha"
                                class="form-control {{ $errors->has('user.password') ? 'is-invalid' : '' }}"
                                name="user[password]"
                            >
                            <div class="invalid-feedback">{{ $errors->first('user.password') }}</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <input
                            id="password-confirm"
                            type="password"
                            class="form-control"
                            placeholder="Confirme a sua senha"
                            name="user[password_confirmation]"
                        >
                    </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <input
                                    type="text"
                                    name="phones[0][number]"
                                    class="form-control tel {{ $errors->has('phones.0.number') ? 'is-invalid' : '' }}"
                                    placeholder="Telefone"
                                    value="{{ old('phones.0.number') }}"
                                >
                                <div class="invalid-feedback">{{ $errors->first('phones.0.number') }}</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input
                                    type="text"
                                    name="phones[1][number]"
                                    class="form-control cel {{ $errors->has('phones.1.number') ? 'is-invalid' : '' }}"
                                    placeholder="Celular"
                                    value="{{ old('phones.1.number') }}"
                                >
                                <div class="invalid-feedback">{{ $errors->first('phones.1.number') }}</div>
                            </div>
                        </div>


                    <div><hr/></div>

                    <div class="row mt-4">
                        <div class="col-md-3">
                            <div class="form-group">
                                <input
                                    type="text"
                                    id="cep"
                                    name="address[cep]"
                                    class="form-control cep {{ $errors->has('address.cep') ? 'is-invalid' : '' }}"
                                    placeholder="CEP"
                                    value="{{ old('address.cep') }}"
                                >
                                <div class="invalid-feedback">{{ $errors->first('address.cep') }}</div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <input
                                    type="text"
                                    id="uf"
                                    name="address[uf]"
                                    class="form-control uf {{ $errors->has('address.uf') ? 'is-invalid' : '' }}"
                                    placeholder="UF"
                                    value="{{ old('address.uf') }}"
                                >
                                <div class="invalid-feedback">{{ $errors->first('address.uf') }}</div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <input
                                    type="text"
                                    id="cidade"
                                    name="address[cidade]"
                                    class="form-control {{ $errors->has('address.cidade') ? 'is-invalid' : '' }}"
                                    placeholder="Cidade"
                                    value="{{ old('address.cidade') }}"
                                >
                                <div class="invalid-feedback">{{ $errors->first('address.cidade') }}</div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input
                                    type="text"
                                    id="rua"
                                    name="address[rua]"
                                    class="form-control {{ $errors->has('address.rua') ? 'is-invalid' : '' }}"
                                    placeholder="Logradouro"
                                    value="{{ old('address.rua') }}"
                                >
                                <div class="invalid-feedback">{{ $errors->first('address.rua') }}</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <input
                                    type="text"
                                    name="address[numero]"
                                    class="form-control {{ $errors->has('address.numero') ? 'is-invalid' : '' }}"
                                    placeholder="Número"
                                    value="{{ old('address.numero') }}"
                                >
                                <div class="invalid-feedback">{{ $errors->first('address.numero') }}</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input
                                    type="text"
                                    id="bairro"
                                    name="address[bairro]"
                                    class="form-control {{ $errors->has('address.bairro') ? 'is-invalid' : '' }}"
                                    placeholder="Bairro"
                                    value="{{ old('address.bairro') }}"
                                >
                                <div class="invalid-feedback">{{ $errors->first('address.bairro') }}</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input
                                    type="text"
                                    name="address[complemento]"
                                    class="form-control {{ $errors->has('address.complemento') ? 'is-invalid' : '' }}"
                                    placeholder="Complemento"
                                    value="{{ old('address.complemento') }}"
                                >
                                <div class="invalid-feedback">{{ $errors->first('address.complemento') }}</div>
                            </div>
                        </div>
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
                                    class="form-control @error('user.matricula') is-invalid @enderror"
                                    name="user[matricula]"
                                    value="{{ old('user.matricula') }}" autofocus>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <select class="form-select" name="user[cargo]" aria-label="Default select example" >
                                    <option selected>Cargo</option>
                                    <option value="Agente administrativo">Agente administrativo</option>
                                    <option value="Professor">Professor</option>
                                    <option value="Assistente">Assistente adminstrativo</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <select class="form-select" name="user[sede]" aria-label="Default select example" >
                                    <option selected>Sede</option>
                                    <option value="SEDUC">SEDUC</option>
                                    <option value="Escola">Escola</option>
                                    <option value="SDS">Secretaria da Saúde</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <select class="form-select" name="user[tipo]" aria-label="Default select example" >
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
