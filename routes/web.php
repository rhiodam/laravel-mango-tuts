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
Route::get('/pegawai/tambah', 'PegawaiController@tambah');
Route::post('/pegawai/store', 'PegawaiController@store');
Route::get('/pegawai/edit/{id}', 'PegawaiController@edit');
Route::put('/pegawai/update/{id}', 'PegawaiController@update');
Route::get('/pegawai/hapus/{id}', 'PegawaiController@delete');

Route::get('/pegawai/cetak_pdf', 'PegawaiController@cetak_pdf');


Route::resource('pegawai','PegawaiController');

Route::resource('pengguna','PenggunaController');

Route::resource('anggota','AnggotaController');

Route::resource('artikel','ArtikelController');

Route::resource('siswa','SiswaController');

Route::resource('sessiontest','SessiontestController');

Route::resource('gambar','GambarController');

Route::get('gambar/upload', 'GambarController@upload');
Route::post('gambar/upload/proses', 'GambarController@proses_upload');
Route::get('gambar/upload/hapus/{id}', 'GambarController@hapus');


Route::resource('guru','GuruController');
Route::get('/guru/hapus/{id}', 'GuruController@hapus');
Route::get('/guru/trash', 'GuruController@trash');
Route::get('/guru/kembalikan/{id}', 'GuruController@kembalikan');
Route::get('/guru/kembalikan_semua', 'GuruController@kembalikan_semua');
Route::get('/guru/hapus_permanen/{id}', 'GuruController@hapus_permanen');

Route::get('/enkripsi/', 'UtilitiesController@enkripsi');

Route::get('/data/', 'UtilitiesController@data');
Route::get('/data/{data_rahasia}', 'UtilitiesController@data_proses');

Route::get('/hash', 'UtilitiesController@hash');


//Route::get('/artikel', 'WebController@index');
//Route::get('/artikel', 'ArtikelController@index');

Route::get('/upload', 'UploadController@upload');
Route::post('/upload/proses', 'UploadController@proses_upload');

Route::get('/session/tampil','SessiontestController@tampilkanSession');
Route::get('/session/buat','SessiontestController@buatSession');
Route::get('/session/hapus','SessiontestController@hapusSession');

Route::get('/pesan','NotifController@index');
Route::get('/pesan/sukses','NotifController@sukses');
Route::get('/pesan/peringatan','NotifController@peringatan');
Route::get('/pesan/gagal','NotifController@gagal');


//Route::get('/userr','UserrController@index');

Route::get('/sendemail','TestController@index');

Route::get('/siswa', 'SiswaController@index');
Route::get('/siswa/export_excel', 'SiswaController@export_excel');
