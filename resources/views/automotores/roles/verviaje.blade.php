@extends('automotores.admin')

@section('subtitulo','Roles')

@section('content')
@include('alertas.success')
<br>
<div class="panel panel-success">
    
    <div class="panel-heading text-center"><h4><p class="www">Lista de viajes</p></h4></div>
    <div class="panel-body jumbotron"> 
        <br>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <table class='table table-bordered table-hover table-condensed '>
                <tr class="info">
                    <!--<th class="text-center"># Viaje</th>-->
                    <th class="text-center">Tipo "A"</th>
                    <th class="text-center">Tipo "B"</th>
                    <th class="text-center">Tipo "C"</th>
                    <th class="text-center">Fecha</th>
                </tr>
               @foreach ($rolViaje as $rolvi)
                <tbody>
                    <td>{{ $rolvi->tipoa }}</td>
                    <td>{{ $rolvi->tipob }}</td>
                    <td>{{ $rolvi->tipoc }}</td>
                    <td class="text-center">{{ $rolvi->fecha }}</td>
                </tbody>
               @endforeach
            </table>    
        </div>
        
    </div>
    </div>
    </div>
</div>
       
@stop





