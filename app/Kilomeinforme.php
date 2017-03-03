<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;

class Kilomeinforme extends Model
{
    protected $table = 'kilomeinformes';
    
    protected $fillable = ['vehiculo_id','hay','aumento','total','informe_id'];
}
