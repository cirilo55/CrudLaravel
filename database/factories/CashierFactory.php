<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cashier;
use Faker\Generator as Faker;

$factory->define(Cashier::class, function (Faker $faker) {
    return [
        'movement_date'=> $faker->date(),
        'value_of_sale' =>rand(51, 100),
        'value_of_product'=>rand(20,50),
        'deduction'=>rand(1,10)
    ];
});
