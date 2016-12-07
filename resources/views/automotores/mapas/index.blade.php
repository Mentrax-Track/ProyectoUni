@extends('automotores.admin')

@section('subtitulo','Mapas')
@section('content')
@include('alertas.success')
<br>
<div class="panel panel-default">
    <div class="panel-heading text-center"><h4><p class="www">Mapa de Destinos</p></h4></div>
    <div class="panel-body">
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
                            <td class="info">{{ $mapa->destino_id}}</td>
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