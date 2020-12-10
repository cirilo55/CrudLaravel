<?php

/** @var Factory $factory */

use App\EnterpriseGroup;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(EnterpriseGroup::class, function (Faker $faker) {
    return [
        'group_name' => $faker->word,
        'enterprise_id' =>rand(1,5)
    ];
});
