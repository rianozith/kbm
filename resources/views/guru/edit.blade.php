@extends('layouts.master_navbar')

@section('title')
Edit siswa
@stop

@section('content')
<h3>Edit data murid</h3> <br>
{!! Form::open(['url' => 'siswa.update']) !!}

    @include('siswa._form')

{!! Form::close() !!}
@stop