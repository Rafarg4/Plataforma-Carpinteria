<!-- Nombre Producto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_producto', 'NOMBRE PRODUCTO:') !!}
    {!! Form::text('nombre_producto', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Producto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion_producto', 'DESCRIPCION PRODUCTO:') !!}
    {!! Form::text('descripcion_producto', null, ['class' => 'form-control']) !!}
</div>

<!-- Categoria Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('categoria_id', 'CATEGORIA:') !!}
    {!! Form::select('categoria_id', $categorias, null, ['required', 'class' => 'form-control','placeholder'=>'Seleccione'])!!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('productos.index') }}" class="btn btn-default">CANCELAR</a>
</div>
