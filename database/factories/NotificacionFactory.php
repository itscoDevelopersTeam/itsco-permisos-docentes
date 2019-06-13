<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Notificacion;
use Faker\Generator as Faker;

$factory->define(Notificacion::class, function (Faker $faker) {
    return [
        'status' => 'enabled',
        'destinatario' => $faker->name,
        'user_id' => function() {
            $user = App\User::inRandomOrder()->first();
            return $user->id;
        },

        'solicitud-permiso_id' => function() {
            $solicitud = factory(App\SolicitudPermiso::class)->create();
            return $solicitud->id;
        }
    ];
});