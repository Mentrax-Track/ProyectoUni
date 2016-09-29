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
                        <div class="input-group date">
                            {!! Form::text('kilome',null,['class'=>'form-control','id'=>'kilome','value'=>'0','data-error'=>'No se acepta valor vacio','required']) !!}
                            <span class="input-group-addon">
                              <span class="glyphicon glyphicon-road"></span>
                            </span>
                        </div>
                        <center><div class="help-block with-errors"></div></center>
                    </div>
                </div>
                <div class="form-group row">   
                    <div class="col-md-8 btn-group" role="group">
                        {!! Form::select('dest1',$destino,null,['class'=>'form-control','id'=>'dest1','data-error'=>'Escoja un destino','required']) !!}
                        <center><div class="help-block with-errors"></div></center>
                    </div>
                    <div class="col-md-4 btn-group" role="group">
                        <div class="input-group date">
                            {!! Form::text('k1',null,['class'=>'form-control','id'=>'k1','value'=>'0','data-error'=>'No se acepta valor vacio','required']) !!}
                            <span class="input-group-addon">
                              <span class="glyphicon glyphicon-road"></span>
                            </span>
                        </div>
                        <center><div class="help-block with-errors"></div></center>
                    </div>
                </div>
                <div class="form-group row">   
                    <div class="col-md-8 btn-group" role="group">
                        {!! Form::select('dest2',$destino,null,['class'=>'form-control','id'=>'dest2']) !!}
                    </div>
                    <div class="col-md-4 btn-group" role="group">
                        <div class="input-group date">
                            {!! Form::text('k2',null,['class'=>'form-control','id'=>'k2','value'=>'0']) !!}
                            <span class="input-group-addon">
                              <span class="glyphicon glyphicon-road"></span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group row">   
                    <div class=" col-md-8 btn-group" role="group">
                        {!! Form::select('dest3',$destino,null,['class'=>'form-control','id'=>'dest3']) !!}
                    </div>
                    <div class="col-md-4 btn-group" role="group">
                        <div class="input-group date">
                            {!! Form::text('k3',null,['class'=>'form-control','id'=>'k3','value'=>'0']) !!}
                            <span class="input-group-addon">
                              <span class="glyphicon glyphicon-road"></span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group row">   
                    <div class="col-md-8 btn-group" role="group">
                        {!! Form::select('dest4',$destino,null,['class'=>'form-control','id'=>'dest4']) !!}
                    </div>
                    <div class="col-md-4 btn-group" role="group">
                        <div class="input-group date">
                            {!! Form::text('k4',null,['class'=>'form-control','id'=>'k4','value'=>'0']) !!}
                            <span class="input-group-addon">
                              <span class="glyphicon glyphicon-road"></span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group row">   
                    <div class="col-md-8 btn-group" role="group">
                        {!! Form::select('dest5',$destino,null,['class'=>'form-control','id'=>'dest5']) !!}
                    </div>
                    <div class="col-md-4 btn-group" role="group">
                       <div class="input-group date">
                            {!! Form::text('k5',null,['class'=>'form-control','id'=>'k5','value'=>'0']) !!}
                            <span class="input-group-addon">
                              <span class="glyphicon glyphicon-road"></span>
                            </span>
                        </div>
                    </div>
                </div>
            </li>

            <li class="list-group-item">
                <div class="btn-group" role="group">
                    {!! Form::label('Adicional:') !!}
                </div>
                <div class="btn-group" role="group">
                    <div class="input-group date">
                            {!! Form::text('adicional',null,['class'=>'form-control','id'=>'adicional','data-error'=>'Inserte un valor','required','onkeyup'=>'sumar();']) !!}
                            <span class="input-group-addon">
                              <span class="glyphicon glyphicon-transfer"></span>
                            </span>
                    </div>
                     <center><div class="help-block with-errors"></div></center> 
                </div>
            </li>
            <li class="list-group-item">
                <div class="btn-group" role="group">
                    {!! Form::label('Km. Total:') !!}
                </div>
                <div class="btn-group" role="group">
                    <div class="input-group date">        
                         {!! Form::text('total',null,['class'=>'form-control','id'=>'total',' value'=>'0','data-error'=>'Este campo debe estar lleno','required']) !!}
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-road">km.</span>
                        </span>
                    </div>
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
                <div class="input-group date">
                    {!! Form::select('chofer[]',$choferes,null,['class'=>'form-control','multiple'=>'multiple','id'=>'chofer','data-error'=>'Seleccione a los choferes ','required']) !!}
                    <span class="input-group-addon">
                       <i class="fa fa-users" aria-hidden="true"></i>
                    </span>
                </div>
                <center><div class="help-block with-errors"></div></center>
            </div>
        </li>
        
        <li class="list-group-item">
            <div class="form-group">
                {!! Form::label('Encargado de Viaje: ') !!}
                <div class="input-group date">
                    {!! Form::select('encargado[]',$encargados,null,['class'=>'form-control','multiple'=>'multiple','id'=>'encargado','data-error'=>'Seleccione a los encargados','required']) !!}
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-user"></span>
                    </span>
                </div>
                <center><div class="help-block with-errors"></div></center>
            </div>
        </li>
        <center><h4><p class="www">Vehiculos designados</p></h4></center>
        <li class="list-group-item">
            <div class="form-group">
                {!! Form::label('Vehiculo: ') !!}
                <div class="input-group date">
                    {!! Form::select('vehiculo[]',$vehiculos,null,['class'=>'form-control','multiple'=>'multiple','id'=>'vehiculo','data-error'=>'Seleccione a los vehiculos','required']) !!}
                    <span class="input-group-addon">
                        <i class="fa fa-bus" aria-hidden="true"></i>
                    </span>
                </div>
                <center><div class="help-block with-errors"></div></center>
            </div>
        </li>
        <center><h4><p class="www">Entidad</p></h4></center>
        <li class="list-group-item">
            <div class="form-group">
                {!! Form::label('Entidad/Carrera') !!}
                <div class="input-group date">
                    <input class="form-control" name="entidad" type="text" value="{{$reserva->entidad}}" id="entidad" data-error="Seleccione una Entidad" required>
                    <span class="input-group-addon">
                        <i class="fa fa-university" aria-hidden="true"></i>
                    </span>
                </div>
                <center><div class="help-block with-errors"></div></center>
            </div>
        </li>
  </div>
</div>
<!--Hasta aqui destino-->
<center><h4><p class="www">Ingrese los datos del viaje</p></h4></center>
<div class="row list-group-item text-center">
  <div class="col-md-5">
    <div class="form-group">
        {!! Form::label('Tipo:') !!}
        {!! Form::select('tipo',config('viaTipo.viaTipos'),null,['class'=>'form-control','data-error'=>'Seleccione un tipo de viaje','required'])!!}
        <center><div class="help-block with-errors"></div></center>
    </div>
  </div>
  <div class="col-md-2">
    <div class="form-group">
        {!! Form::label('# Pasajeros:') !!}

        <input class="form-control" name="pasajeros" type="number" value="{{$reserva->pasajeros}}"  data-error="Inserte el número de pasajeros" required>
        <center><div class="help-block with-errors"></div></center>
            
    </div>
  </div>
  <div class="col-md-5">
    <div class="form-group">
        {!! Form::label('Objetivo:') !!}
        <div class="input-group date">
            <input class="form-control" name="objetivo" type="text" value="{{$reserva->objetivo}}"  data-error="Inserte el objetivo del viaje" required>
            <span class="input-group-addon">
                <i class="fa fa-file-text-o" aria-hidden="true"></i>
            </span>
        </div>
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



