<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Persona extends Model
{
    protected $table =  "personas";
    protected $fillable = ['nombre', 'apellido', 'dni', 'fecha_nac', 'telefono', ];


    public function inmueble()
    {
        return $this->belongsTo('App\Inmueble');
    }
    public function inquilinos(){
        return $this->hasMany('App\Inquilino');
    }
    public function garantes(){
        return $this->hasMany('App\Garante');
    }
    public function propietarios(){
        return $this->hasMany('App\Propietario');
    }

    /**Obtener edad actual del garante*/
    public function getEdad()
    {

        /*
        Carbon::setToStringFormat('d-m-Y');
        $fecha = \Carbon\Carbon::now('America/Buenos_Aires')->format('d/m/Y');
        //$fecha = Carbon::now();
        //$fecha = $fecha->format('d/m/Y');
        //$fecha = Carbon::parse($this->attributes['fecha_nac'])->format('d/M/Y');
        //$fecha =  Carbon::parse($this->attributes['fecha_nac'])->diffInYears(Carbon::now());
        $fecha = Carbon::createFromFormat('d/m/Y', $this->attributes['fecha_nac'])->toDateString();
        $fecha = Carbon::parse($this->attributes['fecha_nac'])->age;
        return $fecha;
        //return Carbon::parse($this->attributes['fecha_nac'])->age;
        */
        return Carbon::parse($this->attributes['fecha_nac'])->age;
    }
}
