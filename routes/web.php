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

Route::get('/halo', function () {
    return 'Halo teman-teman';
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('coba', function () {
    return view('coba');
});

Route::get('testing', function () {
    return "Ini Testing";
});

Route::get('halo', function () {
    return view('halo');
});

Route::get('hy', function () {
    return "hy juga";
});

Route::get('/siswa/{nama}/{kelas}', 'App\Http\Controllers\SiswaController@index');
Route::get('pegawai', 'App\Http\Controllers\PegawaiController@index');
Route::get('dosen', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\BiodataController@index');
Route::get('/name/{nama}', 'App\Http\Controllers\NameController@index');
Route::get('/biodata2/{kelas}', 'App\Http\Controllers\Biodata2Controller@index');
Route::get('/input', 'App\Http\Controllers\InputController@formulir');
Route::post('input/proses', 'App\Http\Controllers\InputController@proses');

Route::get('inputdata', 'App\Http\Controllers\InputDataController@form');
Route::post('inputdata/proses', 'App\Http\Controllers\InputDataController@proses');
