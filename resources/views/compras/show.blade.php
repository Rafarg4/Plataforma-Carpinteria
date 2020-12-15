@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
           DETALLES DE COMPRAS 
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('compras.show_fields')
                    <a href="{{ route('compras.index') }}" class="btn btn-default">ATRÁS</a>
                </div>
            </div>
        </div>
    </div>
@endsection
