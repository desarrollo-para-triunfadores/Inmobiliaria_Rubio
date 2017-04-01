<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inquilino extends Model
{
    protected $table =  "inquilinos";

    protected $fillable = ['nombre', 'apellido', 'dni', 'fecha_nac', 'telefono'];

    public function inmueble()
    {
        return $this->belongsTo('App\Inmueble');
    }

}
