{!! Form::model(Request::all(),['route'=>'vehiculos.index','method'=>'GET','class'=>'navbar-form navbar-left pull-right','role'=>'search']) !!}  
    <div class="form-group">
        {!! Form::select('tip', config('opciones.types'),null,['class'=>'form-control']) !!}
        {!! Form::select('esta', config('estados.estas'),null,['class'=>'form-control']) !!}
    </div>
    <button type="submit" class="btn btn-primary">
        <span class="glyphicon glyphicon-search">Buscar</span>
    </button>
{!! Form::close() !!}