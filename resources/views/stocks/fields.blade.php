<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad', 'CANTIDAD:') !!}
    {!! Form::number('cantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Producto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('producto', 'PRODUCTO:') !!}
     {!! Form::select('producto',array('Sin eleccion' => 'Sin eleccion','tornillos' => 'tornillos', 'madera' => 'madera','clavos' => 'clavos'),null, ['class' => 'form-control' ])!!}
</div>

<!-- Deposito Field -->
<div class="form-group col-sm-6">
    {!! Form::label('deposito', 'DEPOSITO:') !!}
    {!! Form::select('deposito',array('Sin eleccion' => 'Sin eleccion','compras' => 'compras', 'ventas' => 'ventas','produccion' => 'produccion'),null, ['class' => 'form-control' ])!!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('stocks.index') }}" class="btn btn-default">CANCELAR</a>
</div>
