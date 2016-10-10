@extends('automotores.admin')

@section('subtitulo','Incertar Vehiculo')
@section('content')
@include('alertas.request')
<br>
<div class="panel panel-default">
    
    <div class="panel-heading text-center"><h4><p class="www">Nuevo Vehiculo</p></h4></div>
    <div class="panel-body">      
       {!! Form::open(['route'=>'vehiculos.store','method'=>'POST','files' => true,'data-toggle'=>'validator']) !!}
        
            @include('automotores.vehiculo.forms.vehiculos')

                <div class="col-md-4"></div>
                <div class="col-md-4">
                <center>
                    <button type="submit" class="btn btn-primary btn-block" onClick="this.disabled='disabled'">
                         <span class="glyphicon glyphicon-floppy-save ">   Registrar</span> 
                    </button>
                </center>    
                </div>
                
                <div class="col-md-4"></div>
        {!! Form::close() !!}
    </div>
</div>
@stop
@section('javascript')
{!! Html::script('js/validator.js')!!}
@endsection