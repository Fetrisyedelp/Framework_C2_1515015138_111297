<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\DosenMatakuliah;
use App\Dosen;
use App\Matakuliah;

class DosenMatakuliahController extends Controller
{
    protected $guarded = ['id'];
    protected $informasi = 'Gagal melakukan aksi';
    public function awal()
    {
        $semuaDosenMatakuliah = DosenMatakuliah::all();
        return view('dosen_matakuliah.awal', compact('semuaDosenMatakuliah'));
    }

    public function tambah()
    {
        $dosen = new Dosen;
        $matakuliah = new Matakuliah; 
        return view('dosen_matakuliah.tambah', compact('dosen','matakuliah'));
    }

    public function simpan(Request $input)
    {
        $dosen_matakuliah = new DosenMatakuliah($input->only('dosen_id','matakuliah_id'));
        if($dosen_matakuliah->save()) $this->informasi = 'Dosen Matakuliah Berhasil Disimpan';
        return redirect('dosen_matakuliah')->with(['informasi'=>$this->informasi]);
    }

public function edit($id)
{
    $dosen_matakuliah = DosenMatakuliah::find($id);
    $dosen = new Dosen;
    $matakuliah = new Matakuliah;
    return view('dosen_matakuliah.edit', compact('dosen','matakuliah','dosen_matakuliah'));
}

public function lihat($id)
{
    $dosen_matakuliah = DosenMatakuliah::find($id);
    return view('dosen_matakuliah.lihat')->with(array('dosen_matakuliah'=>$dosen_matakuliah));
}
public function update($id, Request $input)
{
    $dosen_matakuliah = DosenMatakuliah::find($id);
    $dosen_matakuliah->dosen_id=$input->dosen_id;
    $dosen_matakuliah->matakuliah_id=$input->matakuliah_id;
    $informasi=$dosen_matakuliah->save()?'Berhasil Update':'Gagal Update Data';
    // $dosen_matakuliah->fill($input->only('dosen_id','matakuliah_id'));
    // if($dosen_matakuliah->save()) $this->informasi = 'Dosen Matakuliah Berhasil Di Perbaharui';
    return redirect('dosen_matakuliah')->with(['informasi'=>$this->informasi]);
}
public function hapus($id)
{

    $dosen_matakuliah = DosenMatakuliah::find($id);
    $informasi = $dosen_matakuliah->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
    return redirect('dosen_matakuliah')->with(['informasi'=>$this->informasi]);
}
}
