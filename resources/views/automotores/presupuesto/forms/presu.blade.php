<div class="row text-center">
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
                {!! Form::number('division1',null,['class'=>'form-control','id'=>'division','onkeyup'=>'sumar();','data-error'=>'Inserte un valor','required','placeholder'=>'4 o 6','aria-describedby'=>'inputGroupSuccess3Status']) !!} 
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
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="form-group">
                    <center>{!! Form::label('Combustible Total: ') !!}</center>
                    <div class='input-group date'>
                        {!! Form::number('cantidad1',null,['class'=>'form-control','id'=>'cantidadC','onkeyup'=>'sumar();','data-error'=>'Campo obligatorio','required','placeholder'=>'Redondee']) !!}
                        <span class="input-group-addon">Litros</span>
                    </div>
                    <center><div class="help-block with-errors"></div></center>
                </div>
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
                <div class="col-md-5">
                    <center>{!! Form::label('Precio(L.): ') !!}</center>
                    {!! Form::text('precio1',null,['class'=>'form-control','id'=>'precioC','onkeyup'=>'sumar();','data-error'=>'Campo obligatorio','required','placeholder'=>'Ejm.: 3.50']) !!}
                    <center><div class="help-block with-errors"></div></center>
                </div>
                <div class="col-md-7">
                    <center>{!! Form::label('Costo total: ') !!}</center>
                    <div class="has-warning input-group date">
                        {!! Form::text('total1C',null,['class'=>'form-control','id'=>'totalC',' value'=>'0','data-error'=>'Valor por defecto','required','readonly'=>'readonly']) !!}
                        <span class="input-group-addon">Bs.</span>
                    </div>
                    <center><div class="help-block with-errors"></div></center>
                </div>
        </li>
        <li class="list-group-item list-group-item-success col-md-12">
            <center><strong><u>Hora de Salida</u></strong></center>
            <div class="col-md-12">
                <div class='input-group date input-group-sm' id='datetimepicker3'>
                  {!! Form::text('hsalida',null,['class'=>'form-control','data-error'=>'Seleccione una hora','required']) !!}
                  <center><div class="help-block with-errors"></div></center>
                  <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                </div>
            </div>
            <center><strong><u>Hora de Llegada</u></strong></center>
            <div class="col-md-12">
                <div class='input-group date input-group-sm' id='datetimepicker4'>
                  {!! Form::text('hllegada',null,['class'=>'form-control','data-error'=>'Seleccione una hora','required']) !!}
                  <center><div class="help-block with-errors"></div></center>
                  <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                </div>  
            </div>
        </li>
        <li class="list-group-item list-group-item-success col-md-12">
            <center><strong><font color="#3f3f3f"><u>Materia</u></font></strong></center>
            <div class="col-md-12">
                {!! Form::text('materia',null,['class'=>'form-control','data-error'=>'Inserte la materia']) !!}
            </div>
            <div class="col-md-5">
                <center><strong><font color="#3f3f3f"><u>Docentes</u></font></strong></center>
                {!! Form::number('ndocentes',null,['class'=>'form-control','data-error'=>'Inserte la cantidad de Docentes']) !!}
            </div>
            <div class="col-md-7">
                <center><strong><font color="#3f3f3f"><u>Sigla</u></font></strong></center>
                {!! Form::text('sigla',null,['class'=>'form-control','data-error'=>'Inserte la sigla']) !!}
            </div>
        </li>
        <li class="list-group-item list-group-item-success col-md-12">
            <center><strong><font color="#3f3f3f"><u>Nota</u></font></strong></center>
            
                {!! Form::textarea('nota',null,['class'=>'form-control','placeholder'=>'Puede agregar una nota al presupuesto del viaje.','rows'=>3]) !!}
           
        </li>
    </ul>
  </div>
  <div class="col-md-7">
        <li class="list-group-item list-group-item-success col-md-12">
            <center><strong><h4><u>Peajes ida y vuelta</u></h4></strong></center>
            <div class="row">
                <div class="col-md-4">
                    <center>{!! Form::label('Nro. peajes: ') !!}</center>
                    {!! Form::number('cantidad5',null,['class'=>'form-control','id'=>'cantidadP','onkeyup'=>'sumar();','data-error'=>'Campo obligatorio','required','placeholder'=>'Ejm.: 2']) !!}
                    <center><div class="help-block with-errors"></div></center>
                </div>
                <div class="col-md-4">
                    <center>{!! Form::label('Precio(c/u): ') !!}</center>
                    {!! Form::number('precio5',null,['class'=>'form-control','id'=>'precioP','onkeyup'=>'sumar();','data-error'=>'Campo obligatorio','required','placeholder'=>'Ejm.: 10']) !!}
                    <center><div class="help-block with-errors"></div></center>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <center>{!! Form::label('Total: ') !!}</center>
                        <div class='input-group date has-warning'>
                            {!! Form::text('total5P',null,['class'=>'form-control','id'=>'totalP',' value'=>'0','data-error'=>'Valor por defecto','required','readonly'=>'readonly']) !!}
                            <span class="input-group-addon">Bs.</span>
                        </div>
                        <center><div class="help-block with-errors"></div></center>
                    </div>
                </div>
            </div>
        </li>
        <li class="list-group-item list-group-item-success col-md-12">
            <center><strong><h4><font color = "#3f3f3f"><u>Viáticos ciudad</u></font></h4></strong></center>
            <div class="row">
                <div class="col-md-4">
                    <center><font color = "#3f3f3f">{!! Form::label('Nro. de días: ') !!}</font></center>
                    {!! Form::number('cantidad2',null,['class'=>'form-control','id'=>'cantidadVC','onkeyup'=>'sumar();','placeholder'=>'Ejm.: 4']) !!}
                </div>
                <div class="col-md-4">
                    <center><font color = "#3f3f3f">{!! Form::label('Precio por día: ') !!}</font></center>
                    {!! Form::number('precio2',null,['class'=>'form-control','id'=>'precioVC','onkeyup'=>'sumar();','placeholder'=>'Ejm.: 100']) !!}
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <center><font color = "#3f3f3f">{!! Form::label('Total: ') !!}</font></center>
                        <div class='input-group date has-warning'>
                            {!! Form::text('total2VC',null,['class'=>'form-control','id'=>'totalVC',' value'=>'0','readonly'=>'readonly']) !!}
                            <span class="input-group-addon">Bs.</span>
                        </div>
                        <center><div class="help-block with-errors"></div></center>
                    </div>
                </div>
            </div>
            <center><strong><h4><font color = "#3f3f3f"><u>Viáticos provincia</u></font></h4></strong></center>
            <div class="row">
                <div class="col-md-4">
                    {!! Form::number('cantidad3',null,['class'=>'form-control','id'=>'cantidadVP','onkeyup'=>'sumar();','placeholder'=>'Ejm.: 3']) !!}
                </div>
                <div class="col-md-4">
                    {!! Form::number('precio3',null,['class'=>'form-control','id'=>'precioVP','onkeyup'=>'sumar();','placeholder'=>'Ejm.: 100']) !!}
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class='input-group date has-warning'>
                            {!! Form::text('total3VP',null,['class'=>'form-control','id'=>'totalVP',' value'=>'0','readonly'=>'readonly']) !!}
                            <span class="input-group-addon">Bs.</span>
                        </div>
                        <center><div class="help-block with-errors"></div></center>
                    </div>
                </div>
            </div>
            <center><strong><h4><font color = "#3f3f3f"><u>Viáticos frontera</u></font></h4></strong></center>
            <div class="row">
                <div class="col-md-4">
                    {!! Form::number('cantidad4',null,['class'=>'form-control','id'=>'cantidadVF','onkeyup'=>'sumar();','placeholder'=>'Ejm.: 1']) !!}
                </div>
                <div class="col-md-4">
                    {!! Form::number('precio4',null,['class'=>'form-control','id'=>'precioVF','onkeyup'=>'sumar();','placeholder'=>'Ejm.: 100']) !!}
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class='input-group date has-warning'>
                            {!! Form::text('total4VF',null,['class'=>'form-control','id'=>'totalVF',' value'=>'0','readonly'=>'readonly']) !!}
                            <span class="input-group-addon">Bs.</span>
                        </div>
                        <center><div class="help-block with-errors"></div></center>
                    </div>
                </div>
            </div>
            <center><strong><h4><font color = "#3f3f3f"><u>Mantenimiento vehicular</u></font></h4></strong></center>
            <div class="row">
                <div class="col-md-4">
                    {!! Form::number('cantidad6',null,['class'=>'form-control','id'=>'cantidadM','onkeyup'=>'sumar();','placeholder'=>'Ejm.: 1']) !!}
                </div>
                <div class="col-md-4">
                    {!! Form::number('precio6',null,['class'=>'form-control','id'=>'precioM','onkeyup'=>'sumar();','placeholder'=>'Ejm.: 20']) !!}
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class='input-group date has-warning'>
                            {!! Form::text('total6M',null,['class'=>'form-control','id'=>'totalM',' value'=>'0','readonly'=>'readonly']) !!}
                            <span class="input-group-addon">Bs.</span>
                        </div>
                        <center><div class="help-block with-errors"></div></center>
                    </div>
                </div>
            </div>
            <center><strong><h4><font color = "#3f3f3f"><u>Garaje del vehículo</u></font></h4></strong></center>
            <div class="row">
                <div class="col-md-4">
                    {!! Form::number('cantidad7',null,['class'=>'form-control','id'=>'cantidadG','onkeyup'=>'sumar();','placeholder'=>'Ejm.: 2']) !!}
                </div>
                <div class="col-md-4">
                    {!! Form::number('precio7',null,['class'=>'form-control','id'=>'precioG','onkeyup'=>'sumar();','placeholder'=>'Ejm.: 20']) !!}
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class='input-group has-warning'>
                            {!! Form::text('total7G',null,['class'=>'form-control','id'=>'totalG',' value'=>'0','readonly'=>'readonly']) !!}
                            <span class="input-group-addon">Bs.</span>
                        </div>
                        <center><div class="help-block with-errors"></div></center>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6"></div>
                <div class="input-group text-center has-warning col-md-6">
                      <span class="input-group-addon" id="basic-addon3">Total (A):</span>
                        {!! Form::text('total8T',null,['class'=>'form-control','id'=>'totalT',' value'=>'0','readonly'=>'readonly']) !!}
                      <span class="input-group-addon" id="basic-addon3">Bs. </span>
                </div>
            </div>
        </li>
    </ul>
    </ul>
