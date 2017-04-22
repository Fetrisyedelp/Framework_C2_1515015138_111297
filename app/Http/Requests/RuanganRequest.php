<?php
namespace App\Http\Requests;
use App\Http\Requests\Request;

class RuanganRequest extends Request
{
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		$validasi = [
		'title'=>'required',
		'username'=>'required',
		'password'=>'required'
		];
		if($this->is('ruangan/tambah')){
			$validasi['password'] ='required';
		}
		return $validasi;
	}
}