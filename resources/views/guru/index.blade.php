@extends('layouts.master_navbar')

@section('title')
Input Murid
@stop

@section('content')
<p><h2>daftar murid</h2></p>
<a href="{{route('siswa.create')}}" class="btn btn-info">New Murid</a>
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
            </tr>
        </thead>
        <tbody>
            <?php $no = $siswa->firstItem() - 1 ; ?>
            @foreach(App\siswa::all() as $value)
            <?php $no++ ;?>
            <tr>
                <td>{{$no}}</td>
                <td>{{ $value -> nama_siswa }}</td>
                <td>{{ $value -> umur_siswa }}</td>
                <td>{{ $value -> alamat_siswa }}</td>
                <td>{{ $value -> nohp_siswa }}</td>
                <td>{{ $value -> kelas_siswa }}</td>
                <td>
                    {!! Form::model($siswa, ['route' => ['siswa.destroy', $siswa], 
                    'method'=>'delete', 'class' => 'form-inline'])!!}

                        <a href="{{ route('siswa.edit', $siswa) }}">edit</a> | 
                        {!! Form::submit('delete', ['class'=>'btn btn-xs btn-danger']) !!}

                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</div> {{-- /.table resposive --}}
@stop
{{-- 
<a href="{{route('siswa.edit', $value->id )}}" class="btn btn-info btn-xs"><span class="icon-pencil">edit</span> </a>
<a href="{{route('siswa.destroy', $value->id )}}" class="btn btn-info btn-xs"><span class="icon-trash">delete</span></a> --}}