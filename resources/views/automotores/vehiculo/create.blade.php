@extends('automotores.admin')

@section('subtitulo','Incertar Vehiculo')
@section('content')
@include('alertas.request')
<br>
<div class="panel panel-default">
    
    <div class="panel-heading text-center"><h4>Nuevo Vehiculo</h4></div>
    <div class="panel-body">      
       {!! Form::open(['route'=>'vehiculos.store','method'=>'POST','files' => true ]) !!}
        
            @include('automotores.vehiculo.forms.vehiculos')
                <div class="col-md-4"></div>
                <div class="col-md-4">    
                <center>{!! Form::submit('Registrar',['class'=>'btn btn-primary btn-sm btn-block']) !!}</center>
                </div>
                <div class="col-md-4"></div>
        {!! Form::close() !!}
    </div>
</div>

@stop