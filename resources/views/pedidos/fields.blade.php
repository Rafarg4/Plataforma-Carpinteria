<!-- Cliente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cliente', 'CLIENTE:') !!}
    {!! Form::text('cliente', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Inicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_inicio', 'FECHA DE INICIO:') !!}
    {!! Form::text('fecha_inicio', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Entrega Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_entrega', 'FECHA DE ENTREGA:') !!}
    {!! Form::text('fecha_entrega', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('pedidos.index') }}" class="btn btn-default">CANCELAR</a>
</div>
