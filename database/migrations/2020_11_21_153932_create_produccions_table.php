<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduccionsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produccions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pedido_id')->unsigned();
            $table->BigInteger('user_id')->unsigned();
            $table->text('fecha_inicio');
            $table->text('fecha_culminacion');
            $table->text('estado');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('pedido_id')->references('id')->on('pedidos');
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
        Schema::drop('produccions');
    }
}
