@extends('layouts.master_navbar')

@section('title')
Index Murid
@stop

@section('content')
<p><h2>daftar murid</h2></p>
<div class="table-responsive">
    <table class="table-bordered">
        <thead>
            <tr>
                <th>no</th>
                <th>nama</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>No Hp</th>
                <th>kelas</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = $siswa->firstItem() - 1 ; ?>
            @foreach($siswa as $value)
            <?php $no++ ;?>
            <tr>
                <td>{{$no}}</td>
                <td>{{ $value -> nama_siswa }}</td>
                <td>{{ $value -> umur_siswa }}</td>
                <td>{{ $value -> alamat_siswa }}</td>
                <td>{{ $value -> nohp_siswa }}</td>
                <td>{{ $value -> kelas_siswa }}</td>
                <td>
                        <a href="{{url('pembiayaan/editao', $value->id )}}" class="btn btn-info btn-xs"><span class="icon-pencil">edit</span> </a>
                        <a href="{{url('pembiayaan/deleteao', $value->id )}}" class="btn btn-info btn-xs"><span class="icon-trash">delete</span></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</div> {{-- /.table resposive --}}

<h3>input data murid</h3> <br>
{!! Form::open(['url' => 'input_siswa']) !!}
    <div class="form-group">
    	{!! Form::label('nama_siswa', 'Nama Siswa') !!}
    	{!! Form::text('nama_siswa', null, [
    		'class'=>'form-control input-lg', 
    		'placeholder'=>'Nama']) !!}
    </div>
    <div class="form-group">
    	{!! Form::label('umur_siswa', 'Umur') !!}
    	{!! Form::text('umur_siswa', null, [
    		'class'=>'form-control input-lg', 
    		'placeholder'=>'Umur']) !!}
    </div>
    <div class="form-group">
    	{!! Form::label('alamat_siswa', 'Alamat') !!}
    	{!! Form::text('alamat_siswa', null, [
    		'class'=>'form-control input-lg', 
    		'placeholder'=>'alamat']) !!}
    </div>
    <div class="form-group">
    	{!! Form::label('nohp_siswa', 'No HP') !!}
    	{!! Form::text('nohp_siswa', null, [
    		'class'=>'form-control input-lg', 
    		'placeholder'=>'Nomer HP']) !!}
    </div>
    <div class="form-group">
    	{!! Form::label('kelas_siswa', 'kelas') !!}
    	{!! Form::text('kelas_siswa', null, [
    		'class'=>'form-control input-lg', 
    		'placeholder'=>'kelas']) !!}
    </div>
{!! Form::close() !!}

@stop