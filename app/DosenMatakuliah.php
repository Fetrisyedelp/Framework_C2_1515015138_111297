<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DosenMatakuliah extends Model
{
    protected $table = 'dosen_matakuliah';
    // protected $fillable=['dosen_id','matakuliah_id'];

    public function dosen()
    {
        return $this->belongsTo(Dosen::class);
    }
    public function matakuliah()
    {
        return $this->belongsTo(Matakuliah::class);
    }
    // public function getNamadosenAttribute(){
    //     return $this->dosen->nama;
    // }
    // public function getNipdosenAttribute(){
    //     return $this->dosen->nip;
    // }
    // public function getTitlematakuliahAttribute(){
    //     return $this->matakuliah->title;
    // }

    public function jadwal_matakuliah()
    {
        return $this->hasMany(JadwalMatakuliah::class);
    }

    public function listDosenDanMatakuliah()
    {
    	$out = [];
    	foreach ($this->all() as $dsnMtk) {
    		$out[$dsnMtk->id] = "{$dsnMtk->dosen->nama} {$dsnMtk->dosen->nip} (Matakuliah {$dsnMtk->matakuliah->title})";
    	}
    	return $out;
    }
}
