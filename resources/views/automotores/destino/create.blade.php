@extends('automotores.admin')

@section('subtitulo','Incertar Destino')
@section('css')
     {!! Html::style('css/datetimepicker/prettify-1.0.css') !!}
     {!! Html::style('css/datetimepicker/base.css') !!}
     {!! Html::style('css/datetimepicker/bootstrap-datetimepicker.css') !!}
     {!! Html::style('css/easy-autocomplete.themes.min.css') !!}
     {!! Html::style('css/easy-autocomplete.min.css') !!}
     {!! Html::style('css/select2.css') !!}
@stop
@section('content')
@include('alertas.request')
<br>
<div class="panel panel-success">
    
    <div class="panel-heading text-center"><h4><p class="www">Nuevo Destino</p></h4></div>
    <div class="panel-body">      
       {!! Form::open(['route'=>'destinos.store','method'=>'POST','files' => true ,'data-toggle'=>'validator']) !!}
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            @include('automotores.destino.forms.destinos')
                <div class="col-md-4"></div>
                <div class="col-md-4">    
                <center>
                <button type="submit" class="btn btn-primary btn-block">
                    <span class="glyphicon glyphicon-floppy-save ">   Registrar</span> 
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
{!! Html::script('js/datetimepicker/transition.js') !!}
{!! Html::script('js/datetimepicker/collapse.js') !!}
{!! Html::script('js/validator.js')!!}
{!! Html::script('js/jquery.easy-autocomplete.min.js') !!}
{!! Html::script('js/select2.js') !!}

{!! Html::script('js/provincia/pro.js')!!}
{!! Html::script('js/municipio/mu.js')!!}
{!! Html::script('js/datetimepicker/prettify-1.0.min.js') !!}
{!! Html::script('js/datetimepicker/base.js') !!}
{!! Html::script('js/datetimepicker/bootstrap-datetimepicker.min.js') !!}
{!! Html::script('js/datetimepicker/bootstrap-datetimepicker.es.js') !!}

<script type="text/javascript">
$(document).ready(function () {
    $('#depini').select2({
        placeholder: "Departamento de Inicio",
        allowClear: true
    });
    $('#proini').select2({
        placeholder: "Provincia de Inicio",
        allowClear: true
    }); 
    $('#munini').select2({
        placeholder: "Municipio de Inicio",
        allowClear: true
    });
    $('#depfin').select2({
        placeholder: "Departamento de llegada",
        allowClear: true
    });
    $('#profin').select2({
        placeholder: "Provincia de llegada",
        allowClear: true
    }); 
    $('#munfin').select2({
        placeholder: "Municipio de llegada",
        allowClear: true
    });  
 });
</script>
@endsection