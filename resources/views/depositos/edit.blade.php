@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Deposito
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($deposito, ['route' => ['depositos.update', $deposito->id], 'method' => 'patch']) !!}

                        @include('depositos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection