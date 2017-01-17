{!! Form::model(Request::only(['name','tipo']),['route'=>'users.index','method'=>'GET','class'=>'navbar-form navbar-left pull-right','role'=>'search']) !!}  
    <div class="form-group">
        {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre de usuario']) !!}
        {!! Form::select('tipo', config('completo.completos'),null,['class'=>'form-control']) !!}
    </div>
    <button type="submit" class="btn btn-info">
        <span class="fa fa-search"> Buscar</span>
    </button>
{!! Form::close() !!}





