@extends('layouts.master_navbar')

@section('title')
Create siswa
@stop

@section('content')
<h3>input data murid</h3> <br>
{!! Form::open(['route' => 'siswa.store']) !!}

    @include('siswa._form')

{!! Form::close() !!}
@stop