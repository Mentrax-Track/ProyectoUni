<?php use Infraestructura\Presupuesto;
use Infraestructura\PresupuestoDia;  ?>
@extends('automotores.admin')

@section('subtitulo','Reservas')
@section('css')
{!! Html::style('css/select2.css') !!}
@stop
@section('content')
@include('alertas.success')
<br>
<div class="panel panel-success">
    
    <div class="panel-heading text-center"><h4><p class="www">Viajes</p></h4></div>
    <div class="panel-body jumbotron"> 
        <form class="form-inline">
            <div class="form-group">
                <label>Búsqueda:</label> 
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
                <th class="text-center">Operación</th>
            </tr>
            @foreach($viaje as $via)
                <?php $estado = $via->estado; ?>
                @if($estado == 'cancelado')
                <tbody BGCOLOR="#d9edf7">
                    <td class="info text-center">{{ $via->id }}</td>
                    <td>{{ $via->entidad }} {!! "<font color='red'>(Cancelado)</font>" !!}</td>
                    <td>{{ $via->tipo }}</td>
                    <td>{{ $via->objetivo }}</td>
                    <td class="text-center">{{ $via->dias }} </td>
                    <td class="text-center">{{ $via->pasajeros }}</td>
                    <td class="text-center">{{ $via->fecha_inicial }}</td>
                    <td class="text-center">{{ $via->fecha_final }}</td>
                    <td class="btns text-center" style="vertical-align:middle;">
                        <div class="btn-group btn-group-sm">
                        @if (Auth::user()->tipo == 'administrador' OR Auth::user()->tipo == 'supervisor')
                            <div class="dropdown">
                                 {!! Form::open(['route'=>['viajes.destroy',$via->id],'method'=>'DELETE']) !!}
                                        <button type="submit" class="btn btn-danger btn-xs btn-block glyphicon">
                                            <span class="glyphicon glyphicon-trash"> Eliminar</span> 
                                        </button>   
                                 {!! Form::close() !!}
                                 <a class="btn btn-info  btn-xs btn-block glyphicon glyphicon-th-list" href="{{ route('rutas.show',['id' => $via->id] )}}" > Detalle</a>
                            </div>
                        @endif
                        </div>
                    </td>
                </tbody>
                @else 

                <tbody>
                    <td class="info text-center">{{ $via->id }}</td>
                    <td>{{ $via->entidad }}</td>
                    <td>{{ $via->tipo }}</td>
                    <td>{{ $via->objetivo }}</td>
                    <td class="text-center">{{ $via->dias }}</td>
                    <td class="text-center">{{ $via->pasajeros }}</td>
                    <td class="text-center">{{ $via->fecha_inicial }}</td>
                    <td class="text-center">{{ $via->fecha_final }}</td>
                    <td class="btns text-center" style="vertical-align:middle;">
                        <div class="btn-group btn-group-sm">
                        @if (Auth::user()->tipo == 'administrador' OR Auth::user()->tipo == 'supervisor')
                            <div class="dropdown">
                                <button class="btn btn-primary btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Presupuesto
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
                        @endif                       
                            <div class="dropdown">
                                <button class="btn btn-info btn-xs btn-block dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> Realizar 
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu4">
                                    <li class="disabled"><a href="">Vizualización de Rutas</a></li>

                                    <a class="btn btn-info  btn-xs btn-block glyphicon glyphicon-th-list" href="{{ route('rutas.show',['id' => $via->id] )}}" > Ver</a>

                                    <a class="btn btn-warning  btn-xs btn-block glyphicon glyphicon-print" target="_blank" href="{{ route('rutas.edit',['id' => $via->id] )}}" > Imprimir</a>

                            @if (Auth::user()->tipo == 'chofer' OR Auth::user()->tipo == 'administrador' )
                                    <li role="separator" class="divider"></li>
                                    <li class="disabled"><a href="">Informe del viaje</a></li>

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
                                @endif    
                                @if (Auth::user()->tipo == 'administrador' OR Auth::user()->tipo == 'supervisor')
                                    <li class="disabled"><a href="">Eliminación del viaje</a></li>
                                                                        
                                    {!! Form::open(['route'=>['viajes.destroy',$via->id],'method'=>'DELETE']) !!}
                                        <button type="submit" class="btn btn-danger btn-xs btn-block glyphicon">
                                            <span class="glyphicon glyphicon-trash"> Eliminar</span> 
                                        </button>   
                                    {!! Form::close() !!}
                                @endif
                                </ul>
                            </div>  
                        @if (Auth::user()->tipo == 'administrador' OR Auth::user()->tipo == 'supervisor')
                            <div class="dropdown">
                                 {!!link_to_action('ViajesController@getCancelar', $title = ' Cancelar', $parameters = $via->id, $attributes = ['class'=>'btn btn-warning btn-xs btn-block dropdown-toggle fa fa-ban'])!!}
                            </div>
                        @endif
                        </div>
                    </td>
                </tbody>
                @endif
            @endforeach   
        </table>
        <center><p>Existen {{ $viaje->total() }} registros en total</p></center>
        </div>
    </div>
</div>
<!--con appends adjunto los parametros adicionales de busqueda -->
{!! $viaje->appends(Request::only(['entidad','tipo']))->render() !!}</div>
     
@stop
@section('javascript')
{!! Html::script('js/select2.js') !!}
{!! Html::script('js/es.js') !!}
<script type="text/javascript">
    $(document).ready(function () {


        $('#tipov').select2({
            placeholder: "Seleccione un tipo",
            tags: true,
            language: "es",
            maximumSelectionLength: 1,
            allowClear: true
        });
    });    
</script>
@endsection