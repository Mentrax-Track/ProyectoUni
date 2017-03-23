@extends('automotores.admin')
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
@section('subtitulo','Gráfica del uso del combustible')

@section('javascript')
{!! Html::script('js/jquery.min.js') !!}
@section('css')
{!! Html::style('css/demo.css') !!}
@stop
<?php 
use Infraestructura\Hidrocarburo;

function getUltimoDiaMes($elAnio,$elMes) {
  return date("d", mktime(0,0,0, $elMes+1, 0, $elAnio));
}

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

//********  Esto es para GASOLINA ******/////
    $totalga = 0;
    $enef = Hidrocarburo::where('combustible','gasolina')->whereBetween('fecha', [$dia1, $fecha1])
                        ->get(['litros'])->lists('litros')->toArray();
    $gene = 0; 
    foreach ($enef as $key => $value) {
        $gene = $gene+$value;
    }
    $totalga = $totalga+$gene;
    $febf = Hidrocarburo::where('combustible','gasolina')->whereBetween('fecha', [$dia2, $fecha2])
                        ->get(['litros'])->lists('litros')->toArray();
    $gfeb = 0;
    foreach ($febf as $key => $value) {
        $gfeb = $gfeb+$value;
    }
    $totalga = $totalga+$gfeb;
    $marf = Hidrocarburo::where('combustible','gasolina')->whereBetween('fecha', [$dia3, $fecha3])
                        ->get(['litros'])->lists('litros')->toArray();
    $gmar = 0; 
    foreach ($marf as $key => $value) {
        $gmar = $gmar+$value;
    }
    $totalga = $totalga+$gmar;
    $abrf = Hidrocarburo::where('combustible','gasolina')->whereBetween('fecha', [$dia4, $fecha4])
                        ->get(['litros'])->lists('litros')->toArray();
    $gabr = 0; 
    foreach ($abrf as $key => $value) {
        $gabr = $gabr+$value;
    }
    $totalga = $totalga+$gabr;
    $mayf = Hidrocarburo::where('combustible','gasolina')->whereBetween('fecha', [$dia5, $fecha5])
                        ->get(['litros'])->lists('litros')->toArray();
    $gmay = 0; 
    foreach ($mayf as $key => $value) {
        $gmay = $gmay+$value;
    }
    $totalga = $totalga+$gmay;
    $junf = Hidrocarburo::where('combustible','gasolina')->whereBetween('fecha', [$dia6, $fecha6])
                        ->get(['litros'])->lists('litros')->toArray();
    $gjun = 0; 
    foreach ($junf as $key => $value) {
        $gjun = $gjun+$value;
    }
    $totalga = $totalga+$gjun;
    $julf = Hidrocarburo::where('combustible','gasolina')->whereBetween('fecha', [$dia7, $fecha7])
                        ->get(['litros'])->lists('litros')->toArray();
    $gjul = 0; 
    foreach ($julf as $key => $value) {
        $gjul = $gjul+$value;
    }
    $totalga = $totalga+$gjul;
    $agof = Hidrocarburo::where('combustible','gasolina')->whereBetween('fecha', [$dia8, $fecha8])
                        ->get(['litros'])->lists('litros')->toArray();
    $gago = 0; 
    foreach ($agof as $key => $value) {
        $gago = $gago+$value;
    }
    $totalga = $totalga+$gago;
    $sepf = Hidrocarburo::where('combustible','gasolina')->whereBetween('fecha', [$dia9, $fecha9])
                        ->get(['litros'])->lists('litros')->toArray();
    $gsep = 0; 
    foreach ($sepf as $key => $value) {
        $gsep = $gsep+$value;
    }
    $totalga = $totalga+$gsep;
    $octf = Hidrocarburo::where('combustible','gasolina')->whereBetween('fecha', [$dia10, $fecha10])
                        ->get(['litros'])->lists('litros')->toArray();
    $goct = 0; 
    foreach ($octf as $key => $value) {
        $goct = $goct+$value;
    }
    $totalga = $totalga+$goct;
    $novf = Hidrocarburo::where('combustible','gasolina')->whereBetween('fecha', [$dia11, $fecha11])
                        ->get(['litros'])->lists('litros')->toArray();
    $gnov = 0; 
    foreach ($novf as $key => $value) {
        $gnov = $gnov+$value;
    }
    $totalga = $totalga+$gnov;
    $dicf = Hidrocarburo::where('combustible','gasolina')->whereBetween('fecha', [$dia12, $fecha12])
                        ->get(['litros'])->lists('litros')->toArray();
    $gdic = 0; 
    foreach ($dicf as $key => $value) {
        $gdic = $gdic+$value;
    }
    $totalga = $totalga+$gdic;
