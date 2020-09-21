<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Transferencia;
use Faker\Generator as Faker;

$factory->define(Transferencia::class, function (Faker $faker) {

    return [
        'cantidad' => $faker->randomDigitNotNull,
        'origne_id' => $faker->randomDigitNotNull,
        'destino_id' => $faker->randomDigitNotNull,
        'producto' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
