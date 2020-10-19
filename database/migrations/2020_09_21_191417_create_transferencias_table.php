<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransferenciasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transferencias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cantidad');
            $table->integer('origne_id')->unsigned();
            $table->integer('destino_id')->unsigned();
            $table->text('producto');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('origne_id')->references('id')->on('depositos');
            $table->foreign('destino_id')->references('id')->on('depositos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('transferencias');
    }
}
