<?php use Infraestructura\Accesorio; ?>
@extends('automotores.admin')

@section('subtitulo','Solicitudes de Trabajo')
@section('content')
@include('alertas.success')
<br>
<div class="panel panel-success">
    <div class="panel-heading text-center"><h4><p class="www">Lista de Solicitudes</p></h4></div>
    <div class="panel-body jumbotron">
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
                    <th class="text-center">Chofer</th>
                    <th class="text-center">Vehículo</th>
                    <th class="text-center">Accesorios</th>
                    <th class="text-center">Descripción</th>
                    <th class="text-center">Fecha</th>
                    <th class="text-center">Operación</th>
                </tr>
                @foreach($solicitudes as $sol)
                    <tbody>
                        <tr>
                            <td  class="info text-center">{{ $sol->id }}</td>
                            <td class="info">{{ $sol->chofer}}</td>
                            <td>{{ $sol->enviVehi->full_vehiculo }}</td>
                            <?php 
                                $id = (int)$sol->id;
                                //dd($id);
                                $accesorio = \DB::table('accesorios')
                                            ->where('solicitud_id',$id)
                                            ->groupBy('solicitud_id','id')
                                            ->get();
                                //dd($accesorio);
                            ?>
                            <td>
                            @foreach ($accesorio as $value) 
                                    {{ $value->solicitud }}
                            @endforeach
                            </td>
                            <td>{{ $sol->descripsoli }}</td>
                            <td>{{ $sol->fecha }}</td>
                            <td class="btns" style="vertical-align:middle;">
                                <center>
                                @if(Auth::user()->full_name == $sol->chofer )
                                    {!!link_to_route('solicitudes.edit', $title = 'Editar', $parameters = $sol->id, $attributes = ['class'=>'btn btn-info btn-xs glyphicon glyphicon-edit'])!!}
                                @else
                                    <strong><font color="#337ab7">{{"Ninguna"}}</font></strong>
                                @endif
                                </center>      
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
            <p class="text-center">Hay {{ $solicitudes->total() }} registros</p>
        </div>
    </div>
</div>
{!! $solicitudes->render() !!}

@stop