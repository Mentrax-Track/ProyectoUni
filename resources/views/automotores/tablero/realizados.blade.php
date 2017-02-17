@extends('automotores.admin')

@section('subtitulo','Viajes realizados')

@section('content')
@include('alertas.success')
<br>
<div class="panel panel-success">
    
    <div class="panel-heading text-center"><h4><p class="www">Viajes Realizados</p></h4></div>
    <div class="panel-body"> 
    <center>
    @if (Auth::user()->tipo == 'administrador' OR Auth::user()->tipo == 'supervisor')
        {!!link_to_action('TableroController@getImprimirealizados', $title = ' Imprimir', $parameters = '', $attributes = ['class'=>'btn btn-warning  glyphicon fa fa-print','target'=>'_blank'])!!}
    @endif
    </center> 
    <div class="row">
        <div class="col-md-12">
            <table class='table table-bordered table-hover table-condensed jumbotron'>
                <tr class="info">
                    <th class="text-center">#</th>
                    <th class="text-center">Entidad</th>
                    <th class="text-center">Tipo</th>
                    <th class="text-center">Objetivo</th>
                    <th class="text-center">Dias</th>
                    <th class="text-center">Pasajeros</th>
                    <th class="text-center">Fecha Inicio</th>
                    <th class="text-center">Fecha Final</th>
                </tr>
               @foreach ($viajes as  $viaje)
                <tbody>
                    <td class="text-center">{{ $viaje->id }}</td>
                    <td>{{ $viaje->entidad }}</td>
                    <td>{{ $viaje->tipo }}</td>
                    <td>{{ $viaje->objetivo }}</td>
                    <td>{{ $viaje->dias }}</td>
                    <td>{{ $viaje->pasajeros }}</td>
                    <td class="text-center">{{ $viaje->fecha_inicial }}</td>
                    <td class="text-center">{{ $viaje->fecha_final }}</td>
                </tbody>
               @endforeach
            </table> 
            <p class="text-center">Existen {{ $viajes->total() }} registros</p>
            <center>{!! $viajes->render() !!}</center>       
        </div>
    </div>
    </div>
</div>
@stop





