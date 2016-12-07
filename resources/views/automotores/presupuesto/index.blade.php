<?php 

use Infraestructura\Vehiculo;

use Infraestructura\User;
 ?>
@extends('automotores.admin')

@section('subtitulo','Presupuestos')
    
@section('content')
@include('alertas.request')
@include('alertas.errors')
<br>
@include('alertas.success')
<div class="panel panel-default">
    <div class="panel-heading text-center"><h4><p class="www">Presupuestos de Viajes</p></h4></div>
    <div class="panel-body"> 
        <form class="form-inline">
            <div class="form-group">
                <label>Busqueda</label> 
                @include('automotores.presupuesto.forms.busqueda')
            </div>
        </form><br>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-condensed">
                <tr class="info">
                    <th class="text-center">#</th>
                    <th class="text-center">Chofer</th> 
                    <th class="text-center">Vehiculo</th> 
                    <th class="text-center">Entidad</th>
                    <th class="text-center">Operaciones</th>
                </tr>
                <?php $num = 1; ?>
                @foreach($presupuesto as $pre)
                    <tbody>
                        <td class="info text-center"><center><?php echo $num; ?></center></td>
                        <td>{{ $pre->enviCho->full_name }}</td>                       
                        <td>{{ $pre->enviVehi->full_vehiculo }}</td>
                        <td>{{ $pre->entidad}}</td>
                        <td> 
                            <center>
                                {!!link_to_route('presupuestos.edit', $title = ' Editar', $parameters = $pre->id, $attributes = ['class'=>'btn btn-info btn-xs  glyphicon fa fa-pencil-square-o'])!!}
                                {!!link_to_action('PresupuestoController@getImprimir', $title = ' Imprimir', $parameters = $pre->id, $attributes = ['class'=>'btn btn-warning btn-xs  glyphicon fa fa-print','target'=>'_blank'])!!} 
                            </center>
                        </td>
                    </tbody>
                    <?php $num++; ?>
                @endforeach
            </table>
            <p class="text-center">Existen {{ $presupuesto->total() }} registros en total</p>
        </div>
    </div>
</div>
{!! $presupuesto->appends(Request::only(['entidad']))->render() !!}

@stop

