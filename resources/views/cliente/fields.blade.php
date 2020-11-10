<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
	<div class="col-12">
    <center><h2>Editar Datos del Cliente</h2></center>				
	</div>
	<div class="col-md-4">
        <div class="form-group">
			<label for="cliente_id">Nombre</label>
			<select name="cliente_id" class="form-control">
				
					<option value="{{ $cliente->id}}">{{$cliente->clientes_nombre}}</option>
		
			</select> 
		</div>
		<div class="form-group">
            <label for="cliente_ruc">RUC</label>
            <input type="text" name="cliente_ruc" class="form-control" placeholder="RUC" maxlength= "9"  title="Tamaño maximo: 9." value="{{ old('cliente_ruc') }}" required>
        </div>
	
    </div>
<!-- agregar articulos -->
	
	
	<div class="col-md-2">
		<div class="form-group">
			<label for="cliente_telefono"> Telefono</label>
			<input type="text" class="form-control telefono"  name="cliente_telefono" id="cliente_telefono" value="" >
		</div>
		<div class="form-group">
			<label for="cliente_direccion"> Direccion</label>
			<input type="text" class="form-control direccion"  name="cliente_direccion" id="cliente_direccion" value="" >
		</div>
		<div class="form-group">
			<label for="cliente_email"> Email</label>
			<input type="email" class="form-control email"  name="cliente_email" id="cliente_email" value="" >
		</div>
		
	</div>

	<div class="col-md-12" id="guardar">
		<div class="form-group">
			<button class="btn btn-primary" type="submit">Guardar</button>
		</div>
	</div>

