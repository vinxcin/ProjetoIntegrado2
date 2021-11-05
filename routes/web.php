<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('participant/dashboard', [App\Http\Controllers\Participant\Dashboard\DashboardController::class, 'index'])->name('participant.dashboard.index');