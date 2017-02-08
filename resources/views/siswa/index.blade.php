@extends('layouts.master_navbar')

@section('title')
Index Murid
@stop

@section('content')



<p><h2>daftar murid</h2></p>
    @if(Session::has('flash_message'))
        <div class="alert alert-success alert-dismissible">
            <em> {!! session('flash_message') !!}</em>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    @endif  
  
</div>

<a href="{{route('siswa.create')}}" class="btn btn-info">New Murid</a>
<div class="table-responsive">
    <table class="table-bordered table-striped table-hover col-md-12">
        <thead>
            <tr>
                <th style="text-align: center">no</th>
                <th style="text-align: center">nama</th>
                <th style="text-align: center">Umur</th>
                <th style="text-align: center">Alamat</th>
                <th style="text-align: center">No Hp</th>
                <th style="text-align: center">kelas</th>
                <th style="text-align: center">action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = $murid->firstItem() - 1 ; ?>
            @foreach($murid as $value)
            <?php $no++ ;?>
            <tr>
                <td>{{$no}}</td>
                <td><a href="{{route('siswa.show', $value-> id)}}">{{ $value -> nama_murid }} </a> </td>
                <td>{{ $value -> umur_murid }}</td>
                <td>{{ $value -> alamat_murid }}</td>
                <td>{{ $value -> nohp_murid }}</td>
                <td>{{ $value -> kelas_murid }}</td>
                <td>
                    <a href="{{route('siswa.edit',$value-> id)}}">ubah</a> | 
                
                    {{ Form::open(array('url' => 'siswa/' . $value->id, 'class' => 'pull-right', 'method'=>'delete')) }}
                        {{--  Form::hidden('_method', 'DELETE')  --}}
                        {{ Form::submit('Delete', array('class' => 'btn btn-warning btn-xs')) }}
                    {{ Form::close() }}
                </td>
                    
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $murid->render() }}
    
</div> {{-- /.table resposive --}}
@stop
{{-- 
<a href="{{route('murid.edit', $value->id )}}" class="btn btn-info btn-xs"><span class="icon-pencil">edit</span> </a>
<a href="{{route('murid.destroy', $value->id )}}" class="btn btn-info btn-xs"><span class="icon-trash">delete</span></a> --}}