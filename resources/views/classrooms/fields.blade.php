<!-- Classroom Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('classroom_name', 'Classroom Name:') !!}
    {!! Form::text('classroom_name', null, ['class' => 'form-control']) !!}
    @include('adminlte-templates::common.errors')
</div>

<!-- Classroom Code Field -->
<div class="form-group col-sm-6" @if ($errors->has('classroom_code')) has-error @endif>
    {!! Form::label('classroom_code', 'Classroom Code:') !!}
    {!! Form::number('classroom_code', null, ['class' => 'form-control']) !!}
    @if ($errors->has('classroom_code')) <p class="text-danger">{{ $errors->first('classroom_code') }}</p> @endif
</div>

<!-- Classroom Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('classroom_description', 'Classroom Description:') !!}
    {!! Form::textarea('classroom_description', null, ['class' => 'form-control']) !!}
    @include('adminlte-templates::common.errors')

</div>

<!-- Classroom Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('classroom_status', 'Classroom Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('classroom_status', 0) !!}
        {!! Form::checkbox('classroom_status', '1', null) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('classrooms.index') }}" class="btn btn-default">Cancel</a>
</div>
