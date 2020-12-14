@extends('layouts.app')
@section('content')
    <section class="content-header">
        <h1>
            CLIENTES
        </h1>
    </section>

    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                        <div class="form-group">
                            {!! Form::label('clientes_nombre', 'CLIENTE:') !!}
                            <p>{{ $cliente->clientes_nombre }}</p>
                        </div>
                        <div class="form-group">
                            {!! Form::label('clientes_ruc', 'RUC:') !!}
                            <p>{{ $cliente->clientes_ruc }}</p>
                        </div>
                        <div class="form-group">
                            {!! Form::label('telefono', 'TELEFONO:') !!}
                            <p>{{ $cliente->clientes_telefono}}</p>
                        </div>
                        <div class="form-group">
                            {!! Form::label('clientes_direccion', 'Direccion:') !!}
                            <p>{{ $cliente->clientes_direccion }}</p>
                        </div>
                        <div class="form-group">
                            {!! Form::label('clientes_email', 'Email del cliente:') !!}
                            <p>{{ $cliente->clientes_email }}</p>
                        </div>

                
        </div>
    </div>



@endsection