<div class="form-group">
    	{!! Form::label('nama_guru', 'Nama Guru') !!}
    	{!! Form::text('nama_guru', null, [
    		'class'=>'form-control input-sm', 
    		'placeholder'=>'Nama']) !!}
    </div>
    <div class="form-group">
    	{!! Form::label('nohp_guru', 'No HP') !!}
    	{!! Form::text('nohp_guru', null, [
    		'class'=>'form-control input-sm', 
    		'placeholder'=>'Nomer HP']) !!}
    </div>

    {!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}