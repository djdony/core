<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Setting;
use Faker\Generator as Faker;

$factory->define(Setting::class, function (Faker $faker) {

    return [
        'title' => $faker->word,
        'about' => $faker->text,
        'service_title' => $faker->word,
        'services' => $faker->word,
        'contact_title' => $faker->word,
        'address' => $faker->word,
        'email' => $faker->word,
        'phone' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
