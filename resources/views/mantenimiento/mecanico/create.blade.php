<?php use Infraestructura\Accesorio; 
    use Infraestructura\Mecanico;?>
@extends('automotores.admin')

@section('subtitulo','Solicitudes de Trabajo')
@section('css')
{!! Html::style('css/select2.css') !!}
@stop
@section('content')
@include('alertas.success')
<br>
<div class="panel panel-success">
    <div class="panel-heading text-center"><h4><p class="www">Lista de solicitudes de trabajo</p></h4></div>
    <div class="panel-body jumbotron">
    <form class="form-inline">
        <div class="form-group">
            <label>Busqueda: </label> 
            @include('mantenimiento.mecanico.forms.busqueda')
            <?php $user = \Auth::user()->tipo; 
                //dd($user);?>
            @if ($user == 'administrador' OR $user == 'supervisor' OR $user == 'mecanico') 
                {!!link_to_action('MecanicoController@getImprimir', $title = ' Imprimir', $parameters = '', $attributes = ['class'=>'btn btn-warning glyphicon glyphicon-print','target'=>'_blank'])!!}
            @endif
        </div>
    </form><br>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-condensed">
                 <tr class="info">
                    <th class="text-center">#</th>
                    <th class="text-center">Chofer</th>
                    <th class="text-center">Vehículo</th>
                    <th class="text-center">Accesorios</th>
                    <th class="text-center">Descripción</th>
                    <th class="text-center">Fecha</th>
                    <th class="text-center">Operación</th>
                    <th class="text-center">Trabajos</th>
                </tr>
                @foreach($solicitudes as $sol)
                    <tbody>
                        <tr>
                            <td  class="info text-center">{{ $sol->id }}</td>
                            <td class="info">{{ $sol->chofer}}</td>
                            <td>{{ $sol->enviVehi->full_vehiculo }}</td>
                            <?php 
                                $id = (int)$sol->id;
                                //dd($id);
                                $accesorio = \DB::table('accesorios')
                                            ->where('solicitud_id',$id)
                                            ->groupBy('solicitud_id','id')
                                            ->get();
                                //dd($accesorio);
                            ?>
                            <td>
                            @foreach ($accesorio as $value) 
                                    {{ $value->solicitud }}
                            @endforeach
                            </td>
                            <td>{{ $sol->descripsoli }}</td>
                            <td>{{ $sol->fecha }}</td>
                            <td class="btns" style="vertical-align:middle;">
                                <center>
                                    {!!link_to_route('mecanicos.show', $title = 'Concretar', $parameters = $sol->id, $attributes = ['class'=>'btn btn-info btn-xs  fa fa-check-square-o'])!!}

                                    {!!link_to_route('peticion.show', $title = 'Pedido M.', $parameters = $sol->id, $attributes = ['class'=>'btn btn-warning btn-xs  fa fa-bell-o'])!!}
                                </center>      
                            </td>
                            <td>
                                <?php $so = $sol->id;
                                    $re = Mecanico::where('solicitud_id',$so)->count();
                                    ?>
                                @if ($re == 0) 
                                    <center><font color="red">{{$re}}</font> </center>
                                @else 
                                    <center><font color="blue">{{$re}}</font> </center>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
            <p class="text-center">Hay {{ $solicitudes->total() }} registros</p>
        </div>
    </div>
</div>
{!! $solicitudes->appends(Request::only(['chofer','vehiculo_id']))->render() !!}

@stop
@section('javascript')
{!! Html::script('js/select2.js') !!}
{!! Html::script('js/es.js') !!}
<script type="text/javascript">
    $(document).ready(function () {


        $('#chofer').select2({
            placeholder: "Seleccione un Chofer",
            tags: true,
            language: "es",
            maximumSelectionLength: 2,
            allowClear: true
        });

        $('#vehiculo_id').select2({
            placeholder: "Seleccione un vehículo",
            tags: true,
            language: "es",
            maximumSelectionLength: 2,
            allowClear: true
        });

    });    
</script>
@endsection