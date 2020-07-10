@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Course
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($course, ['route' => ['courses.update', $course->course_id], 'method' => 'patch']) !!}

                        @include('courses.fields')
                   <!-- Submit Field -->
                       <div class="form-group col-sm-12">
                           {!! Form::submit('Update Course', ['class' => 'btn btn-primary']) !!}
                           <a href="{{ route('courses.index') }}" class="btn btn-default">Cancel</a>
                       </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
