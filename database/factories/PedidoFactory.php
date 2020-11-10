<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Pedido;
use Faker\Generator as Faker;

$factory->define(Pedido::class, function (Faker $faker) {

    return [
        'cliente' => $faker->text,
        'fecha_inicio' => $faker->word,
        'fecha_entrega' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
