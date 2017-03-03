<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;

class Kilomecanico extends Model
{
    protected $table = 'kilomecanicos';
    
    protected $fillable = ['vehiculo_id','hay','aumento','total','mecanico_id'];
}
