@extends('automotores.admin')

@section('subtitulo','Lista de excepciones')
    
@section('content')
@include('alertas.success')
<br>
<div class="panel panel-success">
    
    <div class="panel-heading text-center"><h4><p class="www">Lista de Excepciones</p></h4></div>
    <div class="panel-body jumbotron">
    <div class="table-responsive">
    <table class="table table-bordered table-hover table-condensed "><br>
            <tr class="info text-center">
                <th class="text-center">#</th>
                <th class="text-center">Chofer</th>
                <th class="text-center">Tipo</th>
                <th class="text-center">lugar</th>
                <th class="text-center">Fecha</th> 
            </tr>
            @foreach($excepciones as $key => $ex)
                <tbody>
                    <tr>
                        <td  class="info text-center"><center>{{ ++$key }}</center></td>
                        <td>{{ $ex->enviarChofer->full_name }}</td>
                        <td>{{ $ex->tipo }}</td>
                        <td>{{ $ex->lugar }}</td>
                        <td>{{ $ex->fecha }}</td>
                    </tr>
                </tbody>
            @endforeach
        </table>
      </div>
    </div>
</div>
@stop