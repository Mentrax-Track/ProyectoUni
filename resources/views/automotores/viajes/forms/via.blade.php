<div class="list-group-item">
<div class="jumbotron ">
<center><p class="www">Seleccione las Rutas</p></center>
<!--Destino-->
<div class="row text-center">
  <div class="col-md-6">
    <div class="form-group">
        <div class="btn-group btn-group-justified" role="group" aria-label="...">
            <li class="list-group-item">
                <div class="form-group contenedor-de-destinos">   
                    <div class="btn-group" role="group">
                        <center>{!! Form::label('Destino: ') !!}</center>
                        {!! Form::select('destino_id',$destino,null,['class'=>'form-control','placeholder'=>'Seleccione un Destino','id'=>'destino_id']) !!}
                    </div>
                    <div class="btn-group" role="group">
                        <center>{!! Form::label('Kilometraje: ') !!}</center>
                        <text class="form-control input-sm" name="kilome" id="kilome">
                            <option value=""></option>
                        </text>
                    </div>
                </div>
                <a href="#" class="btn btn-sm btn-info btn-add-more-destino">Añadir mas Destinos</a>
            </li>

            <li class="list-group-item">
                <div class="btn-group" role="group">
                    {!! Form::label('Adicional:') !!}
                </div>
                <div class="btn-group" role="group">
                    {!! Form::text('k6',null,['class'=>'form-control', 'placeholder'=>'Kilometraje']) !!}
                </div>
            </li>
            <li class="list-group-item">
                <div class="btn-group" role="group">
                    {!! Form::label('Km. Total:') !!}
                </div>
                <div class="btn-group" role="group">
                    {!! Form::text('total',null,['class'=>'form-control', 'placeholder'=>'Kilometraje']) !!}
                </div>
            </li>
        </div>
    </div>
  </div>
  
  <div class="col-md-6">
        <li class=" list-group-item"> 
           <div class="form-group">
                {!! Form::label('Chofer: ') !!}
                 <select name="chofer[]" class="form-control" multiple="multiple" id="chofer"></select>
                <!--{!! Form::select('chofer_id',$chofer,null,['class'=>'form-control','placeholder'=>'Seleccione un Chofer']) !!}-->
            </div>
        </li>
        <li class="list-group-item">
            <div class="form-group">
                {!! Form::label('Vehiculo: ') !!}
                <select name="vehiculo[]" class="form-control" multiple="multiple" id="vehiculo"></select>
            </div>
        </li>
        <li class="list-group-item">
            <div class="form-group">
                {!! Form::label('Encargado de Viaje: ') !!}
                <select name="encargado[]" class="form-control" multiple="multiple" id="encargado"></select>
            </div>
        </li>
  </div>
</div>
<!--Hasta aqui destino-->
<center><h4><p class="www">Inserte los datos del Viaje</p></h4></center>
<div class="row list-group-item text-center">
    <div class="col-md-4">
        
    </div>
    <div class="col-md-4">
        
    </div>
    <div class="col-md-4">
        
    </div>
</div>
<div class="row list-group-item text-center">
  <div class="col-md-4">
    <div class="form-group">
            {!! Form::label('Entidad:') !!}
            {!! Form::text('entidad',null,['class'=>'form-control', 'placeholder'=>'Ingrese el título del viaje']) !!}
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
            {!! Form::label('Objetivo/Tipo:') !!}
            {!! Form::text('objetivo',null,['class'=>'form-control', 'placeholder'=>'Ingrese el número de pasajeros']) !!}
    </div>
  </div>
</div>
<div class="row list-group-item text-center">
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


<!--Faltan 
</div>
</div>
-->



