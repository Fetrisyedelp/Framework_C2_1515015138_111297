<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\DosenMatakuliah;

class DosenMatakuliahController extends Controller
{
    public function awal()
    {
        return "Hello dari DosenMahasiswaController";
    }
    public function tambah()
    {
        return $this->simpan();
    }
    public function simpan()
    {
        $dosen_matakuliah = new DosenMatakuliah();
        $dosen_matakuliah->dosen_id = 8;
        $dosen_matakuliah->matakuliah_id = 1;
        $dosen_matakuliah->save();
        return "Dosen matakuliah dengan dosen {$dosen_matakuliah->dosen_id} dan {$dosen_matakuliah->matakuliah_id} telah disimpan";
    }
}
