@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            PROVEEDOR
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('proveedors.show_fields')
                    <a href="{{ route('proveedors.index') }}" class="btn btn-default">VOLVER</a>
                </div>
            </div>
        </div>
    </div>
@endsection
