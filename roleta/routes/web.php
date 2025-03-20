<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/girar', function () {
    return view('roleta');
});

Route::post('/', [App\Http\Controllers\FormController::class, 'atualizar'])->name('atualizar');
