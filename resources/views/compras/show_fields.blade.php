<!-- Cliente Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('proveedor', 'Proveedor:') !!}
    <p>{{  $compra->proveedor->nombre_proveedor }}</p>
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'Usuario:') !!}
    <p>{{  $compra->user->name }}</p>
</div>
<!-- Comp Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('comp_fecha', 'Comp Fecha:') !!}
    <p>{{ $compra->comp_fecha }}</p>
</div>

<!-- Comp Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('comp_numero', 'Comp Numero:') !!}
    <p>{{ $compra->comp_numero }}</p>
</div>

<!-- Comp Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('comp_tipo', 'Comp Tipo:') !!}
    <p>{{ $compra->comp_tipo }}</p>
</div>

<!-- Comp Totalfactura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('comp_totalfactura', 'Comp Totalfactura:') !!}
    <p>{{ $compra->comp_totalfactura }}</p>
</div>
<!-- Updated At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('comp_ivadiez', 'Iva 10%:') !!}
    <p>{{($compra->comp_totalfactura/10)}} GS</p>
</div>
<!-- Updated At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('comp_ivacinco', 'Iva 5%:') !!}
    <p>{{($compra->comp_totalfactura/5)}} GS</p>
</div>
<!-- Created At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_at', 'Creado:') !!}
    <p>{{ $compra->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updated_at', 'Actualizado:') !!}
    <p>{{ $compra->updated_at }}</p>
</div>
<div class="col-md-12">
                            <table id="detalles" class="table table-striped table-bordered table-hover table-condensed" style="margin-top: 10px">
                                <thead style="background-color: #A9D0F5">
                                    <th>Cantidad</th>
                                    <th>Artículo</th>
                                    
                                </thead>                                
                                <tbody>
                                @foreach($detalle as $det)
                                    @if ($det->compra_id == $compra->id)
                                    <tr>
                                        <td>
                                            <p>{{   $det->cdet_cantidad }}</p>  <!-- trae la cantidad del articulo-->
                                        </td>
                                        <td>
                                             <p>{{ $det->articulo->articulos_descripcion }}</p> <!-- trae el nombre del articulo-->
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                                </tbody>
                        </table>
                    </div>
                    