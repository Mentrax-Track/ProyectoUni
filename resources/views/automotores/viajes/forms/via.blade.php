<div class="list-group-item">
<div class="jumbotron ">
<center><p class="www">Seleccione las Rutas</p></center>
<!--Destino-->
<div class="row text-center">
  <div class="col-md-3"></div>
  <div class="col-md-6">
    <div class="form-group">
        <div class="btn-group btn-group-justified" role="group" aria-label="...">
            <li class="list-group-item">
                <div class="btn-group" role="group">
                    <center>{!! Form::label('Destino: ') !!}</center>
                    {!! Form::select('destino_id',$destino,null,['class'=>'form-control','placeholder'=>'Seleccione un Destino']) !!}
                </div>
                <div class="btn-group" role="group">
                    <center>{!! Form::label('Kilometraje: ') !!}</center>
                    {!! Form::text('k1',null,['class'=>'form-control', 'placeholder'=>'Kilometraje']) !!}
                </div>
            </li>
            <li class="list-group-item">
                <div class="btn-group" role="group">
                    {!! Form::select('destino_id',$destino,null,['class'=>'form-control','placeholder'=>'Seleccione un Destino']) !!}
                </div>
                <div class="btn-group" role="group">
                    {!! Form::text('k2',null,['class'=>'form-control', 'placeholder'=>'Kilometraje']) !!}
                </div>
            </li>
            <li class="list-group-item">
                <div class="btn-group" role="group">
                    {!! Form::select('destino_id',$destino,null,['class'=>'form-control','placeholder'=>'Seleccione un Destino']) !!}
                </div>
                <div class="btn-group" role="group">
                    {!! Form::text('k3',null,['class'=>'form-control', 'placeholder'=>'Kilometraje']) !!}
                </div>
            </li>
            <li class="list-group-item">
                <div class="btn-group" role="group">
                    {!! Form::select('destino_id',$destino,null,['class'=>'form-control','placeholder'=>'Seleccione un Destino']) !!}
                </div>
                <div class="btn-group" role="group">
                    {!! Form::text('k4',null,['class'=>'form-control', 'placeholder'=>'Kilometraje']) !!}
                </div>
            </li>
            <li class="list-group-item">
                <div class="btn-group" role="group">
                    {!! Form::select('destino_id',$destino,null,['class'=>'form-control','placeholder'=>'Seleccione un Destino']) !!}
                </div>
                <div class="btn-group" role="group">
                    {!! Form::text('k5',null,['class'=>'form-control', 'placeholder'=>'Kilometraje']) !!}
                </div>
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
  <div class="col-md-3"></div>
</div>
<!--Hasta aqui destino-->
<center><h4><p class="www">Inserte los datos del Viaje</p></h4></center>
<div class="row list-group-item text-center">
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('Encargado de Viaje: ') !!}
            {!! Form::select('encargado_id',$encargado,null,['class'=>'form-control','placeholder'=>'Seleccione un Encargado']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('Chofer: ') !!}
            {!! Form::select('chofer_id',$chofer,null,['class'=>'form-control','placeholder'=>'Seleccione un Chofer']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('Vehiculo: ') !!}
            {!! Form::select('vehiculo_id',$vehiculo,null,['class'=>'form-control','placeholder'=>'Seleccione un Vehiculo']) !!}
        </div>
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



