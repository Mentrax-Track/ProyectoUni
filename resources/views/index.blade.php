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

    <link href="carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->

  <body class="letra">
    <div class="container">
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">DEPARTAMENTO  DE  INFRAESTRUCTURA</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#">U.A.T.F</a></li>
              </ul>
            </div>
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
                  <i><h1>Automotores</h1></i>
                    <p>Vea el calendario de las reservas y viajes... </p>
                      <p><a class="btn btn-lg btn-primary" data-toggle="modal"  href="{!! URL::to('/Automotores') !!}">Ingrese...</a></p>
                </div>
              </div>
            </div>
                    
            <div class="item">
                <img class="second-slide" src="img/dos.jpg" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption">
                          <h1>Servicios Generales</h1>
                            <p>Realiza los tramites para la solicitud de vehiculos...</p>
                            <p><a class="btn btn-lg btn-primary" data-toggle="modal"  href="{!! URL::to('/Servicios') !!}">Ingrese...</a></p>
                        </div>
                    </div>
            </div>
                      
            <div class="item">
                <img class="third-slide" src="img/tres.jpg" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption">
                          <h1>Mantenimiento</h1>
                            <p>Registra o verifica el estado del vehiculo...</p>
                            <p><a class="btn btn-lg btn-primary" data-toggle="modal"  href="{!! URL::to('/Mantenimiento') !!}">Ingrese...</a></p>                 
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
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container marketing">
          <div class="row">
              <div class="col-lg-4">
                  <center><img class="img-circle img" src="img/calendario.jpg" alt="Generic placeholder image" width="140" height="140" pading="1px"></span></center>
                  <i><h2 class="text-center">Automotores</h2></i>
                  <p>Podra verificar la disponibilidad de vehiculosy los dias de viajes disponibles para realizar la reserva...</p>
                  <p class="text-center"><a class="btn btn-primary" data-toggle="modal"  href="{!! URL::to('/Automotores') !!}">Ingresar...&raquo;</a></p>
              </div> 
              <div class="col-lg-4">
                  <center><img class="img-circle img" src="img/tramitess.jpg" alt="Generic placeholder image" width="140" height="140"> </center>
                  <i><h2 class="text-center">Servicios Generales</h2></i>
                  <p>En esta sección podrá realizar los tramites para realizar el viaje o las solicitudes de vehiculos...</p>
                  <p class="text-center"><a class="btn btn-primary" href="{!! URL::to('/Servicios') !!}" role="button">Ingresar...&raquo;</a></p>
              </div>
              <div class="col-lg-4">
                  <center><img class="img-circle img" src="img/autos.jpg" alt="Generic placeholder image" width="140" height="140"> </center>
                  <i><h2 class="text-center">Mantenimiento</h2></i>
                  <p>Aquí podra registrar y verificar el estado del vehiculo como tambien los revisar los informes anteriores...</p>
                  <p class="text-center"><a class="btn btn-primary" href="{!! URL::to('/Mantenimiento') !!}" role="button">Ingresar... &raquo;</a></p>
              </div>
          </div>
        </div>
      </div>

      <!-- FOOTER -->
      <footer class="text-center">
        <p>&copy; UATF - 2016 </p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    {!! Html::script('js/jquery.min.js') !!}
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"></script>')</script>
    {!! Html::script('js/bootstrap.min.js') !!}
    {!! Html::script('js/holder.min.js') !!}
  </body>
</html>