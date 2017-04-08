<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $table = 'matakuliah';
    protected $guarded=['id'];
    // protected $fillable=['title','keterangan'];
    public function dosen_matakuliah()
    {
    	return $this->hasMany(DosenMatakuliah::class, 'matakuliah_id');
    }
    public function listMatakuliahdanDosen()
    {
    	$out = [];
    	foreach ($this->all() as $matakuliah) {
    		$out[$matakuliah->id] = "{$matakuliah->title}";
    		# code...
    	}
    	return $out;
    }
}
