{!! Form::open(['route'=>'presupuestos.store','method'=>'POST','data-toggle'=>'validator' ]) !!}
  <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
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
            </div><hr>
            <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-2">
                    {!! Form::label('Inicio del Viaje') !!}
                    {!! Form::date('fecha_inicial',$viaje->fecha_inicial,['class'=>'form-control','disabled']) !!}    
              </div>
              <div class="col-md-2">
                    {!! Form::label('Final del viaje') !!}
                      {!! Form::date('fecha_final',$viaje->fecha_final,['class'=>'form-control','disabled']) !!}
              </div>
              <div class="col-md-1">
                  {!! Form::label('Dias:') !!}
                  {!! Form::text('dias',$viaje->dias,['class'=>'form-control','disabled']) !!}
                  <center><div class="help-block with-errors"></div></center>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('Solicitud en S.A.') !!}
                    <div class='input-group date' id='datetimepicker8'>
                      {!! Form::text('fecha_sa',null,['class'=>'form-control','data-error'=>'Seleccione una fecha','required']) !!}
                      <center><div class="help-block with-errors"></div></center>
                      <span class="input-group-addon">
                          <span class="glyphicon glyphicon-calendar"></span>
                      </span>
                    </div>
                </div>  
              </div>
              <div class="col-md-1">
                  {!! Form::label('Viaje') !!}
                  {!! Form::text('viaje_id',$viaje->id,['class'=>'form-control','data-error'=>'Inserte un valor','required']) !!}
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
                </div></br>
                <div class="row">
                  <div class="col-md-9">
                    {!! Form::select('dest1[]',$dest1,null,['class'=>'form-control','disabled']) !!}
                  </div>
                  <div class="col-md-3">
                    {!! Form::text('k1',$ruta->k1,['class'=>'form-control','disabled','id'=>'k1','onkeyup'=>'sumar();']) !!}
                  </div>
                </div></br>
                <div class="row">
                  <div class="col-md-9">
                    {!! Form::select('dest2[]',$dest2,null,['class'=>'form-control','disabled']) !!}
                  </div>
                  <div class="col-md-3">
                    {!! Form::text('k2',$ruta->k2,['class'=>'form-control','disabled','id'=>'k2','onkeyup'=>'sumar();']) !!}
                  </div>
                </div></br>
                <div class="row">
                  <div class="col-md-9">
                    {!! Form::select('dest3[]',$dest3,null,['class'=>'form-control','disabled']) !!}
                  </div>
                  <div class="col-md-3">
                    {!! Form::text('k3',$ruta->k3,['class'=>'form-control','disabled','id'=>'k3','onkeyup'=>'sumar();']) !!}
                  </div>
                </div></br>
                <div class="row">
                  <div class="col-md-9">
                    {!! Form::select('dest4[]',$dest4,null,['class'=>'form-control','disabled']) !!}
                  </div>
                  <div class="col-md-3">
                    {!! Form::text('k4',$ruta->k4,['class'=>'form-control','disabled','id'=>'k4','onkeyup'=>'sumar();']) !!}
                  </div>
                </div></br>
                <div class="row">
                  <div class="col-md-9">
                    {!! Form::select('dest5[]',$dest5,null,['class'=>'form-control','disabled']) !!}
                  </div>
                  <div class="col-md-3">
                    {!! Form::text('k5',$ruta->k5,['class'=>'form-control','disabled','id'=>'k5','onkeyup'=>'sumar();']) !!}
                  </div>
                </div></br>
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
                <li class="list-group-item">
                    <div class="btn-group" role="group">
                        {!! Form::label('Gasolina/Diesel') !!}
                    </div>
                    <div class="btn-group" role="group">
                        
                          {!! Form::number('division1',null,['class'=>'form-control','id'=>'division','onkeyup'=>'sumar();','data-error'=>'Inserte un valor','required']) !!}
                          <center><div class="help-block with-errors"></div></center>
                    </div>
                </li>
              </div>
            </div>
          <!--Hasta aqui las destinos y kilometrajes de las rutas-->

          <div class="panel panel-default">
              <li class="list-group-item">
                  <center><h4><u>Registros del Viaje</u></h4></center>
              </li>
              <div class="panel-body jumbotron text-center">
                  <div class="row">
                      <div class="col-md-2"></div>
                      <div class="col-md-8">
                          {!! Form::label('Responsable del Formulario') !!} 
                          {!! Form::text('responsable',$responsable,['class'=>'form-control','data-error'=>'Inserte un responsable','required']) !!}
                          <center><div class="help-block with-errors"></div></center>
                      </div>
                      <div class="col-md-2"></div>
                  </div>
                  <div class="row">
                      <div class="col-md-8">
                          {!! Form::label('Materia') !!}    
                          {!! Form::text('materia',null,['class'=>'form-control','data-error'=>'Inserte la materia','required']) !!}
                          <center><div class="help-block with-errors"></div></center>
                      </div>
                      <div class="col-md-4">
                          {!! Form::label('Sigla') !!}    
                          {!! Form::text('sigla',null,['class'=>'form-control','data-error'=>'Inserte la sigla','required']) !!}
                          <center><div class="help-block with-errors"></div></center>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-8">
                          {!! Form::label('Entidad:') !!}
                          {!! Form::text('entidad',$viaje->entidad,['class'=>'form-control','data-error'=>'Inserte la Entidad','required']) !!}
                          <center><div class="help-block with-errors"></div></center>
                      </div>
                      <div class="col-md-4">
                          {!! Form::label('# Docentes') !!}
                          {!! Form::number('ndocentes',null,['class'=>'form-control','data-error'=>'Inserte la cantidad de Docentes','required']) !!}
                          <center><div class="help-block with-errors"></div></center>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-8">
                        <div class="form-group">
                            {!! Form::label('Tipo de viaje') !!}
                            {!! Form::text('tipo',$viaje->tipo,['class'=>'form-control','disabled']) !!}
                        </div>
                      </div>
                      <div class="col-md-4">
                          {!! Form::label('# Pasajeros') !!}
                          {!! Form::text('numero_p',$viaje->pasajeros,['class'=>'form-control','disabled']) !!}
                      </div>
                  </div>
                  <div class="row">   
                      <div class="col-md-6">
                          {!! Form::label('Hora Salida') !!}
                          <div class='input-group date input-group-sm' id='datetimepicker3'>
                            {!! Form::text('hsalida',null,['class'=>'form-control','data-error'=>'Seleccione una hora','required']) !!}
                            <center><div class="help-block with-errors"></div></center>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                          </div>
                      </div>
                      <div class="col-md-6">   
                            {!! Form::label('Hora Llegada') !!}
                            <div class='input-group date input-group-sm' id='datetimepicker4'>
                                {!! Form::text('hllegada',null,['class'=>'form-control','data-error'=>'Seleccione una hora','required']) !!}
                                <center><div class="help-block with-errors"></div></center>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>  
                     </div>
                  </div>    
              </div>
            </div>
          </div>
          <div class="col-md-7" >
              <div class="panel panel-default">
              <li class="list-group-item">
                  <center><h4><u>Descripción Presupuestario</u></h4></center>
              </li>
              <div class="panel-body text-center jumbotron">
                  <div class="row">
                      <div class="btn-group" role="group">
                          {!! Form::label('Combustible: ') !!}
                      </div>
                      <div class="btn-group" role="group">
                          {!! Form::text('combustible1',null,['class'=>'form-control','id'=>'combustible']) !!}
                      </div>
                      <div class="btn-group" role="group">
                          {!! Form::label('Litros ') !!}
                      </div>
                  </div></br>
                  <li class="list-group-item">
                    <div class="row">
                      <h4><u>Combustible Gasolina/Diesel</u></h4>
                      <div class="col-md-4">
                        <div class="btn-group" role="group">
                          {!! Form::label('Conbustible(Litros)') !!}
                             <div class="input-group date">    
                                {!! Form::text('cantidad1',null,['class'=>'form-control','id'=>'cantidadC','onkeyup'=>'sumar();','data-error'=>'Campo obligatorio','required']) !!}
                                <center><div class="help-block with-errors"></div></center>
                                <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-oil"></span>
                                </span>
                             </div>
                        </div>             
                      </div>
                      <div class="col-md-2">
                        <div class="btn-group" role="group">
                            {!! Form::label('Pedido') !!}
                            <div class="input-group date">
                                {!! Form::text('carta1',null,['class'=>'form-control','id'=>'carta1','onkeyup'=>'sumar();','value'=>'0']) !!}
                                <center><div class="help-block with-errors"></div></center>
                            </div>
                        </div>
                      </div>           
                      <div class="col-md-3">
                        <div class="btn-group" role="group">
                            {!! Form::label('Costo(Litro)') !!}
                            <div class="input-group date">
                                {!! Form::text('precio1',null,['class'=>'form-control','id'=>'precioC','onkeyup'=>'sumar();','data-error'=>'Campo obligatorio','required']) !!}
                                <center><div class="help-block with-errors"></div></center>
                                <span class="input-group-addon">Bs.</span>
                            </div>
                        </div>
                      </div>
                      <div class="col-md-3">    
                        <div class="btn-group" role="group">
                              {!! Form::label('Total') !!}
                              <div class="input-group date">
                                {!! Form::text('total1C',null,['class'=>'form-control','id'=>'totalC',' value'=>'0','data-error'=>'Valor por defecto','required']) !!}
                                 <center><div class="help-block with-errors"></div></center>
                                <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-usd"></span>
                                </span>
                              </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="row">
                      <h4><u>Viaticos Ciudad</u></h4>
                      <div class="col-md-4">
                        <div class="btn-group" role="group">
                          {!! Form::label('Nro. Dias') !!}
                              <div class="input-group date">
                                {!! Form::text('cantidad2',null,['class'=>'form-control','id'=>'cantidadVC','onkeyup'=>'sumar();']) !!}
                                <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-certificate"></span>
                                </span>
                              </div>
                        </div>             
                      </div>           
                      <div class="col-md-4">
                        <div class="btn-group" role="group">
                            {!! Form::label('Monto por Dia') !!}
                              <div class="input-group date">
                                {!! Form::text('precio2',null,['class'=>'form-control','id'=>'precioVC','onkeyup'=>'sumar();']) !!}
                                <span class="input-group-addon">Bs.</span>
                              </div>
                        </div>
                      </div>
                      <div class="col-md-4">    
                        <div class="btn-group" role="group">
                              {!! Form::label('Total') !!}
                                <div class="input-group date">
                                  {!! Form::text('total2VC',null,['class'=>'form-control','id'=>'totalVC',' value'=>'0']) !!}
                                  <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-usd"></span>
                                  </span>
                                </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="row">
                      <h4><u>Viaticos Provincia</u></h4>
                      <div class="col-md-4">
                        <div class="btn-group" role="group">
                          {!! Form::label('Nro. Dias') !!}
                              <div class="input-group date">  
                                {!! Form::text('cantidad3',null,['class'=>'form-control','id'=>'cantidadVP','onkeyup'=>'sumar();']) !!}
                                <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-certificate"></span>
                                </span>
                              </div>
                        </div>             
                      </div>           
                      <div class="col-md-4">
                        <div class="btn-group" role="group">
                            {!! Form::label('Monto por Dia') !!}
                              <div class="input-group date">
                                {!! Form::text('precio3',null,['class'=>'form-control','id'=>'precioVP','onkeyup'=>'sumar();']) !!}
                                <span class="input-group-addon">Bs.</span>
                              </div>
                        </div>
                      </div>
                      <div class="col-md-4">    
                        <div class="btn-group" role="group">
                              {!! Form::label('Total') !!}
                                <div class="input-group date">
                                  {!! Form::text('total3VP',null,['class'=>'form-control','id'=>'totalVP',' value'=>'0']) !!}
                                  <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-usd"></span>
                                  </span>
                                </div>    
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="row">
                      <h4><u>Viaticos Frontera</u></h4>
                      <div class="col-md-4">
                        <div class="btn-group" role="group">
                          {!! Form::label('Nro. Dias') !!}
                              <div class="input-group date">
                                {!! Form::text('cantidad4',null,['class'=>'form-control','id'=>'cantidadVF','onkeyup'=>'sumar();']) !!}
                                <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-certificate"></span>
                                </span>
                              </div>
                        </div>             
                      </div>           
                      <div class="col-md-4">
                        <div class="btn-group" role="group">
                            {!! Form::label('Monto por Dia') !!}
                              <div class="input-group date">
                                {!! Form::text('precio4',null,['class'=>'form-control','id'=>'precioVF','onkeyup'=>'sumar();']) !!}
                                <span class="input-group-addon">Bs.</span>
                              </div>
                        </div>
                      </div>
                      <div class="col-md-4">    
                        <div class="btn-group" role="group">
                              {!! Form::label('Total') !!}
                                <div class="input-group date">
                                  {!! Form::text('total4VF',null,['class'=>'form-control','id'=>'totalVF',' value'=>'0']) !!}
                                  <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-usd"></span>
                                  </span>
                                </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="row">
                      <h4><u>Peajes ida y vuelta</u></h4>
                      <div class="col-md-4">
                        <div class="btn-group" role="group">
                          {!! Form::label('Número:') !!}
                                <div class="input-group date">
                                  {!! Form::text('cantidad5',null,['class'=>'form-control','id'=>'cantidadP','onkeyup'=>'sumar();','data-error'=>'Campo obligatorio','required']) !!}
                                  <center><div class="help-block with-errors"></div></center>
                                  <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-sort"></span>
                                  </span>
                                </div>
                        </div>             
                      </div>           
                      <div class="col-md-4">
                        <div class="btn-group" role="group">
                            {!! Form::label('Monto por Peaje') !!}
                              <div class="input-group date">
                                  {!! Form::text('precio5',null,['class'=>'form-control','id'=>'precioP','onkeyup'=>'sumar();','data-error'=>'Campo obligatorio','required']) !!}
                                  <center><div class="help-block with-errors"></div></center>
                                  <span class="input-group-addon">Bs.</span>
                              </div>
                        </div>
                      </div>
                      <div class="col-md-4">    
                        <div class="btn-group" role="group">
                              {!! Form::label('Total') !!}
                              <div class="input-group date">
                                {!! Form::text('total5P',null,['class'=>'form-control','id'=>'totalP',' value'=>'0','data-error'=>'Valor por defecto','required']) !!}
                                  <center><div class="help-block with-errors"></div></center>
                                  <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-usd"></span>
                                  </span>
                              </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="row">
                      <h4><u>Mantenimiento Vehicular</u></h4>
                      <div class="col-md-4">
                        <div class="btn-group" role="group">
                          {!! Form::label('Número:') !!}
                            <div class="input-group date">
                                {!! Form::text('cantidad6',null,['class'=>'form-control','id'=>'cantidadM','onkeyup'=>'sumar();']) !!}
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-scale"></span>
                                </span>
                            </div>
                        </div>             
                      </div>           
                      <div class="col-md-4">
                        <div class="btn-group" role="group">
                            {!! Form::label('Monto') !!}
                            <div class="input-group date"> 
                             {!! Form::text('precio6',null,['class'=>'form-control','id'=>'precioM','onkeyup'=>'sumar();']) !!}
                                <span class="input-group-addon">Bs.</span>
                            </div>
                        </div>
                      </div>
                      <div class="col-md-4">    
                        <div class="btn-group" role="group">
                            {!! Form::label('Total') !!}
                            <div class="input-group date">
                                {!! Form::text('total6M',null,['class'=>'form-control','id'=>'totalM',' value'=>'0']) !!}
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-usd"></span>
                                </span>
                            </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="row">
                      <h4><u>Garaje Vehicular</u></h4>
                      <div class="col-md-4">
                        <div class="btn-group" role="group">
                          {!! Form::label('Número:') !!}
                            <div class="input-group date">  
                              {!! Form::text('cantidad7',null,['class'=>'form-control','id'=>'cantidadG','onkeyup'=>'sumar();']) !!}
                              <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-home"></span>
                              </span>
                            </div>
                        </div>             
                      </div>           
                      <div class="col-md-4">
                        <div class="btn-group" role="group">
                            {!! Form::label('Precio.') !!}
                            <div class="input-group date">
                                {!! Form::text('precio7',null,['class'=>'form-control','id'=>'precioG','onkeyup'=>'sumar();']) !!}
                                <span class="input-group-addon">Bs.</span>
                            </div>
                        </div>
                      </div>
                      <div class="col-md-4">    
                        <div class="btn-group" role="group">
                            {!! Form::label('Total') !!}
                            <div class="input-group date">
                              {!! Form::text('total7G',null,['class'=>'form-control','id'=>'totalG',' value'=>'0']) !!}
                              <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-usd"></span>
                              </span>
                            </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="col-md-2"></div>
                    <div class="btn-group" role="group">
                        {!! Form::label('Total (A) Bs.:') !!}
                    </div>
                    <div class="btn-group" role="group">
                        <div class="input-group date col-md-9">
                            {!! Form::text('total8T',null,['class'=>'form-control','id'=>'totalT',' value'=>'0']) !!}
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-usd"> Bs.</span>
                            </span>
                        </div>
                    </div>
                  </li>
                </div>
            </div>
          </div>
          <!--Hasta aqui la descripcion presupuestaria...-->

          <div class="col-md-12" >
              <div class="panel panel-default">
              <li class="list-group-item">
                  <center><h4><u>Transporte Público</u></h4></center>
              </li>
              <div class="panel-body text-center jumbotron">
                  <div class="row">
                    <div class="col-md-2">
                      {!! Form::label('Nro. Personas') !!}
                      {!! Form::text('p1',null,['class'=>'form-control','id'=>'p1','onkeyup'=>'sumar();','data-error'=>'Campo obligatorio','required']) !!}
                        <center><div class="help-block with-errors"></div></center>
                     </div>
                     <div class="col-md-6">
                       {!! Form::label('Ruta') !!}
                        <div class="input-group date">  
                          {!! Form::text('r1',null,['class'=>'form-control','data-error'=>'Campo obligatorio','required']) !!}
                          <center><div class="help-block with-errors"></div></center>
                          <span class="input-group-addon">
                                <span class="glyphicon glyphicon-road"></span>
                          </span>
                        </div>
                     </div>
                     <div class="col-md-2">
                      {!! Form::label('Precio Unit.') !!}
                        <div class="input-group date">
                            {!! Form::text('c1',null,['class'=>'form-control','id'=>'c1','onkeyup'=>'sumar();','data-error'=>'Campo obligatorio','required']) !!}
                            <center><div class="help-block with-errors"></div></center>
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-usd"></span>
                            </span>
                        </div>
                     </div>
                     <div class="col-md-2">
                          {!! Form::label('Total') !!}
                          <div class="input-group date">
                            {!! Form::text('t1',null,['class'=>'form-control','id'=>'t1',' value'=>'0','data-error'=>'Valor por defecto','required']) !!}
                            <center><div class="help-block with-errors"></div></center>
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-usd"></span>
                            </span>
                          </div>
                     </div>
                  </div>
                  <div class="row">
                      <div class="col-md-2">
                          {!! Form::label('Nro. Personas') !!}
                          {!! Form::text('p2',null,['class'=>'form-control','id'=>'p2','onkeyup'=>'sumar();']) !!}
                      </div>
                      <div class="col-md-6">
                         {!! Form::label('Ruta') !!}
                          <div class="input-group date">  
                            {!! Form::text('r2',null,['class'=>'form-control']) !!}
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-road"></span>
                            </span>
                        </div>
                      </div>
                      <div class="col-md-2">
                        {!! Form::label('P unit') !!}
                          <div class="input-group date">
                            {!! Form::text('c2',null,['class'=>'form-control','id'=>'c2','onkeyup'=>'sumar();']) !!}
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-usd"></span>
                            </span>
                          </div>
                      </div>
                      <div class="col-md-2">
                        {!! Form::label('Total') !!}
                          <div class="input-group date">
                            {!! Form::text('t2',null,['class'=>'form-control','id'=>'t2',' value'=>'0']) !!}
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-usd"></span>
                            </span>
                          </div>
                      </div>
                  </div><hr>
                  <div class="row">
                      <div class="col-md-2">
                          {!! Form::label('Número') !!}
                          {!! Form::text('p3',null,['class'=>'form-control','id'=>'p3','onkeyup'=>'sumar();']) !!}
                      </div>
                      <div class="col-md-6">
                        <br><h4>El flete por el uso del Camión</h4>
                      </div>
                      <div class="col-md-2">
                        {!! Form::label('Precio/Camión') !!}
                          <div class="input-group date">  
                            {!! Form::text('c3',null,['class'=>'form-control','id'=>'c3','onkeyup'=>'sumar();']) !!}
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-usd"></span>
                            </span>
                          </div>
                      </div>
                      <div class="col-md-2">
                        {!! Form::label('Total') !!}
                          <div class="input-group date">
                            {!! Form::text('t3',null,['class'=>'form-control','id'=>'t3',' value'=>'0']) !!}
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-usd"></span>
                            </span>
                          </div>
                      </div>
                  </div><hr>
                  <div class="row">
                      <div class="col-md-10"></div>
                      <div class="col-md-2">
                        {!! Form::label('Total (B) Bs.') !!}
                          <div class="input-group date">
                            {!! Form::text('tt',null,['class'=>'form-control','id'=>'t4',' value'=>'0']) !!}
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-usd"></span>
                            </span>
                          </div>
                      </div>
                  </div>
                  <h4><u>Diferencia entre el Presupuesto y Transporte Público</u></h4>
                  <center>{!! Form::label('Total (A) - Total (B)') !!}</center>
                  <div class="row">
                        {!! Form::label('Diferencia:') !!}
                    <div class="btn-group" role="group">
                        <div class="input-group date col-md-12">
                            {!! Form::text('diferencia',null,['class'=>'form-control','id'=>'diferencia',' value'=>'0','data-error'=>'Valor por defecto','required']) !!}
                            <center><div class="help-block with-errors"></div></center>
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-usd"> Bs.</span>
                            </span>
                        </div>
                    </div>
                  </div><br />
                  <div class="row">
                      <div class="col-md-12">
                         <u>{!! Form::label('Nota') !!}</u>
                          {!! Form::text('nota',null,['class'=>'form-control','placeholder'=>'Puede insertar una nota al presupuesto del viaje.']) !!}
                      </div>
                  </div>
              </div> 
            </div>
          </div>
          
      </div>
    </div>
{!! Form::close() !!}
