<!-- Cliente Field -->

<div class="form-group col-sm-6">
    {!! Form::label('cliente_id', 'CLIENTE:') !!}
    {!! Form::select('cliente_id', $clientes, null, ['required', 'class' => 'form-control','placeholder'=>'Seleccione']) !!}
</div>



<!-- Fecha Inicio Field -->
<div class="form-group col-sm-6">

    {!! Form::label('fecha_inicio', 'Fecha Inicio:') !!}
    {!! Form::date('fecha_inicio', null, ['class' => 'form-control']) !!}

</div>

<!-- Fecha Entrega Field -->
<div class="form-group col-sm-6">

    {!! Form::label('fecha_entrega', 'Fecha Entrega:') !!}
    {!! Form::date('fecha_entrega', null, ['class' => 'form-control']) !!}

</div>


 <div class="col-md-6">
        <div class="form-group precio">
            <label for="producto_id">ARTICULO</label>
            <select name="articulo_descripcion" id="articulo_descripcion" class="form-control selectpicker" data-live-search="true">
                <option disabled selected>Selecciona un artículo</option>
                @foreach($productos as $art)
                <option value="{{ $art->id }}" id="articulo_select" data-precio="{{ $art->articulos_precio }}"  >
                        {{ $art->articulos_descripcion }}  
                    </option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group col-sm-6">
            <label for="articulos_precio"> PRECIO</label>
            <input type="text" class="form-control precio" readonly name="articulos_precio" id="articulos_precio" value="" >
        </div>

<div class="form-group col-sm-6">
    {!! Form::label('cdet_cantidad', 'CANTIDAD:') !!}
    {!! Form::text('cdet_cantidad', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
            <button type="button" id="bt_add" class="btn btn-primary">AGREGAR</button>
        </div>


  <div class="col-md-12">
        <table id="detalles" class="table table-striped table-bordered table-hover table-condensed" style="margin-top: 10px">
            <thead style="background-color: #A9D0F5;">
               <th>OPCIONES</th>
                <th>ARTICULO</th>
                <th>CANTIDAD</th>
                <th>PRECIO PRODUCTO</th>
                <th>SUBTOTAL</th>
            </thead>
            <tfoot>
                
               
                
                <th>TOTAL</th>
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
            <button class="btn btn-primary" type="submit">GUARDAR</button>
        </div>
    </div>

    
<script type="text/javascript">

    $(document).ready(function(){
        $("#bt_add").click(function(){
            agregar();
        });
    });
    var cont = 0;
    var comp_totalfactura = 0;
    var subtotal = [];

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
            
            
            
            
        
            var fila = '<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-warning" onclick="eliminar('+cont+')">X</button></td><td><input type="hidden" name="articulo_id[]" value="'+articulo_id+'">'+producto_id+'</td><td><input type="number" name="cdet_cantidad[]" value="'+cdet_cantidad+'"readonly></td><td><input type="text" name="precio_articulo[]" value="'+precio_articulo+'"readonly></td><td>'+subtotal[cont]+'</td></tr>';
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

            
            document.getElementById("comp_totalfactura").value = comp_totalfactura;

            $("#guardar").show();
        }else{
            $("#guardar").hide();
        }
    }
    function eliminar(index){

           

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

   
</script>
