<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    {!! Form::number('cantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Origne Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('origne_id', 'Origne Id:') !!}
    {!! Form::select('origne_id', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Destino Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('destino_id', 'Destino Id:') !!}
    {!! Form::select('destino_id', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Producto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('producto', 'Producto:') !!}
    {!! Form::text('producto', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('transferencias.index') }}" class="btn btn-default">Cancel</a>
</div>
