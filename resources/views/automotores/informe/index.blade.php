@extends('automotores.admin')

@section('subtitulo','Informe de Viajes')
@section('content')
@include('alertas.success')
<br>
<div class="panel panel-default">
    <div class="panel-heading text-center"><h4><p class="www">Lista de Informes</p></h4></div>
    <div class="panel-body">
    <form class="form-inline">
        <div class="form-group">
            <label>Busqueda</label> 
            @include('automotores.informe.forms.busqueda')
        </div>
    </form><br>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-condensed">
                 <tr class="info">
                    <th class="text-center">#</th>
                    <th class="text-center">Vehiculo</th>
                    <th class="text-center">Chofer</th>
                    <th class="text-center">Encargado</th>
                    <th class="text-center">Entidad</th>
                    <th class="text-center">Fecha de viaje</th>
                    <th class="text-center">Operación</th>
                </tr><?php $num=1; ?>
                @foreach($informeviajes as $infovi)
                    <tbody>
                        <tr>
                            <td  class="info text-center">{{ $num }}</td>
                            <td>{{ $infovi->enviVehi->full_vehiculo}}</td>
                            <td>{{ $infovi->enviCho->full_name }}</td>
                            <td>{{ $infovi->enviEncar->full_name }}</td>
                            <td>{{ $infovi->entidad }}</td>
                            <td>{{ $infovi->fechapartida }}</td>
                            <td class="btns" style="vertical-align:middle;">
                                <center>
                                    {!!link_to_route('informes.edit', $title = 'Editar', $parameters = $infovi, $attributes = ['class'=>'btn btn-info btn-xs btn-block  glyphicon glyphicon-edit'])!!}

                                    {!!link_to_action('InformeController@getImprimir', $title = ' Imprimir', $parameters = $infovi->id, $attributes = ['class'=>'btn btn-warning btn-xs btn-block  glyphicon fa fa-print','target'=>'_blank'])!!} 
                                </center>
                            </td>
                        </tr>
                    </tbody><?php $num++; ?>
                @endforeach
            </table>
            <p class="text-center">Hay {{ $informeviajes->total() }} registros</p>
        </div>
    </div>
</div>
{!! $informeviajes->appends(Request::only(['entidad']))->render() !!}

@stop