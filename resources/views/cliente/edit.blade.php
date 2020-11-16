@extends('layouts.app')
@section('content')

<section class="content-header">
        <h1>
            Formulario de Clientes
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')

        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                {!! Form::model($cliente, ['route' => ['clientes.update', $cliente->id], 'method' => 'patch']) !!}

                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="clientes_nombre">Nombre del Cliente</label>
                            <input type="txt" name="clientes_nombre" class="form-control "value="{{ $cliente->clientes_nombre }}"required>
                        </div>

                        <div class="form-group">
                            <label for="clientes_ruc">Ruc del Cliente</label>
                            <input type="txt" name="clientes_ruc" class="form-control" value="{{ $cliente->clientes_ruc }}"required>
                        </div>

                        <div class="form-group">
                            <label for="clientes_telefono">Teléfono del Cliente</label>
                            <input type="txt" name="clientes_telefono" class="form-control" value="{{ $cliente->clientes_telefono }}"required>
                        </div>

                        <div class="form-group">
                            <label for="clientes_direccion">Dirección del Cliente</label>
                            <input type="txt" name="clientes_direccion" class="form-control" value="{{ $cliente->clientes_direccion }}"required>
                        </div>

                        <div class="form-group">
                            <label for="clientes_email">Email del Cliente</label>
                            <input type="txt" name="clientes_email" class="form-control" value="{{ $cliente->clientes_email }}"required>
                        </div>

		
	                </div>

                    <div class="col-md-12" id="guardar">
		<div class="form-group">
			<button class="btn btn-primary" type="submit">Guardar</button>
		</div>
	</div>
       

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection