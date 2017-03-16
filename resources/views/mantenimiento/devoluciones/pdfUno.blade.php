
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Boleta de Devolución</title>
    {!! Html::style('css/pdf/pdf.css') !!}
</head>
<br>

<body >
   <h5 id="log"> Departamento de Infraestructura <br>Sección Automotores<br>
    <img style="float:center;" src="img/uatf.jpg" width="70px">
   <br>Devolución de Material<br> {{$date}}</h5>
    <table id="tab" style="border-width: 2px; border-style: double; border-color: black; " > 
        <tr>
            <td colspan="1" class="sa"><strong>Serial:</strong> {{$devolucion->serial}}</td>
            <td colspan="1"  class="sa"><strong>Cantidad:</strong>  {{$devolucion->cantidad}}</td>
        </tr>
        <tr>
            <td colspan="2"  class="sa"><strong>Fecha de Registro:</strong> {{ $devolucion->fecha}}</td>
        </tr>
        <tr>
            <td colspan="2" class="sa"><strong>Nombre:</strong>  {{$devolucion->nombre}}</td>
        </tr>
        
        <tr>
            <td colspan="2"  class="sa"><strong>Detalle:</strong>  {{$devolucion->detalle}}</td>
        </tr>
    </table>
<main><br><br>
    <center><h5 id="log">Sr. {{$responsable}}<br />ENCARGADO DE AUTOMOTORES </h5></center>
</main>
    
</body>
</html>