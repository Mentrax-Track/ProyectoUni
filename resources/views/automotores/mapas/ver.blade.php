@extends('automotores.admin')

@section('subtitulo','Ubicación')
@section('css')
{!!Html::style('css/bootstrap.min.css')!!}
<style type="text/css">
    #map-canvas{
                width: 535x;
                height: 400px;
            }
</style>
@endsection
@section('javascript')
{!!Html::script('js/jquery.min.js')!!}
>
@endsection
@section('content')
@include('alertas.success')
<br>
<div class="panel panel-default">
    <div class="panel-heading text-center"><h4><p class="www">Inserte la ubicación en el mapa</p></h4></div>
    <div class="panel-body">
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALsfWww_p2mj2KjasPSKbPzCR3pXsbvdc&callback=initMap&libraries=places"
                    async defer></script>
        
            <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-6">
                        <center><h1>{{$mapa->titulo}} </h1></center>
                        <div id="map-canvas"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
 
    function initMap() {

        var lat = {{$mapa->lat}}; 
        var lng = {{$mapa->lng}};

        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('map-canvas'), {
          center:{
            lat: lat,
            lng: lng
          },
          zoom: 16
        });

        // Create a marker and set its position.
        var marker = new google.maps.Marker({
           position:{
              lat: lat,
              lng: lng
           },
            map: map
        });
    }

</script>
@stop








