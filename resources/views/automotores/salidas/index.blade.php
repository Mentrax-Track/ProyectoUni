@extends('automotores.admin')

@section('subtitulo','Salidas de los vehiculos')
    
@section('content')
@include('alertas.success')
<br>
<div class="panel panel-default">
    
    <div class="panel-heading text-center"><h4><p class="www">Salidas</p></h4></div>
    <div class="panel-body">
    <form class="form-inline">
        <div class="form-group">
            <label>Busqueda</label> 
            @include('automotores.salidas.forms.busqueda')
        </div>
    </form><br>
    <div class="table-responsive">
    <table class="table table-bordered table-hover table-condensed "><br>
            <tr class="info text-center">
                <th class="text-center">#</th>
                <th class="text-center">Chofer</th>
                <th class="text-center">Mobilidad</th>
                <th class="text-center">Responsable</th>
                <th class="text-center">Operaciones</th>
            </tr> <?php $i=1; ?>
            @foreach($salidas as $sal)
                <tbody>
                    <tr>
                        <td  class="info text-center"><center>{{ $i }}</center></td>
                        <td>{{ $sal->enviCho->full_name }}</td>
                        <td>{{ $sal->enviVehi->full_vehiculo }}</td>
                        <td>{{ $sal->responsable}}</td>
                        <td class="text-center">
                            <div class="btn-group btn-group-sm">
                                <center>
                                    {!!link_to_route('salidas.edit', $title = ' Editar', $parameters = $sal->id, $attributes = ['class'=>'btn btn-info btn-xs glyphicon glyphicon-edit'])!!}
                                    
                                    {!!link_to_route('salidas.show', $title = '
                                     Imprimir   ', $parameters = $sal->id, $attributes = ['class'=>'btn btn-warning btn-xs glyphicon fa fa-print','target'=>'_blank'])!!}
                                </center>
                            </div>
                        </td>
                    </tr>
                </tbody><?php $i++; ?>
            @endforeach
        </table>
        <p class="text-center">Hay {{ $salidas->total() }} registros</p>
      </div>
    </div>
</div>
{!! $salidas->appends(Request::only(['respo']))->render() !!}
@stop