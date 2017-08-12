@extends('layouts.master_navbar')

@section('title')
Edit Guru
@stop

@section('content')
<h3>Edit data Guru</h3> <br> <hr>
<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Biodata Guru</a></li>
  <li><a data-toggle="tab" href="#menu0">Detail Guru</a></li>
  
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <h3>Edit Biodata Guru</h3>
		{!! Form::model($guru,['route' => ['guru.update', $guru], 'method' => 'PUT']) !!}

		    @include('guru._form')

		{!! Form::close() !!}
  </div>
  <div id="menu0" class="tab-pane fade">
    <h3>Detail Guru</h3>
    <p>Some content in Detail Guru.</p>
    <ul>
    	<li>Alamat</li>
    	<li>jenis kelamin</li>
    	<li>golongan darah</li>
    	<li>ttl</li>
    	<li>foto</li>
    	<li>Status Guru</li>
    </ul>
  </div>

@stop