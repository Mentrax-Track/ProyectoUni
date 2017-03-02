<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;

class Gasolina extends Model
{
    protected $table = 'gasolina';
    
    protected $fillable = ['litros','preciog','totalg'];

}
