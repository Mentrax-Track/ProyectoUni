<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;
use Infraestructura\Modelo;

class Marca extends Model
{
    protected $table = 'marcas';
    
    protected $fillable = ['marca','chasis','motor','cilindrada','modelo_id'];

    public function modelo()
    {
        return $this->belongsTo('Infraestructura\Modelo');
    }
}
