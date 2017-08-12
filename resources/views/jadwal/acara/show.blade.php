@extends('layouts.master_navbar');

@section('title')
	show acara
@stop

@section('content')
<div>
<h2>Details acara</h2><br><hr>


<br><br>

<form class="form-horizontal">
	<div class="form-group">
		<label class="control-label col-sm-2">Nama acara:</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" value="{{$acara->nama_kegiatan}}" placeholder="" disabled>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2">tanggal : </label>
		<div class="col-sm-4">
			<input type="text" class="form-control" value="{{$acara->tanggal_kegiatan}}" placeholder="" disabled>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2">jam : </label>
		<div class="col-sm-4">
			<input type="text" class="form-control" value="{{$acara->jam_kegiatan}}" placeholder="" disabled>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2">tempat :</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" value="{{$acara->tempat_kegiatan}}" placeholder="" disabled>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2">Guru id </label>
		<div class="col-sm-4">
			<input type="text" class="form-control" value="{{$acara->guru_id}}" placeholder="" disabled>
		</div>
	</div>
</form>

<a href="{{URL::previous()}}" class="btn btn-info">kembali</a>
</div>
@stop


