@extends('automotores.admin')

@section('subtitulo','Detalle de las recargas')
    
@section('content')
@include('alertas.success')
<br>
<div class="panel panel-success">
    
    <div class="panel-heading text-center"><h4><p class="www">Detalle de Recargas</p></h4></div>
    <div class="panel-body jumbotron">
       
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-condensed "><br>
            <tr class="info text-center">
                <th class="text-center">#</th>
                <th class="text-center">Vehículo</th>
                <th class="text-center">Gasolina<br /> Litros</th>
                <th class="text-center">Precio</th>
                <th class="text-center">Bs.</th>
                <th class="text-center">Diesel<br /> Litros</th>
                <th class="text-center">Precio</th>
                <th class="text-center">Bs.</th>
                <th class="text-center">GNV<br /> m³</th>
                <th class="text-center">Precio</th>
                <th class="text-center">Bs.</th>
                <th class="text-center">Fecha de Recarga</th>
            </tr><?php $i=1; ?>
            @foreach($detalleAhora as $key => $dea)
                <tbody>
                    <tr>
                        <td  class="info text-center"><center><font color="blue">{{ $i++ }}</font> </center></td>
                        <td><font color="blue">{{ $dea->enviarVehiculo->full_vehiculo }}</font> </td>
                        <td class="danger text-center"><font color="blue"> {{ $dea->gasolina }}</font> </td>
                        <td class="danger text-center">{{ $dea->prega }}</td>
                        <td class="danger text-center">{{ $dea->toga }}</td>
                        <td class="success text-center"><font color="blue"> {{ $dea->diesel }}</font> </td>                        
                        <td class="success text-center">{{ $dea->predi }}</td>
                        <td class="success text-center">{{ $dea->todi }}</td>
                        <td class="info text-center"><font color="blue"> {{ $dea->gnv }} </font></td>                        
                        <td class="info text-center">{{ $dea->pregn }}</td>
                        <td class="info text-center">{{ $dea->togn }}</td>
                        <td class="text-center"><font color="blue"> {{ $dea->fecha }}</font> </td>
                        
                    </tr>
                </tbody>
            @endforeach

            <?php $ga1 = 0; $toga1 = 0; ?>
            @foreach($detalleAhora as $key => $value)
                <?php $ga1 = $ga1+$value->gasolina; 
                      $toga1 = $toga1+$value->toga;
                ?> 
            @endforeach
            <?php $di1 = 0; $todi1 = 0; ?>
            @foreach($detalleAhora as $key => $value)
                <?php $di1 = $di1+$value->diesel; 
                      $todi1 = $todi1+$value->todi;
                ?> 
            @endforeach
            <?php $gnv1 = 0; $togn1 = 0; ?>
            @foreach($detalleAhora as $key => $value)
                <?php $gnv1 = $gnv1+$value->gnv; 
                      $togn1 = $togn1+$value->togn;
                ?> 
            @endforeach

            @foreach($detalle as $key => $de)
                <tbody>
                    <tr>
                        <td  class="info text-center"><center>{{ $i++ }}</center></td>
                        <td>{{ $de->enviarVehiculo->full_vehiculo }}</td>
                        <td class="danger text-center">{{ $de->gasolina }}</td>
                        <td class="danger text-center">{{ $de->prega }}</td>
                        <td class="danger text-center">{{ $de->toga }}</td>
                        <td class="success text-center">{{ $de->diesel }}</td>
                        <td class="success text-center">{{ $de->predi }}</td>
                        <td class="success text-center">{{ $de->todi }}</td>
                        <td class="info text-center">{{ $de->gnv }}</td>
                        <td class="info text-center">{{ $de->pregn }}</td>
                        <td class="info text-center">{{ $de->togn }}</td>
                        <td class="text-center">{{ $de->fecha }}</td>
                        
                    </tr>
                </tbody>
            @endforeach

            <?php $ga2 = 0; $toga2 = 0; ?>
            @foreach($detalle as $key => $value)
                <?php $ga2 = $ga2+$value->gasolina; 
                      $toga2 = $toga2+$value->toga;
                ?> 
            @endforeach
            <?php $di2 = 0; $todi2 = 0; ?>
            @foreach($detalle as $key => $value)
                <?php $di2 = $di2+$value->diesel; 
                      $todi2 = $todi2+$value->todi;
                ?> 
            @endforeach
            <?php $gnv2 = 0; $togn2 = 0; ?>
            @foreach($detalle as $key => $value)
                <?php $gnv2 = $gnv2+$value->gnv; 
                      $togn2 = $togn2+$value->togn;
                ?> 
            @endforeach
        <tr>
             <td colspan="2" rowspan="3"><center><strong>Total:</strong></center></td>
              
             <td colspan="1" rowspan="3" class="danger"><center><strong>{{$ga1+$ga2}}</strong> Litros.</center></td>
             <td colspan="1" rowspan="3" class="danger"><center><strong>Total:</strong></center></td> 
             <td colspan="1" rowspan="3" class="danger"><center><strong>{{ $toga1+$toga2 }} </strong>Bs.</center></td>
             <td colspan="1" rowspan="3" class="success"><center><strong>{{$di1+$di2}}</strong> Litros.</center></td>
             <td colspan="1" rowspan="3" class="success"><center><strong>Total:</strong></center></td>
             <td colspan="1" rowspan="3" class="success"><center><strong>{{ $todi1+$todi2 }} </strong>Bs.</center></td>
             <td colspan="1" rowspan="3" class="info"><center><strong>{{$gnv1+$gnv2}}</strong> m³.</center></td>
             <td colspan="1" rowspan="3" class="info"><center><strong>Total:</strong></center></td>
             <td colspan="1" rowspan="3" class="info"><center><strong>{{ $togn1+$togn2 }} </strong>Bs.</center></td>
        </tr>
        </table>
        <?php 
            $total1 = $detalleAhora->total();
            $total2 = $detalle->total();
            $resultado = $total1+$total2;
         ?>
        <p class="text-center">Existen {{ $resultado }} registros</p>
      </div>
    </div>
</div>
@stop