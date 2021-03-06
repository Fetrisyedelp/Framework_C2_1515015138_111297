<?php

use App\Pengguna;
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
Route::get('/login','SesiController@form');
Route::post('/login','SesiController@validasi');
Route::get('/logout','SesiController@logout');
Route::get('/','SesiController@index');
Route::group(['middleware'=>'AutentifikasiUser'],function ()
{
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
// Route::get('mahasiswa','MahasiswaController@awal');
// Route::get('mahasiswa/tambah','MahasiswaController@tambah');
Route::get('mahasiswa','MahasiswaController@awal');
//Route::get('mahasiswa/{mahasiswa}','MahasiswaController@awal');
Route::get('mahasiswa/tambah','MahasiswaController@tambah');
Route::post('mahasiswa/simpan','MahasiswaController@simpan');
Route::get('mahasiswa/edit/{mahasiswa}','MahasiswaController@edit');
Route::post('mahasiswa/edit/{mahasiswa}','MahasiswaController@update');
Route::get('mahasiswa/hapus/{mahasiswa}','MahasiswaController@hapus');
Route::get('mahasiswa/lihat/{mahasiswa}','MahasiswaController@lihat');

Route::get('dosen','DosenController@awal');
//Route::get('dosen/{dosen}','dosenController@awal');
Route::get('dosen/tambah','DosenController@tambah');
Route::post('dosen/simpan','DosenController@simpan');
Route::get('dosen/edit/{dosen}','DosenController@edit');
Route::post('dosen/edit/{dosen}','DosenController@update');
Route::get('dosen/hapus/{dosen}','DosenController@hapus');
Route::get('dosen/lihat/{dosen}','DosenController@lihat');

Route::get('dosen_matakuliah','DosenMatakuliahController@awal');
//Route::get('dosen_matakuliah/{dosen_matakuliah}','dosen_matakuliahController@awal');
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

// Route::get('/a',function ()
// {
// 	return \App\DosenMatakuliah::whereHas('dosen',function($query)
// 	{
// 		$query->where('nama','like','%s%');
// 	})->with('dosen')->groupBy('dosen_id')->get();
// });
// //Route::get('ujiHas','RelationshipRebornController@ujiHas');
// Route::get('/ada_huruf_d_dan_a_dosenmatakuliah',function ()
// {
// 	return \App\DosenMatakuliah::whereHas('dosen',function($query)
// 	{
// 		$query->where('nama','like','%s%');
// 	})
// 	->orWhereHas('matakuliah',function ($kueri)
// 	{
// 		$kueri->where('title','like','%a%');
// 	})
// 	->with('dosen','matakuliah')
// 	->groupBy('dosen_id')
// 	->get();
// });
// Route::get('/ada_huruf_r_mahasiswa',function()
// {
// 	return \App\JadwalMatakuliah::whereHas('mahasiswa',function($query)
// 	{
// 		$kueri->where('nama','like','%r%');
// 	})->with('mahasiswa')->groupBy('mahasiswa_id')->get();
// });
// Route::get('/ada_huruf_s_jadwalmatakuliah',function ()
// {
// 	return \App\JadwalMatakuliah::whereHas('mahasiswa',function($query)
// 	{
// 		$query->where('nama','like','%s%');
// 	})
// 	->orWhereHas('ruangan',function ($kueri)
// 	{
// 		$kueri->where('title','like','%s%');
// 	})
// 	->with('dosen','matakuliah')
// 	->groupBy('dosen_id')
// 	->get();
});
// Route::get('ujiHas','RelationshipRebornController@ujiHas');
// Route::get('ujiDoesntHave','RelationshipRebornController@ujiDoesntHave');
// Route::get('dosen/tambah','DosenController@tambah');
// Route::get('dosen','DosenController@awal');

// Route::get('matakuliah/tambah','MatakuliahController@tambah');
// Route::get('matakuliah','MatakuliahController@awal');

// Route::get('mahasiswa/tambah','MahasiswaController@tambah');
// Route::get('mahasiswa','MahasiswaController@awal');

// Route::get('ruangan/tambah','RuanganController@tambah');
// Route::get('ruangan','RuanganController@awal');

// Route::get('pengguna/tambah','PenggunaController@tambah');
// Route::get('pengguna','PenggunaController@awal');

// });
	
// Route::get('/a', function () {
// return view('master');
// });
// Route::get('/a',function (Illuminate\Http\Request $request)
// {
// 	echo "Ini adalah request dari method get ". $request->nama;
// });

// use Illuminate\Http\Request;
// Route::get('/a',function ()
// {
// 	echo Form::open(['url'=>'/']).
// 			Form::label('nama').
// 			Form::text('nama',null).
// 			Form::submit('kirim').
// 			Form::close();
// });
// Route::post('/a',function (Request $request)
// {
// 	echo "Hasil dari form input tadi nama : ".$request->nama;
// });

// Route::get('/public', function () {
//     return('Nama saya : Fetrisye Delp Parenden');
// });
// Route::get('pengguna/{pengguna}', function ($pengguna) {
//     return "Hello World dari pengguna $pengguna";
// });
// Route::get('berita/{berita?}', function ($berita = "Laravel 5.2") {
//     return "berita $berita belum di baca";
// });