<?php

use Faker\Generator as Faker;

$factory->define(App\Contact::class, function (Faker $faker) {
    return [
        //
        'first_name' => $faker->firstname,
        'last_name' => $faker->lastname,
        'email' => $faker->unique()->safeEmail,
    ];
});
