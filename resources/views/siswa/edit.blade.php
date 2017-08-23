@extends('layouts.master_navbar')

@section('title')
Edit siswa
@stop

@section('content')
<h3>Edit data murid</h3> <br>

<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Biodata Siswa</a></li>
  <li><a data-toggle="tab" href="#menu0">Detail Siswa</a></li>
  <li><a data-toggle="tab" href="#menu1">Ayah</a></li>
  <li><a data-toggle="tab" href="#menu2">Ibu</a></li>
  <li><a data-toggle="tab" href="#menu3">Hobby</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <h3>Edit Bio data siswa</h3>
    {!! Form::model($student, ['route' => ['siswa.update', $student->id], 'method'=>'PUT'])!!} 

    @include('siswa._form')

	  {!! Form::close() !!}
  </div>
  <div id="menu0" class="tab-pane fade">
    <h3>Detail Siswa</h3>
    <p>Some content in Detail Siswa.</p>

    {!! Form::model($student, ['route' => ['siswadetail.update', $student->id], 'method'=>'PUT'])!!} {{-- laravel colelctive? --}}

    @include('siswa._form_details')

    {!! Form::close() !!}
    
  </div>
  <div id="menu1" class="tab-pane fade">
    <h3>Ayah</h3>
    <p>Some content in Ayah.</p>
    <ul>
    	<li>nama</li>
    	<li>ttl</li>
    	<li>agama</li>
    	<li>pekerjaan</li>
    	<li>no telp</li>
    </ul>
  </div>
  <div id="menu2" class="tab-pane fade">
    <h3>Ibu</h3>
    <p>Some content in Ibu.</p>
    <ul>
    	<li>nama</li>
    	<li>ttl</li>
    	<li>agama</li>
    	<li>pekerjaan</li>
    	<li>no telp</li>
    </ul>
  </div>
  <div id="menu3" class="tab-pane fade">
    <h3>Hobby</h3>
    <p>Some content in Hobby.</p>
    <ul>
    	<li>Seni</li>
    	<li>olahraga</li>
    	<li>organisasi</li>
    	<li>lainnya</li>
    </ul>
  </div>
</div>



@stop