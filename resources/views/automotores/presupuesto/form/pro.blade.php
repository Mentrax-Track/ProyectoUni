
<div class="jumbotron text-center">
    <center><h3>Datos de los Usuarios</h3></center>
  <div class="row">
    
    <div class="col-md-4">
      {!! Form::label('Vehiculo:') !!}
      {!! Form::select('vehiculo',$vehiculos,null,['class'=>'form-control','placeholder'=>'Seleccione un Vehiculo']) !!}
    </div>
    <div class="col-md-4">
      <center>{!! Form::label('Chofer:') !!}</center>
      {!! Form::select('chofer',$choferes,null,['class'=>'form-control','id'=>'chofer','placeholder'=>'Seleccione un chofer']) !!}
    </div>
    <div class="col-md-4">
      {!! Form::label('Responsable:') !!}
      {!! Form::select('responsable',$encargados,null,['class'=>'form-control','placeholder'=>'Seleccione un responsable']) !!}
    </div>

  </div>
  <div class="row">
      
      <div class="col-md-3">
        <div class="form-group">
           {!! Form::label('Fecha de inicio del Viaje') !!}
           <div class='input-group date' id='datetimepicker6'>
                 {!! Form::text('fecha_inicial',null,['class'=>'form-control']) !!}
                 <span class="input-group-addon">
                          <span class="glyphicon glyphicon-calendar"></span>
                  </span>
           </div>
        </div> 
      </div>
       <div class="col-md-3">
          <div class="form-group">
            <center>{!! Form::label('Fecha final de viaje') !!}</center>
            <div class='input-group date' id='datetimepicker7'>
               {!! Form::text('fecha_final',null,['class'=>'form-control']) !!}
               <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
            </div>
          </div> 
       </div>
       <div class="col-md-3">
         {!! Form::label('Dias') !!}
         {!! Form::text('dia',null,['class'=>'form-control']) !!}
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



 <div class="col-md-5" >
<div class="panel panel-default">
  <center><h2>Registro de rutas</h2></center>
  <div class="panel-body">
    <div class="row">
   <div class="col-md-7">
   {!! Form::label('Ruta:') !!}
   {!! Form::text('ruta1',null,['class'=>'form-control']) !!}
   
   </div>
   <div class="col-md-5">
    {!! Form::label('Km') !!}            
    {!! Form::text('km1',null,['class'=>'form-control','id'=>'valor13','onkeyup'=>'sumar();']) !!}
   </div>
   </div>
   <div class="row">
   <div class="col-md-7">
   {!! Form::label('Ruta:') !!}
   {!! Form::text('ruta2',null,['class'=>'form-control']) !!}
   
   </div>
   <div class="col-md-5">
    {!! Form::label('Km') !!}
    {!! Form::text('km2',null,['class'=>'form-control','id'=>'valor14','onkeyup'=>'sumar();']) !!}
   </div>
   </div>
   <div class="row">
   <div class="col-md-7">
   {!! Form::label('Ruta:') !!}
   {!! Form::text('ruta3',null,['class'=>'form-control']) !!}
   
   </div>
   <div class="col-md-5">
    {!! Form::label('Km') !!}
    {!! Form::text('km3',null,['class'=>'form-control','id'=>'valor15','onkeyup'=>'sumar();']) !!}
   </div>
   </div>
   <div class="row">
   <div class="col-md-7">
   {!! Form::label('Ruta:') !!}
   {!! Form::text('ruta4',null,['class'=>'form-control']) !!}
   
   </div>
   <div class="col-md-5">
    {!! Form::label('Km') !!}
    {!! Form::text('km4',null,['class'=>'form-control','id'=>'valor16','onkeyup'=>'sumar();']) !!}
   </div>
   </div>
   <div class="row">
   <div class="col-md-7">
   {!! Form::label('Ruta:') !!}
   {!! Form::text('ruta5',null,['class'=>'form-control']) !!}
   
   </div>
   <div class="col-md-5">
    {!! Form::label('Km') !!}
    {!! Form::text('km5',null,['class'=>'form-control','id'=>'valor17','onkeyup'=>'sumar();']) !!}
   </div>
   </div>
   <div class="row">
   <div class="col-md-7">
    <br>
   	{!! Form::label('Recorrido adicional') !!}
   </div>
   <div class="col-md-5">
   {!! Form::label('Km') !!}
            {!! Form::text('km6',null,['class'=>'form-control','id'=>'valor18','onkeyup'=>'sumar();']) !!}
   </div>
   
  </div>
  <div class="row">
   <div class="col-md-8">
    {!! Form::label('Combustible diesel 4 y gasolina 6') !!}
    {!! Form::text('con',null,['class'=>'form-control','id'=>'valor25','onkeyup'=>'sumar();']) !!}
   </div>
   <div class="col-md-4">
    {!! Form::label('Total') !!}
    {!! Form::text('total_rec',null,['class'=>'form-control','id'=>'total8',' value'=>'0']) !!}
   </div>
   
   </div>
   <div class="row">
	<div class="col-md-4">
		<br>
    {!! Form::label('Diferencia (a)-(b)') !!}
   </div>
   <div class="col-md-2">
    
   </div>
   <div class="col-md-2">
    
   </div>
  
   <div class="col-md-4">
    {!! Form::label('Total') !!}
            {!! Form::text('diferencia',null,['class'=>'form-control','id'=>'total15',' value'=>'0']) !!}

   </div></div>
   </div>
  </div>
 </div>

 <div class="col-md-7" >
