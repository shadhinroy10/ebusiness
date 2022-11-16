<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\forntend\HomeController::class,'index'])->name('home');

Route::get('/about', [App\Http\Controllers\forntend\AboutController::class,'index'])->name('about');

Route::get('/category', [App\Http\Controllers\forntend\CategoryController::class,'index'])->name('category');

Route::prefix('admin')->group(function () {


    Route::get('/', [App\Http\Controllers\backend\HomeController::class, 'index'])->name('admin.dashboard');

    Route::get('login', [App\Http\Controllers\backend\LoginController::class, 'showLoginForm'])->name('login');

    Route::post('login',[App\Http\controllers\backend\LoginController::class, 'login'])->name('login.submit');

    Route::post('logout',[App\Http\Controllers\backend\LoginController::class, 'logout'])->name('logout');

    Route::resource('category', App\Http\Controllers\backend\CategoryController::class);

    Route::resource('product', App\Http\Controllers\backend\ProductController::class);
});
