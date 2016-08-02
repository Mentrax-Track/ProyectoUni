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
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle Navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Automotores</a>
          </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right">
              @if (Auth::guest())
                <li><a href="{{ route('login') }}">Ingresar</a></li>
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
        </div>
      </nav>

      @section('content')
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                <div class="panel-heading">Sección de Automotores</div>
                 <div class="panel-body">
                    <p>Holas estas ingresando a la sección de automotores donde podrás visualizar los detalles de los viajes de práctica.</p>
                 </div>
              </div>
          </div>       
      </div>
      @stop

      @yield('content')

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
    {!! Html::script('js/bootstrap.min.js') !!}
    {!! Html::script('js/holder.min.js') !!}
  </body>
</html>