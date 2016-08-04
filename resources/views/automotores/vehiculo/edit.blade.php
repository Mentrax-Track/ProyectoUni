@extends('automotores.admin')

@section('subtitulo','Actualización del Vehiculo ')

@section('content')
    
    @include('alertas.request')
<br>
<div class="panel panel-default">
    
    <div class="panel-heading text-center"><h4>Actualización de datos del Vehiculo</h4></div>
    <div class="panel-body"> 

            {!! Form::model($vehi,['route'=>['vehiculos.update',$vehi->id],'method'=>'PUT','files'=>true]) !!}
                @include('automotores.vehiculo.forms.vehiculos')
                <div class="col-md-4"></div>
                <div class="col-md-4">
                <center>
                {!! Form::submit('Actualizar',['class'=>'btn btn-primary btn-sm btn-block']) !!}
                </center></div>
                <div class="col-md-4"></div><br>
            {!! Form::close() !!}
            <br>
            {!! Form::open(['route'=>['vehiculos.destroy',$vehi->id],'method'=>'DELETE']) !!}
                <div class="col-md-4"></div>
                <div class="col-md-4">
                <center>
                {!! Form::submit('Eliminar',['class'=>'btn btn-danger btn-sm btn-block']) !!}
                </center></div>
                <div class="col-md-4"></div><br>
            {!! Form::close() !!}
        </div>
</div>  
@stop