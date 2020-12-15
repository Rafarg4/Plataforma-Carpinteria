<!-- Producto Id Field -->
<div class="form-group">
    {!! Form::label('producto_id', 'Producto Id:') !!}
    <p>{{ $pedidoDetalle->producto_id }}</p>
</div>

<!-- Pedido Id Field -->
<div class="form-group">
    {!! Form::label('pedido_id', 'Pedido Id:') !!}
    <p>{{ $pedidoDetalle->pedido_id }}</p>
</div>

<!-- Cdet Cantidad Field -->
<div class="form-group">
    {!! Form::label('cdet_cantidad', 'Cdet Cantidad:') !!}
    <p>{{ $pedidoDetalle->cdet_cantidad }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $pedidoDetalle->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $pedidoDetalle->updated_at }}</p>
</div>

