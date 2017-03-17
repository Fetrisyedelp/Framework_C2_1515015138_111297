<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Ruangan;

class RuanganController extends Controller
{
    public function awal(){
    	return "Hello dari RuanganController";
    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$ruangan = new ruangan();
    	$ruangan-> title = '411A';
    	$ruangan->save();
    	return "Ruangan dengan title {$ruangan->title} telah disimpan";
    }
}
