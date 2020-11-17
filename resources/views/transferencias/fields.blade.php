<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad', 'CANTIDAD:') !!}
    {!! Form::number('cantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Origne Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('origne_id', 'DEPÓSITO ORIGEN:') !!}
    {!! Form::select('origne_id', $depositos, null, ['required', 'class' => 'form-control','placeholder'=>'Seleccione'])!!}
</div>

<!-- Destino Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('destino_id', 'DEPÓSITO DESTINO:') !!}
    {!! Form::select('destino_id', $depositos, null, ['required', 'class' => 'form-control','placeholder'=>'Seleccione'])!!}
</div>

<!-- Producto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('producto_id', 'PRODUCTO:') !!}
    {!! Form::select('producto_id',$productos ,null, ['required', 'class' => 'form-control','placeholder'=>'Seleccione'])!!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('transferencias.index') }}" class="btn btn-default">CANCELAR</a>
</div>
