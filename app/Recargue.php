<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recargue extends Model
{
    use SoftDeletes;
    protected $table = 'recargues';
    
    protected $fillable = ['vehiculo_id','combustible','factura','fecha'];
    
    protected $dates = ['deleted_at'];
    public function vehiculo()
    {
        return $this->belongsTo('Infraestructura\Vehiculo');
    }
    public function enviarVehiculo()
    {
        return $this->hasOne('Infraestructura\Vehiculo','id','vehiculo_id');
    }
    public function detallescombus()
    {
        return $this->hasMany('Infraestructura\DetalleCombus');
    }
}
