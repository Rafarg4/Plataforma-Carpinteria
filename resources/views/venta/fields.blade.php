<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
	<div class="col-md-4">
		<div class="form-group">
			<label for="vent_fecha">Fecha</label>
			<input type="date" name="vent_fecha" class="form-control" value="{{ old('vent_fecha',  Carbon\Carbon::today()->format('Y-m-d')) }}"required>
		</div>
        <div class="form-group">
			<label for="user_id">Vendedor</label>
			<input type="hidden" name="user_id" class="form-control" value="{{ Auth::user()->id }}"  placeholder="{{ Auth::user()->name }}" readonly >
			<input type="text"  class="form-control" value="{{ Auth::user()->name }}"  placeholder="{{ Auth::user()->name }}" readonly >

		</div>			
		<div class="form-group">
			<label for="vent_tipo">Forma de Pago</label>			
			<select name="vent_tipo" id="vent_tipo" class="form-control">
				<option value="contado" selected>Contado</option>
				<option value="credito" >Crédito</option>
			</select>
		</div>
		
	</div>
	<div class="col-md-4">
        <div class="form-group">
			<label for="cliente_id">Cliente</label>
			<select name="cliente_id" class="form-control">
				@foreach($clientes as $cliente)
					<option value="{{ $cliente->id}}">{{$cliente->clientes_nombre}}</option>
				@endforeach
			</select> 
		</div>
		<div class="form-group">
            <label for="vent_numero">Número de Factura</label>
            <input type="text" name="vent_numero" class="form-control" placeholder="Número de Factura" minlength= "15"  title="Tamaño mínimo: 15." value="001-001-{{ old('vent_numero') }}" required>
        </div>
	
    </div>
<!-- agregar articulos -->
	<div class="col-md-4">
		<div class="form-group precio iva">
			<label for="articulo">Artículo</label>
			<select name="articulo_descripcion" id="articulo_descripcion" class="form-control selectpicker" data-live-search="true">
				<option disabled selected>Selecciona un artículo</option>
				@foreach($articulos as $art)
				<option value="{{ $art->id }}" id="articulo_select" data-precio="{{ $art->articulos_precio }}" data-iva="{{ $art->art_tipoIva }}"  >
						{{ $art->articulos_descripcion }}  
					</option>
				@endforeach
			</select>
		</div>
	</div>
	<div class="col-md-2">
		<div class="form-group">
			<label for="articulos_precio"> Precio</label>
			<input type="text" class="form-control precio" readonly name="articulos_precio" id="articulos_precio" value="" >
		</div>
			<div class="form-group">
			<label for="articulos_iva"> IVA del Artículo</label>
			<input type="text" class="form-control iva" readonly name="articulos_iva" id="articulos_iva"  >
		</div>
			<div class="form-group">
				<label for="vdet_cantidad">Cantidad</label>
				<input type="number" name="vdet_cantidad" id="vdet_cantidad" class="form-control"  placeholder="Cantidad del articulo" value="{{ old('vdet_cantidad') }}">
			</div>
		<div class="form-group">
			<button type="button" id="bt_add" class="btn btn-primary">Agregar</button>
		</div>
	</div>
<!-- Tabla de los articulos agregados -->
	<div class="col-md-12">
		<table id="detalles" class="table table-striped table-bordered table-hover table-condensed" style="margin-top: 10px">
			<thead style="background-color: #A9D0F5;">
				<th>Opciones</th>
				<th>Artículo</th>
				<th>Cantidad</th>
				<th>IVA</th>
				<th>Precio Articulo</th>
				<th>Subtotal</th>
			</thead>
			<tfoot>
				<th>

						<input 	type="hidden" name="vent_iva5" 
						class="form-control" id="vent_iva5"
						value="{{ old('vent_iva5') }} " placeholder="0" readonly>
				
							<input 	type="hidden" name="vent_iva10" 
						class="form-control" id="vent_iva10"
						value="{{ old('vent_iva10') }} " placeholder="0" readonly>
				

				</th>
				<th>IVA</th>
				<th>
					<input 	type="number" name="vent_totalIva" 
						class="form-control" id="vent_totalIva"
						value="{{ old('vent_totalIva') }} " placeholder="0" readonly>
				</th>
				<th>Total</th>
				<th>
					<input 	type="number" name="vent_totalFactura" 
							class="form-control" id="vent_totalFactura"
							value="{{ old('vent_totalFactura') }} " placeholder="0" readonly>
				</th>
			</tfoot>
			
		</table>
		
	</div>
	<div class="col-md-12" id="guardar">
		<div class="form-group">
			<button class="btn btn-primary" type="submit">Guardar</button>
		</div>
	</div>
