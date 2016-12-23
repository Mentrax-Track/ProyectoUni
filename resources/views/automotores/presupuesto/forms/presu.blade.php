<div class="row ">
<ul class="list-group">
    <li class="list-group-item list-group-item-success col-md-12">
        <div class="col-md-3 form-group has-success has-feedback">
            <div>
              <label class="control-label" for="inputGroupSuccess3">Vehículo</label>  
            </div>
            {!! Form::select('vehiculo',$vehiculos,null,['class'=>'js-example-responsive','style'=>'width: 100%','placeholder'=>'Seleccione un Vehiculo','data-error'=>'Seleccione un Vehículo','required','id'=>'vehis','value'=>'id']) !!}
            <center><div class="help-block with-errors"></div></center>
        </div>
        <div class="col-md-3 form-group has-success has-feedback">
            <div>
              <label class="control-label" for="inputGroupSuccess3">Chofer</label>
            </div>
            {!! Form::select('chofer',$choferes,null,['class'=>'js-example-responsive','style'=>'width: 100%','id'=>'chofs','placeholder'=>'Seleccione un chofer','data-error'=>'Seleccione a un Chofer','required','value'=>'id']) !!}
            <center><div class="help-block with-errors"></div></center>
        </div>
        <div class="col-md-3 form-group has-success has-feedback">
            <div>
               <label class="control-label" for="inputGroupSuccess3">Encargado del viaje</label>
            </div>
            {!! Form::select('encargado',$encargados,null,['class'=>'js-example-responsive','style'=>'width: 100%','placeholder'=>'Seleccione un responsable','data-error'=>'Seleccione a un Encargado','required','id'=>'encars','value'=>'id']) !!}
            <center><div class="help-block with-errors"></div></center>
        </div>
        <div class="col-md-3 form-group has-success has-feedback">
          <div class="form-group">
              <label class="control-label" for="inputGroupSuccess3">Fecha de solicitud</label>
              <div class='input-group date' id='datetimepicker8'>
                {!! Form::text('fecha_sa',null,['class'=>'form-control input-sm','data-error'=>'Seleccione una fecha','required','aria-describedby'=>'inputGroupSuccess3Status','placeholder'=>'Solicitud en D.S.A.']) !!}
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
              </div>
              <center><div class="help-block with-errors"></div></center>
          </div>  
        </div>
        </div><input type="hidden" name="viaje_id" value="{{ $viaje->id }}" />
    </li>
  </ul>
