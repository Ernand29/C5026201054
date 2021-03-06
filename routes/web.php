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

Route::get('praktikum2', function () {
    return view('htmlprak2');
});

Route::get('tugas4', function () {
    return view('htmltugas4');
});


Route::get('ets', "ViewController@ets");
Route::get('showTugasphp',"ViewController@showTugasphp") ;
Route::post('resultTugasphp',"ViewController@resultTugasphp");

//CRUD
Route::get('/pegawai','PegawaiController@index');//lihat
Route::get('/pegawai/tambah','PegawaiController@tambah');//add
Route::post('/pegawai/store','PegawaiController@store');//simpan
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/view/{id}','PegawaiController@detail');

//CRUD Tugas
Route::get('/tugas','TugasController@index');
Route::get('/tugas/tambah','TugasController@tambah');
Route::post('/tugas/store','TugasController@store');
Route::get('/tugas/edit/{id}','TugasController@edit');
Route::post('/tugas/update','TugasController@update');
Route::get('/tugas/hapus/{id}','TugasController@hapus');

//route CRUD absen
Route::get('/absen','AbsenController@indexabsen');
Route::get('/absen/add','AbsenController@add');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');

//CRUD Buku
Route::get('/buku','BukuController@index');//lihat
Route::get('/buku/tambah','BukuController@tambah');//add
Route::post('/buku/store','BukuController@store');//simpan
Route::get('/buku/edit/{id}','BukuController@edit');
Route::post('/buku/update','BukuController@update');
Route::get('/buku/hapus/{id}','BukuController@hapus');
Route::get('/buku/cari','BukuController@cari');
Route::get('/buku/view/{id}','BukuController@detail');

//CRUD Karyawan 1
Route::get('/karyawan1','Karyawan1Controller@index');//lihat
Route::get('/karyawan1/edit/{id}','Karyawan1Controller@edit');
Route::post('/karyawan1/update','Karyawan1Controller@update');
Route::get('/karyawan1/view/{id}','Karyawan1Controller@detail');
