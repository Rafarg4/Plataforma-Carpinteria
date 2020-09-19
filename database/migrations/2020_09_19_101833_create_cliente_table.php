<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteTable extends Migration
{
   
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->id();
            $table->string('cliente_nombre');
            $table->string('cliente_ruc');
            $table->string('cliente_telefono');
            $table->string('cliente_direccion');
            $table->string('cliente_email');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('cliente');
    }
}
