<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;
use Infraestructura\Vehiculo;
use Infraestructura\User;

class Salida extends Model
{
    protected $table = 'salidas';
    
    protected $fillable = 
    [
        'vehiculo','chofer','lugar','motivo','responsable','hsalida','hllegada'
    ];
    public function user()
    {
        return $this->belongsTo('Infraestructura\User');
    }
    public function vehiculo()
    {
        return $this->belongsTo('Infraestructura\Vehiculo');
    }    
    public function enviCho()
    {
        return $this->hasOne('Infraestructura\User','id','chofer');
    }
    public function enviVehi()
    {
        return $this->hasOne('Infraestructura\Vehiculo','id','vehiculo');
    }


}
