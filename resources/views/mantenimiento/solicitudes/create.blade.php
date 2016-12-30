@extends('automotores.admin')

@section('subtitulo','Insertar Destino')
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
    
    <div class="panel-heading text-center"><h4><p class="www">Solicitud de Trabajo</p></h4></div>
    <div class="panel-body jumbotron">      
       {!! Form::open(['route'=>'solicitudes.store','method'=>'POST','data-toggle'=>'validator']) !!}
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            @include('mantenimiento.solicitudes.forms.solicitud')
                <div class="col-md-4"></div>
                <div class="col-md-4">    
                <center>
                <button type="submit" class="btn btn-primary btn-block" >
                    <span class="glyphicon glyphicon-floppy-save "> Registrar</span> 
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
{!! Html::script('js/validator.js')!!}
{!! Html::script('js/jquery.easy-autocomplete.min.js') !!}
{!! Html::script('js/select2.js') !!}
{!! Html::script('js/datetimepicker/bootstrap-datetimepicker.min.js') !!}
{!! Html::script('js/datetimepicker/bootstrap-datetimepicker.es.js') !!}

 <script type="text/javascript">
    $(function () {
        $('#datetimepicker3').datetimepicker({
            format: 'LT',
        });
    });

 $(document).ready(function () {
    $('#mante').select2({
        tags:true,
        placeholder:"Seleccione o inserte los accesorios",
        allowClear: true,
        maximumSelectionLength: 20,
        tokenSeparators: [',']
    }); 
    $('#chof').select2({
        placeholder: "Selecciones un chofer",
        allowClear: true
    });  
    $('#vehi').select2({
        placeholder: "Seleccione un vehículo",
        allowClear: true
    });  
 });
</script>
@endsection