<div class="panel panel-default">
  <center><h2>Registro de descripcion</h2></center>
  <div class="panel-body">
    <div class="row">
   <div class="col-md-3">
    {!! Form::label('Cantida de combustible:') !!}
   </div>
   <div class="col-md-3">
   {!! Form::text('can_dhhkj',null,['class'=>'form-control','id'=>'total16']) !!}
   </div>
   <div class="col-md-3">
    
   </div>
   <div class="col-md-3">
     
   </div>
   </div>
    <div class="row">
   <div class="col-md-3">
   {!! Form::label('Cantida:') !!}
   {!! Form::text('can_d',null,['class'=>'form-control','id'=>'valor1','onkeyup'=>'sumar();']) !!}
   
   
   </div>
   <div class="col-md-3"><br>
            {!! Form::label('Diesel') !!}
   </div>
   <div class="col-md-3">
    {!! Form::label('P. unit:') !!}
    {!! Form::text('uni_d',null,['class'=>'form-control','id'=>'valor2','onkeyup'=>'sumar();']) !!}
   </div>
   <div class="col-md-3">
     {!! Form::label('Total') !!}
     {!! Form::text('total_d',null,['class'=>'form-control','id'=>'total1',' value'=>'0']) !!}
   </div>
   </div>
   <div class="row">
   <div class="col-md-3">
  {!! Form::label('Cantida:') !!}
  {!! Form::text('can_vc',null,['class'=>'form-control','id'=>'valor3','onkeyup'=>'sumar();']) !!}
   
   </div>
   <div class="col-md-3"><br>
    
            {!! Form::label('Viáticos Cuidad') !!}
   </div>
   <div class="col-md-3">
    {!! Form::label('P. unit:') !!}
    {!! Form::text('uni_vc',null,['class'=>'form-control','id'=>'valor4','onkeyup'=>'sumar();']) !!}
   </div>
   <div class="col-md-3">
     {!! Form::label('Total') !!}
     {!! Form::text('total_vc',null,['class'=>'form-control','id'=>'total2',' value'=>'0']) !!}
   </div></div>
    <div class="row">
   <div class="col-md-3">
   {!! Form::label('Cantida:') !!}
   {!! Form::text('can_vp',null,['class'=>'form-control','id'=>'valor5','onkeyup'=>'sumar();']) !!}
   
   </div>
   <div class="col-md-3"><br>
   {!! Form::label('Viáticos provincia') !!}
   </div>
   <div class="col-md-3">
    {!! Form::label('P. unit:') !!}
    {!! Form::text('uni_vp',null,['class'=>'form-control','id'=>'valor6','onkeyup'=>'sumar();']) !!}
   </div>
   <div class="col-md-3">
     {!! Form::label('Total') !!}
     {!! Form::text('total_vp',null,['class'=>'form-control','id'=>'total3',' value'=>'0']) !!}
   </div></div>
   <div class="row">
   <div class="col-md-3">
   {!! Form::label('Cantida:') !!}
   {!! Form::text('can_p',null,['class'=>'form-control','id'=>'valor7','onkeyup'=>'sumar();']) !!}
   
   </div>
   <div class="col-md-3"><br>

       {!! Form::label('Peajes ida y vuelta') !!}
   </div>
   <div class="col-md-3">
    {!! Form::label('P. unit:') !!}
    {!! Form::text('uni_p',null,['class'=>'form-control','id'=>'valor8','onkeyup'=>'sumar();']) !!}
   </div>
   <div class="col-md-3">
     {!! Form::label('Total') !!}
     {!! Form::text('total_p',null,['class'=>'form-control','id'=>'total4',' value'=>'0']) !!}
   </div></div>
   <div class="row">
   <div class="col-md-3">
   {!! Form::label('Cantida:') !!}
   {!! Form::text('can_m',null,['class'=>'form-control','id'=>'valor9','onkeyup'=>'sumar();']) !!}
   
   </div>
   <div class="col-md-3"><br>
   {!! Form::label('Mantenimiento') !!}
   </div>
   <div class="col-md-3">
   {!! Form::label('P. unit:') !!}
   {!! Form::text('uni_m',null,['class'=>'form-control','id'=>'valor10','onkeyup'=>'sumar();']) !!}
   </div>
   <div class="col-md-3">
     {!! Form::label('Total') !!}
     {!! Form::text('total_m',null,['class'=>'form-control','id'=>'total5',' value'=>'0']) !!}
   </div></div>
   <div class="row">
   <div class="col-md-3">
   {!! Form::label('Cantida:') !!}
   {!! Form::text('can_g',null,['class'=>'form-control','id'=>'valor11','onkeyup'=>'sumar();']) !!}
   
   </div>
   <div class="col-md-3"><br>
   
         {!! Form::label('garaje') !!}
   </div>
   <div class="col-md-3">
    {!! Form::label('P. unit:') !!}
    {!! Form::text('uni_g',null,['class'=>'form-control','id'=>'valor12','onkeyup'=>'sumar();']) !!}

   </div>
   <div class="col-md-3">
     {!! Form::label('Total') !!}
     {!! Form::text('total_g',null,['class'=>'form-control','id'=>'total6',' value'=>'0']) !!}
   </div>
   </div>
   <div class="row">
   <div class="col-md-9">
   
  </div>

   <div class="col-md-3">
    
    {!! Form::label('Total (a)') !!}
    {!! Form::text('total_a',null,['class'=>'form-control','id'=>'total7',' value'=>'0']) !!}

  </div>
   
   </div>
   </div>
  </div>
 </div>
 <div class="col-md-8" >