//********  Esto es para DIESEL ******/////
    $totaldi = 0;
    $enedf = Hidrocarburo::where('combustible','diesel')->whereBetween('fecha', [$dia1, $fecha1])
                        ->get(['litros'])->lists('litros')->toArray();
    $dene = 0;
    foreach ($enedf as $key => $value) {
        $dene = $dene+$value;
    }
    $totaldi = $totaldi+$dene;
    $febdf = Hidrocarburo::where('combustible','diesel')->whereBetween('fecha', [$dia2, $fecha2])
                        ->get(['litros'])->lists('litros')->toArray();
    $dfeb = 0;
    foreach ($febdf as $key => $value) {
         $dfeb =  $dfeb+$value;
    }
    $totaldi = $totaldi+$dfeb;
    $mardf = Hidrocarburo::where('combustible','diesel')->whereBetween('fecha', [$dia3, $fecha3])
                        ->get(['litros'])->lists('litros')->toArray();
    $dmar = 0;
    foreach ($mardf as $key => $value) {
        $dmar = $dmar+$value;
    }
    $totaldi = $totaldi+$dmar;
    $abrdf = Hidrocarburo::where('combustible','diesel')->whereBetween('fecha', [$dia4, $fecha4])
                        ->get(['litros'])->lists('litros')->toArray();
    $dabr = 0;
    foreach ($abrdf as $key => $value) {
        $dabr = $dabr+$value;
    }
    $totaldi = $totaldi+$dabr;
    $maydf = Hidrocarburo::where('combustible','diesel')->whereBetween('fecha', [$dia5, $fecha5])
                        ->get(['litros'])->lists('litros')->toArray();
    $dmay = 0;
    foreach ($maydf as $key => $value) {
        $dmay = $dmay+$value;
    }
     $totaldi = $totaldi+$dmay;
    $jundf = Hidrocarburo::where('combustible','diesel')->whereBetween('fecha', [$dia6, $fecha6])
                        ->get(['litros'])->lists('litros')->toArray();
    $djun = 0;
    foreach ($jundf as $key => $value) {
        $djun = $djun+$value;
    }
     $totaldi = $totaldi+$djun;
    $juldf = Hidrocarburo::where('combustible','diesel')->whereBetween('fecha', [$dia7, $fecha7])
                        ->get(['litros'])->lists('litros')->toArray();
    $djul = 0;
    foreach ($juldf as $key => $value) {
        $djul = $djul+$value;
    }
     $totaldi = $totaldi+$djul;
    $agodf = Hidrocarburo::where('combustible','diesel')->whereBetween('fecha', [$dia8, $fecha8])
                        ->get(['litros'])->lists('litros')->toArray();
    $dago = 0;
    foreach ($agodf as $key => $value) {
        $dago = $dago+$value;
    }
     $totaldi = $totaldi+$dago;
    $sepdf = Hidrocarburo::where('combustible','diesel')->whereBetween('fecha', [$dia9, $fecha9])
                        ->get(['litros'])->lists('litros')->toArray();
    $dsep = 0;
    foreach ($sepdf as $key => $value) {
        $dsep = $dsep+$value;
    }
     $totaldi = $totaldi+$dsep;
    $octdf = Hidrocarburo::where('combustible','diesel')->whereBetween('fecha', [$dia10, $fecha10])
                        ->get(['litros'])->lists('litros')->toArray();
    $doct = 0;
    foreach ($octdf as $key => $value) {
        $doct = $doct+$value;
    }
     $totaldi = $totaldi+$doct;
    $novdf = Hidrocarburo::where('combustible','diesel')->whereBetween('fecha', [$dia11, $fecha11])
                        ->get(['litros'])->lists('litros')->toArray();
    $dnov = 0;
    foreach ($novdf as $key => $value) {
        $dnov = $dnov+$value;
    }
     $totaldi = $totaldi+$dnov;
    $dicdf = Hidrocarburo::where('combustible','diesel')->whereBetween('fecha', [$dia12, $fecha12])
                        ->get(['litros'])->lists('litros')->toArray();
    $ddic = 0;
    foreach ($dicdf as $key => $value) {
        $ddic = $ddic+$value;
    }
    $totaldi = $totaldi+$ddic;
