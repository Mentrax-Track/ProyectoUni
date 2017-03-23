@extends('automotores.admin')

@section('subtitulo','Presupuesto de Viaje')
@section('css')

     {!! Html::style('css/datetimepicker/prettify-1.0.css') !!}
     {!! Html::style('css/datetimepicker/base.css') !!}
     {!! Html::style('css/datetimepicker/bootstrap-datetimepicker.css') !!}

     {!! Html::style('css/easy-autocomplete.themes.min.css') !!}
     {!! Html::style('css/easy-autocomplete.min.css') !!}
     {!! Html::style('css/select2.css') !!}
     {!! Html::style('css/app.css') !!}
@stop
@section('content')
@include('alertas.request')
@include('alertas.errors')
<br>
<div class="panel panel-info">
    
    <div class="panel-heading text-center"><h4><p class="www"><strong><u>Presupuesto del viaje de {{ $viaje->entidad }} con km.:</u> <font color="red">{{ $ruta->total }}</font></strong></p></h4></div>
    <center><font color="red">■</font>Los campos de la letra color <font color = "green"><strong> VERDE </strong></font> son obligatorios.<font color="red">■</font> Los campos de la letra color <font color = "#3f3f3f"><strong> OSCURO </strong></font> son opcionales.</center>
    <div class="panel-body"> 
        {!! Form::open(['route'=>'presupuestos.store','method'=>'POST','data-toggle'=>'validator' ]) !!}
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                
                    @include('automotores.presupuesto.forms.presu')  
       

                <div class="row">
                  <div class="col-md-4"></div>
                  <div class="col-md-4">
                      <button type="submit" class="btn btn-primary btn-block" >
                          <span class="glyphicon glyphicon-floppy-save ">   Registrar</span> 
                      </button>        
                  </div>
                  <div class="col-md-4"></div>   
                </div>
        {!! Form::close() !!}    
    </div>
</div>
@endsection

@section('javascript')
{!! Html::script('js/moment.min.js') !!}
{!! Html::script('js/datetimepicker/transition.js') !!}
{!! Html::script('js/datetimepicker/collapse.js') !!}

{!! Html::script('js/datetimepicker/prettify-1.0.min.js') !!}
{!! Html::script('js/datetimepicker/base.js') !!}
{!! Html::script('js/datetimepicker/bootstrap-datetimepicker.min.js') !!}
{!! Html::script('js/datetimepicker/bootstrap-datetimepicker.es.js') !!}

{!! Html::script('js/jquery.easy-autocomplete.min.js') !!}
{!! Html::script('js/select2.js') !!}
{!! Html::script('js/validator.js')!!}
<script type="text/javascript">
    $('select').select2({
        placeholder: "Seleccione una opción",
        allowClear: true
    });    
</script>
<!-- Para validar en los usuarios encargado y chofer
<script type="text/javascript">
    function ValidarSelect()
    {
        var e = document.getElementById("vehiculo");
        var idVehi = e.options[e.selectedIndex].value;

        var strUser1 = e.options[e.selectedIndex].text;
        if(idVehi==0)
        {
            alert("Seleccione un Vehiculo por favor");
            return false;
        }else{
            return true;
        }

    }
</script>-->
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

    var total = verificar("total");
    var division=verificar("division");

    document.getElementById("total").value=parseFloat(total);
    // .toFixed(2) Convierte un número en una cadena , manteniendo sólo dos decimales
    document.getElementById("combustible").value=(parseFloat(total)/parseFloat(division)).toFixed(2);
    //Funciones aritmeticas para Descripcion Presupuestaria
    //Combustible
    var cantidadC = verificar("cantidadC");
    var carta1    = verificar("carta1")
    var precioC   = verificar("precioC");
    var result    =(parseFloat(cantidadC)+parseFloat(carta1)).toFixed(2);
    document.getElementById("totalC").value=(parseFloat(result)*parseFloat(precioC)).toFixed(2);
    //Viaticos Ciudad
    var cantidadVC = verificar("cantidadVC");
    var precioVC   = verificar("precioVC");
    document.getElementById("totalVC").value=(parseFloat(cantidadVC)*parseFloat(precioVC)).toFixed(2);
    //Viaticos Ciuada
    var cantidadVP = verificar("cantidadVP");
    var precioVP   = verificar("precioVP");
    document.getElementById("totalVP").value=(parseFloat(cantidadVP)*parseFloat(precioVP)).toFixed(2);
    //Viaticos Frontera
    var cantidadVF = verificar("cantidadVF");
    var precioVF   = verificar("precioVF");
    document.getElementById("totalVF").value=(parseFloat(cantidadVF)*parseFloat(precioVF)).toFixed(2);
    //Viaticos Peajes
    var cantidadP = verificar("cantidadP");
    var precioP   = verificar("precioP");
    document.getElementById("totalP").value=(parseFloat(cantidadP)*parseFloat(precioP)).toFixed(2);
    //Mantenimiento
    var cantidadM = verificar("cantidadM");
    var precioM   = verificar("precioM");
    document.getElementById("totalM").value=(parseFloat(cantidadM)*parseFloat(precioM)).toFixed(2);
    //Garage
    var cantidadG = verificar("cantidadG");
    var precioG   = verificar("precioG");
    document.getElementById("totalG").value=(parseFloat(cantidadG)*parseFloat(precioG)).toFixed(2);

    //Para el total en Bolivianos
    var totalT  = verificar("totalT");
    var totalC  = verificar("totalC");
    var totalVC = verificar("totalVC");
    var totalVP = verificar("totalVP");
    var totalVF = verificar("totalVF");
    var totalP  = verificar("totalP");
    var totalM  = verificar("totalM");
    var totalG  = verificar("totalG");
    //document.getElementById("totalT").value=parseFloat(totalT);
    document.getElementById("totalT").value=(parseFloat(totalC)+parseFloat(totalVC)+parseFloat(totalVP)+parseFloat(totalVF)+parseFloat(totalP)+parseFloat(totalM)+parseFloat(totalG)).toFixed(2);

    //Transporte publico
    var p1 = verificar("p1");
    var c1 = verificar("c1");
    document.getElementById("t1").value=(parseFloat(p1)*parseFloat(c1)).toFixed(2);

    var p2 = verificar("p2");
    var c2 = verificar("c2");
    document.getElementById("t2").value=(parseFloat(p2)*parseFloat(c2)).toFixed(2);

    var p3 = verificar("p3");
    var c3 = verificar("c3");
    document.getElementById("t3").value=(parseFloat(p3)*parseFloat(c3)).toFixed(2);

    var t1 = verificar("t1");
    var t2 = verificar("t2");
    var t3 = verificar("t3");
    document.getElementById("t4").value=(parseFloat(t1)+parseFloat(t2)+parseFloat(t3)).toFixed(2);

    //Diferencia
    var totalT = verificar("totalT");
    var t4     = verificar("t4");
    document.getElementById("diferencia").value=(parseFloat(totalT)-parseFloat(t4)).toFixed(2);

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