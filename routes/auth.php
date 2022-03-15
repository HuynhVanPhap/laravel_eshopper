<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Admin\AuthController;

Route::prefix('admin')->group(function () {
    Route::get('register', [AuthController::class, 'getRegisterPage'])->name('get.admin.register.page');
    Route::post('register', [AuthController::class, 'handleRegister'])->name('handle.admin.register');
});
