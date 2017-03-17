<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DosenMatakuliah extends Model
{
    protected $table = 'dosen_matakuliah';
    protected $fillable=['dosen_id','matakuliah_id'];
}
