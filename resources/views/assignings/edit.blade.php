@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Assigning
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($assigning, ['route' => ['assignings.update', $assigning->assigning_id], 'method' => 'patch']) !!}

                        @include('assignings.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
