@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            VENTAS
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">

                   

             
                    <a href="{{ route('ventas.index') }}" class="btn btn-default">VOLVER</a>
                </div>
            </div>
        </div>
    </div>
@endsection
