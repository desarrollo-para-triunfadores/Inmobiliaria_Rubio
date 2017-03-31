<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inmueble extends Model
{
    protected $table =  "inmuebles";

    protected $fillable = ['inquilino_id','garante_id','edificio_id','barrio_id','localidad_id', 'condicion', 'precio_compra', 'calle','altura','piso','numero', 'superficie', 'fecha_habilitacion','fecha_fin_contrato','googleMapsLink', 'video_link', 'descripcion', 'disponible' ];
    // condicion: condicion
    // googleMapsLink: url de la ubicacion del inmueble en Maps
    //en caso de no tener barrio el campo localidad id es necesario
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