</div>
<div class="row">
  <div class="col-md-5">
    <ul class="list-group">
        <li class="list-group-item list-group-item-success col-md-12">
            <input type="hidden" name="total1" id="total" value="{{ $ruta->total }}" />
            <div class="col-md-6">
                <center>{!! Form::label('Gasolina/Diesel: ') !!}</center>
                {!! Form::text('division1',null,['class'=>'form-control','id'=>'division','onkeyup'=>'sumar();','data-error'=>'Inserte un valor','required','placeholder'=>'4 o 6','aria-describedby'=>'inputGroupSuccess3Status']) !!} 
                <center><div class="help-block with-errors"></div></center>
            </div>
            <div class="col-md-6">
                <center>{!! Form::label('Combustible: ') !!}</center>
                 {!! Form::text('combustible1',null,['class'=>'form-control','id'=>'combustible','readonly'=>'readonly']) !!}
                <center><div class="help-block with-errors"></div></center>
            </div>
        </li>
        <input type="hidden" name="carta1" id="carta1" value="0" />
              
        <li class="list-group-item list-group-item-success col-md-12">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <center>{!! Form::label('Combustible Total: ') !!}</center>
                {!! Form::text('cantidad1',null,['class'=>'form-control','id'=>'cantidadC','onkeyup'=>'sumar();','data-error'=>'Campo obligatorio','required','placeholder'=>'Redondee']) !!}
                <center><div class="help-block with-errors"></div></center>
            </div>
                <!--<div class="col-md-6">
                    <center>{!! Form::label('Pedido: ') !!}</center>
                    {!! Form::text('carta1',null,['class'=>'form-control','id'=>'carta1','onkeyup'=>'sumar();','value'=>'0','placeholder'=>'No es necesario']) !!}
                    <center><div class="help-block with-errors"></div></center>
                </div>-->
            <div class="col-md-2"></div>          
        </li>
        <li class="list-group-item list-group-item-success col-md-12">
                <div class="col-md-6">
                    <center>{!! Form::label('Precio por litro: ') !!}</center>
                    {!! Form::text('precio1',null,['class'=>'form-control','id'=>'precioC','onkeyup'=>'sumar();','data-error'=>'Campo obligatorio','required','placeholder'=>'Ejm.: 3.50']) !!}
                    <center><div class="help-block with-errors"></div></center>
                </div>
                <div class="col-md-6">
                    <center>{!! Form::label('Costo total: ') !!}</center>
                    {!! Form::text('total1C',null,['class'=>'form-control','id'=>'totalC',' value'=>'0','data-error'=>'Valor por defecto','required','readonly'=>'readonly']) !!}
                    <center><div class="help-block with-errors"></div></center>
                </div>
        </li>
    </ul>
  </div>
  <div class="col-md-7">
        <li class="list-group-item list-group-item-success col-md-12">
            <center><font color = "#8a6d3b"><strong><h4><u>Peajes ida y vuelta</u></h4></strong></font></center>
            <div class="row">
                <div class="col-md-4">
                    <center>{!! Form::label('Cantidad de peajes: ') !!}</center>
                    {!! Form::number('cantidad5',null,['class'=>'form-control','id'=>'cantidadP','onkeyup'=>'sumar();','data-error'=>'Campo obligatorio','required','placeholder'=>'Ejm.: 2']) !!}
                    <center><div class="help-block with-errors"></div></center>
                </div>
                <div class="col-md-4">
                    <center>{!! Form::label('Precio por Unidad: ') !!}</center>
                    {!! Form::number('precio5',null,['class'=>'form-control','id'=>'precioP','onkeyup'=>'sumar();','data-error'=>'Campo obligatorio','required','placeholder'=>'Ejm.: 10']) !!}
                    <center><div class="help-block with-errors"></div></center>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <center>{!! Form::label('Total: ') !!}</center>
                        <div class='input-group date'>
                            {!! Form::text('total5P',null,['class'=>'form-control','id'=>'totalP',' value'=>'0','data-error'=>'Valor por defecto','required','readonly'=>'readonly']) !!}
                            <span class="input-group-addon">Bs.</span>
                        </div>
                        <center><div class="help-block with-errors"></div></center>
                    </div>
                </div>
            </div>
        </li>
        <li class="list-group-item list-group-item-success col-md-12">
            <center><font color = "#8a6d3b"><strong><h4><u>Viáticos ciudad</u></h4></strong></font></center>
            <div class="row">
                <div class="col-md-4">
                    <center>{!! Form::label('Cantidad de días: ') !!}</center>
                    {!! Form::number('cantidad2',null,['class'=>'form-control','id'=>'cantidadVC','onkeyup'=>'sumar();','placeholder'=>'Ejm.: 4']) !!}
                </div>
                <div class="col-md-4">
                    <center>{!! Form::label('Precio por día: ') !!}</center>
                    {!! Form::number('precio2',null,['class'=>'form-control','id'=>'precioVC','onkeyup'=>'sumar();','placeholder'=>'Ejm.: 100']) !!}
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <center>{!! Form::label('Total: ') !!}</center>
                        <div class='input-group date'>
                            {!! Form::text('total2VC',null,['class'=>'form-control','id'=>'totalVC',' value'=>'0','readonly'=>'readonly']) !!}
                            <span class="input-group-addon">Bs.</span>
                        </div>
                        <center><div class="help-block with-errors"></div></center>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    </ul>
</div>        


