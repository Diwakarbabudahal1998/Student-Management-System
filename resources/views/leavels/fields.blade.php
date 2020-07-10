<!-- Leavel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('leavel', 'Leavel:') !!}
    {!! Form::text('leavel', null, ['class' => 'form-control']) !!}
</div>

<!-- Course Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_id', 'Course Id:') !!}
    {!! Form::number('course_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Leavel Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('leavel_description', 'Leavel Description:') !!}
    {!! Form::textarea('leavel_description', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('leavels.index') }}" class="btn btn-default">Cancel</a>
</div>
