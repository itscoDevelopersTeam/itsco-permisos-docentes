<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'notificaciones';

    /**
     * Get the user who generated this notification
     */
    public function user() {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the permission related with this notificacion
     */
    public function solicitud() {
        return $this->belongsTo('App\SolicitudPermiso');
    }
}
