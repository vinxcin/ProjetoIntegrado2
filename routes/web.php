<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\{
    LoginController,
    RegisterController
};

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// ROTAS DE TESTE ATUALZIADAS PELO GUILHERME 08/12 15:42
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

Route::get('register', [RegisterController::class, 'create'])->name('auth.register.create');
Route::post('register', [RegisterController::class, 'store'])->name('auth.register.store');

//-----------------------------------------------------------------------------------------


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


 //USUÁRIO ADMINISTRADOR

Route::get('administrador/dashboard', [App\Http\Controllers\Administrador\DashboardController::class, 'index'])
    ->name('administrador.index')
    ->middleware('auth');

Route::get('administrador/agenda', [App\Http\Controllers\Administrador\AgendaController::class, 'index'])
    ->name('administrador.agenda')
    ->middleware('auth');

Route::get('administrador/certificados', [App\Http\Controllers\Administrador\CertificadoController::class, 'index'])
    ->name('administrador.certificados')
    ->middleware('auth');

Route::get('administrador/dados', [App\Http\Controllers\Administrador\DadoController::class, 'index'])
    ->name('administrador.dados')
    ->middleware('auth');