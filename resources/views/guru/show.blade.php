@extends('layouts.master_navbar')

@section('title')
Show Guru
@stop

@section('content')
<h2>Detail Guru</h2>
<br><hr>
<form class="form-horizontal">
	<div class="form-group">
		<label class="control-label col-sm-2">ID :</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" value="{{$guru->id}}" placeholder="" disabled>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2">Nama :</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" value="{{$guru->nama_guru}}" placeholder="" disabled>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2">No HP :</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" value="{{$guru->nohp_guru}}" placeholder="" disabled>
		</div>
	</div>
</form>

<a href="{{URL::previous()}}" type="button" class="btn btn-info btn-md">kembali</a>
@stop