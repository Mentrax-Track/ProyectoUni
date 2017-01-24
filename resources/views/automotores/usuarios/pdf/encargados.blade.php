<?php use Infraestructura\Entidad; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Lista de Usuarios</title>
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
                      <h3><center><strong>UNIVERSIDAD AUTÓNOMA TOMÁS FRÍAS <br />DEPARTAMENTO DE INFRAESTRUCTURA</strong></center></h3>
                      <h4><center><strong>Lista de Encargado</strong></center></h4>
                    </header>
                </div>
                <div class="box-body">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Nro.</th>
                            <th>NOMBRES</th>
                            <th>APELLIDOS</th>
                            <th>CELULAR</th>
                            <th>EMAIL</th>
                            <th>ENTIDAD</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($encargados as $key => $value) 
                 
                        <tbody> 
                              <tr>
                                <td>{{++$key }} </td>
                                <td>{{$value->nombres }} </td>
                                <td>{{$value->apellidos }} </td>
                                <td>{{$value->celular}} </td>
                                <td>{{$value->email }} </td>
                                <?php $i=$value->id;
                                    $enti = Entidad::where('user_id',$i)
                                          ->get(['carrera'])
                                          ->lists('carrera')
                                          ->toArray();
                                    $result = implode($enti, ' ');?>
                                <td>{{$result}} </td>
                              </tr>
                        </tbody>
                    
                        @endforeach
                    
                  </tbody>

                  </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  
                </div>
              </div><!-- /.box -->
              <br><br>

            <center>{{$responsable}} <br />
             {{$date}} </center>
              
            </div>
            <footer>
      Sistema Web Departamento de Infraestructura U.A.T.F.
    </footer>
</body>
</html>
