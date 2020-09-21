<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad', 'CANTIDAD:') !!}
    {!! Form::number('cantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Origne Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('origne_id', 'DEPOSITO OREGEN:') !!}
    {!! Form::select('origne_id', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Destino Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('destino_id', 'DEPOSITO DESTINO:') !!}
    {!! Form::select('destino_id', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Producto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('producto', 'PRODUCTO:') !!}
    {!! Form::text('producto', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('transferencias.index') }}" class="btn btn-default">CANCELAR</a>
</div>
