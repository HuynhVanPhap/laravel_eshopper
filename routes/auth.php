<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Admin\AuthController as AdminAuth;

Route::prefix('admin')->group(function () {
    Route::get('register', [AdminAuth::class, 'getRegisterPage'])->name('get.admin.register.page');
    Route::post('register', [AdminAuth::class, 'handleRegister'])->name('handle.admin.register');
    Route::get('login', [AdminAuth::class, 'getLoginPage'])->name('get.admin.login.page');
    Route::post('login', [AdminAuth::class, 'handleLogin'])->name('handle.admin.login');
});
