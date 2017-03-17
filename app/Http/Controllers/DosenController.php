<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen;

class DosenController extends Controller
{
    public function awal()
    {
        return "Hello dari DosenController";
    }
    public function tambah()
    {
        return $this->simpan();
    }
    public function simpan()
    {
        $dosen = new Dosen();
        $dosen->nama = 'Tasik Somba, S.Kom';
        $dosen->nip = '19960624';
        $dosen->alamat = 'Samarinda';
        $dosen->pengguna_id = 1;
        $dosen->save();
        return "Dosen dengan nama {$dosen->nama}, nip {$dosen->nip}, alamat {$dosen->alamat} dan dengan id pengguna {$dosen->pengguna_id} telah disimpan";
    }
}
