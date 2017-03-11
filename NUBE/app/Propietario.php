<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    protected $table =  "propietarios";

    protected $fillable = ['nombre', 'apellido', 'dni', 'fecha_nac', 'telefono', 'descripcion'];

    public function localidad()
    {
        return $this->belongsTo('App\Localidad');
    }
}
