<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormaDePagoTable extends Migration
{
   
    public function up()
    {
        Schema::create('forma_de_pago', function (Blueprint $table) {
            $table->id();
            $table->string('forma_descripcion');
            $table->timestamps();
        });
    }

 
    public function down()
    {
        Schema::dropIfExists('forma_de_pago');
    }
}
