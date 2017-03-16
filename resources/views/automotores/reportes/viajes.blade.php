@extends('automotores.admin')

@section('subtitulo','Gráfica de viajes')
@section('css')
     {!! Html::style('css/demo.css') !!}
@stop
@section('javascript')
{!! Html::script('js/moment.min.js') !!}
{!! Html::script('js/jquery.min.js') !!}

 <script>
    $(document).ready(function() {
    $('#container').highcharts({
        chart: {
            zoomType: 'xy'

        
        },
        title: {
            text: 'Gráfica de viajes en un año'
        },
        subtitle: {
            text: 'Sección Automotores'
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

        }, { // Tertiary yAxis
            gridLineWidth: 0,
            title: {
                text: 'Año 2016',
                style: {
                    color: Highcharts.getOptions().colors[1]
                }
            }
            ,
            opposite: true
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
            name: 'Viajes',
            type: 'column',
            yAxis: 1,
            data: [20, 30, 20, 25, 30, 40,20,21, 22,15,10, 12],
            tooltip: {
                valueSuffix: ' viajes'
            }

        }, {
            name: 'Año anterior',
            type: 'spline',
            data: [10,20,25,30,35,15,12,16,11,8,5,20],
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
  <div class="panel-heading text-center"><h4><p class="www">Reporte de Viajes</p></h4></div>
    <div class="panel-body">
            <li class="list-group-item list-group-item-success"> 
                <div id="container" style="min-width: 400px; height: 400px; margin: 0 auto; background-color: blue " ></div>
            </li>
    </div>
  </div>

<br /><br /><br /><br /><br /><br /><br /><br />
@endsection

@section('javascript')
{!! Html::script('js/highcharts.js') !!}
{!! Html::script('js/exporting.js') !!}
@stop