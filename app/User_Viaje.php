<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;
use Infraestructura\User;
use Infraestructura\Viaje;

class User_Viaje extends Model
{
    protected $table = 'user_viaje';
    
    protected $fillable = ['user_id','viaje_id'];
    
    public $timestamps = false;

    //delete from user_viaje where user_id in (select id from users where tipo='mecánico' OR tipo='administrador' OR tipo='supervisor' )

    public function user()
    {
        return $this->belongsTo('Infraestructura\User');
    }
    public function viaje()
    {
        return $this->belongsTo('Infraestructura\Viaje');
    }


}
