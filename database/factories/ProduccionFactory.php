<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Produccion;
use Faker\Generator as Faker;

$factory->define(Produccion::class, function (Faker $faker) {

    return [
        'pedido_id' => $faker->randomDigitNotNull,
        'fecha_inicio' => $faker->word,
        'fecha_culminacion' => $faker->word,
        'responsable' => $faker->text,
        'estado' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
