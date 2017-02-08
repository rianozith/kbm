<div class="form-group">
    	{!! Form::label('nama_siswa', 'Nama Siswa') !!}
    	{!! Form::text('nama_siswa', null, [
    		'class'=>'form-control input-md', 
    		'placeholder'=>'Nama']) !!}
    </div>
    <div class="form-group">
    	{!! Form::label('umur_siswa', 'Umur') !!}
    	{!! Form::text('umur_siswa', null, [
    		'class'=>'form-control input-md', 
    		'placeholder'=>'Umur']) !!}
    </div>
    <div class="form-group">
    	{!! Form::label('alamat_siswa', 'Alamat') !!}
    	{!! Form::text('alamat_siswa', null, [
    		'class'=>'form-control input-md', 
    		'placeholder'=>'alamat']) !!}
    </div>
    <div class="form-group">
    	{!! Form::label('nohp_siswa', 'No HP') !!}
    	{!! Form::text('nohp_siswa', null, [
    		'class'=>'form-control input-md', 
    		'placeholder'=>'Nomer HP']) !!}
    </div>
    <div class="form-group">
    	{!! Form::label('kelas_siswa', 'kelas') !!}
    	{!! Form::text('kelas_siswa', null, [
    		'class'=>'form-control input-md', 
    		'placeholder'=>'kelas']) !!}
    </div>

    {!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}