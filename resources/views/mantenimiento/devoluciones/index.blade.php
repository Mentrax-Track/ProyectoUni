<?php use Infraestructura\Solicitud; 
      use Infraestructura\Devolucion; 
      use Infraestructura\Mecanico; 
      use Infraestructura\Vehiculo;?>
@extends('automotores.admin')

@section('subtitulo','Devolución de materiales')
@section('css')
{!! Html::style('css/select2.css') !!}

     {!! Html::style('css/datetimepicker/prettify-1.0.css') !!}
     {!! Html::style('css/datetimepicker/base.css') !!}
     {!! Html::style('css/datetimepicker/bootstrap-datetimepicker.css') !!}
@stop
@section('content')
@include('alertas.success')
<br>
<div class="panel panel-success">
    <div class="panel-heading text-center"><h4><p class="www">DEVOLUCIONES</p></h4></div>
    <div class="panel-body jumbotron">
    <form class="form-inline">
        <div class="form-group">
           <strong>Buscar:</strong>
            {!! Form::model(Request::only(['fecha']),['route'=>'devoluciones.index','method'=>'GET','class'=>'navbar-form navbar-left pull-right','role'=>'search']) !!}  
                <div class='input-group date ' id='datetimepicker1'>
                    {!! Form::text('fecha',null,['class'=>'form-control', 'placeholder','data-error'=>'Inserte la fecha Inicial','id'=>'fecha']) !!}
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
                <button type="submit" class="btn btn-info">
                    <span class="fa fa-search"> Buscar</span>
                </button>
            {!! Form::close() !!}

            {!!link_to_action('DevolucionController@getImprimir', $title = ' Imprimir Todo', $parameters = '', $attributes = ['class'=>'btn btn-warning glyphicon glyphicon-print','target'=>'_blank'])!!}

        </div>
    </form><br>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-condensed">
                 <tr class="info">
                    <th class="text-center">#</th>
                    <th class="text-center">Serial</th>
                    <th class="text-center">Fecha</th>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Cantidad</th>
                    <th class="text-center">Detalle</th>
                    <th class="text-center">Vehiculo</th>
                    <th class="text-center">Operación</th>                  
                </tr>
                @foreach($devolucion as $key => $dev)
                    <tbody>
                        <tr>
                            <td  class="info text-center">{{ ++$key }}</td>
                            <td>{{ $dev->serial }}</td>
                            <td class="info"><center>{{ $dev->fecha }}</center></td>
                            <td>{{ $dev->nombre }}</td>
                            <td><center>{{ $dev->cantidad }}</center></td>
                            <td>{{ $dev->detalle }}</td>
                            <?php $de = Mecanico::where('id',$dev->mecanico_id)->get(['solicitud_id'])->lists('solicitud_id')->toArray();
                                //dd($dev);
                                $sol = Solicitud::where('id',$de[0])->get(['vehiculo_id'])->lists('vehiculo_id')->toArray(); 

                                $vehi = Vehiculo::where('id',$sol[0])->get(['tipog','placa'])->lists('full_vehiculo')->toArray(); ?>
                            <td>{{ $vehi[0] }}</td>

                            <td><center>
                            <?php $inser = Devolucion::where('id',$dev->id)->get(['insertador'])->lists('insertador')->toArray(); ?>
                            @if(Auth::user()->full_name == $inser[0])
                                {!!link_to_route('devoluciones.edit', $title = ' Editar', $parameters = $dev->id, $attributes = ['class'=>'btn btn-primary btn-xs btn-block fa fa-pencil-square-o'])!!}
                            @endif
                                {!!link_to_action('DevolucionController@getImprimiru', $title = ' Imprimir', $parameters = $dev->id, $attributes = ['class'=>'btn-info btn-xs btn-block fa fa-file-pdf-o','target'=>'_blank'])!!}
                                </center>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
            <p class="text-center">Existen {{ $devolucion->total() }} registros</p>
        </div>
    </div>
</div>
{!! $devolucion->appends(Request::only(['fecha']))->render() !!}

@stop
@section('javascript')
{!! Html::script('js/select2.js') !!}
{!! Html::script('js/moment.min.js') !!}
{!! Html::script('js/validator.js')!!}
{!! Html::script('js/jquery.easy-autocomplete.min.js') !!}
{!! Html::script('js/datetimepicker/bootstrap-datetimepicker.min.js') !!}
{!! Html::script('js/datetimepicker/bootstrap-datetimepicker.es.js') !!}
 <script type="text/javascript">
$(function () {
        $('#datetimepicker1').datetimepicker({
            format: 'YYYY-MM-DD',
            locale: 'es'
        });
    });   
 $(document).ready(function () {
    $('#fecha').select2({
        tags:true,
        placeholder:"Seleccione una fecha",
        allowClear: true,
        maximumSelectionLength: 20,
        tokenSeparators: [',']
    });   
 });
</script>
@endsection

