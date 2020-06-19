<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Review;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
        "customer" => $faker->name,
        "review" => $faker->paragraph(1),
        "stars" => $faker->numberBetween(1,5),
        'product_id' => App\Model\Product::all()->random()->id
    ];
});