</div>

              <li class="list-group-item ">
                    <center><strong>Viáticos Provincia</strong></center>
              </li>
              <div class="input-group text-center">
                  <span class="input-group-addon" id="basic-addon3"><STRONG>Cantidad de Dias:</STRONG></span>
                  {!! Form::text('cantidad3',null,['class'=>'form-control','id'=>'cantidadVP','onkeyup'=>'sumar();']) !!}
                  <span class="input-group-addon" id="basic-addon3"><strong>Dias</strong></span>
                  <span class="input-group-addon" id="basic-addon3"></span>
                  <span class="input-group-addon" id="basic-addon3"><strong>Monto en Bs. por dia</strong></span>
                  {!! Form::text('precio3',null,['class'=>'form-control','id'=>'precioVP','onkeyup'=>'sumar();']) !!}
                  <span class="input-group-addon" id="basic-addon3"><strong>Bs.</strong></span>
                  <span class="input-group-addon" id="basic-addon3"></span>
                  <span class="input-group-addon" id="basic-addon3"><font color = "#8a6d3b"><strong>Total:</strong></font></span>
                  {!! Form::text('total3VP',null,['class'=>'form-control','id'=>'totalVP',' value'=>'0']) !!}
                  <span class="input-group-addon" id="basic-addon3"><font color = "#8a6d3b"><strong>Bs.</strong></font></span>
              </div>

              <li class="list-group-item ">
                    <center><strong>Viáticos Frontera</strong></center>
              </li>
              <div class="input-group text-center">
                  <span class="input-group-addon" id="basic-addon3"><strong>Cantidad de Dias:</strong></span> 
                  {!! Form::text('cantidad4',null,['class'=>'form-control','id'=>'cantidadVF','onkeyup'=>'sumar();']) !!}
                  <span class="input-group-addon" id="basic-addon3"><strong>Dias</strong></span>
                  <span class="input-group-addon" id="basic-addon3"></span>
                  <span class="input-group-addon" id="basic-addon3"><strong>Monto en Bs. por dia</strong></span>
                  {!! Form::text('precio4',null,['class'=>'form-control','id'=>'precioVF','onkeyup'=>'sumar();']) !!}
                  <span class="input-group-addon" id="basic-addon3"><strong>Bs.</strong></span>
                  <span class="input-group-addon" id="basic-addon3"></span>
                  <span class="input-group-addon" id="basic-addon3"><font color = "#8a6d3b"><strong>Total:</strong></font></span>
                  {!! Form::text('total4VF',null,['class'=>'form-control','id'=>'totalVF',' value'=>'0']) !!}
                  <span class="input-group-addon" id="basic-addon3"><font color = "#8a6d3b"><strong>Bs.</strong></font></span>
              </div>

              

              <li class="list-group-item ">
                    <center><strong>Mantenimiento Vehicular</strong></center>
              </li>
              <div class="input-group text-center">
                  <span class="input-group-addon" id="basic-addon3"><strong>Cantidad trabajos:</strong></span> 
                  {!! Form::text('cantidad6',null,['class'=>'form-control','id'=>'cantidadM','onkeyup'=>'sumar();']) !!}

                  <span class="input-group-addon" id="basic-addon3"><strong>Dias</strong></span>
                  <span class="input-group-addon" id="basic-addon3"></span>
                  <span class="input-group-addon" id="basic-addon3"><strong>Costo por Mantenimiento:</strong></span>
                  {!! Form::text('precio6',null,['class'=>'form-control','id'=>'precioM','onkeyup'=>'sumar();']) !!}
                  <span class="input-group-addon" id="basic-addon3">Bs.</span>
                  <span class="input-group-addon" id="basic-addon3"></span>
                  <span class="input-group-addon" id="basic-addon3"><font color = "#8a6d3b"><strong>Total:</strong></font></span>
                  {!! Form::text('total6M',null,['class'=>'form-control','id'=>'totalM',' value'=>'0']) !!}
                  <span class="input-group-addon" id="basic-addon3"><font color = "#8a6d3b"><strong>Bs.</strong></font></span>
              </div>

              <li class="list-group-item ">
                    <center><strong>Garaje del Vehiculo</strong></center>
              </li>
              <div class="input-group text-center">
                  <span class="input-group-addon" id="basic-addon3"><strong>Cantidad noches:</strong></span> 
                  {!! Form::text('cantidad7',null,['class'=>'form-control','id'=>'cantidadG','onkeyup'=>'sumar();']) !!}
                  <span class="input-group-addon" id="basic-addon3"><strong>Dias</strong></span>
                  <span class="input-group-addon" id="basic-addon3"></span>
                  <span class="input-group-addon" id="basic-addon3"><strong>Costo por dia:</strong></span>
                  {!! Form::text('precio7',null,['class'=>'form-control','id'=>'precioG','onkeyup'=>'sumar();']) !!}
                  <span class="input-group-addon" id="basic-addon3"><strong>Bs.</strong></span>
                  <span class="input-group-addon" id="basic-addon3"></span>
                  <span class="input-group-addon" id="basic-addon3"><font color = "#8a6d3b"><strong>Total:</strong></font></span>
                  {!! Form::text('total7G',null,['class'=>'form-control','id'=>'totalG',' value'=>'0']) !!}
                  <span class="input-group-addon" id="basic-addon3"><font color = "#8a6d3b"><strong>Bs.</strong></font></span>
              </div><br>
              <div class="input-group text-center has-warning has-feedback">
                      <span class="input-group-addon" id="basic-addon3"><i><u>Este monto es denominado "Total A" para su diferencia con el Transporte publico.</u></i></span>
                      <span class="input-group-addon" id="basic-addon3">-></span>
                      <span class="input-group-addon" id="basic-addon3">Total presupuesto:</span>
                        {!! Form::text('total8T',null,['class'=>'form-control','id'=>'totalT',' value'=>'0']) !!}
                      <span class="input-group-addon" id="basic-addon3">Bs. </span>
              </div>
              
          </div>  
        </div>
      </div>
