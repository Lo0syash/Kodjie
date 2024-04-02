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

Route::controller(\App\Http\Controllers\IndexController::class)->group(function () {
   Route::get('/', 'index')->name('index.index');
   Route::get('/about', 'about')->name('index.about');
});

Route::controller(\App\Http\Controllers\CatalogController::class)->group(function () {
   Route::get('/catalog', 'index')->name('catalog.index');
});