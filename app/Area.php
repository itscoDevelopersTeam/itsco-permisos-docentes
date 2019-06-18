<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{

    /**
     * Atributes that are mass assignable.
     * 
     * @var array
     */
    protected $fillable = [
        'name', 'user_id'
    ];
    
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'areas';

    /**
     * Get the users for the area
     */
    public function users() {
        return $this->hasMany('App\User');
    }

    /**
     * Get the user who manages this area.
     */
    public function user() {
        return $this->belongsTo('App\User');
    }
    
}