<div class="panel panel-default">
  <center><h2>Registro de transporte publico</h2></center>
  <div class="panel-body">
  <div class="row">
  <div class="col-md-3">
    {!! Form::label('Cantida') !!}
    {!! Form::text('can_1',null,['class'=>'form-control','id'=>'valor19','onkeyup'=>'sumar();']) !!}
   </div>
   <div class="col-md-3">
     {!! Form::label('Ruta') !!}
    {!! Form::text('ruta_7',null,['class'=>'form-control']) !!}
   </div>
   <div class="col-md-3">
    {!! Form::label('P unit') !!}
    {!! Form::text('uni_1',null,['class'=>'form-control','id'=>'valor20','onkeyup'=>'sumar();']) !!}
   </div>
   <div class="col-md-3">
    {!! Form::label('Total') !!}
            {!! Form::text('total_1',null,['class'=>'form-control','id'=>'total9',' value'=>'0']) !!}
   </div>
  </div>
  <div class="row">
    <div class="col-md-3">
    {!! Form::label('Cantida') !!}
    {!! Form::text('can_2',null,['class'=>'form-control','id'=>'valor21','onkeyup'=>'sumar();']) !!}
   </div>
   <div class="col-md-3">
     {!! Form::label('Ruta') !!}
    {!! Form::text('ruta_8',null,['class'=>'form-control']) !!}
   </div>
   <div class="col-md-3">
    {!! Form::label('P unit') !!}
    {!! Form::text('uni_2',null,['class'=>'form-control','id'=>'valor22','onkeyup'=>'sumar();']) !!}
   </div>
   <div class="col-md-3">
    {!! Form::label('Total') !!}
            {!! Form::text('total_2',null,['class'=>'form-control','id'=>'total10',' value'=>'0']) !!}
   </div>
  </div>
  <div class="row">
    <div class="col-md-3">
    {!! Form::label('Cantida') !!}
    {!! Form::text('can_3',null,['class'=>'form-control','id'=>'valor23','onkeyup'=>'sumar();']) !!}
   </div>
   <div class="col-md-3">
    <br>
     {!! Form::label('Flete por transporte') !!}
    
   </div>
   <div class="col-md-3">
    {!! Form::label('P unit') !!}
    {!! Form::text('uni_3',null,['class'=>'form-control','id'=>'valor24','onkeyup'=>'sumar();']) !!}
   </div>
   <div class="col-md-3">
   {!! Form::label('Total') !!}
            {!! Form::text('total_3',null,['class'=>'form-control','id'=>'total11',' value'=>'0']) !!}
   </div>
  </div>

  <div class="row">
    <div class="col-md-8"></div>
    <div class="col-md-4">
    {!! Form::label('Total (b)') !!}
            {!! Form::text('total_b',null,['class'=>'form-control','id'=>'total14',' value'=>'0']) !!}
   </div>
  </div> 
  </div>
 </div>
