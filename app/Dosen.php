<?php

namespace App;

use Illuminate\database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosen';
    protected $fillable=['nama','nip','alamat'];
    // protected $guarded=['id'];
	public function pengguna()
    {
    	return $this->belongsTo(Pengguna::class);
    }

    public function getUsernameAttribute()
    {
        return $this->pengguna->username;
    }


    public function dosen_matakuliah()
    {
    	return $this->hasMany(DosenMatakuliah::class,'dosen_matakuliah_id');
    }
    public function listDosenDanNip(){
        $out = [];
        foreach ($this->all() as $dosen) {
            $out[$dosen->id] = "{$dosen->nama} ({$dosen->nip})";
        }
        return $out;
    }
}
