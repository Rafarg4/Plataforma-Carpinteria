<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->integer('cliente_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('user_id')->references('id')->on('users');


            $table->date('vent_fecha');
            $table->string('vent_numero');
            $table->string('vent_tipo');
            $table->decimal('vent_iva', 5, 2);
            $table->double('vent_totalFactura');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}
