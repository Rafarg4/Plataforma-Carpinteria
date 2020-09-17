<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    {!! Form::number('cantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Producto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('producto', 'Producto:') !!}
     {!! Form::select('producto',array('Sin eleccion' => 'Sin eleccion','tornillos' => 'tornillos', 'madera' => 'madera','clavos' => 'clavos'),null, ['class' => 'form-control' ])!!}
</div>

<!-- Deposito Field -->
<div class="form-group col-sm-6">
    {!! Form::label('deposito', 'Deposito:') !!}
    {!! Form::select('deposito',array('Sin eleccion' => 'Sin eleccion','compras' => 'compras', 'ventas' => 'ventas','produccion' => 'produccion'),null, ['class' => 'form-control' ])!!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('stocks.index') }}" class="btn btn-default">Cancel</a>
</div>
