<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;

class Mapa extends Model
{
    protected $fillable = ['titulo','lat','lng','destino_id','insertador'];

    public function destinos()
    {
         return $this->belongsToMany('Infraestructura\Destino', 'destino_id');
    }
}
