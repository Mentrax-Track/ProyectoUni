@extends('automotores.admin')

@section('subtitulo','Añadir una EXCEPCIÓN al rol de viajes')
@section('css')
     {!! Html::style('css/bootstrap.min.css') !!}
     {!! Html::style('css/datetimepicker/prettify-1.0.css') !!}
     {!! Html::style('css/datetimepicker/base.css') !!}
     {!! Html::style('css/datetimepicker/bootstrap-datetimepicker.css') !!}
     {!! Html::style('css/select2.css') !!}
@stop
@section('content')
@include('alertas.request')
@include('alertas.success')
@include('alertas.errors')
<br>
<div class="panel panel-success">
    <div class="panel-heading text-center"><h4><p class="www">Insertar Excepción</p></h4></div>
    <div class="panel-body"> 

            {!! Form::open(['url'=>'roles/excepcion','method'=>'POST','data-toggle'=>'validator']) !!}
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                @include('automotores.roles.forms.rolexcepcion')
                <div class="col-md-4"></div>
                <div class="col-md-4">
                <center>
                <button type="submit" class="btn btn-primary  btn-block">
                    <span class="glyphicon glyphicon-ok">  Insertar</span> 
                </button>
                </center>
                </div>
                <div class="col-md-4"></div><br>
            {!! Form::close() !!}
            
        </div>
</div>  
@stop
@section('javascript')
{!! Html::script('js/moment.min.js') !!}
{!! Html::script('js/jquery.min.js') !!}
{!! Html::script('js/datetimepicker/transition.js') !!}
{!! Html::script('js/datetimepicker/collapse.js') !!}
{!! Html::script('js/bootstrap.min.js') !!}

{!! Html::script('js/datetimepicker/prettify-1.0.min.js') !!}
{!! Html::script('js/datetimepicker/base.js') !!}
{!! Html::script('js/datetimepicker/bootstrap-datetimepicker.min.js') !!}
{!! Html::script('js/datetimepicker/bootstrap-datetimepicker.es.js') !!}
{!! Html::script('js/select2.js') !!}
<script type="text/javascript">
 $(document).ready(function () {
    $('select').select2({
        placeholder: "Seleccione un tipo de Viaje",
        allowClear: true
    }); 
 });   
</script>

<script type="text/javascript">
    $(function () {
            $('#datetimepicker6').datetimepicker({
                format: 'YYYY-MM-DD HH:mm',
                locale: 'es'
            });
    });
</script>
@endsection




