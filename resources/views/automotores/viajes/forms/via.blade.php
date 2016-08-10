
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('Nombre y apellido del chofer: ') !!}
            {!! Form::select('chofer_id',$chofer,null,['class'=>'form-control','placeholder'=>'Seleccione un Chofer']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('Vehiculo Destinado: ') !!}
            {!! Form::select('vehiculo_id',$vehiculo,null,['class'=>'form-control','placeholder'=>'Seleccione un vehiculo']) !!}
        </div>
    </div>
    <div class="col-md-2"></div>
</div>
<div class="row">
    <div class="col-md-4"></div>
    aqui
    <div class="col-md-4"></div>
</div>
 
 

<h3>Datos del Viaje</h3>
<div class="row">
  <div class="col-md-4">
    <div class="form-group">
            {!! Form::label('Tipo:') !!}
            {!! Form::text('tipo',null,['class'=>'form-control', 'placeholder'=>'Ingrese el título del viaje']) !!}
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
            {!! Form::label('Objetivo:') !!}
            {!! Form::text('objetivo',null,['class'=>'form-control', 'placeholder'=>'Ingrese el número de pasajeros']) !!}
    </div>
  </div>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('Número de Pasajeros:') !!}
            {!! Form::number('numero',null,['class'=>'form-control', 'placeholder'=>'Ingrese el número de pasajeros']) !!}
        </div>
    </div>
    <div class="col-md-1"></div>
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
</div>




