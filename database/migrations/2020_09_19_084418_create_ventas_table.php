<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
   
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->date('vent_fecha');
            $table->string('vent_numero');
            $table->string('vent_tipo');
            $table->decimal('vent_iva', 5, 2);
            $table->string('vent_totalFactura');
            $table->timestamps();
        });
    } 


    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}
