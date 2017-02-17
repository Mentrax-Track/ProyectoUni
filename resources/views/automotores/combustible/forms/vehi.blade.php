
<div class="jumbotron ">
<div class="row">    
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <li class="list-group-item list-group-item-success">
            <div class="form-group">
                <center>{!! Form::label('Vehículo') !!}</center>
                {!! Form::select('vehiculo_id', $vehiculos, null, ['class' => 'js-example-responsive','style'=>'width: 100%','placeholder'=>'Seleccione un Vehículo','data-error'=>'Seleccione un Vehículo','required','id'=>'vehiculo', 'value'=>'$vehiculo_id']) !!}
                <center><div class="help-block with-errors"></div></center>
            </div>
        </li>
    </div>
</div>
</div>