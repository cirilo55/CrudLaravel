<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Enterprise;
use Faker\Generator as Faker;

$factory->define(Enterprise::class, function (Faker $faker) {
    return [
        'company_name'=> $faker->company,
        'cnpj' => rand(1000, 100000),
        'fantasy_name'=> $faker->company,
        'address_id'=> rand(1,50),
        'contact_id'=>rand(1,50)
    ];
});
