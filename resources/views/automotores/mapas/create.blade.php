@extends('automotores.admin')

@section('subtitulo','Ubicación del Destino ')
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
{!!Html::script('js/validator.js')!!}
@endsection
@section('content')
@include('alertas.success')
@include('alertas.request')
<br>
<div class="panel panel-default">
    <div class="panel-heading text-center"><h4><p class="www">Inserte la ubicación en el mapa</p></h4></div>
    <div class="panel-body">
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALsfWww_p2mj2KjasPSKbPzCR3pXsbvdc&callback=initMap&libraries=places&callback=initAutocomplete" async defer></script>
        
        <div class="container">
            <div class="col-md-2"></div>
            <div class="col-md-6">
                {!! Form::open(['route'=>'mapas.store','method'=>'POST','files' => true,'data-toggle'=>'validator']) !!}
                    <div class="form-group">
                        <center><label for="">Titulo</label></center>
                        <input type="text" class="form-control input-sm" name="titulo" data-error="Inserte un título de la ubicación" required placeholder="Ejemplo : Universidad Tomas Frias Potosi">
                        <center><div class="help-block with-errors"></div></center>
                    </div>
                    <input type="hidden" name="destino_id" value="{!! $ides !!}" />
                    <input type="hidden" name="insertador" value="{!! $insertador !!}" />
                    <div class="form-group">
                        <label for="">Mapa</label>
                        <input type="text" id="mibusqueda" placeholder="Realize una Búsqueda..." class="form-control">
                        <div id="map-canvas" ></div>
                    </div>
                    <div class="form-group">
                        <label for="">Latitud:</label>
                        <input type="text" class="form-control input-sm" name="lat" id="lat" data-error="Este campo se llena cuando mueve la posisión" required placeholder="Ejm. -19.58416272813471">
                        <center><div class="help-block with-errors"></div></center>
                    </div>
                    <div class="form-group">
                        <label for="">Longitud:</label>
                        <input type="text" class="form-control input-sm" name="lng" id="lng" data-error="Este campo se llena cuando mueve la posisión" required placeholder="Ejm. -65.7566471661072">
                        <center><div class="help-block with-errors"></div></center>
                    </div>
                    <center><button class="btn btn-sm btn-info fa fa-hand-o-up"> Guardar</button></center>
                {!!Form::close()!!}
                  
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
 
    /*function initMap() {
        var myLatLng = {lat: -19.58416272813471, lng: -65.7566471661072};

        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('map-canvas'), {
          center: myLatLng,
          scrollwheel: true,
          zoom: 16
        });

        // Create a marker and set its position.
        var marker = new google.maps.Marker({
          map: map,
          draggable: true,
          position: myLatLng,
          title: 'Está ubicación!'
        });

        var searchBox = new google.maps.places.SearchBox(document.getElementById('searchmap'));
        
        google.maps.event.addListener(searchBox,'places_changed', function(){

            var places = searchBox.getPlaces();
            var bounds = new google.maps.LatLngBounds(); 
            var i, place;

            for(i=0; place=place[i];i++)
            {
                bounds.extend(place.geometry.location);
                marker.setPosition(place.geometry.location);
            }
            map.fitBounds(bounds);
            map.setZoom(15);

        });

        google.maps.event.addListener(marker,'position_changed',function(){

            var lat = marker.getPosition().lat();
            var lng = marker.getPosition().lng();

            $('#lat').val(lat);
            $('#lng').val(lng);

        });
        //Código p[ara mi geolocalizacón
        var infoWindow = new google.maps.InfoWindow({map: map});

          // Empieza la Geolocalización con HTML5
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
              var pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
              };

              infoWindow.setPosition(pos);
              infoWindow.setContent('Estás aqui!!!');
              map.setCenter(pos);
            }, function() {
              handleLocationError(true, infoWindow, map.getCenter());
            });
          } else {
            // Si el navegador no admite la localización
            handleLocationError(false, infoWindow, map.getCenter());
        }
        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
              infoWindow.setPosition(pos);
              infoWindow.setContent(browserHasGeolocation ?
                                    'Error: El servicio de Geolocalización falló.' :
                                    'Error: Su navegador no admite geolocalización.');
            }
    }*/
    function initAutocomplete() 
    {
        var myLatLng = {lat: -19.58416272813471, lng: -65.7566471661072};
        var map = new google.maps.Map(document.getElementById('map-canvas'), 
        {
            center: myLatLng,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: true,
            zoom: 16
        });
        var marker = new google.maps.Marker({
          map: map,
          draggable: true,
          position: myLatLng,
          title: 'Está ubicación!'
        });

        

        google.maps.event.addListener(marker,'position_changed',function(){

            var lat = marker.getPosition().lat();
            var lng = marker.getPosition().lng();

            $('#lat').val(lat);
            $('#lng').val(lng);

        });
            //[Iniciando]
              // cuadro de Busqueda para vicular con la vista del usuario.
              var input = document.getElementById('mibusqueda');
              var searchBox = new google.maps.places.SearchBox(input);
              map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

              // Mandar a la vista del mapa
              map.addListener('bounds_changed', function() {
                searchBox.setBounds(map.getBounds());
              });

              var markers = [];
              
              // Escucha el evento disparado cuando el usuario selecciona una predicción y recupera
              searchBox.addListener('places_changed', function() {
                var places = searchBox.getPlaces();

                if (places.length == 0) {
                  return;
                }

                // Borrar los viejos marcadores.
                markers.forEach(function(marker) {
                  marker.setMap(null);
                });
                markers = [];

                // Para cada lugar, obtener el icono, el nombre y la ubicación.
                var bounds = new google.maps.LatLngBounds();
                places.forEach(function(place) {
                  var icon = {
                    url: place.icon,
                    size: new google.maps.Size(71, 71),
                    origin: new google.maps.Point(0, 0),
                    anchor: new google.maps.Point(17, 34),
                    scaledSize: new google.maps.Size(25, 25)
                  };

                  // Cree un marcador para cada lugar.
                  markers.push(new google.maps.Marker({
                    map: map,
                    icon: icon,
                    title: place.name,
                    position: place.geometry.location
                  }));

                  if (place.geometry.viewport) {
                    
                    bounds.union(place.geometry.viewport);
                  } else {
                    bounds.extend(place.geometry.location);
                  }
                });
                map.fitBounds(bounds);
              });
              // [FIN]
        //Código p[ara mi geolocalizacón
        var infoWindow = new google.maps.InfoWindow({map: map});

          // Empieza la Geolocalización con HTML5
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
              var pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
              };

              infoWindow.setPosition(pos);
              infoWindow.setContent('Estás aqui!!!');
              map.setCenter(pos);
            }, function() {
              handleLocationError(true, infoWindow, map.getCenter());
            });
          } else {
            // Si el navegador no admite la localización
            handleLocationError(false, infoWindow, map.getCenter());
        }
        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
              infoWindow.setPosition(pos);
              infoWindow.setContent(browserHasGeolocation ?
                                    'Error: El servicio de Geolocalización falló.' :
                                    'Error: Su navegador no admite geolocalización.');
            }      
}

</script>
@stop








