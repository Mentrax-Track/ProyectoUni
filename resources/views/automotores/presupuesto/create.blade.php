@extends('automotores.admin')

@section('subtitulo','Presupuesto de Viaje')
@section('css')

     {!! Html::style('css/bootstrap.min.css') !!}
     {!! Html::style('css/datetimepicker/prettify-1.0.css') !!}
     {!! Html::style('css/datetimepicker/base.css') !!}
     {!! Html::style('css/datetimepicker/bootstrap-datetimepicker.css') !!}

     {!! Html::style('css/easy-autocomplete.themes.min.css') !!}
     {!! Html::style('css/easy-autocomplete.min.css') !!}
     {!! Html::style('css/select2.css') !!}

@stop
@section('content')
@include('alertas.request')
@include('alertas.errors')
<br>
<div class="panel panel-default">
    
    <div class="panel-heading text-center"><h4><p class="www">Presupuesto de Viaje</p></h4></div>
    <div class="panel-body"> 
        {!! Form::open(['route'=>'presupuestos.store','method'=>'POST','files' => true ]) !!}
        
            @include('automotores.presupuesto.forms.presu')
                <div class="col-md-4"></div>
                <div class="col-md-4">    
                    <center>{!! Form::submit('Registrar',['class'=>'btn btn-primary btn-sm btn-block']) !!}</center>
                </div>
                <div class="col-md-4"></div>
        {!! Form::close() !!}
        </div>
</div>
@endsection

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

{!! Html::script('js/jquery.easy-autocomplete.min.js') !!}
{!! Html::script('js/select2.js') !!}
<script type="text/javascript">
    $('select').select2();    
</script>
<script type="text/javascript">
$(function () {
        $('#datetimepicker6').datetimepicker({
            format: 'YYYY-MM-DD',
            locale: 'es'
        });
        $('#datetimepicker7').datetimepicker({
            locale: 'es',
            format: 'YYYY-MM-DD',
            useCurrent: false 
        });
        $("#datetimepicker6").on("dp.change", function (e) {
            $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
        });
        $("#datetimepicker7").on("dp.change", function (e) {
            $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
        });
        $('#datetimepicker8').datetimepicker({
            locale: 'es',
            format: 'YYYY-MM-DD ',
            useCurrent: false 
        });
    });
 $(function () {
        $('#datetimepicker3').datetimepicker({
            format: 'LT',
        });
    });
  $(function () {
        $('#datetimepicker4').datetimepicker({
            format: 'LT',
        });
    });

function sumar()
{

    var total=verificar("total");
    var division=verificar("division");
    var combustible=verificar("combustible");

    var pcantidad=verificar("pcantidad");
    var punitario=verificar("punitario");
    var ptotal=verificar("ptotal");
    
    document.getElementById("total").value=parseFloat(total);
    document.getElementById("division").value=parseFloat(division);
    document.getElementById("combustible").value=parseFloat(total)/parseFloat(division);

    document.getElementById("pcantidad").value=parseFloat(pcantidad);
    document.getElementById("punitario").value=parseFloat(punitario);
    document.getElementById("ptotal").value=parseFloat(pcantidad)*parseFloat(punitario);
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