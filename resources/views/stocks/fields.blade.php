<!-- Deposito Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('deposito_id', 'DEPOSITO ID:') !!}
    {!! Form::select('deposito_id', $depositos, null, ['required', 'class' => 'form-control','placeholder'=>'Seleccione'])!!}
</div>

<!-- Producto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('producto_id', 'PRODUCTO:') !!}
    {!! Form::select('producto_id', $productos ,null, ['required', 'class' => 'form-control','placeholder'=>'Seleccione'])!!}
</div>
<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad', 'CANTIDAD:') !!}
    {!! Form::number('cantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('stocks.index') }}" class="btn btn-default">CANCELAR</a>
</div>

