<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Lista de Destinos</title>
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
                      <h4><center><strong>Lista de Destinos <br />{{$date}} </strong></center></h4>
                    </header>
                </div>
                <div class="box-body">
                  @if (!empty($potosi))

                    <h4><center><strong>Departamento de Potosí</strong></center></h4>
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Nro.</th>
                            <th>Dep. Inicio</th>
                            <th>Partida</th>
                            <th>Ruta</th>
                            <th>Dep. Final</th>
                            <th>Llegada</th>
                            <th>Kilometraje</th>
                            <th>Tiempo</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($potosi as $key => $value)
                        <tbody>
                          <tr>
                              <td>{{++$key}} </td>
                              <td>{{$value->dep_inicio}} </td>
                              <td>{{$value->origen}} </td>
                              <td>{{$value->ruta}} </td>
                              <td>{{$value->dep_final}} </td>
                              <td>{{$value->destino}} </td>
                              <td>{{$value->kilometraje}} </td>
                              <td>{{$value->tiempo}} </td>
                          </tr>
                        </tbody>
                        @endforeach
                        </tbody>
                    </table>
                  
                  @endif
                  @if (!empty($oruro))

                    <h4><center><strong>Departamento de Oruro</strong></center></h4>
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Nro.</th>
                            <th>Dep. Inicio</th>
                            <th>Partida</th>
                            <th>Ruta</th>
                            <th>Dep. Final</th>
                            <th>Llegada</th>
                            <th>Kilometraje</th>
                            <th>Tiempo</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($oruro as $key => $value)
                        <tbody>
                          <tr>
                              <td>{{++$key}} </td>
                              <td>{{$value->dep_inicio}} </td>
                              <td>{{$value->origen}} </td>
                              <td>{{$value->ruta}} </td>
                              <td>{{$value->dep_final}} </td>
                              <td>{{$value->destino}} </td>
                              <td>{{$value->kilometraje}} </td>
                              <td>{{$value->tiempo}} </td>
                          </tr>
                        </tbody>
                        @endforeach
                        </tbody>
                    </table>
                  
                  @endif
                  @if (!empty($lapaz))

                    <h4><center><strong>Departamento de La Paz</strong></center></h4>
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Nro.</th>
                            <th>Dep. Inicio</th>
                            <th>Partida</th>
                            <th>Ruta</th>
                            <th>Dep. Final</th>
                            <th>Llegada</th>
                            <th>Kilometraje</th>
                            <th>Tiempo</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($lapaz as $key => $value)
                        <tbody>
                          <tr>
                              <td>{{++$key}} </td>
                              <td>{{$value->dep_inicio}} </td>
                              <td>{{$value->origen}} </td>
                              <td>{{$value->ruta}} </td>
                              <td>{{$value->dep_final}} </td>
                              <td>{{$value->destino}} </td>
                              <td>{{$value->kilometraje}} </td>
                              <td>{{$value->tiempo}} </td>
                          </tr>
                        </tbody>
                        @endforeach
                        </tbody>
                    </table>
                  
                  @endif
                  @if (!empty($pando))

                    <h4><center><strong>Departamento de Pando</strong></center></h4>
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Nro.</th>
                            <th>Dep. Inicio</th>
                            <th>Partida</th>
                            <th>Ruta</th>
                            <th>Dep. Final</th>
                            <th>Llegada</th>
                            <th>Kilometraje</th>
                            <th>Tiempo</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($pando as $key => $value)
                        <tbody>
                          <tr>
                              <td>{{++$key}} </td>
                              <td>{{$value->dep_inicio}} </td>
                              <td>{{$value->origen}} </td>
                              <td>{{$value->ruta}} </td>
                              <td>{{$value->dep_final}} </td>
                              <td>{{$value->destino}} </td>
                              <td>{{$value->kilometraje}} </td>
                              <td>{{$value->tiempo}} </td>
                          </tr>
                        </tbody>
                        @endforeach
                        </tbody>
                    </table>
                  
                  @endif
                  @if (!empty($cochabamba))

                    <h4><center><strong>Departamento de Cochabamba</strong></center></h4>
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Nro.</th>
                            <th>Dep. Inicio</th>
                            <th>Partida</th>
                            <th>Ruta</th>
                            <th>Dep. Final</th>
                            <th>Llegada</th>
                            <th>Kilometraje</th>
                            <th>Tiempo</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($cochabamba as $key => $value)
                        <tbody>
                          <tr>
                              <td>{{++$key}} </td>
                              <td>{{$value->dep_inicio}} </td>
                              <td>{{$value->origen}} </td>
                              <td>{{$value->ruta}} </td>
                              <td>{{$value->dep_final}} </td>
                              <td>{{$value->destino}} </td>
                              <td>{{$value->kilometraje}} </td>
                              <td>{{$value->tiempo}} </td>
                          </tr>
                        </tbody>
                        @endforeach
                        </tbody>
                    </table>
                  
                  @endif
                  @if (!empty($sucre))

                    <h4><center><strong>Departamento de Sucre</strong></center></h4>
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Nro.</th>
                            <th>Dep. Inicio</th>
                            <th>Partida</th>
                            <th>Ruta</th>
                            <th>Dep. Final</th>
                            <th>Llegada</th>
                            <th>Kilometraje</th>
                            <th>Tiempo</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($sucre as $key => $value)
                        <tbody>
                          <tr>
                              <td>{{++$key}} </td>
                              <td>{{$value->dep_inicio}} </td>
                              <td>{{$value->origen}} </td>
                              <td>{{$value->ruta}} </td>
                              <td>{{$value->dep_final}} </td>
                              <td>{{$value->destino}} </td>
                              <td>{{$value->kilometraje}} </td>
                              <td>{{$value->tiempo}} </td>
                          </tr>
                        </tbody>
                        @endforeach
                        </tbody>
                    </table>
                  
                  @endif
                  @if (!empty($tarija))

                    <h4><center><strong>Departamento de Tarija</strong></center></h4>
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Nro.</th>
                            <th>Dep. Inicio</th>
                            <th>Partida</th>
                            <th>Ruta</th>
                            <th>Dep. Final</th>
                            <th>Llegada</th>
                            <th>Kilometraje</th>
                            <th>Tiempo</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($tarija as $key => $value)
                        <tbody>
                          <tr>
                              <td>{{++$key}} </td>
                              <td>{{$value->dep_inicio}} </td>
                              <td>{{$value->origen}} </td>
                              <td>{{$value->ruta}} </td>
                              <td>{{$value->dep_final}} </td>
                              <td>{{$value->destino}} </td>
                              <td>{{$value->kilometraje}} </td>
                              <td>{{$value->tiempo}} </td>
                          </tr>
                        </tbody>
                        @endforeach
                        </tbody>
                    </table>
                  
                  @endif
                  @if (!empty($santacruz))

                    <h4><center><strong>Departamento de Santa Cruz</strong></center></h4>
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Nro.</th>
                            <th>Dep. Inicio</th>
                            <th>Partida</th>
                            <th>Ruta</th>
                            <th>Dep. Final</th>
                            <th>Llegada</th>
                            <th>Kilometraje</th>
                            <th>Tiempo</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($santacruz as $key => $value)
                        <tbody>
                          <tr>
                              <td>{{++$key}} </td>
                              <td>{{$value->dep_inicio}} </td>
                              <td>{{$value->origen}} </td>
                              <td>{{$value->ruta}} </td>
                              <td>{{$value->dep_final}} </td>
                              <td>{{$value->destino}} </td>
                              <td>{{$value->kilometraje}} </td>
                              <td>{{$value->tiempo}} </td>
                          </tr>
                        </tbody>
                        @endforeach
                        </tbody>
                    </table>
                  
                  @endif
                  @if (!empty($beni))

                    <h4><center><strong>Departamento de Beni</strong></center></h4>
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Nro.</th>
                            <th>Dep. Inicio</th>
                            <th>Partida</th>
                            <th>Ruta</th>
                            <th>Dep. Final</th>
                            <th>Llegada</th>
                            <th>Kilometraje</th>
                            <th>Tiempo</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($beni as $key => $value)
                        <tbody>
                          <tr>
                              <td>{{++$key}} </td>
                              <td>{{$value->dep_inicio}} </td>
                              <td>{{$value->origen}} </td>
                              <td>{{$value->ruta}} </td>
                              <td>{{$value->dep_final}} </td>
                              <td>{{$value->destino}} </td>
                              <td>{{$value->kilometraje}} </td>
                              <td>{{$value->tiempo}} </td>
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





