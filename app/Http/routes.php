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
Route::get('pengguna','PenggunaController@awal');
Route::get('pengguna/tambah','PenggunaController@tambah');

Route::post('pengguna/simpan','PenggunaController@simpan');
Route::get('pengguna/edit/{pengguna}','PenggunaController@edit');
Route::post('pengguna/edit/{pengguna}','PenggunaController@update');
Route::get('pengguna/hapus/{pengguna}','PenggunaController@hapus');
Route::get('pengguna/lihat/{pengguna}','PenggunaController@lihat');

Route::get('matakuliah','MatakuliahController@awal');
Route::get('matakuliah/tambah','MatakuliahController@tambah');

Route::post('matakuliah/simpan','MatakuliahController@simpan');
Route::get('matakuliah/edit/{matakuliah}','MatakuliahController@edit');
Route::post('matakuliah/edit/{matakuliah}','MatakuliahController@update');
Route::get('matakuliah/hapus/{matakuliah}','MatakuliahController@hapus');
Route::get('matakuliah/lihat/{matakuliah}','MatakuliahController@lihat');

Route::get('ruangan','RuanganController@awal');
Route::get('ruangan/tambah','RuanganController@tambah');

Route::post('ruangan/simpan','RuanganController@simpan');
Route::get('ruangan/edit/{ruangan}','RuanganController@edit');
Route::post('ruangan/edit/{ruangan}','RuanganController@update');
Route::get('ruangan/hapus/{ruangan}','RuanganController@hapus');
Route::get('ruangan/lihat/{ruangan}','RuanganController@lihat');


Route::get('mahasiswa','MahasiswaController@awal');
Route::get('mahasiswa/tambah','MahasiswaController@tambah');

Route::post('mahasiswa/simpan','MahasiswaController@simpan');
Route::get('mahasiswa/edit/{mahasiswa}','MahasiswaController@edit');
Route::post('mahasiswa/edit/{mahasiswa}','MahasiswaController@update');
Route::get('mahasiswa/hapus/{mahasiswa}','MahasiswaController@hapus');
Route::get('mahasiswa/lihat/{mahasiswa}','MahasiswaController@lihat');


Route::get('dosen','DosenController@awal');
Route::get('dosen/tambah','DosenController@tambah');

Route::post('dosen/simpan','DosenController@simpan');
Route::get('dosen/edit/{dosen}','DosenController@edit');
Route::post('dosen/edit/{dosen}','DosenController@update');
Route::get('dosen/hapus/{dosen}','DosenController@hapus');
Route::get('dosen/lihat/{dosen}','DosenController@lihat');


Route::get('dosen_matakuliah','DosenMatakuliahController@awal');
Route::get('dosen_matakuliah/tambah','DosenMatakuliahController@tambah');

Route::post('dosen_matakuliah/simpan','DosenMatakuliahController@simpan');
Route::get('dosen_matakuliah/edit/{dosen_matakuliah}','DosenMatakuliahController@edit');
Route::post('dosen_matakuliah/edit/{dosen_matakuliah}','DosenMatakuliahController@update');
Route::get('dosen_matakuliah/hapus/{dosen_matakuliah}','DosenMatakuliahController@hapus');
Route::get('dosen_matakuliah/lihat/{dosen_matakuliah}','DosenMatakuliahController@lihat');


Route::get('jadwal_matakuliah','JadwalMatakuliahController@awal');
Route::get('jadwal_matakuliah/tambah','JadwalMatakuliahController@tambah');

Route::post('jadwal_matakuliah/simpan','JadwalMatakuliahController@simpan');
Route::get('jadwal_matakuliah/edit/{jadwal_matakuliah}','JadwalMatakuliahController@edit');
Route::post('jadwal_matakuliah/edit/{jadwal_matakuliah}','JadwalMatakuliahController@update');
Route::get('jadwal_matakuliah/hapus/{jadwal_matakuliah}','JadwalMatakuliahController@hapus');
Route::get('jadwal_matakuliah/lihat/{jadwal_matakuliah}','JadwalMatakuliahController@lihat');

Route::get('dosen/tambah','DosenController@tambah');
Route::get('dosen','DosenController@awal');

Route::get('matakuliah/tambah','MatakuliahController@tambah');
Route::get('matakuliah','MatakuliahController@awal');

Route::get('mahasiswa/tambah','MahasiswaController@tambah');
Route::get('mahasiswa','MahasiswaController@awal');

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


