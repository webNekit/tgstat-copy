<?php

use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\Route;

Route::middleware(SetLocale::class)->group(function() {
    Route::get('/', function () {
        return view('home');
    })->name('home');
    Route::get('/chanel', function () {
        return view('chanel');
    })->name('chanel');
});