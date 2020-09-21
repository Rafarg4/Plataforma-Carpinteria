<!-- Cantidad Field -->
<div class="form-group">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    <p>{{ $transferencia->cantidad }}</p>
</div>

<!-- Origne Id Field -->
<div class="form-group">
    {!! Form::label('origne_id', 'Origne Id:') !!}
    <p>{{ $transferencia->origne_id }}</p>
</div>

<!-- Destino Id Field -->
<div class="form-group">
    {!! Form::label('destino_id', 'Destino Id:') !!}
    <p>{{ $transferencia->destino_id }}</p>
</div>

<!-- Producto Field -->
<div class="form-group">
    {!! Form::label('producto', 'Producto:') !!}
    <p>{{ $transferencia->producto }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $transferencia->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $transferencia->updated_at }}</p>
</div>