//********  Esto es para GNV ******/////
    $totalgn = 0;
    $enegf = Hidrocarburo::where('combustible','gnv')->whereBetween('fecha', [$dia1, $fecha1])
                        ->get(['litros'])->lists('litros')->toArray();
    $gnene = 0;
    foreach ($enegf as $key => $value) {
        $gnene = $gnene+$value;
    }
    $totalgn = $totalgn+$gnene;
    $febgf = Hidrocarburo::where('combustible','gnv')->whereBetween('fecha', [$dia2, $fecha2])
                        ->get(['litros'])->lists('litros')->toArray();
    $gnfeb = 0;
    foreach ($febgf as $key => $value) {
        $gnfeb = $gnfeb+$value;
    }
    $totalgn = $totalgn+$gnfeb;
    $margf = Hidrocarburo::where('combustible','gnv')->whereBetween('fecha', [$dia3, $fecha3])
                        ->get(['litros'])->lists('litros')->toArray();
    $gnmar = 0;
    foreach ($margf as $key => $value) {
        $gnmar = $gnmar+$value;
    }
    $totalgn = $totalgn+$gnmar;
    $abrgf = Hidrocarburo::where('combustible','gnv')->whereBetween('fecha', [$dia4, $fecha4])
                        ->get(['litros'])->lists('litros')->toArray();
    $gnabr = 0;
    foreach ($abrgf as $key => $value) {
        $gnabr = $gnabr+$value;
    }
    $totalgn = $totalgn+$gnabr;
    $maygf = Hidrocarburo::where('combustible','gnv')->whereBetween('fecha', [$dia5, $fecha5])
                        ->get(['litros'])->lists('litros')->toArray();
    $gnmay = 0;
    foreach ($maygf as $key => $value) {
        $gnmay = $gnmay+$value;
    }
    $totalgn = $totalgn+$gnmay;
    $jungf = Hidrocarburo::where('combustible','gnv')->whereBetween('fecha', [$dia6, $fecha6])
                        ->get(['litros'])->lists('litros')->toArray();
    $gnjun = 0;
    foreach ($jungf as $key => $value) {
        $gnjun = $gnjun+$value;
    }
    $totalgn = $totalgn+$gnjun;
    $julgf = Hidrocarburo::where('combustible','gnv')->whereBetween('fecha', [$dia7, $fecha7])
                        ->get(['litros'])->lists('litros')->toArray();
    $gnjul = 0;
    foreach ($julgf as $key => $value) {
        $gnjul = $gnjul+$value;
    }
    $totalgn = $totalgn+$gnjul;
    $agogf = Hidrocarburo::where('combustible','gnv')->whereBetween('fecha', [$dia8, $fecha8])
                        ->get(['litros'])->lists('litros')->toArray();
    $gnago = 0;
    foreach ($agogf as $key => $value) {
        $gnago = $gnago+$value;
    }
    $totalgn = $totalgn+$gnago;
    $sepgf = Hidrocarburo::where('combustible','gnv')->whereBetween('fecha', [$dia9, $fecha9])
                        ->get(['litros'])->lists('litros')->toArray();
    $gnsep = 0;
    foreach ($sepgf as $key => $value) {
        $gnsep = $gnsep+$value;
    }
    $totalgn = $totalgn+$gnsep;
    $octgf = Hidrocarburo::where('combustible','gnv')->whereBetween('fecha', [$dia10, $fecha10])
                        ->get(['litros'])->lists('litros')->toArray();
    $gnoct = 0;
    foreach ($octgf as $key => $value) {
        $gnoct = $gnoct+$value;
    }
    $totalgn = $totalgn+$gnoct;
    $novgf = Hidrocarburo::where('combustible','gnv')->whereBetween('fecha', [$dia11, $fecha11])
                        ->get(['litros'])->lists('litros')->toArray();
    $gnnov = 0;
    foreach ($novgf as $key => $value) {
        $gnnov = $gnnov+$value;
    }
    $totalgn = $totalgn+$gnnov;
    $dicgf = Hidrocarburo::where('combustible','gnv')->whereBetween('fecha', [$dia12, $fecha12])
                        ->get(['litros'])->lists('litros')->toArray();
    $gndic = 0;
    foreach ($dicgf as $key => $value) {
        $gndic = $gndic+$value;
    }
    $totalgn = $totalgn+$gndic;


    $arrayMeses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
       'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
    $arrayDias = array( 'Domingo', 'Lunes', 'Martes',
           'Miercoles', 'Jueves', 'Viernes', 'Sabado');
    $date = $arrayDias[date('w')].", ".date('d')." de ".$arrayMeses[date('m')-1]." de ".date('Y');   



 ?>
