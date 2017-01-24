<?php 
use Infraestructura\Vehiculo;
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Lista de Vehículos</title>
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
                      <h3><center><strong>UNIVERSIDAD AUTÓNOMA TOMÁS FRÍAS <br />DEPARTAMENTO DE INFRAESTRUCTURA <br /> SECCIÓN MECÁNICA AUTOMOTRIZ </strong></center></h3>
                      <h4><center><strong>Lista de Vehículos <br />{{$date}} </strong></center></h4>
                    </header>
                </div>
                <div class="box-body">
                  @if (!empty($vagoneta))

                    <h4><center><strong>Vagonetas</strong></center></h4>
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Nro.</th>
                            <th>Código</th>
                            <th>Placa</th>
                            <th>Color</th>
                            <th>Pasajeros</th>
                            <th>Tipo</th>
                            <th>Estado</th>
                            <th>Modelo</th>
                            <th>Detalle</th>
                            <th>Kilometraje</th>
                            <th>Marca</th>
                            <th>Chasis</th>
                            <th>Motor</th>
                            <th>Cilindrada</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($vagoneta as $key => $value)
                        <tbody>
                          <tr>
                              <td>{{++$key}} </td>
                              <td>{{$value->codigo}} </td>
                              <td>{{$value->placa}} </td>
                              <td>{{$value->color}} </td>
                              <td>{{$value->pasajeros}} </td>
                              <td>{{$value->tipog}} </td>
                              <td>{{$value->estado}} </td>
                              <td>{{$value->modelo}} </td>
                              <td>{{$value->tipoe}} </td>
                              <td>{{$value->kilometraje}} </td>
                              <td>{{$value->marca}} </td>
                              <td>{{$value->chasis}} </td>
                              <td>{{$value->motor}} </td>
                              <td>{{$value->cilindrada}} </td>
                          </tr>
                        </tbody>
                        @endforeach
                        </tbody>
                    </table>
                  
                  @endif
                  @if (!empty($automovil))
                    <h4><center><strong>Automovil</strong></center></h4>
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Nro.</th>
                            <th>Código</th>
                            <th>Placa</th>
                            <th>Color</th>
                            <th>Pasajeros</th>
                            <th>Tipo</th>
                            <th>Estado</th>
                            <th>Modelo</th>
                            <th>Detalle</th>
                            <th>Kilometraje</th>
                            <th>Marca</th>
                            <th>Chasis</th>
                            <th>Motor</th>
                            <th>Cilindrada</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($automovil as $key => $value)
                        <tbody>
                          <tr>
                              <td>{{++$key}} </td>
                              <td>{{$value->codigo}} </td>
                              <td>{{$value->placa}} </td>
                              <td>{{$value->color}} </td>
                              <td>{{$value->pasajeros}} </td>
                              <td>{{$value->tipog}} </td>
                              <td>{{$value->estado}} </td>
                              <td>{{$value->modelo}} </td>
                              <td>{{$value->tipoe}} </td>
                              <td>{{$value->kilometraje}} </td>
                              <td>{{$value->marca}} </td>
                              <td>{{$value->chasis}} </td>
                              <td>{{$value->motor}} </td>
                              <td>{{$value->cilindrada}} </td>
                          </tr>
                        </tbody>
                        @endforeach
                        </tbody>
                    </table>
                  @endif
                  @if(!empty($jeep))
                    <h4><center><strong>Jeeps</strong></center></h4>
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Nro.</th>
                            <th>Código</th>
                            <th>Placa</th>
                            <th>Color</th>
                            <th>Pasajeros</th>
                            <th>Tipo</th>
                            <th>Estado</th>
                            <th>Modelo</th>
                            <th>Detalle</th>
                            <th>Kilometraje</th>
                            <th>Marca</th>
                            <th>Chasis</th>
                            <th>Motor</th>
                            <th>Cilindrada</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($jeep as $key => $value)
                        <tbody>
                          <tr>
                              <td>{{++$key}} </td>
                              <td>{{$value->codigo}} </td>
                              <td>{{$value->placa}} </td>
                              <td>{{$value->color}} </td>
                              <td>{{$value->pasajeros}} </td>
                              <td>{{$value->tipog}} </td>
                              <td>{{$value->estado}} </td>
                              <td>{{$value->modelo}} </td>
                              <td>{{$value->tipoe}} </td>
                              <td>{{$value->kilometraje}} </td>
                              <td>{{$value->marca}} </td>
                              <td>{{$value->chasis}} </td>
                              <td>{{$value->motor}} </td>
                              <td>{{$value->cilindrada}} </td>
                          </tr>
                        </tbody>
                        @endforeach
                        </tbody>
                    </table>
                  @endif
                  @if(!empty($bussw))
                    <h4><center><strong>Buss W41</strong></center></h4>
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Nro.</th>
                            <th>Código</th>
                            <th>Placa</th>
                            <th>Color</th>
                            <th>Pasajeros</th>
                            <th>Tipo</th>
                            <th>Estado</th>
                            <th>Modelo</th>
                            <th>Detalle</th>
                            <th>Kilometraje</th>
                            <th>Marca</th>
                            <th>Chasis</th>
                            <th>Motor</th>
                            <th>Cilindrada</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($bussw as $key => $value)
                        <tbody>
                          <tr>
                              <td>{{++$key}} </td>
                              <td>{{$value->codigo}} </td>
                              <td>{{$value->placa}} </td>
                              <td>{{$value->color}} </td>
                              <td>{{$value->pasajeros}} </td>
                              <td>{{$value->tipog}} </td>
                              <td>{{$value->estado}} </td>
                              <td>{{$value->modelo}} </td>
                              <td>{{$value->tipoe}} </td>
                              <td>{{$value->kilometraje}} </td>
                              <td>{{$value->marca}} </td>
                              <td>{{$value->chasis}} </td>
                              <td>{{$value->motor}} </td>
                              <td>{{$value->cilindrada}} </td>
                          </tr>
                        </tbody>
                        @endforeach
                        </tbody>
                    </table>
                  @endif
                  @if(!empty($bussmk))
                    <h4><center><strong>Buss MKB210</strong></center></h4>
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Nro.</th>
                            <th>Código</th>
                            <th>Placa</th>
                            <th>Color</th>
                            <th>Pasajeros</th>
                            <th>Tipo</th>
                            <th>Estado</th>
                            <th>Modelo</th>
                            <th>Detalle</th>
                            <th>Kilometraje</th>
                            <th>Marca</th>
                            <th>Chasis</th>
                            <th>Motor</th>
                            <th>Cilindrada</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($bussmk as $key => $value)
                        <tbody>
                          <tr>
                              <td>{{++$key}} </td>
                              <td>{{$value->codigo}} </td>
                              <td>{{$value->placa}} </td>
                              <td>{{$value->color}} </td>
                              <td>{{$value->pasajeros}} </td>
                              <td>{{$value->tipog}} </td>
                              <td>{{$value->estado}} </td>
                              <td>{{$value->modelo}} </td>
                              <td>{{$value->tipoe}} </td>
                              <td>{{$value->kilometraje}} </td>
                              <td>{{$value->marca}} </td>
                              <td>{{$value->chasis}} </td>
                              <td>{{$value->motor}} </td>
                              <td>{{$value->cilindrada}} </td>
                          </tr>
                        </tbody>
                        @endforeach
                        </tbody>
                    </table>
                  @endif
                  @if(!empty($camioneta))
                    <h4><center><strong>Camionetas</strong></center></h4>
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Nro.</th>
                            <th>Código</th>
                            <th>Placa</th>
                            <th>Color</th>
                            <th>Pasajeros</th>
                            <th>Tipo</th>
                            <th>Estado</th>
                            <th>Modelo</th>
                            <th>Detalle</th>
                            <th>Kilometraje</th>
                            <th>Marca</th>
                            <th>Chasis</th>
                            <th>Motor</th>
                            <th>Cilindrada</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($camioneta as $key => $value)
                        <tbody>
                          <tr>
                              <td>{{++$key}} </td>
                              <td>{{$value->codigo}} </td>
                              <td>{{$value->placa}} </td>
                              <td>{{$value->color}} </td>
                              <td>{{$value->pasajeros}} </td>
                              <td>{{$value->tipog}} </td>
                              <td>{{$value->estado}} </td>
                              <td>{{$value->modelo}} </td>
                              <td>{{$value->tipoe}} </td>
                              <td>{{$value->kilometraje}} </td>
                              <td>{{$value->marca}} </td>
                              <td>{{$value->chasis}} </td>
                              <td>{{$value->motor}} </td>
                              <td>{{$value->cilindrada}} </td>
                          </tr>
                        </tbody>
                        @endforeach
                        </tbody>
                    </table>
                  @endif
                  @if(!empty($camion))
                    <h4><center><strong>Camiones</strong></center></h4>
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Nro.</th>
                            <th>Código</th>
                            <th>Placa</th>
                            <th>Color</th>
                            <th>Pasajeros</th>
                            <th>Tipo</th>
                            <th>Estado</th>
                            <th>Modelo</th>
                            <th>Detalle</th>
                            <th>Kilometraje</th>
                            <th>Marca</th>
                            <th>Chasis</th>
                            <th>Motor</th>
                            <th>Cilindrada</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($camion as $key => $value)
                        <tbody>
                          <tr>
                              <td>{{++$key}} </td>
                              <td>{{$value->codigo}} </td>
                              <td>{{$value->placa}} </td>
                              <td>{{$value->color}} </td>
                              <td>{{$value->pasajeros}} </td>
                              <td>{{$value->tipog}} </td>
                              <td>{{$value->estado}} </td>
                              <td>{{$value->modelo}} </td>
                              <td>{{$value->tipoe}} </td>
                              <td>{{$value->kilometraje}} </td>
                              <td>{{$value->marca}} </td>
                              <td>{{$value->chasis}} </td>
                              <td>{{$value->motor}} </td>
                              <td>{{$value->cilindrada}} </td>
                          </tr>
                        </tbody>
                        @endforeach
                        </tbody>
                    </table>
                  @endif
                  @if(!empty($otros))
                    <h4><center><strong>Otros</strong></center></h4>
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Nro.</th>
                            <th>Código</th>
                            <th>Placa</th>
                            <th>Color</th>
                            <th>Pasajeros</th>
                            <th>Tipo</th>
                            <th>Estado</th>
                            <th>Modelo</th>
                            <th>Detalle</th>
                            <th>Kilometraje</th>
                            <th>Marca</th>
                            <th>Chasis</th>
                            <th>Motor</th>
                            <th>Cilindrada</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($otros as $key => $value)
                        <tbody>
                          <tr>
                              <td>{{++$key}} </td>
                              <td>{{$value->codigo}} </td>
                              <td>{{$value->placa}} </td>
                              <td>{{$value->color}} </td>
                              <td>{{$value->pasajeros}} </td>
                              <td>{{$value->tipog}} </td>
                              <td>{{$value->estado}} </td>
                              <td>{{$value->modelo}} </td>
                              <td>{{$value->tipoe}} </td>
                              <td>{{$value->kilometraje}} </td>
                              <td>{{$value->marca}} </td>
                              <td>{{$value->chasis}} </td>
                              <td>{{$value->motor}} </td>
                              <td>{{$value->cilindrada}} </td>
                          </tr>
                        </tbody>
                        @endforeach
                        </tbody>
                    </table>
                  @endif
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  
                </div>
              
                
            </div><!-- /.box --><br><br>
            <center><h4 >Sr. {{ $responsable }}</h4></center>
              
            </div>
            <footer>
      Sistema Web Departamento de Infraestructura U.A.T.F.
    </footer>
</body>
</html>





