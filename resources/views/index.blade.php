<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dpto. de Infraestructura</title>

    {!! Html::style('css/bootstrap.min.css') !!}
    {!! Html::style('css/style.css') !!}
    {!! Html::style('css/app.css') !!}

    <link href="carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->

  <body class="letra">
    <div class="container">
        
        <nav class="navbar navbar-default navbar-static-top">
          <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">
                    <p class="www">DEPARTAMENTO DE INFRAESTRUCTURA</p>
                </a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                  <li><a href="{{ route('login') }}"><p class="www">INGRESAR</p></a></li>
                @else
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->nombres }} <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="{{ route('logout') }}">Salir</a></li>
                    </ul>
                  </li>
                @endif
            </ul>
          </div>
        </nav>

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
                  
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img class="first-slide" src="img/uno.jpg" alt="First slide" align="center">
              <div class="container">
                <div class="carousel-caption">
                  <i><h1>Viajes de Práctica</h1></i>
                      <!--<p><a data-toggle="modal" class="btn btn-primary " href="{!! URL::to('/Automotores') !!}" >  Ingrese</a></p>-->
                      <p><a data-toggle="modal" class="btn btn-primary glyphicon glyphicon-hand-up" href="{{ route('login') }}" > INGRESAR</a></p>
                </div>
              </div>
            </div>
                    
            <div class="item">
                <img class="second-slide" src="img/dos.jpg" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption">
                          <i><h1>Control General</h1></i>
                            <p><a data-toggle="modal" class="btn btn-primary glyphicon glyphicon-hand-up" href="{{ route('login') }}" > INGRESAR</a></p>
                        </div>
                    </div>
            </div>
                      
            <div class="item">
                <img class="third-slide" src="img/tres.jpg" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption">
                          <i><h1>Mantenimiento Vehicular</h1></i>
                            <!--<p><a class="btn btn-primary" data-toggle="modal"  href="{!! URL::to('/Mantenimiento') !!}">Ingrese</a></p>-->
                            <p><a data-toggle="modal" class="btn btn-primary glyphicon glyphicon-hand-up" href="{{ route('login') }}" > INGRESAR</a></p>                 
                        </div>
                    </div>
            </div>
          </div>
                      
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
          </a>
                      
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
          </a>
        </div><br>

      <div class="jumbotron">
        <div class="container marketing">
          <div class="row">
              <div class="col-lg-4">
                  <center><img class="img-circle img" src="img/calendario.jpg" alt="Generic placeholder image" width="140" height="140" pading="1px"></span></center>
                  <i><h2 class="text-center">Viajes</h2></i>
                  <p align="justify">Podrá verificar la disponibilidad de los vehículos en un calendario de viajes, realizar las reservas de los mismos y mucho más...&raquo;</p>
                  <p class="text-center"><a class="btn btn-info glyphicon glyphicon-calendar" data-toggle="modal"  href="{!! URL::to('/inicio-de-sesion') !!}"> Ingresar</a></p>
              </div> 
              <div class="col-lg-4">
                  <center><img class="img-circle img" src="img/tramitess.jpg" alt="Generic placeholder image" width="140" height="140"> </center>
                  <i><h2 class="text-center">Servicios Generales</h2></i>
                  <p align="justify">Podrá realizar o verificar las solicitudes de trabajo en las distintas secciones del departamento de Infraestructura.&raquo;</p>
                  <p class="text-center"><a class="btn btn-info glyphicon glyphicon-briefcase" href="{!! URL::to('/inicio-de-sesion') !!}" role="button"> Ingresar</a></p>
              </div>
              <div class="col-lg-4">
                  <center><img class="img-circle img" src="img/autos.jpg" alt="Generic placeholder image" width="140" height="140"> </center>
                  <i><h2 class="text-center">Mantenimiento</h2></i>
                  <p align="justify">Podrá verificar las solicitudes de trabajo para poder realizarlo, como tambien verificar el Kardex y mucho más...&raquo;</p>
                  <p class="text-center"><a class="btn btn-info glyphicon glyphicon-bed" href="{!! URL::to('/inicio-de-sesion') !!}" role="button"> Ingresar</a></p>
              </div>
          </div>
        </div>
      </div>

      <!-- FOOTER -->
      <footer class="text-center">
        <p>&copy; UATF - 2017 </p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    {!! Html::script('js/jquery.min.js') !!}
    {!! Html::script('js/bootstrap.min.js') !!}
    {!! Html::script('js/holder.min.js') !!}
  </body>
</html>