<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;

class Gnv extends Model
{
    protected $table = 'gnv';
    
    protected $fillable = ['litros','precion','totaln'];
}