</div>        

     <!--Hasta aqui la descripcion presupuestaria...-->
<div class="col-md-12" >
  <li class="list-group-item list-group-item-success col-md-12">
      <center><strong><h4><u>Transporte Público</u></h4></strong></center>
      <div class="row">
          <div class="col-md-6">
            <center><label>Ruta</label></center>
            {!! Form::text('r1',null,['class'=>'form-control','data-error'=>'Campo obligatorio','required','placeholder'=>'Ejm. Potosí-Oruro-Cochabamba']) !!}
            <center><div class="help-block with-errors"></div></center>
          </div>
          <div class="col-md-2">
             <center><label>Personas</label></center>
             {!! Form::number('p1',null,['class'=>'form-control','id'=>'p1','onkeyup'=>'sumar();','data-error'=>'Campo obligatorio','required','placeholder'=>'Ejm.1']) !!}
             <center><div class="help-block with-errors"></div></center>
          </div>
          <div class="col-md-2">
              <center><label>Coto</label></center>
             {!! Form::text('c1',null,['class'=>'form-control','id'=>'c1','onkeyup'=>'sumar();','data-error'=>'Campo obligatorio','required','placeholder'=>'Ejm.40','required']) !!}
             <center><div class="help-block with-errors"></div></center>
          </div>
          <div class="col-md-2">
             <center><label>Total</label></center>
             {!! Form::text('t1',null,['class'=>'form-control','id'=>'t1',' value'=>'0','data-error'=>'Valor por defecto','required','readonly'=>'readonly']) !!}
             <center><div class="help-block with-errors"></div></center>
          </div>
      </div>
      <div class="row">
          <div class="col-md-6">
            {!! Form::text('r2',null,['class'=>'form-control','placeholder'=>'Ejm. La paz-Potosí-Tarija']) !!}
          </div>
          <div class="col-md-2">
             {!! Form::number('p2',null,['class'=>'form-control','id'=>'p2','onkeyup'=>'sumar();','placeholder'=>'Ejm.2']) !!}
          </div>
          <div class="col-md-2">
            {!! Form::text('c2',null,['class'=>'form-control','id'=>'c2','onkeyup'=>'sumar();','placeholder'=>'Ejm.50']) !!}
          </div>
          <div class="col-md-2">
            {!! Form::text('t2',null,['class'=>'form-control','id'=>'t2',' value'=>'0','readonly'=>'readonly']) !!}
          </div>
      </div><br>  
      <div class="row">
          <div class="col-md-6">
            <span class="input-group-addon" id="basic-addon3"><strong>El uso del flete por el camión:</strong></span>
          </div>
          <div class="col-md-2">
            {!! Form::number('p3',null,['class'=>'form-control','id'=>'p3','onkeyup'=>'sumar();','placeholder'=>'Vueltas']) !!}
          </div>
          <div class="col-md-2">
            {!! Form::text('c3',null,['class'=>'form-control','id'=>'c3','onkeyup'=>'sumar();','placeholder'=>'Ejm.100']) !!}
          </div>
          <div class="col-md-2">
            {!! Form::text('t3',null,['class'=>'form-control','id'=>'t3',' value'=>'0','readonly'=>'readonly']) !!}
          </div>
      </div>
      <div class="row">
          <div class="col-md-8"></div>
          <div class="input-group text-center has-warning col-md-4">
                <span class="input-group-addon" id="basic-addon3">Total (B):</span>
                  {!! Form::text('tt',null,['class'=>'form-control','id'=>'t4',' value'=>'0' ,'readonly'=>'readonly']) !!}
              <span class="input-group-addon" id="basic-addon3">Bs. </span>
          </div>
      </div><hr>
      <div class="row">
          <div class="col-md-3">
            
          </div>
          <div class="input-group text-center has-warning col-md-6">
                <span class="input-group-addon" id="basic-addon3">Diferencia ( A - B):</span>
                  {!! Form::text('diferencia',null,['class'=>'form-control','id'=>'diferencia',' value'=>'0','data-error'=>'Valor por defecto','required','readonly'=>'readonly']) !!}
                  <center><div class="help-block with-errors"></div></center>
              <span class="input-group-addon" id="basic-addon3">Bs. </span>
          </div>
      </div>
      <input type="hidden" name="responsable" value="{{ $responsable }}" /> 
      <input type="hidden" name="entidad" value="{{ $viaje->entidad }}" />
      <input type="hidden" name="tipo" value="{{ $viaje->tipo }}" />
      <input type="hidden" name="numero_p" value="{{ $viaje->pasajeros }}" /> 
  </li>
</div>             