<script type="text/javascript">
    var genero = parseInt('<?php echo $gene; ?>');
    var gfebrero = parseInt('<?php echo $gfeb; ?>');
    var gmarzo = parseInt('<?php echo $gmar; ?>');
    var gabril = parseInt('<?php echo $gabr; ?>');
    var gmayo = parseInt('<?php echo $gmay; ?>');
    var gjunio = parseInt('<?php echo $gjun; ?>');
    var gjulio = parseInt('<?php echo $gjul; ?>');
    var gagosto = parseInt('<?php echo $gago; ?>');
    var gseptiembre = parseInt('<?php echo $gsep; ?>');
    var goctubre = parseInt('<?php echo $goct; ?>');
    var gnoviembre = parseInt('<?php echo $gnov; ?>');
    var gdiciembre = parseInt('<?php echo $gdic; ?>');
    var date = '<?php echo $date; ?>';

    var denero = parseInt('<?php echo $dene; ?>');
    var dfebrero = parseInt('<?php echo $dfeb; ?>');
    var dmarzo = parseInt('<?php echo $dmar; ?>');
    var dabril = parseInt('<?php echo $dabr; ?>');
    var dmayo = parseInt('<?php echo $dmay; ?>');
    var djunio = parseInt('<?php echo $djun; ?>');
    var djulio = parseInt('<?php echo $djul; ?>');
    var dagosto = parseInt('<?php echo $dago; ?>');
    var dseptiembre = parseInt('<?php echo $dsep; ?>');
    var doctubre = parseInt('<?php echo $doct; ?>');
    var dnoviembre = parseInt('<?php echo $dnov; ?>');
    var ddiciembre = parseInt('<?php echo $ddic; ?>');

    var gnenero = parseInt('<?php echo $gnene; ?>');
    var gnfebrero = parseInt('<?php echo $gnfeb; ?>');
    var gnmarzo = parseInt('<?php echo $gnmar; ?>');
    var gnabril = parseInt('<?php echo $gnabr; ?>');
    var gnmayo = parseInt('<?php echo $gnmay; ?>');
    var gnjunio = parseInt('<?php echo $gnjun; ?>');
    var gnjulio = parseInt('<?php echo $gnjul; ?>');
    var gnagosto = parseInt('<?php echo $gnago; ?>');
    var gnseptiembre = parseInt('<?php echo $gnsep; ?>');
    var gnoctubre = parseInt('<?php echo $gnoct; ?>');
    var gnnoviembre = parseInt('<?php echo $gnnov; ?>');
    var gndiciembre = parseInt('<?php echo $gndic; ?>');

    var totalga = parseInt('<?php echo $totalga; ?>');
    var totaldi = parseInt('<?php echo $totaldi; ?>');
    var totalgn = parseInt('<?php echo $totalgn; ?>');

 $(document).ready(function() {
    $('#container').highcharts({
        chart: {
            zoomType: 'xy'

        
        },
        title: {
            text: '<strong>REPORTE DE COMBUSTIBLE<strong> <br /> Sección Automotores'
        },
        subtitle: {
            text: date
        },
        xAxis: [{
            categories: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
                'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            crosshair: true
        }],
        tooltip: {
            shared: true
        },
        labels: {
            items: [{
                html: 'Consumo total (ANUAL)',
                style: {
                    left: '20px',
                    top: '-15px',
                    color: (Highcharts.theme && Highcharts.theme.textColor) || 'blue'
                }
            }]
        },
        series: [{
            type: 'column',
            name: 'Gasolina',
            data: [genero,gfebrero,gmarzo,gabril,gmayo,gjunio,gjulio,gagosto,gseptiembre,goctubre,gnoviembre,gdiciembre]
        }, {
            type: 'column',
            name: 'Diesel',
            data: [denero,dfebrero,dmarzo,dabril,dmayo,djunio,djulio,dagosto,dseptiembre,doctubre,dnoviembre,ddiciembre]
        },{
            type: 'column',
            name: 'Gnv',
            data: [gnenero,gnfebrero,gnmarzo,gnabril,gnmayo,gnjunio,gnjulio,gnagosto,gnseptiembre,gnoctubre,gnnoviembre,gndiciembre]
        }, {
            type: 'pie',
            name: 'Total consumption',
            data: [{
                name: 'Gasolina <?php echo $totalga; ?> L.',
                y: totalga,
                color: Highcharts.getOptions().colors[0] // Jane's color
            }, {
                name: 'Diesel <?php echo $totaldi; ?> L. ',
                y: totaldi,
                color: Highcharts.getOptions().colors[1] // John's color
            }, {
                name: 'Gnv <?php echo $totalgn; ?> m³',
                y: totalgn,
                color: Highcharts.getOptions().colors[2] // Joe's color
            }],
            center: [50, 20],
            size: 50,
            showInLegend: false,
            dataLabels: {
                enabled: true
            }
        }]
    });
});

</script>



@section('javascript')
{!! Html::script('js/highcharts.js') !!}
{!! Html::script('js/exporting.js') !!}
@stop
@section('content')

<br /><br /><br />
<div class="panel panel-info">
  <div class="panel-heading text-center"><h4><p class="www">Gráfica del uso del combustible</p></h4></div>
   
            <li class="list-group-item list-group-item-success"> 
                <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
            </li>
 
  </div>

<br /><br /><br /><br /><br />
@endsection