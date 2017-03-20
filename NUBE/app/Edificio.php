<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edificio extends Model
{
    protected $table =  "edificios";
    protected $fillable = ['nombre', 'localidad_id', 'direccion'];

    public function inmuebles()
    {
        return $this->hasMany('App\Inmueble');
    }

    public function localidad()
    {
        return $this->belongsTo('App\Localidad');
    }
}
