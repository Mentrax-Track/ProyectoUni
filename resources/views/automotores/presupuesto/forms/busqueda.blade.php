{!! Form::model(Request::all(),['route'=>'presupuestos.index','method'=>'GET','class'=>'navbar-form navbar-left pull-right','role'=>'search']) !!}  
    <div class="form-group">
        {!! Form::text('entidad',null,['class'=>'form-control','placeholder'=>'Inserte una Entidad']) !!}
    </div>
    <button type="submit" class="btn btn-primary">
        <span class="glyphicon fa fa-search"> Buscar</span>
    </button>
{!! Form::close() !!}

