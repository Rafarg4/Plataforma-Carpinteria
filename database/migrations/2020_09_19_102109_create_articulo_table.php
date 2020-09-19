<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticuloTable extends Migration
{
   
    public function up()
    {
        Schema::create('articulo', function (Blueprint $table) {
            $table->id();
            $table->string('articulo_descripcion');
            $table->double('articulo_precio', 15, 2);
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('articulo');
    }
}
