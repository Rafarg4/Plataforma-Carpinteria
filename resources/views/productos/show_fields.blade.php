<!-- Nombre Producto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_producto', 'Nombre Producto:') !!}
    <p>{{ $producto->nombre_producto }}</p>
</div>

<!-- Descripcion Producto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion_producto', 'Descripcion Producto:') !!}
    <p>{{ $producto->descripcion_producto }}</p>
</div>

<!-- Categoria Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('categoria_id', 'CATEGORIA:') !!}
    <p>{{ $producto->categoria->nombre_categoria  }}</p>
</div>

<!-- Created At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_at', 'CREADO:') !!}
    <p>{{ $producto->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updated_at', 'ACTUALIZADO:') !!}
    <p>{{ $producto->updated_at }}</p>
</div>

