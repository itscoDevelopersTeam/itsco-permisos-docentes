<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SolicitudPermiso extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'solicitud-permiso';
    
    /**
     * Get the user who ask the solicitud
     */
    public function user() {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the notification related to this solicitud
     */
    public function notificacion() {
        return $this->hasOne('App\Notificacion');
    }

}
