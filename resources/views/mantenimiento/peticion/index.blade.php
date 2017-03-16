<?php use Infraestructura\Solicitud;use Infraestructura\Peticion; ?>
@extends('automotores.admin')

@section('subtitulo','Lista de pedidos')
@section('css')
{!! Html::style('css/select2.css') !!}
@stop
@section('content')
@include('alertas.success')
<br>
<div class="panel panel-success">
    <div class="panel-heading text-center"><h4><p class="www">Pedidos de Material</p></h4></div>
    <div class="panel-body jumbotron">
    <form class="form-inline">
        <div class="form-group">
            <label>Busqueda: </label> 
            {!! Form::model(Request::only(['numero']),['route'=>'peticion.index','method'=>'GET','class'=>'navbar-form navbar-left pull-right','role'=>'search']) !!}  
                <div class="form-group">
                    {!! Form::number('numero',null,['class'=>'form-control js-example-responsive','placeholder'=>'Número de Orden','id'=>'numero']) !!}
                </div>
                <button type="submit" class="btn btn-info">
                    <span class="fa fa-search"> Buscar</span>
                </button>
            {!! Form::close() !!}
        </div>
    </form><br>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-condensed">
                 <tr class="info">
                    <th class="text-center">#</th>
                    <th class="text-center"># Orden</th>
                    <th class="text-center">Chofer</th>
                    <th class="text-center">Fecha</th>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Cantidad</th>
                    <th class="text-center">Detalle</th>
                    <th class="text-center">Operación</th>
                </tr>
                @foreach($peticion as $key => $pet)
                    <tbody>
                        <tr>
                            <td  class="info text-center">{{ ++$key }}</td>
                            <td class="info"><center>{{ $pet->orden}}</center></td>
                            <?php 
                                $id = (int)$pet->solicitud_id;
                                //dd($id);
                                $cho = Solicitud::where('id',$id)
                                            ->get(['chofer'])
                                            ->lists('chofer')
                                            ->toArray();
                                
                            ?>
                            <td>{{ $cho[0]}} </td>
                            <td>{{ $pet->fecha }}</td>
                            <td>{{ $pet->nombre }}</td>
                            <td>{{ $pet->cantidad }}</td>
                            <td>{{ $pet->descripcion }}</td>
                            <td class="btns" style="vertical-align:middle;">
                                <center>
                                @if(Auth::user()->tipo != "mensajero")
                                    <?php $inser = Peticion::where('id',$pet->id)->get(['insertador'])->lists('insertador')->toArray(); ?>
                                    @if(Auth::user()->full_name == $inser[0])
                                        {!!link_to_route('peticion.edit', $title = ' Editar', $parameters = $pet->id, $attributes = ['class'=>'btn btn-info btn-block btn-xs glyphicon glyphicon-edit'])!!}
                                    @endif
                                @endif
                                    {!!link_to_action('PeticionController@getImprimir', $title = ' Imprimir', $parameters = $pet->id, $attributes = ['class'=>'btn btn-primary btn-xs btn-block glyphicon glyphicon-print','target'=>'_blank'])!!}
                                    
                                </center>      
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
            <p class="text-center">Existen {{ $peticion->total() }} registros</p>
        </div>
    </div>
</div>
{!! $peticion->appends(Request::only(['numero']))->render() !!}

@stop
@section('javascript')
{!! Html::script('js/select2.js') !!}
{!! Html::script('js/es.js') !!}
<script type="text/javascript">
 $(document).ready(function () {
    $('select').select2({
        placeholder: "Seleccione al chofer",
        allowClear: true
    });
 });
</script>
@endsection
