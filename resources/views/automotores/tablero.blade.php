<?php use Infraestructura\Viaje; ?><br>
<div class="panel panel-default">
  <div class="panel-heading text-center"><h4><p class="www">Tablero de Control</p></h4></div>
    <div class="panel-body">
            <div class="jumbotron">    
            <div class="row">
                <center><h4><p class="www">Viajes</p></h4></center>
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
                                <?php $numviajes = \DB::table('viajes')->count(); ?>
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
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-red">
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
            </div>
            </div>
        
    </div>
</div>
