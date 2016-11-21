<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;

class InfoVehi extends Model
{
    protected $table = 'informesvehi';
    
    protected $fillable = ['mantenimiento','informesviaje_id'];
}
