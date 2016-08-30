<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;

class Vehiculo_User extends Model
{
    
    protected $table = 'vehiculo_user';
    
    protected $fillable = ['user_id','vehiculo_id'];


    //delete from vehiculo_user where user_id not in (select id from users where tipo='chofer')
}
