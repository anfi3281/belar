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

Route::get('/', 'FootnoteController@index');
Route::get('/hapus/{ft}', 'FootnoteController@hapus');
Route::get('/{jenis}/{penulis}', 'FootnoteController@indexpenulis');
Route::get('/edit/{jenis}/{penulis}/{ft}', 'FootnoteController@tampiledit');
Route::post('/kelola', 'FootnoteController@kelola');
