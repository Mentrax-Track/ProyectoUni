@extends('automotores.admin')

@section('subtitulo','Reservas')
    
@section('content')
@include('alertas.success')
<br>
<div class="panel panel-default">
    
    <div class="panel-heading text-center"><h4><p class="www">Viajes</p></h4></div>
    <div class="panel-body"> 

    <div class="table-responsive">
    <table class="table table-bordered table-hover table-condensed"><br>
            <tr class="info">
                <th>#</th>
                <th>Tipo</th>
                <th>Objetivo</th>
                <th>Chofer</th>
                <th>Pasajeros</th>
                <th>Inicio</th>
                <th>Final</th>
                <th>Dias</th>
                <th>Vehiculo</th>
                <th>Operacion</th>
            </tr>
                
            @foreach($viaje as $via)
                <tbody>
                    <td class="info text-center">{{ $via->id }}</td>
                    <td>{{ $via->tipo }}</td>
                    <td>{{ $via->objetivo }}</td>
                    <td>{{ $via->nombres }}</td>
                    <td>{{ $via->numero }}</td>
                    <td>{{ $via->fecha_inicial }}</td>
                    <td>{{ $via->fecha_final }}</td>
                    <td>{{ $via->dias }}</td>
                    <td>{{ $via->tipo }}</td>
                    <td class="btns">
                        {!!link_to_route('viajes.edit', $title = 'Editar', $parameters = $via->id, $attributes = ['class'=>'btn btn-primary'])!!}
                    </td>
                </tbody>
            @endforeach
        </table>
        <center><p>Existen {{ $viaje->total() }} registros en total</p></center>
        </div>
    </div>
</div>
<!--con appends adjunto los parametros adicionales de busqueda -->
{!! $viaje->render() !!}</div>
       
@stop