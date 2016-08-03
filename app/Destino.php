<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;

class Destino extends Model
{
    protected $table = 'destinos';
    
    protected $fillable = ['departamento','inicio','final','ruta','kilometraje','tiempo','destino_completo'];

    public function viaje()
    {
        return $this->belongsTo('automotores\Viaje');
    }
    //scope es una funcion de laravel
    public function scopeDesti($query, $desti)
    {
        //La funcion trim para eliminar los espacion
        if(trim($desti) != "")
        {
            $query->where(\DB::raw("CONCAT(departamento,' ',inicio,' ',final)"), "LIKE", "%$desti%");
        }
    }
}
