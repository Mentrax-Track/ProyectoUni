@extends('automotores.admin')

@section('subtitulo','Incertar Viaje')
@section('css')
     {!! Html::style('css/bootstrap-datetimepicker.min.css') !!}
     {!! Html::style('css/easy-autocomplete.themes.min.css') !!}
     {!! Html::style('css/easy-autocomplete.min.css') !!}
     {!! Html::style('css/select2.css') !!}
@stop
@section('content')
@include('alertas.request')
@include('alertas.errors')
<br>
<div class="panel panel-default">
    
    <div class="panel-heading text-center"><h4><p class="www">Nuevo Viaje</p></h4></div>
    <div class="panel-body">      
       {!! Form::open(['route'=>'viajes.store','method'=>'POST','data-toggle'=>'validator']) !!}
        
            @include('automotores.viajes.forms.via')
                <div class="col-md-4"></div>
                <div class="col-md-4">    
                <center>{!! Form::submit('Registrar',['class'=>'btn btn-primary btn-sm btn-block']) !!}</center>
                </div>
                <div class="col-md-4"></div>

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
{!!Html::script('js/validator.js')!!}
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
<!--//Para aumentar dinamicamente con jquery los destino y kilometrajes
<script type="text/javascript">
    $(document).ready(function()
    {
        var template = '<li class="list-group-item contenedor-de-destinos">'+
                        '<div class="form-group ">'+  
                        '<div class="btn-group" role="group">'+
                        '<label for="">Destino</label>'+
                        '{!! Form::select('destino_id',$destino,null,['class'=>'form-control','placeholder'=>'Seleccione un Destino','id'=>'destino_id']) !!}'+'</div>'+
                        '<div class="btn-group" role="group">'+
                        '<label for="">Kilometraje</label>'+
                        '<text class="form-control input-sm" name="kilome" id="kilome">'+
                            '<option value=""></option>'+
                        '</text>'+'</div>'+'<div class="btn-group" role="group">'+
                        '<br>'+
                        '<a href="#" class="btn btn-xs btn-danger btn-remove">Eliminar</a>'+'</div>'+
                 
                '</div>'+'</li>'
                        

        $('.btn-add-more-destino').on('click',function(e){
            e.preventDefault();
            $(this).before(template);
        });

        $(document).on('click','.btn-remove',function(e){

           e.preventDefault();
            $(this).parents('.contenedor-de-destinos').remove();
        });

    });    
</script>
-->
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




