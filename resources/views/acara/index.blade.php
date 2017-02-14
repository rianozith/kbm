@extends('layouts.master_navbar')

@section('title')
Index acara
@stop

@section('content')



<p><h2>daftar kegiatan</h2></p>
    @if(Session::has('flash_message'))
        <div class="alert alert-success alert-dismissible">
            <em> {!! session('flash_message') !!}</em>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    @endif  
  
</div>

<a href="{{route('acara.create')}}" class="btn btn-info">New acara</a>
<div class="table-responsive">
    <table class="table-bordered table-striped table-hover col-md-12">
        <thead>
            <tr>
                <th>no</th>
                <th>nama kegiatan</th>
                <th>tanggal</th>
                <th>jam</th>
                <th>tempat</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = $kegiatan->firstItem() - 1 ; ?>
            @foreach($kegiatan as $value)
            <?php $no++ ;?>
            <tr>
                <td>{{$no}}</td>
                <td><a href="{{route('acara.show', $value-> id)}}">{{ $value -> nama_kegiatan }} </a> </td>
                <td>{{ $value -> tanggal_kegiatan }}</td>
                <td>{{ $value -> jam_kegiatan }}</td>
                <td>{{ $value -> tempat_kegiatan }}</td>
                <td>
                    <a href="{{route('acara.edit',$value-> id)}}">ubah</a> | 
                
                    {{ Form::open(array('url' => 'acara/' . $value->id, 'class' => 'pull-right', 'method'=>'delete')) }}
                        {{--  Form::hidden('_method', 'DELETE')  --}}
                        {{ Form::submit('Delete', array('class' => 'btn btn-warning btn-xs')) }}
                    {{ Form::close() }}
                </td>
                    
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $kegiatan->render() }}
    <a href="{{URL::previous()}}" class="btn btn-info">back</a>
</div> {{-- /.table resposive --}}
@stop
{{-- 
<a href="{{route('kegiatan.edit', $value->id )}}" class="btn btn-info btn-xs"><span class="icon-pencil">edit</span> </a>
<a href="{{route('kegiatan.destroy', $value->id )}}" class="btn btn-info btn-xs"><span class="icon-trash">delete</span></a> --}}