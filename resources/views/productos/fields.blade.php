<!-- Nombre Producto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_producto', 'Nombre Producto:') !!}
    {!! Form::text('nombre_producto', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Producto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion_producto', 'Descripcion Producto:') !!}
    {!! Form::text('descripcion_producto', null, ['class' => 'form-control']) !!}
</div>

<!-- Categoria Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('categoria_id', 'Categoria Id:') !!}
    {!! Form::select('categoria_id', $categorias, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('productos.index') }}" class="btn btn-default">Cancel</a>
</div>
