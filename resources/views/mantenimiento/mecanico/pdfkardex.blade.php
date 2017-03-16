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
                      <h4><center><strong>Kardex de Mantenimiento<br />{{$date}} </strong></center></h4>
                    </header>
                </div>
                <table class="table table-bordered">
                  <tr>
                    <th>Vehiculo: <font color="blue">{{$vehiculo->tipog}} {{$modelo->tipoe}}</font> </th>
                    <th><strong>Marca: </strong><font color="blue">{{$marca->marca}}</font> </th>
                    <th><strong>Placa: </strong><font color="blue">{{$vehiculo->placa}}</font> </th>
                    <th><strong>Estado: </strong><font color="blue">{{$vehiculo->estado}}</font> </th>
                    <th><strong>Kilometraje: </strong><font color="blue">{{$modelo->kilometraje}}</font> </th>
                  </tr>
                  <tr>
                    <th><strong>Modelo: </strong><font color="blue">{{$modelo->modelo}}</font> </th>
                    <th><strong>Motor: </strong><font color="blue">{{$marca->motor}}</font> </th>
                    <th><strong>Chasis: </strong><font color="blue">{{$marca->chasis}}</font> </th>
                    <th><strong>Cilindrada: </strong><font color="blue">{{$marca->cilindrada}}</font> </th>
                    <th><strong>Codigo: </strong><font color="blue">{{$vehiculo->codigo}}</font> </th>
                  </tr>
                </table>
                <div class="box-body">
                    <table class="table table-bordered">
                        <thead>
                          
                        </thead>
                        <tbody>
                        @foreach ($solicitudes as $key => $value)
                        <tbody>
                          <tr>
                            <th colspan="5">TRABAJO SOLICITADO</th>
                          </tr>
                          <tr>
                            <th>Nro.</th>
                            <th>Fecha </th>
                            <th>Chofer</th>
                            <th>Accesorios</th>
                            <th>Detalle</th>                             
                          </tr>
                          <tr>
                              <td><center><font color="red"><strong>{{++$key}}</strong></font> </center></td>
                              <td>{{$value->fecha}} </td>
                              <td>{{$value->chofer}} </td>
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
                              <?php 
                                  $mecanico[] = Mecanico::where('solicitud_id',$id)->get(); 
                                  //dd($mecanico);?>
                              @if(!empty($mecanico) )
                                  <tr>
                                      <th colspan="8"><font color="blue">TRABAJO REALIZADO</font> </th>
                                  </tr>
                                  <tr>
                                      <th><font color="blue">Fecha</font></th> 
                                      <th><font color="blue">Nros.</font></th> 
                                      <th><font color="blue">Unidad</font></th> 
                                      <th><font color="blue">Detalle</font></th> 
                                      <th><font color="blue">Marca</font></th>
                                      <th><font color="blue">Codigo</font></th>
                                      <th><font color="blue">Obs.</font></th>
                                      <th><font color="blue">Km.</font></th>
                                  </tr>
                                  @foreach ($mecanico as $key => $value) 
                                      @foreach ($value as $key => $mec) 
                                        
                                        <tr>
                                          <td>{{$mec->fecha}} </td>
                                          <td>{{$mec->cantidad}} </td>
                                          <td>{{$mec->unidad}} </td>
                                          <td>{{$mec->trabajo}} </td>
                                          <td>{{$mec->marca}} </td>
                                          <td>{{$mec->codigo}} </td>
                                          <td>{{$mec->observación}} </td>
                                          <td>{{$mec->kilometraje}}</td>
                                        </tr>
                                      @endforeach
                                  @endforeach
                               
                              @endif<?php $mecanico ="";  ?> 
                          </tr>
                        </tbody>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                
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





