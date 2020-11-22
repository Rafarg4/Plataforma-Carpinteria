@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Produccion
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($produccion, ['route' => ['produccions.update', $produccion->id], 'method' => 'patch']) !!}

                        @include('produccions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection