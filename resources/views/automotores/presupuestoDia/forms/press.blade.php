<div class="panel panel-default">
    <div class="panel-body">

          <div class="jumbotron text-center">
            <div class="row">
              <div class="col-md-4">
                  <div>
                    {!! Form::label('Vehiculo:') !!}  
                  </div>
                  {!! Form::select('vehiculo',$vehiculos,null,['class'=>'form-control','placeholder'=>'Seleccione un Vehiculo','data-error'=>'Seleccione un Vehículo','required','id'=>'vehis','value'=>'id']) !!}
                  <center><div class="help-block with-errors"></div></center>
              </div>
              <div class="col-md-4">
                <div>
                    {!! Form::label('Chofer:') !!}
                </div>
                {!! Form::select('chofer',$choferes,null,['class'=>'form-control','id'=>'chofs','placeholder'=>'Seleccione un chofer','data-error'=>'Seleccione a un Chofer','required','value'=>'id']) !!}
                <center><div class="help-block with-errors"></div></center>
              </div>
              <div class="col-md-4">
                <div>
                    {!! Form::label('Encargado del Viaje:') !!}
                </div>
                {!! Form::select('encargado',$encargados,null,['class'=>'form-control','placeholder'=>'Seleccione un responsable','data-error'=>'Seleccione a un Encargado','required','id'=>'encars','value'=>'id']) !!}
                 <center><div class="help-block with-errors"></div></center>
              </div>
            </div>
          </div>
          <!--Hast aqui es datos de los usuarios-->

          <div class="col-md-5" >
            <div class="panel panel-default">
              <li class="list-group-item">
                  <center><h4><u>Rutas del Viaje</u></h4></center>
              </li>
              <div class="panel-body text-center jumbotron">
                <div class="row">
                  <div class="col-md-9">
                    {!! Form::label('Ruta:') !!}
                    {!! Form::select('destino_id[]',$destino_id,null,['class'=>'form-control','disabled']) !!}
                  </div>
                  <div class="col-md-3">
                    {!! Form::label('Km') !!}            
                    {!! Form::text('kilome',$ruta->kilome,['class'=>'form-control','disabled','id'=>'kilome','onkeyup'=>'sumar();']) !!}
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-9">
                    {!! Form::select('dest1[]',$dest1,null,['class'=>'form-control','disabled']) !!}
                  </div>
                  <div class="col-md-3">
                    {!! Form::text('k1',$ruta->k1,['class'=>'form-control','disabled','id'=>'k1','onkeyup'=>'sumar();']) !!}
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-9">
                    {!! Form::select('dest2[]',$dest2,null,['class'=>'form-control','disabled']) !!}
                  </div>
                  <div class="col-md-3">
                    {!! Form::text('k2',$ruta->k2,['class'=>'form-control','disabled','id'=>'k2','onkeyup'=>'sumar();']) !!}
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-9">
                    {!! Form::select('dest3[]',$dest3,null,['class'=>'form-control','disabled']) !!}
                  </div>
                  <div class="col-md-3">
                    {!! Form::text('k3',$ruta->k3,['class'=>'form-control','disabled','id'=>'k3','onkeyup'=>'sumar();']) !!}
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-9">
                    {!! Form::select('dest4[]',$dest4,null,['class'=>'form-control','disabled']) !!}
                  </div>
                  <div class="col-md-3">
                    {!! Form::text('k4',$ruta->k4,['class'=>'form-control','disabled','id'=>'k4','onkeyup'=>'sumar();']) !!}
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-9">
                    {!! Form::select('dest5[]',$dest5,null,['class'=>'form-control','disabled']) !!}
                  </div>
                  <div class="col-md-3">
                    {!! Form::text('k5',$ruta->k5,['class'=>'form-control','disabled','id'=>'k5','onkeyup'=>'sumar();']) !!}
                  </div>
                </div>
                <li class="list-group-item">
                    <div class="btn-group" role="group">
                        {!! Form::label('Adicional:') !!}
                    </div>
                    <div class="btn-group" role="group">
                         {!! Form::text('adicional',$ruta->adicional,['class'=>'form-control','disabled','id'=>'adicional','onkeyup'=>'sumar();']) !!}

                    </div></br>
                    <div class="btn-group" role="group">
                        {!! Form::label('Km. Total:') !!}
                    </div>
                    <div class="btn-group" role="group">
                        {!! Form::text('total1',$ruta->total,['class'=>'form-control','disabled','id'=>'total']) !!}
                    </div>
                </li>
              </div>
            </div>
          <!--Hasta aqui las destinos y kilometrajes de las rutas-->

      
          </div>
          <div class="col-md-7" >
              <div class="panel panel-default">
              <li class="list-group-item">
                  <center><h4><u>Descripción del Presupuesto</u></h4></center>
              </li>
              <div class="panel-body text-center jumbotron">
                  <div class="row"> 
                      <div class="col-md-5 btn-group" role="group">
                          {!! Form::label('Combustible (Litros)') !!}
                          {!! Form::text('combustible',null,['class'=>'form-control','id'=>'combu','onkeyup'=>'sumar();']) !!}
                                
                      </div>
                      <div class="col-md-3 btn-group"   role="group">
                          {!! Form::label('Division Km.') !!}
                          {!! Form::text('division',null,['class'=>'form-control','id'=>'divi','onkeyup'=>'sumar();']) !!}
                                
                      </div>
                      <div class="col-md-4 btn-group"   role="group">
                          {!! Form::label('Litros') !!}
                          {!! Form::text('litros',null,['class'=>'form-control','id'=>'li',' value'=>'0']) !!}
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-4 btn-group" role="group">
                          {!! Form::label('Nro. de Vuelta') !!}    
                          {!! Form::number('vuelta',null,['class'=>'form-control','data-error'=>'Inserte el número de vuelta','required']) !!}
                          <center><div class="help-block with-errors"></div></center>
                      </div>
                      <div class="col-md-5 btn-group" role="group">
                          {!! Form::label('Fecha del Nro. de Vuelta') !!}    
                          <div class='input-group date' id='datetimepicker8'>
                          {!! Form::text('fechavu',null,['class'=>'form-control','data-error'=>'Seleccione una fecha','required']) !!}
                          <center><div class="help-block with-errors"></div></center>
                          <span class="input-group-addon">
                             <span class="glyphicon glyphicon-calendar"></span>
                          </span>
                          </div>
                      </div>
                      <div class="col-md-3 btn-group" role="group">
                          {!! Form::label('Nro. de Orden') !!}    
                          {!! Form::number('numero',null,['class'=>'form-control','data-error'=>'Inserte el número de Orden','required']) !!}
                          <center><div class="help-block with-errors"></div></center>
                      </div>
                  </div>
                  <div class="row"> 
                      <div class="col-md-2 btn-group"   role="group">
                          {!! Form::label('Viaje') !!}
                          {!! Form::date('viaje_id',$viaje->id,['class'=>'form-control']) !!}
                      </div>
                      <div class="col-md-4 btn-group"   role="group">
                          {!! Form::label('Inicio del Viaje') !!}
                          {!! Form::date('fecha_inicial',$viaje->fecha_inicial,['class'=>'form-control','disabled']) !!}
                      </div>
                      <div class="col-md-6 btn-group" role="group">
                          {!! Form::label('Motivo del viaje') !!}
                          {!! Form::text('motivo',$viaje->objetivo,['class'=>'form-control','id'=>'combustible']) !!}
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6 btn-group"   role="group">
                          {!! Form::label('Entidad:') !!}
                          {!! Form::text('entidad',$viaje->entidad,['class'=>'form-control','data-error'=>'Inserte la Entidad','required']) !!}
                          <center><div class="help-block with-errors"></div></center>
                      </div>
                      <div class="col-md-6 btn-group"   role="group">
                            {!! Form::label('Tipo de viaje') !!}
                            {!! Form::text('tipo',$viaje->tipo,['class'=>'form-control','disabled']) !!}
                      </div>
                  </div>          
              </div>
          </div>
    </div>

    </div>
</div>



