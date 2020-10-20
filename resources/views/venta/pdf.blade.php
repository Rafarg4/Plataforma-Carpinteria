<html>
<head>
  <title>Factura de venta {{ $venta->vent_numero }}</title>
  
</head>
<body>

           
  
  <p>{{ $venta->cliente->clientes_nombre }}</p>
                        
  
  <p>{{ $venta->cliente->clientes_ruc }}</p>
                        
  
  <p>{{ $venta->user->name }}</p>
                        
  
  <p>{{ $venta->vent_fecha }}</p>
                        
  
  <p>{{ $venta->vent_numero }}</p>
                        
  
  <p>{{ $venta->vent_tipo }}</p>
                        
  
  
                       
	<table border="2">

		<thead style="background-color: #A9D0F5">
   <tr>
    <th>CANT.</th>
    <th>CLASE DE MERCADERIAS y/o SERVICIOS</th>
    <th>PRECIO UNI.</th>
    <th>EXENTAS</th>
    <th>5%</th>
    <th>10%</th>
    
   </tr>
   </thead>	

   @foreach($detalle as $det)
      @if ($det->venta_id == $venta->id)	
   <tr>
    <td><p>{{   $det->vdet_cantidad }}</p></td>
    <td><p>{{ $det->articulo->articulos_descripcion }}</p></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
   </tr>
   @endif
    @endforeach


   <tr>
    <td colspan="3"><p>TOTAL A PAGAR GS.</p></td>
	  <td><p>{{ $venta->vent_totalFactura }}</p></td>
   </tr> 

   <tr>
    <td colspan="2">TASA DEL IVA:</td>
    <td>(5%)</td>
    <td>(10%)</td>
    <td>TOTAL IVA:</td>
   </tr>
  </table>       
    <a href="{{ route('ventas.index') }}" class="btn btn-default">VOLVER</a>
</body>
</html>