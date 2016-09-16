<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;

class Presupuesto extends Model
{
    protected $table = 'presupuesto';
    protected $fillable = ['vehiculo','chofer','responsable','dia','fecha_inicial','fecha_final','can_d', 'uni_d', 'total_d', 'can_vc', 'uni_vc', 'total_vc', 'can_vp', 'uni_vp', 'total_vp', 'can_p', 'uni_p', 'total_p', 'can_m', 'uni_m', 'total_m', 'can_g', 'uni_g', 'total_g', 'total_a', 'ruta1', 'km1', 'can_1', 'uni_1', 'total_1', 'ruta2', 'km2', 'can_2', 'uni_2', 'total_2', 'ruta3', 'km3', 'can_3', 'uni_3','total_3', 'ruta4', 'km4', 'ruta5', 'km5','km6', 'total_rec', 'total_b', 'diferencia', 'ruta_7', 'ruta_8', 'can_es', 'can_do', 'carrera', 'tipo','tiempo_inicial','tiempo_final','sigla','con','fecha_sa','encargado'];
    protected $primaryKey = 'id';
    public $timestamps = false;
}
