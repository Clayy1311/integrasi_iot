<?php

use App\Http\Controllers\API\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('proses.login');

Route::middleware('auth')->group(function () {

    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});
