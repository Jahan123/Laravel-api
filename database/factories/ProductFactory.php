<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        "name" => $faker->word,
        "price" => $faker->numberBetween(2000,5000),
        "stock" => $faker->randomDigit,
        "details" => $faker->paragraph(1),
        "discount" =>  $faker->numberBetween(10,50)
    ];
});
