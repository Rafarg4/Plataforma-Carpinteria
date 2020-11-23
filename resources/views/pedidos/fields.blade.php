<!-- Cliente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cliente', 'CLIENTE:') !!}
    {!! Form::text('cliente', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Inicio Field -->
<div class="form-group col-sm-6">
<<<<<<< HEAD
    {!! Form::label('fecha_inicio', 'FECHA DE INICIO:') !!}
    {!! Form::text('fecha_inicio', null, ['class' => 'form-control']) !!}
=======
    {!! Form::label('fecha_inicio', 'Fecha Inicio:') !!}
    {!! Form::date('fecha_inicio', null, ['class' => 'form-control']) !!}
>>>>>>> 2f26f8a048d17eab3822440406e7c4f4be645c78
</div>

<!-- Fecha Entrega Field -->
<div class="form-group col-sm-6">
<<<<<<< HEAD
    {!! Form::label('fecha_entrega', 'FECHA DE ENTREGA:') !!}
    {!! Form::text('fecha_entrega', null, ['class' => 'form-control']) !!}
=======
    {!! Form::label('fecha_entrega', 'Fecha Entrega:') !!}
    {!! Form::date('fecha_entrega', null, ['class' => 'form-control']) !!}
>>>>>>> 2f26f8a048d17eab3822440406e7c4f4be645c78
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('pedidos.index') }}" class="btn btn-default">CANCELAR</a>
</div>
