<!-- Cliente Field -->
<div class="form-group">
    {!! Form::label('cliente', 'Cliente:') !!}
    <p>{{ $pedido->cliente }}</p>
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

