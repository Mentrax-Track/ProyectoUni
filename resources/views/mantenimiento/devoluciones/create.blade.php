@extends('automotores.admin')

@section('subtitulo','Devolución de material')
@section('css')
     {!! Html::style('css/datetimepicker/prettify-1.0.css') !!}
     {!! Html::style('css/datetimepicker/base.css') !!}
     {!! Html::style('css/datetimepicker/bootstrap-datetimepicker.css') !!}
@stop
@section('content')
@include('alertas.request')
<br>
<div class="panel panel-success">
    
    <div class="panel-heading text-center"><h4><p class="www">Realizar devolución</p></h4></div>
    <div class="panel-body jumbotron">      
       {!! Form::open(['route'=>'devoluciones.store','method'=>'POST','data-toggle'=>'validator']) !!}
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            @include('mantenimiento.devoluciones.forms.devo')
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