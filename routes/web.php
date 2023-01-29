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

Route::get('/', function () {
    return view('welcome');
});

Route::get('blog', '\App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', '\App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', '\App\Http\Controllers\BlogController@kontak');