</div>
          <!--Hasta aqui la descripcion presupuestaria...-->
<div class="col-md-12" >
    <div class="panel panel-default">
      <center><h4><strong>Transporte Público</strong></h4></center>
        <div class="panel-body text-center jumbotron">
          <div class="input-group text-center has-success has-feedback">
              <span class="input-group-addon" id="basic-addon3">Ruta:</span>
              {!! Form::text('r1',null,['class'=>'form-control','data-error'=>'Campo obligatorio','required']) !!}
                          <center><div class="help-block with-errors"></div></center>
              <span class="input-group-addon" id="basic-addon3">Personas:</span>
              {!! Form::text('p1',null,['class'=>'form-control','id'=>'p1','onkeyup'=>'sumar();','data-error'=>'Campo obligatorio','required']) !!}
                        <center><div class="help-block with-errors"></div></center>
              <span class="input-group-addon" id="basic-addon3">Costo:</span>
              {!! Form::text('c1',null,['class'=>'form-control','id'=>'c1','onkeyup'=>'sumar();','data-error'=>'Campo obligatorio','required']) !!}
                            <center><div class="help-block with-errors"></div></center>
              <span class="input-group-addon" id="basic-addon3"><font color = "#8a6d3b"><strong>Total:</strong></font></span>
              {!! Form::text('t1',null,['class'=>'form-control','id'=>'t1',' value'=>'0','data-error'=>'Valor por defecto','required']) !!}
                            <center><div class="help-block with-errors"></div></center>
              <span class="input-group-addon" id="basic-addon3"><font color = "#8a6d3b"><strong>Bs.</strong></font></span>
          </div>
          <div class="input-group text-center">
              <span class="input-group-addon" id="basic-addon3"><strong>Ruta:</strong></span>
              {!! Form::text('r2',null,['class'=>'form-control']) !!}
              <span class="input-group-addon" id="basic-addon3"><strong>Personas:</strong></span>
             {!! Form::text('p2',null,['class'=>'form-control','id'=>'p2','onkeyup'=>'sumar();']) !!}
              <span class="input-group-addon" id="basic-addon3"><strong>Costo:</strong></span>
              {!! Form::text('c2',null,['class'=>'form-control','id'=>'c2','onkeyup'=>'sumar();']) !!}
              <span class="input-group-addon" id="basic-addon3"><font color = "#8a6d3b"><strong>Total:</strong></font></span>
              {!! Form::text('t2',null,['class'=>'form-control','id'=>'t2',' value'=>'0']) !!}
              <span class="input-group-addon" id="basic-addon3"><font color = "#8a6d3b"><strong>Bs.</strong></font></span>
          </div>
          <div class="input-group text-center">
              <span class="input-group-addon" id="basic-addon3"><strong>Cantidad de vesces por el Flete del uno del camión:</strong></span>
              {!! Form::text('p3',null,['class'=>'form-control','id'=>'p3','onkeyup'=>'sumar();']) !!}
              <span class="input-group-addon" id="basic-addon3"><strong>Costo:</strong></span>
              {!! Form::text('c3',null,['class'=>'form-control','id'=>'c3','onkeyup'=>'sumar();']) !!}
              <span class="input-group-addon" id="basic-addon3"><font color = "#8a6d3b"><strong>Total:</strong></font></span>
              {!! Form::text('t3',null,['class'=>'form-control','id'=>'t3',' value'=>'0']) !!}
              <span class="input-group-addon" id="basic-addon3"><font color = "#8a6d3b"><strong>Bs.</strong></font></span>
          </div>
          <div class="input-group text-center has-warning has-feedback">
                <span class="input-group-addon" id="basic-addon3"><i><u>Este monto es denominado "Total B" para su diferencia con el Presupuesto de Viaje.</u></i></span>
                <span class="input-group-addon" id="basic-addon3">-></span>
                <span class="input-group-addon" id="basic-addon3">Total transporte:</span>
                  {!! Form::text('tt',null,['class'=>'form-control','id'=>'t4',' value'=>'0']) !!}
                <span class="input-group-addon" id="basic-addon3">Bs. </span>
          </div><hr>
          <div class="input-group text-center has-warning has-feedback">
            
              <span class="input-group-addon" id="basic-addon3"><i><u>Diferencia entre el Presupuesto y Transporte Público</u></i></span>
              <span class="input-group-addon" id="basic-addon3">-></span>
              <span class="input-group-addon" id="basic-addon3"><i><u>Total (A) - Total (B):</u></i></span>
              {!! Form::text('diferencia',null,['class'=>'form-control','id'=>'diferencia',' value'=>'0','data-error'=>'Valor por defecto','required']) !!}
                            <center><div class="help-block with-errors"></div></center>
              <span class="input-group-addon" id="basic-addon3">Bs.</span>
          </div><hr>
          <div class="input-group text-center">
            
              <span class="input-group-addon" id="basic-addon3"><i><u><strong>Agregue un nota (Opcional):</strong></u></i></span>
              {!! Form::text('nota',null,['class'=>'form-control','placeholder'=>'Puede insertar una nota al presupuesto del viaje.']) !!}
          </div>
        </div>
    </div>
