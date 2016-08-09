@extends('automotores.admin')

@section('subtitulo','Reservas')
    
@section('content')
@include('alertas.success')
<br>
<div class="panel panel-default">
    
    <div class="panel-heading text-center"><h4><p class="www">Reservas</p></h4></div>
    <div class="panel-body"> 

    <div class="table-responsive">
    <table class="table table-bordered table-hover table-condensed "><br>
            <tr class="info text-center">
                <th class="text-center">#</th>
                <th class="text-center">Entidad</th>
                <th class="text-center">Encargado</th>
                <th class="text-center">Titulo</th>
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
                    <td>{{ $reser->entidad}}</td>
                    <td>{{ $reser->titulo }}</td>
                    <td>{{ $reser->numero }}</td>
                    <td>{{ $reser->fecha_inicial }}</td>
                    <td>{{ $reser->fecha_final }}</td>
                    <td>{{ $reser->dias }}</td>
                    <td class="btns">
                        {!!link_to_route('reservas.edit', $title = 'Editar', $parameters = $reser->id, $attributes = ['class'=>'btn btn-primary'])!!}
                        
                    </td>
                    
                </tbody>
        @endforeach
    </table>
    <center><p>Existen {{ $reserva->total() }} registros en total</p></center>
    </div>
    </div>
</div>
<!--con appends adjunto los parametros adicionales de busqueda -->
{!! $reserva->render() !!}</div>
       
@stop