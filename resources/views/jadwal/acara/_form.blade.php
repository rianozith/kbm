<div class="form-group">
    	{!! Form::label('nama_kegiatan', 'Nama Acara') !!}
    	{!! Form::text('nama_kegiatan', null, [
    		'class'=>'form-control input-md', 
    		'placeholder'=>'Nama']) !!}
    </div>
    <div class="form-group">
    	{!! Form::label('tanggal_kegiatan', 'Tanggal') !!}
    	{!! Form::text('tanggal_kegiatan', null, [
    		'class'=>'form-control input-md', 
    		'placeholder'=>'Tanggal']) !!}
    </div>
    <div class="form-group">
    	{!! Form::label('jam_kegiatan', 'Jam') !!}
    	{!! Form::text('jam_kegiatan', null, [
    		'class'=>'form-control input-md', 
    		'placeholder'=>'Jam']) !!}
    </div>
    <div class="form-group">
    	{!! Form::label('tempat_kegiatan', 'tempat') !!}
    	{!! Form::text('tempat_kegiatan', null, [
    		'class'=>'form-control input-md', 
    		'placeholder'=>'tempat']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('guru_id', 'Guru id') !!}
        {!! Form::text('guru_id', null, [
            'class'=>'form-control input-md', 
            'placeholder'=>'Guru']) !!}
    </div>

    {!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}