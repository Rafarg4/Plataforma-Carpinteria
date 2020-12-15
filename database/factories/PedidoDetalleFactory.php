<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\PedidoDetalle;
use Faker\Generator as Faker;

$factory->define(PedidoDetalle::class, function (Faker $faker) {

    return [
        'producto_id' => $faker->randomDigitNotNull,
        'pedido_id' => $faker->randomDigitNotNull,
        'cdet_cantidad' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
