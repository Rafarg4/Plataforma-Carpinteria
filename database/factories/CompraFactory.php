<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Compra;
use Faker\Generator as Faker;

$factory->define(Compra::class, function (Faker $faker) {

    return [
        'cliente_id' => $faker->randomDigitNotNull,
        'user_id' => $faker->randomDigitNotNull,
        'producto_id' => $faker->randomDigitNotNull,
        'comp_fecha' => $faker->word,
        'comp_numero' => $faker->text,
        'comp_tipo' => $faker->text,
        'comp_iva' => $faker->text,
        'comp_totalfactura' => $faker->text,
        'comp_ivacinco' => $faker->text,
        'comp_ivadiez' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
