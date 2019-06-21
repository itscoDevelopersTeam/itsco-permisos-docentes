<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\SolicitudPermiso;
use Faker\Generator as Faker;

$factory->define(SolicitudPermiso::class, function (Faker $faker) {
    return [
        'status' => 'not-pass',
        'asunto' => $faker->sentence(6, true),
        'descripcion' => $faker->paragraph(7, true),
        'fecha' => $faker->date,
        'hora_inicio' => $faker->time('H:i'),
        'hora_terminacion' => $faker->time('H:i'),
        'cantidad_horas' => $faker->numberBetween(1, 5),
        'user_id' => function() {
            $user = App\User::inRandomOrder()->first();
            return $user->id;
        }
    ];
});