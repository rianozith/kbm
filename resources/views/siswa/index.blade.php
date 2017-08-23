@extends('layouts.master_navbar')

@section('title')
Index student
@stop

@section('content')



<p><h2>daftar student</h2></p>
    @if(Session::has('flash_message'))
        <div class="alert alert-success alert-dismissible">
            <em> {!! session('flash_message') !!}</em>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    @endif  
  
</div>

<a href="{{route('siswa.create')}}" class="btn btn-info">New student</a>
<div class="table-responsive">
    <table class="table-bordered table-striped table-hover col-md-12">
        <thead>
            <tr>
                <th style="text-align: center">no</th>
                <th style="text-align: center">nama</th>
                <th style="text-align: center">umur</th>
                <th style="text-align: center">alamat</th>
                <th style="text-align: center">details</th>
                <th style="text-align: center">class_id</th>
                <th style="text-align: center">schedule_id</th>
                <th style="text-align: center">presence_id Hp</th>
                <th style="text-align: center">study_program_id</th>
                <th style="text-align: center">action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = $student->firstItem() - 1 ; ?>
            @foreach($student as $value)
            <?php $no++ ;?>
            <tr>
                <td>{{$no}}</td>
                <td><a href="{{route('siswa.show', $value-> id)}}">{{ $value -> name }} </a> </td>
                <td style="text-align: center">{{ $value -> age }}</td>
                <td style="text-align: left">{{ $value -> address }}</td>
                <td style="text-align: center"><a href="{{route('siswa.show', $value-> id)}}">cek</a></td>
                <td style="text-align: center">{{ $value -> class_id }}</td>
                <td style="text-align: center">{{ $value -> schedule_id }}</td>
                <td style="text-align: center">{{ $value -> presence_id }}</td>
                <td style="text-align: center">{{ $value -> study_program_id }}</td>
                <td style="text-align: center">
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
    {{ $student->render() }}
    
</div> {{-- /.table resposive --}}
@stop
{{-- 
<a href="{{route('student.edit', $value->id )}}" class="btn btn-info btn-xs"><span class="icon-pencil">edit</span> </a>
<a href="{{route('student.destroy', $value->id )}}" class="btn btn-info btn-xs"><span class="icon-trash">delete</span></a> --}}