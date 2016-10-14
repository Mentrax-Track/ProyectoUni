@extends('automotores.admin')

@section('subtitulo','Generar Salida')
@section('content')
@include('alertas.request')
<br>
<div class="panel panel-default">
    
    <div class="panel-heading text-center"><h4><p class="www">Autorización de Salidas</p></h4></div>
    <div class="panel-body">      
       {!! Form::open(['route'=>'salidas.store','method'=>'POST','files' => true,'data-toggle'=>'validator']) !!}
        
            @include('automotores.salidas.forms.salida')

                <div class="col-md-4"></div>
                <div class="col-md-4">
                <center>
                    <button type="submit" class="btn btn-primary btn-block" onClick="this.disabled='disabled'">
                         <span class="glyphicon glyphicon-floppy-save ">  Registrar</span> 
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