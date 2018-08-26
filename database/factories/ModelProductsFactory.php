<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->paragraph,
        'price' => $faker->numberBetween(100,1000),
        'discount' => $faker->numberBetween(2,3),
        'stock' =>$faker->randomDigit,
    ];
});
