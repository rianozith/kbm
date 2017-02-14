@extends('layouts.master_navbar')

@section('title')
Index Guru
@stop

@section('content')
<p><h2>Daftar Guru</h2></p>
@if(Session::has('flash_message'))
    <div class="alert alert-success alert-dismissable">
        <strong>{{session('flash_message')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
@endif

<a href="{{route('guru.create')}}" class="btn btn-info">New Guru</a>
<div class="table-responsive">
    <table class="table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th style="text-align: center">no</th>
                <th style="text-align: center">nama Guru</th>
                <th style="text-align: center">No Hp</th>
                <th style="text-align: center">action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = $guru->firstItem() - 1 ; ?>
            @foreach($guru as $value)
            <?php $no++ ;?>
            <tr>
                <td>{{$no}}</td>
                <td> <a href="{{route('guru.show', $value->id)}}">{{ $value -> nama_guru }}</a> </td>
                <td>{{ $value -> nohp_guru }}</td>
                <td>
                    {!! Form::open(['url' => 'guru/'. $value->id, 'method'=>'delete', 'class' => 'form-inline'])!!}

                        <a href="{{ route('guru.edit', $value->id) }}">edit</a> | 
                        {!! Form::submit('delete', ['class'=>'btn btn-xs btn-danger']) !!}

                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

{{ $guru->render() }}
</div> {{-- /.table resposive --}}

@stop
{{-- 
<a href="{{route('guru.edit', $value->id )}}" class="btn btn-info btn-xs"><span class="icon-pencil">edit</span> </a>
<a href="{{route('guru.destroy', $value->id )}}" class="btn btn-info btn-xs"><span class="icon-trash">delete</span></a> --}}