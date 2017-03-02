<?php 
use Infraestructura\Pedido; 
use Infraestructura\Gasolina;
use Infraestructura\Diesel;
use Infraestructura\Gnv;
use Infraestructura\Capital;
?>
@extends('automotores.admin')

@section('subtitulo','Recarga de Combustible')
    
@section('content')
@include('alertas.success')
<br>
<div class="panel panel-success">
    
    <div class="panel-heading text-center"><h4><p class="www">Tabla de Operaciones</p></h4></div>
    <div class="panel-body jumbotron">
        <form class="form-inline">
            <?php $user = \Auth::user()->tipo; 
                //dd($user);?>
            @if ($user == 'administrador' OR $user == 'supervisor') 
                <div class="form-group">
                    <label>Opciones: </label> 
                    {!!link_to_action('RecargueController@getCapital', $title = ' Actualizar Capital', $parameters = '', $attributes = ['class'=>'btn btn-success  fa fa fa-money'])!!}

                    {!!link_to_route('recargues.create', $title = ' Agregar Vehículo', $parameters = "", $attributes = ['class'=>'btn btn-info fa fa-car '])!!}

                    {!!link_to_action('RecargueController@getImprimir', $title = ' Imprimir', $parameters = '', $attributes = ['class'=>'btn btn-warning  fa fa-print','target'=>'_blank'])!!}

                    {!!link_to_action('RecargueController@getGuardar', $title = ' Guardar', $parameters = '', $attributes = ['class'=>'btn btn-danger  fa fa-floppy-o'])!!}
                </div>
            @endif
        </form>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-condensed "><br>
            <tr class="info text-center">
                <th class="text-center">#</th>
                <th class="text-center">Nro. <br /> Pedido</th>
                <th class="text-center">Fecha</th>
                <th class="text-center">Factura</th>
                <th class="text-center">Vehículo<br />Placa</th>
                <th class="warning text-center">Gasolina<br /> Litros</th>
                <th class="danger text-center">Diesel<br /> Litros</th>
                <th class="success text-center">GNV<br /> m³</th>
                <th class="text-center">Precio<br /> Unitario</th>
                <th class="text-center">Total<br />Bs.</th>
                <th class="text-center">Operación</th> 
            </tr>
            <?php 
            $tog = 0;
            $tod = 0;
            $ton = 0; 
            $totales = 0;?>
            @foreach($recargues as $key => $com)
                <tbody>
                    <tr>
                        <td  class="info text-center"><center>{{ ++$key }}</center></td>
                        <?php $i = $com->id; 
                            $pedido = Pedido::where('recargue_id',$i)->first();
                            //dd($pedido);
                            $idg = $pedido->gasolina_id;
                            $idd = $pedido->diesel_id;
                            $idn = $pedido->gnv_id;
                            //dd($idg);
                            ?>
                        <td class="text-center">{{ $pedido->numero }}</td>
                        <td class="text-center">{{ $com->fecha }}</td>
                        <td class="text-center">{{ $com->factura }}</td>
                        <td>{{ $com->enviarVehiculo->full_vehiculo }}</td>
                        <?php  
                            $gaso = Gasolina::where('id',$idg)->first();
                            $prec = 0;
                            $tot = 0;
                            //dd($gaso);
                            if($gaso == null)
                            {
                                $litrosg=0;
                            }else{
                                $litrosg= $gaso->litros;
                                $prec = $gaso->preciog;
                                $tot  = $gaso->totalg;
                                $tog = $tog+$litrosg;
                            }
                            //dd($litros);
                            ?>
                        <td class="warning text-center">{{ $litrosg }}</td>
                        <?php  
                            $die = Diesel::where('id',$idd)->first();
                            //dd($die);
                            if($die == null)
                            {
                                 $litrosd=0;   
                            }else{
                                $litrosd= $die->litros;
                                $prec = $die->preciod;
                                $tot  = $die->totald;
                                $tod = $tod+$litrosd;
                            }
                            //dd($litros);
                            ?>
                        <td class=" danger text-center">{{ $litrosd }}</td>
                        <?php  
                            $gn = Gnv::where('id',$idn)->first();
                            if($gn != null)
                            {
                                $litrosn = $gn->litros;
                                $prec = $gn->precion;
                                $tot  = $gn->totaln;
                                $ton = $ton+$litrosn;    
                            }else{
                                $litrosn=0;
                            }
                            //dd($litros);
                            ?>
                        <td class="success text-center">{{ $litrosn }}</td>
                        <td class="text-center">{{ $prec }}</td>
                        <?php $totales = $totales+$tot; ?>
                        <td class="text-center">{{ $tot }}</td>
                        <td class="text-center">
                            <div class="btn-group btn-group-sm">
                                {!!link_to_route('recargues.edit', $title = ' Editar', $parameters = $com->id, $attributes = ['class'=>'btn btn-info btn-xs btn-block fa fa-edit '])!!}
                            </div>
                        </td>
                    </tr>

                </tbody>
            @endforeach
            
            </tr>
            <tr><?php  $capital = Capital::all();
                        //dd($capital);
                        //dd($capital->last());
                        $capital = $capital->last();
                        //dd($capital);?>
                <td colspan="4" class="text-center">Capital:<strong><font color="blue"> {{$capital->total}} </font></strong>Bs.</td>
                <td colspan="1" align="right"><strong>Total:</strong></td>
                <td colspan="1" class="warning text-center"><strong>{{ $tog }}</strong></td>
                <td colspan="1" class="danger text-center"><strong>{{ $tod }}</strong></td>
                <td colspan="1" class="success text-center"><strong>{{ $ton }}</strong></td>
                <td colspan="1"></td>
                <td colspan="1" class="text-center"><strong><font color="red">{{ $totales }}</font></strong></td>
            </tr>
        </table>
        </div>
    </div>
</div>
@stop