<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
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



Auth::routes();
Route::get('/home', [App\Http\Controllers\ProductsController::class, 'index'])->name('home');


Route::group(['Middleware' => 'auth'], function () {
    Route::get('/myOrders', [App\Http\Controllers\ProductsController::class, 'myOrders'])->name('myOrders');
    Route::get('/items/{cat}', [App\Http\Controllers\ProductsController::class, 'item'])->name('items');
    Route::get('/removeCart/{id}', [App\Http\Controllers\ProductsController::class, 'removeCart'])->name('removeCart');
    Route::get('/cart', [App\Http\Controllers\ProductsController::class, 'cart'])->name('cart');
    Route::get('/orderNow', [App\Http\Controllers\ProductsController::class, 'orderNow'])->name('orderNow');
    Route::get('/userImage', [App\Http\Controllers\Auth\imageController::class, 'uploadImage'])->name('uploadImage');

    Route::post('/orderPlace', [App\Http\Controllers\ProductsController::class, 'orderPlace'])->name('orderPlace');
    Route::post('/add_to_cart', [App\Http\Controllers\ProductsController::class, 'add_to_cart'])->name('add_to_cart');
    Route::post('/userImage/upload', [App\Http\Controllers\Auth\imageController::class, 'userImage'])->name('userImage');
});


Route::group(['Middleware' => ['admin', 'auth']],  function () {
    Route::get('/upload', [App\Http\Controllers\admin\AdminController::class, 'upload'])->middleware('admin')->name('upload');
    Route::get('/dashboard', [App\Http\Controllers\admin\AdminController::class, 'dashboard'])->middleware('admin')->name('dashboard');
    Route::post('/product/store', [App\Http\Controllers\admin\AdminController::class, 'store'])->middleware('admin')->name('store');
});
Route::get('/details/{id}', [App\Http\Controllers\ProductsController::class, 'details'])->name('details');

Route::get('/', [App\Http\Controllers\ProductsController::class, 'index'])->name('product');
Route::get('/search', [App\Http\Controllers\ProductsController::class, 'search'])->name('search');
