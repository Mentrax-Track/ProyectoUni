<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;
use Infraestructura\Viaje;
use Infraestructura\Ruta;
class Presupuesto extends Model
{
    protected $table = 'presupuesto';
    protected $fillable = ['vehiculo_id','chofer_id','encargado_id',
                            'fecha_inicial','fecha_final','dias','fecha_sa',
                            'viaje_id','ruta_id','division'];
    
    //Muchos presupuestos pueden ser de unn solo viaje
    public function viaje()
    {
        return $this->belongsTo('Infraestructura\Viaje');
    }
    //un presupuesto solo puede tener una ruta
    public function ruta()
    {
        return $this->hasOne('Infraestructura\Ruta');
    }

}
