@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifique o seu e-mail') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Um link de verificação foi enviado para o seu e-mail.') }}
                        </div>
                    @endif

                    {{ __('Antes de continuar, verifique o link de verificação no seu e-mail.') }}
                    {{ __('Não recebeu o link de verificação?') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Clique aqui para nós reenviarmos o link de verificação') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
