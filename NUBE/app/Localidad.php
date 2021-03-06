<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localidad extends Model
{
    protected $table =  "localidades";
    protected $fillable = ['nombre', 'provincia_id', 'cod_postal'];

    public static function localidades($id){
        return Localidad::where('provincia_id','=',$id)->get();
    }

    public function provincia() 
    {
    	return $this->belongsTo('App\Provincia');
    }

    public function edificios()
    {
        return $this->hasMany('App\Edificio');
    }
    public function garantes()
    {
        return $this->hasMany('App\Garantes');
    }

    public function config() 
    {
        return $this->hasOne('App\Config');
    }

}
