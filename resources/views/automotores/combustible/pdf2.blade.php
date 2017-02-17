<?php use Infraestructura\User; use Infraestructura\Combustible; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Combustibles</title>
  {!! Html::style('css/pdf/biencombus.css') !!}
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
                      <h4><center><strong>RECARGA DE COMBUSTIBLES</strong></center></h4>
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
                            <th>Chofer</th>
                            <th>Firma</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($detalleAhora as $key => $dea)
                                <tbody>
                                    <tr>
                                        <td  class="info text-center"><center>{{ ++$key }} </center></td>
                                        <td>{{ $dea->enviarVehiculo->full_vehiculo }}</td>
                                        <td><center>{{ $dea->gasolina }}</center></td>
                                        <td><center>{{ $dea->prega }}</center></td>
                                        <td><center>{{ $dea->toga }}</center></td>
                                        <td><center>{{ $dea->diesel }}</center></td>
                                        <td><center>{{ $dea->predi }}</center></td>
                                        <td><center>{{ $dea->todi }}</center></td>
                                        <td><center>{{ $dea->gnv }} </center></td>
                                        <td><center>{{ $dea->pregn }}</center></td>
                                        <td><center>{{ $dea->togn }}</center></td>
                                        <td><center>{{ $dea->fecha }} </center></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            @endforeach                    
                        </tbody> 
                       <tr>
                         <td colspan="2" rowspan="3"><center><strong>Total:</strong></center></td>
                          <?php $ga=0; $ga1=0; ?>
                            @foreach($detalleAhora as $key => $value)
                                <?php $ga = $ga+$value->gasolina; 
                                      $ga1= $ga1+$value->toga;
                                ?> 
                            @endforeach
                         <td colspan="1" rowspan="3"><center><strong>{{$ga}} Litros.</strong></center></td>
                         
                         <td colspan="1" rowspan="3"><center><strong>Total:</strong></center></td>
                         <td colspan="1" rowspan="3"><center><strong>{{ $ga1 }} </strong>Bs.</center></td>

                          <?php $di=0; $di1=0; ?>
                            @foreach($detalleAhora as $key => $value)
                                <?php $di = $di+$value->diesel; 
                                      $di1= $di1+$value->todi;
                                ?> 
                            @endforeach
                         <td colspan="1" rowspan="3"><center><strong>{{$di}} Litros.</strong></center></td>
                         <td colspan="1" rowspan="3"><center><strong>Total:</strong></center></td>
                         <td colspan="1" rowspan="3"><center><strong>{{ $di1 }} </strong>Bs.</center></td>

                          <?php $gnv=0; $gn1=0;?>
                            @foreach($detalleAhora as $key => $value)
                                <?php $gnv = $gnv+$value->gnv; 
                                      $gn1 = $gn1+$value->togn;?> 
                            @endforeach
                         <td colspan="1" rowspan="3"><center><strong>{{$gnv}} m³.</strong></center></td>
                         <td colspan="1" rowspan="3"><center><strong>Total:</strong></center></td>
                         <td colspan="1" rowspan="3"><center><strong>{{ $gn1 }} </strong>Bs.</center></td>
                         <td colspan="3" rowspan="3"></td>
                       </tr>
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





