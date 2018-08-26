<?php

use Faker\Generator as Faker;

$factory->define(App\Review::class, function (Faker $faker) {
    return [
        'customer'=> $faker->name,
        'review' => $faker->paragraph(2),
        'star' => $faker->numberBetween(1,5),
        'product_id' => App\Product::all()->random()->id,
    ];
});
