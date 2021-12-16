@extends('layouts.admin')
@section('title')
    <h1 style="text-align:center">Meus Dados</h1>
    <br>
@endsection
@section('content')

                <!------------------------------------------------ CARD ALTERAR MEUS DADOS --------------------------------------------------------->
                        <div class="card text-black bg-primary mb-4 border-primary" style="max-width: 40rem;text-align:center;margin:auto">
                            <div class="card-header"><h4>ALTERAR MEUS DADOS</h4></div>
                            <div class="card-body text-white" >
                <!------------------------------------------------ NOME COMPLETO DO USUÁRIO --------------------------------------------------------->                    
                                <div class="form-group row">
                                    <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Nome') }}</label>
                                    <div class="col-md-7">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                <!------------------------------------------------ NOME DO USUÁRIO ---------------------------------------------------------> 
                                <div class="form-group row">
                                    <label for="username" class="col-md-3 col-form-label text-md-right">{{ __('Nome de Usuário') }}</label>
                                    <div class="col-md-7">
                                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                                        @error('username') = "error error";
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                <!------------------------------------------------ EMAIL ---------------------------------------------------------> 
                                <div class="form-group row">
                                    <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('E-Mail') }}</label>
                                    <div class="col-md-7">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                 </div>
                                 
                <!------------------------------------------------ TRABALHA NA PREFEITURA --------------------------------------------------------->        
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="checkbox" name="check">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Trabalha na prefeitura?
                                </label>
                            </div>

                            <div id="checkVal" class="row my-2 mx-1 py-2 border rounded" style="display: none;">
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
                            
                            </div>
                                
                <!------------------------------------------------ BOTÃO SALVAR ALTERAÇÕES ---------------------------------------------------------> 
                            <!-- <input class="btn btn-outline-primary" type="submit" value="Submit" style='background:#f8f9fc;color: #5a5c69'> -->
                            <button class="btn btn-primary" type="submit"style='background:#f8f9fc;color: #5a5c69;margin-top:1rem'>Salvar Alterções</button>
                            </div>
                        </div>



                <!------------------------------------------------ ALTERAR SENHA ---------------------------------------------------------> 
                        <div class="card text-black bg-primary mb-4 border-primary" style="max-width: 40rem;text-align:center;margin:auto">
                            <div class="card-header"><h4>ALTERAR SENHA</h4></div>
                            <div class="card-body text-white">
                <!------------------------------------------------ SENHA ATUAL ---------------------------------------------------------> 
                                <div class="form-group row">
                                    <label for="password" class="col-md-3 col-form-label text-md-right">{{ __('Senha Atual') }}</label>
                                    <div class="col-md-7">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
            <!------------------------------------------------ NOVA SENHA --------------------------------------------------------->
                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-3 col-form-label text-md-right">{{ __('Nova Senha') }}</label>
                                    <div class="col-md-7">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <!------------------------------------------------CONFIRMAR NOVA SENHA --------------------------------------------------------->
                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-3 col-form-label text-md-right">{{ __('Confirmar Nova Senha') }}</label>
                                    <div class="col-md-7">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                            <button class="btn btn-primary" type="submit"style='background:#f8f9fc;color: #5a5c69'>Salvar Nova Senha</button>

                            </div>
                        </div>

                             <!-- <div class="form-group row">
                                <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Cargo') }}</label>

                                <div class="col-md-4">
                                    <input id="name" type="text" class="form-control @error('cargo') is-invalid @enderror" name="cargo" value="{{ old('cargo') }}" required autocomplete="cargo" autofocus>

                                    @error('cargo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Sede') }}</label>

                                <div class="col-md-4">
                                    <input id="name" type="text" class="form-control @error('sede') is-invalid @enderror" name="sede" value="{{ old('cargo') }}" required autocomplete="sede" autofocus>

                                    @error('sede')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('matricula') }}</label>

                                <div class="col-md-4">
                                    <input id="name" type="text" class="form-control @error('matricula') is-invalid @enderror" name="matricula" value="{{ old('matricula') }}" required autocomplete="matricula" autofocus>

                                    @error('matricula')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('cpf') }}</label>

                                <div class="col-md-4">
                                    <input id="name" type="text" class="form-control @error('cpf') is-invalid @enderror" name="cpf" value="{{ old('cpf') }}" required autocomplete="cpf" autofocus>

                                    @error('cpf')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('tipo') }}</label>

                                <div class="col-md-4">
                                    <input id="name" type="text" class="form-control @error('tipo') is-invalid @enderror" name="tipo" value="{{ old('tipo') }}" required autocomplete="tipo" autofocus>

                                    @error('tipo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div> -->




    
@endsection