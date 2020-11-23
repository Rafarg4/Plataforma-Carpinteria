<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('proveedor_id')->unsigned();
            $table->BigInteger('user_id')->unsigned();
            $table->integer('producto_id')->unsigned();
            $table->date('comp_fecha');
            $table->text('comp_numero');
            $table->text('comp_tipo');
            $table->text('comp_iva');
            $table->text('comp_totalfactura');
            $table->text('comp_ivacinco');
            $table->text('comp_ivadiez');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('proveedor_id')->references('id')->on('proveedors');
            $table->foreign('producto_id')->references('id')->on('productos');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('compras');
    }
}
