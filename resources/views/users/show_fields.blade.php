<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'NOMBRE Y APELLIDO:') !!}
    <p>{{ $user->name }}</p>
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'CORREO:') !!}
    <p>{{ $user->email }}</p>
</div>




<!-- Created At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_at', 'CREADO:') !!}
    <p>{{ $user->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updated_at', 'ACTUALIZADO:') !!}
    <p>{{ $user->updated_at }}</p>
</div>

