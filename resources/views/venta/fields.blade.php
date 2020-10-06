
	<form action="/venta" method="POST">
				<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
                <div class="form-group">
				<div class="form-group col-md-6">
					<div class="form-group">
						<label for="nombre">Fecha</label>
						<input type="date" name="fecha" class="form-control" placeholder="Fecha" value="{{ old('venta_fecha') }}">
					</div>
                
              
                    <div class="form-group">
						<label for="vendedor">Vendedor</label>
						<input type="text" name="vendedor" class="form-control" value="{{ Auth::user()->name }}" readonly>
					</div>
              
                  
                    <div class="form-group col-md-4">
                    <select id="vent_tipo" class="form-control">
                        <option selected>Contado</option>
                        <option>Credito</option>
                    </select>
                    </div>
                
                </div>
			</div>

				<div class="col-md-6">
                    <div class="form-group">
						<label for="cliente">Cliente</label>
                   
						<select name="cliente" class="form-control">
                            @foreach($clientes as $cliente)
							    <option value="{{ $cliente->id}}">{{$cliente->clientes_nombre}}</option>
                            @endforeach
						</select> 
					</div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="num_factura">Número de Factura</label>
                        <input type="text" name="num_factura" class="form-control" placeholder="Número de Factura" value="001-001-{{ old('vent_numero') }} ">
                    </div>
                </div>
				
				




				<div class="col-md-12">
					<div class="form-group">
						<button class="btn btn-primary" type="submit">
							Guardar
						</button>
						<button class="btn btn-danger" type="reset">
							Cancelar
						</button>
					</div>
				</div>
	</form>