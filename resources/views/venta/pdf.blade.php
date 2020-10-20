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
                        
  
  
                       
	<table>

		<thead style="background-color: #A9D0F5">
   <tr>
    <th>CANT.</th>
    <th>CLASE DE MERCADERIAS y/o SERVICIOS</th>
   </tr>
   </thead>	

   @foreach($detalle as $det)
      @if ($det->venta_id == $venta->id)	
   <tr>
    <td><p>{{   $det->vdet_cantidad }}</p></td>
    <td><p>{{ $det->articulo->articulos_descripcion }}</p></td>
   </tr>
   @endif
    @endforeach


   <tr>
    <td colspan="3"><p>Precio total</p></td>
	  <td><p>{{ $venta->vent_totalFactura }}</p></td>
   </tr> 
  </table>       
    <a href="{{ route('ventas.index') }}" class="btn btn-default">VOLVER</a>
</body>
</html>