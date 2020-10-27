@extends('layouts.app')

@section('content')


<section class="content-header">
        <h1 class="pull-left">Ventas</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('ventas.create') }}">Nueva Venta</a>
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
                        <th scope="col">Cliente</th>
                        <th scope="col">Vendedor</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Numero de factura</th>
                        <th scope="col">Tipo de venta</th>
                        <th scope="col">Total IVA</th>
                        <th scope="col">Total venta</th>
                        <th>ACCION</th>       
                    </tr>
                </thead>
                <tbody>
                    @foreach($ventas as $venta)
                        <tr>
                            <th scope="row">{{$venta->id}}</th>
                            <th>{{$venta->cliente->clientes_nombre }}</th>
                            <th>{{$venta->user->name}}</th>
                            <th>{{$venta->vent_fecha }}</th>
                            <th>{{$venta->vent_numero }}</th>
                            <th>{{$venta->vent_tipo }}</th>
                            <th>{{$venta->vent_iva }}</th>
                            <th>{{$venta->vent_totalFactura }}</th>
                            <td>
                                {!! Form::open(['route' => ['ventas.destroy', $venta->id], 'method' => 'delete']) !!}
                                <div class='btn-group'>
                                    {{-- <a href="{{route('ventas.printpdf', [$venta->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-file"></i></a> --}}
                                    <a href="{{ route('ventas.show', [$venta->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                                    <a href="{{ route('pdf', [$venta->id]) }}" class='btn btn-default btn-xs'>Imprimir Factura</a>
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