<?php 

use Infraestructura\Vehiculo;

use Infraestructura\User;
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Boleta de Salida</title>
    {!! Html::style('css/pdf/pdf.css') !!}
</head>
<br>

<body >
   <h5 id="log"> Departamento de Infraestructura <br>Sección Automotores<br>
    <img style="float:center;" src="img/uatf.jpg" width="70px">
   <br>Salida e Informe</h5>
    <table id="tab" style="border-width: 2px; border-style: double; border-color: black; " > 
        <tr>
            <td colspan="1" class="sa"><strong>Mobilidad:</strong> {{$salida->enviVehi->full_vehiculo}}</td>
            <td colspan="1"  class="sa"><strong>Fecha:</strong> {{ $date }}</td>
        </tr>
        <tr>
            <td colspan="2" class="sa"><strong>Chofer:</strong>  {{$salida->enviCho->full_name}}</td>
        </tr>
        <tr>
            <td colspan="2"  class="sa"><strong>Responsable:</strong>  {{$salida->responsable}}</td>
        </tr>
        <tr>
            <td colspan="2"  class="sa"><strong>Lugar:</strong>  {{$salida->lugar}}</td>
        </tr>
        <tr>
            <td colspan="2"  class="sa"><strong>Motivo:</strong>  {{$salida->motivo}}</td>
        </tr>
        <tr>
            <td colspan="1"  class="sa"><strong>Salida:</strong>  {{$salida->hsalida}}</td>
            <td colspan="1"  class="sa"><strong>Legada:</strong>  {{$salida->hllegada}}</td>
        </tr>
    </table>
    <strong>INFORME DEL RESPONSABLE</strong>
    <table id="tab" style="border-width: 1px; border-style: double; border-color: black; " > 
        <tr>
            <td colspan="3"  class="sa"><strong>..........................................................................................<BR>..........................................................................................<BR>..........................................................................................</strong><BR / ><BR / ><BR / >
            <CENTER>..................................................<br><STRONG>FIRMA</STRONG></CENTER><BR><strong>Fecha:</strong>
            </td>
        </tr>
    </table>
<main><br><br>
    <center><h5 id="log">Sr. {{$responsable}}<br />ENCARGADO DE AUTOMOTORES </h5></center>
</main>
    
</body>
</html>