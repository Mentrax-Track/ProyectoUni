<!--laravelshop-->
<div class="jumbotron text-center">
    <input type="hidden" name="viaje_id" value='{{ $viaje->id }}' />
    <div class="row">
      <div class="col-md-3">
          <div>
            {!! Form::label('Vehículo:') !!}  
          </div>
          {!! Form::select('vehiculo',$vehiculos,null,['class'=>'form-control','placeholder'=>'Seleccione un Vehículo','data-error'=>'Seleccione un Vehículo','required','id'=>'vehi','value'=>'id']) !!}
          <center><div class="help-block with-errors"></div></center>
      </div>
      <div class="col-md-3">
        <div>
            {!! Form::label('Chofer:') !!}
        </div>
        {!! Form::select('chofer',$choferes,null,['class'=>'form-control','id'=>'chof','placeholder'=>'Seleccione un chofer','data-error'=>'Seleccione a un Chofer','required','value'=>'id']) !!}
        <center><div class="help-block with-errors"></div></center>
      </div>
      <div class="col-md-3">
        <div>
            {!! Form::label('Encargado del Viaje:') !!}
        </div>
        {!! Form::select('encargado',$encargados,null,['class'=>'form-control','placeholder'=>'Seleccione un responsable','data-error'=>'Seleccione a un Encargado','required','id'=>'encar','value'=>'id']) !!}
         <center><div class="help-block with-errors"></div></center>
      </div>
      <div class="col-md-3">
          <div>
            {!! Form::label('Entidad:') !!}  
          </div>
          {!! Form::text('entidad',$viaje->entidad,['class'=>'form-control','placeholder'=>'Seleccione una Entidad','data-error'=>'Seleccione/Inserte una Entidad','required','id'=>'entidad']) !!}
          <center><div class="help-block with-errors"></div></center>
      </div>
    </div><hr>
    <div class="row">
        <div class="col-md-3">
          <li class="list-group-item">
            <div class="form-group">
            {!! Form::label('Fecha de Partida:') !!}
              <div class='input-group date ' id='datetimepicker6'>
              {!! Form::text('fechapartida',$viaje->fecha_inicial,['class'=>'form-control','placeholder'=>'Fecha de viaje','data-error'=>'Seleccione una fecha','required','id'=>'feini','value'=>'id']) !!}
               <center><div class="help-block with-errors"></div></center>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
              </div>
            </div>
            <div class="form-group">
                {!! Form::label('Kilometraje:') !!}   
                {!! Form::number('kilopartida',null,['class'=>'form-control', 'placeholder'=>'km. de partida']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Hora:') !!}
                <div class='input-group date ' id='datetimepicker3'>   
                    {!! Form::text('tiempopartida',null,['class'=>'form-control', 'placeholder'=>'Hora de partida ','data-error'=>'Inserte la hora de partida','required']) !!}
                    <center><div class="help-block with-errors"></div></center>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                    </span>
                </div>
            </div>
          </li>
        </div>
        <div class="col-md-3">
          <li class="list-group-item">
            <div class="form-group">
            {!! Form::label('Fecha de llegada:') !!}
              <div class='input-group date ' id='datetimepicker7'>
              {!! Form::text('fechallegada',$viaje->fecha_final,['class'=>'form-control','placeholder'=>'Fecha de culminación','data-error'=>'Seleccione una Fecha','required','id'=>'felle','value'=>'id']) !!}
               <center><div class="help-block with-errors"></div></center>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
              </div>
            </div>
            <div class="form-group">
                {!! Form::label('Kilometraje:') !!}   
                {!! Form::number('kilollegada',null,['class'=>'form-control', 'placeholder'=>'km. de llegada']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Hora:') !!}
                <div class='input-group date ' id='datetimepicker4'>   
                    {!! Form::text('tiempollegada',null,['class'=>'form-control', 'placeholder'=>'Hora de llegada','data-error'=>'Inserte la hora de llegada','required']) !!}
                    <center><div class="help-block with-errors"></div></center>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                    </span>
                </div>
            </div>
          </li>
        </div>
        <div class="col-md-3">
            <li class="list-group-item">
              <div class="form-group">
                  {!! Form::label('Viáticos Ciudad:') !!}
                <div class="input-group">
                  {!! Form::text('viaticoa',null,['class'=>'form-control','placeholder'=>'Monto del viático','id'=>'viaci','value'=>'0']) !!}
                  <span class="input-group-addon" id="basic-addon3">Bs.</span>
                </div>   
              </div>
              <div class="form-group">
                  {!! Form::label('Viáticos Provincia:') !!}
                <div class="input-group">               
                  {!! Form::text('viaticob',null,['class'=>'form-control','placeholder'=>'Monto del viático','id'=>'viapro','value'=>'0']) !!}
                  <span class="input-group-addon" id="basic-addon3">Bs.</span>
                </div>  
              </div>
              <div class="form-group">
                  {!! Form::label('Viáticos Frontera:') !!}
                <div class="input-group">  
                  {!! Form::text('viaticoc',null,['class'=>'form-control','placeholder'=>'Monto del viático','id'=>'viafro','value'=>'0']) !!}
                  <span class="input-group-addon" id="basic-addon3">Bs.</span>
                </div>
              </div>
            </li>
        </div>
        <div class="col-md-3">
            <li class="list-group-item">
              <div class="form-group">
                  {!! Form::label('Pasajeros:') !!}
                <div class="input-group">  
                  {!! Form::text('pasajeros',$viaje->pasajeros,['class'=>'form-control','placeholder'=>'Nro. Pasajeros','data-error'=>'Inserte una cantidad','required','id'=>'pasa','value'=>'id']) !!}
                  <span class="input-group-addon" id="basic-addon3">Personas</span>
                </div>
                  <center><div class="help-block with-errors"></div></center>
              </div>
              <div class="form-group">
                  {!! Form::label('Kms. Designados') !!}
                <div class="input-group">
                  {!! Form::text('kmtotal',$kmtotal[0],['class'=>'form-control','placeholder'=>'Seleccione un responsable','data-error'=>'Inserte una cantidad de km.','required','id'=>'kmtotal','value'=>'id']) !!}
                  <span class="input-group-addon" id="basic-addon3">Kms.</span>
                </div>  
                  <center><div class="help-block with-errors"></div></center>
              </div>
              <div class="form-group">
                  {!! Form::label('Dias de Viaje:') !!}
                <div class="input-group">
                  {!! Form::text('dias',$viaje->dias,['class'=>'form-control','placeholder'=>'Nro. Pasajeros','data-error'=>'Inserte una cantidad','required','id'=>'encar','value'=>'id']) !!}
                  <span class="input-group-addon" id="basic-addon3">Dias</span>
                </div>  
                  <center><div class="help-block with-errors"></div></center>
              </div>
            </li>
        </div>
      </div>
    </div>
    <div class="col-md-7" >
          <div class="panel panel-default">
            <li class="list-group-item">
                <center><h4><u>Asignación Total del Combustible:<a> {{ $presupuesto->cantidad1 }}</a> Litros</u></h4></center>
            </li>
            <div class="panel-body text-center jumbotron">
              <div class="form-group combustible-select-container">
                {!! Form::label('Pedido (Litros)') !!}______|______{!! Form::label('Efectivo ') !!}
                <li class="list-group-item ">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon3">Recargue:</span>
                        {!! Form::text('recargue1',null,['class'=>'form-control','id'=>'recargue1a','onkeyup'=>'sumar();','data-error'=>'Inserte una cantidad','required']) !!}    
                        <center><div class="help-block with-errors"></div></center>

                        <span class="input-group-addon" id="basic-addon3">Compra:</span>
                        {!! Form::text('compra1',null,['class'=>'form-control','id'=>'compra1a','onkeyup'=>'sumar();','data-error'=>'Inserte una cantidad','required']) !!}
                        <center><div class="help-block with-errors"></div></center>
                    
                        <span class="input-group-addon" id="basic-addon3">Bs.:</span>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon3">Recargue:</span>
                        {!! Form::text('recargue2',null,['class'=>'form-control','id'=>'recargue2a','onkeyup'=>'sumar();']) !!}    
                        <span class="input-group-addon" id="basic-addon3">Compra:</span>
                        {!! Form::text('compra2',null,['class'=>'form-control','id'=>'compra2a','onkeyup'=>'sumar();']) !!}
                        <span class="input-group-addon" id="basic-addon3">Bs.:</span>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon3">Recargue:</span>
                        {!! Form::text('recargue3',null,['class'=>'form-control','id'=>'recargue3a','onkeyup'=>'sumar();']) !!}    
                        <span class="input-group-addon" id="basic-addon3">Compra:</span>
                        {!! Form::text('compra3',null,['class'=>'form-control','id'=>'compra3a','onkeyup'=>'sumar();']) !!}<span class="input-group-addon" id="basic-addon3">Bs.:</span>
                    </div>
                </li>
              </div>  
                <div class="row">    
                    <div class="col-md-6">
                      <center>
                          <div class="input-group">
                              <span class="input-group-addon">Total:</span>
                              {!! Form::text('combustotalu',null,['class'=>'form-control','id'=>'totalU',' value'=>'0','data-error'=>'Este campo debe estar lleno','required']) !!}
                              <span class="input-group-addon">Lts. usados</span>
                              <center><div class="help-block with-errors"></div></center>
                            
                          </div>
                      </center>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-addon">Total Compra:</span>
                            {!! Form::text('combustotalco',null,['class'=>'form-control','id'=>'totalCO',' value'=>'0','data-error'=>'Este campo debe estar lleno','required']) !!}
                            <span class="input-group-addon">Bs.</span>
                            <center><div class="help-block with-errors"></div></center>
                    
                        </div>
                    </div>    
                </div>
            </div>
          </div>
    </div>
    <div class="col-md-5" >
          <div class="panel panel-default">
            <div class="panel-body text-center jumbotron">
              <div class="form-group peaje-select-container">
                {!! Form::label('Peajes / Imprevistos') !!}
                <li class="list-group-item ">
                    <div class="input-group">
                        {!! Form::textarea('descripe',null,['class'=>'form-control', 'rows'=>'2','placeholder'=>'Describa todos los peajes o los imprevistos que obtuvo','data-error'=>'Inserte una descripción','required']) !!}
                        <center><div class="help-block with-errors"></div></center>
                        
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon3">Peajes:</span>
                        {!! Form::text('montope',null,['class'=>'form-control','id'=>'montope1','onkeyup'=>'sumar();','data-error'=>'Este campo debe estar lleno','required']) !!}    
                        <span class="input-group-addon" id="basic-addon3">Bs.</span>
                        <center><div class="help-block with-errors"></div></center>
                    
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon3">Imprevistos:</span>
                        {!! Form::text('montoim',null,['class'=>'form-control','id'=>'montoim1','onkeyup'=>'sumar();']) !!}    
                        <span class="input-group-addon" id="basic-addon3">Bs.</span>  
                    </div>
                </li>
              </div><hr>
                <div class="row">    
                    <div class="col-md-12">
                      <center>
                          <div class="input-group">
                              <span class="input-group-addon">Total:</span>
                              {!! Form::text('totalpeim',null,['class'=>'form-control','id'=>'totalPI',' value'=>'0','data-error'=>'Este campo debe estar lleno','required']) !!}
                              <span class="input-group-addon">Bs.</span>
                              <center><div class="help-block with-errors"></div></center>
                    
                          </div>
                      </center>
                    </div>  
                </div>
            </div>
          </div>
    </div>

    <div class="col-md-12" >
        <div class="panel panel-default">
          <div class="panel-body text-center jumbotron">
            <div class="form-group">
              <div class="row">
                  {!! Form::label('Detalle de Devoluciones') !!}
                  <div class="col-md-12">
                    <div class="input-group">
                        <span class="input-group-addon" id="">Combustibles:</span>
                        {!! Form::text('combus',null,['class'=>'form-control','id'=>'combus1','onkeyup'=>'sumar();']) !!}
                        <span class="input-group-addon" id="">Peajes:</span>
                        {!! Form::text('peaje',null,['class'=>'form-control','id'=>'peaje1','onkeyup'=>'sumar();']) !!}<span class="input-group-addon" id="">Imprevistos:</span>
                        {!! Form::text('impre',null,['class'=>'form-control','id'=>'impre1','onkeyup'=>'sumar();']) !!}
                        <span class="input-group-addon" id="">Total:</span>
                        {!! Form::text('totalcopeim',null,['class'=>'form-control','id'=>'totalcopeim1',' value'=>'0']) !!}
                        <span class="input-group-addon" id="">Bs.</span>
                    </div>
                  </div>
              </div>
              <div class="row">
                {!! Form::label('Informe Delegación') !!}
                 <div class="col-md-12">
                     {!! Form::textarea('delegacion',null,['class'=>'form-control', 'rows'=>'2','placeholder'=>'Inserte un informe sobre la delegación del viaje','required','data-error'=>'Describa un informe sobre la delegación del viaje']) !!}
                      <center><div class="help-block with-errors"></div></center> 
                 </div>

              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="col-md-12" >
          <div class="panel panel-default">
            <li class="list-group-item">
                <center><h4><u>Informe Técnico del Vehículo </u></h4></center>
            </li>
            <div class="panel-body text-center jumbotron">
              <!--<div class="form-group mantenimiento-select-container">
                  <li class="list-group-item ">
                    <div class="row">
                          <div class="col-md-4">
                            <div class="input-group ">
                              <span class="input-group-addon" id="">Objeto:</span>
                              {!! Form::select('mantenimiento', config('mantenimiento.mante'), null, ['class' => 'form-control','id'=>'mantes','placeholder'=>'Seleccione un Objeto']) !!}    
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="input-group">
                              <span class="input-group-addon" id="">Descripción:</span>
                              {!! Form::input('descripmante', null, null,['class'=>'form-control','placeholder'=>'Describa el estado del objeto seleccionado','id'=>'descripman']) !!}   
                            </div>
                          </div>
                      </div>
                </li>
              </div>
              <div class="row">
                <div class="col-md-12">
                    <center><a href="#" class="btn btn-info fa fa-plus-square btn-add-more-mantenimiento"> Añadir</a></center>
                </div>
              </div><br>
              {!! Form::label('Inserte nuevo Objeto') !!}-->
              <li class="list-group-item ">
                  <div class="row">
                        <div class="col-md-4">
                          <div class="input-group ">
                            <span class="input-group-addon" id="">Objeto:</span>
                            {!! Form::select('mantenimiento[]', config('mantenimiento.mante'), null, ['multiple'=>'multiple','class' => 'form-control','id'=>'mante','placeholder']) !!}    
                          </div>
                        </div>
                        <div class="col-md-8">
                          <div class="input-group">
                            <span class="input-group-addon" id="">Descripción:</span>
                            {!! Form::textarea('descripmante', null,['class'=>'form-control', 'rows'=>'3','placeholder'=>'Describa el estado de los objetos seleccionados o insertados']) !!}   
                          </div>
                        </div>
                    </div>
              </li><hr>
                <div class="col-md-12">
                  {!! Form::label('Recomendación') !!}
                  {!! Form::textarea('recomendacion',null,['class'=>'form-control', 'rows'=>'2','placeholder'=>'Inserte un mensaje de recomendación para el mantenimiento de este Vehiculo','required','data-error'=>'Este campo es obligatorio']) !!}
                  <center><div class="help-block with-errors"></div></center>
                </div>
            </div>
          </div>
        </div>                
    </div>
</div>
