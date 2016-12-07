<?php use Infraestructura\Presupuesto;
use Infraestructura\PresupuestoDia;  ?>
@extends('automotores.admin')

@section('subtitulo','Reservas')

@section('content')
@include('alertas.success')
<br>
<div class="panel panel-default">
    
    <div class="panel-heading text-center"><h4><p class="www">Viajes</p></h4></div>
    <div class="panel-body"> 
        <form class="form-inline">
            <div class="form-group">
                <label>Busqueda</label> 
                @include('automotores.viajes.forms.busqueda')
            </div>
        </form>
    <div class="table-responsive">
    <table class="table table-bordered table-hover table-condensed"><br>
            <tr class="info">
                <th class="text-center">#</th>
                <th class="text-center">Entidad</th>
                <th class="text-center">Tipo</th>
                <th class="text-center">Objetivo</th>
                <th class="text-center">Dias</th>
                <th class="text-center">Pasajeros</th>
                <th class="text-center">Inicio</th>
                <th class="text-center">Final</th>
                <th class="text-center">Operacion</th>
            </tr>
        
            @foreach($viaje as $via)
                <tbody>
                    <td class="info text-center">{{ $via->id }}</td>
                    <td>{{ $via->entidad }}</td>
                    <td>{{ $via->tipo }}</td>
                    <td>{{ $via->objetivo }}</td>
                    <td class="text-center">{{ $via->dias }}</td>
                    <td class="text-center">{{ $via->pasajeros }}</td>
                    <td class="text-center">{{ $via->fecha_inicial }}</td>
                    <td class="text-center">{{ $via->fecha_final }}</td>
                    <td class="btns" style="vertical-align:middle;">
                        <div class="btn-group btn-group-sm">
                            <center>
                            <div class="dropdown">
                                <button class="btn btn-warning btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Presupuesto
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu4">
                                    <li class="disabled"><a href="">Elija una Opción</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li>{!!link_to_route('presupuestos.show', $title = 'Con Cheque', $parameters = $via->id, $attributes = ['class'=>'alert-success'])!!}</li>
                                    <li role="separator" class="divider"></li>
                                    <li>{!!link_to_route('presupuestosDia.show', $title = 'Por Caja', $parameters = $via->id, $attributes = ['class'=>'alert-info'])!!}</li>
                                </ul>
                            </div>                           
                            <div class="dropdown">
                                <button class="btn btn-info btn-xs btn-block dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> Realizar 
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu4">
                                    <li class="disabled"><a href="">Vizualizar Datos</a></li>

                                    <a class="btn btn-info  btn-xs btn-block glyphicon glyphicon-th-list" href="{{ route('rutas.show',['id' => $via->id] )}}" > Detalle</a>

                                    <li role="separator" class="divider"></li>
                                    <li class="disabled"><a href="">Realize un Informe</a></li>

                                    <?php $idvi =  $via->id;
                                        $resul = Presupuesto::where('viaje_id',$idvi)
                                                ->get(['id'])->lists('id')->toArray();
                                        
                                        if (!empty($resul)) 
                                        { ?>
                                            <a class="btn btn-primary  btn-xs btn-block glyphicon  glyphicon-list-alt" href="{{ route('informes.show',['id' => $via->id] )}}" > Informe/Cheque</a>
                                        <?php  }  ?>
                                        
                                        <?php $rel = PresupuestoDia::where('viaje_id',$idvi)
                                                ->get(['id'])->lists('id')->toArray();
                                        if (!empty($rel))
                                        {?>
                                            {!!link_to_action('InformeController@getPresudia', $title = ' Informe/Caja', $parameters = $via->id, $attributes = ['class'=>'btn btn-info btn-xs btn-block glyphicon glyphicon-list-alt'])!!}
                                        <?php } ?>

                                        <?php if (empty($resul) AND empty($rel)) echo "<i>Realize el Presupuesto de Viaje para el Informe</i>"; ?>
                                        
                                    <li role="separator" class="divider"></li>
                                    

                                    <li class="disabled"><a href="">Elimine el viaje</a></li>
                                                                        
                                    {!! Form::open(['route'=>['viajes.destroy',$via->id],'method'=>'DELETE']) !!}
                                        <button type="submit" class="btn btn-danger btn-xs btn-block glyphicon">
                                            <span class="glyphicon glyphicon-trash"> Eliminar</span> 
                                        </button>   
                                    {!! Form::close() !!}
                                </ul>
                            </div>                            
                          </center>
                        </div>
                    </td>
                </tbody>
            @endforeach   
        </table>
        <center><p>Existen {{ $viaje->total() }} registros en total</p></center>
        </div>
    </div>
</div>
<!--con appends adjunto los parametros adicionales de busqueda -->
{!! $viaje->appends(Request::only(['entidad','tipo']))->render() !!}</div>
     
@stop