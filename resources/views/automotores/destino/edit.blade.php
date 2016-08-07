@extends('automotores.admin')

@section('subtitulo','Editar Destinos')

@section('content')
@include('alertas.request')
<br>
<div class="panel panel-default">

    <div class="panel-heading text-center"><h4><p class="www">Editar Destino</p></h4></div>
    <div class="panel-body">
     {!! Form::model($des,['route'=>['destinos.update',$des->id],'method'=>'PUT']) !!}
                @include('automotores.destino.forms.destinos')
                <div class="col-md-4"></div>
                <div class="col-md-4">
                <center>
                {!! Form::submit('Actualizar',['class'=>'btn btn-primary btn-sm btn-block']) !!}
                </center></div>
                <div class="col-md-4"></div><br>
    {!! Form::close() !!}
            <br>
    {!! Form::open(['route'=>['destinos.destroy',$des->id],'method'=>'DELETE']) !!}
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