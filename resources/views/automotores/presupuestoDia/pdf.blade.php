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
</head><br><center><strong>UNIVERSIDAD AUTÓNOMA TOMÁS FRÍAS <br />DEPARTAMENTO DE INFRAESTRUCTURA <br / > SECCIÓN AUTOMOTORES</strong></center>
<body><br>
   <h1>PRESUPUESTO DE VIAJE <img style="float:right;" src="img/presupuesto.jpg" width="100px"/></h1>
<main>

</main>
    <br>
    <h4>{{ $date }}</h4> <h4><p class="km">{{ $presupuesto->numero }}</p></h4>
    <h4>Señor: {{ $administrador[0] }}</h4> 
    <h4>JEFE DEL DEPARTAMENTO DE INFRAESTRUCTURA</h4>
    <br><br>
    <h3><u><b>Ref.:</b> <strong>Aprobación del presupuesto de viaje por caja</strong></u></h3>
    <br><br>
    <style>
        div {
    text-align: justify;
    text-justify: inter-word;
}
    </style>
    <div ><h4>A solicitud de la vuelta Nro. {{ $presupuesto->vuelta }} con fecha {{ $presupuesto->fechavu }}, conforme señala la misma. Se atenderá el viaje en la fecha {{ $viaje->fecha_inicial}}, a cargo del chofer {{ $presupuesto->enviCho->full_name }} con el vehiculo {{ $presupuesto->enviVehi->full_vehiculo }} y con el objetivo de {{ $presupuesto->motivo }}, responsable Lic. {{ $presupuesto->enviEncar->full_name }} el cual se llevará a cabo con el siguiente detalle:</h4>
        
    </div></p><br>
    <main>
<table border="2x"rowspan="2" colspan="5"style="border-width: 2px; border-style: double; border-color: black;" class="body">

    <tr>
        <td class="preti" colspan="1"><strong><center>Ruta</center></strong></td>
        <td class="preti" colspan="1"><strong><center>KM</center></strong></td> 
    </tr>
    <tr>
        <td class="kn" colspan="1">{{ $destino1 }}</td>
        <td class="km" colspan="1">{{ $ruta->kilome }} </td>
    </tr>
    <tr>
        <td class="kn" colspan="1"> {{$destino2}} </td>
        <td class="km" colspan="1"> {{$ruta->k1}}</td>
    </tr>
    @if(!empty($destino3))
        <tr>
            <td class="kn" colspan="1"> {{$destino3}} </td>
            <td class="km" colspan="1"> {{$ruta->k2}}</td>
        </tr>
    @endif
    @if(!empty($destino4))
        <tr>
            <td class="kn"colspan="1">{{$destino4}} </td>
            <td class="km" colspan="1">{{$ruta->k3}} </td>
        </tr>
    @endif
    @if(!empty($destino5))
        <tr>
            <td colspan="1" class="kn"> {{$destino5}} </td>
            <td  colspan="1" class="km">{{$ruta->k4}} </td>
        </tr>
    @endif
    @if(!empty($destino6))
        <tr>
            <td colspan="1" class="kn">{{$destino6}} </td>
            <td colspan="1" class="km" >{{$ruta->k5}}</td>
        </tr>
    @endif
    <tr>
        <td class="kn" colspan="1"> <b>RECORRIDO ADICIONAL</b></td>
        <td class="km" colspan="1"> {{ $ruta->adicional }}</td>
    </tr>
    <tr>
        <td class="km" colspan="2"> <b>TOTAL: {{ $ruta->total }} Km.</b></td>
    </tr>
    <tr>
        <td class="km" colspan="1"> <b>Kilometraje TOTAL:</b></td>
        <td class="kn" colspan="1"> {{ $presupuesto->combustible }} km.</td>
    </tr>
    <tr>
        <td class="km" colspan="1"> <b>Combustible </b></td>
        <td class="kn" colspan="1"> {{ $presupuesto->litros }} Litros.</td>
    </tr>
    <tr>
        <td class="km" colspan="1"> <b>Viáticos</b></td>
        <td class="kn" colspan="1"> {{ $viaje->dias }} Dias.</td>
    </tr>
</table>
    <h4>Es cuanto se informa para fines consiguientes.</h4>
    </main>
    
        <br /><br />
        <center><h4 >Sr. {{$responsable}}<br />ENCARGADO DE AUTOMOTORES </h4></center>
</body>
</html>