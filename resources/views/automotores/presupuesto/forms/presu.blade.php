<div class="text-center">
    <div class="row">
        <div class="col-md-3 form-group has-success has-feedback">
            <div>
              <label class="control-label" for="inputGroupSuccess3">Vehículo</label>  
            </div>
            {!! Form::select('vehiculo',$vehiculos,null,['class'=>'form-control','placeholder'=>'Seleccione un Vehiculo','data-error'=>'Seleccione un Vehículo','required','id'=>'vehis','value'=>'id']) !!}
            <center><div class="help-block with-errors"></div></center>
        </div>
        <div class="col-md-3 form-group has-success has-feedback">
          <div>
              <label class="control-label" for="inputGroupSuccess3">Chofer</label>
          </div>
          {!! Form::select('chofer',$choferes,null,['class'=>'form-control','id'=>'chofs','placeholder'=>'Seleccione un chofer','data-error'=>'Seleccione a un Chofer','required','value'=>'id']) !!}
          <center><div class="help-block with-errors"></div></center>
        </div>
        <div class="col-md-3 form-group has-success has-feedback">
          <div>
              <label class="control-label" for="inputGroupSuccess3">Encargado del Viaje</label>
          </div>
          {!! Form::select('encargado',$encargados,null,['class'=>'form-control','placeholder'=>'Seleccione un responsable','data-error'=>'Seleccione a un Encargado','required','id'=>'encars','value'=>'id']) !!}
           <center><div class="help-block with-errors"></div></center>
        </div>
        <div class="col-md-3 form-group has-success has-feedback">
          <div class="form-group">
              <label class="control-label" for="inputGroupSuccess3">Fecha de solicitud</label>
              <div class='input-group date' id='datetimepicker8'>
                {!! Form::text('fecha_sa',null,['class'=>'form-control input-sm','data-error'=>'Seleccione una fecha','required','aria-describedby'=>'inputGroupSuccess3Status','placeholder'=>'Solicitud en D.S.A.']) !!}
                <center><div class="help-block with-errors"></div></center>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
              </div>
          </div>  
        </div>
    </div><input type="hidden" name="viaje_id" value="{{ $viaje->id }}" />
</div>

