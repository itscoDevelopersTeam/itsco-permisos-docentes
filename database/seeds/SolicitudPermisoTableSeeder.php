<?php

use Illuminate\Database\Seeder;

class SolicitudPermisoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\SolicitudPermiso::class, 20)->create([
            'status' => 'pass'
        ]);
    }
}
