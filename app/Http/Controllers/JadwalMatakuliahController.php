<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\JadwalMatakuliah;
use App\Mahasiswa;
use App\DosenMatakuliah;
use App\Ruangan;

class JadwalMatakuliahController extends Controller
{
    protected $guarded = ['id'];
    protected $informasi = 'Gagal Melakukan Aksi';
    public function awal()
    {
        $semuaJadwalMatakuliah = JadwalMatakuliah::all();
        return view('jadwal_matakuliah.awal', compact('semuaJadwalMatakuliah'));
    }
    public function tambah()
    {
        $mahasiswa = new Mahasiswa;
        $ruangan = new Ruangan;
        $dosen_matakuliah = new DosenMatakuliah;
        return view('jadwal_matakuliah.tambah', compact('mahasiswa','dosen_matakuliah','ruangan'));
    }
    public function simpan(Request $input)
    {
        $jadwal_matakuliah = new JadwalMatakuliah($input->only('ruangan_id','dosen_matakuliah_id','mahasiswa_id'));
        // $jadwal_matakuliah->mahasiswa_id = $input->mahasiswa_id;
        // $jadwal_matakuliah->ruangan_id = $input->ruangan_id;
        // $jadwal_matakuliah->dosen_matakuliah_id = $input->dosen_matakuliah_id;
        // $informasi = $jadwal_matakuliah->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
        if ($jadwal_matakuliah->save()) $this->informasi = 'Jadwal Matakuliah Berhasil Di Simpan';
        return redirect('jadwal_matakuliah')->with(['informasi'=>$this->informasi]);
    }

public function edit($id)
{
    $jadwal_matakuliah = JadwalMatakuliah::find($id);
    $mahasiswa = new Mahasiswa;
    $ruangan = new Ruangan;
    $dosen_matakuliah = new DosenMatakuliah;
    return view('jadwal_matakuliah.edit', compact('mahasiswa','ruangan','dosen_matakuliah','jadwal_matakuliah'));
}
public function lihat($id)
{
    $jadwal_matakuliah = JadwalMatakuliah::find($id);
    return view('jadwal_matakuliah.lihat')->with(array('jadwal_matakuliah'=>$jadwal_matakuliah));
}
public function update($id, Request $input)
{
    $jadwal_matakuliah = JadwalMatakuliah::find($id);
    $jadwal_matakuliah->fill($input->only('ruangan_id', 'dosen_matakuliah_id','mahasiswa_id'));       
    if ($jadwal_matakuliah->save()) $this->informasi = "Jadwal Mahasiswa Berhasil di perbaharui";
    return redirect('jadwal_matakuliah')->with(['informasi' =>$this->informasi]);
    }

public function hapus($id)
{
    $jadwal_matakuliah = JadwalMatakuliah::find($id);
    if ($jadwal_matakuliah->delete()) $this->informasi = "Jadwal Mahasiswa Berhasil di Hapus";
    return redirect('jadwal_matakuliah')->with(['informasi'=>$this->informasi]);
}
}
