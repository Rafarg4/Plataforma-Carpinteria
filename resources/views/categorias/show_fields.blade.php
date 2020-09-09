<!-- Nombre Categoria Field -->
<div class="form-group">
    {!! Form::label('nombre_categoria', 'Nombre Categoria:') !!}
    <p>{{ $categoria->nombre_categoria }}</p>
</div>

<!-- Descripcion Categoria Field -->
<div class="form-group">
    {!! Form::label('descripcion_categoria', 'Descripcion Categoria:') !!}
    <p>{{ $categoria->descripcion_categoria }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $categoria->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $categoria->updated_at }}</p>
</div>

