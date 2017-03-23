<?php use Infraestructura\Viaje; ?><br>
<div class="panel panel-info">
  <div class="panel-heading text-center"><h4><p class="www">Tablero de Control</p></h4></div>
    <div class="panel-body">
            <li class="list-group-item list-group-item-success"> 
            <div class="row">
   

<script type="text/javascript" src="js/jquerys.min.js"></script>
@section('css')
{!! Html::style('css/demo.css') !!}
@stop


<script type="text/javascript">
   
$(document).ready(function() {
    /**
     * Get the current time
     */
    function getNow() {
        var now = new Date();

        return {
            hours: now.getHours() + now.getMinutes() / 60,
            minutes: now.getMinutes() * 12 / 60 + now.getSeconds() * 12 / 3600,
            seconds: now.getSeconds() * 12 / 60
        };
    }

    /**
     * Pad numbers
     */
    function pad(number, length) {
        // Create an array of the remaining length + 1 and join it with 0's
        return new Array((length || 2) + 1 - String(number).length).join(0) + number;
    }

    var now = getNow();

    // Create the chart
    $('#container').highcharts({

        chart: {
            type: 'gauge',
            plotBackgroundColor: '#3c6676',
            plotBackgroundImage: null,
            plotBorderWidth: -25,
            plotShadow: true,
            height: 200
        },

        credits: {
            enabled: false
        },

        title: {
            text: '<p style="color: red"><strong>DEP. DE INFRAESTRUCTURA</strong></p>  ',
            style: {
                    left: '20px',
                    top: '-15px',
                    color: (Highcharts.theme && Highcharts.theme.textColor) || '#3c7648'
                } 
        },

        pane: {
            background: [{
                // default background
            }, {
                // reflex for supported browsers
                backgroundColor: Highcharts.svg ? {
                    radialGradient: {
                        cx: 0.5,
                        cy: -0.4,
                        r: 1.9
                    },
                    stops: [
                        [0.5, 'rgba(255, 255, 255, 0.2)'],
                        [0.5, 'rgba(200, 200, 200, 0.2)']
                    ]
                } : null
            }]
        },

        yAxis: {
            labels: {
                distance: -20
            },
            min: 0,
            max: 12,
            lineWidth: 0,
            showFirstLabel: false,

            minorTickInterval: 'auto',
            minorTickWidth: 1,
            minorTickLength: 5,
            minorTickPosition: 'inside',
            minorGridLineWidth: 0,
            minorTickColor: '#666',

            tickInterval: 1,
            tickWidth: 2,
            tickPosition: 'inside',
            tickLength: 10,
            tickColor: '#666',
            title: {
                text: 'U.A.T.F.<br/>INFRAESTRUCTURA',
                style: {
                    color: '#3c763d',
                    fontWeight: 'normal',
                    fontSize: '8px',
                    lineHeight: '10px'
                },
                y: 10
            }
        },

        tooltip: {
            formatter: function () {
                return this.series.chart.tooltipText;
            }
        },

        series: [{
            data: [{
                id: 'hour',
                y: now.hours,
                dial: {
                    radius: '60%',
                    baseWidth: 4,
                    baseLength: '95%',
                    rearLength: 0
                }
            }, {
                id: 'minute',
                y: now.minutes,
                dial: {
                    baseLength: '95%',
                    rearLength: 0
                }
            }, {
                id: 'second',
                y: now.seconds,
                dial: {
                    radius: '100%',
                    baseWidth: 1,
                    rearLength: '20%'
                }
            }],
            animation: false,
            dataLabels: {
                enabled: false
            }
        }]
    },

        // Move
        function (chart) {
            setInterval(function () {

                now = getNow();

                var hour = chart.get('hour'),
                    minute = chart.get('minute'),
                    second = chart.get('second'),
                    // run animation unless we're wrapping around from 59 to 0
                    animation = now.seconds === 0 ?
                            false :
                            {
                                easing: 'easeOutElastic'
                            };

                // Cache the tooltip text
                chart.tooltipText =
                    pad(Math.floor(now.hours), 2) + ':' +
                    pad(Math.floor(now.minutes * 5), 2) + ':' +
                    pad(now.seconds * 5, 2);

                hour.update(now.hours, true, animation);
                minute.update(now.minutes, true, animation);
                second.update(now.seconds, true, animation);

            }, 1000);

        });
});

