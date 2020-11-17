@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            DEPÓSITO
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('depositos.show_fields')
                    <a href="{{ route('depositos.index') }}" class="btn btn-default">VOLVER</a>
                </div>
            </div>
        </div>
    </div>
@endsection
