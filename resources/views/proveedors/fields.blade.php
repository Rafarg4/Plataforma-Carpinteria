<!-- Nombre Proveedor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_proveedor', 'NOMBRE :') !!}
    {!! Form::text('nombre_proveedor', null, ['class' => 'form-control']) !!}
</div>

<!-- Ruc Proveedor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ruc_proveedor', 'RUC:') !!}
    {!! Form::text('ruc_proveedor', null, ['class' => 'form-control']) !!}
</div>

<!-- Direccion Proveedor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('direccion_proveedor', 'DIRECCION:') !!}
    {!! Form::text('direccion_proveedor', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Proveedor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono_proveedor', 'TELEFONO:') !!}
    {!! Form::text('telefono_proveedor', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Proveedor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email_proveedor', 'EMAIL:') !!}
    {!! Form::text('email_proveedor', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Proveedor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion_proveedor', 'DESCRIPCION:') !!}
    {!! Form::text('descripcion_proveedor', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('proveedors.index') }}" class="btn btn-default">CANCELAR</a>
</div>
