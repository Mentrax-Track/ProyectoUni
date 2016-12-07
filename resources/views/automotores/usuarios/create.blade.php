@extends('automotores.admin')

@section('subtitulo','Incertar Usuarios')
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
    
    <div class="panel-heading text-center"><h4><p class="www">Nuevo Usuarios</p></h4></div>
    <div class="panel-body">
        
        @include('automotores.usuarios.forms.user')
       
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

