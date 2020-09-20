<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad', 'CANTIDAD:') !!}
    <p>{{ $stock->cantidad }}</p>
</div>

<!-- Producto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('producto', 'PRODUCTO:') !!}
    <p>{{ $stock->producto }}</p>
</div>

<!-- Deposito Field -->
<div class="form-group col-sm-6">
    {!! Form::label('deposito', 'DEPOSITO:') !!}
    <p>{{ $stock->deposito }}</p>
</div>

<!-- Created At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_at', 'CREADO:') !!}
    <p>{{ $stock->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updated_at', 'ACTUALIZADO:') !!}
    <p>{{ $stock->updated_at }}</p>
</div>

