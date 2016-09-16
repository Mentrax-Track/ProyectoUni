{!! Form::model(Request::all(),['route'=>'destinos.index','method'=>'GET','class'=>'navbar-form navbar-left pull-right','role'=>'search']) !!}  
    <div class="form-group">
        {!! Form::text('ruta',null,['class'=>'form-control','placeholder'=>'Origen o Destino']) !!}
        {!! Form::select('dep', config('dep.deps'),null,['class'=>'form-control']) !!}
    </div>
    <button type="submit" class="btn btn-primary">
        <span class="glyphicon glyphicon-search">Buscar</span>
    </button>
{!! Form::close() !!}

