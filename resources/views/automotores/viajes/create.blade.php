@extends('automotores.admin')

@section('subtitulo','Incertar Viaje')
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
@include('alertas.success')
<br>
<div class="panel panel-success">
    
    <div class="panel-heading text-center"><h4><p class="www"><strong>Nuevo Viaje</strong></p></h4></div>
    <div class="panel-body jumbotron">     
        <center><font color="red">■</font>Los campos de color <font color = "#31708f"><strong> CELESTE </strong></font> SON OBLIGATORIOS.<font color="red">■</font> Los campos de color <font color = "#3c763d"><strong> VERDER </strong></font> son opcionales</center> 
       {!! Form::open(['route'=>'viajes.store','method'=>'POST','data-toggle'=>'validator']) !!}
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            @include('automotores.viajes.forms.viajes')
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
{!! Html::script('js/es.js') !!}
{!! Html::script('js/entidades.js') !!}
{!! Html::script('js/kilometrajeViajes.js') !!}
{!! Html::script('js/validator.js')!!}

<script type="text/javascript">
    $(document).ready(function () {
        // inicializamos el plugin
        $('#destino_id').select2({
            placeholder: "Seleccione un destino",
            language: "es",
            allowClear: true
        });
        $('#dest1').select2({
            placeholder: "Seleccione un destino",
            language: "es",
            allowClear: true
        });
        $('#dest2').select2({
            placeholder: "Seleccione un destino",
            language: "es",
            allowClear: true
        });
        $('#dest3').select2({
            placeholder: "Seleccione un destino",
            language: "es",
            allowClear: true
        });
        $('#dest4').select2({
            placeholder: "Seleccione un destino",
            language: "es",
            allowClear: true
        });
        $('#dest5').select2({
            placeholder: "Seleccione un destino",
            language: "es",
            allowClear: true
        });
        $('#chofer').select2({
            placeholder: "Seleccione al chofer",
            language: "es",
            allowClear: true
        });
        $('#vehiculo').select2({
            placeholder: "Seleccione al vehículo",
            language: "es",
            allowClear: true
        });
        $('#encargado').select2({
            placeholder: "Seleccione al encargado",
            language: "es",
            allowClear: true
        });
        $('#tipo').select2({
            placeholder: "Seleccione o Inserte el tipo de viaje",
            tags: true,
            language: "es",
            maximumSelectionLength: 1,
            allowClear: true
        });
        $('#tipov').select2({
            placeholder: "Seleccione un tipo",
            tags: true,
            language: "es",
            maximumSelectionLength: 1,
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
        $('#datetimepicker7').datetimepicker({
            locale: 'es',
            format: 'YYYY-MM-DD HH:mm',
            useCurrent: false //Important! See issue #1075
        });
        $("#datetimepicker6").on("dp.change", function (e) {
            $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
        });
        $("#datetimepicker7").on("dp.change", function (e) {
            $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
        });
    });    
</script>
@endsection




