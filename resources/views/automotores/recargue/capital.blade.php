@extends('automotores.admin')

@section('subtitulo','Insertar Vehículo')

@section('content')
@include('alertas.request')
<br>
<div class="panel panel-success">
    
    <div class="panel-heading text-center"><h4><p class="www">Capital</p></h4></div>
    <div class="panel-body jumbotron">      
       {!! Form::open(['route'=>'capital.store','method'=>'POST','data-toggle'=>'validator']) !!}
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            @include('automotores.recargue.forms.capital')

                <div class="col-md-4"></div>
                <div class="col-md-4">
                <center>
                    <button type="submit" class="btn btn-primary btn-block">
                         <span class="glyphicon glyphicon-usd">  Insertar</span> 
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
{!! Html::script('js/es.js') !!}
{!! Html::script('js/validator.js') !!}

<script type="text/javascript">
function sumar()
{
    //Recargue
    var monto = verificar("monto");
    var hay   = verificar("hay");
    document.getElementById("total").value=(parseFloat(monto)+parseFloat(hay)).toFixed(2);


}
function verificar(id)
{
    var obj=document.getElementById(id);
    if(obj.value=="")
        value="0";
    else
        value=obj.value;
    if(validate_importe(value,1))
    {
        obj.style.borderColor="#808080";
        return value;
    }else{
        obj.style.borderColor="#f00";
        return 0;
    }
}
function validate_importe(value,decimal)
{
        if(decimal==undefined)
            decimal=0;
        if(decimal==1)
        {
           var patron=new RegExp("^[0-9]+((,|\.)[0-9]{1,2})?$");
        }else{
            var patron=new RegExp("^([0-9])*$")
        }
        if(value && value.search(patron)==0)
        {
            return true;
        }
        return false;
}
</script>


@stop