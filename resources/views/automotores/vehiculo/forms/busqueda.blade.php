{!! Form::model(Request::all(),['route'=>'vehiculos.index','method'=>'GET','class'=>'navbar-form navbar-left pull-right','role'=>'search']) !!}  
    <div class="form-group">
        {!! Form::select('tip', config('opciones.types'),null,['class'=>'form-control']) !!}
        {!! Form::select('esta', config('estados.estas'),null,['class'=>'form-control']) !!}
    </div>
        {!! Form::submit('Buscar',['class'=>'btn btn-info']) !!}
{!! Form::close() !!}