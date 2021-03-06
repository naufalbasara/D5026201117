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

Route::get('tugas4', function () {
    return view('tugas4');
});


// through controller
Route::get('ets2021',"ViewController@showETS");
Route::get('tugasJS',"ViewController@showTugasJS");
Route::get('tugasHTML',"ViewController@showTugasHTML");
Route::get('tugasHTML-CSS',"ViewController@showTugasHTMLCSS");
Route::get('tugasBootstrap',"ViewController@showTugasBootstrap");
Route::get('praktikumBootstrap',"ViewController@showPraktikumBootstrap");
Route::get('praktikumJS',"ViewController@showPraktikumJS");

Route::get('greetings',"ViewController@showGreetings");
Route::post('sayhi',"ViewController@sayHi");

// pegawai
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/detail/{id}','PegawaiController@view');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');

// pendapatan pegawai
Route::get('/pendapatan','PendapatanController@index');
Route::get('/pendapatan/cari','PendapatanController@cari');
Route::get('/pendapatan/detail/{id}','PendapatanController@view');
Route::get('/pendapatan/tambah','PendapatanController@tambah');
Route::post('/pendapatan/store','PendapatanController@store');
Route::get('/pendapatan/edit/{id}','PendapatanController@edit');
Route::post('/pendapatan/update','PendapatanController@update');
Route::get('/pendapatan/hapus/{id}','PendapatanController@hapus');

// absen pegawai
Route::get('/absen','AbsenController@index');
Route::get('/absen/cari','AbsenController@cari');
Route::get('/absen/detail/{id}','AbsenController@view');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');

// Merk Kertas HVS
Route::get('/merkkertashvs','KertasController@index');
Route::get('/merkkertashvs/cari','KertasController@cari');
Route::get('/merkkertashvs/detail/{id}','KertasController@view');
Route::get('/merkkertashvs/tambah','KertasController@tambah');
Route::post('/merkkertashvs/store','KertasController@store');
Route::get('/merkkertashvs/edit/{id}','KertasController@edit');
Route::post('/merkkertashvs/update','KertasController@update');
Route::get('/merkkertashvs/hapus/{id}','KertasController@hapus');

// Karyawan (EAS)
Route::get('/karyawan1','Karyawan1Controller@index');
Route::get('/karyawan1/cari','Karyawan1Controller@cari');
Route::get('/karyawan1/tambah','Karyawan1Controller@tambah');
Route::post('/karyawan1/store','Karyawan1Controller@store');
Route::get('/karyawan1/edit/{id}','Karyawan1Controller@edit');
Route::post('/karyawan1/update','Karyawan1Controller@update');
Route::get('/karyawan1/hapus/{id}','Karyawan1Controller@hapus');

// layout
Route::get('/layout','LayoutController@index');
