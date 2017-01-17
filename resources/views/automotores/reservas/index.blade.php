<?php use Infraestructura\Viaje; ?>
@extends('automotores.admin')

@section('subtitulo','Reservas')
    
@section('content')
@include('alertas.success')
<br>
<div class="panel panel-success">
    
    <div class="panel-heading text-center"><h4><p class="www">Reservas</p></h4></div>
    <div class="panel-body jumbotron"> 

    <form class="form-inline">
        <div class="form-group pull-rigth">
            <label>Busqueda:</label> 
            @include('automotores.reservas.forms.busqueda')
        </div>
    </form>

    <div class="table-responsive">
    <table class="table table-bordered table-hover table-condensed "><br>
            <tr class="info text-center">
                <th class="text-center">#</th>
                <th class="text-center">Entidad</th>
                <th class="text-center">Encargado</th>
                <th class="text-center">Objetivo</th>
                <th class="text-center">Pasajeros</th>
                <th class="text-center">Inicio</th>
                <th class="text-center">Final</th>
                <th class="text-center">Dias</th>
                <th class="text-center">Operación</th>
            </tr> 
        @foreach($reserva as $reser)
            <tbody>
                    <td class="info text-center">{{ $reser->id }}</td>
                    <td>{{ $reser->entidad }}</td>
                    <td>{{ $reser->enviar->full_name}}</td>
                    <td>{{ $reser->objetivo }}</td>
                    <td class="text-center">{{ $reser->pasajeros }}</td>
                    <td class="text-center">{{ $reser->fecha_inicial }}</td>
                    <td class="text-center">{{ $reser->fecha_final }}</td>
                    <td class="text-center">{{ $reser->dias }}</td>
                    <td class="btns text-center" style="vertical-align:middle; ">
                        <div class="btn-group btn-group-sm">
                            <center>

                            <?php 
                                $re = $reser->id;
                                //dd($re); 
                                $resul = Viaje::where('reserva_id',$re)
                                        ->get(['reserva_id'])
                                        ->lists('reserva_id')->toArray();
                                //dd($resul);
                                if (empty($resul)) 
                                { ?>

                                    {!!link_to_route('reservas.edit', $title = 'Editar', $parameters = $reser->id, $attributes = ['class'=>'btn btn-primary  btn-xs btn-block glyphicon glyphicon-edit'])!!}
                                    @if (Auth::user()->tipo == 'administrador' OR Auth::user()->tipo == 'supervisor')
                                        <a class="btn btn-info  btn-xs btn-block glyphicon glyphicon-save" href="{{ route('reserviaje.show',['id' => $reser->id] )}}" >Concretar</a>
                                    @endif        
                                <?php }
                                else{    
                                    echo "<a class='bg-success'>Realizado</a>";
                                }
                            ?>
                            </center>
                        </div>
                    </td>
                    
                </tbody>
        @endforeach
    </table>
    <center><p>Existen {{ $reserva->total() }} registros</p></center>
    </div>
    </div>
</div>
<!--con appends adjunto los parametros adicionales de busqueda -->
{!! $reserva->appends(Request::only(['entidad']))->render() !!}
       
@stop