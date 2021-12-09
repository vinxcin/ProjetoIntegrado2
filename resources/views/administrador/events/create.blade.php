@extends('layouts.panel')
@section('title', 'Novo evento')
@section('content')
    <form action="" method="POST" autocomplete="off">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input
                        type="text"
                        class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                        id="name"
                        name="name"
                        value="{{ old('name') }}"
                    >
                    <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="speaker_name">Nome do palestrante</label>
                    <input
                        type="text"
                        class="form-control {{ $errors->has('speaker_name') ? 'is-invalid' : '' }}"
                        id="speaker_name"
                        name="speaker_name"
                        value="{{ old('speaker_name') }}"
                    >
                    <div class="invalid-feedback">{{ $errors->first('speaker_name') }}</div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="start_date">Data de início</label>
                    <input
                        type="text"
                        class="form-control date {{ $errors->has('start_date') ? 'is-invalid' : '' }}"
                        id="start_date"
                        name="start_date"
                        value="{{ old('start_date') }}"
                    >
                    <div class="invalid-feedback">{{ $errors->first('start_date') }}</div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="end_date">Data de fim</label>
                    <input
                        type="text"
                        class="form-control date {{ $errors->has('end_date') ? 'is-invalid' : '' }}"
                        id="end_date"
                        name="end_date"
                        value="{{ old('end_date') }}"
                    >
                    <div class="invalid-feedback">{{ $errors->first('end_date') }}</div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="participants_limit">Limite de participantes</label>
                    <input
                        type="number"
                        class="form-control {{ $errors->has('participants_limit') ? 'is-invalid' : '' }}"
                        id="participants_limit"
                        name="participants_limit"
                        min="1"
                        value="{{ old('participants_limit') }}"
                    >
                    <div class="invalid-feedback">{{ $errors->first('participants_limit') }}</div>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="target_audience">Público alvo</label>
                    <textarea
                        class="form-control {{ $errors->has('target_audience') ? 'is-invalid' : '' }}"
                        id="target_audience"
                        name="target_audience"
                        rows="3"
                    >{{ old('target_audience') }}</textarea>
                    <div class="invalid-feedback">{{ $errors->first('target_audience') }}</div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success mt-2">Salvar</button>
    </form>
@endsection