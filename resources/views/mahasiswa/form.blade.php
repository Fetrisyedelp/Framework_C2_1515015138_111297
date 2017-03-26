<div class="form-group">
	<label class="col-sm-2 control-label" id="nama">Nama Mahasiswa</label>
	<div class="col-sm-10">
		{!! Form::text('nama',null,['class'=>'form-control','id'=>'nama','placeholder'=>"Nama"]) !!}	
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" id="nim">NIM</label>
	<div class="col-sm-10">
		{!! Form::text('nim',null,['class'=>'form-control','id'=>'nim','placeholder'=>"NIM"]) !!}	
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="alamat">Alamat</label>
	<div class="col-sm-10">
		{!! Form::textarea('alamat',null,['class'=>'form-control','id'=>'alamat','placeholder'=>"Alamat"]) !!}	
	</div>
