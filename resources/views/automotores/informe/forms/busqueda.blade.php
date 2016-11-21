:{!! Form::model(Request::all(),['route'=>'informes.index','method'=>'GET','class'=>'navbar-form navbar-left pull-right','role'=>'search']) !!}  
    <div class="form-group">
        {!! Form::text('entidad',null,['class'=>'form-control','placeholder'=>'Nombre de la Entidad']) !!}
    </div>
    <button type="submit" class="btn btn-primary">
        <span class="glyphicon glyphicon-search">Buscar</span>
    </button>
{!! Form::close() !!}