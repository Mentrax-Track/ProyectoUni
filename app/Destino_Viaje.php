<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;

class Destino_Viaje extends Model
{
    protected $table = 'destino_viaje';
    
    protected $fillable = ['destino_id','viaje_id'];
}
