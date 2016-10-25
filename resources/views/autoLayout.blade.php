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
    {!! Html::style('css/fullcalendar/jquery-ui.min.css')!!}
    {!! Html::style('css/fullcalendar/fullcalendar.css')!!}

    
    {!! Html::script('js/moment.min.js') !!}
    {!! Html::script('js/jquery.min.js') !!}
    {!! Html::script('js/fullcalendar/jquery-ui.custom.min.js') !!}
    {!! Html::script('js/fullcalendar/fullcalendar.min.js') !!}

      <script>
          $(document).ready(function() {

              // iniciamos el calendario           
              $('#calendar').fullCalendar({
                  //cuando haga click en un evento nos redirecciona y pinta de rojo
                  eventClick: function(calEvent, jsEvent, view) {
                       alert('Porfavor: ' + 'Inicia seción');
                       $(this).css('background', 'red');
                          
                  },
                  //Cambia los colores del evento
                  eventAfterRender: function (event, element, view) {
                      var dataHoje = new Date();
                      if (event.start < dataHoje && event.end > dataHoje) {
                          //event.color = "#FFB347"; //En funcion
                          element.css('background-color', '#FFB347');
                      } else if (event.start < dataHoje && event.end < dataHoje) {
                          //event.color = "#77DD77"; //Concluído OK
                          element.css('background-color', '#77DD77');
                      } else if (event.start > dataHoje && event.end > dataHoje) {
                          //event.color = "#AEC6CF"; //No iniciado
                          element.css('background-color', '#88BAF9');
                      }
                  },
                  //Muestra las cabezeras del calendario
                  header: {
                      left: 'prev,next today myCustomButton',
                      center: 'title',
                      right: 'month,agendaWeek,agendaDay'
                  },  

                  theme: true,
                  eventBorderColor: '#1A1A1A',
                  eventTextColor: '#000080',
                  events:[
                    {
                      title: 'Ingeniería Minera',
                      start: '2016-9-27',
                      end: '2016-9-30'
                    },
                    {
                      title: 'Ingeniería Agroindustrial',
                      start: '2016-10-03',
                      end: '2016-10-10'
                    },
                    {
                      title: 'Informática',
                      start: '2016-10-17',
                      end: '2016-10-20'
                    },
                    {
                      title: 'Linguistica-Potosi',
                      start: '2016-10-18',
                      end: '2016-10-21'
                    },
                    {
                      title: 'Ingeniería de Sistemas',
                      start: '2016-10-24',
                      end: '2016-10-29'
                    },
                    {
                      title: 'Ingeniería Civil',
                      start: '2016-10-31',
                      end: '2016-11-05'
                    }
                  ],            
                  
                  
                  monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
                  monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
                  dayNames: ['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
                  dayNamesShort: ['Dom','Lun','Mar','Mié','Jue','Vie','Sáb'],
                  buttonText:{prev:"<span class='fc-text-arrow'>&lsaquo;</span>",next:"<span class='fc-text-arrow'>&rsaquo;</span>",prevYear:"<span class='fc-text-arrow'>&laquo;</span>",nextYear:"<span class='fc-text-arrow'>&raquo;</span>",today:"hoy",month:"mes",week:"semana",day:"día"},
              })

          });
      </script>
      <style>
          #calendar {
              max-width: 700px;
              margin: 0 auto;
              font-family: "Times New Roman",Helvetica,Arial,Verdana,sans-serif;
              
          }
          
      </style>
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
            <a class="navbar-brand" href="#"><p class="www">Automotores</p></a>
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
    </div><!-- /.container -->

      @section('content')
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                <div class="panel-heading"><h3><p class="www text-center">Calendario de Viajes</p></h3></div>
                 <div class="panel-body">
                    <div class="list-group-item">
                      <div class="jumbotron">
                          <h4><div id='calendar'></div></h4>    
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

    {!! Html::script('js/bootstrap.min.js') !!}
    {!! Html::script('js/holder.min.js') !!}
  </body>
</html>