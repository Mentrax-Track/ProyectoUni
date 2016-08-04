@extends('automotores.admin')

@section('subtitulo','Vehiculos')

@section('content')
@include('alertas.success')
<br>
<div class="panel panel-default">
    
    <div class="panel-heading text-center"><h4>Vehiculos</h4></div>
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
            <tr class="info">
                <th>#</th>
                <th>Código</th>
                <th>Tipo</th>
                <th>Placa</th>
                <th>Color</th>
                <th>Kilometraje</th>
                <th>Pasageros</th>
                <th>Estado</th>
                <th>Imagen</th>
                <th>Operación</th>
            </tr> 
                
        @foreach($vehiculos as $vehi)
            <tbody>
                <td class="info">{{ $vehi->id }}</td>
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
                <td class="btns" >
                   {!!link_to_route('vehiculos.edit', $title = 'Editar', $parameters = $vehi->id, $attributes = ['class'=>'btn btn-primary'])!!}
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