<!-- Nombre Categoria Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_categoria', 'NOMBRE:') !!}
    {!! Form::text('nombre_categoria', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Categoria Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion_categoria', 'DESCRIPCIÓN:') !!}
    {!! Form::text('descripcion_categoria', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('categorias.index') }}" class="btn btn-default">CANCELAR</a>
</div>
