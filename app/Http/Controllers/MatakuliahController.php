<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Matakuliah;
use App\Pengguna;
use App\DosenMatakuliah;
use App\Http\Requests\MatakuliahRequest;

class MatakuliahController extends Controller
{
    protected $informasi = 'Gagal melakukan aksi';
    public function awal()
    {
        $semuaMatakuliah = Matakuliah::all();
        return view('matakuliah.awal',compact('semuaMatakuliah'));
    }

    public function tambah()
    {
        return view('matakuliah.tambah');
    }

    public function simpan(MatakuliahRequest $input)
    {
            $matakuliah = new Matakuliah;
            $matakuliah->title = $input->title;
            $matakuliah->keterangan = $input->keterangan;
            $informasi = $matakuliah->save()?'Berhasil simpan data' : 'Gagal simpan data';
        return redirect('matakuliah')->with(['informasi'=>$this->informasi]);
    }
public function edit($id)
{
    $matakuliah = Matakuliah::find($id);
    return view('matakuliah.edit')->with(array('matakuliah'=>$matakuliah));
}
public function lihat($id)
{
    $matakuliah = Matakuliah::find($id);
    return view('matakuliah.lihat')->with(array('matakuliah'=>$matakuliah));
}
public function update($id, MatakuliahRequest $input)
{
    $matakuliah = Matakuliah::find($id);
    $pengguna = $matakuliah->pengguna;
    $matakuliah->title = $input->title;
    $matakuliah->keterangan = $input->keterangan;
    $informasi=$matakuliah->save()? 'Berhasil simpan data' : 'Gagal simpan data';
    return redirect('matakuliah')->with(['informasi'=>$informasi]);
}

public function hapus($id)
{
    $matakuliah = Matakuliah::find($id);
    $informasi = $matakuliah->delete()? 'Berhasil hapus data' : 'Gagal hapus data';
    return redirect('matakuliah')->with(['informasi'=>$this->informasi]);
}
}

