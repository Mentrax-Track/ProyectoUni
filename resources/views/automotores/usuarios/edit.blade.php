@extends('automotores.admin')

@section('subtitulo','Editar usuarios')
@section('css')
     {!! Html::style('css/bootstrap-datetimepicker.min.css') !!}
     {!! Html::style('css/easy-autocomplete.themes.min.css') !!}
     {!! Html::style('css/easy-autocomplete.min.css') !!}
     {!! Html::style('css/select2.css') !!}
     {!! Html::style('css/app.cc') !!}
@stop
@section('content')
@include('alertas.request')
<br>
<div class="panel panel-default">

    <div class="panel-heading text-center"><h4><p class="www">Editar Usuario</p></h4></div>
    <div class="panel-body">
     {!! Form::model($user,['route'=>['users.update',$user->id],'method'=>'PUT']) !!}
                @include('automotores.usuarios.forms.update')
                <div class="col-md-2"></div>
                <div class="col-md-3">
                <center>
                <button type="submit" class="btn btn-primary btn-sm btn-block">
                    <span class="glyphicon glyphicon-ok">   Actualizar</span> 
                </button>
                </div>
    {!! Form::close() !!}
            
    {!! Form::open(['route'=>['users.destroy',$user->id],'method'=>'DELETE']) !!}
                <div class="col-md-2"></div>
                <div class="col-md-3">
                <center>
                <button type="submit" class="btn btn-danger btn-sm btn-block">
                    <span class="glyphicon glyphicon-trash">   Eliminar</span> 
                </button>
                </center>
                </div>
                <div class="col-md-2"></div><br>
    {!! Form::close() !!}
    </div>
</div>    

@stop
@section('javascript')
{!! Html::script('js/moment.min.js') !!}
{!! Html::script('js/bootstrap-datetimepicker.min.js') !!}
{!! Html::script('js/jquery.easy-autocomplete.min.js') !!}
{!! Html::script('js/bootstrap-datetimepicker.es.js') !!}
{!! Html::script('js/select2.js') !!}
{!!Html::script('js/facultad.js')!!}
{!!Html::script('js/carrera.js')!!}
{!!Html::script('js/validator.js')!!}
@stop
