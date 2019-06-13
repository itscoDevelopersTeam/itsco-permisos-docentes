<?php

use Illuminate\Database\Seeder;

class NotificacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Notificacion::class, 50)->create();
    }
}
