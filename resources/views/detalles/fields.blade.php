<!-- Producto id Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('producto_id', 'PRODUCTO ID:') !!}
    {!! Form::select('producto_id', $productos, null, ['required', 'class' => 'form-control','placeholder'=>'Seleccione'])!!}
</div>

<!-- Cantidad  Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad', 'CANTIDAD:') !!}
    {!! Form::text('cantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Observacion  Field -->
<div class="form-group col-sm-6">
    {!! Form::label('obs', 'OBS:') !!}
    {!! Form::text('obs', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('productos.index') }}" class="btn btn-default">CANCELAR</a>
</div>
