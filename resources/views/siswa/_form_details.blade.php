    
    <div class="form-group">
    	{!! Form::label('age', 'Umur') !!}
    	{!! Form::text('age', null, [
    		'class'=>'form-control input-md', 
    		'placeholder'=>'Umur']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('address', 'Alamat') !!}
        {!! Form::text('address', null, [
            'class'=>'form-control input-md', 
            'placeholder'=>'Alamat']) !!}
    </div>
    <div class="form-group">
    	{!! Form::label('gender', 'gender') !!}
    	{!! Form::text('gender', null, [
    		'class'=>'form-control input-md', 
    		'placeholder'=>'gender']) !!}
    </div>
    <div class="form-group">
    	{!! Form::label('pob', 'tempat lahir') !!}
    	{!! Form::text('pob', null, [
    		'class'=>'form-control input-md', 
    		'placeholder'=>'tempat lahir']) !!}
    </div>
    <div class="form-group">
    	{!! Form::label('dob', 'tanggal lahir') !!}
    	{!! Form::text('dob', null, [
    		'class'=>'form-control input-md', 
    		'placeholder'=>'tgl lahir ']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('blood_type', 'gol darah') !!}
        {!! Form::text('blood_type', null, [
            'class'=>'form-control input-md', 
            'placeholder'=>'gol darah']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('phone', 'phone') !!}
        {!! Form::text('phone', null, [
            'class'=>'form-control input-md', 
            'placeholder'=>'phone']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('hobby', 'hobby') !!}
        {!! Form::text('hobby', null, [
            'class'=>'form-control input-md', 
            'placeholder'=>'hobby']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('brothers', 'jml saudara') !!}
        {!! Form::text('brothers', null, [
            'class'=>'form-control input-md', 
            'placeholder'=>'jml saudara']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('sambung_id', 'Sambung id') !!}
        {!! Form::text('sambung_id', null, [
            'class'=>'form-control input-md', 
            'placeholder'=>'Sambung id']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('foto', 'foto') !!}
        {!! Form::text('foto', null, [
            'class'=>'form-control input-md', 
            'placeholder'=>'foto']) !!}
    </div>

    {!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}