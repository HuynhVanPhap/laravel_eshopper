<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Admin\AuthController;

Route::prefix('admin')->group(function () {
    Route::middleware('guest:admin')->group(function () {
        Route::controller(AdminAuth::class)->group(function () {
            Route::get('register', 'getRegisterPage')->name('get.admin.register.page');
            Route::post('register', 'handleRegister')->name('handle.admin.register');
            Route::get('login', 'getLoginPage')->name('get.admin.login.page');
            Route::post('login', 'handleLogin')->name('handle.admin.login');
            Route::get('logout', 'handleLogOut')->name('handle.admin.logout')
                ->withoutMiddleware('guest:admin')
                ->middleware('auth.verify:admin');
        });
    });
});
