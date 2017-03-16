<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;

use Infraestructura\Mecanico;
use Infraestructura\Solicitud;
class Devolucion extends Model
{
    protected $table = 'devoluciones';
    
    protected $fillable = ['serial','fecha','nombre','cantidad','detalle','insertador','mecanico_id'];

    public function mecanico()
    {
        return $this->belongsTo('Infraestructura\Mecanico');
    }

    public function scopeFecha($query, $fecha)
    {
        if(trim($fecha) != "")
        {
             $query->where('fecha',$fecha);  

        }
        
      
    }
}
