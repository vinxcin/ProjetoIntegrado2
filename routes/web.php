<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


// ROTAS DE TESTE ATUALIZADAS PELO GUILHERME 08/12 15:42
Route::group(['as' => 'auth.'], function() {
    Route::group(['middleware' => 'guest'], function(){
        Route::get('register', [RegisterController::class, 'create'])->name('register.create');
        Route::post('register', [RegisterController::class, 'store'])->name('register.store');
    });
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/register', [RegisterController::class, 'create'])->name('auth.register.create');
Route::post('register', [RegisterController::class, 'store'])->name('auth.register.store');

//-----------------------------------------------------------------------------------------

//USUÁRIO COMUM/PARTICIPANTE


Route::group(['as' => 'auth.'], function() {
    Route::group(['middleware' => 'guest'], function(){
        Route::get('participant/dashboard', [App\Http\Controllers\Participant\Dashboard\DashboardController::class, 'index'])
            ->name('participant.dashboard.index');

        Route::get('participant/agenda', [App\Http\Controllers\Participant\Dashboard\AgendaController::class, 'index'])
            ->name('participant.dashboard.agenda');

        Route::get('participant/certificados', [App\Http\Controllers\Participant\Dashboard\CertificadoController::class, 'index'])
            ->name('participant.dashboard.certificados');

        Route::get('participant/dados', [App\Http\Controllers\Participant\Dashboard\DadoController::class, 'index'])
            ->name('participant.dashboard.dados');
    });
});

 //USUÁRIO ADMINISTRADOR

 Route::group(['as' => 'auth.'], function() {
    Route::group(['middleware' => 'guest'], function(){
        Route::get('administrador/dashboard', [App\Http\Controllers\Administrador\DashboardController::class, 'index'])
            ->name('administrador.index');

        Route::get('administrador/agenda', [App\Http\Controllers\Administrador\AgendaController::class, 'index'])
            ->name('administrador.agenda');

        Route::get('administrador/certificados', [App\Http\Controllers\Administrador\CertificadoController::class, 'index'])
            ->name('administrador.certificados');

        Route::get('administrador/dados', [App\Http\Controllers\Administrador\DadoController::class, 'index'])
            ->name('administrador.dados');

        //Sessão de eventos
            Route::get('administrador/events', [App\Http\Controllers\Administrador\EventController::class, 'index'])
            ->name('administrador.events');

            Route::get('administrador/events/create', [App\Http\Controllers\Administrador\EventController::class, 'create'])
            ->name('administrador.create');

            Route::post('events', [App\Http\Controllers\Administrador\EventController::class, 'store'])->name('events.store');
    });
});
