@extends('layouts.app')

@section('content')


<section class="content-header">
        <h1 class="pull-left">Clientes</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('clientes.create') }}">Nuevo Cliente</a>
        </h1>
</section>

<div class="content">
<div class="clearfix"></div>
    <div class="box box-primary">
        <div class="box-body">
            <div class="table-responsive">
            <table class="table" id="data-table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Ruc</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Correo Electrónico</th>
                        <th>ACCION</th>       
                    </tr>
                </thead>
                <tbody>
                    @foreach($clientes as $cliente)
                        <tr>
                            <th scope="row">{{$cliente->id}}</th>
                            <th>{{$cliente->clientes_nombre }}</th>
                            <th>{{$cliente->clientes_ruc }}</th>
                            <th>{{$cliente->clientes_telefono }}</th>
                            <th>{{$cliente->clientes_direccion }}</th>
                            <th>{{$cliente->clientes_email }}</th>
                            <td>
                                {!! Form::open(['route' => ['clientes.destroy', $cliente->id], 'method' => 'delete']) !!}
                                <div class='btn-group'>
                                <a href="{{ route('clientes.edit', [$cliente->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                                    <a href="{{ route('clientes.show', [$cliente->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('ESTA SEGURO?')"]) !!}
                                </div>
                                {!! Form::close() !!}
                            </td>   
                        </tr>
                    @endforeach
                    </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
@endsection