@extends('automotores.admin')

@section('subtitulo','Incertar Usuarios')
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
{!!Html::script('js/validator.js')!!}
@stop