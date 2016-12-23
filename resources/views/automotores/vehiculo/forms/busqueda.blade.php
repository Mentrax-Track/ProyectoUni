{!! Form::model(Request::all(),['route'=>'vehiculos.index','method'=>'GET','class'=>'navbar-form navbar-left pull-left','role'=>'search']) !!}  

    {!! Form::text('placa',null,['class'=>'form-control input-sm','placeholder'=>'Código o Placa'])!!}
    {!! Form::select('estado',config('vehiculos.estados'),null,['class'=>'js-example-responsive','placeholder'=>'Estado','id'=>'estado'])!!}
    
    <button type="submit" class="btn btn-primary">
        <span class="glyphicon glyphicon-search"> Buscar</span>
    </button>
  
{!! Form::close() !!}