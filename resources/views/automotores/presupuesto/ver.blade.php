<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>factura</title>
	{!! Html::style('css/pdf/pdf2.css') !!}
</head>
<body>
   <center><h1>PRESUPUESTO DE VIAJE</h1></center>
<main>
<table border="2x"rowspan="2" colspan="1"style="border-width: 2px; border-style: double; border-color: black; ">
    <tr>
        <td id="cen" colspan="5" style="border-width: 2px; border-style: double; border-color: black; "><b>VIAJE </b></td>
        <td id="cen" colspan="1"style="border-width: 2px; border-style: double; border-color: black; "><b> Ruta </b></td>
        <td id="cen" colspan="1"style="border-width: 2px; border-style: double; border-color: black; "><b> Km</b></td> 
	</tr>
	<tr>
        <td rowspan="3"> N° {{$presupuesto->id}} </td>
        <td rowspan="3" colspan="4">Vehiculo: {{$presupuesto->vehiculo}}<br /> Chofer: {{$presupuesto->chofer}} <br /> Responsable: {{$presupuesto->responsable}}<br />
        <td colspan="1"> Recorido Adicional </td>
        <td id="de" colspan="1"> {{$presupuesto->km6}}</td>
        </td>       
	</tr>
    <tr>
        <td colspan="1"> {{$presupuesto->ruta1}} </td>
        <td id="de" colspan="1"> {{$presupuesto->km1}}</td>
    </tr>
    <tr>
        <td colspan="1"> {{$presupuesto->ruta2}} </td>
        <td id="de" colspan="1"> {{$presupuesto->km2}}</td>
    </tr>
	<tr >
        <td id="cen" rowspan="2" colspan="1"style="border-width: 2px; border-style: double; border-color: black; "> CANT</td>
        <td id="cen" rowspan="2" colspan="1"style="border-width: 2px; border-style: double; border-color: black; "> UNIDAD</td>
        <td id="cen" rowspan="2" colspan="1"style="border-width: 2px; border-style: double; border-color: black; "> DESCRIPCION</td>
        <td id="cen" rowspan="2" colspan="1"style="border-width: 2px; border-style: double; border-color: black; "> P. UNIT Bs</td>
        <td id="cen" rowspan="2" colspan="1"style="border-width: 2px; border-style: double; border-color: black; "> TOTAL Bs</td>
        <td colspan="1">{{$presupuesto->ruta3}} </td>
        <td colspan="1">{{$presupuesto->km3}} </td>
	</tr>
    <tr>
        <td colspan="1"> {{$presupuesto->ruta4}} </td>
        <td id="de" colspan="1">{{$presupuesto->km4}} </td>
    </tr>
    <tr>
        <td id="de" colspan="1"> {{$presupuesto->can_d}}</td>
        <td colspan="1"> Litros</td>
        <td colspan="1"> Diesel</td>
        <td id="de" colspan="1"> {{$presupuesto->uni_d}}</td>
        <td id="de" colspan="1">  {{$presupuesto->total_d}}</td>
        <td colspan="1">{{$presupuesto->ruta5}} </td>
        <td id="de" colspan="1">{{$presupuesto->km5}}</td>
    </tr>
    <tr>
        <td id="de" colspan="1"> {{$presupuesto->can_vc}}</td>
        <td colspan="1"> dia</td>
        <td colspan="1"> Viáticos Ciudad</td>
        <td id="de" colspan="1"> {{$presupuesto->uni_vc}}</td>
        <td id="de" colspan="1"> {{$presupuesto->total_vc}}</td>
        <td colspan="1"> </td>
        <td id="de" colspan="1"> </td>
    </tr>
    <tr>
        <td id="de" colspan="1"> {{$presupuesto->can_vp}}</td>
        <td colspan="1"> dia</td>
        <td colspan="1"> Viáticos provincia</td>
        <td id="de" colspan="1"> {{$presupuesto->uni_vp}}</td>
        <td id="de" colspan="1"> {{$presupuesto->total_vp}}</td>
        <td colspan="2"style="border-width: 2px; border-style: double; border-color: black; "> <b>TOTAL RECORRIDO(Km) {{$presupuesto->total_rec}}</b></td>
    </tr>
    <tr>
        <td id="de" colspan="1"> {{$presupuesto->can_p}}</td>
        <td colspan="1"> global</td>
        <td colspan="1"> Peajes ida y vuelta</td>
        <td id="de" colspan="1"> {{$presupuesto->uni_p}}</td>
        <td id="de" colspan="1"> {{$presupuesto->total_p}}</td>
        <td colspan="1"> Combustible</td>
        <td id="de" colspan="1"> {{$presupuesto->can_d}}</td>
    </tr>
    <tr>
        <td id="de" colspan="1"> {{$presupuesto->can_m}}</td>
        <td colspan="1"> global</td>
        <td colspan="1"> Mantenimiento</td>
        <td id="de" colspan="1"> {{$presupuesto->uni_m}}</td>
        <td id="de" colspan="1"> {{$presupuesto->total_m}}</td>
        <td colspan="1"> Con Pedido</td>
        <td id="de" colspan="1"> 0.00</td>
    </tr>
    <tr>
        <td id="de" colspan="1"> {{$presupuesto->can_g}}</td>
        <td colspan="1"> global</td>
        <td colspan="1"> garaje</td>
        <td id="de" colspan="1"> {{$presupuesto->uni_g}}</td>
        <td id="de" colspan="1"> {{$presupuesto->total_g}}</td>
        <td colspan="1"> Con Carta</td>
        <td id="de" colspan="1"> {{$presupuesto->can_d}}</td>
    </tr>
    <tr>
        <td id="de" colspan="4"style="border-width: 2px; border-style: double; border-color: black; "> <b>TOTAL (a) bs</b> </td>
        <td id="de" colspan="1"style="border-width: 2px; border-style: double; border-color: black; "><b>{{$presupuesto->total_a}}</b></td>
        <td colspan="1"style="border-width: 2px; border-style: double; border-color: black; "><b> TOTAL COMBUSTIBLE(lt)</b></td>
        <td id="de" colspan="1"style="border-width: 2px; border-style: double; border-color: black; "> <b>{{$presupuesto->can_d}}</b></td>
    </tr>
    <tr>
        <td id="de" colspan="1"> {{$presupuesto->can_1}}</td>
        <td colspan="1"> pasaje</td>
        <td colspan="1"> {{$presupuesto->ruta_7}}</td>
        <td id="de" colspan="1"> {{$presupuesto->uni_1}}</td>
        <td id="de" colspan="1"> {{$presupuesto->total_1}}</td>
        <td colspan="2"> VIAJE {{$presupuesto->dia}} DIAS:{{$presupuesto->fecha_final}}</td>
        
    </tr>
    <tr>
        <td id="de" colspan="1"> {{$presupuesto->can_2}}</td>
        <td colspan="1"> pasaje</td>
        <td colspan="1"> {{$presupuesto->ruta_7}}</td>
        <td id="de" colspan="1"> {{$presupuesto->uni_2}}</td>
        <td id="de" colspan="1"> {{$presupuesto->total_2}}</td>
        <td colspan="1"> Fecha de solicitud en S.A.</td>
        <td colspan="1"> {{$presupuesto->fecha_sa}}</td>
    </tr>
    <tr>
        <td id="de" colspan="1"> 0.0</td>
        <td colspan="1"> global</td>
        <td colspan="1"> Flete por transporte</td>
        <td id="de" colspan="1"> 0.0</td>
        <td id="de" colspan="1"> 0.0</td>
        <td colspan="1"> Fecha de viajes</td>
        <td colspan="1"> {{$presupuesto->fecha_inicial}}</td>
    </tr>
    <tr>
        <td id="de" colspan="4"style="border-width: 2px; border-style: double; border-color: black; "> <b>TOTAL (b) bs </b></td>
        <td id="de" colspan="1"style="border-width: 2px; border-style: double; border-color: black; "><b>{{$presupuesto->total_b}}</b></td>
        <td colspan="1"style="border-width: 2px; border-style: double; border-color: black; "> <b>Diferencia (a) - (b)  Bs.</b></td>
        <td id="de" colspan="1"style="border-width: 2px; border-style: double; border-color: black; "><b> {{$presupuesto->diferencia}}</b></td>
    </tr>
</table>
</main>
        <h4>NOTA: Viaje con {{$presupuesto->can_es }}  Estudiantes,{{$presupuesto->can_do}} Docente, Desarrollo Ing. {{$presupuesto->carrera}} ({{$presupuesto->tipo}}).</h4>
        <h4>Partida: {{$presupuesto->fecha_inicial}} Hrs. {{$presupuesto->tiempo_inicial}} am; Retorno:{{$presupuesto->fecha_final}}Hrs. {{$presupuesto->tiempo_final}} pm (sigla: {{$presupuesto->sigla}}).</h4>
        <h4>Potosi, {{ $date }} (cancelaron viaticos, combustible y peaje los estudiantes).</h4>
        <br /><br />
        <center><h4 >{{$presupuesto->encargado}}<br />ENCARGADO DE AUTOMOTORES </h4></center>
</body>
</html>