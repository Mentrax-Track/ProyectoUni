<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
      <div class="form-group">
              <center>{!! Form::label('Nombre y apellido de Encargado') !!}</center>
              {!! Form::select('encargado',$user,null,['class'=>'form-control','placeholder'=>'Seleccione un Encargado','data-error'=>'La Encargado es obligatorio...','required']) !!}
              <center><div class="help-block with-errors"></div></center>
      </div>
  </div>
  <div class="col-md-4"></div>
</div>
 
<div class="list-group-item">
<div class="jumbotron">
<p class="www text-center">Datos del Viaje</p>


<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('Fecha Inicial:') !!}
            <div class='input-group date ' id='datetimepicker6'>
                {!! Form::text('fecha_inicial',null,['class'=>'form-control', 'placeholder'=>'Ingrese la fecha de inicio','data-error'=>'Inserte la fecha Inicial','required']) !!}
                <center><div class="help-block with-errors"></div></center>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group ">
            {!! Form::label('Fecha Final:') !!}
            <div class='input-group date ' id='datetimepicker7'>
                {!! Form::text('fecha_final',null,['class'=>'form-control', 'placeholder'=>'Ingrese la fecha de inicio','data-error'=>'Inserte la fecha Inicial','required']) !!}
                <center><div class="help-block with-errors"></div></center>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
     </div>
    <div class="col-md-2"></div>
</div>
<div class="row">
  <div class="col-md-4">
    <div class="form-group">
            <center>{!! Form::label('Entidad/Carrera:') !!}</center>
            {!! Form::text('entidad',null,['class'=>'form-control', 'placeholder'=>'Ingrese una Entidad','data-error'=>'Ingrese una entidad reservante','required','id'=>'entidad']) !!}
            <center><div class="help-block with-errors"></div></center>
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
            <center>{!! Form::label('Objetivo y/o Título:') !!}</center>
            {!! Form::text('objetivo',null,['class'=>'form-control', 'placeholder'=>'Ingrese el título del viaje','data-error'=>'Ingrese un titulo u objetivo...','required']) !!}
            <center><div class="help-block with-errors"></div></center>
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
            <center>{!! Form::label('Número de Pasajeros:') !!}</center>
            {!! Form::number('pasajeros',null,['class'=>'form-control', 'placeholder'=>'Ingrese el número de pasajeros','data-error'=>'Ingrese el numero de pasageros','required']) !!}
            <center><div class="help-block with-errors"></div></center>
    </div>
  </div>
</div>
</div>
</div>



