<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//USUÁRIO COMUM/PARTICIPANTE
Route::get('participant/dashboard', [App\Http\Controllers\Participant\Dashboard\DashboardController::class, 'index'])
    ->name('participant.dashboard.index')
    ->middleware('auth');

Route::get('participant/agenda', [App\Http\Controllers\Participant\Dashboard\AgendaController::class, 'index'])
    ->name('participant.dashboard.agenda')
    ->middleware('auth');

Route::get('participant/certificados', [App\Http\Controllers\Participant\Dashboard\CertificadoController::class, 'index'])
    ->name('participant.dashboard.certificados')
    ->middleware('auth');

Route::get('participant/dados', [App\Http\Controllers\Participant\Dashboard\DadoController::class, 'index'])
    ->name('participant.dashboard.dados')
    ->middleware('auth');    