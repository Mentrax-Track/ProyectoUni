<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
    <li class="list-group-item list-group-item-success">
      <div class="form-group">
              <center>{!! Form::label('Nombre y apellido de Encargado') !!}</center>
              {!! Form::select('user_id',$user_id,null,['class'=>'js-example-responsive','style'=>'width: 100%','placeholder'=>'Seleccione un responsable','data-error'=>'Seleccione a un Encargado','required','id'=>'user_id','value'=>'id']) !!}
              <center><div class="help-block with-errors"></div></center>
      </div>
    </li>
  </div>
  <div class="col-md-4"></div>
</div>
 
<p class="www text-center">Datos del Viaje</p>
<div class="row">
  <li class="list-group-item list-group-item-success col-md-12">
    <div class="col-md-2"></div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('Fecha Inicial:') !!}
            <div class='input-group date ' id='datetimepicker6'>
                {!! Form::text('fecha_inicial',null,['class'=>'form-control', 'placeholder'=>'Ingrese la fecha de inicio','data-error'=>'Inserte la fecha Inicial','required']) !!}
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
            <center><div class="help-block with-errors"></div></center>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group ">
            {!! Form::label('Fecha Final:') !!}
            <div class='input-group date ' id='datetimepicker7'>
                {!! Form::text('fecha_final',null,['class'=>'form-control', 'placeholder'=>'Ingrese la fecha de inicio','data-error'=>'Inserte la fecha Final','required']) !!}
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
            <center><div class="help-block with-errors"></div></center>
        </div>
     </div>
    <div class="col-md-2"></div>
  </li>
</div>
<div class="row">
  <li class="list-group-item list-group-item-success col-md-12">
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
            {!! Form::text('objetivo',null,['class'=>'form-control', 'placeholder'=>'Ingrese el título del viaje','data-error'=>'Ingrese un título u objetivo...','required']) !!}
            <center><div class="help-block with-errors"></div></center>
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
            <center>{!! Form::label('Número de Pasajeros:') !!}</center>
            {!! Form::number('pasajeros',null,['class'=>'form-control', 'placeholder'=>'Ingrese el número de pasajeros','data-error'=>'Ingrese el número de pasajeros','required']) !!}
            <center><div class="help-block with-errors"></div></center>
    </div>
  </div>
  </li>
</div>



