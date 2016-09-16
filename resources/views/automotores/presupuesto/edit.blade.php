@extends('automotores.admin')

@section('subtitulo','Actualizar la Reserva')
@section('css')
     {!! Html::style('css/bootstrap-datetimepicker.min.css') !!}
     {!! Html::style('css/easy-autocomplete.themes.min.css') !!}
     {!! Html::style('css/easy-autocomplete.min.css') !!}
     {!! Html::style('css/select2.css') !!}
@stop
@section('content')
@include('alertas.request')
<br>
<div class="panel panel-default">
    
    <div class="panel-heading text-center"><h4><p class="www">Actualización del Presupuesto</p></h4></div>
    <div class="panel-body"> 

            {!!Form::model($presupuesto,['route'=> ['presupuestos.update',$presupuesto->id],'method'=>'PUT'])!!}

                @include('automotores.presupuesto.form.pro')
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <center>
                    {!! Form::submit('Actualizar',['class'=>'btn btn-primary btn-sm btn-block']) !!}
                    </center>
                </div>
                <div class="col-md-4"></div><br>
            {!! Form::close() !!}
            <br>
            {!! Form::open(['route'=>['pre.destroy',$presupuesto->id],'method'=>'DELETE']) !!}
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <center>
                        {!! Form::submit('Eliminar',['class'=>'btn btn-danger btn-sm btn-block']) !!}
                    </center>
                </div>
                <div class="col-md-4"></div><br>
            {!! Form::close() !!}
         </div>
</div>
@stop
@section('javascript')
{!! Html::script('js/moment.min.js') !!}
{!! Html::script('js/bootstrap-datetimepicker.min.js') !!}
{!! Html::script('js/bootstrap-datetimepicker.es.js') !!}
<script type="text/javascript">
$(function () {
      $('#datetimepicker6').datetimepicker({
          format:  'YYYY/MM/DD '     
      });
      $('#datetimepicker6').data("DateTimePicker");
      $('#datetimepicker7').datetimepicker({
          format:  'YYYY/MM/DD'    
      });
      $('#datetimepicker7').data("DateTimePicker");
      $('#datetimepicker8').datetimepicker({
          format:  'YYYY/MM/DD'    
      });
      $('#datetimepicker8').data("DateTimePicker");
        
    });
 $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT',
                    pickDate: false
                });
            });
  $(function () {
                $('#datetimepicker4').datetimepicker({
                    format: 'LT',
                    pickDate: false
                });
            });
function sumar()
{
    var valor1=verificar("valor1");
    
    var valor2=verificar("valor2");

    var valor3=verificar("valor3");
    var valor4=verificar("valor4");

    var valor5=verificar("valor5");
    var valor6=verificar("valor6");

    var valor7=verificar("valor7");
    var valor8=verificar("valor8");

    var valor9=verificar("valor9");
    var valor10=verificar("valor10");

    var valor11=verificar("valor11");
    var valor12=verificar("valor12");

    /* --------------------------------*/
    var valor13=verificar("valor13");
    var valor14=verificar("valor14");
    var valor15=verificar("valor15");
    var valor16=verificar("valor16");
    var valor17=verificar("valor17");
    var valor18=verificar("valor18");

    var valor19=verificar("valor19");
    var valor20=verificar("valor20");

    var valor21=verificar("valor21");
    var valor22=verificar("valor22");

    var valor23=verificar("valor23");
    var valor24=verificar("valor24");
    var valor25=verificar("valor25");

    var re2=(parseFloat(valor1)*parseFloat(valor2))+(parseFloat(valor3)*parseFloat(valor4))+(parseFloat(valor5)*parseFloat(valor6))+(parseFloat(valor7)*parseFloat(valor8))+(parseFloat(valor9)*parseFloat(valor10))+(parseFloat(valor11)*parseFloat(valor12));
    var total7=re2.toFixed(2);
    var re3=(parseFloat(valor19)*parseFloat(valor20))+(parseFloat(valor21)*parseFloat(valor22))+(parseFloat(valor23)*parseFloat(valor24));
    var total14=re3.toFixed(2);
    var re4=(parseFloat(valor1)*(parseFloat(valor2))+(parseFloat(valor3)*parseFloat(valor4))+(parseFloat(valor5)*parseFloat(valor6))+(parseFloat(valor7)*parseFloat(valor8))+(parseFloat(valor9)*parseFloat(valor10))+(parseFloat(valor11)*parseFloat(valor12)))-((parseFloat(valor19)*parseFloat(valor20))+(parseFloat(valor21)*parseFloat(valor22))+(parseFloat(valor23)*parseFloat(valor24)));
    var total15=re4.toFixed(2);

    var des1=(parseFloat(valor1)*parseFloat(valor2));
    var total1=des1.toFixed(2);
    var des2=(parseFloat(valor3)*parseFloat(valor4));
    var total2=des2.toFixed(2);
    var des3=(parseFloat(valor5)*parseFloat(valor6));
    var total3=des3.toFixed(2);
    var des4=(parseFloat(valor7)*parseFloat(valor8));
    var total4=des4.toFixed(2);
    var des5=(parseFloat(valor9)*parseFloat(valor10));
    var total5=des5.toFixed(2);
    var des6=(parseFloat(valor11)*parseFloat(valor12));
    var total6=des6.toFixed(2);

    document.getElementById("total1").value=parseFloat(total1);
    document.getElementById("total2").value=parseFloat(total2);
    document.getElementById("total3").value=parseFloat(total3);
    document.getElementById("total4").value=parseFloat(total4);
    document.getElementById("total5").value=parseFloat(total5);
    document.getElementById("total6").value=parseFloat(total6);
    document.getElementById("total7").value=parseFloat(total7);
    document.getElementById("total8").value=parseFloat(valor13)+parseFloat(valor14)+parseFloat(valor15)+parseFloat(valor16)+parseFloat(valor17)+parseFloat(valor18);
    document.getElementById("total9").value=parseFloat(valor19)*parseFloat(valor20);
    document.getElementById("total10").value=parseFloat(valor21)*parseFloat(valor22);
    document.getElementById("total11").value=parseFloat(valor23)*parseFloat(valor24);
        
    document.getElementById("total14").value=parseFloat(total14);
    document.getElementById("total15").value=parseFloat(total15);
    document.getElementById("total16").value=parseFloat((parseFloat(valor13)+parseFloat(valor14)+parseFloat(valor15)+parseFloat(valor16)+parseFloat(valor17)+parseFloat(valor18))/parseFloat(valor25));
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