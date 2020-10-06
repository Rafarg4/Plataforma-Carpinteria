
	<form action="/venta" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
				<div class="form-group col-md-6">
					<div class="form-group">
						<label for="nombre">Fecha</label>
						<input type="date" name="fecha" class="form-control" placeholder="Fecha" value="{{ old('venta_fecha') }}">
					</div>
                    <div class="form-group">
						<label for="vendedor">Vendedor</label>
						<input type="text" name="vendedor" class="form-control" value="{{ Auth::user()->name }}" readonly>
					</div>
				
				
					
						<div class="form-group">
							<select id="vent_tipo" class="form-control">
								<option selected>Contado</option>
								<option>Credito</option>
							</select>
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
                    <div class="form-group">
                        <label for="num_factura">Número de Factura</label>
                        <input type="text" name="num_factura" class="form-control" placeholder="Número de Factura" value="001-001-{{ old('vent_numero') }} ">
                    </div>
                </div>
						<!-- agregar articulos -->
						<div class="col-md-4">
							<div class="form-group">
								<label for="articulo">Artículo</label>
							<select name="articulo_descripcion" id="articulo_descripcion" class="form-control selectpicker" data-live-search="true">
									@foreach($articulos as $art)
									<option value="{{ $art->id }}">
										{{ $art->articulos_descripcion }}
										
									</option>
									@endforeach
							</select>
							</div>
						</div>
						<div class="col-md-2">
						
							<div class="form-group">
								<label for="articulos_precio">Precio Articulo</label>
								<input type="number" name="articulos_precio" id="articulos_precio" class="form-control" placeholder="Precio del Articulo" value="">
							</div>

							<div class="form-group">
								<label for="vdet_cantidad">Cantidad</label>
								<input type="number" name="vdet_cantidad" id="vdet_cantidad" class="form-control"  placeholder="Cantidad del articulo">
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<button type="button" id="bt_add" class="btn btn-primary">
									Agregar
								</button>
							</div>
						</div>

						<div class="col-md-12">
							<table id="detalles" class="table table-striped table-bordered table-hover table-condensed" style="margin-top: 10px">
								<thead style="background-color: #A9D0F5">
									<th>Opciones</th>
									<th>Artículo</th>
									<th>Cantidad</th>
									<th>Precio Articulo</th>
									<th>Subtotal</th>
								</thead>
								<tfoot>
									<th>Total</th>
									<th></th>
									<th></th>
									<th></th>
									<th><h4 id="total">0.00</h4></th>
								</tfoot>
								<tbody>
									
								</tbody>
							</table>
						</div>

						<div class="col-md-12" id="guardar">
							<div class="form-group">
								<button class="btn btn-primary" type="submit">
									Guardar
								</button>
							</div>
						</div>
	</form>
@push('scripts')
<script>
	
	$(document).ready(function(){
		$("#bt_add").click(function(){
			agregar();
		});
	});
	var cont = 0;
	var total = 0;
	var subtotal = [];
	//Cuando cargue el documento
	//Ocultar el botón Guardar
	$("#guardar").hide();
	function agregar(){
		//Obtener los valores de los inputs
		id_articulo = $("#articulo_descripcion").val();
		articulo = $("#articulo_descripcion option:selected").text();
		cantidad = $("#vdet_cantidad").val();
		precio_articulo = $("#articulos_precio").val();

		//Validar los campos
		if(id_articulo != "" && cantidad > 0 && precio_articulo != ""){
			//subtotal array inicie en el indice cero
			subtotal[cont] = (cantidad * precio_articulo);
			total = total + subtotal[cont];
			var fila = '<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-warning" onclick="eliminar('+cont+')">X</button></td><td><input type="hidden" name="id_articulo[]" value="'+id_articulo+'">'+articulo+'</td><td><input type="number" name="cantidad[]" value="'+cantidad+'"></td><td><input type="number" name="precio_articulo[]" value="'+precio_articulo+'"></td><td>'+subtotal[cont]+'</td></tr>';

			cont++;
			limpiar();
			$("#total").html("₲" + total);
			evaluar();
			$("#detalles").append(fila);
		}else{
			alert("Error al ingresar el detalle del ingreso, revise los datos del artículo");
		}
	}
	function limpiar(){
		$("#vdet_cantidad").val("");
		$("#articulos_precio").val("");
	}
	//Muestra botón guardar
	function evaluar(){
		if(total > 0){
			$("#guardar").show();
		}else{
			$("#guardar").hide();
		}
	}
	function eliminar(index){
		total = total-subtotal[index];
		$("#total").html("₲" + total);
		$("#fila" + index).remove();
		evaluar();
	}
</script>
@endpush