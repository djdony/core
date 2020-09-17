<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Booking;
use Faker\Generator as Faker;

$factory->define(Booking::class, function (Faker $faker) {

    return [
        'from' => $faker->randomDigitNotNull,
        'to' => $faker->randomDigitNotNull,
        'date' => $faker->word,
        'time' => $faker->word,
        'flight' => $faker->word,
        'type' => $faker->word,
        'customer_id' => $faker->word,
        'info' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
