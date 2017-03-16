<?php 
use Infraestructura\Vehiculo;
use Infraestructura\Modelo;
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
                        <center><img style="float:center;" src="img/uatf.jpg" width="85px"></center>
                      </div>
                      <h3><center><strong>UNIVERSIDAD AUTÓNOMA TOMÁS FRÍAS <br />DEPARTAMENTO DE INFRAESTRUCTURA <br /> SECCIÓN AUTOMOTORES </strong></center></h3>
                      <h4><center><strong>Lista de Vehículos  <br />{{$date}} </strong></center></h4>
                    </header>
                </div>
                <div class="box-body">
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
                          </tr>
                        </thead>
                        <tbody>
                        <?php $i=1; ?>
                        @foreach ($resul as $key => $vehi)

                            @foreach ($vehi as $key => $value)  
                            
                            <tbody>
                              <tr>
                                  <td><center>{{$i}}</center> </td>
                                  <td><center>{{$value->codigo}}</center> </td>
                                  <td>{{$value->placa}} </td>
                                  <td>{{$value->color}} </td>
                                  <td><center>{{$value->pasajeros}}</center> </td>
                                  <td>{{$value->tipog}} </td>
                                  <td>{{$value->estado}} </td>
                                  <?php $vi = $value->id; 
                                  $kilo = Modelo::where('vehiculo_id',$vi)->first(); 
                                  //dd($kilo);?>
                                  <td><center>{{$kilo->modelo}} </center></td>
                                  <td>{{$kilo->tipoe}} </td>
                                  <td><center>{{$kilo->kilometraje}} </center></td>
                              </tr>
                            </tbody>
                            <?php $i++; ?>
                            @endforeach  
                        @endforeach
                        </tbody>
                    </table>
                  
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





