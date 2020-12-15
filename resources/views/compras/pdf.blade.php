<html>
<head>
  <title>Factura de compra {{ $compra->vent_numero }}</title>
  
</head>
<body>
<style>
    table, th, td, tr {
      border: 1px solid black;
      border-collapse: collapse;
    }
    th {
      text-align: center;
    }

  
  </style>
<!-- CABECERA DE LA FACTURA -->
<table style="width:100%">
  <tr>
    <td style="text-align: center;">
    <img width="60"
     height="60" 
     src="https://png.pngtree.com/png-vector/20190217/ourmid/pngtree-woodworking-gear-logo-design-template-vector-element-png-image_555246.jpg">
      <strong style="font-size:120%;">Plataforma Carpintería S.A.</strong> <br>
      <strong style="font-size:80%;">compra de muebles e insumos en gral.</strong><br>
      <p style="font-size:70%;"> Padre Kreusser esq. Independencia Nacional. Encarnación - Itapúa - PY.</p>
    </td>

    <td style="text-align: center;">
     <p>TIMBRADO Nº 45 <br>
      Fecha de Inicio 10 de Dicimbre 2020 <br>
      Válido hasta 28 de Diciembre 2021 <br>
      R.U.C. 194854 - 8</p>
      <strong > FACTURA </strong> <br>
      <strong > Nº {{ $compra->comp_numero }}</strong>
    </td>
  </tr>      
</table> 
<br>
<!-- DETALLE DEL CLIENTE -->
<table style="width:100%">
  <tr>
    <td>FECHA DE EMISION {{ $compra->comp_fecha }} </td>
    <td style="text-align: right;">CONDICION DE COMPRA: {{ $compra->comp_tipo }} </td>
    
  </tr>

  <tr>
    <td>RUC: {{ $compra->proveedor->ruc_proveedor }}</td>
    <td style="text-align: right;">NOTA DE REMISION Nº9387534</td>
  </tr>

  <tr>
    <td>NOMBRE O RAZÓN SOCIAL: {{ $compra->proveedor->nombre_proveedor }}</td>
    <td style="text-align: right;">VENDEDOR: {{ $compra->user->name }}</td>
  </tr>
</table> 
<br>           
  <!-- DETALLE DE LA compra -->
  
                       
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
  @if ($det->compra_id == $compra->id)	
   <tr>
    <td>{{ $det->cdet_cantidad }}</td>
    <td>{{ $det->articulo->articulos_descripcion }}</td>
    <td>4500</td>
    <td> ---</td>
    <td>{{($compra->comp_totalfactura/10)}} GS</td>
    <td>{{($compra->comp_totalfactura/5)}} GS </td>
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
	  <td colspan="2">TOTAL: {{ $compra->comp_totalfactura }}</td>
    
    
   </tr> 

   <tr>
    <td colspan="6" >
      <p>LIQUIDACION DEL IVA: {{($compra->comp_totalfactura/5)}} GS
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(5%): {{($compra->comp_totalfactura/10)}} GS  
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(10%): {{($compra->comp_totalfactura/5)}} GS 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TOTAL IVA: {{($compra->comp_totalfactura/5)}} GS 
      </p>
    </td>
    
   </tr>

   <tr>
    <td colspan="5"><P style="font-size:60%;">UNIVERSIDAD AUTONOMA DE ENCARNACION - Padre Kreusser, entre Honorio González e Independencia Nacional
      Encarnación Itapúa - Paraguay - Tel:+595 71 205454 - +595 71 204330</P></td>
    <td><P style="font-size:60%; ">Original: Cliente</P></td>
   </tr>
</table>
</body>
</html>