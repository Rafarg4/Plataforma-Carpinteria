@extends('layouts.app')
@section('content')

         {{-- <h6>soy index del redteam</h6> --}}

<div class="container">
    <div class="row">
        <div class="col-md-5">
            <h3>Formulario Ventas </h3>
            <form action="formget.php" method="get" >

                <div class="form-group">
                    <div class="col-4">
                        <label class="control-label col-2" for="date">Fecha:</label>
                        <input type="date" class="form-control" id="date" placeholder="fecha de venta">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-4">
                        <label class="control-label col-2" for="number">Factura Nro:</label>
                        <input type="number" class="form-control" id="number" placeholder="Nro de factura">
                    </div>
                </div>
                
                <div class="form-group">
                      <label class="control-label col-2" for="user">Vendedor:</label>
                      <input class="form-control mr-sm-2" type="search" placeholder="Usuario" aria-label="Vendedor">
                </div>

                 <div class="form-group">
                    <label class="control-label col-2" for="cliente">Cliente:</label>
                    <input class="form-control mr-sm-2" type="search" placeholder="CI/RUC" aria-label="CI/RUC">
                    <input class="form-control mr-sm-2" type="search" placeholder="Usuario" aria-label="Cliente">
                </div>

                <div class="form-group">
                    <label class="control-label col-2" for="Articulos">Articulos:</label>
                    <input class="form-control mr-sm-2" type="search" placeholder="articulo" aria-label="articulo">
                    <input class="form-control mr-sm-2" type="search" placeholder="articulo" aria-label="articulo">
                    <input class="form-control mr-sm-2" type="search" placeholder="articulo" aria-label="articulo">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="glyphicon glyphicon-plus"></i> Agregar</button>
                </div>
              
                  <div class="form-group">
                        <label class="control-label col-2" for="formas">Formas de pago:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="formas" id="efectivo" value="efectivo" checked>
                            <label class="form-check-label" for="efectivo">
                            Efectivo
                            </label>
                            <input class="form-check-input" type="radio" name="formas" id="cheque" value="cheque">
                            <label class="form-check-label" for="cheque">
                            Cheque
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-2" for="iva">IVA:</label>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="iva" id="5" value="5%" checked>
                        <label class="form-check-label" for="5%">
                            5%
                        </label>
                        <input class="form-check-input" type="radio" name="iva" id="10" value="10%">
                        <label class="form-check-label" for="cheque">
                            10% 
                        </label>
                    </div>         
                </div>

                    <button class="btn btn-primary" type="submit"> <i class="glyphicon glyphicon-saved"></i>Guardar</button>
            
            </form>
        </div>
@endsection
