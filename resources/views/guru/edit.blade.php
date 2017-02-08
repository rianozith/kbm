@extends('layouts.master_navbar')

@section('title')
Edit Guru
@stop

@section('content')
<h3>Edit data Guru</h3> <br> <hr>

{!! Form::model($guru,['route' => ['guru.update', $guru], 'method' => 'PUT']) !!}

    @include('guru._form')

{!! Form::close() !!}
@stop