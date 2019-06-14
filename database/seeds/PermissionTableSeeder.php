<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Users
        Permission::create([
            'name'        => 'Navegar usuarios',
            'slug'        => 'users.index',
            'description' => 'Lista y navega los usuarios'
        ]);
        Permission::create([
            'name'        => 'Detalle usuario',
            'slug'        => 'users.show',
            'description' => 'Ver detalle de cada usuario'
        ]);
        Permission::create([
            'name'        => 'Edición usuarios',
            'slug'        => 'users.edit',
            'description' => 'Edita cualquier dato de un usuario del sistema'
        ]);
        Permission::create([
            'name'        => 'Eliminar usuario',
            'slug'        => 'users.destroy',
            'description' => 'Elimina cualquier usuario del sistema'
        ]);

        // Roles
        Permission::create([
            'name'        => 'Navegar roles',
            'slug'        => 'roles.index',
            'description' => 'Lista y navega las roles'
        ]);
        Permission::create([
            'name'        => 'Detalle rol',
            'slug'        => 'roles.show',
            'description' => 'Ver detalle de cada rol'
        ]);
        Permission::create([
            'name'        => 'Crear roles',
            'slug'        => 'roles.create',
            'description' => 'crear un rol nuevo'
        ]);
        Permission::create([
            'name'        => 'Edición roles',
            'slug'        => 'roles.edit',
            'description' => 'Edita cualquier dato de un rol del sistema'
        ]);
        Permission::create([
            'name'        => 'Eliminar rol',
            'slug'        => 'roles.destroy',
            'description' => 'Elimina cualquier rol del sistema'
        ]);

        // Areas
        Permission::create([
            'name'        => 'Navegar areas',
            'slug'        => 'areas.index',
            'description' => 'Lista y navega las areas'
        ]);
        Permission::create([
            'name'        => 'Detalle area',
            'slug'        => 'areas.show',
            'description' => 'Ver detalle de cada area'
        ]);
        Permission::create([
            'name'        => 'Crear areas',
            'slug'        => 'areas.create',
            'description' => 'crear un area nuevo'
        ]);
        Permission::create([
            'name'        => 'Edición areas',
            'slug'        => 'areas.edit',
            'description' => 'Edita cualquier dato de un area del sistema'
        ]);
        Permission::create([
            'name'        => 'Eliminar area',
            'slug'        => 'areas.destroy',
            'description' => 'Elimina cualquier area del sistema'
        ]);

        // Solicitudes
        Permission::create([
            'name'        => 'Navegar solicitudes',
            'slug'        => 'solicitudes.index',
            'description' => 'Lista y navega las solicitudes'
        ]);
        Permission::create([
            'name'        => 'Detalle solicitud',
            'slug'        => 'solicitudes.show',
            'description' => 'Ver detalle de cada solicitud'
        ]);
        Permission::create([
            'name'        => 'Crear solicitudes',
            'slug'        => 'solicitudes.create',
            'description' => 'crear una nueva solicitud'
        ]);
        Permission::create([
            'name'        => 'Edición solicitudes',
            'slug'        => 'solicitudes.edit',
            'description' => 'Edita cualquier dato de una solicitud del sistema'
        ]);
        Permission::create([
            'name'        => 'Eliminar solicitud',
            'slug'        => 'solicitudes.destroy',
            'description' => 'Elimina cualquier solicitud del sistema'
        ]);

        // Notificaciones
        Permission::create([
            'name'        => 'Navegar notificaciones',
            'slug'        => 'notificaciones.index',
            'description' => 'Lista y navega las notificaciones'
        ]);
        Permission::create([
            'name'        => 'Detalle notificaciones',
            'slug'        => 'notificaciones.show',
            'description' => 'Ver detalle de cada notificaciones'
        ]);
        Permission::create([
            'name'        => 'Eliminar notificaciones',
            'slug'        => 'notificaciones.destroy',
            'description' => 'Elimina cualquier notificación del sistema'
        ]);
    }
}
