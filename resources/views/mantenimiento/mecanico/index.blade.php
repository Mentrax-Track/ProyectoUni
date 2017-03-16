<?php use Infraestructura\Solicitud;
      use Infraestructura\Vehiculo;
      use Infraestructura\Kilomecanico; 
      use Infraestructura\Devolucion;?>
@extends('automotores.admin')

@section('subtitulo','Kardex de Mantenimiento Vehicular')
@section('css')
{!! Html::style('css/select2.css') !!}
@stop
@section('content')
@include('alertas.success')
<br>
<div class="panel panel-success">
    <div class="panel-heading text-center"><h4><p class="www">Kardex de Mantenimiento</p></h4></div>
    <div class="panel-body jumbotron">
    <form class="form-inline">
        <div class="form-group">
           
            <?php $user = \Auth::user()->tipo; 
                //dd($user);?>
            <!--<strong>Buscar:</strong>
                {!! Form::model(Request::only(['vehiculo_id']),['route'=>'mecanicos.index','method'=>'GET','class'=>'navbar-form navbar-left pull-right','role'=>'search']) !!}  
                    <div class="form-group">
                        {!! Form::select('vehiculo_id',$vehiculo_id,null,['class'=>'form-control js-example-responsive','placeholder'=>'Nombre del vehículo','id'=>'vehiculo_id','value'=>'id']) !!}
                    </div>
                    <button type="submit" class="btn btn-info">
                        <span class="fa fa-search"> Buscar</span>
                    </button>
                {!! Form::close() !!}-->
            @if ($user == 'administrador' OR $user == 'supervisor' OR $user == 'mecanico') 
                {!!link_to_action('MecanicoController@getImprimirk', $title = ' Imprimir Kardex', $parameters = '', $attributes = ['class'=>'btn btn-warning glyphicon glyphicon-print','target'=>'_blank'])!!}

            @endif
        </div>
    </form><br>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-condensed">
                 <tr class="info">
                    <th class="text-center">#</th>
                    <th class="text-center">Vehículo</th>
                    <th class="text-center">kilometraje</th>
                    <th class="text-center">Fecha</th>
                    <th class="text-center">Cantidad</th>
                    <th class="text-center">Unidad</th>
                    <th class="text-center">Trabajo</th>
                    <th class="text-center">Marca</th>
                    <th class="text-center">Código</th>
                    <th class="text-center">Observación</th>
                    <th class="text-center">Actualizar km.</th>
                    <th class="text-center">Operación</th>
                    <th class="text-center">Devolución</th>                    
                </tr>
                @foreach($mecanico as $mec)
                    <tbody>
                        <tr>
                            <td  class="info text-center">{{ $mec->id }}</td>
                            <?php 
                                $sol = $mec->solicitud_id;
                                $idvehi = Solicitud::where('id',$sol)
                                        ->get(['vehiculo_id'])
                                        ->lists('vehiculo_id')
                                        ->toArray();
                                $id = intval($idvehi[0]);
                                //dd($id);
                                $vehiculo = Vehiculo::where('id',$id)
                                        ->get(['id','tipog','placa'])
                                        ->lists('full_vehiculo','id')
                                        ->toArray();
                                $result = implode($vehiculo, ' ');
                            ?>
                            <td class="info">{{ $result }}</td>
                            <td><center>{{ $mec->kilometraje}}</center></td>
                            <td>{{ $mec->fecha}}</td>
                            <td><center>{{ $mec->cantidad }}</center></td>
                            <td>{{ $mec->unidad }}</td>
                            <td>{{ $mec->trabajo }}</td>
                            <td>{{ $mec->marca }}</td>
                            <td>{{ $mec->codigo }}</td>
                            <td>{{ $mec->observacion }}</td>
                            <?php //dd($mec); ?>
                            
                            <?php $mecid = $mec->id;
                                //dd($mecid);  
                                $re = Kilomecanico::where('mecanico_id',$mecid)->first();
                                //dd($re);?>
                            @if (!empty($re) || $re != NULL || $re != "")
                                <td class="info text-center"><strong><font color="green">ACTUALIZADO</font></strong></td>
                            @else
                                @if (Auth::user()->tipo == 'supervisor' OR Auth::user()->tipo == 'administrador')
                                    <td class="info text-center">{!!link_to_action('VehiculosController@getKilometrajemecanico', $title = ' Actualizar Km.', $parameters = $mec->id, $attributes = ['class'=>'btn-danger btn-xs fa fa-bus'])!!}</td>
                                @else
                                    <td class="info text-center"><strong><font color="red">No revisado</font></strong></td>
                                @endif
                            @endif
                            <td class="btns" style="vertical-align:middle;">
                                <center>
                                @if (!empty($re) || $re != NULL || $re != "")
                                    <strong><font color="#337ab7">{{"Ninguna"}}</font></strong>
                                @else
                                     @if (Auth::user()->tipo == 'administrador' OR Auth::user()->tipo == 'mecanico')
                                        {!!link_to_route('mecanicos.edit', $title = ' Editar', $parameters = $mec->id, $attributes = ['class'=>'btn btn-info btn-xs glyphicon glyphicon-edit'])!!}
                                     @endif
                                                                                    
                                @endif
                                </center>      
                            </td>
                            <td>
                                <?php $so = $mec->id;
                                    $re = Devolucion::where('mecanico_id',$so)->count();
                                    ?>
                                @if ($re == 0) 
                                    <center><font color="red">{{$re}}</font> </center>
                                @else 
                                    <center><font color="blue">{{$re}}</font> </center>
                                @endif
                                @if (Auth::user()->tipo == 'supervisor' OR Auth::user()->tipo == 'administrador' OR Auth::user()->tipo == 'mecanico')
                                 {!!link_to_route('devoluciones.show', $title = ' Realizar', $parameters = $mec->id, $attributes = ['class'=>'btn btn-primary btn-xs fa fa-cogs'])!!}
                                @endif
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
            <p class="text-center">Existen {{ $mecanico->total() }} registros</p>
        </div>
    </div>
</div>
{!! $mecanico->appends(Request::only(['vehiculo_id']))->render() !!}

@stop
@section('javascript')
{!! Html::script('js/select2.js') !!}
<script type="text/javascript">
 $(document).ready(function () {
    $('select').select2({
        placeholder: "Seleccione el Vehículo",
        allowClear: true
    });
 });
</script>
@endsection

