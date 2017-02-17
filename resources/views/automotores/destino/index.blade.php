<?php use Infraestructura\Mapa; ?>
@extends('automotores.admin')

@section('subtitulo','Destinos')
@section('content')
@include('alertas.success')
<br>
<div class="panel panel-success">
    <div class="panel-heading text-center"><h4><p class="www">Lista de los destinos</p></h4></div>
    <div class="panel-body jumbotron">
    <form class="form-inline">
        <div class="form-group">
            <label>Búsqueda</label> 
            @include('automotores.destino.forms.busqueda')
             <?php $user = \Auth::user()->tipo; 
                //dd($user);?>
            @if ($user == 'administrador' OR $user == 'supervisor' ) 
                {!!link_to_action('DestinoController@getImprimir', $title = ' Imprimir', $parameters = '', $attributes = ['class'=>'btn btn-warning fa fa-print','target'=>'_blank'])!!}
            @endif
        </div>
    </form><br>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-condensed">
                 <tr class="info">
                    <th class="text-center">#</th>
                    <th class="text-center">Dpto. de Inicio</th>
                    <th class="text-center">Origen</th>
                    <th class="text-center">Ruta</th>
                    <th class="text-center">Destino</th>
                    <th class="text-center">Dpto. Final</th>
                    <th class="text-center">Distancia (km)</th>
                    <th class="text-center">Tiempo</th>
                    <th class="text-center">Operación</th>
                </tr>
                @foreach($destinos as $des)
                    <tbody>
                        <tr>
                            <td  class="info text-center">{{ $des->id }}</td>
                            <td class="info">{{ $des->dep_inicio}}</td>
                            <td>{{ $des->origen }}</td>
                            <td>{{ $des->ruta }}</td>
                            <td>{{ $des->destino }}</td>
                            <td class="info">{{ $des->dep_final }}</td>
                            <td>{{ $des->kilometraje }}</td>
                            <td>{{ $des->tiempo }}</td>
                            <td class="btns" style="vertical-align:middle;">
                                <center>
                                @if (Auth::user()->tipo == 'administrador' OR Auth::user()->tipo == 'supervisor')
                                    {!!link_to_route('destinos.edit', $title = ' Editar', $parameters = $des, $attributes = ['class'=>'btn btn-info btn-xs  fa fa-pencil-square-o'])!!}
                                                                        
                                    <?php 
                                        $ides =  $des->id;
                                        $resul = Mapa::where('destino_id',$ides)
                                                ->get(['id'])->lists('id')->toArray();
                                        
                                        if (empty($resul)) 
                                        { ?>
                                        {!!link_to_route('mapas.show', $title = ' Mapa', $parameters = $des->id, $attributes = ['class'=>'btn btn-primary btn-xs fa fa-map-marker'])!!}
                                    <?php } ?>
                                @else
                                    <strong><font color="#337ab7">{{"Ninguna"}}</font></strong>
                                @endif
                                </center>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
            <p class="text-center">Existen {{ $destinos->total() }} registros</p>
        </div>
    </div>
</div>
{!! $destinos->appends(Request::only(['ruta','dep']))->render() !!}

@stop