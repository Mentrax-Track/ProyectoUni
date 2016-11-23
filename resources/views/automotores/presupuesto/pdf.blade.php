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
</head><br><center><strong>UNIVERSIDAD AUTÓNOMA TOMÁS FRÍAS</strong></center>
<body>
   <h1>PRESUPUESTO DE VIAJE <img style="float:right;" src="img/presupuesto.jpg" width="100px"/></h1>
<main>
<table border="2x"rowspan="2" colspan="1"style="border-width: 2px; border-style: double; border-color: black;" class="body">
    <tr>
        <td class="preti" colspan="5"><strong><center>VIAJE ({{ $viaje->tipo }})</center></strong></td>
        <td class="preti" colspan="1"><strong><center>Ruta</center></strong></td>
        <td class="preti" colspan="1"><strong><center>KM</center></strong></td> 
    </tr>
    <tr>
    <td rowspan="3" style="font-size:90%;"> <center><strong>N°</strong> {{$presupuesto->id}}</center> </td>
           
        <td rowspan="3" colspan="4" style="font-size:90%;"><strong>Vehículo: </strong>{{ $presupuesto->enviVehi->full_vehiculo }}<br/> 
                                    <strong>Chofer: </strong> {{ $presupuesto->enviCho->full_name }} <br/> 
                                    <strong> Responsable:</strong> {{$presupuesto->enviEncar->full_name}}<br />
                <td class="kn" colspan="1">{{ $destino1 }}</td>
                <td class="km" colspan="1">{{ $ruta->kilome }} </td>
        </td>       
    </tr>
    <tr>
        <td class="kn" colspan="1"> {{$destino2}} </td>
        <td class="km" colspan="1"> {{$ruta->k1}}</td>
    </tr>
    <tr>
        <td class="kn" colspan="1"> {{$destino3}} </td>
        <td class="km" colspan="1"> {{$ruta->k2}}</td>
    </tr>
    <tr>
        <td class="kn" rowspan="2"> <strong><center>CANT.</center></strong></td>
        <td class="kn" rowspan="2" colspan="1"> <strong><center>UNIDAD</center></strong></td>
        <td class="kn" rowspan="2" colspan="1"> <strong><center>DESCRIPCIÓN</center></strong></td>
        <td class="kn" rowspan="2" colspan="1"><strong><center>p/u Bs.</center></strong></td>
        <td class="kn" rowspan="2" colspan="1"> <strong><center>TOTAL Bs.</center></strong></td>
        <td class="kn"colspan="1">{{$destino4}} </td>
        <td class="km" colspan="1">{{$ruta->k3}} </td>
    </tr>
    <tr>
        <td colspan="1" class="kn"> {{$destino5}} </td>
        <td  colspan="1" class="km">{{$ruta->k4}} </td>
    </tr>
    <tr>
        <td class="km" colspan="1"> {{$presupuesto->cantidad1}}</td>
        <td colspan="1" class="kn"> Litros</td>
        <td colspan="1" class="kn"> Diesel</td>
        <td class="km" colspan="1"> {{$presupuesto->precio1}}</td>
        <td class="km" colspan="1">  {{$presupuesto->total1C}}</td>
        <td colspan="1" class="kn">{{$destino6}} </td>
        <td colspan="1" class="km" >{{$ruta->k5}}</td>
    </tr>
    <tr>
        <td class="km" colspan="1"> {{$presupuesto->cantidad2}}</td>
        <td colspan="1" class="kn"> dia</td>
        <td colspan="1" class="kn"> Viáticos Ciudad</td>
        <td class="km" colspan="1"> {{$presupuesto->precio2}}</td>
        <td class="km" colspan="1"> {{$presupuesto->total2VC}}</td>
        <td class="kn" colspan="1"> <b>RECORRIDO ADICIONAL</b></td>
        <td class="km" colspan="1"> {{ $ruta->adicional }}</td>
    </tr>
    <tr>
        <td class="km" colspan="1"> {{$presupuesto->cantidad3}}</td>
        <td colspan="1" class="kn"> dia</td>
        <td colspan="1" class="kn"> Viáticos provincia</td>
        <td class="km" colspan="1"> {{$presupuesto->precio3}}</td>
        <td class="km" colspan="1"> {{$presupuesto->total3VP}}</td>
        <td class="km" colspan="2"> <b>RECORRIDO TOTAL: {{ $ruta->total }} Km.</b></td>
        
    </tr>
    <tr>
        <td class="km" colspan="1"> {{$presupuesto->cantidad4}}</td>
        <td colspan="1" class="kn"> dia</td>
        <td colspan="1" class="kn"> Viáticos Frontera</td>
        <td class="km" colspan="1"> {{$presupuesto->precio4}}</td>
        <td class="km" colspan="1"> {{$presupuesto->total4VF}}</td>
        <td colspan="2" class="km"> <center><b>COMBUSTIBLE</b></center> </td>
    </tr>
    <tr>
        <td class="km" colspan="1"> {{$presupuesto->cantidad5}}</td>
        <td colspan="1" class="kn"> Global</td>
        <td colspan="1" class="kn"> Peajes ida y vuelta</td>
        <td class="km" colspan="1"> {{$presupuesto->precio5}}</td>
        <td class="km" colspan="1"> {{$presupuesto->total5P}}</td>
        <td colspan="1" class="km"> <center><u><strong>Combustible</strong></u></center></td>
        <td class="km" colspan="1"> <u><strong>{{$presupuesto->cantidad1}}</strong></u></td>
    </tr>
    <tr>
        <td class="km" colspan="1"> {{$presupuesto->cantidad6}}</td>
        <td colspan="1" class="kn"> Global</td>
        <td colspan="1" class="kn"> Mantenimiento</td>
        <td class="km" colspan="1"> {{$presupuesto->precio6}}</td>
        <td class="km" colspan="1"> {{$presupuesto->total6M}}</td>
        <td colspan="1" class="kn"> Con Pedido</td>
        <td class="km" colspan="1"> {{ $presupuesto->carta1 }}</td>
    </tr>
    <tr>
        <td class="km" colspan="1"> {{$presupuesto->cantidad7}}</td>
        <td colspan="1" class="kn"> Global</td>
        <td colspan="1" class="kn"> Garaje</td>
        <td class="km" colspan="1"> {{$presupuesto->precio7}}</td>
        <td class="km" colspan="1"> {{$presupuesto->total7G}}</td>
        <td colspan="1" class="kn"> Con Carta</td>
        <td class="km" colspan="1"> {{$presupuesto->cantidad1}}</td>
    </tr>
    <tr>
        <?php 
            $carta = $presupuesto->cantidad1;
            $pedido= $presupuesto->carta1;
            $resultadoFinal = ((int)$carta + (int)$pedido);
         ?>
        <td colspan="4" class="km"><b>TOTAL (a) bs.</b></td>
        <td class="kn" colspan="1"><b>{{$presupuesto->total8T}}</b></td>
        <td colspan="2" class="km"><b> COMBUSTIBLE TOTAL: {{$resultadoFinal}} Litros.</b></td>
        
    </tr>
    <tr>
        <td class="km" colspan="1"> {{$presupuesto->p1}}</td>
        <td colspan="1" class="kn"> Pasaje</td>
        <td colspan="1" class="kn"> {{$presupuesto->r1}}</td>
        <td class="km" colspan="1"> {{$presupuesto->c1}}</td>
        <td class="km" colspan="1"> {{$presupuesto->t1}}</td>
        <td colspan="2" class="kn"> Viaje de: {{$viaje->dias}} dias desde el:{{$viaje->fecha_inicial}}</td>
        
    </tr>
    <tr>
        <td class="km" colspan="1"> {{$presupuesto->p2}}</td>
        <td colspan="1" class="kn"> Pasaje</td>
        <td class="kn" colspan="1"> {{$presupuesto->r2}}</td>
        <td class="km" colspan="1"> {{$presupuesto->c2}}</td>
        <td class="km" colspan="1"> {{$presupuesto->t2}}</td>
        <td class="kn" colspan="1"> Fecha de solicitud en S.A.</td>
        <td class="kn" colspan="1"> {{$presupuesto->fecha_sa}}</td>
    </tr>
    <tr>
        <td class="km" colspan="1"> {{ $presupuesto->p3 }}</td>
        <td colspan="1" class="kn"> Global</td>
        <td colspan="1" class="kn"> Flete por transporte</td>
        <td class="km" colspan="1"> {{ $presupuesto->c3 }}</td>
        <td class="km" colspan="1"> {{ $presupuesto->t3 }}</td>
        <td colspan="1" class="kn"> Fecha de Viaje</td>
        <td colspan="1" class="kn"> {{$viaje->fecha_inicial}}</td>
    </tr>
    <tr>
        <td class="km" colspan="4"><b>TOTAL (b) bs.</b></td>
        <td class="kn" colspan="1"><b>{{$presupuesto->tt}}</b></td>
        <td colspan="1" class="km"><b>DIFERENCIA (a) - (b)  Bs.</b></td>
        <td class="kn" colspan="1"><b> {{$presupuesto->diferencia}}</b></td>
    </tr>
</table>
</main>
        <h4><b>NOTA: {{ $presupuesto->nota }} </b> Viaje con {{$viaje->pasajeros }}  estudiantes, {{$presupuesto->ndocentes}} Docente, Carrera {{ $presupuesto->entidad }}, Sigla {{ $presupuesto->sigla }}, Tipo {{ $viaje->tipo }}.</h4>
        <h4><b>Fecha de Partida:</b> {{$viaje->fecha_inicial}} a Hrs. {{$presupuesto->hsalida}}; Retorno:{{$viaje->fecha_final}} a Hrs. {{$presupuesto->hllegada}}.</h4>
        <h4><b>Fecha: </b>Potosi, {{ $date }}.</h4>
        <br /><br /><br /><br />
        <center><h4 >Sr. {{$presupuesto->responsable}}<br />ENCARGADO DE AUTOMOTORES </h4></center>
</body>
</html>