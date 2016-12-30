@extends('automotores.admin')

@section('subtitulo','Generar Salida')
@section('css')
     {!! Html::style('css/datetimepicker/prettify-1.0.css') !!}
     {!! Html::style('css/datetimepicker/base.css') !!}
     {!! Html::style('css/datetimepicker/bootstrap-datetimepicker.css') !!}
     {!! Html::style('css/select2.css') !!}
@stop
@section('content')
@include('alertas.request')
<br>
<div class="panel panel-success">
    
    <div class="panel-heading text-center"><h4><p class="www">Autorización de Salidas</p></h4></div>
    <div class="panel-body jumbotron">      
       {!! Form::open(['route'=>'salidas.store','method'=>'POST','files' => true,'data-toggle'=>'validator']) !!}
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            @include('automotores.salidas.forms.salida')

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
{!! Html::script('js/datetimepicker/transition.js') !!}
{!! Html::script('js/datetimepicker/collapse.js') !!}

{!! Html::script('js/datetimepicker/prettify-1.0.min.js') !!}
{!! Html::script('js/datetimepicker/base.js') !!}
{!! Html::script('js/datetimepicker/bootstrap-datetimepicker.min.js') !!}
{!! Html::script('js/datetimepicker/bootstrap-datetimepicker.es.js') !!}
{!! Html::script('js/validator.js')!!}
{!! Html::script('js/moment.min.js') !!}
{!! Html::script('js/select2.js') !!}
<script type="text/javascript">
 $(document).ready(function () {
    $('#chof').select2({
        placeholder: "Seleccione un Chofer",
        allowClear: true
    });
    $('#vehi').select2({
        placeholder: "Seleccione un Vehiculo",
        allowClear: true
    }); 
 });
 $(function () {
        $('#datetimepicker6').datetimepicker({
            format: 'YYYY-MM-DD',
            locale: 'es'
        });
        $('#datetimepicker7').datetimepicker({
            locale: 'es',
            format: 'YYYY-MM-DD',
            useCurrent: false 
        });
        $("#datetimepicker6").on("dp.change", function (e) {
            $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
        });
        $("#datetimepicker7").on("dp.change", function (e) {
            $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
        });
        $('#datetimepicker8').datetimepicker({
            locale: 'es',
            format: 'YYYY-MM-DD ',
            useCurrent: false 
        });
    });
 $(function () {
        $('#datetimepicker3').datetimepicker({
            format: 'LT',
        });
    });
  $(function () {
        $('#datetimepicker4').datetimepicker({
            format: 'LT',
        });
    });
</script>
@endsection