<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('jadwal_matakuliah/tambah','JadwalMatakuliahController@tambah');
Route::get('jadwal_matakuliah','JadwalMatakuliahController@awal');

Route::get('dosen_matakuliah/tambah','DosenMatakuliahController@tambah');
Route::get('dosen_matakuliah','DosenMatakuliahController@awal');

Route::get('mahasiswa/tambah','MahasiswaController@tambah');
Route::get('mahasiswa','MahasiswaController@awal');

Route::get('dosen/tambah','DosenController@tambah');
Route::get('dosen','DosenController@awal');

Route::get('matakuliah/tambah','MatakuliahController@tambah');
Route::get('matakuliah','MatakuliahController@awal');



Route::get('ruangan/tambah','RuanganController@tambah');
Route::get('ruangan','RuanganController@awal');

Route::get('pengguna/tambah','PenggunaController@tambah');
Route::get('pengguna','PenggunaController@awal');

Route::get('/', function () {
return view('welcome');
});
// Route::get('/public', function () {
//     return('Nama saya : Fetrisye Delp Parenden');
// });
// Route::get('pengguna/{pengguna}', function ($pengguna) {
//     return "Hello World dari pengguna $pengguna";
// });
// Route::get('berita/{berita?}', function ($berita = "Laravel 5.2") {
//     return "berita $berita belum di baca";
// });


