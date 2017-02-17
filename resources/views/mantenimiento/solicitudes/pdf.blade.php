
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Solicitud de Trabajo</title>
    {!! Html::style('css/pdf/pdf.css') !!}
</head>
<br>

<body >
   <h5 id="log"> UNIVERSIDAD AUTÓNOMA TOMÁS FRÍAS <br>DEPARTAMENTO DE INFRAESTRUCTURA<br>
    <img style="float:center;" src="img/uatf.jpg" width="70px">
   <br>SOLICITUD DE TRABAJO INTERNO<br> Mecánica Automotriz</h5>
    <table id="tab" style="border-width: 2px; border-style: double; border-color: black; " > 
        <tr>
            <td colspan="1" class="sa"><strong>Mobilidad:</strong> {{$vehiculo->tipog}}</td>
            <td colspan="1"  class="sa"><strong>Placa:</strong> {{ $vehiculo->placa }}</td>
        </tr>
        <tr>
            <td colspan="2" class="sa"><strong>Fecha:</strong>  {{$date}}</td>
        </tr>
        <tr>
            <td colspan="2"  class="sa"><strong>Accesorios:</strong> 
            @foreach($accesorios as $key => $value)
                {{$value}}
            @endforeach</td>
        </tr>
        <tr>
            <td colspan="2"  class="sa"><strong>Descripción del trabajo a realizar:</strong> </td>
        </tr>
        <tr>
            <td colspan="2"  class="sa">{{$solicitud->descripsoli}}</td>
        </tr>
    </table><br><br><br>
    <table id="tab" style="border-width: 0px; border-color: black; ">
        <tr>
            <td colspan="1" class="sa"><center><strong>Sr. {{$solicitud->chofer}}</strong><br />Cargo:.................<br /> </center></td>
            <td colspan="1"  class="sa"><center><strong>JEFATURA DINF.</strong><br />(Autorización)<br /> </center></td>
        </tr>
        

    </table>
    
</body>
</html>