<div class="col-md-12" >
      <div class="panel panel-default">
      
            <center><h4><strong>Descripcion del Presupuesto</strong></h4></center>
  
        <div class="panel-body text-center jumbotron">
          <div class="form-group">
              <div class="input-group has-success has-feedback">
                    <span class="input-group-addon" id="basic-addon3">Km. Total</span>
                    {!! Form::text('total1',$ruta->total,['class'=>'form-control','disabled','id'=>'total']) !!}
                    <span class="input-group-addon" id="basic-addon3"></span>
                    
                    <span class="input-group-addon" id="basic-addon3">Divicion: Gasolina/Diesel</span>
                    {!! Form::text('division1',null,['class'=>'form-control','id'=>'division','onkeyup'=>'sumar();','data-error'=>'Inserte un valor','required','placeholder'=>'4 o 6','aria-describedby'=>'inputGroupSuccess3Status']) !!} 
                    <center><div class="help-block with-errors"></div></center>
                    
                    <span class="input-group-addon" id="basic-addon3"></span>
                    <span class="input-group-addon" id="basic-addon3"><font color = "#8a6d3b"><strong>Combustible Total:</strong></font></span>
                     {!! Form::text('combustible1',null,['class'=>'form-control','id'=>'combustible']) !!}
                    <center><div class="help-block with-errors"></div></center>
                
                    <span class="input-group-addon" id="basic-addon3"><font color = "#8a6d3b"><strong>Litros</strong></font></span>
              </div>
              <li class="list-group-item ">
                    <center><strong>Costo del combustible</strong></center>
              </li>
              <div class="input-group text-center has-success has-feedback">
                   
                  <span class="input-group-addon" id="basic-addon3">Designación del combustible Total:</span>
                  {!! Form::text('cantidad1',null,['class'=>'form-control','id'=>'cantidadC','onkeyup'=>'sumar();','data-error'=>'Campo obligatorio','required']) !!}
                                <center><div class="help-block with-errors"></div></center>
                  <span class="input-group-addon" id="basic-addon3">Litros</span>
              
                  <span class="input-group-addon" id="basic-addon3"></span>
                  <span class="input-group-addon" id="basic-addon3"><font color = "black"><strong> Combustible por Pedido:</strong></font></span>
                  {!! Form::text('carta1',null,['class'=>'form-control','id'=>'carta1','onkeyup'=>'sumar();','value'=>'0','placeholder'=>'No es necesario']) !!}
                                <center><div class="help-block with-errors"></div></center>
                  <span class="input-group-addon" id="basic-addon3"><font color = "black"><strong>Litros</strong></font></span></div>
              
              <div class="input-group text-center has-success has-feedback">
                  <span class="input-group-addon" id="basic-addon3">Precio por litro:</span>
                  {!! Form::text('precio1',null,['class'=>'form-control','id'=>'precioC','onkeyup'=>'sumar();','data-error'=>'Campo obligatorio','required']) !!}
                                <center><div class="help-block with-errors"></div></center>
                  <span class="input-group-addon" id="basic-addon3">Bs.</span>
                  <span class="input-group-addon" id="basic-addon3"></span>
                   
                  <span class="input-group-addon" id="basic-addon3"><font color = "#8a6d3b"><strong>Costo de combustible total:</strong></font></span>              
                  {!! Form::text('total1C',null,['class'=>'form-control','id'=>'totalC',' value'=>'0','data-error'=>'Valor por defecto','required']) !!}
                                 <center><div class="help-block with-errors"></div></center>
                  <span class="input-group-addon" id="basic-addon3"><font color = "#8a6d3b"><strong>Bs.</strong></font></span>
              </div>
              <li class="list-group-item ">
                    <center><strong>Peajes ida y vuelta</strong></center>
              </li>
              <div class="input-group text-center has-success has-feedback">
                  <span class="input-group-addon" id="basic-addon3">Cantidad de Peajes:</span> 
                  {!! Form::text('cantidad5',null,['class'=>'form-control','id'=>'cantidadP','onkeyup'=>'sumar();','data-error'=>'Campo obligatorio','required']) !!}

                  <span class="input-group-addon" id="basic-addon3">Dias</span>
                  <span class="input-group-addon" id="basic-addon3"></span>
                  <span class="input-group-addon" id="basic-addon3">Precio por peaje:</span>
                  {!! Form::text('precio5',null,['class'=>'form-control','id'=>'precioP','onkeyup'=>'sumar();','data-error'=>'Campo obligatorio','required']) !!}

                  <span class="input-group-addon" id="basic-addon3">Bs.</span>
                  <span class="input-group-addon" id="basic-addon3"></span>
                  <span class="input-group-addon" id="basic-addon3"><font color = "#8a6d3b"><strong>Total:</strong></font></span>
                  {!! Form::text('total5P',null,['class'=>'form-control','id'=>'totalP',' value'=>'0','data-error'=>'Valor por defecto','required']) !!}

                  <span class="input-group-addon" id="basic-addon3"><font color = "#8a6d3b"><strong>Bs.</strong></font></span>
              </div>

              <li class="list-group-item ">
                    <center><strong>Viáticos Ciudad</strong></center>
              </li>
              <div class="input-group text-center">
                  <span class="input-group-addon" id="basic-addon3"><strong>Cantidad de Dias:</strong></span>                     
                  {!! Form::text('cantidad2',null,['class'=>'form-control','id'=>'cantidadVC','onkeyup'=>'sumar();']) !!}
                  <span class="input-group-addon" id="basic-addon3"><strong>Dias</strong></span>
                  <span class="input-group-addon" id="basic-addon3"></span>
                  <span class="input-group-addon" id="basic-addon3"><strong>Monto en Bs. por dia</strong></span>
                  {!! Form::text('precio2',null,['class'=>'form-control','id'=>'precioVC','onkeyup'=>'sumar();']) !!}
                  <span class="input-group-addon" id="basic-addon3"><strong>Bs.</strong></span>
                  <span class="input-group-addon" id="basic-addon3"></span>
                  <span class="input-group-addon" id="basic-addon3"><font color = "#8a6d3b"><strong>Total:</strong></font></span>
                  {!! Form::text('total2VC',null,['class'=>'form-control','id'=>'totalVC',' value'=>'0']) !!}
                  <span class="input-group-addon" id="basic-addon3"><font color = "#8a6d3b"><strong>Bs.</strong></font></span>
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