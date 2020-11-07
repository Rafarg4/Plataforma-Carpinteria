@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Compra
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($compra, ['route' => ['compras.update', $compra->id], 'method' => 'patch']) !!}

                        @include('compras.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection