<?php use Infraestructura\Solicitud;
      use Infraestructura\Vehiculo; ?>
@extends('automotores.admin')

@section('subtitulo','Kardex de Mantenimietno Vehicular')
@section('content')
@include('alertas.success')
<br>
<div class="panel panel-default">
    <div class="panel-heading text-center"><h4><p class="www">Kardex de Mantenimiento</p></h4></div>
    <div class="panel-body">
    <form class="form-inline">
        <div class="form-group">
             <!--<label>Busqueda</label> 
           @include('automotores.destino.forms.busqueda')-->
        </div>
    </form><br>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-condensed">
                 <tr class="info">
                    <th class="text-center">#</th>
                    <th class="text-center">Vehículo</th>
                    <th class="text-center">kilometraje</th>
                    <th class="text-center">Fecha</th>
                    <th class="text-center">Cantidad</th>
                    <th class="text-center">Unidad</th>
                    <th class="text-center">Trabajo</th>
                    <th class="text-center">Marca</th>
                    <th class="text-center">Código</th>
                    <th class="text-center">Observación</th>
                    <th class="text-center">Operación</th>
                </tr>
                @foreach($mecanico as $mec)
                    <tbody>
                        <tr>
                            <td  class="info text-center">{{ $mec->id }}</td>
                            <?php 
                                $sol = $mec->solicitud_id;
                                $idvehi = Solicitud::where('id',$sol)
                                        ->get(['vehiculo_id'])
                                        ->lists('vehiculo_id')
                                        ->toArray();
                                $id = intval($idvehi[0]);
                                //dd($id);
                                $vehiculo = Vehiculo::where('id',$id)
                                        ->get(['id','tipog','placa'])
                                        ->lists('full_vehiculo','id')
                                        ->toArray();
                                $result = implode($vehiculo, ' ');
                            ?>
                            <td class="info">{{ $result }}</td>
                            <td>{{ $mec->kilometraje}}</td>
                            <td>{{ $mec->fecha}}</td>
                            <td>{{ $mec->cantidad }}</td>
                            <td>{{ $mec->unidad }}</td>
                            <td>{{ $mec->trabajo }}</td>
                            <td>{{ $mec->marca }}</td>
                            <td>{{ $mec->codigo }}</td>
                            <td>{{ $mec->observacion }}</td>
                            <td class="btns" style="vertical-align:middle;">
                                <center>
                                    {!!link_to_route('mecanicos.edit', $title = ' Editar', $parameters = $mec->id, $attributes = ['class'=>'btn btn-primary btn-xs glyphicon glyphicon-edit'])!!}
                                </center>      
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
            <p class="text-center">Hay {{ $mecanico->total() }} registros</p>
        </div>
    </div>
</div>
{!! $mecanico->render() !!}

@stop