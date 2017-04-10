
@extends('automotores.admin')

@section('subtitulo','Viajes Reservados')

@section('content')
@include('alertas.success')
<br>
<div class="panel panel-warning">
    
    <div class="panel-heading text-center"><h4><p class="www">Viajes Reservados</p></h4></div>
    <div class="panel-body"> 
    <center>
    @if (Auth::user()->tipo == 'administrador' OR Auth::user()->tipo == 'supervisor')
        {!!link_to_action('TableroController@getImprimireservados', $title = ' Imprimir', $parameters = '', $attributes = ['class'=>'btn btn-warning  glyphicon fa fa-print','target'=>'_blank'])!!}
    @endif
    </center>
    <div class="row">
        <div class="col-md-12">
        <div class="table-responsive">
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
               @foreach ($reservas as  $reser)
                <tbody>
                    <td class="text-center">{{ $reser->id }}</td>
                    <td>{{ $reser->entidad }}</td>
                    <td>{{ $reser->tipo }}</td>
                    <td>{{ $reser->objetivo }}</td>
                    <td>{{ $reser->dias }}</td>
                    <td>{{ $reser->pasajeros }}</td>
                    <td class="text-center">{{ $reser->fecha_inicial }}</td>
                    <td class="text-center">{{ $reser->fecha_final }}</td>
                </tbody>
               @endforeach
            </table> 
            </div>
            <p class="text-center">Existen {{ $reservas->total() }} registros</p>
            <center>{!! $reservas->render() !!}</center>       
        </div>
    </div>
    </div>
</div>
@stop





