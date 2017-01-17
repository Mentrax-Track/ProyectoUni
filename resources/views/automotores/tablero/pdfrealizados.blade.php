<?php 
use Infraestructura\User;
use Infraestructura\Rol;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tablero</title>
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
                      <h4><center><strong> Viajes Realizados </strong></center></h4>

                    </header>
                </div>
                <div class="box-body">           
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Nro.</th>
                            <th>Entidad</th>
                            <th>Tipo</th>
                            <th>Objetivo</th>
                            <th>Dias</th>
                            <th>Pasajeros</th>
                            <th>Fecha Inicial</th>
                            <th>Fecha Final</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($viajes as $key => $via) 
                        <tbody>
                          <tr>    
                            <td ><center>{{ ++$key }}</center></td>
                            <td>{{ $via->entidad }}</td>
                            <td>{{ $via->tipo }}</td>
                            <td>{{ $via->objetivo }}</td>
                            <td>{{ $via->dias }}</td>
                            <td>{{ $via->pasajeros }}</td>
                            <td>{{ $via->fecha_inicial }}</td>
                            <td>{{ $via->fecha_final }}</td>
                          </tr>
                        </tbody>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{$fecha}}
                </div><br /><br /><br /><br /><br />
                <div class="box-body">               
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>
                            {{$responsable}} <br />
                            Encargado Automotores</th>
                           
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








