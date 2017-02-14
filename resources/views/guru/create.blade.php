@extends('layouts.master_navbar')

@section('title')
Create Guru
@stop

@section('content')
<h3>input data Guru</h3> <br>
{!! Form::open(['route' => 'guru.store']) !!}

    @include('guru._form')

{!! Form::close() !!}
@stop