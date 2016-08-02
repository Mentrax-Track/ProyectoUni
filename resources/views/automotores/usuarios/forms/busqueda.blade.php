{!! Form::model(Request::only(['name','tipo']),['route'=>'users.index','method'=>'GET','class'=>'navbar-form navbar-left pull-right','role'=>'search']) !!}  
    <div class="form-group">
        {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre de usuario']) !!}
        {!! Form::select('tipo', config('completo.completos'),null,['class'=>'form-control']) !!}
    </div>
        {!! Form::submit('Buscar',['class'=>'btn btn-info']) !!}
{!! Form::close() !!}