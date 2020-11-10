<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTipoIva extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::table('ventas', function ($table) {
            $table->decimal('vent_iva', 9, 2)->change();
        });
        Schema::table('articulos', function ($table) {
            $table->integer('art_tipoIva');
        });
    /**
     * Reverse the migrations.
     *
     * @return void
     */
     function down()
    {
        //
    }
}
}