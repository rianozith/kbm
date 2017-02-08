@extends('layouts.master_navbar')

@section('title')
Input Pengajar
@stop

@section('content')
<h3>input data Pengajar</h3> <br>
{!! Form::open(['url' => 'pengajar_index']) !!}
    <div class="form-group">
    	{!! Form::label('nama_pengajar', 'Nama Pengajar') !!}
    	{!! Form::text('nama_pengajar', null, [
    		'class'=>'form-control input-lg', 
    		'placeholder'=>'Nama Pengajar']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('nohp_pengajar', 'No Hp') !!}
        {!! Form::text('nohp_pengajar', null, [
            'class'=>'form-control input-lg', 
            'placeholder'=>'No Hp']) !!}
    </div>
{!! Form::close() !!}

@stop