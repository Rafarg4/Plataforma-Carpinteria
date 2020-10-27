<html>
<head>
  <title>Factura de venta {{ $venta->vent_numero }}</title>
  
</head>
<body>
<!-- CABECERA DE LA FACTURA -->
<table style="width:100%">
  <tr>
    <td style="text-align: center;">
    <img width="60"
     height="60" 
     src="https://png.pngtree.com/png-vector/20190217/ourmid/pngtree-woodworking-gear-logo-design-template-vector-element-png-image_555246.jpg">
      <strong style="font-size:120%;">Plataforma Carpintería S.A.</strong> <br>
      <strong style="font-size:80%;">Venta de muebles e insumos en gral.</strong><br>
      <p style="font-size:70%;"> Padre Kreusser esq. Independencia Nacional. Encarnación - Itapúa - PY.</p>
    </td>

    <td style="text-align: center;">
     <p>TIMBRADO Nº 123456789 <br>
      Fecha de Inicio 18 de Octubre 2020 <br>
      Válido hasta 18 de Octubre 2021 <br>
      R.U.C. 1234567 - 8</p>
      <strong > FACTURA </strong> <br>
      <strong > Nº {{ $venta->vent_numero }}</strong>
    </td>
  </tr>      
</table> 
<br>
<!-- DETALLE DEL CLIENTE -->
<table style="width:100%">
  <tr>
    <td> {{ $venta->vent_fecha }} </td>
    <td style="text-align: right;">Tipo de venta: {{ $venta->vent_tipo }} </td>
    
  </tr>

  <tr>
  <td>RUC: {{ $venta->cliente->clientes_ruc }}</td>
  <td></td>
  </tr>

  <tr>
  <td>NOMBRE O RAZÓN SOCIAL: {{ $venta->cliente->clientes_nombre }}</td>
  <td style="text-align: right;">VENDEDOR: {{ $venta->user->name }}</td>
  </tr>
</table> 
<br>           
  <!-- DETALLE DE LA VENTA -->
  <style>
    table, th, td, tr {
      border: 1px solid black;
      border-collapse: collapse;
    }
    th {
      text-align: center;
    }

  
  </style>
                       
<table style="width:100%">

	
   <tr >
    <th>CANT.</th>
    <th>CLASE DE MERCADERIAS y/o SERVICIOS</th>
    <th>PRECIO UNI.</th>
    <th>EXENTAS</th>
    <th>5%</th>
    <th>10%</th>
   </tr>
  	

@foreach($detalle as $det)
  @if ($det->venta_id == $venta->id)	
   <tr>
    <td>{{ $det->vdet_cantidad }}</td>
    <td>{{ $det->articulo->articulos_descripcion }}</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
   </tr>
  @endif
@endforeach


   <tr>
    <td colspan="3">VALOR PARCIAL:</td>
    <td></td>
    <td></td>
    <td></td>
    
   </tr>

   <tr>
    <td colspan="4"><p>TOTAL A PAGAR GS.</td>
	  <td colspan="2">TOTAL: {{ $venta->vent_totalFactura }}</td>
    
    
   </tr> 

   <tr>
    <td colspan="2" >Liquidación del IVA:</td>
    <td>(5%) {{ $venta->vent_iva5}}</td>
    <td>(10%) {{ $venta->vent_iva10}}</td>

    <td>TOTAL IVA:</td>
    <td >{{ $venta->vent_iva}}</td>
   </tr>

   <tr>
    <td colspan="5"><P style="font-size:60%;">UNIVERSIDAD AUTONOMA DE ENCARNACION - Padre Kreusser, entre Honorio González e Independencia Nacional
      Encarnación Itapúa - Paraguay - Tel:+595 71 205454 - +595 71 204330</P></td>
    <td><P style="font-size:60%; ">Original: Cliente</P></td>
   </tr>
</table>
</body>
</html>