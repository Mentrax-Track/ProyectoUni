@extends('automotores.admin')

@section('subtitulo','Enviar Mensaje')
@section('css')
     {!! Html::style('css/bootstrap.css') !!}
@stop
@section('javascript')
{!! Html::script('js/jquery.min.js')!!}
{!! Html::script('js/validator.js')!!}
{!! Html::script('js/bootstrap.min.js')!!}
@endsection
@section('content')
@include('alertas.request')
@include('alertas.success')
<br>
<div class="panel panel-info">
    
    <div class="panel-heading text-center"><h4><p class="www">Nuevo Mensaje</p></h4></div>
    <div class="panel-body "> 
    <li class="list-group-item list-group-item-success col-md-12">      
       <div class="">
       {!! Form::open(['route'=>'mail.store','method'=>'POST','data-toggle'=>'validator']) !!}
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
        
            <div class="col-md-6 contact-left">
                <center>{!! Form::label('Nombre') !!}</center>    
                {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre','data-error'=>'Ingrese el nombre por favor','required']) !!}
                 <center><div class="help-block with-errors"></div></center>
                <center>{!! Form::label('E-mail') !!}</center>
                {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'Correo electrónico','data-error'=>'Ingrese el e-mail por favor','required']) !!} 
                 <center><div class="help-block with-errors"></div></center>
            </div>
            <div class="col-md-6 contact-right">
                {!! Form::textarea('mensaje',null,['class'=>'form-control','placeholder'=>'Mensaje','rows'=>5,'data-error'=>'Ingrese el mensaje por favor','required']) !!}  
                 <center><div class="help-block with-errors"></div></center>   
            </div> 
            
            <div class="col-md-6 contact-right">
                <center>
                    <button type="submit" class="btn btn-primary">
                        <span class="fa fa-hand-o-up">  Enviar</span> 
                    </button>
                </center>
            </div>

        {!! Form::close() !!}
        </div>
    </li>
    </div>
</div>

@stop
