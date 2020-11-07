<!-- Cliente Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cliente_id', 'Cliente Id:') !!}
    {!! Form::select('cliente_id', ], null, ['class' => 'form-control']) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::select('user_id', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Producto Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('producto_id', 'Producto Id:') !!}
    {!! Form::select('producto_id', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Comp Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('comp_fecha', 'Comp Fecha:') !!}
    {!! Form::text('comp_fecha', null, ['class' => 'form-control']) !!}
</div>

<!-- Comp Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('comp_numero', 'Comp Numero:') !!}
    {!! Form::text('comp_numero', null, ['class' => 'form-control']) !!}
</div>

<!-- Comp Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('comp_tipo', 'Comp Tipo:') !!}
    {!! Form::text('comp_tipo', null, ['class' => 'form-control']) !!}
</div>

<!-- Comp Iva Field -->
<div class="form-group col-sm-6">
    {!! Form::label('comp_iva', 'Comp Iva:') !!}
    {!! Form::text('comp_iva', null, ['class' => 'form-control']) !!}
</div>

<!-- Comp Totalfactura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('comp_totalfactura', 'Comp Totalfactura:') !!}
    {!! Form::text('comp_totalfactura', null, ['class' => 'form-control']) !!}
</div>

<!-- Comp Ivacinco Field -->
<div class="form-group col-sm-6">
    {!! Form::label('comp_ivacinco', 'Comp Ivacinco:') !!}
    {!! Form::text('comp_ivacinco', null, ['class' => 'form-control']) !!}
</div>

<!-- Comp Ivadiez Field -->
<div class="form-group col-sm-6">
    {!! Form::label('comp_ivadiez', 'Comp Ivadiez:') !!}
    {!! Form::text('comp_ivadiez', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('compras.index') }}" class="btn btn-default">Cancel</a>
</div>
