<div class="row text-center">
  <ul class="list-group">
    <li class="list-group-item list-group-item-success col-md-12">  
        <div class="col-md-4">
            <div>
              {!! Form::label('Vehiculo:') !!}  
            </div>
            {!! Form::select('vehiculo',$vehiculos,null,['class'=>'js-example-responsive','style'=>'width: 100%','placeholder'=>'Seleccione un Vehiculo','data-error'=>'Seleccione un Vehículo','required','id'=>'vehis','value'=>'id']) !!}
            <center><div class="help-block with-errors"></div></center>
        </div>
        <div class="col-md-4">
          <div>
              {!! Form::label('Chofer:') !!}
          </div>
          {!! Form::select('chofer',$choferes,null,['class'=>'js-example-responsive','style'=>'width: 100%','id'=>'chofs','placeholder'=>'Seleccione un chofer','data-error'=>'Seleccione a un Chofer','required','value'=>'id']) !!}
          <center><div class="help-block with-errors"></div></center>
        </div>
        <div class="col-md-4">
          <div>
              {!! Form::label('Encargado del Viaje:') !!}
          </div>
          {!! Form::select('encargado',$encargados,null,['class'=>'js-example-responsive','style'=>'width: 100%','placeholder'=>'Seleccione un responsable','data-error'=>'Seleccione a un Encargado','required','id'=>'encars','value'=>'id']) !!}
           <center><div class="help-block with-errors"></div></center>
        </div>
    </li>
    <center><h4 class="www"><strong><u>Viaje de  {{ $viaje->entidad }} con  <font color="red">{{ $ruta->total }} km.</font> </u></strong></h4></center>
    <li class="list-group-item list-group-item-success col-md-12">  
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="col-md-4 btn-group"   role="group">
                {!! Form::label('Kilometraje total') !!}
                {!! Form::number('combustible',null,['class'=>'form-control','id'=>'combu','onkeyup'=>'sumar();','placeholder'=>'Ejm. 100']) !!}
            </div>
            <div class="col-md-4 btn-group"   role="group">
                {!! Form::label('Gasolina/Diesel') !!}
                {!! Form::number('division',null,['class'=>'form-control','id'=>'divi','onkeyup'=>'sumar();','placeholder'=>'Ejm. 4 o 6 ']) !!}
                      
            </div>
            <div class="col-md-4 btn-group"   role="group">
                {!! Form::label('Litros') !!}
                {!! Form::text('litros',null,['class'=>'form-control','id'=>'li',' value'=>'0','readonly'=>'readonly']) !!}
            </div>
        </div>

    </li>
    <li class="list-group-item list-group-item-success col-md-12">  
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="col-md-4 btn-group"   role="group">
                {!! Form::label('Nro. de Vuelta') !!}    
                {!! Form::number('vuelta',null,['class'=>'form-control','data-error'=>'Inserte el número de vuelta','required']) !!}
                <center><div class="help-block with-errors"></div></center>
            </div>
            <div class="col-md-4 btn-group"   role="group">
                {!! Form::label('Fecha del Nro. de Vuelta') !!}    
                <div class='input-group date' id='datetimepicker8'>
                {!! Form::text('fechavu',null,['class'=>'form-control','data-error'=>'Seleccione una fecha','required']) !!}
                <center><div class="help-block with-errors"></div></center>
                <span class="input-group-addon">
                   <span class="glyphicon glyphicon-calendar"></span>
                </span>
                </div>
                      
            </div>
            <div class="col-md-4 btn-group"   role="group">
                {!! Form::label('Nro. de Orden') !!}    
                {!! Form::number('numero',null,['class'=>'form-control','data-error'=>'Inserte el número de Orden','required']) !!}
                <center><div class="help-block with-errors"></div></center>
            </div>
        </div>
        <input type="hidden" name="viaje_id" value="{{ $viaje->id }}" />
        <input type="hidden" name="fecha_inicial" value="{{ $viaje->fecha_inicial }}" />
    </li>
    <li class="list-group-item list-group-item-success col-md-12">  
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="col-md-12 btn-group"   role="group">
                {!! Form::label('Objetivo del viaje') !!}
                {!! Form::text('motivo',$viaje->objetivo,['class'=>'form-control','id'=>'combustible']) !!}
            </div>
        </div>
        <input type="hidden" name="entidad" value="{{ $viaje->entidad }}" />
        <input type="hidden" name="tipo" value="{{ $viaje->tipo }}" />
    </li>
  </ul>
</div> 




