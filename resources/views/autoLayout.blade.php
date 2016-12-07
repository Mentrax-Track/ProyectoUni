<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Jorge Peralta">

    <title>Dpto. de Infraestructura</title>

    {!! Html::style('css/bootstrap.min.css') !!}
    {!! Html::style('css/style.css') !!}
    {!! Html::style('css/app.css') !!}

    {!! Html::script('js/moment.min.js') !!}
    {!! Html::script('js/jquery.min.js') !!}
    
  </head>
  <body class="letra">
      <nav class="navbar navbar-default navbar-static-top">
          <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">
                    <p class="www">DEPARTAMENTO DE INFRAESTRUCTURA</p>
                </a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                  <li><a href="/password/email"><p class="www">NUEVA CONTRASEÑA</p></a></li>
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
     
      <!--Aqui esta la caja de login-->
      @yield('content')

      <!-- PIE DE PAGINA -->
      <footer class="text-center">
        <p>&copy; UATF - 2016 </p>
      </footer>
    
    {!! Html::script('js/validator.js') !!}
    {!! Html::script('js/bootstrap.min.js') !!}
    {!! Html::script('js/holder.min.js') !!}
  </body>
</html>