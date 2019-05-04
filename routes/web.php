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
    return view('welcome');
});

Route::get('/pegawai', 'PegawaiController@index');

//Route::resource('pegawai','PegawaiController');

Route::resource('pengguna','PenggunaController');
Route::resource('artikel','WebController');


Route::resource('guru','GuruController');
Route::get('/guru/hapus/{id}', 'GuruController@hapus');
Route::get('/guru/trash', 'GuruController@trash');

Route::get('/enkripsi/', 'UtilitiesController@enkripsi');

Route::get('/data/', 'UtilitiesController@data');
Route::get('/data/{data_rahasia}', 'UtilitiesController@data_proses');

Route::get('/hash', 'UtilitiesController@hash');


Route::get('/artikel', 'WebController@index');