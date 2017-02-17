@extends('automotores.admin')

@section('subtitulo','Recarga de Combustible')
    
@section('content')
@include('alertas.success')
<br>
<div class="panel panel-success">
    
    <div class="panel-heading text-center"><h4><p class="www">Tabla de Operaciones</p></h4></div>
    <div class="panel-body jumbotron">
        <form class="form-inline">
            <?php $user = \Auth::user()->tipo; 
                //dd($user);?>
            @if ($user == 'administrador' OR $user == 'supervisor') 
                <div class="form-group">
                    <label>Opciones: </label> 
                    {!!link_to_route('combustibles.create', $title = ' Agregar Vehículo', $parameters = "", $attributes = ['class'=>'btn btn-warning  glyphicon fa fa-car '])!!}

                    {!!link_to_action('CombustiblesController@getMostrar', $title = ' Mostrar Todo', $parameters = '', $attributes = ['class'=>'btn btn-info  glyphicon fa fa-snowflake-o','target'=>'_blank'])!!}

                    {!!link_to_action('CombustiblesController@getImprimire', $title = ' Imprimir', $parameters = '', $attributes = ['class'=>'btn btn-danger  glyphicon fa fa-print','target'=>'_blank'])!!}

                    {!!link_to_action('CombustiblesController@getImprimir', $title = ' Imprimir Todo', $parameters = '', $attributes = ['class'=>'btn btn-danger  glyphicon fa fa-print','target'=>'_blank'])!!}
                </div>
            @endif
        </form>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-condensed "><br>
            <tr class="info text-center">
                <th class="text-center">#</th>
                <th class="text-center">Vehículo</th>
                <th class="danger text-center">Gasolina<br /> Litros</th>
                <th class="danger text-center">Precio</th>
                <th class="danger text-center">Bs.</th>
                <th class="info text-center">Diesel<br /> Litros</th>
                <th class="info text-center">Precio</th>
                <th class="info text-center">Bs.</th>
                <th class="warning text-center">GNV<br /> m³</th>
                <th class="warning text-center">Precio</th>
                <th class="warning text-center">Bs.</th>
                <th class="text-center">Fecha de Recarga</th>
                <th class="text-center">Operación</th> 
            </tr>
            @foreach($combustibles as $key => $com)
                <tbody>
                    <tr>
                        <td  class="info text-center"><center>{{ ++$key }}</center></td>
                        <td>{{ $com->enviarVehiculo->full_vehiculo }}</td>
                        <td class="danger text-center">{{ $com->gasolina }}</td>
                        <td class="danger text-center">{{ $com->prega }}</td>
                        <td class="danger text-center">{{ $com->toga }}</td>
                        <td class="info text-center">{{ $com->diesel }}</td>
                        <td class="info text-center">{{ $com->predi }}</td>
                        <td class="info text-center">{{ $com->todi }}</td>
                        <td class="warning text-center">{{ $com->gnv }}</td>
                        <td class="warning text-center">{{ $com->pregn }}</td>
                        <td class="warning text-center">{{ $com->togn }}</td>
                        <td class="info text-center">{{ $com->fecha }}</td>
                        <td class="text-center">
                            <div class="btn-group btn-group-sm">
                                <center> 
                                    {!!link_to_route('combustibles.edit', $title = ' Insertar', $parameters = $com->id, $attributes = ['class'=>'btn btn-primary btn-xs btn-block  glyphicon glyphicon-oil'])!!}
                                    
                                    {!!link_to_action('CombustiblesController@getActualizar', $title = ' Editar', $parameters = $com->id, $attributes = ['class'=>'btn btn-info btn-xs btn-block fa fa-pencil-square-o'])!!}

                                    {!!link_to_action('CombustiblesController@getLimpiar', $title = ' Guardar', $parameters = $com->id, $attributes = ['class'=>'btn btn-warning btn-xs btn-block fa fa-floppy-o'])!!}

                                    {!! Form::open(['route'=>['combustibles.destroy',$com->id],'method'=>'DELETE']) !!}
                                        <button type="submit" class="btn btn-danger btn-xs btn-block fa fa-trash-o"> 
                                            Eliminar
                                        </button>   
                                    {!! Form::close() !!}
                                </center>
                            </div>
                        </td>
                    </tr>
                </tbody>
            @endforeach
            <tr>
                <td colspan="2" rowspan="3"><center><strong>Total:</strong></center></td>
                    <?php $ga=0; ?>
                    @foreach($combustibles as $key => $value)
                        <?php $ga = $ga+$value->gasolina; ?> 
                    @endforeach
                <td colspan="1" rowspan="3" class="danger"><center><strong>{{$ga}}</strong> Litros.</center></td>
                <td colspan="1" rowspan="3" class="danger"><center><strong>Precio Total:</strong></center></td>    
                    <?php $gaB=0; ?>
                    @foreach($combustibles as $key => $value)
                        <?php $gaB = $gaB+$value->toga; ?> 
                    @endforeach
                <td colspan="1" rowspan="3" class="danger"><center><strong>{{$gaB}}</strong> Bs.</center></td>

                <?php $di=0; ?>
                    @foreach($combustibles as $key => $value)
                        <?php $di = $di+$value->diesel; ?> 
                    @endforeach
                <td colspan="1" rowspan="3" class="info"><center><strong>{{$di}}</strong> Litros</center></td>
                <td colspan="1" rowspan="3" class="info"><center><strong>Precio Total:</strong></center></td>
                    <?php $diB=0; ?>
                    @foreach($combustibles as $key => $value)
                        <?php $diB = $diB+$value->todi; ?> 
                    @endforeach
                <td colspan="1" rowspan="3" class="info"><center><strong>{{$diB}}</strong> Bs.</center></td>


                <?php $gnv=0; ?>
                    @foreach($combustibles as $key => $value)
                        <?php $gnv = $gnv+$value->gnv; ?> 
                    @endforeach
                <td colspan="1" rowspan="3" class="warning"><center><strong>{{$gnv}}</strong> m³.</center></td>
                <td colspan="1" rowspan="3" class="warning"><center><strong>Precio Total:</strong></center></td>
                    <?php $gnB=0; ?>
                    @foreach($combustibles as $key => $value)
                        <?php $gnB = $gnB+$value->togn; ?> 
                    @endforeach
                <td colspan="1" rowspan="3" class="warning"><center><strong>{{$gnB}}</strong> Bs.</center></td>
            </tr>
        </table>
        <p class="text-center">Existen {{ $combustibles->total() }} registros</p>
      </div>
    </div>
</div>
@stop