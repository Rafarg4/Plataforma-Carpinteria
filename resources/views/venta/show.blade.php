@extends('layouts.app')
@section('content')
<a href="{{url('printpdf' , $venta->id)}}"><button class="btn btn-c">descargar pdf</button></a>

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

                        
                        <div class="col-md-12">
							<table id="detalles" class="table table-striped table-bordered table-hover table-condensed" style="margin-top: 10px">
								<thead style="background-color: #A9D0F5">
									<th>Cantidad</th>
									<th>Artículo</th>
									
								</thead>								
							    <tbody>
                                @foreach($detalle as $det)
                                    @if ($det->venta_id == $venta->id)
                                    <tr>
                                        <td>
                                            <p>{{   $det->vdet_cantidad }}</p>  <!-- trae la cantidad del articulo-->
                                        </td>
                                        <td>
                                             <p>{{ $det->articulo->articulos_descripcion }}</p> <!-- trae el nombre del articulo-->
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
							    </tbody>
						</table>
                         
              
                    <a href="{{ route('ventas.index') }}" class="btn btn-default">VOLVER</a>
                </div>
            </div>
        </div>
    </div>



@endsection