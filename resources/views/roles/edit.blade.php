@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Role
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($role, ['route' => ['roles.update', $role->id], 'method' => 'patch']) !!}

{{--
                        @include('roles.fields')
--}}
                   <!-- Name Field -->
                       <div class="form-group col-sm-6">
                           {!! Form::label('name', 'Name:') !!}
                           {!! Form::text('name', null, ['class' => 'form-control']) !!}
                       </div>

                       <!-- Update Field -->
                       <div class="form-group col-sm-12">
                           {!! Form::submit('Update Role', ['class' => 'btn btn-primary']) !!}
                           <a href="{{ route('roles.index') }}" class="btn btn-default">Cancel</a>
                       </div>


                       {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
