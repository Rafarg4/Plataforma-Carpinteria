@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Pedido Detalle
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($pedidoDetalle, ['route' => ['pedidoDetalles.update', $pedidoDetalle->id], 'method' => 'patch']) !!}

                        @include('pedido_detalles.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection