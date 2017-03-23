<?php use Infraestructura\Viaje; ?>
@extends('automotores.admin')

@section('subtitulo','Gráfica de viajes')
@section('css')
     {!! Html::style('css/demo.css') !!}
@stop
@section('javascript')
{!! Html::script('js/moment.min.js') !!}
{!! Html::script('js/jquery.min.js') !!}
<?php 

function getUltimoDiaMes($elAnio,$elMes) {
  return date("d", mktime(0,0,0, $elMes+1, 0, $elAnio));
}
 
//$año = intval(date("Y"));
//dd($año);
//$ultimoDia = getUltimoDiaMes($año,02);
//echo $ultimoDia."<br/>";
//echo getUltimoDiaMes(2017,03)."<br/>";

$año = intval(date("Y"));

// Obtener el año actual para cualquier mes
$dia1 = $año."-01-01";
$dia2 = $año."-02-01";
$dia3 = $año."-03-01";
$dia4 = $año."-04-01";
$dia5 = $año."-05-01";
$dia6 = $año."-06-01";
$dia7 = $año."-07-01";
$dia8 = $año."-08-01";
$dia9 = $año."-09-01";
$dia10 = $año."-10-01";
$dia11 = $año."-11-01";
$dia12 = $año."-12-01";

// Esto es para obtener el año con el mes y el ultimo dia
$ultimoDia = getUltimoDiaMes($año,1);
$fecha1 = $año."-01-".$ultimoDia;

$ultimoDia = getUltimoDiaMes($año,2);
$fecha2 = $año."-02-".$ultimoDia;

$ultimoDia = getUltimoDiaMes($año,3);
$fecha3 = $año."-03-".$ultimoDia;

$ultimoDia = getUltimoDiaMes($año,4);
$fecha4 = $año."-04-".$ultimoDia;

$ultimoDia = getUltimoDiaMes($año,5);
$fecha5 = $año."-05-".$ultimoDia;

$ultimoDia = getUltimoDiaMes($año,6);
$fecha6 = $año."-06-".$ultimoDia;

$ultimoDia = getUltimoDiaMes($año,7);
$fecha7 = $año."-07-".$ultimoDia;

$ultimoDia = getUltimoDiaMes($año,8);
$fecha8 = $año."-08-".$ultimoDia;

$ultimoDia = getUltimoDiaMes($año,9);
$fecha9 = $año."-09-".$ultimoDia;
//dd($fecha9);
$ultimoDia = getUltimoDiaMes($año,10);
$fecha10 = $año."-10-".$ultimoDia;

$ultimoDia = getUltimoDiaMes($año,11);
$fecha11 = $año."-11-".$ultimoDia;

$ultimoDia = getUltimoDiaMes($año,12);
$fecha12 = $año."-12-".$ultimoDia;





                    $enero = Viaje::whereBetween('fecha_inicial', [$dia1, $fecha1])->count();
                    $febre = Viaje::whereBetween('fecha_inicial', [$dia2, $fecha2])->count();
                    $marzo = Viaje::whereBetween('fecha_inicial', [$dia3, $fecha3])->count();
                    $abril = Viaje::whereBetween('fecha_inicial', [$dia4, $fecha4])->count(); 
                    $mayos = Viaje::whereBetween('fecha_inicial', [$dia5, $fecha5])->count();           
                    $junio = Viaje::whereBetween('fecha_inicial', [$dia6, $fecha6])->count();
                    $julio = Viaje::whereBetween('fecha_inicial', [$dia7, $fecha7])->count();
                    $agost = Viaje::whereBetween('fecha_inicial', [$dia8, $fecha8])->count();
                    $septi = Viaje::whereBetween('fecha_inicial', [$dia9, $fecha9])->count();
                    $octub = Viaje::whereBetween('fecha_inicial', [$dia10, $fecha10])->count(); 
                    $novie = Viaje::whereBetween('fecha_inicial', [$dia11, $fecha11])->count();           
                    $dicie = Viaje::whereBetween('fecha_inicial', [$dia12, $fecha12])->count();

                    $total = $enero+$febre+$marzo+$abril+$mayos+$junio+$julio+$agost+$septi+$octub+$novie+$dicie;

                    $arrayMeses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
                       'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
                    $arrayDias = array( 'Domingo', 'Lunes', 'Martes',
                           'Miercoles', 'Jueves', 'Viernes', 'Sabado');
                    $date = $arrayDias[date('w')].", ".date('d')." de ".$arrayMeses[date('m')-1]." de ".date('Y');

////********  Ahora aremos para el año anterior ******///////

$añoa = intval(date("Y"))-1;
//dd($añoanterior);
// Obtener el año actual para cualquier mes
$da1 = $añoa."-01-01";
$da2 = $añoa."-02-01";
$da3 = $añoa."-03-01";
$da4 = $añoa."-04-01";
$da5 = $añoa."-05-01";
$da6 = $añoa."-06-01";
$da7 = $añoa."-07-01";
$da8 = $añoa."-08-01";
$da9 = $añoa."-09-01";
$da10 = $añoa."-10-01";
$da11 = $añoa."-11-01";
$da12 = $añoa."-12-01";

// Esto es para obtener el año con el mes y el ultimo dia
$ultimoDia = getUltimoDiaMes($añoa,1);
$a1 = $añoa."-01-".$ultimoDia;

$ultimoDia = getUltimoDiaMes($añoa,2);
$a2 = $añoa."-02-".$ultimoDia;

$ultimoDia = getUltimoDiaMes($añoa,3);
$a3 = $añoa."-03-".$ultimoDia;

$ultimoDia = getUltimoDiaMes($añoa,4);
$a4 = $añoa."-04-".$ultimoDia;

$ultimoDia = getUltimoDiaMes($añoa,5);
$a5 = $añoa."-05-".$ultimoDia;

$ultimoDia = getUltimoDiaMes($añoa,6);
$a6 = $añoa."-06-".$ultimoDia;

$ultimoDia = getUltimoDiaMes($añoa,7);
$a7 = $añoa."-07-".$ultimoDia;

$ultimoDia = getUltimoDiaMes($añoa,8);
$a8 = $añoa."-08-".$ultimoDia;

$ultimoDia = getUltimoDiaMes($añoa,9);
$a9 = $añoa."-09-".$ultimoDia;
//dd($fecha9);
$ultimoDia = getUltimoDiaMes($añoa,10);
$a10 = $añoa."-10-".$ultimoDia;

$ultimoDia = getUltimoDiaMes($añoa,11);
$a11 = $añoa."-11-".$ultimoDia;

$ultimoDia = getUltimoDiaMes($añoa,12);
$a12 = $añoa."-12-".$ultimoDia;

//////////// Consulto en la BD del año anterior ///////////////
$eneroa = Viaje::whereBetween('fecha_inicial', [$da1, $a1])->count();
$febrea = Viaje::whereBetween('fecha_inicial', [$da2, $a2])->count();
$marzoa = Viaje::whereBetween('fecha_inicial', [$da3, $a3])->count();
$abrila = Viaje::whereBetween('fecha_inicial', [$da4, $a4])->count(); 
$mayosa = Viaje::whereBetween('fecha_inicial', [$da5, $a5])->count();           
$junioa = Viaje::whereBetween('fecha_inicial', [$da6, $a6])->count();
$julioa = Viaje::whereBetween('fecha_inicial', [$da7, $a7])->count();
$agosta = Viaje::whereBetween('fecha_inicial', [$da8, $a8])->count();
$septia = Viaje::whereBetween('fecha_inicial', [$da9, $a9])->count();
$octuba = Viaje::whereBetween('fecha_inicial', [$da10, $a10])->count(); 
$noviea = Viaje::whereBetween('fecha_inicial', [$da11, $a11])->count();           
$diciea = Viaje::whereBetween('fecha_inicial', [$da12, $a12])->count();

$totala = $eneroa+$febrea+$marzoa+$abrila+$mayosa+$junioa+$julioa+$agosta+$septia+$octuba+$noviea+$diciea;
?> 
                
 <script>
    var enero = parseInt('<?php echo $enero; ?>');
    var febrero = parseInt('<?php echo $febre; ?>');
    var marzo = parseInt('<?php echo $marzo; ?>');
    var abril = parseInt('<?php echo $abril; ?>');
    var mayo = parseInt('<?php echo $mayos; ?>');
    var junio = parseInt('<?php echo $junio; ?>');
    var julio = parseInt('<?php echo $julio; ?>');
    var agosto = parseInt('<?php echo $agost; ?>');
    var septiembre = parseInt('<?php echo $septi; ?>');
    var octubre = parseInt('<?php echo $octub; ?>');
    var noviembre = parseInt('<?php echo $novie; ?>');
    var diciembre = parseInt('<?php echo $dicie; ?>');
    var date = '<?php echo $date; ?>'
    //alert(enero);
    //AÑO ANTERIOR
    var eneroa = parseInt('<?php echo $eneroa; ?>');
    var febreroa = parseInt('<?php echo $febrea; ?>');
    var marzoa = parseInt('<?php echo $marzoa; ?>');
    var abrila = parseInt('<?php echo $abrila; ?>');
    var mayoa = parseInt('<?php echo $mayosa; ?>');
    var junioa = parseInt('<?php echo $junioa; ?>');
    var julioa = parseInt('<?php echo $julioa; ?>');
    var agostoa = parseInt('<?php echo $agosta; ?>');
    var septiembrea = parseInt('<?php echo $septia; ?>');
    var octubrea = parseInt('<?php echo $octuba; ?>');
    var noviembrea = parseInt('<?php echo $noviea; ?>');
    var diciembrea = parseInt('<?php echo $diciea; ?>');
 

    $(document).ready(function() {
    $('#container').highcharts({

        chart: {
            zoomType: 'xy'

        
        },
        title: {
            text: '<strong>REPORTE DE VIAJES</strong> <br />Sección Automotores'
        },
        subtitle: {
            text: date
        },
        xAxis: [{
            categories: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
                'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            crosshair: true
        }],
        yAxis: [{ // Primary yAxis
            
            opposite: true

        }, { // Secondary yAxis
            gridLineWidth: 0,
            title: {
                text: 'Cantidad',
                style: {
                    color: Highcharts.getOptions().colors[0]
                }
            },
            labels: {
                format: '{value} Viajes',
                style: {
                    color: Highcharts.getOptions().colors[0]
                }
            }

        }],
        tooltip: {
            shared: true
        },
        legend: {
            layout: 'vertical',
            align: 'left',
            x: 80,
            verticalAlign: 'top',
            y: 55,
            floating: true,
            backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
        },
        series: [{
            name: 'Viajes <?php echo  $año; ?> '+':'+' <?php echo $total; ?> T.',
            type: 'column',
            yAxis: 1,
            data: [enero,febrero,marzo,abril,mayo,junio,julio,agosto,septiembre,octubre,noviembre,diciembre],
            tooltip: {
                valueSuffix: ' viajes'
            }

        }, {
            name: 'Año <?php echo $añoa;?> '+':'+' <?php echo $totala; ?> T. ',
            type: 'spline',
            yAxis: 1,
            data: [eneroa,febreroa,marzoa,abrila,mayoa,junioa,julioa,agostoa,septiembrea,octubrea,noviembrea,diciembrea],
            tooltip: {
                valueSuffix: ' viajes'
            }
        }]
    });
});

</script>

@section('content')

<br /><br /><br />
<div class="panel panel-info">
  <div class="panel-heading text-center"><h4><p class="www">GRÁFICA DE VIAJES</p></h4></div>
   
            <li class="list-group-item list-group-item-success"> 
                <div id="container" style="min-width: 400px; height: 400px; margin: 0 auto; background-color: blue " ></div>
            </li>
   
  </div>

<br /><br /><br /><br /><br /><br /><br /><br />
@endsection

@section('javascript')
{!! Html::script('js/highcharts.js') !!}
{!! Html::script('js/exporting.js') !!}
@stop


