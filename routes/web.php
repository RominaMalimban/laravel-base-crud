<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'home'])
    ->name('home');

// rotta che mi riporta a dettagli singolo santo:
Route::get('/saint/{id}', [MainController::class, 'show']);

// rotta per eliminazione santo:
Route::get('/saint/{id}/destroy', [MainController::class, 'saintDestroy'])
    ->name('saint.destroy');
