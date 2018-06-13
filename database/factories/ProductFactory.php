<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->name,
        'description' => $faker->text,
        'price' => $faker->randomNumber(2),
    ];
});
