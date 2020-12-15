<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidoDetallesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_detalles', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('articulo_id')->unsigned();
            $table->integer('pedido_id')->unsigned();
            $table->string('cdet_cantidad');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('articulo_id')->references('id')->on('articulos');
            $table->foreign('pedido_id')->references('id')->on('pedidos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pedido_detalles');
    }
}
