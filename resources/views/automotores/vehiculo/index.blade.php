@extends('automotores.admin')

@section('subtitulo','Vehiculos')
    
@section('content')
@include('alertas.success')
<br>
<div class="panel panel-default">
    
    <div class="panel-heading text-center"><h4><p class="www">Vehiculos</p></h4></div>
    <div class="panel-body"> 

    <form class="form-inline">
        <div class="col-md-6"></div>
        <div class="form-group">
            <label>Busqueda</label> 
            @include('automotores.vehiculo.forms.busqueda')
        </div>
    </form>

    <div class="table-responsive">
    <table class="table table-bordered table-hover table-condensed "><br>
            <tr class="info text-center">
                <th class="text-center">#</th>
                <th class="text-center">Código</th>
                <th class="text-center">Tipo</th>
                <th class="text-center">Placa</th>
                <th class="text-center">Color</th>
                <th class="text-center">Kilometraje</th>
                <th class="text-center">Pasageros</th>
                <th class="text-center">Estado</th>
                <th class="text-center">Imagen</th>
                <th class="text-center">Operación</th>
            </tr> 
                
        @foreach($vehiculos as $vehi)
            <tbody>
                <td class="info"><center>{{ $vehi->id }}</center></td>
                <td>{{ $vehi->codigo }}</td>
                <td>{{ $vehi->tipo }}</td>
                <td>{{ $vehi->placa }}</td>
                <td>{{ $vehi->color }}</td>
                <td>{{ $vehi->kilometraje }}</td>
                <td>{{ $vehi->pasageros}}</td>
                <td>{{ $vehi->estado }}</td>
                <td>
                    <img src="vehi/{{$vehi->path}}" alt="" style="width:90px; display:block;margin:0 auto 0 auto;" />
                </td>
                <td class="btns" style="vertical-align:middle;">
                    <center>
                    {!!link_to_route('vehiculos.edit', $title = 'Editar', $parameters = $vehi->id, $attributes = ['class'=>'btn btn-info btn-sm glyphicon glyphicon-edit'])!!}
                   </center>
                </td>
            </tbody>
        @endforeach
    </table>
    <center><p>Existen {{ $vehiculos->total() }} registros en total</p></center>
    </div>
    </div>
</div>
<!--con appends adjunto los parametros adicionales de busqueda -->
{!! $vehiculos->appends(Request::only(['tip','esta']))->render() !!}</div>
       
@stop