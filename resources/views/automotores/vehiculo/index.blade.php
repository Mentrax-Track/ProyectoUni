<?php use Infraestructura\Modelo; ?>
@extends('automotores.admin')
@section('css')
{!! Html::style('css/select2.css') !!}
@stop
@section('subtitulo','Vehículos')
@section('content')
@include('alertas.success')
<br>
<div class="panel panel-success">
    <div class="panel-heading text-center"><h4><p class="www">Lista de Vehículos</p></h4></div>
    <div class="panel-body jumbotron"> 

    <form class="form-inline">
        <div class="col-md-6"></div>
        <div class="form-group">
            <label>Búsqueda:</label> 
            @include('automotores.vehiculo.forms.busqueda')
            <?php $user = \Auth::user()->tipo; 
                //dd($user);?>
            @if ($user == 'administrador' OR $user == 'supervisor' OR $user == 'mecanico') 

                {!!link_to_action('VehiculosController@getImprimir', $title = ' Imprimir todos', $parameters = '', $attributes = ['class'=>'btn btn-info glyphicon glyphicon-print','target'=>'_blank'])!!}
                
                {!!link_to_action('VehiculosController@getImprimire', $title = ' Imprimir algunos', $parameters = '', $attributes = ['class'=>'btn btn-warning glyphicon glyphicon-print','target'=>'_blank'])!!}

            @endif
        </div>
    </form>

    <div class="table-responsive">
    <table class="table table-bordered table-hover table-condensed ">
            <tr class="info text-center">
                <th class="text-center">#</th>
                <th class="text-center">Código</th>
                <th class="text-center">Placa</th>
                <th class="text-center">Asientos</th>
                <th class="text-center">Tipo</th>
                <th class="warning text-center">Kilometraje</th>
                <th class="text-center">Estado</th>
                <th class="text-center">Operaciones</th>
            </tr> 
            @foreach ($vehiculos as $key => $vehi) 
                    <tbody>
                        <tr>
                            <td  class="info text-center">{{ $vehi->id }}</td>
                            <td>{{ $vehi->codigo}}</td>
                            <td class="info text-center">{{ $vehi->placa }}</td>
                            <td>{{ $vehi->pasajeros}}</td>
                            <td>{{ $vehi->tipog }}</td>
                            <?php $vi = $vehi->id; 
                                $kilo = Modelo::where('vehiculo_id',$vi)->get(['kilometraje'])->lists('kilometraje')->toArray(); ?>
                            <td class="warning text-center">{{ $kilo[0] }}</td>
                            <td>{{ $vehi->estado }}</td>
                            <td class="btns" style="vertical-align:middle;">
                                <center>
                                
                                @if (Auth::user()->tipo == 'administrador' OR Auth::user()->tipo == 'supervisor')
                                    {!!link_to_route('vehiculos.edit', $title = 'Editar', $parameters = $vehi->id, $attributes = ['class'=>'btn-info btn-xs btn-block fa fa-pencil-square-o'])!!}
                               <br>
                                {!!link_to_action('VehiculosController@getKilometraje', $title = ' Actualizar Km.', $parameters = $vehi->id, $attributes = ['class'=>'btn-warning btn-xs btn-block fa fa-bus'])!!}

                                 @endif
                                <br>
                                <a class="btn-primary  btn-xs  btn-block fa fa-bars" href="{{ route('vehiculos.show',['id' => $vehi->id] )}}" > Detalle</a>
                               </center>
                            </td>
                        </tr>
                    </tbody>
            @endforeach
        </table>
        <center><p class="text-center">Existen {{ $vehiculos->total() }} registros</p></center> 
    </div>
   </div>
</div>
{!! $vehiculos->appends(Request::only(['placa','estado']))->render() !!}
@stop
@section('javascript')
{!! Html::script('js/select2.js') !!}
<script type="text/javascript">
 $(document).ready(function () {
    $('select').select2({
        placeholder: "Estado del Vehículo",
        allowClear: true
    });
    $('#estado').select2({
        placeholder: "Estado",
        allowClear: true
    }); 
 });
</script>
@endsection

