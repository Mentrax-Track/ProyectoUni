
<div class="form-group">
    <center><label for="">Titulo</label></center>
    <input type="text" class="form-control input-sm" name="titulo"  placeholder="Ejemplo : Universidad Tomas Frias Potosi" value="{!!$mapa->titulo!!} " >
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
    <input type="text" class="form-control input-sm" name="lat" id="lat"  placeholder="Ejm. -19.58416272813471" value="{!!$mapa->lat!!}" >
</div>
<div class="form-group">
    <label for="">Longitud:</label>
    <input type="text" class="form-control input-sm" name="lng" placeholder="Ejm. -65.7566471661072" value="{!!$mapa->lng!!}">
</div>
                