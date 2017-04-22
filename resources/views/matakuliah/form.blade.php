<div class="form-group">
	<label class="col-sm-2 control-label">Nama Matakuliah</label>
	<div class="col-sm-10">
		{!! Form::text('title',null,['class'=>'form-control','placeholder'=>"Masukan nama matakuliah"]) !!}	
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Keterangan</label>
	<div class="col-sm-10">
		{!! Form::text('keterangan',null,['class'=>'form-control','placeholder'=>"Masukan keterangan"]) !!}	
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" >Username</label>
	<div class="col-sm-10">
		{!! Form::text('username',null,['class'=>'form-control','placeholder'=>"Username"]) !!}	
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" >Password</label>
	<div class="col-sm-10">
		{!! Form::password('password',['class'=>'form-control','placeholder'=>"Password"]) !!}	
	</div>
</div>