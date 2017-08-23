    
    <div class="form-group">
    	{!! Form::label('name', 'Nama murid') !!}
    	{!! Form::text('name', null, [
    		'class'=>'form-control input-md', 
    		'placeholder'=>'Nama']) !!}
    </div>
    <div class="form-group">
    	{!! Form::label('studentdetail_id', 'Detail ID') !!}
    	{!! Form::text('studentdetail_id', null, [
    		'class'=>'form-control input-md', 
    		'placeholder'=>'Detail id']) !!}
    </div>
    <div class="form-group">
    	{!! Form::label('class_id', 'Class id') !!}
    	{!! Form::text('class_id', null, [
    		'class'=>'form-control input-md', 
    		'placeholder'=>'Class id']) !!}
    </div>
    <div class="form-group">
    	{!! Form::label('schedule_id', 'Schedule id') !!}
    	{!! Form::text('schedule_id', null, [
    		'class'=>'form-control input-md', 
    		'placeholder'=>'Schedule id']) !!}
    </div>
    <div class="form-group">
    	{!! Form::label('presence_id', 'Presence id') !!}
    	{!! Form::text('presence_id', null, [
    		'class'=>'form-control input-md', 
    		'placeholder'=>'Presence id']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('study_program_id', 'Study program id') !!}
        {!! Form::text('study_program_id', null, [
            'class'=>'form-control input-md', 
            'placeholder'=>'Study program id']) !!}
    </div>

    {!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}