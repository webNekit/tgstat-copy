<?php

use App\Http\Controllers\ChanelController;
use App\Http\Controllers\MessagesController;
use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\Route;

Route::middleware(SetLocale::class)->group(function() {
    Route::get('/', function () {
        return view('home');
    })->name('home');
    Route::get('/chanels/{chanel}', [ChanelController::class, 'show'])->name('chanel');
    Route::get('/messages', [MessagesController::class, 'index'])->name('message.index');
    Route::get('/messages/{message}', [MessagesController::class, 'show'])->name('message.show');
});