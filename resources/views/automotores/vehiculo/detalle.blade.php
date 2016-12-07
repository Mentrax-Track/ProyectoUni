@extends('automotores.admin')

@section('subtitulo','Vehiculos')
@section('content')
@include('alertas.success')
<br>
<div class="panel panel-default">
    <div class="panel-heading text-center"><h4><p class="www">Detalle del vehiculo con placa {{$placa->placa}} </p></h4></div>
    <div class="panel-body"> 

    <div class="table-responsive">
        <div class="row">
            <div class="col-md-12">
                <table class='table table-bordered table-hover table-condensed jumbotron'>
                    <tr class="info">
                        <th><u>Código:</u> {{$vehiculos->codigo}} </th>
                        <th><u>Color:</u> {{$vehiculos->color}}</th>
                        <th><u>Nro. Asientos:</u> {{$vehiculos->pasajeros}} </th>
                        <th><u>kilometraje:</u> {{$modelo->kilometraje}}</th>
                        
                    </tr>
                    <tr class="info">
                        <th><u>Tipo General:</u> {{$vehiculos->tipog}} </th>
                        <th><u>Estado:</u> {{$vehiculos->estado}} </th>
                        <th><u>Modelo:</u> {{$modelo->modelo}} </th>
                        <th><u>Tipo Especifico:</u> {{$modelo->tipoe}}</th>
                    </tr>
                    <tr class="info">
                        <th><u>Marca:</u> {{$marca->marca}} </th>
                        <th><u>Chasis:</u> {{$marca->chasis}} </th>
                        <th><u>Motor:</u> {{$marca->motor}} </th>
                        <th><u>Cilindrada:</u> {{$marca->cilindrada}}</th>
                    </tr>
                </table>   
            </div>
        </div>
        
    </div>
   </div>
</div>

@stop

                        