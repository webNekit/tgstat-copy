<?php

use App\Http\Controllers\ChanelController;
use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\Route;

Route::middleware(SetLocale::class)->group(function() {
    Route::get('/', function () {
        return view('home');
    })->name('home');
    // Route::get('/chanel', function () {
    //     return view('chanel');
    // })->name('chanel');
    Route::get('/chanels/{chanel}', [ChanelController::class, 'show'])->name('chanel');
});