@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
     <div class="jumbotron">
	  <h1 class="display-4">Hola, {{ Auth::user()->name}}! usted pertenece al grupo de Red Team</h1>
	  <p>Si visualiza esta pantalla de bienvenida esta habilitado para programar.</p>
      <p>commit Ale</p>
	  <p>commit Gio</p>
      <p>commit Ariel</p>
      <p>commit Uli</p>
	  <a class="btn btn-primary btn-lg" href="#" role="button">Iniciar</a>
</div>

    </div>
</div>
@endsection
