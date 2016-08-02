@extends('automotores.admin')

@section('subtitulo','Editar usuarios')

@section('content')
@include('alertas.request')
<br>
<div class="panel panel-default">

    <div class="panel-heading text-center"><h4>Editar Usuario</h4></div>
    <div class="panel-body">
     {!! Form::model($user,['route'=>['users.update',$user->id],'method'=>'PUT']) !!}
                @include('automotores.usuarios.forms.update')
                <div class="col-md-4"></div>
                <div class="col-md-4">
                <center>
                {!! Form::submit('Actualizar',['class'=>'btn btn-primary btn-sm btn-block']) !!}
                </center></div>
                <div class="col-md-4"></div><br>
    {!! Form::close() !!}
            <br>
    {!! Form::open(['route'=>['users.destroy',$user->id],'method'=>'DELETE']) !!}
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