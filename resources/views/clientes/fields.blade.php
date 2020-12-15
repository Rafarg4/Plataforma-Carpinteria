<!-- Cliente Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cliente_nombre', 'Cliente Nombre:') !!}
    {!! Form::text('cliente_nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('clientes.index') }}" class="btn btn-default">Cancel</a>
</div>
