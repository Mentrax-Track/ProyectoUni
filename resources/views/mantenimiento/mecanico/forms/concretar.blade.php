<div class="row text-center">
  <div class="col-md-5">
    <div class="form-group">
      <center><h4><strong><font color="#337ab7"><u>Solicitud de Trabajo</u></font></strong></h4></center>
      <li class="list-group-item list-group-item-info ">  
        <center><h4><font color="#337ab7">Fecha: {{ $solicitud->fecha }}</font></h4></center>
      </li>
        <div class="btn-group btn-group-justified" role="group" aria-label="...">
            <li class="list-group-item list-group-item-info">
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
  <div class="col-md-7">
    <center><h4><strong><font color="#337ab7"><u>Trabajo Realizado</u></font></strong></h4></center>
    <?php $insertador = \Auth::user()->full_name; ?>
    <input type="hidden" name="insertador" value="{{ $insertador }}" />
    <input type="hidden" name="solicitud_id" value="{{ $solicitud->id }}" />
    <li class="list-group-item list-group-item-success col-md-12">  
        <div class="col-md-5">
            <label>Kilometraje</label>
            {!! Form::number('kilometraje',null,['class'=>'form-control','value'=>'id','placeholder'=>'Ejm. 18965']) !!}
              
        </div>
        <div class="col-md-7">
            <label>Fecha</label>
            <div class='input-group date ' id='datetimepicker1'>
                {!! Form::text('fecha',null,['class'=>'form-control', 'placeholder'=>'Fecha del trabajo','data-error'=>'Inserte la fecha Inicial','required']) !!}
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
            <center><div class="help-block with-errors"></div></center>
        </div>
    </li>
    <li class="list-group-item list-group-item-success col-md-12">  
        <div class="col-md-6">
            <label>Cantidad</label>
            {!! Form::number('cantidad',null,['class'=>'form-control','value'=>'id','placeholder'=>'Ejm. 1','data-error'=>'Inserte un número','required']) !!}
            <center><div class="help-block with-errors"></div></center>
        </div>
        <div class="col-md-6">
            <label>Nombre</label>
            {!! Form::text('unidad',null,['class'=>'form-control','value'=>'id','placeholder'=>'Ejm. piezas','data-error'=>'Inserte un Unidad de medida','required']) !!}
                <center><div class="help-block with-errors"></div></center>
        </div>
    </li>
    <li class="list-group-item list-group-item-success col-md-12">
        <div class="col-md-12">
            <label>Trabajo realizado</label>
            {!! Form::textarea('trabajo',null,['class'=>'form-control','value'=>'id','data-error'=>'Inserte un trabajo','placeholder'=>'Escriba un trabajo realizado','required','rows'=>'2']) !!}
            <center><div class="help-block with-errors"></div></center>
        </div>
    </li>
    <li class="list-group-item list-group-item-info col-md-12">  
        <div class="col-md-6">
            <label>Marca</label>
            {!! Form::text('marca',null,['class'=>'form-control','value'=>'id','placeholder'=>'Ejm. Castrol']) !!}
        </div>
        <div class="col-md-6">
            <label>Código</label>
            {!! Form::text('codigo',null,['class'=>'form-control','value'=>'id','placeholder'=>'Ejm. 10W40']) !!}
        </div>
    </li>
    <li class="list-group-item list-group-item-info col-md-12">
        <div class="col-md-12">
            <label>Observación</label>
            {!! Form::textarea('observacion',null,['class'=>'form-control','rows'=>'1','value'=>'id','placeholder'=>'Escriba una observación del trabajo']) !!}
            <center><div class="help-block with-errors"></div></center>
        </div>
    </li>
  </div>
</div>
