@extends('automotores.admin')

@section('subtitulo','Imprimir algunos vehículos')
@section('css')
     {!! Html::style('css/select2.css') !!}
@stop
@section('content')
@include('alertas.request')
<br>
<div class="panel panel-success">
    
    <div class="panel-heading text-center"><h4><p class="www">Imprimir Vehículos</p></h4></div>
    <div class="panel-body jumbotron">      
       {!! Form::open(['url'=>'imprimirVehiculosAlgunos','method'=>'POST','data-toggle'=>'validator','class'=>'form-inline has-success has-feedback']) !!}
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            
        <li class="list-group-item list-group-item-info">
            <div class="row">
                <center>
                    <div class="col-md-4" ></div>
                    <div class="col-md-4" >
                        {!! Form::label('Seleccione el tipo general del vehículo: ') !!}
                        
                        {!! Form::select('tipog[]',$tipog,null,['class'=>' form-control js-example-responsive','style'=>'width: 100%','multiple'=>'multiple','placelholder','id'=>'tipog'])!!}

                        
                    </div>
                </center>
            </div>
        </li>

            <div class="col-md-4"></div>
                <div class="col-md-4">
                <center>
                    <button type="submit" class="btn btn-warning btn-block" target="_blank">
                        <span class="fa fa-pencil-square-o "> imprimir</span> 
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
{!! Html::script('js/select2.js') !!}

 <script type="text/javascript">

 $(document).ready(function () {
    $('#tipog').select2({
        tags:false,
        placeholder:"Seleccione a los vehículos para imprimir",
        allowClear: true,
        maximumSelectionLength: 20,
        tokenSeparators: [',']
    }); 
 });
</script>
@endsection