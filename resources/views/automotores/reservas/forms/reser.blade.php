<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
      <div class="form-group">
              <center>{!! Form::label('Nombre y apellido de Encargado') !!}</center>
              {!! Form::select('encargado',$user,null,['class'=>'form-control','placeholder'=>'Seleccione un Encargado']) !!}
      </div>
  </div>
  <div class="col-md-4"></div>
</div>
 
<div class="list-group-item">
<div class="jumbotron">
<p class="www text-center">Datos del Viaje</p>
<div class="row">
  <div class="col-md-4">
    <div class="form-group">
            {!! Form::label('Entidad:') !!}
            {!! Form::text('entidad',null,['class'=>'form-control', 'placeholder'=>'Ingrese el nombre de la carrera']) !!}
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
            {!! Form::label('Objetivo y/o Título:') !!}
            {!! Form::text('objetivo',null,['class'=>'form-control', 'placeholder'=>'Ingrese el título del viaje']) !!}
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
            {!! Form::label('Número de Pasajeros:') !!}
            {!! Form::number('numero',null,['class'=>'form-control', 'placeholder'=>'Ingrese el número de pasajeros']) !!}
    </div>
  </div>
</div>

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-4">
        <div class="form-group form-group-lg pa">
            {!! Form::label('Fecha de Inicio:') !!}
            <div class='input-group date input-group-sm' id='datetimepicker6'>              
                {!! Form::text('fecha_inicial',null,['class'=>'form-control', 'placeholder'=>'Ingrese la fecha de inicio']) !!}
                <span class="input-group-addon" id="sizing-addon3">
                    <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                </span>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group form-group-lg pa">
            {!! Form::label('Fecha Final:') !!}
            <div class='input-group date input-group-sm' id='datetimepicker7'>    
                {!! Form::text('fecha_final',null,['class'=>'form-control', 'placeholder'=>'Ingrese la fecha final']) !!}
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
     </div>
    <div class="col-md-2"></div>
</div>
</div>
</div>



