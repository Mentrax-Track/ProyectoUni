
<div class="jumbotron">
<div class="row text-center">
  <div class="col-md-6">
    <div class="form-group">
      <center><p class="www">Solicitud de Trabajo</p></center>
      <li class="list-group-item">  
        <center><h4>Fecha de la Solicitud: <p class="www">{{ $solicitud->fecha }}</p></h4></center>
      </li>
        <div class="btn-group btn-group-justified" role="group" aria-label="...">
            <li class="list-group-item">
                <div class="form-group row">   
                    <div class="col-md-6 btn-group" role="group">
                        <label><strong>Chofer</strong></label>
                        {!! Form::text('chofer',$solicitud->chofer,['class'=>'form-control','disabled']) !!}
                    </div>
                    <div class="col-md-6 btn-group" role="group">
                        <label><strong>Vehículo</strong></label>
                        {!! Form::text('vehiculo_id',$solicitud->enviVehi->full_vehiculo,['class'=>'form-control','disabled']) !!}
                    </div>
                </div>
                <div class="form-group row">   
                    <div class="col-md-12 btn-group" role="group">
                        <label><strong>Trabajo</strong></label>
                        {!! Form::textarea('Accesorios',$accesorio,['class'=>'form-control','disabled', 'rows'=>'3']) !!}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12 btn-group" role="group">
                        <label><strong>Detalle</strong></label>
                        {!! Form::textarea('Detalle',$solicitud->descripsoli,['class'=>'form-control','disabled', 'rows'=>'3']) !!}
                    </div>
                </div>
            </li>
        </div>
    </div>
  </div>
  <div class="col-md-6">
    <center><p class="www">Trabajo Realizado</p></center>
    <?php $insertador = \Auth::user()->full_name; ?>
    <input type="hidden" name="insertador" value="{{ $insertador }}" />
    <input type="hidden" name="solicitud_id" value="{{ $solicitud->id }}" />
    <li class="list-group-item">  
        <center><h4>Kilometraje y Fecha<p class="www"><div class="form-group ">
          <div class="row"> 
            <div class="col-md-5">
                <div class="input-group  ">
                    {!! Form::number('kilometraje',null,['class'=>'form-control','value'=>'id','placeholder'=>'Ejm. 18965']) !!}
                </div>  
            </div>
            <div class="col-md-7">
                <div class='input-group date ' id='datetimepicker1'>
                    {!! Form::text('fecha',null,['class'=>'form-control', 'placeholder'=>'Ingrese la fecha de inicio','data-error'=>'Inserte la fecha Inicial','required']) !!}
                    <center><div class="help-block with-errors"></div></center>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
          </div>
        </div></p></h4></center>
      </li>
    <li class="list-group-item">  
        <div class="form-group row">
            <div class="col-md-6">    
                <span class="input-group-addon" id="">Cantidad</span>
                {!! Form::number('cantidad',null,['class'=>'form-control','value'=>'id','placeholder'=>'Ejm. 1','data-error'=>'Inserte un número','required']) !!}
                <center><div class="help-block with-errors"></div></center>
            </div>
            <div class="col-md-6">
                <span class="input-group-addon" id="">Unidad</span>
                {!! Form::text('unidad',null,['class'=>'form-control','value'=>'id','placeholder'=>'Ejm. piezas','data-error'=>'Inserte un Unidad de medida','required']) !!}
                <center><div class="help-block with-errors"></div></center>
            </div>
            <div class="col-md-12">
                <div class="input-group  ">
                    <span class="input-group-addon" id="">Trabajo</span>
                </div>  
                {!! Form::text('trabajo',null,['class'=>'form-control','value'=>'id','data-error'=>'Inserte un trabajo','placeholder'=>'Escriba un trabajo realizado','required']) !!}
                <center><div class="help-block with-errors"></div></center>        
            </div>
            <div class="input-group  ">
                <div class="col-md-6">
                    <div class="input-group  ">
                        <span class="input-group-addon" id="">Marca</span>
                        {!! Form::text('marca',null,['class'=>'form-control','value'=>'id','placeholder'=>'Ejm. Castrol']) !!}
                    </div>
                </div>
                <div class="col-md-6">  
                    <div class="input-group  ">
                        <span class="input-group-addon" id="">Código</span>
                        {!! Form::text('codigo',null,['class'=>'form-control','value'=>'id','placeholder'=>'Ejm. 10W40']) !!}
                    </div>  
                </div>
            </div>   
            <div class="col-md-12">
                <div class="input-group">
                    <span class="input-group-addon" id="">Observación:</span>
                </div>
                {!! Form::textarea('observacion',null,['class'=>'form-control','rows'=>'2','value'=>'id','placeholder'=>'Escriba una observación del trabajo']) !!}
                <center><div class="help-block with-errors"></div></center>  
            </div>
        </div>
    </li>
  </div>
  </div>
</div>