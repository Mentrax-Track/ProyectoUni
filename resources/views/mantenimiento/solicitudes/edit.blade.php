@extends('automotores.admin')

@section('subtitulo','Editar Solicitud')
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
<div class="panel panel-default">

    <div class="panel-heading text-center"><h4><p class="www">Editar Solicitud</p></h4></div>
    <div class="panel-body">
     {!! Form::model($sol,['route'=>['solicitudes.update',$sol->id],'method'=>'PUT']) !!}
                @include('mantenimiento.solicitudes.forms.solicitudUpdate')
                <div class="col-md-4"></div>
                <div class="col-md-4">
                <center>
                <button type="submit" class="btn btn-primary btn-sm btn-block">
                    <span class="glyphicon glyphicon-ok">   Actualizar</span> 
                </button>
                </center>
                </div>
                <div class="col-md-4"></div><br>
    {!! Form::close() !!}
            <br>
    {!! Form::open(['route'=>['solicitudes.destroy',$sol->id],'method'=>'DELETE']) !!}
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
        placeholder:"Seleccione un Accesorio",
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