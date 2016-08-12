{!! Form::model(Request::all(),['route'=>'reservas.index','method'=>'GET','class'=>'navbar-form navbar-left pull-right','role'=>'search']) !!}  
    <div class="form-group">
        {!! Form::text('enti',null,['class'=>'form-control','placeholder'=>'Inserte la Entidad']) !!}
    </div>
        {!! Form::submit('Buscar',['class'=>'btn btn-info']) !!}
{!! Form::close() !!}
