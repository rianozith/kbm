@extends('layouts.master_navbar')

@section('title')
Create siswa
@stop

@section('content')
<h3>input acara</h3> <br>
{!! Form::open(['route' => 'acara.store']) !!}

    @include('jadwal.acara._form')

{!! Form::close() !!}
@stop