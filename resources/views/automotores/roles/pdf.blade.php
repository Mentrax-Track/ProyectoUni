<?php use Infraestructura\User; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Rol de viajes</title>
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
                      <h4><center><strong>ROL DE VIAJES</strong></center></h4>
                      <h4><center><strong>{{$date}} </strong></center></h4>
                    </header>
                </div>
                <div class="box-body">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Nro.</th>
                            <th>Chofer</th>
                            <th>Ciudad "A"</th>
                            <th>Provincia "B"</th>
                            <th>Frontera "C"</th>
                            <th>Fecha</th>
                            <th>#</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($roles as $key => $value) 
                        <tbody>    
                            <tr><?php  $i = $value->chofer_id;
                                        $r = User::where('id',$i)
                                            ->get(['nombres','apellidos'])
                                            ->lists('fullname')->toArray();
                                        $nombre = implode($r);?>
                                <td class="kn"><center>{{ ++$key }}</center></td>
                                <td class="kn">{{ $nombre }}</td>
                                <td class="kn">{{ $value->tipoa }}</td>
                                <td class="kn">{{ $value->tipob }}</td>
                                <td class="kn">{{ $value->tipoc }}</td>
                                <td class="kn"><center>{{ $value->fecha }}</center></td>
                                <td class="kn"><center>{{ $value->cantidad }}</center></td>
                            </tr>
                        </tbody>
                        @endforeach
                    
                  </tbody>

                  </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  
                </div>
              
                NOTA: <br />
                A) El orden de los choferes se muestra según la antiguiedad laboral. <br /> 
                B) La nueva designación de un viaje se realiza según: la antiguedad, el turno disponible del tipo de viaje y la disponibilidad del chofer. <br />
                C) La fecha muestra la última modificación o designación que se realizó en el rol de viajes.<br />
                D) El # muestra el número de viajes realizados de cada chofer. (dentro del rol de viajes) <br><br><br>
            </div><!-- /.box --><br><br>
            <center><h4 >Sr. {{ $responsable }}<br />ENCARGADO DE AUTOMOTORES </h4></center>
              
            </div>
            <footer>
      Sistema Web Departamento de Infraestructura U.A.T.F.
    </footer>
</body>
</html>





