@extends('automotores.admin')

@section('subtitulo','Mapas')
@section('content')
@include('alertas.success')
<br>
<div class="panel panel-success">
    <div class="panel-heading text-center"><h4><p class="www">Lista de destinos con su ubición en el mapa</p></h4></div>
    <div class="panel-body jumbotron">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-condensed">
                 <tr class="info">
                    <th class="text-center">#</th>
                    <th class="text-center">Destino</th>
                    <th class="text-center">Título</th>
                    <th class="text-center">Latitud</th>
                    <th class="text-center">Longitud</th>
                    <th class="text-center">Operación</th>
                </tr>
                @foreach($mapas as $mapa)
                    <tbody>
                        <tr>
                            <td  class="info text-center">{{ $mapa->id }}</td>
                            <td class="info">{{ $mapa->enviDesti->full_mapadesti}}</td>
                            <td class="info">{{ $mapa->titulo}}</td>
                            <td>{{ $mapa->lat }}</td>
                            <td>{{ $mapa->lng }}</td>
                            <td class="btns" style="vertical-align:middle;">
                                <center>
                                    {!!link_to_route('mapas.edit', $title = ' Editar', $parameters = $mapa->id, $attributes = ['class'=>'btn btn-info btn-xs glyphicon fa fa-pencil-square-o'])!!}

                                    {!!link_to_action('MapaController@getVer', $title = ' Ver', $parameters = $mapa->id, $attributes = ['class'=>'btn btn-primary btn-xs glyphicon fa fa-map-marker'])!!}
                                </center>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
            <p class="text-center">Hay {{ $mapas->total() }} registros</p>
        </div>
    </div>
</div>
{!! $mapas->render() !!}

@stop