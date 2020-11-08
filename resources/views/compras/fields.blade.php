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
<div class="form-group col-sm-6">
    {!! Form::label('producto_id', 'Producto :') !!}
    {!! Form::select('producto_id', $productos, null, ['required', 'class' => 'form-control','placeholder'=>'Seleccione']) !!}
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
    {!! Form::label('comp_iva', 'Iva:') !!}
    {!! Form::text('comp_iva', null, ['class' => 'form-control']) !!}
</div>
<!-- Tabla de los articulos agregados para la compra -->
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
                        <input  type="hidden" name="comp_ivacinco" 
                        class="form-control" id="comp_ivacinco"
                        value="{{ old('comp_ivacinco') }} " placeholder="0" readonly>
                
                            <input  type="hidden" name="comp_ivadiez" 
                        class="form-control" id="comp_ivadiez"
                        value="{{ old('comp_ivadiez') }} " placeholder="0" readonly>
            
                </th>
                <th>IVA</th>
                <th>
                    <input  type="number" name="comp_iva" 
                        class="form-control" id="comp_iva"
                        value="{{ old('comp_iva') }} " placeholder="0" readonly>
                </th>
                <th>Total</th>
                <th>
                    <input  type="number" name="vent_totalFactura" 
                            class="form-control" id="vent_totalFactura"
                            value="{{ old('vent_totalFactura') }} " placeholder="0" readonly>
                </th>
            </tfoot>
            
        </table>
        
    </div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('GUARADAR', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('compras.index') }}" class="btn btn-default">CANCELAR</a>
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