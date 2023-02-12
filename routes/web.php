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

Route::get('nyoba', 'NyobaController@index');
Route::get('pd', 'PassingDataController@index');
Route::get('rd', 'RequestDataController@index');
Route::post('/rd/submit', 'RequestDataController@submit');
Route::get('blog', 'BlogController@index');
Route::get('/blog/tentang', 'BlogController@tentang');
Route::get('/blog/kontak', 'BlogController@kontak');
Route::get('pegawai', 'PegawaiController@index');
Route::get('/nama/{name}', 'NameController@index');
Route::get('file', 'FileController@index');

Route::get('return', function(){
    return view('return');
});
Route::get('control', 'ControlController@index');
Route::get('/control/{nama}', 'ControlController@control');
Route::get('buku', 'bukuController@index');
Route::post('/buku/cek', 'bukuController@cek');
Route::get('datasiswa', 'DatasiswaController@index');
