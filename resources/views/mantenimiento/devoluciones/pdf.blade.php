<?php 
use Infraestructura\Vehiculo;
use Infraestructura\Solicitud;
use Infraestructura\Mecanico;
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Lista de Devoluciones</title>
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
                      <h4><center><strong>Lista de Devoluciones<br />{{$date}} </strong></center></h4>
                    </header>
                </div>
                <div class="box-body">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Serial</th>
                            <th class="text-center">Fecha</th>
                            <th class="text-center">Nombre</th>
                            <th class="text-center">Cantidad</th>
                            <th class="text-center">Detalle</th>
                            <th class="text-center">Vehiculo</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($devolucion as $key => $dev)
                            <tbody>
                                <tr>
                                    <td  class="info text-center">{{ ++$key }}</td>
                                    <td>{{ $dev->serial }}</td>
                                    <td class="info"><center>{{ $dev->fecha }}</center></td>
                                    <td>{{ $dev->nombre }}</td>
                                    <td><center>{{ $dev->cantidad }}</center></td>
                                    <td>{{ $dev->detalle }}</td>
                                    <?php $de = Mecanico::where('id',$dev->mecanico_id)->get(['solicitud_id'])->lists('solicitud_id')->toArray();
                                        //dd($dev);
                                        $sol = Solicitud::where('id',$de[0])->get(['vehiculo_id'])->lists('vehiculo_id')->toArray(); 

                                        $vehi = Vehiculo::where('id',$sol[0])->get(['tipog','placa'])->lists('full_vehiculo')->toArray(); ?>
                                    <td>{{ $vehi[0] }}</td>

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





