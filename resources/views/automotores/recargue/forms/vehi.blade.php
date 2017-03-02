
<div class="row">    
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <li class="list-group-item list-group-item-success">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <center>{!! Form::label('Vehículo') !!}</center>
                        {!! Form::select('vehiculo_id', $vehiculos, null, ['class' => 'js-example-responsive','style'=>'width: 100%','placeholder'=>'Seleccione un Vehículo','data-error'=>'Seleccione un Vehículo','required','id'=>'vehiculo', 'value'=>'$vehiculo_id']) !!}
                        <center><div class="help-block with-errors"></div></center>
                    </div>
                </div>
            </div>
        </li>
        <li class="list-group-item list-group-item-success">
            <div class="row">
                <center>
                    <div class="btn-group col-md-3" role="group">
                        {!! Form::label('Nro. Pedido: ') !!}
                        <div class="input-group">
                            {!! Form::number('numero',null, ['class' => 'form-control','placeholder'=>'Ejm. 25','data-error'=>'Inserte un número']) !!}
                        </div>   
                    </div>
                    <div class="btn-group col-md-4" role="group">
                        {!! Form::label('Nro. Factura: ') !!}
                        <div class="input-group">
                            {!! Form::number('factura',null, ['class' => 'form-control','placeholder'=>'Ejm. 32589','data-error'=>'Inserte un número']) !!}
                            <center><div class="help-block with-errors"></div></center>
                        </div>   
                    </div>
                    <div class="btn-group col-md-5" role="group">
                        <div class="form-group">
                            {!! Form::label('Fecha:') !!}
                            <div class='input-group date ' id='datetimepicker6'>
                                {!! Form::text('fecha',null,['class'=>'form-control', 'placeholder'=>'Fecha','data-error'=>'Inserte la fecha','required']) !!}
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                            <center><div class="help-block with-errors"></div></center>
                        </div>
                    </div>
                </center>
            </div>
        </li>
        <li class="list-group-item list-group-item-success">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <center>{!! Form::label('Tipo de combustible') !!}</center>
                        {!! Form::select('combustible',config('tipo.tipose'), null, ['class' => 'js-example-responsive','style'=>'width: 100%','placeholder'=>'Seleccione un tipo','data-error'=>'Seleccione un tipo','required','id'=>'tipo',]) !!}
                        <center><div class="help-block with-errors"></div></center>
                    </div>
                </div>
            </div>
        </li>
        <li class="list-group-item list-group-item-success">
            <div class="row">
                <center>
                    <div class="btn-group col-md-4" role="group">
                        {!! Form::label('Litros / m³: ') !!}
                        <div class="input-group">
                            {!! Form::number('litros',null, ['class' => 'form-control','placeholder'=>'Ejm. 25','id'=>'litros','required','onkeyup'=>'sumar();','data-error'=>'Inserte un número']) !!}
                        </div>   
                    </div>
                    <div class="btn-group col-md-4" role="group">
                        {!! Form::label('Precio: ') !!}
                        <div class="input-group">
                            {!! Form::text('precio',null, ['class' => 'form-control','placeholder'=>'Ejm. 3.50','id'=>'precio','onkeyup'=>'sumar();','data-error'=>'Inserte un número','required']) !!}
                            <center><div class="help-block with-errors"></div></center>
                            <span class="input-group-addon" id="basic-addon3">Bs.</span>
                        </div>   
                    </div>
                    <div class="btn-group col-md-4" role="group">
                        {!! Form::label('Total Bs.:') !!}
                        {!! Form::text('total',null, ['class' => 'form-control','id'=>'total',' value'=>'0','readonly'=>'readonly']) !!}
                        <center><div class="help-block with-errors"></div></center>
                    
                    </div>
                </center>
            </div>
        </li>
    </div>
</div>



