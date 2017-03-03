

<div class="row">    
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <li class="list-group-item list-group-item-success">
            <div class="row">
                <center>
                    Actualmente el Vehiculo: <strong><font color="blue">{{$vehiculo->full_vehiculo}}</font></strong>
                    <br>tiene un Kilometraje de <strong><font color="red">{{$kilome}}</font></strong>
                </center>
            </div>
        </li><input type="hidden" name="vehiculo_id" id="vehiculo_id" value="{{ $vehiculo->id }}" />
        <li class="list-group-item list-group-item-success">
            <div class="row">
                <center>
                    <div class="btn-group col-md-7" role="group">
                        {!! Form::label('Aumentar: ') !!}
                        <div class="input-group">
                            {!! Form::number('aumento',null, ['class' => 'form-control','placeholder'=>'Ejm. 100','id'=>'aumento','onkeyup'=>'sumar();','data-error'=>'Inserte un número','required']) !!}
                            <center><div class="help-block with-errors"></div></center>
                            <span class="input-group-addon" id="basic-addon3">Km.</span>
                        </div>   
                    </div><input type="hidden" name="hay" id="hay" value="{{ $kilome }}" />
                    <div class="btn-group col-md-5" role="group">
                        {!! Form::label('Total Km.:') !!}
                        <div class="input-group">
                        {!! Form::text('total',null, ['class' => 'form-control','id'=>'total',' value'=>'0','readonly'=>'readonly']) !!}
                        <center><div class="help-block with-errors"></div></center>
                        </div>
                    </div>
                </center>
            </div>
        </li>
    </div>
</div>



