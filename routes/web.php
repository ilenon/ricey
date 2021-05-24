<?php

use App\Http\Controllers\Admin\AuthController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    /** Formulários de Login */
    Route::get('/', [AuthController::class, 'loginPage'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('dologin');

    /** Rotas Protegidas */
    Route::middleware('auth')->group(function () {
        /** Dashboard Home */
        Route::get('/home', [AuthController::class, 'home'])->name('home');
    });

    /** LOGOUT */
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});
