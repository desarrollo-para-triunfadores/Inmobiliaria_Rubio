<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Garante extends Model
{
    protected $table =  "garantes";
    protected $fillable = ['nombre', 'apellido', 'dni', 'fecha_nac', 'telefono', 'descripcion', 'localidad_id', 'domicilio'];

    public function inmuebles()
    {
        return $this->hasMany('App\Inmueble');
    }
}
