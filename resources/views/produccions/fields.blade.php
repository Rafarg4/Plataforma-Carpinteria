

<!-- Pedido Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pedido_id', 'Pedido Id:') !!}
    {!! Form::select('pedido_id', $pedidos, null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Inicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_inicio', 'Fecha Inicio:') !!}
    {!! Form::text('fecha_inicio', null, ['class' => 'form-control','id'=>'fecha_inicio']) !!}
</div>






<!-- Fecha Culminacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_culminacion', 'Fecha Culminacion:') !!}
    {!! Form::text('fecha_culminacion', null, ['class' => 'form-control','id'=>'fecha_culminacion']) !!}
</div>




<!-- Responsable Field -->
<div class="form-group col-sm-6">
            <label for="user_id">Responsable</label>
            <input type="hidden" name="user_id" class="form-control" value="{{ Auth::user()->id }}"  placeholder="{{ Auth::user()->name }}" readonly >
            <input type="text"  class="form-control" value="{{ Auth::user()->name }}"  placeholder="{{ Auth::user()->name }}" readonly >

        </div>

<!-- Estado Field -->
<div class="form-group col-sm-6 pull-left">
    {!! Form::label('estado', 'Estado:') !!}
   {!! Form::select('estado',array('pendiente' => 'pendiente', 'en proceso' => 'en proceso', 'terminado'=>'terminado'),null, ['required', 'class' => 'form-control','placeholder'=>'Seleccione'])!!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('produccions.index') }}" class="btn btn-default">Cancel</a>
</div>
