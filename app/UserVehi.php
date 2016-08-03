<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;

class UserVehi extends Model
{
    protected $table = 'uservehis';

    protected $fillable = ['user_id','vehi_id'];

    public function users()
    {
        return $this->hasMany('Infraestructura\User');
    }

    public function vehiculos()
    {
        return $this->hasMany('Infraestructura\Vehiculo');
    }

}
