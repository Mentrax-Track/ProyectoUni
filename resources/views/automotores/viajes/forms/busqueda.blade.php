{!! Form::model(Request::all(),['route'=>'viajes.index','method'=>'GET','class'=>'navbar-form navbar-left pull-right','role'=>'search']) !!}  
    <div class="form-group">
        {!! Form::text('entidad',null,['class'=>'form-control','placeholder'=>'Inserte una entidad']) !!}
        {!! Form::select('tipo', config('viaTipo.viaTipos'),null,['class'=>'form-control']) !!}
    </div>
    <button type="submit" class="btn btn-primary">
        <span class="glyphicon glyphicon-search">Buscar</span>
    </button>
{!! Form::close() !!}