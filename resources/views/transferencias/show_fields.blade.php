<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad', 'CANTIDAD:') !!}
    <p>{{ $transferencia->cantidad }}</p>
</div>

<!-- Origne Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('origne_id', 'DEPOSITO ORIGEN:') !!}
    <p>{{ $transferencia->deposito1->descripcion }}</p>
</div>

<!-- Destino Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('destino_id', 'DEPOSITO DESTINO:') !!}
    <p>{{ $transferencia->deposito->descripcion }}</p>
</div>

<!-- Producto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('producto', 'PRODUCTO:') !!}
    <p>{{ $transferencia->producto }}</p>
</div>

<!-- Created At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_at', 'CREADO:') !!}
    <p>{{ $transferencia->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updated_at', 'ACTUALIZADO:') !!}
    <p>{{ $transferencia->updated_at }}</p>
</div>

