<!-- Cliente Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('proveedor_id', 'Proveedor:') !!}
    {!! Form::select('proveedor_id', $proveedors, null, ['required', 'class' => 'form-control','placeholder'=>'Seleccione']) !!}
</div>
<!-- User Id Field -->
<div class="form-group col-sm-6">
            <label for="user_id">Vendedor</label>
            <input type="hidden" name="user_id" class="form-control" value="{{ Auth::user()->id }}"  placeholder="{{ Auth::user()->name }}" readonly >
            <input type="text"  class="form-control" value="{{ Auth::user()->name }}"  placeholder="{{ Auth::user()->name }}" readonly >

        </div>  
<!-- Producto Id Field -->
<!-- agregar articulos -->
    <div class="col-md-6">
        <div class="form-group precio iva">
            <label for="producto_id">Artículo</label>
            <select name="articulo_descripcion" id="articulo_descripcion" class="form-control selectpicker" data-live-search="true">
                <option disabled selected>Selecciona un artículo</option>
                @foreach($productos as $art)
                <option value="{{ $art->id }}" id="articulo_select" data-precio="{{ $art->articulos_precio }}" data-iva="{{ $art->art_tipoIva }}"  >
                        {{ $art->articulos_descripcion }}  
                    </option>
                @endforeach
            </select>
        </div>
    </div>
  <!-- Comp Numero Field -->
<div class="form-group col-sm-6">
            <label for="articulos_precio"> Precio</label>
            <input type="text" class="form-control precio" readonly name="articulos_precio" id="articulos_precio" value="" >
        </div>
<!-- Comp Fecha Field -->
        <div class="form-group col-sm-6">
            <label for="comp_fecha">Fecha</label>
            <input type="date" name="comp_fecha" class="form-control" value="{{ old('comp_fecha',  Carbon\Carbon::today()->format('Y-m-d')) }}"readonly>
        </div>
<!-- Comp Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('comp_numero', ' Numero de compra:') !!}
    {!! Form::text('comp_numero', null, ['class' => 'form-control']) !!}
</div>

<!-- Comp Tipo Field -->
<div class="form-group col-sm-6 pull-left">
    {!! Form::label('comp_tipo', 'Tipo de pago:') !!}
   {!! Form::select('comp_tipo',array('contado' => 'contado', 'credito' => 'credito'),null, ['required', 'class' => 'form-control','placeholder'=>'Seleccione'])!!}
</div>

<!-- Comp Iva Field -->
<div class="form-group col-sm-6">
            <label for="articulos_iva"> Iva Artículo</label>
            <input type="text" class="form-control iva" readonly name="articulos_iva" id="articulos_iva"  >
        </div>
<!-- Comp Iva Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cdet_cantidad', 'Cantidad:') !!}
    {!! Form::text('cdet_cantidad', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6">
            <button type="button" id="bt_add" class="btn btn-primary">Agregar</button>
        </div>
<!-- Tabla de los articulos agregados para la compra -->
    <div class="col-md-12">
        <table id="detalles" class="table table-striped table-bordered table-hover table-condensed" style="margin-top: 10px">
            <thead style="background-color: #A9D0F5;">
                <th>Opciones</th>
                <th>Artículo</th>
                <th>Cantidad</th>
                <th>IVA</th>
                <th>Precio PRODUCTO</th>
                <th>Subtotal</th>
            </thead>
            <tfoot>
                <th>
                        <input  type="hidden" name="comp_ivacinco" 
                        class="form-control" id="comp_ivacinco"
                        value="{{ old('comp_ivacinco') }} " placeholder="0" readonly>
                
                            <input  type="hidden" name="comp_ivadiez" 
                        class="form-control" id="comp_ivadiez"
                        value="{{ old('comp_ivadiez') }} " placeholder="0" readonly>
            
                </th>
                <th>IVA</th>
                <th>
                    <input  type="number" name="comp_totalIva" 
                        class="form-control" id="comp_totalIva"
                        value="{{ old('comp_totalIva') }}" placeholder="0" readonly>
                </th>
                <th>Total</th>
                <th>
                    <input  type="number" name="comp_totalfactura" 
                            class="form-control" id="comp_totalfactura"
                            value="{{ old('comp_totalfactura') }}" placeholder="0" readonly>
                </th>
            </tfoot>
            
        </table>
        
    </div>
<!-- Submit Field -->
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
    var comp_totalfactura = 0;
    var subtotal = [];
    var comp_totalIva = 0;
    var iva =  [];
    var comp_ivacinco = 0;
    var comp_ivadiez = 0;

    //Cuando cargue el documento
    //Ocultar el botón Guardar
    $("#guardar").hide();
    function agregar(){
        //Obtener los valores de los inputs
        articulo_id = $("#articulo_descripcion").val();
        producto_id = $("#articulo_descripcion option:selected").text();
        cdet_cantidad = $("#cdet_cantidad").val();
        precio_articulo = $("#articulos_precio").val();

        //Validar los campos
        if(articulo_id != "" && cdet_cantidad > 0 && precio_articulo != ""){
            //subtotal array inicie en el indice cero
            subtotal[cont] = (cdet_cantidad * precio_articulo);
            comp_totalfactura = comp_totalfactura + subtotal[cont];             
            iva[cont] =   $("#articulos_iva").val();
            
            //calcula iva
            if(iva[cont] == 10){
            comp_totalIva = comp_totalIva + subtotal[cont] /11;
            comp_ivadiez = comp_ivadiez + subtotal[cont] /11;

            } 
            if(iva[cont] == 5){
            comp_totalIva = comp_totalIva + subtotal[cont] /21;
            comp_ivacinco = comp_ivacinco + subtotal[cont] /21;
            }
        
            var fila = '<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-warning" onclick="eliminar('+cont+')">X</button></td><td><input type="hidden" name="articulo_id[]" value="'+articulo_id+'">'+producto_id+'</td><td><input type="number" name="cdet_cantidad[]" value="'+cdet_cantidad+'"readonly></td><td>'+iva[cont]+'</td><td><input type="text" name="precio_articulo[]" value="'+precio_articulo+'"readonly></td><td>'+subtotal[cont]+'</td></tr>';
            cont++;
            limpiar();
            $("#comp_totalfactura").html("₲" + comp_totalfactura);
            evaluar();
            $("#detalles").append(fila);
        }else{
            alert("Error al ingresar el detalle de la venta, revise los datos del artículo");
        }
    }
    function limpiar(){
        $("#cdet_cantidad").val("");
        $("#articulos_precio").val("");
    }
    //Muestra botón guardar
    function evaluar(){
        if(comp_totalfactura > 0){
            //muestra total factura

            document.getElementById("comp_totalIva").value = comp_totalIva.toFixed(2);
            document.getElementById("comp_totalfactura").value = comp_totalfactura;
            document.getElementById("comp_ivacinco").value = comp_ivacinco;
            document.getElementById("comp_ivadiez").value = comp_ivadiez;

            $("#guardar").show();
        }else{
            $("#guardar").hide();
        }
    }
    function eliminar(index){

            if(iva[index] == 10){
                comp_totalIva = comp_totalIva-(subtotal[index]/11);
                comp_ivadiez = comp_ivadiez - subtotal[index] /11;
            } 
            if(iva[index] == 5){
                comp_totalIva = comp_totalIva-(subtotal[index]/21);
                comp_ivacinco = comp_ivacinco - subtotal[index] /21;
            }


        comp_totalfactura = comp_totalfactura-subtotal[index];
        $("#comp_totalfactura").html("₲" + comp_totalfactura);
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