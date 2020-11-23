<!-- Producto Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('producto_id', 'PRODUCTO:') !!}
    <p>{{ $detalle->producto->nombre_producto  }}</p>
</div>

<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad', 'CANTIDAD:') !!}
    <p>{{ $detalle->cantidad }}</p>
</div>

<!-- Observacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('obs', 'OBS:') !!}
    <p>{{ $detalle->obs }}</p>
</div>

<!-- Created At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_at', 'CREADO:') !!}
    <p>{{ $detalle->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updated_at', 'ACTUALIZADO:') !!}
    <p>{{ $detalle->updated_at }}</p>
</div>

