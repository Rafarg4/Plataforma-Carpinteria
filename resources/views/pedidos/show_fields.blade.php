<!-- Cliente Field -->
<div class="form-group">
    {!! Form::label('cliente', 'Cliente:') !!}
    <p>{{ $pedido->cliente->cliente_nombre }}</p>
</div>

<!-- Fecha Inicio Field -->
<div class="form-group">
    {!! Form::label('fecha_inicio', 'Fecha Inicio:') !!}
    <p>{{ $pedido->fecha_inicio }}</p>
</div>

<!-- Fecha Entrega Field -->
<div class="form-group">
    {!! Form::label('fecha_entrega', 'Fecha Entrega:') !!}
    <p>{{ $pedido->fecha_entrega }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $pedido->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $pedido->updated_at }}</p>
</div>

<div class="col-md-12">
                            <table id="detalles" class="table table-striped table-bordered table-hover table-condensed" style="margin-top: 10px">
                                <thead style="background-color: #A9D0F5">
                                    <th>CANTIDAD</th>
                                    <th>ARTICULOS</th>
                                    
                                </thead>                                
                                <tbody>
                                @foreach($detalle as $det)
                                    @if ($det->pedido_id == $pedido->id)
                                    <tr>
                                        <td>
                                            <p>{{  $det->cdet_cantidad }}</p>  <!-- trae la cantidad del articulo-->
                                        </td>
                                        <td>
                                             <p>{{ $det->articulo->articulos_descripcion}}</p> <!-- trae el nombre del articulo-->
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                                </tbody>
                        </table>
                    </div>