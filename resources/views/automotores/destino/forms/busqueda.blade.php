{!! Form::model(Request::all(),['route'=>'destinos.index','method'=>'GET','class'=>'navbar-form navbar-left pull-right','role'=>'search']) !!}  
    <div class="form-group">
        {!! Form::text('ruta',null,['class'=>'form-control','placeholder'=>'Nombre de una ruta']) !!}
        {!! Form::select('dep', config('dep.deps'),null,['class'=>'form-control']) !!}
    </div>
        {!! Form::submit('Buscar',['class'=>'btn btn-info']) !!}
{!! Form::close() !!}

