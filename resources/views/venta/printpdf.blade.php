@extends('layouts.app')
@section('content')

{{-- <a href="{{ route('venta.pdf', [$venta->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-file"></i></a> --}}

<link href="{{ asset('/css/factura.css') }}" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col-xs-8" id="info_empresa">
            <div class="col-xs-3" >
                <img class="img img-responsive" src="{{ asset('logo-carpinteria.png') }}"alt="Logotipo">
            </div>
            <div class="col-xs-9 ">
                <h2><strong>Plataforma Carpintería S.A.</strong></h2>
                <h4><strong>Venta de muebles e insumos en gral.</strong></h4>
                <h5>Padre Kreusser esq. Independencia Nacional. Encarnación - Itapúa - PY.</h5>
                

                <h5>Cel.: 0995 123556</h4>
            </div>
        </div>
        <div class="col-xs-3"  id="nrofactura" >
            <h6>TIMBRADO Nº 123456789</h6>
            <h6>Fecha de Inicio 18 de Octubre 2020<h6>
            <h6>Válido hasta 18 de Octubre 2021<h6>
            <h6>R.U.C. 1234567 - 8<h6>
            <h3><strong> FACTURA </strong> <h3><br>
            <h4><strong> Nº </strong> 001-001  {{ $venta->vent_numero }}<h4>
        </div>
    </div>

</div>

<table class="table table-bordered">
  <tbody>
    <tr>
      <td><h5>Fecha: {{ $venta->vent_fecha }}</h5></td>
      <td colspan="4"> <div class="col-xs-3"><h5>Condición de Venta:</h5></div>
          @if ($venta->vent_tipo  === 'Contado')
                <div class="col-xs-1"><h5>Contado:</h5></div>
                <div class="col-xs-1"><h5><i class="glyphicon glyphicon-check"></i></h5></div>
                <div class="col-xs-1"><h5>Crédito:</h5></div>
                <div class="col-xs-1"><h5><i class="glyphicon glyphicon-unchecked"></i>:</h5></div>             
              @else
                <div class="col-xs-1"><h5>Contado:</h5></div>
                <div class="col-xs-1"><h5><i class="glyphicon glyphicon-unchecked"></i></h5></div>
                <div class="col-xs-1"><h5>Crédito:</h5></div>
                <div class="col-xs-1"><h5><i class="glyphicon glyphicon-check"></i>:</h5></div>                     
            @endif</td>
   
    </tr>


    <tr>
    <td colspan="5"> <h5>Nombre o Razon Social: {{ $venta->cliente->clientes_nombre }}</h5></td>
    </tr>
    <tr>
    <td><h5>R.U.C: {{ $venta->cliente->clientes_ruc }}</h5></td>
      <td><h5>Tel. 0995123456</h5></td>
      <td colspan="4" ><h5>Domicilio: Encarnación</h5></td>
    </tr>
  </tbody>
</table>

    <div class="row">
        <div class="col-xs-12">
            <table id="detalles" class="table table-striped table-bordered table-hover table-condensed" style="margin-top: 10px">
                <thead style="background-color: #A9D0F5">
                    <th>Cantidad</th>
                    <th>Artículo</th>
                </thead>								
                <tbody>
                    @foreach($detalle as $det)
                        @if ($det->venta_id == $venta->id)
                        <tr>
                            <td><p>{{$det->vdet_cantidad }}</p>  <!-- trae la cantidad del articulo--></td>
                            <td><p>{{ $det->articulo->articulos_descripcion }}</p> <!-- trae el nombre del articulo--></td>
                        </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


  <table class="table table-bordered">
  <tbody>
    <tr>
         <td colspan="4"> Total a pagar:</td>
      <td><h5>Total a pagar GS. {{ $venta->vent_totalFactura }}</h5></td>
   
    </tr>
      <tr>
      <td colspan="4"> <div class="col-xs-3"><h5>IVA:</h5></div>
          @if ($venta->vent_iva  === '5.00')
                <div class="col-xs-1"><h5>10%:</h5></div>
                <div class="col-xs-1"><h5><i class="glyphicon glyphicon-check"></i></h5></div>
                <div class="col-xs-1"><h5>5%:</h5></div>
                <div class="col-xs-1"><h5><i class="glyphicon glyphicon-unchecked"></i>:</h5></div>             
              @else
                <div class="col-xs-1"><h5>10%:</h5></div>
                <div class="col-xs-1"><h5><i class="glyphicon glyphicon-unchecked"></i></h5></div>
                <div class="col-xs-1"><h5>5%:</h5></div>
                <div class="col-xs-1"><h5><i class="glyphicon glyphicon-check"></i>:</h5></div>                     
            @endif</td>
         <td><h5>Total IVA GS. </h5></td>

    </tr>


  </tbody>
    </table>
</div>
</body>
@endsection