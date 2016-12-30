<div class="row text-center">
  <ul class="list-group ">
    <li class="list-group-item list-group-item-success col-md-12">
        <input type="hidden" name="viaje_id" value='{{ $viaje->id }}' />
      <div class="col-md-2"></div>    
      <div class="col-md-4">
          <div>
            {!! Form::label('Vehículo:') !!}  
          </div>
          {!! Form::select('vehiculo',$vehiculos,null,['class'=>'form-control','placeholder'=>'Seleccione un Vehículo','data-error'=>'Seleccione un Vehículo','required','id'=>'vehi','value'=>'id']) !!}
          <center><div class="help-block with-errors"></div></center>
      </div>
      <input type="hidden" name="chofer" value='{{ $chofer }}' />
      <div class="col-md-4">
        <div>
            {!! Form::label('Encargado:') !!}
        </div>
        {!! Form::select('encargado',$encargados,null,['class'=>'form-control','placeholder'=>'Seleccione un responsable','data-error'=>'Seleccione a un Encargado','required','id'=>'encar','value'=>'id']) !!}
         <center><div class="help-block with-errors"></div></center>
      </div>
      <input type="hidden" name="entidad" value='{{ $viaje->entidad }}' />
             
    </li>
    <li class="list-group-item list-group-item-success col-md-12">
        <div class="col-md-3">
         
            <div class="form-group">
            {!! Form::label('Fecha de Partida:') !!}
              <div class='input-group date ' id='datetimepicker6'>
              {!! Form::text('fechapartida',$viaje->fecha_inicial,['class'=>'form-control','placeholder'=>'Fecha de viaje','data-error'=>'Seleccione una fecha','required','id'=>'feini','value'=>'id']) !!}
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
              </div>
              <center><div class="help-block with-errors"></div></center>
            </div>
            <div class="form-group">
                {!! Form::label('Kilometraje:') !!}   
                {!! Form::number('kilopartida',null,['class'=>'form-control', 'placeholder'=>'km. de partida']) !!}
                <center><div class="help-block with-errors"></div></center>
            </div>
            <div class="form-group">
                {!! Form::label('Hora:') !!}
                <div class='input-group date ' id='datetimepicker3'>
                    {!! Form::text('tiempopartida',null,['class'=>'form-control', 'placeholder'=>'Hora de partida ','data-error'=>'Inserte la hora de partida','required']) !!}
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                    </span>
                </div>
                <center><div class="help-block with-errors"></div></center>
            </div>
          
        </div>
        <div class="col-md-3">
            <div class="form-group">
            {!! Form::label('Fecha de llegada:') !!}
              <div class='input-group date ' id='datetimepicker7'>
                {!! Form::text('fechallegada',$viaje->fecha_final,['class'=>'form-control','placeholder'=>'Fecha de culminación','data-error'=>'Seleccione una Fecha','required','id'=>'felle','value'=>'id']) !!}
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
              </div>
              <center><div class="help-block with-errors"></div></center>
            </div>
            <div class="form-group">
                {!! Form::label('Kilometraje:') !!} 
                {!! Form::number('kilollegada',null,['class'=>'form-control', 'placeholder'=>'km. de llegada',]) !!}
                <center><div class="help-block with-errors"></div></center>
            </div>
            <div class="form-group">
                {!! Form::label('Hora:') !!}
                <div class='input-group date ' id='datetimepicker4'>
                    {!! Form::text('tiempollegada',null,['class'=>'form-control', 'placeholder'=>'Hora de llegada','data-error'=>'Inserte la hora de llegada','required']) !!}
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                    </span>
                </div>
                <center><div class="help-block with-errors"></div></center>
            </div>
        </div>
        <div class="col-md-3">
              <div class="form-group">
                <font color="#337ab7">{!! Form::label('Viáticos Ciudad:') !!}</font>    
                <div class="input-group">
                  {!! Form::text('viaticoa',$presupuesto->total2VC,['class'=>'form-control','placeholder'=>'Monto del viático','id'=>'viaci','value'=>'id']) !!} 
                  <span class="input-group-addon" id="basic-addon3">Bs.</span>
                </div>   
              </div>
              <div class="form-group">
                 <font color="#337ab7"> {!! Form::label('Viáticos Provincia:') !!}</font>
                <div class="input-group">               
                  
                  {!! Form::text('viaticob',$presupuesto->total3VP,['class'=>'form-control','placeholder'=>'Monto del viático','id'=>'viapro','value'=>'id']) !!}
                  <span class="input-group-addon" id="basic-addon3">Bs.</span>
                </div>  
              </div>
              <div class="form-group">
                 <font color="#337ab7"> {!! Form::label('Viáticos Frontera:') !!}</font>
                <div class="input-group"> 
                  {!! Form::text('viaticoc',$presupuesto->total4VF,['class'=>'form-control','placeholder'=>'Monto del viático','id'=>'viafro','value'=>'id']) !!}
                  <span class="input-group-addon" id="basic-addon3">Bs.</span>
                </div>
              </div>
        </div>
        <div class="col-md-3">
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
                {!! Form::text('kmtotal',$kmtotal[0],['class'=>'form-control','placeholder'=>'Seleccione un responsable','data-e rror'=>'Inserte una cantidad','required','id'=>'kmtotal','value'=>'id']) !!}
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
        </div>
    </li>
    <li class="list-group-item list-group-item-success col-md-12">
      <div class="row">
        <div class="col-md-7">
            <center><h4><u>Asignación Total del Combustible:<a> {{ $presupuesto->cantidad1 }}</a> Litros</u></h4></center>
            <div class="col-md-6">
                      <label>Recargue</label>
                  <div class="input-group">  
                      {!! Form::text('recargue1',null,['class'=>'form-control','id'=>'recargue1a','onkeyup'=>'sumar();','data-error'=>'Inserte una cantidad','required']) !!}  
                      <span class="input-group-addon" id="basic-addon3">litros</span>
                  </div>
                  <center><div class="help-block with-errors"></div></center>
            </div>
            <div class="col-md-6">
                <label>Compra</label>
                <div class="input-group">
                    {!! Form::text('compra1',null,['class'=>'form-control','id'=>'compra1a','onkeyup'=>'sumar();','data-error'=>'Inserte una cantidad','required']) !!}
                    <span class="input-group-addon" id="basic-addon3">Bs.</span>
                </div>
                <center><div class="help-block with-errors"></div></center>
            </div>
            <div class="col-md-6">
                <div class="input-group">  
                    {!! Form::text('recargue2',null,['class'=>'form-control','id'=>'recargue2a','onkeyup'=>'sumar();']) !!} 
                    <span class="input-group-addon" id="basic-addon3"><font color="#337ab7">litros</font></span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-group">
                    {!! Form::text('compra2',null,['class'=>'form-control','id'=>'compra2a','onkeyup'=>'sumar();']) !!}
                    <span class="input-group-addon" id="basic-addon3"><font color="#337ab7">Bs.</font></span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-group">
                    {!! Form::text('recargue3',null,['class'=>'form-control','id'=>'recargue3a','onkeyup'=>'sumar();']) !!} 
                    <span class="input-group-addon" id="basic-addon3"><font color="#337ab7">litros</font></span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-group">
                    {!! Form::text('compra3',null,['class'=>'form-control','id'=>'compra3a','onkeyup'=>'sumar();']) !!}
                    <span class="input-group-addon" id="basic-addon3"><font color="#337ab7">Bs.</font></span>
                </div>
            </div>
            <div class="col-md-6">
                <label>Total recargue</label>
                <div class="input-group">
                    {!! Form::text('combustotalu',null,['class'=>'form-control','id'=>'totalU',' value'=>'0','data-error'=>'Este campo debe estar lleno','required']) !!}
                    <span class="input-group-addon" id="basic-addon3">litros</span>
                </div>
            </div>
            <div class="col-md-6">
                <label>Total compra</label>
                <div class="input-group">
                    {!! Form::text('combustotalco',null,['class'=>'form-control','id'=>'totalCO',' value'=>'0','data-error'=>'Este campo debe estar lleno','required']) !!}
                    <span class="input-group-addon" id="basic-addon3">Bs.</span>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <center><h4><u>Peajes e Imprevistos</u></h4></center>
            <div class="input-group col-md-12">
                {!! Form::textarea('descripe',null,['class'=>'form-control', 'rows'=>'2','placeholder'=>'Describa todos los peajes o los imprevistos que obtuvo','data-error'=>'Describa los peajes','required']) !!}
                <center><div class="help-block with-errors"></div></center>
            </div>
            <div class="input-group col-md-12">
                <span class="input-group-addon" id="basic-addon3">Peajes:</span>   
                {!! Form::text('montope',null,['class'=>'form-control','id'=>'montope1','onkeyup'=>'sumar();','data-error'=>'Inserte la cantidad de peaje','required']) !!} 
                <span class="input-group-addon" id="basic-addon3">Bs.</span>
                <center><div class="help-block with-errors"></div></center>
            
            </div>
            <div class="input-group col-md-12">
                <span class="input-group-addon" id="basic-addon3"><font color="#337ab7">Imprevistos:</font></span>
                {!! Form::text('montoim',null,['class'=>'form-control','id'=>'montoim1','onkeyup'=>'sumar();']) !!}    
                <span class="input-group-addon" id="basic-addon3"><font color="#337ab7">Bs.</font></span>  
            </div>
            <label>Total</label>
            <div class="input-group col-md-12">
                {!! Form::text('totalpeim',null,['class'=>'form-control','id'=>'totalPI',' value'=>'0','data-error'=>'Este campo debe estar lleno','required']) !!}
                <span class="input-group-addon">Bs.</span>  
            </div>
        </div>
      </div>
    </li>
    <li class="list-group-item list-group-item-info col-md-12">
        <center><label><h4><u>Detalle de devoluciones</u></h4></label></center>
        <div class="col-md-3">
            <label>Combustible</label>
            <div class="input-group">    
                {!! Form::text('combus',$informesdebolu->combus,['class'=>'form-control','id'=>'combus1','onkeyup'=>'sumar();']) !!}
                <span class="input-group-addon" id="">Bs.</span>
            </div>
        </div>
        <div class="col-md-3">
            <label>Peajes</label>
            <div class="input-group">
                {!! Form::text('peaje',$informesdebolu->peaje,['class'=>'form-control','id'=>'peaje1','onkeyup'=>'sumar();']) !!}
                <span class="input-group-addon" id="">Bs.</span>
            </div>
        </div>
        <div class="col-md-3">
            <label>Iprevistos</label>
            <div class="input-group">
                {!! Form::text('impre',$informesdebolu->impre,['class'=>'form-control','id'=>'impre1','onkeyup'=>'sumar();']) !!}
                <span class="input-group-addon" id="">Bs.</span>
            </div>
        </div>
        <div class="col-md-3">
            <label>Total</label>
            <div class="input-group">
                {!! Form::text('totalcopeim',$informesdebolu->totalpeim,['class'=>'form-control','id'=>'totalcopeim1',' value'=>'0']) !!}
                <span class="input-group-addon" id="">Bs.</span>
            </div>
        </div>
    </li>
    <li class="list-group-item list-group-item-success col-md-12">
        <label><h4><u>Describa el informe del viaje</u></h4></label>
        {!! Form::textarea('delegacion',null,['class'=>'form-control', 'rows'=>'2','placeholder'=>'Inserte un informe sobre la delegación del viaje','data-error'=>'Describa un informe sobre la delegación','required']) !!}
        <center><div class="help-block with-errors"></div></center>
    </li>
    <li class="list-group-item list-group-item-success col-md-12">
        <label><h4><u>Informe técnico del vehículo</u></h4></label>
        <div class="col-md-12">
            <div class="col-md-5">
                <center><label>Piezas</label></center>  
                {!! Form::select('mantenimiento[]', config('mantenimiento.mante'), $mantenimiento, ['multiple'=>'multiple','class' => 'form-control','id'=>'mante','placeholder']) !!} 
            </div>
            <div class="col-md-7">
                <center><label>Descripción</label></center>
                {!! Form::textarea('descripmante', null,['class'=>'form-control', 'rows'=>'3','placeholder'=>'Describa el estado de los objetos seleccionados o insertados']) !!}  
            </div>
        </div>
        <div class="col-md-12">
            <label><h4><u>Recomendaciones</u></h4></label>
            {!! Form::textarea('recomendacion',null,['class'=>'form-control', 'rows'=>'2','placeholder'=>'Inserte un mensaje de recomendación para el mantenimiento de este Vehiculo','data-error'=>'Inserte un recomendación para el mantenimiento de esta mobilidad','required']) !!}
            <center><div class="help-block with-errors"></div></center>
        </div>  
    </li>
  </ul>
</div>

