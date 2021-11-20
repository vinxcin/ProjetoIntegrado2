@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Você está logado!') }}
                </div>
<<<<<<< HEAD
                <br>
=======
>>>>>>> a2003e709812b9c9a4163d3a411ad51f034f17b5
            </div>
        </div>
    </div>
</div>
@endsection
