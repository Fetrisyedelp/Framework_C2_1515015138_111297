<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalMatakuliah extends Model
{
    protected $table = 'jadwal_matakuliah';
    protected $fillable=['mahasiswa_id','ruangan_id','dosen_matakuliah_id'];

     public function Mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }
    public function Ruangan()
    {
        return $this->belongsTo(Ruangan::class);
    }

    public function Dosen_Matakuliah()
    {
        return $this->belongsTo(Dosen_Matakuliah::class);
    }

    public function getNamadsnAttribute(){
        return $this->dosen_matakuliah->dosen->nama;
    }
    public function getNipdsnAttribute(){
        return $this->dosen_matakuliah->dosen->nip;
    }
    public function getMKdsnAttribute(){
        return $this->dosen_matakuliah->matakuliah->title;
    }
    
    public function getNamamhsAttribute(){
        return $this->mahasiswa->nama;
    }

    public function getNimAttribute(){
        return $this->mahasiswa->nim;
    }
    public function getTitleruanganAttribute(){
        return $this->ruangan->title;
    }
}
