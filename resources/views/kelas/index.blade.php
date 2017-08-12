@extends('layouts.master_navbar')

@section('title')
Index kelas
@stop

@section('content')
<p><h2>Daftar kelas</h2></p>
@if(Session::has('flash_message'))
    <div class="alert alert-success alert-dismissable">
        <strong>{{session('flash_message')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
@endif

<a href="{{route('kelas.create')}}" class="btn btn-info">New kelas</a>
<div class="table-responsive">
    <table class="table-bordered table-hover table-striped col-md-12">
        <thead>
            <tr>
                <th style="text-align: center">no</th>
                <th style="text-align: center">nama kelas</th>
                <th style="text-align: center">kapasitas</th>
                <th style="text-align: center">prodi</th>
                <th style="text-align: center">wali kelas</th>
                <th style="text-align: center">action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = $kelas->firstItem() - 1 ; ?>
            @foreach($kelas as $value)
            <?php $no++ ;?>
            <tr>
                <td>{{$no}}</td>
                <td> <a href="{{route('kelas.show', $value->id)}}">{{ $value -> nama_kelas }}</a> </td>
                <td>{{ $value -> kapasitas }}</td>
                <td>{{ $value -> prodi }}</td>
                <td>{{ $value -> guru_id}}</td>
                <td>
                    {!! Form::open(['url' => 'kelas/'. $value->id, 'method'=>'delete', 'class' => 'form-inline'])!!}

                        <a href="{{ route('kelas.edit', $value->id) }}">edit</a> | 
                        {!! Form::submit('delete', ['class'=>'btn btn-xs btn-danger']) !!}

                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

{{ $kelas->render() }}
</div> {{-- /.table resposive --}}

@stop
{{-- 
<a href="{{route('guru.edit', $value->id )}}" class="btn btn-info btn-xs"><span class="icon-pencil">edit</span> </a>
<a href="{{route('guru.destroy', $value->id )}}" class="btn btn-info btn-xs"><span class="icon-trash">delete</span></a> --}}