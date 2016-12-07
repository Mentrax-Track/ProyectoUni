<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;

class Celular extends Model
{
    protected $table = 'celulares';
    
    protected $fillable = ['id','celular','user_id'];

}
