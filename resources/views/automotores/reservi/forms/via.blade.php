<div class="list-group-item">
<div class="jumbotron">
<div class="row text-center">
  <div class="col-md-6">
    <div class="form-group">
        <center><h4><p class="www">Seleccione las rutas</p></h4></center>
        <div class="btn-group btn-group-justified" role="group" aria-label="...">
            <li class="list-group-item">
                <div class="form-group row">   
                    <div class="col-md-8 btn-group" role="group">
                        <center>{!! Form::label('Destino: ') !!}</center>
                        {!! Form::select('destino_id',$destino,null,['class'=>'form-control','id'=>'destino_id','data-error'=>'Escoja un destino','required']) !!}
                        <center><div class="help-block with-errors"></div></center>
                    </div>
                    <div class="col-md-4 btn-group" role="group">
                        <center>{!! Form::label('Kilometraje: ') !!}</center>
                        <input type="text" id="kilome" name="kilome" onkeyup="sumar();" class="form-control" data-error="Seleccione o inserte un valor" required>
                        <center><div class="help-block with-errors"></div></center>
                    </div>
                </div>
                <div class="form-group row">   
                    <div class="col-md-8 btn-group" role="group">
                        {!! Form::select('dest1',$destino,null,['class'=>'form-control','id'=>'dest1','data-error'=>'Escoja un destino','required']) !!}
                        <center><div class="help-block with-errors"></div></center>
                    </div>
                    <div class="col-md-4 btn-group" role="group">
                        <input type="text" id="k1" name="k1" onkeyup="sumar();" class="form-control" data-error="Seleccione o inserte un valor" required>
                        <center><div class="help-block with-errors"></div></center>
                    </div>
                </div>
                <div class="form-group row">   
                    <div class="col-md-8 btn-group" role="group">
                        {!! Form::select('dest2',$destino,null,['class'=>'form-control','id'=>'dest2']) !!}
                    </div>
                    <div class="col-md-4 btn-group" role="group">
                        <input type="text" id="k2" name="k2" onkeyup="sumar();" class="form-control">
                    </div>
                </div>
                <div class="form-group row">   
                    <div class=" col-md-8 btn-group" role="group">
                        {!! Form::select('dest3',$destino,null,['class'=>'form-control','id'=>'dest3']) !!}
                    </div>
                    <div class="col-md-4 btn-group" role="group">
                        <input type="text"  id="k3" name="k3" onkeyup="sumar();" class="form-control">
                    </div>
                </div>
                <div class="form-group row">   
                    <div class="col-md-8 btn-group" role="group">
                        {!! Form::select('dest4',$destino,null,['class'=>'form-control','id'=>'dest4']) !!}
                    </div>
                    <div class="col-md-4 btn-group" role="group">
                        <input type="text"  id="k4" name="k4" onkeyup="sumar();" class="form-control">
                    </div>
                </div>
                <div class="form-group row">   
                    <div class="col-md-8 btn-group" role="group">
                        {!! Form::select('dest5',$destino,null,['class'=>'form-control','id'=>'dest5']) !!}
                    </div>
                    <div class="col-md-4 btn-group" role="group">
                       <input type="text" id="k5"   name="k5" onkeyup="sumar();" class="form-control" >
                    </div>
                </div>
            </li>

            <li class="list-group-item">
                <div class="btn-group" role="group">
                    {!! Form::label('Adicional:') !!}
                </div>
                <div class="btn-group" role="group">
                     <input type="text" id="adicional" name="adicional" onkeyup="sumar();" class="form-control" placeholder="Ejemplo: 10.1" data-error="Inserte un valor" required>
                     <center><div class="help-block with-errors"></div></center> 
                </div>
            </li>
            <li class="list-group-item">
                <div class="btn-group" role="group">
                    {!! Form::label('Km. Total:') !!}
                </div>
                <div class="btn-group" role="group">
                     <input type="text" id="total" name="total" value="0" class="form-control" data-error="Este campo debe estar lleno" required>
                     <center><div class="help-block with-errors"></div></center>
                </div>
            </li>
        </div>
    </div>
  </div>
  
  <div class="col-md-6">
    <center><h4><p class="www">Ingrese a los responsables</p></h4></center>
        <li class=" list-group-item"> 
           <div class="form-group">
                {!! Form::label('Chofer: ') !!}
                {!! Form::select('chofer[]',$choferes,null,['class'=>'form-control','multiple'=>'multiple','id'=>'chofer','data-error'=>'Seleccione a los choferes ','required']) !!}
                <center><div class="help-block with-errors"></div></center>
            </div>
        </li>
        
        <li class="list-group-item">
            <div class="form-group">
                {!! Form::label('Encargado de Viaje: ') !!}
                {!! Form::select('encargado[]',$encargados,null,['class'=>'form-control','multiple'=>'multiple','id'=>'encargado','data-error'=>'Seleccione a los encargados','required']) !!}
                <center><div class="help-block with-errors"></div></center>
            </div>
        </li>
        <center><h4><p class="www">Vehiculos designados</p></h4></center>
        <li class="list-group-item">
            <div class="form-group">
                {!! Form::label('Vehiculo: ') !!}
                {!! Form::select('vehiculo[]',$vehiculos,null,['class'=>'form-control','multiple'=>'multiple','id'=>'vehiculo','data-error'=>'Seleccione a los vehiculos','required']) !!}
                <center><div class="help-block with-errors"></div></center>
            </div>
        </li>
        <center><h4><p class="www">Entidad</p></h4></center>
        <li class="list-group-item">
            <div class="form-group">
                {!! Form::label('Entidad/Carrera') !!}
                <input class="form-control" name="entidad" type="text" value="{{$reserva->entidad}}" id="entidad" data-error="Seleccione una Entidad" required>
           
                <center><div class="help-block with-errors"></div></center>
            </div>
        </li>
  </div>
