@extends('automotores.admin')

@section('subtitulo','Rol de Viajes')
@section('css')
     {!! Html::style('css/select2.css') !!}
@stop
@section('content')
@include('alertas.request')
<div class="panel panel-default">
    
    <div class="panel-heading text-center"><h4><p class="www">Registrar al rol de Viajes</p></h4></div>
    <div class="panel-body">      
       {!! Form::open(['route'=>'roles.store','method'=>'POST','files' => true,'data-toggle'=>'validator']) !!}
        
            @include('automotores.roles.forms.rol')

                <div class="col-md-4"></div>
                <div class="col-md-4">
                <center>
                    <button type="submit" class="btn btn-primary btn-block">
                         <span class="glyphicon glyphicon-floppy-save ">  Registrar</span> 
                    </button>
                </center>    
                </div>
                
                <div class="col-md-4"></div>
        {!! Form::close() !!}
    </div>
</div>
@stop
@section('javascript')
{!! Html::script('js/moment.min.js') !!}
{!! Html::script('js/select2.js') !!}
<script type="text/javascript">
 $(document).ready(function () {
    $('select').select2({
        placeholder: "Seleccione un Chofer",
        allowClear: true
    }); 
 });
</script>
@stop