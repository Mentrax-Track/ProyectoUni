
@extends('automotores.admin')

@section('subtitulo','Viajes Reservados')

@section('content')
@include('alertas.success')
<br>
<div class="panel panel-default">
    
    <div class="panel-heading text-center"><h4><p class="www">Viajes Reservados</p></h4></div>
    <div class="panel-body"> 
    <p class="text-center">Hay {{ $meses->total() }} registros</p>
    <center>
        @if (Auth::user()->tipo == 'administrador' OR Auth::user()->tipo == 'supervisor') 
            {!!link_to_action('TableroController@getImprimirmes', $title = ' Imprimir', $parameters = '', $attributes = ['class'=>'btn btn-warning  glyphicon fa fa-print','target'=>'_blank'])!!}
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
                </tr><?php $num =1; ?>
               @foreach ($meses as  $mes)
                <tbody>
                    <td class="text-center">{{ $num }}</td>
                    <td>{{ $mes->entidad }}</td>
                    <td>{{ $mes->tipo }}</td>
                    <td>{{ $mes->objetivo }}</td>
                    <td>{{ $mes->dias }}</td>
                    <td>{{ $mes->pasajeros }}</td>
                    <td class="text-center">{{ $mes->fecha_inicial }}</td>
                    <td class="text-center">{{ $mes->fecha_final }}</td>
                </tbody><?php $num++; ?>
               @endforeach
            </table> 
            <center>{!! $meses->render() !!}</center>       
        </div>
    </div>
    </div>
</div>
@stop





