<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'home'])
    ->name('home');

// rotta con dettagli singolo santo:
Route::get('/saint/show/{id}', [MainController::class, 'show'])
    ->name('saint.show'); 

// rotta per eliminazione santo:
Route::get('/saint/destroy/{id}', [MainController::class, 'saintDestroy'])
    ->name('saint.destroy');

// rotta per creazione nuovo santo:
Route::get('/saint/create/', [MainController::class, 'saintCreate'])
    ->name('saint.create');

Route::post('/saint/store', [MainController::class, 'saintStore'])
    ->name('saint.store');