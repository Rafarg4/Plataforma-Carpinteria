<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Proveedor;
use Faker\Generator as Faker;

$factory->define(Proveedor::class, function (Faker $faker) {

    return [
        'nombre_proveedor' => $faker->text,
        'ruc_proveedor' => $faker->text,
        'direccion_proveedor' => $faker->text,
        'telefono_proveedor' => $faker->text,
        'email_proveedor' => $faker->text,
        'descripcion_proveedor' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
