<?php

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
    return view('admin/index');
});

Route::resource('kelola_pengguna', 'PenggunaController');
Route::resource('kelola_acara', 'AcaraController');
Route::get('/admin/absen/detail/{id}','AbsenController@show');
Route::delete('/admin/hapus_absen/{id_acara}/{id_pengguna}','AbsenController@destroy');
Route::get('/admin/absen','AbsenController@index');

