@extends('layouts.master_navbar');

@section('title')
	show murid
@stop

@section('content')
<div>
<h2>Details Murid</h2><hr>

<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Biodata Siswa</a></li>
  <li><a data-toggle="tab" href="#menu0">Detail Siswa</a></li>
  <li><a data-toggle="tab" href="#menu1">Ayah</a></li>
  <li><a data-toggle="tab" href="#menu2">Ibu</a></li>
  <li><a data-toggle="tab" href="#menu3">Hobby</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <h3>Details Biodata siswa</h3>
    
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
  </div>

  <div id="menu0" class="tab-pane fade">
    <h3>Detail Siswa</h3>
    <p>Some content in Detail Siswa.</p>
    	<form class="form-horizontal">
			<div class="form-group">
				<label class="control-label col-sm-2">Nama Panggilan</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" value="" placeholder="" disabled>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2">jenis kelamin</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" value="" placeholder="" disabled>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2">tempat lahir</label>
				<div class="col-sm-4">
					<input type="text" class="form-control " value="" placeholder="" disabled> 
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2">tanggal lahir</label>
				<div class="col-sm-4">
					<input type="text" class="form-control " value="" placeholder="" disabled> 
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2">agama</label>
				<div class="col-sm-4">
					<input type="text" class="form-control " value="" placeholder="" disabled> 
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2">golongan darah</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" value="" placeholder="" disabled>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2">anak ke</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" value="" placeholder="" disabled>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2">Jumlah saudara</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" value="" placeholder="" disabled>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2">foto</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" value="" placeholder="" disabled>
				</div>
			</div>
		</form>
    
  </div>

  <div id="menu1" class="tab-pane fade">
    <h3>Ayah</h3>
    <p>Some content in Ayah.</p>
    	<form class="form-horizontal">
    		<div class="form-group">
				<label class="control-label col-sm-2">nama ayah</label>
				<div class="col-sm-4">
					<input type="text" class="form-control " value="" placeholder="" disabled> 
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2">tempat lahir</label>
				<div class="col-sm-4">
					<input type="text" class="form-control " value="" placeholder="" disabled> 
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2">tanggal lahir</label>
				<div class="col-sm-4">
					<input type="text" class="form-control " value="" placeholder="" disabled> 
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2">agama</label>
				<div class="col-sm-4">
					<input type="text" class="form-control " value="" placeholder="" disabled> 
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2">golongan darah</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" value="" placeholder="" disabled>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2">Pekerjaan</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" value="" placeholder="" disabled>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2">No Telp</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" value="" placeholder="" disabled>
				</div>
			</div>
		</form>
  </div>

  <div id="menu2" class="tab-pane fade">
    <h3>Ibu</h3>
    <p>Some content in Ibu.</p>
    	<form class="form-horizontal">
    		<div class="form-group">
				<label class="control-label col-sm-2">nama ibu</label>
				<div class="col-sm-4">
					<input type="text" class="form-control " value="" placeholder="" disabled> 
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2">tempat lahir</label>
				<div class="col-sm-4">
					<input type="text" class="form-control " value="" placeholder="" disabled> 
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2">tanggal lahir</label>
				<div class="col-sm-4">
					<input type="text" class="form-control " value="" placeholder="" disabled> 
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2">agama</label>
				<div class="col-sm-4">
					<input type="text" class="form-control " value="" placeholder="" disabled> 
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2">golongan darah</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" value="" placeholder="" disabled>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2">Pekerjaan</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" value="" placeholder="" disabled>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2">No Telp</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" value="" placeholder="" disabled>
				</div>
			</div>
		</form>
  </div>

  <div id="menu3" class="tab-pane fade">
    <h3>Hobby</h3>
    <p>Some content in Hobby.</p>
    	<form class="form-horizontal">
    		<div class="form-group">
				<label class="control-label col-sm-2">Seni</label>
				<div class="col-sm-4">
					<input type="text" class="form-control " value="" placeholder="" disabled> 
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2">Olahraga</label>
				<div class="col-sm-4">
					<input type="text" class="form-control " value="" placeholder="" disabled> 
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2">organisasi</label>
				<div class="col-sm-4">
					<input type="text" class="form-control " value="" placeholder="" disabled> 
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2">lainnya</label>
				<div class="col-sm-4">
					<input type="text" class="form-control " value="" placeholder="" disabled> 
				</div>
			</div>
		</form>
  </div>


<a href="{{URL::previous()}}" class="btn btn-info">kembali</a>
</div>
@stop