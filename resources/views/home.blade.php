@extends('layouts.app')

@section('content')

    <div class="row">
  <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          
          <div class="col-lg-4 col-">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>DEPÓSITO</h3>

                <p>DEPÓSITO</p>
              </div>
              <div class="icon">
                <i class="fa fa-clone"></i>
              </div>
              <a href="{{ route('depositos.index') }}" class="small-box-footer">MÁS INFORMACIÓN<i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                 <h3>STOCK</h3>
                <p>STOCK</p>
              </div>
              <div class="icon">
                <i class="fa fa-book"></i>
              </div>
              <a href="{{ route('stocks.index') }}" class="small-box-footer">MÁS INFORMACIÓN<i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
             <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>USUARIO</h3>

                <p>USUARIOS</p>
              </div>
              <div class="icon">
               <i class="fa fa-user"></i>
              </div>
              <a href="{{ route('users.index') }}" class="small-box-footer">MÁS INFORMACIÓN<i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
           <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>TRANSFERENCIA</h3>

                <p>TRANSFERENCIA</p>
              </div>
              <div class="icon">
               <i class="fa fa-clipboard"></i>
              </div>
              <a href="{{ route('transferencias.index') }}" class="small-box-footer">MÁS INFORMACIÓN<i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>PRODUCTO</h3>

                <p>PRODUCTO</p>
              </div>
              <div class="icon">
               <i class="fa fa-archive"></i>
              </div>
              <a href="{{ route('productos.index') }}" class="small-box-footer">MÁS INFORMACIÓN<i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>CATEGORÍA</h3>

                <p>CATEGORÍA</p>
              </div>
              <div class="icon">
            <i class="fa fa-edit"></i>
              </div>
              <a href="{{ route('categorias.index') }}" class="small-box-footer">MÁS INFORMACIÓN<i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>PEDIDOS</h3>

                <p>PEDIDOS</p>
              </div>
              <div class="icon">
            <i class="fa fa-edit"></i>
              </div>
              <a href="{{ route('pedidos.index') }}" class="small-box-footer">MÁS INFORMACIÓN<i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>PROVEEDOR</h3>

                <p>PROVEEDOR</p>
              </div>
              <div class="icon">
             <i class="fa fa-truck"></i>
              </div>
              <a href="{{ route('proveedors.index') }}" class="small-box-footer">MÁS INFORMACIÓN<i class="fa fa-arrow-circle-right"></i></a>
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
