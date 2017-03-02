
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
                    <div class="btn-group col-md-4" role="group">
                        {!! Form::label('Nro. Pedido: ') !!}
                        <div class="input-group">
                            {!! Form::number('numero',$pedido->numero, ['class' => 'form-control','placeholder'=>'Ejm. 25','data-error'=>'Inserte un número']) !!}
                        </div>   
                    </div>
                    <div class="btn-group col-md-4" role="group">
                        {!! Form::label('Nro. Factura: ') !!}
                        <div class="input-group">
                            {!! Form::number('factura',null, ['class' => 'form-control','placeholder'=>'Ejm. 32589','data-error'=>'Inserte un número']) !!}
                            <center><div class="help-block with-errors"></div></center>
                        </div>   
                    </div>
                    <div class="btn-group col-md-4" role="group">
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
                    <?php $tipo = $recargue->combustible;?>
                    @if ($tipo == "gasolina") 
                        <div class="btn-group col-md-4" role="group">
                        {!! Form::label('Litros / m³: ') !!}
                        <div class="input-group">
                            {!! Form::number('litros',$gasolina->litros, ['class' => 'form-control','placeholder'=>'Ejm. 25','id'=>'litros','onkeyup'=>'sumar();','data-error'=>'Inserte un número']) !!}
                        </div>   
                        </div>
                        <div class="btn-group col-md-4" role="group">
                            {!! Form::label('Precio: ') !!}
                            <div class="input-group">
                                {!! Form::text('precio',$gasolina->preciog, ['class' => 'form-control','placeholder'=>'Ejm. 3.50','id'=>'precio','onkeyup'=>'sumar();','data-error'=>'Inserte un número']) !!}
                                <center><div class="help-block with-errors"></div></center>
                                <span class="input-group-addon" id="basic-addon3">Bs.</span>
                            </div>   
                        </div>
                    @endif
                    @if ($tipo == "diesel") 
                        <div class="btn-group col-md-4" role="group">
                        {!! Form::label('Litros / m³: ') !!}
                        <div class="input-group">
                            {!! Form::number('litros',$diesel->litros, ['class' => 'form-control','placeholder'=>'Ejm. 25','id'=>'litros','onkeyup'=>'sumar();','data-error'=>'Inserte un número']) !!}
                        </div>   
                        </div>
                        <div class="btn-group col-md-4" role="group">
                            {!! Form::label('Precio: ') !!}
                            <div class="input-group">
                                {!! Form::text('precio',$diesel->preciod, ['class' => 'form-control','placeholder'=>'Ejm. 3.50','id'=>'precio','onkeyup'=>'sumar();','data-error'=>'Inserte un número']) !!}
                                <center><div class="help-block with-errors"></div></center>
                                <span class="input-group-addon" id="basic-addon3">Bs.</span>
                            </div>   
                        </div>
                    @endif
                    @if ($tipo == 'gnv') 
                        <div class="btn-group col-md-4" role="group">
                        {!! Form::label('Litros / m³: ') !!}
                        <div class="input-group">
                            {!! Form::number('litros',$gnv->litros, ['class' => 'form-control','placeholder'=>'Ejm. 25','id'=>'litros','onkeyup'=>'sumar();','data-error'=>'Inserte un número']) !!}
                        </div>   
                        </div>
                        <div class="btn-group col-md-4" role="group">
                            {!! Form::label('Precio: ') !!}
                            <div class="input-group">
                                {!! Form::text('precio',$gnv->precion, ['class' => 'form-control','placeholder'=>'Ejm. 3.50','id'=>'precio','onkeyup'=>'sumar();','data-error'=>'Inserte un número']) !!}
                                <center><div class="help-block with-errors"></div></center>
                                <span class="input-group-addon" id="basic-addon3">Bs.</span>
                            </div>   
                        </div>
                    @endif
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



