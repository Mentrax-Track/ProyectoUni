<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;

class Diesel extends Model
{
    protected $table = 'diesel';
    
    protected $fillable = ['litros','preciod','totald'];
}
