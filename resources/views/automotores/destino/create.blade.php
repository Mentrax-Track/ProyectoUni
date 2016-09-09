@extends('automotores.admin')

@section('subtitulo','Incertar Destino')
@section('css')
     {!! Html::style('css/bootstrap.min.css') !!}
     {!! Html::style('css/datetimepicker/prettify-1.0.css') !!}
     {!! Html::style('css/datetimepicker/base.css') !!}
     {!! Html::style('css/datetimepicker/bootstrap-datetimepicker.css') !!}
@stop
@section('content')
@include('alertas.request')
<br>
<div class="panel panel-default">
    
    <div class="panel-heading text-center"><h4><p class="www">Nuevo Destino</p></h4></div>
    <div class="panel-body">      
       {!! Form::open(['route'=>'destinos.store','method'=>'POST','files' => true ]) !!}
        
            @include('automotores.destino.forms.destinos')
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
{!! Html::script('js/jquery.min.js') !!}
{!! Html::script('js/moment.min.js') !!}
{!! Html::script('js/datetimepicker/transition.js') !!}
{!! Html::script('js/datetimepicker/collapse.js') !!}
{!! Html::script('js/bootstrap.min.js') !!}

{!! Html::script('js/datetimepicker/prettify-1.0.min.js') !!}
{!! Html::script('js/datetimepicker/base.js') !!}
{!! Html::script('js/datetimepicker/bootstrap-datetimepicker.min.js') !!}
{!! Html::script('js/datetimepicker/bootstrap-datetimepicker.es.js') !!}
 <script type="text/javascript">
    $(function () {
        $('#datetimepicker3').datetimepicker({
            format: 'LT',
        });
    });
</script>
@endsection