// Extend jQuery with some easing (copied from jQuery UI)
$.extend($.easing, {
    easeOutElastic: function (x, t, b, c, d) {
        var s=1.70158;var p=0;var a=c;
        if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
        if (a < Math.abs(c)) { a=c; var s=p/4; }
        else var s = p/(2*Math.PI) * Math.asin (c/a);
        return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
    }
});
</script>



@section('javascript')
{!! Html::script('js/highcharts.js') !!}
{!! Html::script('js/highcharts-more.js') !!}
@stop


                <div class="col-lg-2 col-md-6">
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-calendar fa-5x"></i>
                                </div>
                                        

                                <div class="col-xs-6 ">
                                  
                                    <div id="container"   ></div>
                                   
                                </div>
                                <div class="col-xs-3 text-right">
                                    <div class="huge"><i class="fa fa-clock-o fa-1x"></i></div>
                                    <div>Calendario</div>
                                </div>
                            </div>
                        </div>
                        <a href="{!! URL::to('/calendario') !!}">
                            <div class="panel-footer">

                                <span class=" text-center"><center><strong><i class="fa fa-calendar-check-o"></i> IR AL CALENDARIO</strong></center></span>
                                
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
    
    
    

                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <?php $fecha = new DateTime();
                                      $fecha->modify('first day of this month');
                                        $diauno = $fecha->format('d/m/Y'); 

                                      $fecha = new DateTime();
                                      $fecha->modify('last day of this month');
                                        $diaultimo  = $fecha->format('d/m/Y');
                                    
                                    $cuantosMes = Viaje::whereBetween('fecha_inicial', [$diauno, $diaultimo])->count();

                                    //dd($cuantosMes);
                                ?>
                                <div class="col-xs-3">
                                    <i class="fa fa-suitcase fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{ $cuantosMes }}</div>
                                    <div>Viajes del Mes!</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ action('TableroController@getVmes') }}">
                            <div class="panel-footer">
                                <span class="pull-left">Ver lista</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <?php $numviajes = \DB::table('viajes')->where('estado','activo')->count(); ?>
                                <div class="col-xs-3">
                                    <i class="fa fa-globe fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{ $numviajes }}</div>
                                    <div>Viajes Realizados!</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ action('TableroController@getRealizados') }}">
                            <div class="panel-footer">
                                <span class="pull-left">Ver lista</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                            <?php $numreservas = \DB::table('reservas')->count(); ?>
                                <div class="col-xs-3">
                                    <i class="fa fa-address-card fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{ $numreservas }}</div>
                                    <div>Viajes Reservados!</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ action('TableroController@getReservas')}}">
                            <div class="panel-footer">
                                <span class="pull-left">Ver lista</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-warning">
                        <div class="panel-heading ">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="glyphicon glyphicon-oil fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><i class="fa fa-tachometer fa-1x"></i></div>
                                    <div>Combustible</div>
                                </div>
                            </div>
                        </div>
                        <a href="{!! URL::to('/combustibleReportes') !!}">
                            <div class="panel-footer">
                                <span class="pull-left">Gráfica</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-danger">
                        <div class="panel-heading ">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-envelope fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><i class="fa fa-envelope-o fa-1x"></i></div>
                                    <div>Envia Mensajes!</div>
                                </div>
                            </div>
                        </div>
                        <a href="{!! URL::to('/mail') !!}">
                            <div class="panel-footer">
                                <span class="pull-left">Enviar....</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-info">
                        <div class="panel-heading ">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-bar-chart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><i class="fa fa-pie-chart fa-1x"></i></div>
                                    <div>Gráficas</div>
                                </div>
                            </div>
                        </div>
                        <a href="{!! URL::to('/reportes') !!}">
                            <div class="panel-footer">
                                <span class="pull-left">Visualizar</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            </li>
        
    </div>
</div>
