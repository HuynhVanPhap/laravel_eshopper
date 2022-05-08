<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Admin\HomeController;
use App\Http\Controllers\Web\Admin\CategoryController;
use App\Http\Controllers\Web\Admin\BrandController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('admin')->group(function () {
    Route::middleware('auth.verify:admin')->group(function () {
        Route::get('/', [HomeController::class, 'getDashboardPage'])->name('get.admin.home.page');
        Route::get('dashboard', [HomeController::class, 'getDashboardPage'])->name('get.admin.dashboard.page');
        Route::resource('categories', CategoryController::class);
        Route::resource('brands', BrandController::class);

        # -------------- XMLRequest ------------------ #
        Route::get('brand/toggle/display/{brand}', [BrandController::class, 'toggleDisplay'])->name('put.admin.brand.toggle.display');
    });
});
