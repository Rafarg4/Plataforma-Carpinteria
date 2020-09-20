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
          </div>
        
</div>
</div>
</section>
</div>

    </div>
</div>
@endsection
