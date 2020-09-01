<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Test\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {

    return [
        'title' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
