<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inqulino extends Model
{
    protected $table =  "inqulinos";

    protected $fillable = ['nombre', 'apellido', 'dni', 'fecha_nac', 'telefono'];

    public function inmueble()
    {
        return $this->belongsTo('App\Inmueble');
    }

}
