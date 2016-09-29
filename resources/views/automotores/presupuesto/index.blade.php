@extends('automotores.admin')

@section('subtitulo','Presupuestos')
    
@section('content')
@include('alertas.request')
@include('alertas.errors')
<br>
<div class="panel panel-default">
    
    <div class="panel-heading text-center"><h4><p class="www">Presupuestos</p></h4></div>
    <div class="panel-body"> 
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-condensed">
                <th>#</th>
                <th>Chofer</th> 
                <th>Entidad</th>
                <th>Operaciones</th>
                @foreach($presupuesto as $encar)
                    <tbody>
                        <td class="info text-center"><center>{{ $encar->id }}</center></td>
                        <td>{{ $encar->chofer }}</td>
                        <td>{{ $encar->entidad}}</td>
                        <td> <center>
                          {!!link_to_route('presupuestos.edit', $title = 'Editar', $parameters = $encar->id, $attributes = ['class'=>'btn btn-primary'])!!}
                                <a class="btn btn-primary " href="{{ route('presupuestos.show',['id' => $encar->id] )}}" >Imprimir</a> 
                            </center>
                        </td>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
<div class="row">
    <div class="col-md-4">{!! $presupuesto->render() !!}</div>
    <div class="col-md-4"><center><p>Existen {{ $presupuesto->total() }} registros en total</p></center>
    </div>
        <div class="col-md-4"></div>
</div>
@stop

