<?php 
use Infraestructura\User;
use Infraestructura\Rol;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tablero</title>
    {!! Html::style('css/pdf/pdf.css') !!}
</head>
<body><br>
   <h1>Viajes del Mes de {{ $date }} &nbsp;&nbsp;<img style="float:right;" src="img/rol.jpg" width="100px"/></h1>
<main>
<table border="2x"rowspan="2" colspan="1"style="border-width: 2px; border-style: double; border-color: black; "  class="body">
    <tr>
        <td class="kn" colspan="1"><strong><center>Nro.</center></strong></td>
        <td class="kn" colspan="1"><strong><center>Entidad</center></strong></td>
        <td class="kn" colspan="1"><strong><center>Tipo</center></strong></td>
        <td class="kn" colspan="1"><strong><center>Objetivo</center></strong></td>
        <td class="kn" colspan="1"><strong><center>Dias</center></strong></td>
        <td class="kn" colspan="1"><strong><center>Pasajeros</center></strong></td>
        <td class="kn" colspan="1"><strong><center>Fecha Inicial</center></strong></td>
        <td class="kn" colspan="1"><strong><center>Fecha Final</center></strong></td>
        </tr>
        <?php $ids = 1; ?>
        @foreach ($viajes as $via ) 
            <tr>
                <td class="kn"><center>{{ $ids }}</center></td>
                <td class="kn"><center>{{ $via->entidad }}</center></td>
                <td class="kn"><center>{{ $via->tipo }}</center></td>
                <td class="kn"><center>{{ $via->objetivo }}</center></td>
                <td class="kn"><center>{{ $via->dias }}</center></td>
                <td class="kn"><center>{{ $via->pasajeros }}</center></td>
                <td class="kn"><center>{{ $via->fecha_inicial }}</center></td>
                <td class="kn"><center>{{ $via->fecha_final }}</center></td>
            </tr><?php $ids++; ?>
        @endforeach
</table>
{{ $fecha }}
</main><br /><br /><br /><br />
        <center><h4 >Sr. {{$responsable}}<br />ENCARGADO DE AUTOMOTORES </h4></center>
</body>
</html>
