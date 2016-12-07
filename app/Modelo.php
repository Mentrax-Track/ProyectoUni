<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;
use Infraestructura\Vehiculo;

class Modelo extends Model
{
    protected $table = 'modelos';
    
    protected $fillable = ['modelo','tipoe','kilometraje','vehiculo_id'];

    public function vehiculo()
    {
        return $this->belongsTo('Infraestructura\Vehiculo');
    }
    public function marca()
    {
        return $this->hasOne('Infraestructura\Marca');
    }

}
