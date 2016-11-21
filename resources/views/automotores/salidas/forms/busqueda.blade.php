{!! Form::model(Request::only(['respo']),['route'=>'salidas.index','method'=>'GET','class'=>'navbar-form navbar-left pull-right','role'=>'search']) !!}  
    <div class="form-group">
        {!! Form::text('respo',null,['class'=>'form-control','placeholder'=>'Inserte un Responsable']) !!}
    </div>
    <button type="submit" class="btn btn-primary">
        <span class="glyphicon glyphicon-search">Buscar</span>
    </button>
{!! Form::close() !!}