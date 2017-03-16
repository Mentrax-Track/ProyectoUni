@extends('automotores.admin')

@section('subtitulo','Petición de material')
@section('css')
     {!! Html::style('css/datetimepicker/prettify-1.0.css') !!}
     {!! Html::style('css/datetimepicker/base.css') !!}
     {!! Html::style('css/datetimepicker/bootstrap-datetimepicker.css') !!}
@stop
@section('content')
@include('alertas.request')
<br>
<div class="panel panel-success">
    
    <div class="panel-heading text-center"><h4><p class="www">Editar la petición de material</p></h4></div>
    <div class="panel-body jumbotron"> 
        {!! Form::model($peticion,['route'=>['peticion.update',$peticion->id],'method'=>'PUT']) !!}
                    @include('mantenimiento.peticion.forms.peti')
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
        {!! Form::open(['route'=>['peticion.destroy',$peticion->id],'method'=>'DELETE']) !!}
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
{!! Html::script('js/datetimepicker/bootstrap-datetimepicker.min.js') !!}
{!! Html::script('js/datetimepicker/bootstrap-datetimepicker.es.js') !!}

 <script type="text/javascript">
    $(function () {
        $('#datetimepicker1').datetimepicker({
            format: 'YYYY-MM-DD HH:mm',
            locale: 'es'
        });
    });
</script>
@endsection