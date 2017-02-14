<div class="form-group">
    	{!! Form::label('nama_murid', 'Nama murid') !!}
    	{!! Form::text('nama_murid', null, [
    		'class'=>'form-control input-md', 
    		'placeholder'=>'Nama']) !!}
    </div>
    <div class="form-group">
    	{!! Form::label('umur_murid', 'Umur') !!}
    	{!! Form::text('umur_murid', null, [
    		'class'=>'form-control input-md', 
    		'placeholder'=>'Umur']) !!}
    </div>
    <div class="form-group">
    	{!! Form::label('alamat_murid', 'Alamat') !!}
    	{!! Form::text('alamat_murid', null, [
    		'class'=>'form-control input-md', 
    		'placeholder'=>'alamat']) !!}
    </div>
    <div class="form-group">
    	{!! Form::label('nohp_murid', 'No HP') !!}
    	{!! Form::text('nohp_murid', null, [
    		'class'=>'form-control input-md', 
    		'placeholder'=>'Nomer HP']) !!}
    </div>
    <div class="form-group">
    	{!! Form::label('kelas_murid', 'kelas') !!}
    	{!! Form::text('kelas_murid', null, [
    		'class'=>'form-control input-md', 
    		'placeholder'=>'kelas']) !!}
    </div>

    {!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}