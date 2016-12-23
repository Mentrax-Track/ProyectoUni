@extends('automotores.admin')

@section('subtitulo','Realizar Trabajo')
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
@include('alertas.errors')
<br>
<div class="panel panel-default">
    
    <div class="panel-heading text-center"><h4><p class="www">Realizar Trabajo</p></h4></div>
    <div class="panel-body">      
       {!! Form::open(['route'=>'mecanicos.store','method'=>'POST','data-toggle'=>'validator']) !!}
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            @include('mantenimiento.mecanico.forms.concretar')
                <div class="col-md-4"></div>
                <div class="col-md-4">    
                <center><button type="submit" class="btn btn-primary btn-block" >
                    <!--onClick="this.disabled='disabled'"-->
                    <span class="glyphicon glyphicon-floppy-save ">   Registrar</span> 
                </button></center>
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

{!! Html::script('js/datetimepicker/prettify-1.0.min.js') !!}
{!! Html::script('js/datetimepicker/base.js') !!}
{!! Html::script('js/datetimepicker/bootstrap-datetimepicker.min.js') !!}
{!! Html::script('js/datetimepicker/bootstrap-datetimepicker.es.js') !!}

{!! Html::script('js/jquery.easy-autocomplete.min.js') !!}
{!! Html::script('js/select2.js') !!}
{!! Html::script('js/entidades.js') !!}
{!! Html::script('js/kilometrajeViajes.js') !!}
{!! Html::script('js/validator.js')!!}
 <script type="text/javascript">
$(function () {
        $('#datetimepicker1').datetimepicker({
            format: 'YYYY-MM-DD HH:mm',
            locale: 'es'
        });
    });   
 $(document).ready(function () {
    $('#mante').select2({
        tags:true,
        placeholder:"Seleccione un Accesorio",
        allowClear: true,
        maximumSelectionLength: 20,
        tokenSeparators: [',']
    });   
 });
</script>
@endsection




