<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edificio extends Model
{
    protected $table =  "edificios";
    protected $fillable = ['nombre'];

    public function inmuebles()
    {
        return $this->hasMany('App\Inmueble');
    }
}
