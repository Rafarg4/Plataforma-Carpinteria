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
                <h3>Ventas</h3>

                <p>Ventas</p>
              </div>
              <div class="icon">
                <i class="fa fa-clone"></i>
              </div>
              <a href="{{ route('ventas.index') }}" class="small-box-footer">Mas informacion <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
</div>
</div>
</section>
</div>

    </div>
</div>
@endsection
