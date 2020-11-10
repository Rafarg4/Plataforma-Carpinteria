<!-- Nombre Proveedor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_proveedor', 'NOMBRE PROVEEDOR:') !!}
    <p>{{ $proveedor->nombre_proveedor }}</p>
</div>

<!-- Ruc Proveedor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ruc_proveedor', 'RUC PROVEEDOR:') !!}
    <p>{{ $proveedor->ruc_proveedor }}</p>
</div>

<!-- Direccion Proveedor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('direccion_proveedor', 'DIRECCION PROVEEDOR:') !!}
    <p>{{ $proveedor->direccion_proveedor }}</p>
</div>

<!-- Telefono Proveedor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono_proveedor', 'TELEFONO PROVEEDOR:') !!}
    <p>{{ $proveedor->telefono_proveedor }}</p>
</div>

<!-- Email Proveedor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email_proveedor', 'EMAIL PROVEEDOR:') !!}
    <p>{{ $proveedor->email_proveedor }}</p>
</div>

<!-- Descripcion Proveedor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion_proveedor', 'DESCRIPCION PROVEEDOR:') !!}
    <p>{{ $proveedor->descripcion_proveedor }}</p>
</div>

<!-- Created At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_at', 'CREADO:') !!}
    <p>{{ $proveedor->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updated_at', 'ACTUALIZADO:') !!}
    <p>{{ $proveedor->updated_at }}</p>
</div>

