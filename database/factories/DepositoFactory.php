<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Deposito;
use Faker\Generator as Faker;

$factory->define(Deposito::class, function (Faker $faker) {

    return [
        'descripcion' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
