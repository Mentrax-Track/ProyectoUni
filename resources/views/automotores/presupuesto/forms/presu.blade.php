<div class="jumbotron text-center">
  <div class="row">
    <div class="col-md-4">
      {!! Form::label('Vehiculo:') !!}
      {!! Form::select('vehiculo',$vehiculos,null,['class'=>'form-control','placeholder'=>'Seleccione un Vehiculo']) !!}
    </div>
    <div class="col-md-4">
      {!! Form::label('Chofer:') !!}
      {!! Form::select('chofer',$choferes,null,['class'=>'form-control','id'=>'chofer','placeholder'=>'Seleccione un chofer']) !!}
    </div>
    <div class="col-md-4">
      {!! Form::label('Responsable:') !!}
      {!! Form::select('encargado',$encargados,null,['class'=>'form-control','placeholder'=>'Seleccione un responsable']) !!}
    </div>
  </div><br>
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-3">
      <div class="form-group">
          {!! Form::label('Fecha de inicio del Viaje') !!}
          <div class='input-group date' id='datetimepicker6'>
              {!! Form::date('fecha_inicial',$viaje->fecha_inicial,['class'=>'form-control','disabled']) !!}
              <span class="input-group-addon">
                  <span class="glyphicon glyphicon-calendar"></span>
              </span>
          </div>
      </div> 
    </div>
    <div class="col-md-3">
      <div class="form-group">
          {!! Form::label('Fecha final de viaje') !!}
          <div class='input-group date' id='datetimepicker7'>
            {!! Form::date('fecha_final',$viaje->fecha_final,['class'=>'form-control','disabled']) !!}
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
          </div>
      </div> 
    </div>
    <div class="col-md-1">
        {!! Form::label('Dias:') !!}
        {!! Form::text('dias',$viaje->dias,['class'=>'form-control','disabled']) !!}
    </div>
    <div class="col-md-3">
      <div class="form-group">
          {!! Form::label('Fecha de solicitud en S.A.') !!}
          <div class='input-group date' id='datetimepicker8'>
            {!! Form::text('fecha_sa',null,['class'=>'form-control']) !!}
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
          </div>
      </div>  
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
              {!! Form::text('total',$ruta->total,['class'=>'form-control','disabled','id'=>'total']) !!}
          </div>
      </li>
      <li class="list-group-item">
          <div class="btn-group" role="group">
              {!! Form::label('Dividir el kilometraje total ') !!}
          </div></br>
          <div class="btn-group" role="group">
              {!! Form::label('Gasolina/Diesel') !!}
          </div>
          <div class="btn-group" role="group">
              <div class="col-md-8">
                {!! Form::text('division',null,['class'=>'form-control','id'=>'division','onkeyup'=>'sumar();']) !!}
              </div>
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
                {!! Form::label('Encargado') !!} 
                {!! Form::text('encargado',null,['class'=>'form-control']) !!}
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-md-8">
                {!! Form::label('Materia') !!}    
                {!! Form::text('materia',null,['class'=>'form-control']) !!}
            </div>
            <div class="col-md-4">
                {!! Form::label('Sigla') !!}    
                {!! Form::text('sigla',null,['class'=>'form-control']) !!}
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                {!! Form::label('Entidad:') !!}
                {!! Form::text('carrera',$viaje->entidad,['class'=>'form-control','disabled']) !!}
            </div>
            <div class="col-md-4">
                {!! Form::label('# Docentes') !!}
                {!! Form::text('numero_d',null,['class'=>'form-control']) !!}
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
                {!! Form::label('Hr. Salida') !!}
                <div class='input-group date input-group-sm' id='datetimepicker3'>
                  {!! Form::text('hora_salida',null,['class'=>'form-control']) !!}
                  <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                </div>
            </div>
            <div class="col-md-6">   
                  {!! Form::label('Hr. Llegada') !!}
                  <div class='input-group date input-group-sm' id='datetimepicker4'>
                      {!! Form::text('hora_llegada',null,['class'=>'form-control']) !!}
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
                {!! Form::text('combustible',null,['class'=>'form-control','disabled','id'=>'combustible']) !!}
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
                {!! Form::label('Cantidad:') !!}
                  {!! Form::text('cantidad_c',null,['class'=>'form-control','id'=>'pcantidad','onkeyup'=>'sumar();']) !!}
              </div>             
            </div>           
            <div class="col-md-4">
              <div class="btn-group" role="group">
                  {!! Form::label('Precio unitario') !!}
                   {!! Form::text('punitari_c',null,['class'=>'form-control','id'=>'punitario','onkeyup'=>'sumar();']) !!}
              </div>
            </div>
            <div class="col-md-4">    
              <div class="btn-group" role="group">
                    {!! Form::label('Total') !!}
                      {!! Form::text('total_c',null,['class'=>'form-control','id'=>'ptotal',' value'=>'0','disabled']) !!}
              </div>
            </div>
          </div>
        </li>
        <li class="list-group-item">
          <div class="row">
            <h4><u>Viaticos Ciudad</u></h4>
            <div class="col-md-4">
              <div class="btn-group" role="group">
                {!! Form::label('Cantidad:') !!}
                  {!! Form::text('cantidad_vc',null,['class'=>'form-control','id'=>'pcantidad','onkeyup'=>'sumar();']) !!}
              </div>             
            </div>           
            <div class="col-md-4">
              <div class="btn-group" role="group">
                  {!! Form::label('Precio unitario') !!}
                   {!! Form::text('punitario_vc',null,['class'=>'form-control','id'=>'punitario','onkeyup'=>'sumar();']) !!}
              </div>
            </div>
            <div class="col-md-4">    
              <div class="btn-group" role="group">
                    {!! Form::label('Total') !!}
                    {!! Form::text('total_vc',null,['class'=>'form-control','id'=>'ptotal',' value'=>'0','disabled']) !!}
              </div>
            </div>
          </div>
        </li>
        <li class="list-group-item">
          <div class="row">
            <h4><u>Viaticos Provincia</u></h4>
            <div class="col-md-4">
              <div class="btn-group" role="group">
                {!! Form::label('Cantidad:') !!}
                  {!! Form::text('cantidad_vp',null,['class'=>'form-control','id'=>'pcantidad','onkeyup'=>'sumar();']) !!}
              </div>             
            </div>           
            <div class="col-md-4">
              <div class="btn-group" role="group">
                  {!! Form::label('Precio unitario') !!}
                   {!! Form::text('punitario_vp',null,['class'=>'form-control','id'=>'punitario','onkeyup'=>'sumar();']) !!}
              </div>
            </div>
            <div class="col-md-4">    
              <div class="btn-group" role="group">
                    {!! Form::label('Total') !!}
                      {!! Form::text('total_vp',null,['class'=>'form-control','id'=>'ptotal',' value'=>'0','disabled']) !!}
              </div>
            </div>
          </div>
        </li>
        <li class="list-group-item">
          <div class="row">
            <h4><u>Viaticos Frontera</u></h4>
            <div class="col-md-4">
              <div class="btn-group" role="group">
                {!! Form::label('Cantidad:') !!}
                  {!! Form::text('cantidad_vf',null,['class'=>'form-control','id'=>'pcantidad','onkeyup'=>'sumar();']) !!}
              </div>             
            </div>           
            <div class="col-md-4">
              <div class="btn-group" role="group">
                  {!! Form::label('Precio unitario') !!}
                   {!! Form::text('punitario_vf',null,['class'=>'form-control','id'=>'punitario','onkeyup'=>'sumar();']) !!}
              </div>
            </div>
            <div class="col-md-4">    
              <div class="btn-group" role="group">
                    {!! Form::label('Total') !!}
                      {!! Form::text('total_vf',null,['class'=>'form-control','id'=>'ptotal',' value'=>'0','disabled']) !!}
              </div>
            </div>
          </div>
        </li>
        <li class="list-group-item">
          <div class="row">
            <h4><u>Peajes ida y vuelta</u></h4>
            <div class="col-md-4">
              <div class="btn-group" role="group">
                {!! Form::label('Cantidad:') !!}
                  {!! Form::text('cantidad_pe',null,['class'=>'form-control','id'=>'pcantidad','onkeyup'=>'sumar();']) !!}
              </div>             
            </div>           
            <div class="col-md-4">
              <div class="btn-group" role="group">
                  {!! Form::label('Precio unitario') !!}
                   {!! Form::text('punitario_pe',null,['class'=>'form-control','id'=>'punitario','onkeyup'=>'sumar();']) !!}
              </div>
            </div>
            <div class="col-md-4">    
              <div class="btn-group" role="group">
                    {!! Form::label('Total') !!}
                      {!! Form::text('total_pe',null,['class'=>'form-control','id'=>'ptotal',' value'=>'0','disabled']) !!}
              </div>
            </div>
          </div>
        </li>
        <li class="list-group-item">
          <div class="row">
            <h4><u>Mantenimiento Vehicular</u></h4>
            <div class="col-md-4">
              <div class="btn-group" role="group">
                {!! Form::label('Cantidad:') !!}
                  {!! Form::text('cantidad_ma',null,['class'=>'form-control','id'=>'pcantidad','onkeyup'=>'sumar();']) !!}
              </div>             
            </div>           
            <div class="col-md-4">
              <div class="btn-group" role="group">
                  {!! Form::label('Precio unitario') !!}
                   {!! Form::text('punitario_ma',null,['class'=>'form-control','id'=>'punitario','onkeyup'=>'sumar();']) !!}
              </div>
            </div>
            <div class="col-md-4">    
              <div class="btn-group" role="group">
                    {!! Form::label('Total') !!}
                      {!! Form::text('total_ma',null,['class'=>'form-control','id'=>'ptotal',' value'=>'0','disabled']) !!}
              </div>
            </div>
          </div>
        </li>
        <li class="list-group-item">
          <div class="row">
            <h4><u>Garaje Vehicular</u></h4>
            <div class="col-md-4">
              <div class="btn-group" role="group">
                {!! Form::label('Cantidad:') !!}
                  {!! Form::text('cantidad_ga',null,['class'=>'form-control','id'=>'pcantidad','onkeyup'=>'sumar();']) !!}
              </div>             
            </div>           
            <div class="col-md-4">
              <div class="btn-group" role="group">
                  {!! Form::label('Precio unitario') !!}
                   {!! Form::text('punitario_ga',null,['class'=>'form-control','id'=>'punitario','onkeyup'=>'sumar();']) !!}
              </div>
            </div>
            <div class="col-md-4">    
              <div class="btn-group" role="group">
                    {!! Form::label('Total') !!}
                    {!! Form::text('total_ga',null,['class'=>'form-control','id'=>'ptotal',' value'=>'0','disabled']) !!}
              </div>
            </div>
          </div>
        </li>
        <li class="list-group-item">
          <div class="btn-group" role="group">
              {!! Form::label('Total Bs.:') !!}
          </div>
          <div class="btn-group" role="group">
               {!! Form::text('total_presu',null,['class'=>'form-control','disabled','id'=>'adicional','onkeyup'=>'sumar();']) !!}
          </div>
        </li>
      </div>
  </div>
</div>
<!--Hasta aqui la descripcion presupuestaria...-->





