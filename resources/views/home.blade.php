@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
  <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>Deposito</h3>

                <p>Deposito</p>
              </div>
              <div class="icon">
                <i class="fa fa-clone"></i>
              </div>
              <a href="" class="small-box-footer">Mas informacion <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                 <h3>Stock</h3>
                <p>Stock</p>
              </div>
              <div class="icon">
                <i class="fa fa-book"></i>
              </div>
              <a href="{{ route('stocks.index') }}" class="small-box-footer">Mas informacion <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
             <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>Usuarios</h3>

                <p>Usuarios</p>
              </div>
              <div class="icon">
               <i class="fa fa-user"></i>
              </div>
              <a href="{{ route('users.index') }}" class="small-box-footer">Mas informacion <i class="fa fa-arrow-circle-right"></i></a>
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
