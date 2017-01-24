@extends('automotores.admin')
@section('subtitulo','Calendario de Viajes')
@section('css')
    
    {!! Html::style('css/sb-admin-2.css')!!}
    {!! Html::style('css/fullcalendar/jquery-ui.min.css')!!}
    {!! Html::style('css/fullcalendar/fullcalendar.css')!!}

@stop

@section('javascript')

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
     
                     $(this).css('background', 'red');
                        
                },
                //Cambia los colores del evento
                eventAfterRender: function (event, element, view) {
                    var dataHoje = new Date();
                    //var estado = event.estado;
                    //var cancelado =  "calcelado";
                   //alert(cancelado);
                    if (event.start < dataHoje && event.end > dataHoje) {
                        //event.color = "#FFB347"; //En funcion
                        if (event.estado == 'cancelado') {
                            //event.color = "#AEC6CF"; //Cancelado
                            element.css('background-color', '#FA5858');
                        }else{
                            element.css('background-color', '#FFB347');
                        }
                    } else if (event.start < dataHoje && event.end < dataHoje) {
                        //event.color = "#77DD77"; //Concluído OK
                        if (event.estado == 'cancelado') {
                            //event.color = "#AEC6CF"; //Cancelado
                            element.css('background-color', '#FA5858');
                        }else{
                            element.css('background-color', '#77DD77');
                        }
                    } else if (event.start > dataHoje && event.end > dataHoje) {
                        //event.color = "#AEC6CF"; //No iniciado
                        if (event.estado == 'cancelado') {
                            //event.color = "#AEC6CF"; //Cancelado
                            element.css('background-color', '#FA5858');
                        }else{
                            element.css('background-color', '#88BAF9');
                        }    
                    }
                },
                //Muestra las cabezeras del calendario
                header: {
                    left: 'prev,next today myCustomButton',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },  

                theme: true,
                editable: false,
                eventLimit: false,
                eventBorderColor: '#1A1A1A',
                eventTextColor: '#000080',
                events:{
                    //para obtener los resultados del controlador y mostrarlos en el calendario
                    //basta con hacer referencia a la url que nos da dicho resultado, en el ejemplo
                    //en la propiedad url de events ponemos el enlace
                    //y listo eso es todo ya el plugin se encargara de acomodar los ventos
                     //segun la fecha.
                        url:'events'
                    },
                
                
                monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
                monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
                dayNames: ['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
                dayNamesShort: ['Dom','Lun','Mar','Mié','Jue','Vie','Sáb'],
                buttonText:{prev:"<span class='fc-text-arrow'>&lsaquo;</span>",next:"<span class='fc-text-arrow'>&rsaquo;</span>",prevYear:"<span class='fc-text-arrow'>&laquo;</span>",nextYear:"<span class='fc-text-arrow'>&raquo;</span>",today:"hoy",month:"mes",week:"semana",day:"día"},
            })

        });
    </script>
    <style>
       body {
            margin: 40px 10px;
            padding: 0;
            font-family: "Times New Roman",Helvetica,Arial,Verdana,sans-serif;
            font-size: 14px;
        }

        #calendar {
            max-width: 800px;
            margin: 0 auto;
            font-family: "Times New Roman",Helvetica,Arial,Verdana,sans-serif;
            
        }
        
    </style>
    @section('content')
    <br>
    <div class="panel panel-success">
        <div class="panel-heading text-center"><h3><p class="www">Calendario de Viajes</p></h3></div>
        <div class="panel-body">
            <center><font color="red">■</font>El evento de color <font color = "#77DD77"><strong> VERDE </strong></font> es un viaje concluido.<font color="red">■</font> El evento de color <font color = "#FFB347"><strong> AMARILLO </strong></font> es un viaje en proceso.<font color="red">■</font> El evento de color <font color = "#337ab7"><strong> AZUL </strong></font> es el próximo viaje.<font color="red">■</font> El evento de color <font color = "#FA5858"><strong> ROJO </strong></font> es un viaje cancelado.</center>
            <li class="list-group-item list-group-item-info">
                <h4><div id='calendar'></div></h4>    
            </li>
        </div>
    </div>
    @endsection
@stop