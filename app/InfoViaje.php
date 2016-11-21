<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;

class InfoViaje extends Model
{
    protected $table = 'infoviaje';
    
    protected $fillable = ['viaje_id','informeviaje_id'];
}
