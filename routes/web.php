<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/search', [CustomerController::class, 'index'])->name('search.form');

Route::post('/search', [CustomerController::class, 'search'])->name('search');