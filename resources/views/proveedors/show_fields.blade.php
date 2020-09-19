<!-- Nombre Proveedor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_proveedor', 'Nombre Proveedor:') !!}
    <p>{{ $proveedor->nombre_proveedor }}</p>
</div>

<!-- Ruc Proveedor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ruc_proveedor', 'Ruc Proveedor:') !!}
    <p>{{ $proveedor->ruc_proveedor }}</p>
</div>

<!-- Direccion Proveedor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('direccion_proveedor', 'Direccion Proveedor:') !!}
    <p>{{ $proveedor->direccion_proveedor }}</p>
</div>

<!-- Telefono Proveedor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono_proveedor', 'Telefono Proveedor:') !!}
    <p>{{ $proveedor->telefono_proveedor }}</p>
</div>

<!-- Email Proveedor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email_proveedor', 'Email Proveedor:') !!}
    <p>{{ $proveedor->email_proveedor }}</p>
</div>

<!-- Descripcion Proveedor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion_proveedor', 'Descripcion Proveedor:') !!}
    <p>{{ $proveedor->descripcion_proveedor }}</p>
</div>

<!-- Created At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $proveedor->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $proveedor->updated_at }}</p>
</div>

