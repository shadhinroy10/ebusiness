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

Route::get('/category', [App\Http\Controllers\forntend\CategoryController::class,'index'])->name('web.category.index');

Route::get('category/{slug}', [App\Http\Controllers\forntend\CategoryController::class,'show'])->name('web.category.show');

Route::get('product',[App\Http\Controllers\forntend\ProductController::class, 'index'])->name('web.product.index');

Route::get('product/{slug}',[App\Http\Controllers\forntend\ProductController::class, 'show'])->name('web.product.show');

//auth

Route::get('login', [App\Http\Controllers\forntend\AuthController::class, 'showLoginForm'])->name('user.login');

Route::post('login', [App\Http\Controllers\forntend\AuthController::class, 'login'])->name('user.login.submit');

Route::get('logout', [App\Http\Controllers\forntend\AuthController::class, 'logout'])->name('user.logout');


Route::get('register', [App\Http\Controllers\forntend\AuthController::class, 'showRegisterForm'])->name('user.register');

Route::post('register', [App\Http\Controllers\forntend\AuthController::class, 'register'])->name('user.register.submit');

Route::get('profile', [App\Http\Controllers\forntend\ProfileController::class, 'index'])->name('user.profile');

//order

Route::get('order/{slug}', [App\Http\Controllers\forntend\OrderController::class, 'index'])->name('order.index');

Route::post('order', [App\Http\Controllers\forntend\OrderController::class, 'order'])->name('order.submit');

Route::get('confirm/order',[App\Http\Controllers\forntend\OrderController::class, 'confirm'])->name('order.confirm');

Route::prefix('admin')->group(function () {


    Route::get('/', [App\Http\Controllers\backend\HomeController::class, 'index'])->name('admin.dashboard');

    Route::get('login', [App\Http\Controllers\backend\LoginController::class, 'showLoginForm'])->name('login');

    Route::post('login',[App\Http\controllers\backend\LoginController::class, 'login'])->name('login.submit');

    Route::post('logout',[App\Http\Controllers\backend\LoginController::class, 'logout'])->name('logout');

    Route::resource('category', App\Http\Controllers\backend\CategoryController::class);

    Route::resource('product', App\Http\Controllers\backend\ProductController::class);

    Route::get('notification/{id}',[App\Http\Controllers\backend\NotificationController::class, 'show'])->name('notification.show');

    Route::get('order',[App\Http\Controllers\backend\Ordercontroller::class, 'index'])->name('admin.order.index');

    Route::get('order/{id}', [App\Http\Controllers\backend\Ordercontroller::class, 'show'])->name('admin.order.show');
});
