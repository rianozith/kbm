@extends('layouts.master_navbar');

@section('title')
	show murid
@stop

@section('content')
<div>
<h2>Details Murid</h2><br><hr>
<table class="table-bordered table-hover table-striped">
	<thead>
		
	</thead>
	<tbody>
		<tr>
			<td>Nama : </td>
			<td>{{$murid->nama_murid}}</td>
		</tr>
		<tr>
			<td>umur : </td>
			<td>{{$murid->umur_murid}}</td>
		</tr>
		<tr>
			<td>alamat : </td>
			<td>{{$murid->alamat_murid}}</td>
		</tr>
		<tr>
			<td>no hp : </td>
			<td>{{$murid->nohp_murid}}</td>
		</tr>
		<tr>
			<td>kelas : </td>
			<td>{{$murid->kelas_murid}}</td>
		</tr>
	</tbody>
</table>

<br><br>

<form class="form-horizontal">
	<div class="form-group">
		<label class="control-label col-sm-2">Nama Murid</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" value="{{$murid->nama_murid}}" placeholder="" disabled>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2">Umur</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" value="{{$murid->umur_murid}}" placeholder="" disabled>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2">Alamat</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" value="{{$murid->alamat_murid}}" placeholder="" disabled>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2">No HP</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" value="{{$murid->nohp_murid}}" placeholder="" disabled>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2">Kelas</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" value="{{$murid->kelas_murid}}" placeholder="" disabled>
		</div>
	</div>
</form>

<a href="{{URL::previous()}}" class="btn btn-info">kembali</a>
</div>
@stop