</div>
<!--Hasta aqui destino-->
<center><h4><p class="www">Ingrese los datos del viaje</p></h4></center>
<div class="row list-group-item text-center">
  <div class="col-md-4">
    <div class="form-group">
        {!! Form::label('Tipo:') !!}
        {!! Form::select('tipo',config('viaTipo.viaTipos'),null,['class'=>'form-control','data-error'=>'Seleccione un tipo de viaje','required'])!!}
        <center><div class="help-block with-errors"></div></center>
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
        {!! Form::label('Objetivo:') !!}
        
        <input class="form-control" name="objetivo" type="text" value="{{$reserva->objetivo}}"  data-error="Inserte el objetivo del viaje" required>
        <center><div class="help-block with-errors"></div></center>     
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
        {!! Form::label('Número de Pasajeros:') !!}

        <input class="form-control" name="pasajeros" type="number" value="{{$reserva->pasajeros}}"  data-error="Inserte el número de pasajeros" required>
        <center><div class="help-block with-errors"></div></center>   
    </div>
  </div>
</div>
<div class="row list-group-item text-center">
    <div class="col-md-1"></div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('Fecha Inicial:') !!}
            <div class='input-group date ' id='datetimepicker6'>
                
                <input class="form-control" name="fecha_inicial" type="text" value="{{$reserva->fecha_inicial}}"  data-error="Inserte la fecha Inicial" required>
                <center><div class="help-block with-errors"></div></center>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
    <div class="col-md-2"></div>
    <div class="col-md-4">
        <div class="form-group ">
            {!! Form::label('Fecha Final:') !!}
            <div class='input-group date ' id='datetimepicker7'>
                
                <input class="form-control" name="fecha_final" type="text" value="{{$reserva->fecha_final}}"  data-error="Inserte la fecha Final" required>
                <center><div class="help-block with-errors"></div></center>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
    
     <div class="col-md-1"></div>
</div>


<!--Faltan 
</div>
</div>
-->



