<div class="form-group">
    	{!! Form::label('nama_kelas', 'Nama Kelas') !!}
    	{!! Form::text('nama_kelas', null, [
    		'class'=>'form-control input-sm', 
    		'placeholder'=>'Nama Kelas']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('prodi', 'Prodi') !!}
        {!! Form::text('prodi', null, [
            'class'=>'form-control input-sm', 
            'placeholder'=>'prodi']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('kapasitas', 'Kapasitas') !!}
        {!! Form::text('kapasitas', null, [
            'class'=>'form-control input-sm', 
            'placeholder'=>'Kapasitas']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('wali_kelas', 'Wali Kelas') !!}
        {!! Form::text('wali_kelas', null, [
            'class'=>'form-control input-sm', 
            'placeholder'=>'wali_kelas']) !!}
    </div>

    {!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}