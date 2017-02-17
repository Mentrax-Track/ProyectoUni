<?php 
use Infraestructura\Vehiculo;
use Infraestructura\Mecanico;
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Lista de Solicitudes</title>
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
                      <h4><center><strong>Lista de Solicitudes de Trabajo<br />{{$date}} </strong></center></h4>
                    </header>
                </div>
                <div class="box-body">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Nro.</th>
                            <th>Chofer</th>
                            <th>Vehiculo</th>
                            <th>Accesorios</th>
                            <th>Descripción</th>
                            <th>Fecha</th>
                            <th>Trabajos</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($solicitudes as $key => $value)
                        <tbody>
                          <tr>
                              <td><center>{{++$key}} </center></td>
                              <td>{{$value->chofer}} </td>
                              <td>{{$value->vehiculo->full_vehiculo}} </td>
                              <?php 
                                    $id = (int)$value->id;
                                    //dd($id);
                                    $accesorio = \DB::table('accesorios')
                                                ->where('solicitud_id',$id)
                                                ->groupBy('solicitud_id','id')
                                                ->get();
                                    //dd($accesorio);
                                ?>
                              <td>
                                @foreach ($accesorio as $values) 
                                        {{ $values->solicitud }}
                                @endforeach
                              </td>
                              <td>{{$value->descripsoli}} </td>
                              <td>{{$value->fecha}} </td>
                              <td>
                                    <?php $so = $value->id;
                                        $re = Mecanico::where('solicitud_id',$so)->count();
                                        ?>
                                    @if ($re == 0) 
                                        <center><font color="red">{{$re}}</font> </center>
                                    @else 
                                        <center><font color="blue">{{$re}}</font> </center>
                                    @endif
                              </td>
                          </tr>
                        </tbody>
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





