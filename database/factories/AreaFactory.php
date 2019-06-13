<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Area;
use Faker\Generator as Faker;

$factory->define(Area::class, function (Faker $faker) {
    return [
        'name' => $faker->words(3, true),
        'user_id' => function() {
            return factory(App\User::class)->create()->id;
        }
    ];
});