<?php 
use Infraestructura\User;
use Infraestructura\Rol;

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rol de Viajes</title>
    {!! Html::style('css/pdf/pdf.css') !!}
</head>
<body><br>
   <h1>ROL DE VIAJES &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img style="float:right;" src="img/rol.jpg" width="100px"/></h1>
<main>
<table border="2x"rowspan="2" colspan="1"style="border-width: 2px; border-style: double; border-color: black; "  class="body">
    <tr>
        <td class="preti" colspan="1"><strong><center>Nro.</center></strong></td>
        <td class="preti" colspan="1"><strong><center>Chofer</center></strong></td>
        <td class="preti" colspan="1"><strong><center>Ciudad "A"</center></strong></td>
        <td class="preti" colspan="1"><strong><center>Provincia "B"</center></strong></td>
        <td class="preti" colspan="1"><strong><center>Frontera "C"</center></strong></td>
        <td class="preti" colspan="1"><strong><center>Fecha</center></strong></td>
        <td class="preti" colspan="1"><strong><center>#</center></strong></td>
    </tr>
    <?php $ids = 1; ?>
    @foreach ($roles as $value) 
        <tr><?php  $i = $value->chofer_id;
                    $r = User::where('id',$i)
                        ->get(['nombres','apellidos'])
                        ->lists('fullname')->toArray();
                    $nombre = implode($r);?>
            <td class="kn"><center>{{ $ids }}</center></td>
            <td class="kn">{{ $nombre }}</td>
            <td class="kn">{{ $value->tipoa }}</td>
            <td class="kn">{{ $value->tipob }}</td>
            <td class="kn">{{ $value->tipoc }}</td>
            <td class="kn"><center>{{ $value->fecha }}</center></td>
            <td class="kn"><center>{{ $value->cantidad }}</center></td>
        </tr><?php $ids++; ?>
    @endforeach
</table>  
</main><h4 class="km">Fecha: {{ $date }}</h4>
    <h4><b>NOTA: </h4>
        <h4><strong>A) </strong><i>El orden de los choferes se respesta según la llegada del tipo de viaje.</i></h4>
        <h4><strong>B) </strong><i>La fecha muestra la última modificación o designación que se realizó en el rol de viajes.</i></h4>
        <h4><strong>C) </strong><i>El # muestra el número de viajes realizados dentro del rol de cada chofer.</i></h4>
        <br /><br /><br /><br />
        <center><h4 >Sr. {{ $responsable }}<br />ENCARGADO DE AUTOMOTORES </h4></center>
</body>
</html>