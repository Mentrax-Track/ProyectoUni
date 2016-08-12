@extends('automotores.admin')
@section('subtitulo','Calendario de Viajes')
@section('css')

    {!! Html::style('css/main.css') !!}
    {!! Html::style('css/bootstrap-fullcalendar.css') !!}
    {!! Html::style('css/fullcalendar.print.css') !!}

@stop

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

@section('javascript')

    {!! Html::script('js/modernizr-2.8.3-respond-1.4.2.min.js') !!}
    {!! Html::script('js/jquery-ui.custom.min.js') !!}
    {!! Html::script('js/fullcalendar.min.js') !!}

<script>

    $(document).ready(function() {
            var currentLangCode = 'es';//cambiar el idioma al español
 
            $('#calendar').fullCalendar({
                eventClick: function(calEvent, jsEvent, view) {
 
                    $(this).css('background', 'red');
                    //al evento click; al hacer clic sobre un evento cambiara de background
                    //a color rojo y nos enviara a los datos generales del evento seleccionado
                },
 
                
 
                lang:currentLangCode,
                editable: false,
                eventLimit: false,
                events:{
                    //para obtener los resultados del controlador y mostrarlos en el calendario
                    //basta con hacer referencia a la url que nos da dicho resultado, en el ejemplo
                    //en la propiedad url de events ponemos el enlace
                    //y listo eso es todo ya el plugin se encargara de acomodar los eventos
                    //segun la fecha.
                    url:'events'
                }
            });
 
        });
</script>
<style>
    #calendar {
        width: 800px;
        margin: 0 auto;
        }

</style>
@stop