@push('scripts')
<script>




	$(document).ready(function(){
		$("#bt_add").click(function(){
			agregar();
		});
	});
	var cont = 0;
	var vent_totalFactura = 0;
	var subtotal = [];
	var vent_totalIva = 0;
	var iva =  [];
	var iva5 = 0;
	var iva10 = 0;

	//Cuando cargue el documento
	//Ocultar el botón Guardar
	$("#guardar").hide();
	function agregar(){
		//Obtener los valores de los inputs
		articulo_id = $("#articulo_descripcion").val();
		articulo = $("#articulo_descripcion option:selected").text();
		vdet_cantidad = $("#vdet_cantidad").val();
		precio_articulo = $("#articulos_precio").val();

		//Validar los campos
		if(articulo_id != "" && vdet_cantidad > 0 && precio_articulo != ""){
			//subtotal array inicie en el indice cero
			subtotal[cont] = (vdet_cantidad * precio_articulo);
			vent_totalFactura = vent_totalFactura + subtotal[cont];				
			iva[cont] =   $("#articulos_iva").val();
			
			//calcula iva
			if(iva[cont] == 10){
			vent_totalIva = vent_totalIva + subtotal[cont] /11;
			iva10 = iva10 + subtotal[cont] /11;

			} 
			if(iva[cont] == 5){
			vent_totalIva = vent_totalIva + subtotal[cont] /21;
			iva5 = iva5 + subtotal[cont] /21;
			}
		
			var fila = '<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-warning" onclick="eliminar('+cont+')">X</button></td><td><input type="hidden" name="articulo_id[]" value="'+articulo_id+'">'+articulo+'</td><td><input type="number" name="vdet_cantidad[]" value="'+vdet_cantidad+'"readonly></td><td>'+iva[cont]+'</td><td><input type="text" name="precio_articulo[]" value="'+precio_articulo+'"readonly></td><td>'+subtotal[cont]+'</td></tr>';
			cont++;
			limpiar();
			$("#vent_totalFactura").html("₲" + vent_totalFactura);
			evaluar();
			$("#detalles").append(fila);
		}else{
			alert("Error al ingresar el detalle de la venta, revise los datos del artículo");
		}
	}
	function limpiar(){
		$("#vdet_cantidad").val("");
		$("#articulos_precio").val("");
	}
	//Muestra botón guardar
	function evaluar(){
		if(vent_totalFactura > 0){
			//muestra total factura

			document.getElementById("vent_totalIva").value = vent_totalIva.toFixed(2);
			document.getElementById("vent_totalFactura").value = vent_totalFactura;
			document.getElementById("vent_iva5").value = iva5;
			document.getElementById("vent_iva10").value = iva10;

			$("#guardar").show();
		}else{
			$("#guardar").hide();
		}
	}
	function eliminar(index){

			if(iva[index] == 10){
				vent_totalIva = vent_totalIva-(subtotal[index]/11);
				iva10 = iva10 - subtotal[index] /11;
			} 
			if(iva[index] == 5){
				vent_totalIva = vent_totalIva-(subtotal[index]/21);
				iva5 = iva5 - subtotal[index] /21;
			}


		vent_totalFactura = vent_totalFactura-subtotal[index];
		$("#vent_totalFactura").html("₲" + vent_totalFactura);
		$("#fila" + index).remove();
		evaluar();
	}

	//Traer precio de artículos
	$('.precio').on('change', function() {
	$('.precio')
	.val(
		$(this).find(':selected').data('precio')
	);
	});

	
	//Traer IVA de artículos
	$('.iva').on('change', function() {
	$('.iva')
	.val(
		$(this).find(':selected').data('iva')
	);
	});
</script>
@endpush