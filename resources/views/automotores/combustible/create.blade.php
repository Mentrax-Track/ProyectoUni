@extends('automotores.admin')

@section('subtitulo','Insertar Vehículo')
@section('css')
     {!! Html::style('css/select2.css') !!}
@stop
@section('content')
@include('alertas.request')
<br>
<div class="panel panel-success">
    
    <div class="panel-heading text-center"><h4><p class="www">Recargar combustible al vehículo</p></h4></div>
    <div class="panel-body">      
       {!! Form::open(['route'=>'combustibles.store','method'=>'POST','data-toggle'=>'validator']) !!}
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            @include('automotores.combustible.forms.vehi')

                <div class="col-md-4"></div>
                <div class="col-md-4">
                <center>
                    <button type="submit" class="btn btn-primary btn-block">
                         <span class="glyphicon glyphicon-floppy-save ">  Insertar</span> 
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
{!! Html::script('js/select2.js') !!}
<script type="text/javascript">
 $(document).ready(function () {
    $('select').select2({
        placeholder: "Seleccione un Vehículo",
        allowClear: true
    }); 
 });
</script>
@stop