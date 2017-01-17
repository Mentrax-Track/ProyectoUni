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
                      <h4><center><strong>Lista de usuarios</strong></center></h4>
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
                            <th>SERVICIO</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($todos as $key => $value) 
                 
                        <tbody> 
                              <tr>
                                <td>{{++$key }} </td>
                                <td>{{$value->nombres }} </td>
                                <td>{{$value->apellidos }} </td>
                                <td>{{$value->celular}} </td>
                                <td>{{$value->email }} </td>
                                <td>{{$value->tipo }} </td>
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

<!--

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Example 1</title>
    {!! Html::style('css/pdf/uno.css') !!}
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img style="float:center;" src="img/uatf.jpg" width="70px">
      </div>
      <h3><center><strong>UNIVERSIDAD AUTÓNOMA TOMÁS FRÍAS <br />DEPARTAMENTO DE INFRAESTRUCTURA</strong></center></h3>
    </header>
    <main><h4><center><strong>Lista de Usuarios</strong></center></h4>
    <center><strong>{{$date}} </strong></center>

    <?php $i = 1; ?>
    @foreach($numero as $todos)

      <table align="center">
        <thead>
          <tr>
            <th class="segundo">Nro.</th>
            <th class="primero">NOMBRES</th>
            <th class="segundo">APELLIDOS</th>
            <th class="segundo">CELULAR</th>
            <th class="segundo">EMAIL</th>
            <th class="segundo">SERVICIO</th>
          </tr>
        </thead> 
        
        @foreach ($todos as $key => $value) 
       <tbody> 
          
              <tr>
                <td>{{$i++ }} </td>
                <td >{{$value->nombres }} </td>
                <td>{{$value->apellidos }} </td>
                <td>{{$value->celular}} </td>
                <td>{{$value->email }} </td>
                <td>{{$value->tipo }} </td>
              </tr>
        </tbody>  
        @endforeach
          

      </table>
      <span style="page-break-after:always;"></span>
    @endforeach
    </main>
  </body>
</html>   
-->