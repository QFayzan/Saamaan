<?php

use Faker\Generator as Faker;

$factory->define(\App\Order_Detail::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'quantity' => $faker->randomNumber(),
        'weight' => $faker->randomNumber(),
        'dimension' => $faker->randomElement(['small','medium','large'])
    ];
});
