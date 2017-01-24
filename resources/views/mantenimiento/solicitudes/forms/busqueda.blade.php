{!! Form::model(Request::only(['chofer','vehiculo_id']),['route'=>'solicitudes.index','method'=>'GET','class'=>'navbar-form navbar-left pull-right','role'=>'search']) !!}  
    <div class="form-group">
        {!! Form::select('chofer',$chofer,null,['class'=>'form-control js-example-responsive','placeholder'=>'Nombre del chofer','id'=>'chofer','value'=>'id']) !!}
        {!! Form::select('vehiculo_id',$vehiculo_id,null,['class'=>'form-control js-example-responsive','placeholder'=>'Nombre del vehículo','id'=>'vehiculo_id','value'=>'id']) !!}
    </div>
    <button type="submit" class="btn btn-info">
        <span class="fa fa-search"> Buscar</span>
    </button>
{!! Form::close() !!}