<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;

class RolViaje extends Model
{
    protected $table = 'rolviajes';
    
    protected $fillable = ['chofer','tipoa','tipob','tipoc','fecha','rol_id'];

    public function roles()
    {
        return $this->belongsTo('Infraestructura\Rol');
    }/*
    public function enviarChofer()
    {
        return $this->hasOne('Infraestructura\User','id','chofer_id');
    }*/
}
