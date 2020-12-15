<!-- Pedido Id Field -->
<div class="form-group">
    {!! Form::label('pedido_id', 'Pedido Id:') !!}
    <p>{{ $produccion->pedido->id }}</p>
</div>

<!-- Fecha Inicio Field -->
<div class="form-group">
    {!! Form::label('fecha_inicio', 'Fecha Inicio:') !!}
    <p>{{ $produccion->fecha_inicio }}</p>
</div>

<!-- Fecha Culminacion Field -->
<div class="form-group">
    {!! Form::label('fecha_culminacion', 'Fecha Culminacion:') !!}
    <p>{{ $produccion->fecha_culminacion }}</p>
</div>

<!-- Responsable Field -->
<div class="form-group">
    {!! Form::label('user_id', 'Responsable:') !!}
    <p>{{ $produccion->user->name }}</p>
</div>

<!-- Estado Field -->
<div class="form-group">
    {!! Form::label('estado', 'Estado:') !!}
    <p>{{ $produccion->estado }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $produccion->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $produccion->updated_at }}</p>
</div>
