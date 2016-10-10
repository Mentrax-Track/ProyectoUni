<?php 

use Infraestructura\Vehiculo;

use Infraestructura\User;
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>factura</title>
    {!! Html::style('css/pdf.css') !!}
</head>
<body>
   <center><h1>PRESUPUESTO DE VIAJE</h1></center>
<main>
<table border="2x"rowspan="2" colspan="1"style="border-width: 2px; border-style: double; border-color: black; ">
    <tr>
        <td id="cen" colspan="5" style="border-width: 2px; border-style: double; border-color: black; "><b><center>VIAJE</center> </b></td>
        <td id="cen" colspan="1"style="border-width: 2px; border-style: double; border-color: black; "><b> <center>Ruta</center> </b></td>
        <td id="cen" colspan="1"style="border-width: 2px; border-style: double; border-color: black; "><b> <center>Km</center></b></td> 
    </tr>
    <tr>
    <td rowspan="3"> <center>N° {{$presupuesto->id}}</center> </td>
           
        <td rowspan="3" colspan="4">Vehiculo: {{ $presupuesto->enviVehi->full_vehiculo }}<br/> 
                                    Chofer: {{ $presupuesto->enviCho->full_name }} <br/> 
                                    Responsable: {{$presupuesto->responsable}}<br />
        <td colspan="1">{{ $destino_id[0] }}</td>
        <td id="de" colspan="1">{{ $ruta->kilome }} </td>
        </td>       
    </tr>
    <tr>
        <td colspan="1"> {{$dest1[0]}} </td>
        <td id="de" colspan="1"> {{$ruta->k1}}</td>
    </tr>
    <tr>
        <td colspan="1"> {{$dest2[0]}} </td>
        <td id="de" colspan="1"> {{$ruta->k2}}</td>
    </tr>
    <tr >
        <td id="cen" rowspan="2" colspan="1"style="border-width: 2px; border-style: double; border-color: black; "> CANT</td>
        <td id="cen" rowspan="2" colspan="1"style="border-width: 2px; border-style: double; border-color: black; "> UNIDAD</td>
        <td id="cen" rowspan="2" colspan="1"style="border-width: 2px; border-style: double; border-color: black; "> DESCRIPCION</td>
        <td id="cen" rowspan="2" colspan="1"style="border-width: 2px; border-style: double; border-color: black; "> P. UNIT Bs</td>
        <td id="cen" rowspan="2" colspan="1"style="border-width: 2px; border-style: double; border-color: black; "> TOTAL Bs</td>
        <td colspan="1">{{$dest3[0]}} </td>
        <td colspan="1">{{$ruta->k3}} </td>
    </tr>
    <tr>
        <td colspan="1"> {{$dest4[0]}} </td>
        <td id="de" colspan="1">{{$ruta->k4}} </td>
    </tr>
    <tr>
        <td id="de" colspan="1"> {{$presupuesto->cantidad1}}</td>
        <td colspan="1"> Litros</td>
        <td colspan="1"> Diesel</td>
        <td id="de" colspan="1"> {{$presupuesto->precio1}}</td>
        <td id="de" colspan="1">  {{$presupuesto->total1C}}</td>
        <td colspan="1">{{$dest5[0]}} </td>
        <td id="de" colspan="1">{{$ruta->k5}}</td>
    </tr>
    <tr>
        <td id="de" colspan="1"> {{$presupuesto->cantidad2}}</td>
        <td colspan="1"> dia</td>
        <td colspan="1"> Viáticos Ciudad</td>
        <td id="de" colspan="1"> {{$presupuesto->precio2}}</td>
        <td id="de" colspan="1"> {{$presupuesto->total2VC}}</td>
        <td colspan="1"> RECORRIDO ADICIONAL</td>
        <td id="de" colspan="1"> {{ $ruta->adicional }}</td>
    </tr>
    <tr>
        <td id="de" colspan="1"> {{$presupuesto->cantidad3}}</td>
        <td colspan="1"> dia</td>
        <td colspan="1"> Viáticos provincia</td>
        <td id="de" colspan="1"> {{$presupuesto->precio3}}</td>
        <td id="de" colspan="1"> {{$presupuesto->total3VP}}</td>
        <td colspan="2"style="border-width: 2px; border-style: double; border-color: black; "> <b>TOTAL RECORRIDO(Km) {{ $ruta->total }}</b></td>
    </tr>
    <tr>
        <td id="de" colspan="1"> {{$presupuesto->cantidad4}}</td>
        <td colspan="1"> dia</td>
        <td colspan="1"> Viáticos Frontera</td>
        <td id="de" colspan="1"> {{$presupuesto->precio4}}</td>
        <td id="de" colspan="1"> {{$presupuesto->total4VF}}</td>
        
    </tr>
    <tr>
        <td id="de" colspan="1"> {{$presupuesto->cantidad5}}</td>
        <td colspan="1"> global</td>
        <td colspan="1"> Peajes ida y vuelta</td>
        <td id="de" colspan="1"> {{$presupuesto->precio5}}</td>
        <td id="de" colspan="1"> {{$presupuesto->total5P}}</td>
        <td colspan="1"> Combustible</td>
        <td id="de" colspan="1"> {{"veinti tres"}}</td>
    </tr>
    <tr>
        <td id="de" colspan="1"> {{$presupuesto->cantidad6}}</td>
        <td colspan="1"> global</td>
        <td colspan="1"> Mantenimiento</td>
        <td id="de" colspan="1"> {{$presupuesto->precio6}}</td>
        <td id="de" colspan="1"> {{$presupuesto->total6M}}</td>
        <td colspan="1"> Con Pedido</td>
        <td id="de" colspan="1"> 0.00</td>
    </tr>
    <tr>
        <td id="de" colspan="1"> {{$presupuesto->cantidad7}}</td>
        <td colspan="1"> global</td>
        <td colspan="1"> garaje</td>
        <td id="de" colspan="1"> {{$presupuesto->precio7}}</td>
        <td id="de" colspan="1"> {{$presupuesto->total7G}}</td>
        <td colspan="1"> Con Carta</td>
        <td id="de" colspan="1"> {{"d"}}</td>
    </tr>
    <tr>
        <td id="de" colspan="4"style="border-width: 2px; border-style: double; border-color: black; "> <b>TOTAL (a) bs</b> </td>
        <td id="de" colspan="1"style="border-width: 2px; border-style: double; border-color: black; "><b>{{$presupuesto->total8T}}</b></td>
        <td colspan="1"style="border-width: 2px; border-style: double; border-color: black; "><b> TOTAL COMBUSTIBLE(lt)</b></td>
        <td id="de" colspan="1"style="border-width: 2px; border-style: double; border-color: black; "> <b>{{"f"}}</b></td>
    </tr>
    <tr>
        <td id="de" colspan="1"> {{$presupuesto->p1}}</td>
        <td colspan="1"> pasaje</td>
        <td colspan="1"> {{$presupuesto->r1}}</td>
        <td id="de" colspan="1"> {{$presupuesto->c1}}</td>
        <td id="de" colspan="1"> {{$presupuesto->t1}}</td>
        <td colspan="2"> VIAJE {{"c"}} DIAS:{{"s"}}</td>
        
    </tr>
    <tr>
        <td id="de" colspan="1"> {{$presupuesto->p2}}</td>
        <td colspan="1"> pasaje</td>
        <td colspan="1"> {{$presupuesto->r2}}</td>
        <td id="de" colspan="1"> {{$presupuesto->c2}}</td>
        <td id="de" colspan="1"> {{$presupuesto->t2}}</td>
        <td colspan="1"> Fecha de solicitud en S.A.</td>
        <td colspan="1"> {{$presupuesto->fecha_sa}}</td>
    </tr>
    <tr>
        <td id="de" colspan="1"> {{ $presupuesto->p3 }}</td>
        <td colspan="1"> global</td>
        <td colspan="1"> Flete por transporte</td>
        <td id="de" colspan="1"> {{ $presupuesto->c3 }}</td>
        <td id="de" colspan="1"> {{ $presupuesto->t3 }}</td>
        <td colspan="1"> Fecha de viajes</td>
        <td colspan="1"> {{"h"}}</td>
    </tr>
    <tr>
        <td id="de" colspan="4"style="border-width: 2px; border-style: double; border-color: black; "> <b>TOTAL (b) bs </b></td>
        <td id="de" colspan="1"style="border-width: 2px; border-style: double; border-color: black; "><b>{{$presupuesto->tt}}</b></td>
        <td colspan="1"style="border-width: 2px; border-style: double; border-color: black; "> <b>Diferencia (a) - (b)  Bs.</b></td>
        <td id="de" colspan="1"style="border-width: 2px; border-style: double; border-color: black; "><b> {{$presupuesto->diferencia}}</b></td>
    </tr>
</table>
</main>
        <!--<h4>NOTA: Viaje con {{$presupuesto->can_es }}  Estudiantes,{{$presupuesto->can_do}} Docente, Desarrollo Ing. {{$presupuesto->carrera}} ({{$presupuesto->tipo}}).</h4>
        <h4>Partida: {{$presupuesto->fecha_inicial}} Hrs. {{$presupuesto->tiempo_inicial}} am; Retorno:{{$presupuesto->fecha_final}}Hrs. {{$presupuesto->tiempo_final}} pm (sigla: {{$presupuesto->sigla}}).</h4>
        <h4>Potosi, {{ $date }} (cancelaron viaticos, combustible y peaje los estudiantes).</h4>
        <br /><br />
        <center><h4 >{{$presupuesto->encargado}}<br />ENCARGADO DE AUTOMOTORES </h4></center>-->
</body>
</html>