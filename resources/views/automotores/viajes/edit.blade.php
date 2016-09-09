@extends('automotores.admin')

@section('subtitulo','Actualizar la Reserva')
@section('css')
     {!! Html::style('css/bootstrap-datetimepicker.min.css') !!}
     {!! Html::style('css/easy-autocomplete.themes.min.css') !!}
     {!! Html::style('css/easy-autocomplete.min.css') !!}
     {!! Html::style('css/select2.css') !!}
@stop
@section('content')
@include('alertas.request')
<br>
<div class="panel panel-default">
    
    <div class="panel-heading text-center"><h4><p class="www">Actualización de la Reserva</p></h4></div>
    <div class="panel-body"> 

            {!! Form::model($via,['route'=>['viajes.update',$via->id],'method'=>'PUT']) !!}
                @include('automotores.viajes.forms.vias')
                <div class="col-md-4"></div>
                <div class="col-md-4">
                <center>
                {!! Form::submit('Actualizar',['class'=>'btn btn-primary btn-sm btn-block']) !!}
                </center></div>
                <div class="col-md-4"></div><br>
            {!! Form::close() !!}
            <br>
            {!! Form::open(['route'=>['viajes.destroy',$via->id],'method'=>'DELETE']) !!}
                <div class="col-md-4"></div>
                <div class="col-md-4">
                <center>
                {!! Form::submit('Eliminar',['class'=>'btn btn-danger btn-sm btn-block']) !!}
                </center></div>
                <div class="col-md-4"></div><br>
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
{!! Html::script('js/entidades.js') !!}
{!! Html::script('js/kilometrajeViajes.js') !!}
 <script type="text/javascript">
    $(function () {
        $('#datetimepicker6').datetimepicker();
        $('#datetimepicker7').datetimepicker({
            useCurrent: false 
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
    $('select').select2();    
</script>
<script type="text/javascript">
    $(document).ready(function () {
        // inicializamos el plugin
        $('#chofer').select2({
            // Activamos la opcion "Chofer" del plugin
            tags: false,
            tokenSeparators: [','],
            ajax: {
                dataType: 'json',
                url: '{{ url("chofer") }}',
                delay: 250,
                data: function(params) {
                    return {
                        term: params.term
                    }
                },
                processResults: function (data, page) {
                  return {
                    results: data
                  };
                },
            }
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        // inicializamos el plugin
        $('#vehiculo').select2({
            // Activamos la opcion "Vehiculo" del plugin
            tags: false,
            tokenSeparators: [','],
            ajax: {
                dataType: 'json',
                url: '{{ url("vehiculo") }}',
                delay: 250,
                data: function(params) {
                    return {
                        term: params.term
                    }
                },
                processResults: function (data, page) {
                  return {
                    results: data
                  };
                },
            }
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        // inicializamos el plugin
        $('#encargado').select2({
            // Activamos la opcion "Encargado" del plugin
            tags: false,
            tokenSeparators: [','],
            ajax: {
                dataType: 'json',
                url: '{{ url("encargado") }}',
                delay: 250,
                data: function(params) {
                    return {
                        term: params.term
                    }
                },
                processResults: function (data, page) {
                  return {
                    results: data
                  };
                },
            }
        });
    });
</script>
@endsection




