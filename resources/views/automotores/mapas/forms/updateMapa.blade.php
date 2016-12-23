
<div class="form-group">
    <center><label for="">Título</label></center>
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
    <input type="text" class="form-control input-sm" readonly="readonly" name="lat" id="lat"  placeholder="Mueva la posición para generar este campo" value="{!!$mapa->lat!!}" >
</div>
<div class="form-group">
    <label for="">Longitud:</label>
    <input type="text" class="form-control input-sm" readonly="readonly" name="lng" placeholder="Mueva la posición para generar este campo" value="{!!$mapa->lng!!}">
</div>
                