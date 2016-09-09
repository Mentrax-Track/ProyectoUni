@extends('automotores.admin')
@section('subtitulo','Calendario de Viajes')
@section('css')

    {!! Html::style('css/sb-admin-2.css')!!}
    {!! Html::style('css/fullcalendar/fullcalendar.css') !!}

@stop

@section('javascript')

    {!! Html::script('js/jquery.min.js') !!}
    {!! Html::script('js/moment.min.js') !!}
    {!! Html::script('js/fullcalendar/fullcalendar.min.js') !!}
    {!! Html::script('js/fullcalendar/fullcalendar-lang.js') !!}
    
    <script>
        $(document).ready(function() {

            // page is now ready, initialize the calendar...
           
            $('#calendar').fullCalendar({
                eventClick: function(calEvent, jsEvent, view) {
     
                     $(this).css('background', 'red');
                        
                },
                
                eventAfterRender: function (event, element, view) {
                    var dataHoje = new Date();
                    if (event.start < dataHoje && event.end > dataHoje) {
                        //event.color = "#FFB347"; //Em andamento
                        element.css('background-color', '#FFB347');
                    } else if (event.start < dataHoje && event.end < dataHoje) {
                        //event.color = "#77DD77"; //Concluído OK
                        element.css('background-color', '#77DD77');
                    } else if (event.start > dataHoje && event.end > dataHoje) {
                        //event.color = "#AEC6CF"; //Não iniciado
                        element.css('background-color', '#AEC6CF');
                    }
                },
                  
                    lang: 'es',
                    editable: false,
                    eventLimit: false,
                    events:{
                        //para obtener los resultados del controlador y mostrarlos en el calendario
                        //basta con hacer referencia a la url que nos da dicho resultado, en el ejemplo
                        //en la propiedad url de events ponemos el enlace
                        //y listo eso es todo ya el plugin se encargara de acomodar los eventos
                        //segun la fecha.
                        url:'events'
                    },
                    eventColor: '#577d86',
            })

        });
    </script>
    <style>
       body {
            margin: 40px 10px;
            padding: 0;
            font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
            font-size: 14px;
        }

        #calendar {
            max-width: 900px;
            margin: 0 auto;
        }

    </style>
    @section('content')
    <br>
    <div class="panel panel-default">
        <div class="panel-heading text-center"><h2><p class="www">Calendario de Viajes</p></h2></div>
        <div class="panel-body"> 
                <div class="list-group-item">
                    <div class="jumbotron">
                        <h4><div id='calendar'></div></h4>    
                    </div>
                </div>
        </div>
    </div>
    @endsection
@stop