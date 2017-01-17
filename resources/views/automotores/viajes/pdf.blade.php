<?php use Infraestructura\User; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Rutas</title>
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
                      <h4><center><strong> Rutas del viaje de {{$viaje->entidad}} </strong></center></h4>
                      <h4><center><strong> Fecha de partida:{{$viaje->fecha_inicial}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fecha de retorno:{{$viaje->fecha_final}} <br />
                      Objetivo: {{$viaje->objetivo}} <br />
                      Vehículo: @foreach($vehiculos as $vehi)
                            {{$vehi->tipog }}&nbsp;
                            Placa: {{$vehi->placa}}&nbsp;
                      @endforeach
                       <br />

                      Con {{$viaje->pasajeros}} pasajeros &nbsp;&nbsp; &nbsp;&nbsp; Dias: {{$viaje->dias}}  <br /> 
                      Kimlometraje Adicional: @foreach($adici as $a)
                            {{$a->adicional }}&nbsp;
                      @endforeach
                      Kilometraje Total: @foreach($total as $t)
                            {{$t->total }}&nbsp;
                      @endforeach
                       <br />

                      </strong></center></h4>
                    </header>
                </div>
                <div class="box-body">
                    <h4><center><strong> Encargados del viaje </strong></center></h4>                
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Nro.</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Celular</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($encargados as $key => $value) 
                        <tbody>
                          <tr>    
                            <td ><center>{{ ++$key }}</center></td>
                            <td>{{ $value->nombres }}</td>
                            <td>{{ $value->apellidos }}</td>
                            <td><center>{{ $value->celular }}</center></td>
                          </tr>
                        </tbody>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="box-body">
                    <h4><center><strong> Choferes </strong></center></h4>                
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Nro.</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Celular</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($choferes as $key => $value) 
                        <tbody>
                          <tr>    
                            <td ><center>{{ ++$key }}</center></td>
                            <td>{{ $value->n }}</td>
                            <td>{{ $value->a }}</td>
                            <td><center>{{ $value->c }}</center></td>
                          </tr>
                        </tbody>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="box-body">
                    <h4><center><strong> Rutas </strong></center></h4>                
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Dpto. Partida</th>
                            <th>Origen</th>
                            <th>Ruta</th>
                            <th>Dpto. Destino</th>
                            <th>Destino</th>
                            <th>Tiempo Aprox.</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($destinos as $key => $destino) 
                        <tbody>
                          <tr>    
                            <td>{{ $destino->ini }}</td>
                            <td>{{ $destino->o }}</td>
                            <td>{{ $destino->r }}</td>
                            <td>{{ $destino->d }}</td>
                            <td>{{ $destino->fin }}</td>
                            <td>{{ $destino->t }}</td>
                          </tr>
                        </tbody>
                        @endforeach
                        @foreach ($desti1 as $destino)
                        <tbody>
                          <tr>
                            <td>{{ $destino->ini }}</td>
                            <td>{{ $destino->o }}</td>
                            <td>{{ $destino->r }}</td>
                            <td>{{ $destino->d }}</td>
                            <td>{{ $destino->fin }}</td>
                            <td>{{ $destino->t }}</td>
                          </tr>
                        </tbody>   
                        @endforeach
                        @foreach ($desti2 as $destino)
                        <tbody>
                          <tr>
                            <td>{{ $destino->ini }}</td>
                            <td>{{ $destino->o }}</td>
                            <td>{{ $destino->r }}</td>
                            <td>{{ $destino->d }}</td>
                            <td>{{ $destino->fin }}</td>
                            <td>{{ $destino->t }}</td>
                          </tr>
                        </tbody>   
                        @endforeach
                        @foreach ($desti3 as $destino)
                        <tbody>
                          <tr>
                            <td>{{ $destino->ini }}</td>
                            <td>{{ $destino->o }}</td>
                            <td>{{ $destino->r }}</td>
                            <td>{{ $destino->d }}</td>
                            <td>{{ $destino->fin }}</td>
                            <td>{{ $destino->t }}</td>
                          </tr>
                        </tbody>   
                        @endforeach
                        @foreach ($desti4 as $destino)
                        <tbody>
                          <tr>
                            <td>{{ $destino->ini }}</td>
                            <td>{{ $destino->o }}</td>
                            <td>{{ $destino->r }}</td>
                            <td>{{ $destino->d }}</td>
                            <td>{{ $destino->fin }}</td>
                            <td>{{ $destino->t }}</td>
                          </tr>
                        </tbody>   
                        @endforeach
                        @foreach ($desti5 as $destino)
                        <tbody>
                          <tr>
                            <td>{{ $destino->ini }}</td>
                            <td>{{ $destino->o }}</td>
                            <td>{{ $destino->r }}</td>
                            <td>{{ $destino->d }}</td>
                            <td>{{ $destino->fin }}</td>
                            <td>{{ $destino->t }}</td>
                          </tr>
                        </tbody>   
                        @endforeach
                        </tbody>
                    </table>{{$date}}
                </div><br /><br /><br /><br /><br />
                <div class="box-body">               
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>
                                Chofer Designado
                            </th>
                            <th>
                            {{$responsable}} <br />
                            Encargado Automotores</th>
                            <th>Encargado de Viaje</th>
                          </tr>
                        </thead>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                  
                </div>
            </div><!-- /.box -->

            </div>

            <footer>
      Sistema Web Departamento de Infraestructura U.A.T.F.
    </footer>
</body>
</html>





