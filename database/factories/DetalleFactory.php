<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Detalle;
use Faker\Generator as Faker;

$factory->define(Detalle::class, function (Faker $faker) {

    return [
        'producto_id' => $faker->randomDigitNotNull,
        'cantidad' => $faker->int,
        'obs' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
