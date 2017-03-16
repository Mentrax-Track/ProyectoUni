<?php use Infraestructura\Vehiculo; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Petición de Material</title>
    {!! Html::style('css/pdf/pdf.css') !!}
</head>
<br>

<body >
   <h5 id="log"> UNIVERSIDAD AUTÓNOMA TOMÁS FRÍAS <br>DEPARTAMENTO DE INFRAESTRUCTURA<br>
    <img style="float:center;" src="img/uatf.jpg" width="70px">
   <br>SOLICITUD DE COMPRA DE MATERIAL<br> Sección Mecánica Automotriz</h5>
    <table id="tab" style="border-width: 2px; border-style: double; border-color: black; " > 
        <tr>
            <?php $ve = Vehiculo::where('id',$solicitud->vehiculo_id)->get(['tipog','placa','id'])->lists('tipog')->toArray(); 
                    $pla = Vehiculo::where('id',$solicitud->vehiculo_id)->get(['tipog','placa','id'])->lists('placa')->toArray();?>
            <td colspan="1" class="sa"><strong>Mobilidad:</strong> {{$ve[0]}}</td>   
            <td colspan="1" class="sa"><strong>Placa:</strong> {{$pla[0]}}</td>       
        </tr>
        <tr>
            <td colspan="2" class="sa"><strong>A solicitud de:</strong>  {{$solicitud->chofer}}</td>
        </tr>
        <tr>
            <td colspan="2" class="sa"><strong>Fecha de la solicitud:</strong>  {{$peticion->fecha}}</td>
        </tr>
        <tr>
            <td colspan="1" class="sa"><strong>Nro. Orden:</strong>  {{$peticion->orden}}</td>
            <td colspan="1" class="sa"><strong>Cantidad:</strong>  {{$peticion->cantidad}}</td>
        </tr>
        <tr>
            <td colspan="2" class="sa"><strong>Nombre:</strong>  {{$peticion->nombre}}</td>
        </tr>
        <tr>
            <td colspan="2" class="sa"><strong>Detalle:</strong>  {{$peticion->descripcion}}</td>
        </tr>
        
    </table><br><br><br>
    <table id="tab" style="border-width: 0px; border-color: black; ">
        <tr>
            <td colspan="1" class="sa"><center><strong>Sr. {{$solicitud->chofer}}</strong><br />Cargo:.................<br /> </center></td>
            <td colspan="1"  class="sa"><center><strong>JEFATURA DINF.</strong><br />(Autorización)<br /> </center></td>
        </tr>
        

    </table>
    
</body>
</html>