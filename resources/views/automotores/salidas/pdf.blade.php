<?php 

use Infraestructura\Vehiculo;

use Infraestructura\User;
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Presupuesto de Viaje</title>
    {!! Html::style('css/pdf/pdf.css') !!}
</head>
<br>

<body >
   <h5 id="log"> Departamento de Infraestructura <br>Div. Servisios Generales<br>
    <img style="float:center;" src="img/uatf.jpg" width="70px">
   <br>Boleta de Salida</h5>
    <table id="tab" style="border-width: 2px; border-style: double; border-color: black; " > 
        <tr>
            <td colspan="1"><strong>Mobilidad:</strong> {{$salida->enviVehi->full_vehiculo}}</td>
            <td colspan="1"><strong>Fecha:</strong> {{ $date }}</td>
        </tr>
        <tr>
            <td colspan="2"><strong>Chofer:</strong>  {{$salida->enviCho->full_name}}</td>
        </tr>
        <tr>
            <td colspan="2"><strong>Responsable:</strong>  {{$salida->responsable}}</td>
        </tr>
        <tr>
            <td colspan="2"><strong>Lugar:</strong>  {{$salida->lugar}}</td>
        </tr>
        <tr>
            <td colspan="2"><strong>Motivo:</strong>  {{$salida->motivo}}</td>
        </tr>
        <tr>
            <td colspan="1"><strong>Salida:</strong>  {{$salida->hsalida}}</td>
            <td colspan="1"><strong>Legada:</strong>  {{$salida->hllegada}}</td>
        </tr>
    </table>
<main><br><br>
    <center><h5 id="log">Sr. {{$responsable}}<br />ENCARGADO DE AUTOMOTORES </h5></center>
</main>
    
</body>
</html>