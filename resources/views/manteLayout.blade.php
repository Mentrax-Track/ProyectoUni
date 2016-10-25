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
            </button>
            <a class="navbar-brand" href="#"><p class="www">Mantenimiento Vehicular</p></a>
          </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right">
              @if (Auth::guest())
                <li><a href="{{ route('login') }}"><p class="www">Ingresar</p></a></li>
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
                <div class="panel-heading"><p class="www text-center">Mantenimiento Vehícular</p></div>
                 <div class="panel-body">
                    <div class="list-group-item">
                      <div class="jumbotron">
                              
                      </div>
                  </div>
                 </div>
              </div>
          </div>       
        </div>
      @endsection 

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