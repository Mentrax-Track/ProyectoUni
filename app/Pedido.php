<?php

namespace Infraestructura;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    
    protected $table = 'pedidos';
    
    protected $fillable = ['numero','gasolina_id','diesel_id','gnv_id','recargue_id'];
}
