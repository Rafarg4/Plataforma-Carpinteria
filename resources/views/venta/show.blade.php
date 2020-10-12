@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            VENTAS
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                  
                        <div class="form-group">
                            {!! Form::label('clientes_nombre', 'CLIENTE:') !!}
                            <p>{{ $venta->cliente->clientes_nombre }}</p>
                        </div>
                        <div class="form-group">
                            {!! Form::label('clientes_ruc', 'RUC:') !!}
                            <p>{{ $venta->cliente->clientes_ruc }}</p>
                        </div>
                        <div class="form-group">
                            {!! Form::label('name', 'VENDEDOR:') !!}
                            <p>{{ $venta->user->name }}</p>
                        </div>
                        <div class="form-group">
                            {!! Form::label('vent_fecha', 'FECHA DE VENTA:') !!}
                            <p>{{ $venta->vent_fecha }}</p>
                        </div>
                        <div class="form-group">
                            {!! Form::label('vent_numero', 'NUMERO DE FACTURA:') !!}
                            <p>{{ $venta->vent_numero }}</p>
                        </div>
                        <div class="form-group">
                            {!! Form::label('vent_tipo', 'TIPO DE FACTURA:') !!}
                            <p>{{ $venta->vent_tipo }}</p>
                        </div>
                        <div class="form-group">
                            {!! Form::label('vent_totalFactura', 'TOTAL FACTURA:') !!}
                            <p>{{ $venta->vent_totalFactura }}</p>
                        </div>
                      
                        <div class="form-group">
                            {!! Form::label('articulos_descripcion', 'Articulos:') !!}
                            <p>{{ $detalle->articulo->articulos_descripcion }}</p>
                        </div>
                       

             
                    <a href="{{ route('ventas.index') }}" class="btn btn-default">VOLVER</a>
                </div>
            </div>
        </div>
    </div>
@endsection