</div>
<div class="col-md-4" >
<div class="panel panel-default">
  <center><h2>Registro de Nota</h2></center>
    <div class="panel-body">
    <div class="row">
    <div class="col-md-6">
    {!! Form::label('Cantida estudiantes') !!}
    {!! Form::text('can_es',null,['class'=>'form-control']) !!}
   </div>
   <div class="col-md-6">
    {!! Form::label('Cantida docentes') !!}
    <br>
    <br>
    {!! Form::text('can_do',null,['class'=>'form-control']) !!}
   </div>
   
  </div>
  <div class="row">
   <div class="col-md-6">
   {!! Form::label('Carrera') !!}
    {!! Form::text('carrera',null,['class'=>'form-control']) !!}
   </div>
   <div class="col-md-6">
    {!! Form::label('Tipo de viaje') !!}
    {!! Form::text('tipo',null,['class'=>'form-control']) !!}
   </div>
  </div>
   <div class="row">
   <div class="col-md-6">
    <div class="form-group">
        {!! Form::label('Tiempo inicial el viaje') !!}
        <div class='input-group date input-group-sm' id='datetimepicker3'>
        {!! Form::text('tiempo_inicial',null,['class'=>'form-control']) !!}
        <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
    </div>
    </div>
    </div>
   <div class="col-md-6">
    <div class="form-group">
        {!! Form::label('Tiempo final el viaje') !!}
        <div class='input-group date input-group-sm' id='datetimepicker4'>
        {!! Form::text('tiempo_final',null,['class'=>'form-control']) !!}
        <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
    </div>
    </div>
   </div>
   
  </div>
  <div class="row">   
   <div class="col-md-6">
    {!! Form::label('Sigla') !!}    
    {!! Form::text('sigla',null,['class'=>'form-control']) !!}
   </div>
    <div class="col-md-6">
    {!! Form::label('Encargado') !!} 
    {!! Form::text('encargado',null,['class'=>'form-control']) !!}   
    
   </div>
  </div>
    </div>
  </div> 
</div>
