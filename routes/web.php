<?php

use App\Http\Controllers\Web\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/providers/{provider}', [
    AuthController::class,
    'redirect',
])->name('auth.providers.redirect');

Route::get('/auth/providers/{provider}/callback', [
    AuthController::class,
    'callback',
])->name('auth.providers.callback');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('home');
    })->name('dashboard');
});
