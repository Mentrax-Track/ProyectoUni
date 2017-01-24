@extends('automotores.admin')

@section('subtitulo','Incertar Destino')
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
            labels: {
                format: '{value}Viajes',
                style: {
                    color: Highcharts.getOptions().colors[2]
                }
            },
            title: {
                text: 'Temperature',
                style: {
                    color: Highcharts.getOptions().colors[2]
                }
            },
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
                format: '{value} dias',
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
            },
            labels: {
                format: '{value} viajes',
                style: {
                    color: Highcharts.getOptions().colors[1]
                }
            },
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
            data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4],
            tooltip: {
                valueSuffix: ' viajes'
            }

        }, {
            name: 'Año 2016',
            type: 'spline',
            yAxis: 2,
            data: [1016, 1016, 1015.9, 1015.5, 1012.3, 1009.5, 1009.6, 1010.2, 1013.1, 1016.9, 1018.2, 1016.7],
            marker: {
                enabled: false
            },
            dashStyle: 'shortdot',
            tooltip: {
                valueSuffix: ' viajes'
            }

        }, {
            name: 'Viajes',
            type: 'spline',
            data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6],
            tooltip: {
                valueSuffix: ' viajes'
            }
        }]
    });
});

</script>

@section('content')

<br /><br /><br />

        <div id="container" style="min-width: 400px; height: 400px; margin: 0 auto; background-color: blue " ></div>

<br /><br /><br /><br /><br /><br /><br /><br />
@endsection

@section('javascript')
{!! Html::script('js/highcharts.js') !!}
{!! Html::script('js/exporting.js') !!}
@stop