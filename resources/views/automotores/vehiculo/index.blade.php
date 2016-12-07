@extends('automotores.admin')
@section('css')
{!! Html::style('css/select2.css') !!}
@stop
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
            <label>Busqueda:</label> 
            @include('automotores.vehiculo.forms.busqueda')
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
                <th class="text-center">Estado</th>
                <th class="text-center">Operaciones</th>
            </tr> 
            @foreach ($vehiculos as $key => $vehi) 
                    <tbody>
                        <tr>
                            <td  class="info text-center">{{ $vehi->id }}</td>
                            <td>{{ $vehi->codigo}}</td>
                            <td class="info">{{ $vehi->placa }}</td>
                            <td>{{ $vehi->pasajeros}}</td>
                            <td>{{ $vehi->tipog }}</td>
                            <td>{{ $vehi->estado }}</td>
                            <td class="btns" style="vertical-align:middle;">
                                <center>
                                {!!link_to_route('vehiculos.edit', $title = 'Editar', $parameters = $vehi->id, $attributes = ['class'=>'btn btn-info btn-xs glyphicon glyphicon-edit'])!!}

                                <a class="btn btn-info  btn-xs  glyphicon glyphicon-th-list" href="{{ route('vehiculos.show',['id' => $vehi->id] )}}" > Detalle</a>
                               </center>
                            </td>
                        </tr>
                    </tbody>
            @endforeach
        </table>
        <center><p class="text-center">Hay {{ $vehiculos->total() }} registros</p></center> 
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

