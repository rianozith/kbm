@extends('layouts.master_navbar')

@section('title')
Edit siswa
@stop

@section('content')
<h3>Edit data murid</h3> <br>
{!! Form::model($murid, ['route' => ['siswa.update', $murid], 'method'=>'PUT'])!!}

    @include('siswa._form')

{!! Form::close() !!}
@stop