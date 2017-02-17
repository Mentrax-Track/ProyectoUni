@extends('automotores.admin')

@section('subtitulo','Recarga de combustible')

@section('content')
@include('alertas.request')
@include('alertas.success')
@include('alertas.errors')
<br>
<div class="panel panel-success">
    <div class="panel-heading text-center"><h4><p class="www">Recargar combustible</p></h4></div>
    <div class="panel-body jumbotron"> 

            <form class="form-horizontal" role="form" method="POST" action="{{ url('combustible/create') }}" data-toggle="validator">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                @include('automotores.combustible.forms.vehiupdate')
                <div class="col-md-4"></div>
                <div class="col-md-4">
                <center>
                <button type="submit" class="btn btn-primary  btn-block">
                    <span class="glyphicon glyphicon-ok">  Insertar</span> 
                </button>
                </center>
                </div>
                <div class="col-md-4"></div><br>
            </form> 
            
        </div>
</div>  

<script type="text/javascript">
function sumar()
{
    //Recargue de la gasolina
    var gasolina1 = verificar("gasolina1");
    var prega1     = verificar("prega1");
    document.getElementById("toga1").value=(parseFloat(gasolina1)*parseFloat(prega1)).toFixed(2);

    //Recargue del diesel
    var diesel1 = verificar("diesel1");
    var predi1  = verificar("predi1");
    document.getElementById("todi1").value=(parseFloat(diesel1)*parseFloat(predi1)).toFixed(2);

    //Recargue del GNV
    var gnv1   = verificar("gnv1");
    var pregn1 = verificar("pregn1");
    document.getElementById("togn1").value=(parseFloat(gnv1)*parseFloat(pregn1)).toFixed(2);

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

@endsection



