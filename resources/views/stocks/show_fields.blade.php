<!-- Deposito Id Field -->
<div class="form-group">
    {!! Form::label('deposito_id', 'Deposito Id:') !!}
    <p>{{ $stock->deposito->descripcion }}</p>
</div>

<!-- Producto Field -->
<div class="form-group">
    {!! Form::label('producto', 'Producto:') !!}
    <p>{{ $stock->producto }}</p>
</div>

<!-- Cantidad Field -->
<div class="form-group">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    <p>{{ $stock->cantidad }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $stock->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $stock->updated_at }}</p>
</div>

