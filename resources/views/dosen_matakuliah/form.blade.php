<div class="form-group">
	<label class="col-sm-2 control-label" >Dosen</label>
		<div class="col-sm-10">
		{!! Form::select('dosen_id',$dosen->listDosenDanNip(),null,['class'=>'form-control','id' => 'dosen_id','placeholder'=>"dosen"]) !!}
	</div>	
</div>

<div class="form-group">
		<label class="col-sm-2 control-label" >Matakuliah</label>
	<div class="col-sm-10">
		{!! Form::select('matakuliah_id',$matakuliah->listMatakuliahdanDosen('title','id'),null,['class'=>'form-control','id' => 'matakuliah_id','placeholder'=>"matakuliah"]) !!}
	</div>
</div>
<!-- <div class="form-group">
	<label class="col-sm-2 control-label" id="nim">NIM</label>
	<div class="col-sm-10">
		{!! Form::text('username',null,['class'=>'form-control','placeholder'=>"Username"]) !!}	
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="alamat">Alamat</label>
	<div class="col-sm-10">
		{!! Form::password('password',['class'=>'form-control','placeholder'=>"Password"]) !!}	
	</div>
</div> -->