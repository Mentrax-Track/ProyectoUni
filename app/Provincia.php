<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected $table = 'provincias';
    
    protected $fillable = ['nombre','departamento_id'];
    
}
