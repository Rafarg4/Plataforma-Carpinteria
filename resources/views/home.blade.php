@extends('layouts.app')

@section('content')

   <div class="row">
  <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">


        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>VENTAS</h3>
               
                <p>VENTAS</p>
              </div>
              <div class="icon">
               <i class="fa fa-shopping-cart"></i>
              </div>
              <a href="{{ route('ventas.index') }}" class="small-box-footer">Mas informacion <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>DEPOSITO</h3>

                <p>DEPOSITO</p>
              </div>
              <div class="icon">
                <i class="fa fa-clone"></i>
              </div>
              <a href="{{ route('depositos.index') }}" class="small-box-footer">MAS INFORMACION<i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

          <div class="col-lg-3 col-6">
         
           <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                 <h3>STOCK</h3>
                <p>STOCK</p>
              </div>
              <div class="icon">
                <i class="fa fa-book"></i>
              </div>
              <a href="{{ route('stocks.index') }}" class="small-box-footer">MAS INFORMACION<i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
             <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>USUARIO</h3>

                <p>USUARIOS</p>
              </div>
              <div class="icon">
               <i class="fa fa-user"></i>
              </div>
              <a href="{{ route('users.index') }}" class="small-box-footer">MAS INFORMACION<i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
           <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>TRANSFERENCIA</h3>

                <p>TRANSFERENCIA</p>
              </div>
              <div class="icon">
               <i class="fa fa-clipboard"></i>
              </div>
              <a href="{{ route('transferencias.index') }}" class="small-box-footer">MAS INFORMACION<i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>PRODUCTO</h3>

                <p>PRODUCTO</p>
              </div>
              <div class="icon">
               <i class="fa fa-archive"></i>
              </div>
              <a href="{{ route('productos.index') }}" class="small-box-footer">MAS INFORMACION<i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>CATEGORIA</h3>

                <p>CATEGORIA</p>
              </div>
              <div class="icon">
            <i class="fa fa-edit"></i>
              </div>
              <a href="{{ route('categorias.index') }}" class="small-box-footer">MAS INFORMACION<i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>PROVEEDOR</h3>

                <p>PROVEEDOR</p>
              </div>
              <div class="icon">
             <i class="fa fa-truck"></i>
              </div>
              <a href="{{ route('proveedors.index') }}" class="small-box-footer">MAS INFORMACION<i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>COMPRAS</h3>

                <p>COMPRAS</p>
              </div>
              <div class="icon">
            <i class="fa fa-shopping-cart"></i>
              </div>
              <a href="{{ route('compras.index') }}" class="small-box-footer">MAS INFORMACION<i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          </div>
        
</div>
</div>
</section>


</div>

    </div>
</div>
@endsection
