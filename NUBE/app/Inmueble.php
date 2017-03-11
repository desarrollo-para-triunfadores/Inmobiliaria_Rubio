<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inmueble extends Model
{
    protected $table =  "inmuebles";

    protected $fillable = ['nombre', 'localidad_id', 'privado'];

    public function localidad()
    {
        return $this->belongsTo('App\Localidad');
    }



    public function inmuebles()
    {
        return $this->hasMany('App\Inmueble');
    }

    /******** devuelve todos los barrios ingresandole el id de localidad ******/
    public static function barrios($id){
        return Barrio::where('localidad_id','=',$id)
            ->get();
    }
}
