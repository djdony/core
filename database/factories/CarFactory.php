<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'car_type_id' => $faker->randomDigitNotNull,
        'max_pax' => $faker->randomDigitNotNull,
        'max_luggage' => $faker->randomDigitNotNull,
        'description' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
