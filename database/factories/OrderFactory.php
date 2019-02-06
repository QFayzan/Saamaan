<?php

use Faker\Generator as Faker;

$factory->define(\App\Order::class, function (Faker $faker, $user) {
    
    return [
//        'location' => $user['user']->city
    ];
});