</div>
<div class="col-md-12" >
    <div class="panel panel-default">
      <center><h4><strong>Datos del Viaje</strong></h4></center>
        <div class="panel-body text-center jumbotron">
          <div class="input-group text-center has-success has-feedback">
              <span class="input-group-addon" id="basic-addon3">Hora de salida:</span>
              <div class='input-group date input-group-sm' id='datetimepicker3'>
                {!! Form::text('hsalida',null,['class'=>'form-control','data-error'=>'Seleccione una hora','required']) !!}
                <center><div class="help-block with-errors"></div></center>
                <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
              </div>
              <span class="input-group-addon" id="basic-addon3">Hora de llegada:</span>  
              <div class='input-group date input-group-sm' id='datetimepicker4'>
                  {!! Form::text('hllegada',null,['class'=>'form-control','data-error'=>'Seleccione una hora','required']) !!}
                  <center><div class="help-block with-errors"></div></center>
                  <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
              </div>  
          </div>
          <div class="input-group text-center">

            <input type="hidden" name="responsable" value="{{ $responsable }}" />
            <!--{!! Form::text('responsable',$responsable,['class'=>'form-control','data-error'=>'Inserte un responsable','required']) !!}
                          <center><div class="help-block with-errors"></div></center>-->
            <span class="input-group-addon" id="basic-addon3"><strong>Materia:</strong></span>
            {!! Form::text('materia',null,['class'=>'form-control','data-error'=>'Inserte la materia']) !!}
            <span class="input-group-addon" id="basic-addon3"><strong>Sigla:</strong></span>
            {!! Form::text('sigla',null,['class'=>'form-control','data-error'=>'Inserte la sigla']) !!}
                          
            <input type="hidden" name="entidad" value="{{ $viaje->entidad }}" />
            <!--{!! Form::text('entidad',$viaje->entidad,['class'=>'form-control','data-error'=>'Inserte la Entidad','required']) !!}
                          <center><div class="help-block with-errors"></div></center>-->

            <span class="input-group-addon" id="basic-addon3"><strong>Nro. Docentes:</strong></span>
            {!! Form::text('ndocentes',null,['class'=>'form-control','data-error'=>'Inserte la cantidad de Docentes']) !!}
            <input type="hidden" name="tipo" value="{{ $viaje->tipo }}" />
            <!--{!! Form::text('tipo',$viaje->tipo,['class'=>'form-control','disabled']) !!}-->

            <input type="hidden" name="numero_p" value="{{ $viaje->pasajeros }}" />
            <!--{!! Form::text('numero_p',$viaje->pasajeros,['class'=>'form-control','disabled']) !!}-->
            
          </div>
        </div>
    </div>
</div>             