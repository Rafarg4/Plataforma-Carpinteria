<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
	<div class="col-md-4">
		<div class="form-group">
			<label for="vent_fecha">Fecha</label>
			<input type="date" name="vent_fecha" class="form-control" value="{{ old('vent_fecha') }}">
		</div>
        <div class="form-group">
			<label for="user_id">Vendedor: {{Auth::user()->name}}</label>
			<input type="text" name="user_id" class="form-control" value="{{ Auth::user()->id }}" readonly>
		</div>			
		<div class="form-group">
			<select name="vent_tipo" id="vent_tipo" class="form-control">
				<option value="contado" selected>Contado</option>
				<option value="credito" >Credito</option>
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
            <input type="text" name="vent_numero" class="form-control" placeholder="Número de Factura" value="{{ old('vent_numero') }} ">
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
				<input type="number" name="vdet_cantidad" id="vdet_cantidad" class="form-control"  placeholder="Cantidad del articulo" value="{{ old('vdet_cantidad') }}">
			</div>

		<div class="form-group">
			<button type="button" id="bt_add" class="btn btn-primary">Agregar</button>
		</div>
	</div>
<!-- Tabla de los articulos agregados -->
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
				<th>
				<input type="number" name="vent_totalFactura" 
				class="form-control" id="vent_totalFactura"
				value="{{ old('vent_totalFactura') }} " placeholder="0" readonly>
				</th>
			</tfoot>
			<tbody>						
			</tbody>
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


			var fila = '<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-warning" onclick="eliminar('+cont+')">X</button></td><td><input type="hidden" name="articulo_id[]" value="'+articulo_id+'">'+articulo+'</td><td><input type="number" name="vdet_cantidad[]" value="'+vdet_cantidad+'"readonly></td><td><input type="number" name="precio_articulo[]" value="'+precio_articulo+'"readonly></td><td>'+subtotal[cont]+'</td></tr>';

			cont++;
			limpiar();
			$("#vent_totalFactura").html("₲" + vent_totalFactura);
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
		if(vent_totalFactura > 0){
			document.getElementById("vent_totalFactura").value = vent_totalFactura;
			$("#guardar").show();
		}else{
			$("#guardar").hide();
		}
	}
	function eliminar(index){
		vent_totalFactura = vent_totalFactura-subtotal[index];
		$("#vent_totalFactura").html("₲" + vent_totalFactura);
		$("#fila" + index).remove();
		evaluar();
	}


</script>
@endpush