<!-- Nombre Categoria Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_categoria', 'NOMBRE CATEGORIA:') !!}
    <p>{{ $categoria->nombre_categoria }}</p>
</div>

<!-- Descripcion Categoria Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion_categoria', 'DESCRIPCIÓN CATEGORIA:') !!}
    <p>{{ $categoria->descripcion_categoria }}</p>
</div>

<!-- Created At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_at', 'CREADO:') !!}
    <p>{{ $categoria->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updated_at', 'MODIFICADO:') !!}
    <p>{{ $categoria->updated_at }}</p>
</div>

