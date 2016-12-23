@extends('automotores.admin')

@section('subtitulo','Reservas')

@section('content')
@include('alertas.success')
<br>
<div class="panel panel-success">
    
    <div class="panel-heading text-center"><h4><p class="www">Detalle del viaje</p></h4></div>
    <div class="panel-body"> 
        <br>
    <div class="row">
        <div class="col-md-5">
            <h4 class="text-center www"><u> Encargados</u></h4>
            <table class='table table-bordered table-hover table-condensed jumbotron'>
                <tr class="info">
                    <!--<th class="text-center"># Viaje</th>-->
                    <th class="text-center">Nombres</th>
                    <th class="text-center">Apellidos</th>
                    <th class="text-center">Celular</th>
                </tr>
               @foreach ($encargados as $encargado)
                <tbody>
                    <!--<td class="text-center">{{ $encargado->i }}</td>-->
                    <td>{{ $encargado->n }}</td>
                    <td>{{ $encargado->a }}</td>
                    <td class="text-center">{{ $encargado->c }}</td>
                </tbody>
               @endforeach
            </table>    
        </div>
        <div class="col-md-4">
            <h4 class="text-center www"><u> Choferes</u></h4>
            <table class='table table-bordered table-hover table-condensed  jumbotron' >
                <tr class="info">
                    <!--<th class="text-center"># Viaje</th>-->
                    <th class="text-center">Nombres</th>
                    <th class="text-center">Apellidos</th>
                    <th class="text-center">Celular</th>
                </tr>
                @foreach ($choferes as $chofer)
                 <tbody>
                    <!--<td class="text-center">{{ $chofer->i }}</td>-->
                    <td>{{ $chofer->n }}</td>
                    <td>{{ $chofer->a }}</td>
                    <td class="text-center">{{ $chofer->c }}</td>
                 </tbody>   
                @endforeach
            </table>    
        </div>
        <div class="col-md-3">
            <h4 class="text-center www "><u>Vehiculos</u></h4>
            <table class='table table-bordered table-hover table-condensed  jumbotron'>
                <tr class="info">
                    <!--<th class="text-center"># Viaje</th>-->
                    <th class="text-center">Tipo</th>
                    <th class="text-center">placa</th>
                </tr>
                @foreach ($vehiculos as $vehiculo)
                 <tbody>
                    <!--<td class="text-center">{{ $vehiculo->i }}</td>-->
                    <td>{{ $vehiculo->t }}</td>
                    <td>{{ $vehiculo->p }}</td>
                 </tbody>   
                @endforeach
            </table>    
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-8">
            <h4 class="text-center www"><u>Destinos</u></h4>
            <table class='table table-bordered table-hover table-condensed  jumbotron'>
                <tr class="info">
                    <th class="text-center">Dpto. Inicio</th>
                    <th class="text-center">Origen</th>
                    <th class="text-center">Ruta</th>
                    <th class="text-center">Destino</th>
                    <th class="text-center">Dpto. Destino</th>
                    <th class="text-center">Kilometraje</th>
                </tr>
                @foreach ($destinos as $destino)
                 <tbody>
                    <!--<td class="text-center">{{ $destino->i }}</td>-->
                    <td>{{ $destino->ini }}</td>
                    <td>{{ $destino->o }}</td>
                    <td>{{ $destino->r }}</td>
                    <td>{{ $destino->d }}</td>
                    <td>{{ $destino->fin }}</td>
                    <td class="text-center">{{ $destino->k }}</td>
                 </tbody>   
                @endforeach
                @foreach ($desti1 as $destino)
                 <tbody>
                    <!--<td class="text-center">{{ $destino->i }}</td>-->
                    <td>{{ $destino->ini }}</td>
                    <td>{{ $destino->o }}</td>
                    <td>{{ $destino->r }}</td>
                    <td>{{ $destino->d }}</td>
                    <td>{{ $destino->fin }}</td>
                    <td class="text-center">{{ $destino->k }}</td>
                 </tbody>   
                @endforeach
                @foreach ($desti2 as $destino)
                 <tbody>
                    <!--<td class="text-center">{{ $destino->i }}</td>-->
                    <td>{{ $destino->ini }}</td>
                    <td>{{ $destino->o }}</td>
                    <td>{{ $destino->r }}</td>
                    <td>{{ $destino->d }}</td>
                    <td>{{ $destino->fin }}</td>
                    <td class="text-center">{{ $destino->k }}</td>
                 </tbody>   
                @endforeach
                @foreach ($desti3 as $destino)
                 <tbody>
                    <!--<td class="text-center">{{ $destino->i }}</td>-->
                    <td>{{ $destino->ini }}</td>
                    <td>{{ $destino->o }}</td>
                    <td>{{ $destino->r }}</td>
                    <td>{{ $destino->d }}</td>
                    <td>{{ $destino->fin }}</td>
                    <td class="text-center">{{ $destino->k }}</td>
                 </tbody>   
                @endforeach
                @foreach ($desti4 as $destino)
                 <tbody>
                    <!--<td class="text-center">{{ $destino->i }}</td>-->
                    <td>{{ $destino->ini }}</td>
                    <td>{{ $destino->o }}</td>
                    <td>{{ $destino->r }}</td>
                    <td>{{ $destino->d }}</td>
                    <td>{{ $destino->fin }}</td>
                    <td class="text-center">{{ $destino->k }}</td>
                 </tbody>   
                @endforeach
                @foreach ($desti5 as $destino)
                 <tbody>
                    <!--<td class="text-center">{{ $destino->i }}</td>-->
                    <td>{{ $destino->ini }}</td>
                    <td>{{ $destino->o }}</td>
                    <td>{{ $destino->r }}</td>
                    <td>{{ $destino->d }}</td>
                    <td>{{ $destino->fin }}</td>
                    <td class="text-center">{{ $destino->k }}</td>
                 </tbody>   
                @endforeach
            </table>    
        </div>
        <div class="col-md-2">
            
                <h4 class="text-center www"><u>Kilometrajes</u></h4>
                <table class='table table-bordered table-hover table-condensed jumbotron'>
                    <tr class="info">
                        <th class="text-center">Adicional</th>
                    </tr>
                    @foreach ($adici as $a)
                     <tbody>
                        <td class="text-center">{{ $a->adicional }}</td>
                     </tbody>   
                    @endforeach
                    <tr class="info">
                        <th class="text-center">Total</th>
                    </tr>
                    @foreach ($total as $t)
                     <tbody>
                        <td class="text-center">{{ $t->total }}</td>
                     </tbody>   
                    @endforeach
                </table>    
        </div>
    </div>
    </div>
    </div>
</div>
       
@stop





