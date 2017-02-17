<?php use Infraestructura\User; use Infraestructura\Combustible; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Combustibles</title>
  {!! Html::style('css/pdf/bien.css') !!}
</head>
<body>
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
            </div><!-- /.box-header -->
                <div id="client">
                    <header class="clearfix">
                      <div id="logo">
                        <center><img style="float:center;" src="img/uatf.jpg" width="70px"></center>
                      </div>
                      <h3><center><strong>UNIVERSIDAD AUTÓNOMA TOMÁS FRÍAS <br />DEPARTAMENTO DE INFRAESTRUCTURA <br /> SECCIÓN AUTOMOTORES </strong></center></h3>
                      <h4><center><strong>INFORME DE LOS COMBUSTIBLES</strong></center></h4>
                      <h4><center><strong>{{$date}} </strong></center></h4>
                    </header>
                </div>
                <div class="box-body">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Nro.</th>
                            <th>Vehículo</th>
                            <th>Gasolina</th>
                            <th>Precio</th>
                            <th>Total</th>
                            <th>Diesel</th>
                            <th>Precio</th>
                            <th>Total</th>
                            <th>GNV</th>
                            <th>Precio</th>
                            <th>Total</th>
                            <th>Fecha</th>
                          </tr>
                        </thead>
                        <tbody><?php $i = 1; ?>
                        @foreach($detalleAhora as $key => $dea)
                            <tbody>
                                <tr>
                                    <td  class="info text-center"><center>{{ $i++ }} </center></td>
                                    <td>{{ $dea->enviarVehiculo->full_vehiculo }}</td>
                                    <td><center>{{ $dea->gasolina }}</center></td>
                                    <td><center>{{ $dea->prega }}</center></td>
                                    <td><center>{{ $dea->toga }}</center></td>
                                    <td><center>{{ $dea->diesel }}</center></td>
                                    <td><center>{{ $dea->predi }}</center></td>
                                    <td><center>{{ $dea->todi }}</center></td>
                                    <td><center>{{ $dea->gnv }}</center></td>
                                    <td><center>{{ $dea->pregn }}</center></td>
                                    <td><center>{{ $dea->togn }}</center></td>
                                    <td><center>{{ $dea->fecha }}</center></td>
                                    
                                </tr>
                            </tbody>
                        @endforeach

                            <?php $ga1 = 0; $toga1 = 0; ?>
                            @foreach($detalleAhora as $key => $value)
                                <?php $ga1 = $ga1+$value->gasolina; 
                                      $toga1 = $toga1+$value->toga;?> 
                            @endforeach
                            <?php $di1 = 0; $todi1 = 0; ?>
                            @foreach($detalleAhora as $key => $value)
                                <?php $di1 = $di1+$value->diesel; 
                                      $todi1 = $todi1+$value->todi; ?> 
                            @endforeach
                            <?php $gnv1 = 0; $togn1 = 0; ?>
                            @foreach($detalleAhora as $key => $value)
                                <?php $gnv1 = $gnv1+$value->gnv; 
                                      $togn1 = $togn1+$value->togn; ?> 
                            @endforeach

                        @foreach($detalle as $key => $de)
                            <tbody>
                                <tr>
                                    <td  class="info text-center"><center>{{ $i++ }}</center></td>
                                    <td>{{ $de->enviarVehiculo->full_vehiculo }}</td>
                                    <td><center>{{ $de->gasolina }}</center></td>
                                    <td><center>{{ $de->prega }}</center></td>
                                    <td><center>{{ $de->toga }}</center></td>
                                    <td><center>{{ $de->diesel }}</center></td>
                                    <td><center>{{ $de->predi }}</center></td>
                                    <td><center>{{ $de->todi }}</center></td>
                                    <td><center>{{ $de->gnv }}</center></td>
                                    <td><center>{{ $de->pregn }}</center></td>
                                    <td><center>{{ $de->togn }}</center></td>
                                    <td><center>{{ $de->fecha }}</center></td>
                                    
                                </tr>
                            </tbody>
                        @endforeach
                        
                        <?php $ga2 = 0; $toga2 = 0; ?>
                        @foreach($detalle as $key => $value)
                            <?php $ga2 = $ga2+$value->gasolina; 
                                  $toga2 = $toga2+$value->toga; ?> 
                        @endforeach
                        <?php $di2 = 0; $todi2 = 0; ?>
                        @foreach($detalle as $key => $value)
                            <?php $di2 = $di2+$value->diesel; 
                                  $todi2 = $todi2+$value->todi; ?> 
                        @endforeach
                        <?php $gnv2 = 0; $togn2 = 0;?>
                        @foreach($detalle as $key => $value)
                            <?php $gnv2 = $gnv2+$value->gnv; 
                                  $togn2 = $togn2+$value->togn; ?> 
                        @endforeach


                    <tr>
                         <td colspan="2" rowspan="3"><center><strong>Total:</strong></center></td>
                          
                         <td colspan="1" rowspan="3"><center><strong>{{$ga1+$ga2}} Litros.</strong></center></td>
                         <td colspan="1" rowspan="3"><center><strong>Total:</strong></center></td>
                         <td colspan="1" rowspan="3"><center><strong>{{ $toga1+$toga2 }} </strong>Litros</center></td>
                          
                         <td colspan="1" rowspan="3"><center><strong>{{$di1+$di2}} Litros.</strong></center></td>
                         <td colspan="1" rowspan="3"><center><strong>Total:</strong></center></td>
                         <td colspan="1" rowspan="3"><center><strong>{{ $todi1+$todi2 }} </strong>Litros</center></td>
                          
                         <td colspan="1" rowspan="3"><center><strong>{{$gnv1+$gnv2}} m³.</strong></center></td>
                         <td colspan="1" rowspan="3"><center><strong>Total:</strong></center></td>
                         <td colspan="1" rowspan="3"><center><strong>{{ $togn1+$togn2 }} </strong>m³.</center></td>
                    </tr>
                        
                  </tbody>

                  </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  
                </div>
              
                
            </div><!-- /.box --><br><br>
            <center>Sr. {{ $responsable }}<br />ENCARGADO DE AUTOMOTORES </center>
              
            </div>
            <footer>
      Sistema Web Departamento de Infraestructura U.A.T.F.
    </footer>
</body>
</html>





