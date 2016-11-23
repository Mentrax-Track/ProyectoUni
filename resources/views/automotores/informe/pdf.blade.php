<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Informe de Viaje</title>
    {!! Html::style('css/pdf/pdf.css') !!}
</head><br><center><strong>UNIVERSIDAD AUTÓNOMA TOMÁS FRÍAS</strong></center>
<body>
   <h1>INFORME GENERAL DE VIAJE <img style="float:right;" src="img/informe.jpg" width="100px"/></h1>
<main>
<table border="2x"rowspan="1" colspan="1"style="border-width: 2px; border-style: double; border-color: black;" class="body">
    <tr>
        <td class="km" colspan="6"><center><strong>DATOS GENERALES</strong></center></td>
    </tr>
    <tr>
        <td class="kn" colspan="1"><center><strong>CONDUCTOR:</strong></center></td>
        <td class="ks" colspan="2">{{ $informe->enviCho->full_name }}</td>
        <td class="kn" colspan="1"><center><strong>VEHÍCULO:</strong></center></td>
        <td class="ks" colspan="2">{{ $informe->enviVehi->full_vehiculo }}</td> 
    </tr>
    <tr>
        <td class="kn" colspan="1"><center><strong>RESPONSABLE:</strong></center></td>
        <td class="ks" colspan="2">{{ $informe->enviEncar->full_name }}</td>
        <td class="kn" colspan="1"><center><strong>ENTIDAD:</strong></center></td>
        <td class="ks" colspan="2">{{ $informe->entidad }}</td>
    </tr>
    <tr>
        <td class="km" colspan="6"><center><strong>DATOS GENERALES</strong></center></td>
    </tr>
        <tr>
        <td class="kn" colspan="2"><center><strong>PASAJEROS:</strong> {{ $informe->pasajeros }}</center></td>
        <td class="kn" colspan="2"><center><strong>KILOMETRAJE DESIGNADO:</strong> {{ $informe->kmtotal }}</center></td>
        <td class="kn" colspan="2"><center><strong>DIAS DE VIAJE:</strong> {{ $informe->dias }}</center></td>
    </tr>
    <tr>
        <td class="km" colspan="6"><center><strong>DATOS DE PARTIDA</strong></center></td>
    </tr>
    <tr>
        <td class="kn" colspan="2"><center><strong>FECHA DE SALIDA:</strong> {{ $informe->fechapartida }}</center></td>
        <td class="kn" colspan="2"><center><strong>KILOMETRAJE:</strong> {{ $informe->kilopartida }}</center></td>
        <td class="kn" colspan="2"><center><strong>HORA:</strong> {{ $informe->tiempopartida }}</center></td>
    </tr>
    <tr>
        <td class="km" colspan="6"><center><strong>DATOS DE LLEGADA</strong></center></td>
    </tr>
        <tr>
        <td class="kn" colspan="2"><center><strong>FECHA DE LLEGADA:</strong> {{ $informe->fechallegada }}</center></td>
        <td class="kn" colspan="2"><center><strong>KILOMETRAJE:</strong> {{ $informe->kilollegada }}</center></td>
        <td class="kn" colspan="2"><center><strong>HORA:</strong> {{ $informe->tiempollegada }}</center></td>
    </tr>
    <tr>
        <td class="km" colspan="6"><center><strong>VIÁTICOS</strong></center></td>
    </tr>
        <tr>
        <td class="kn" colspan="2"><center><strong>CIUDAD:</strong> {{ $informe->viaticoa }}</center></td>
        <td class="kn" colspan="2"><center><strong>PROVINCIA:</strong> {{ $informe->viaticob }}</center></td>
        <td class="kn" colspan="2"><center><strong>FRONTERA:</strong> {{ $informe->viaticoc }}</center></td>
    </tr>
    <tr>
        <td class="km" colspan="6"><center><strong>DATOS DEL RECARGUE Y COMPRA DEL COMBUSTIBLE</strong></center></td>
    </tr>
        <tr>
        <td class="kn" colspan="1"><center><strong>RECARGUE 1:</strong> {{ $informe->recargue1 }} Lts.</center></td>
        <td class="kn" colspan="1"><center><strong>Compra 1:</strong> {{ $informe->compra1 }} Bs.</center></td>
        <td class="kn" colspan="1"><center><strong>RECARGUE 2:</strong> {{ $informe->recargue2 }} Lts.</center></td>
        <td class="kn" colspan="1"><center><strong>Compra 2:</strong> {{ $informe->compra2 }} Bs.</center></td>
        <td class="ks" colspan="1"><center><strong>RECARGUE 3:</strong> {{ $informe->recargue3 }} Lts.</center></td>
        <td class="kn" colspan="1"><center><strong>Compra 3:</strong> {{ $informe->compra3 }} Bs.</center></td>
    </tr>
    </tr>
        <tr>
        <td class="kn" colspan="3"><center><strong>TOTAL RECARGUE:</strong> {{ $informe->combustotalu }} Bs.</center></td>
        <td class="kn" colspan="3"><center><strong>TOTAL COMPRA:</strong> {{ $informe->combustotalco }} Bs.</center></td>
    </tr>
    <tr>
        <td class="km" colspan="6"><center><strong>PEAJES E IMPREVISTOS</strong></center></td>
    </tr>
    <tr>
        <td class="kn" colspan="1"><center><strong>DESCRIPCIÓN:</strong></center></td>
        <td class="ks" colspan="5"><center>{{ $informe->descripe }}</center></td>
    </tr>
    </tr>
    <tr>
        <td class="kn" colspan="2"><center><strong>MONTO DE PEAJES:</strong> {{ $informe->montope }} Bs.</center></td>
        <td class="kn" colspan="2"><center><strong>MONTO DE IMPREVISTOS:</strong> {{ $informe->montoim }} Bs.</center></td>
        <td class="kn" colspan="2"><center><strong>TOTAL:</strong> {{ $informe->totalpeim }} Bs.</center></td>
    </tr>
    <tr>
        <td class="km" colspan="6"><center><strong>DEVOLUCIONES</strong></center></td>
    </tr>
    <tr>
        <td class="kn" colspan="2"><center><strong>COMBUSTIBLE: </strong> {{ $debolu->combus }} Bs.</center></td>
        <td class="ks" colspan="2"><center><strong>PEAJES: </strong> {{ $debolu->peaje }} Bs.</center></td>
        <td class="kn" colspan="1"><center><strong>IMPREVISTOS: </strong> {{ $debolu->impre }} Bs.</center></td>
        <td class="kn" colspan="1"><center><strong>TOTAL: </strong>{{ $debolu->totalcopeim }} Bs.</center></td>
    </tr>
    <tr>
        <td class="kn" colspan="6"><center><strong>INFORME SOBRE LA DELEGACIÓN</strong></center></td>
    </tr>
    <tr>
        <td class="kn" colspan="6">{{ $informe->delegacion }}</td>
    </tr>
    <tr>
        <td class="kn" colspan="6"><center><strong>INFORME TÉCNICO VEHICULAR</strong></center></td>
    </tr>
    <!--
    <tr>
        <td class="kn" colspan="6"><strong>OBJETOS: </strong> <?php //foreach ($vehiculo as $key => $value): ?>
            <?php $resul //= substr($value,3);
                    //echo "$resul, "; ?>
        <?php //endforeach ?></td>
    </tr>-->
    <tr>
        <td class="kn" colspan="6"><strong>OBJETOS: </strong>
            <?php foreach ($vehiculo as $key => $value): ?>
                {{ $value }}
            <?php endforeach ?>
        </td>
    </tr>
    <tr>
        <td class="kn" colspan="6"><strong>DESCRIPCIÓN:</strong> {{ $informe->descripmante }}</td>
    </tr>
    <tr>
        <td class="kn" colspan="6"><center><strong>RECOMENDACIÓN SOBRE EL VEHÍCULO</strong></center></td>
    </tr>
    <tr>
        <td class="kn" colspan="6">
            {{ $informe->recomendacion }}
        </td>
    </tr>
    <tr>
        <td class="kn" colspan="3"><br><br><br>
            <center>
                {{ $informe->enviCho->full_name }}<br>
                <strong>Chofer de Servicio</strong><br>
            </center>
                <strong>Fecha: </strong>{{ $date }}
            
        </td>
        <td class="kn" colspan="3"><br><br><br>
            <center>
                {{ $informe->enviEncar->full_name }}<br>
                <strong>Encargado de Viaje</strong><br>
            </center>
                <strong>Fecha:</strong>
            
        </td>
    </tr>
    <tr>
        <td class="kn" colspan="3"><br><br><br>
            <center>
                {{ $informe->enviCho->full_name }}<br>
                <strong>Encargado de Automotores</strong><br>
            </center>
                <strong>Fecha:</strong>
            
        </td>
        <td class="kn" colspan="3"><br><br><br>
            <center>
                {{ $informe->enviEncar->full_name }}<br>
                <strong>Jefe de Infraestructura</strong><br>
            </center>
                <strong>Fecha:</strong>
            
        </td>
    </tr>
</table>
</main>    
</body>
</html>