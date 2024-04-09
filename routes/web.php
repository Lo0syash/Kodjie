<?php

use App\Http\Controllers\AuthController;
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

Route::controller(\App\Http\Controllers\IndexController::class)->group(function () {
   Route::get('/', 'index')->name('index.index');
   Route::get('/about', 'about')->name('index.about');
   Route::get('/how', 'how')->name('index.how');
   Route::get('/admin', 'admin')->name('index.admin');
});

Route::controller(AuthController::class)->group(function () {
   Route::get('/auth', 'login')->name('auth.index');
   Route::post('/auth', 'auth')->name('auth.auth');
   Route::get('/reg', 'registration')->name('registration.index');
   Route::post('/reg', 'reg')->name('registration.reg');
   Route::get('/profile', 'profile')->name('profile.index');
   Route::post('/logout', 'logout')->name('profile.logout');
});

Route::controller(\App\Http\Controllers\CatalogController::class)->group(function () {
    Route::get('/catalog', 'index')->name('category.index');
    Route::get('/oneitem', 'oneitem')->name('oneitem.index');
});

Route::controller(\App\Http\Controllers\ProductContoller::class)->prefix('product')->group(function (){
    Route::get('/create', 'create')->name('product.create');
    Route::get('/{product}/edit', 'edit')->name('product.edit');
    Route::post('/', 'store')->name('store');
});

Route::controller(\App\Http\Controllers\CategoryContoller::class)->prefix('category')->group(function (){
    Route::get('/create', 'create')->name('category.create');
    Route::get('/{category}/edit', 'edit')->name('category.edit');
//    Route::post('/', 'store')->name('store');
});
