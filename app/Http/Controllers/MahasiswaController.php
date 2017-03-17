<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function awal()
    {
        return "Hello dari MahasiswaController";
    }
    public function tambah()
    {
        return $this->simpan();
    }
    public function simpan()
    {
        $mahasiswa = new Mahasiswa();
        $mahasiswa->nama = 'Fetrisye Delp P';
        $mahasiswa->nim = '19971211';
        $mahasiswa->alamat = 'Balikpapan';
        $mahasiswa->pengguna_id = 1;
        $mahasiswa->save();
        return "Mahasiswa dengan nama {$mahasiswa->nama}, nim {$mahasiswa->nim}, alamat {$mahasiswa->alamat} dan dengan id pengguna {$mahasiswa->pengguna_id} telah disimpan";
    }
}
