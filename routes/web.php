<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Admin\HomeController;

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
    Route::get('dashboard', [HomeController::class, 'getDashboardPage'])->name('get.admin.dashboard.page');
});
