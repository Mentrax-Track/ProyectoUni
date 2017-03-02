<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hidrocarburo extends Model
{
    use SoftDeletes;
    protected $table = 'hidrocarburos';
    protected $dates = ['deleted_at'];
    protected $fillable = ['npedido', 
                            'fecha',
                            'factura', 
                            'vehiculo',
                            'combustible', 
                            'gasolina', 
                            'diesel', 
                            'gnv', 
                            'litros',
                            'precio', 
                            'total', 
                            'fecha_recargue'];
                            
}
