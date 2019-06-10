<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Users
        Permission::created([
            'name'        => 'Navegar usuarios',
            'slug'        => 'users.index',
            'description' => 'Lista y navega los usuarios'
        ]);
        Permission::created([
            'name'        => 'Detalle usuario',
            'slug'        => 'users.show',
            'description' => 'Ver detalle de cada usuario'
        ]);
        Permission::created([
            'name'        => 'Edición usuarios',
            'slug'        => 'users.edit',
            'description' => 'Edita cualquier dato de un usuario del sistema'
        ]);
        Permission::created([
            'name'        => 'Eliminar usuario',
            'slug'        => 'users.destroy',
            'description' => 'Elimina cualquier usuario del sistema'
        ]);

        // Areas
        Permission::created([
            'name'        => 'Navegar areas',
            'slug'        => 'areas.index',
            'description' => 'Lista y navega las areas'
        ]);
        Permission::created([
            'name'        => 'Detalle area',
            'slug'        => 'areas.show',
            'description' => 'Ver detalle de cada area'
        ]);
        Permission::created([
            'name'        => 'Crear areas',
            'slug'        => 'areas.create',
            'description' => 'crear un area nuevo'
        ]);
        Permission::created([
            'name'        => 'Edición areas',
            'slug'        => 'areas.edit',
            'description' => 'Edita cualquier dato de un area del sistema'
        ]);
        Permission::created([
            'name'        => 'Eliminar area',
            'slug'        => 'areas.destroy',
            'description' => 'Elimina cualquier area del sistema'
        ]);

        // Solicitudes
        Permission::created([
            'name'        => 'Navegar solicitudes',
            'slug'        => 'solicitudes.index',
            'description' => 'Lista y navega las solicitudes'
        ]);
        Permission::created([
            'name'        => 'Detalle solicitud',
            'slug'        => 'solicitudes.show',
            'description' => 'Ver detalle de cada solicitud'
        ]);
        Permission::created([
            'name'        => 'Crear solicitudes',
            'slug'        => 'solicitudes.create',
            'description' => 'crear una nueva solicitud'
        ]);
        Permission::created([
            'name'        => 'Edición solicitudes',
            'slug'        => 'solicitudes.edit',
            'description' => 'Edita cualquier dato de una solicitud del sistema'
        ]);
        Permission::created([
            'name'        => 'Eliminar solicitud',
            'slug'        => 'solicitudes.destroy',
            'description' => 'Elimina cualquier solicitud del sistema'
        ]);

        // Notificaciones
        Permission::created([
            'name'        => 'Navegar notificaciones',
            'slug'        => 'notificaciones.index',
            'description' => 'Lista y navega las notificaciones'
        ]);
        Permission::created([
            'name'        => 'Detalle notificaciones',
            'slug'        => 'notificaciones.show',
            'description' => 'Ver detalle de cada notificaciones'
        ]);
        Permission::created([
            'name'        => 'Crear notificaciones',
            'slug'        => 'notificaciones.create',
            'description' => 'crear un notificaciones nuevo'
        ]);
        Permission::created([
            'name'        => 'Edición notificaciones',
            'slug'        => 'notificaciones.edit',
            'description' => 'Edita cualquier dato de una notificación del sistema'
        ]);
        Permission::created([
            'name'        => 'Eliminar notificaciones',
            'slug'        => 'notificaciones.destroy',
            'description' => 'Elimina cualquier notificación del sistema'
        ]);
    }
}
