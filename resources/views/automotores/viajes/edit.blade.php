@extends('automotores.admin')

@section('subtitulo','Actualizar el viaje')
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
<div class="panel panel-info">
    
    <div class="panel-heading text-center"><h4><p class="www">ACTUALIZAR EL VIAJE</p></h4></div>
    <div class="panel-body"> 

            {!! Form::model($via,['route'=>['viajes.update',$via->id],'method'=>'PUT','data-toggle'=>'validator']) !!}
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                @include('automotores.viajes.forms.viajesUpdate')
                <div class="col-md-4"></div>
                <div class="col-md-4">
                <center>
                <button type="submit" class="btn btn-primary btn-sm btn-block" onClick="javascript: return confirm('*Al editar el viaje se borrara su presupuesto si ya fue creado... ¿Está deacuerdo?');">
                    <span class="glyphicon glyphicon-ok">   Actualizar</span> 
                </button>
                </center>
                </div>
                <div class="col-md-4"></div><br>
            {!! Form::close() !!}
            <br>
            {!! Form::open(['route'=>['viajes.destroy',$via->id],'method'=>'DELETE']) !!}
                <div class="col-md-4"></div>
                <div class="col-md-4">
                <center>
                <button type="submit" class="btn btn-danger btn-sm btn-block">
                    <span class="glyphicon glyphicon-trash">   Eliminar</span> 
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
            maximumSelectionLength: 2,
            allowClear: true
        });
        $('#vehiculo').select2({
            placeholder: "Seleccione al vehículo",
            language: "es",
            maximumSelectionLength: 4,
            allowClear: true
        });
        $('#encargado').select2({
            placeholder: "Seleccione al encargado",
            language: "es",
            maximumSelectionLength: 4,
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
@endsection




