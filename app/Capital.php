<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;

class Capital extends Model
{
    protected $table = 'capital';
    
    protected $fillable = ['id','hay','monto','total','fecha'];
}
