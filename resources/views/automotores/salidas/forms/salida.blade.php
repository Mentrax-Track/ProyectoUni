<div class="list-group-item">
<div class="jumbotron ">
<div class="row">    
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <li class="list-group-item">
            <div class="row">
                <div class="col-md-6">
                    <center>{!! Form::label('Chofer : ') !!}</center>
                    {!! Form::select('chofer',$chofer,null,['class'=>'js-example-responsive','style'=>'width: 100%','placeholder'=>'Seleccione un Chofer','data-error'=>'Seleccione un Chofer','required','id'=>'chof']) !!}
                    <center><div class="help-block with-errors"></div></center>  
                </div>
                <div class="col-md-6">
                    <center>{!! Form::label('Movilidad : ') !!}</center>
                    {!! Form::select('vehiculo',$vehiculo,null,['class'=>'js-example-responsive','style'=>'width: 100%','placeholder'=>'Seleccione una movilidad','data-error'=>'Seleccione una movilidad','required','id'=>'vehi']) !!}
                    <center><div class="help-block with-errors"></div></center>  
                </div>
            </div>
        </li>
        <li class="list-group-item">
            <div class="row">
                <center>
                    <div class="btn-group col-md-2" role="group">
                        {!! Form::label('Lugar : ') !!}
                    </div>
                    <div class="btn-group col-md-10" role="group">
                        {!! Form::text('lugar',null, ['class' => 'form-control','placeholder'=>'Inserte el lugar donde recorrera la movilidad','data-error'=>'Inserte el lugar','required']) !!}
                        <center><div class="help-block with-errors"></div></center>
                    </div>
                </center>
            </div>
        </li>
        <li class="list-group-item">
            <div class="row">
                <center>
                    <div class="btn-group col-md-2" role="group">
                        {!! Form::label('Motivo : ') !!}
                    </div>
                    <div class="btn-group col-md-10" role="group">
                        {!! Form::text('motivo',null, ['class' => 'form-control','placeholder'=>'Inserte el motivo de petición de la movilidad','data-error'=>'Inserte el motivo','required']) !!}
                        <center><div class="help-block with-errors"></div></center>
                    </div>
                </center>
            </div>
        </li>
        <li class="list-group-item">
            <div class="row">
                <center>
                    <div class="btn-group col-md-2" role="group">
                        {!! Form::label('Responsable: ') !!}
                    </div>
                    <div class="btn-group col-md-10" role="group">
                        {!! Form::text('responsable',null, ['class' => 'form-control','placeholder'=>'Inserte el responsable de la petición vehicular','data-error'=>'Inserte el responsable','required']) !!}
                        <center><div class="help-block with-errors"></div></center>
                    </div>
                </center>
            </div>
        </li>
        <li class="list-group-item">
            <div class="row">   
                  <div class="col-md-1"></div>
                  <div class="col-md-4">
                      <center>{!! Form::label('Hora Salida') !!}</center>
                      <div class='input-group date input-group-sm' id='datetimepicker3'>
                        {!! Form::text('hsalida',null,['class'=>'form-control','data-error'=>'Seleccione una hora','required']) !!}
                        <center><div class="help-block with-errors"></div></center>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                      </div>
                  </div>
                  <div class="col-md-2"></div>
                  <div class="col-md-4">   
                        <center>{!! Form::label('Hora Llegada') !!}</center>
                        <div class='input-group date input-group-sm' id='datetimepicker4'>
                            {!! Form::text('hllegada',null,['class'=>'form-control','data-error'=>'Seleccione una hora']) !!}
                            <center><div class="help-block with-errors"></div></center>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                        </div>  
                 </div>
              </div>
        </li>
    </div>
</div>



