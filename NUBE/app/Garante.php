<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Garante extends Model
{
    protected $table =  "garantes";
    protected $fillable = ['persona_id', 'descripcion', 'localidad_id', 'domicilio'];

    public function inmuebles()
    {
        return $this->hasMany('App\Inmueble');
    }
    public function localidad()
    {
        return $this->belongsTo('App\Localidad');
    }
    public function persona()
    {
        return $this->belongsTo('App\Persona');
    }
}
