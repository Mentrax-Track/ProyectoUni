@extends('automotores.admin')
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
@section('subtitulo','Gráfica del uso del combustible')

@section('javascript')
{!! Html::script('js/jquery.min.js') !!}
@section('css')
{!! Html::style('css/demo.css') !!}
@stop
<script type="text/javascript">
 $(function () {
    $('#container').highcharts({
        title: {
            text: 'Gráfica del uso del combustible'
        },
        xAxis: {
            categories: ['1-6', '7-12', '13-18', '19-24', '24-31']
        },
        labels: {
            items: [{
                html: 'Uso total del combustible',
                style: {
                    left: '50px',
                    top: '18px',
                    color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'
                }
            }]
        },
        series: [{
            type: 'pie',
            name: 'Total consumption',
            data: [{
                name: 'Diesel',
                y: 13,
                color: Highcharts.getOptions().colors[0] // Jane's color
            }, {
                name: 'Gasolina',
                y: 23,
                color: Highcharts.getOptions().colors[1] // John's color
            }, {
                name: 'G.N.V.',
                y: 19,
                color: Highcharts.getOptions().colors[2] // Joe's color
            }],
            center: [100, 80],
            size: 100,
            showInLegend: false,
            dataLabels: {
                enabled: true
            }
        },{
            type: 'column',
            name: 'Litros Diesel ',
            data: [3, 2, 1, 3, 4]
        }, {
            type: 'column',
            name: 'Litros Gasolina  ',
            data: [2, 3, 5, 7, 6]
        }, {
            type: 'column',
            name: 'G.N.V.',
            data: [4, 3, 3, 9, 3]
        }, {
            type: 'spline',
            name: 'MES ANTERIOR',
            data: [3, 2.67, 3, 6.33, 3.33],
            marker: {
                lineWidth: 2,
                lineColor: Highcharts.getOptions().colors[3],
                fillColor: 'red'
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
  <div class="panel-heading text-center"><h4><p class="www">Reporte del combustible</p></h4></div>
    <div class="panel-body">
            <li class="list-group-item list-group-item-success"> 
                <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
            </li>
    </div>
  </div>

<br /><br /><br /><br /><br /><br /><br /><br />
@endsection