<!-- Cliente Nombre Field -->
<div class="form-group">
    {!! Form::label('cliente_nombre', 'Cliente Nombre:') !!}
    <p>{{ $cliente->cliente_nombre }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $cliente->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $cliente->updated_at }}</p>
</div>

