@extends('automotores.admin')

@section('subtitulo','Actualizar la Reserva')

@section('content')
@include('alertas.request')
<br>
<div class="panel panel-default">
    
    <div class="panel-heading text-center"><h4><p class="www">Actualización de la Reserva</p></h4></div>
    <div class="panel-body"> 

            {!! Form::model($reser,['route'=>['reservas.update',$reser->id],'method'=>'PUT']) !!}
                @include('automotores.reservas.forms.reser')
                <div class="col-md-4"></div>
                <div class="col-md-4">
                <center>
                <button type="submit" class="btn btn-primary btn-sm btn-block">
                    <span class="glyphicon glyphicon-ok">   Actualizar</span> 
                </button>
                </center>
                </div>
                <div class="col-md-4"></div><br>
            {!! Form::close() !!}
            <br>
            {!! Form::open(['route'=>['reservas.destroy',$reser->id],'method'=>'DELETE']) !!}
                <div class="col-md-4"></div>
                <div class="col-md-4">
                <center>
                <button type="submit" class="btn btn-danger btn-sm btn-block">
                    <span class="glyphicon glyphicon-trash">   Eliminar</span> 
                </button>
                </center>
                </div>
                <div class="col-md-4"></div><br>
            {!! Form::close() !!}
        </div>
</div>  
@stop