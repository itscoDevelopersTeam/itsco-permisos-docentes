<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Notificacion;
use Faker\Generator as Faker;

$factory->define(Notificacion::class, function (Faker $faker) {
    
    $solicitud = App\SolicitudPermiso::inRandomOrder()->first();
    
    return [
        'status' => 'enabled',
        'destinatario' => $faker->name,
        'user_id' => $solicitud->user_id,
        'solicitud-permiso_id' => $solicitud->id,
    ];
});