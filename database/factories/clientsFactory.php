<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Clients;
use Faker\Generator as Faker;

$factory->define(Clients::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'compañia' => $faker -> company,
        'telefono' => $faker -> e164PhoneNumber,
        'email' =>$faker->email
    ];
});