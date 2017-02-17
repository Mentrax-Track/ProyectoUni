
<div class="row">    
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <li class="list-group-item list-group-item-success">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <center>{!! Form::label('Vehiculo : ') !!}</center>
                    {!! Form::select('vehiculo_id',$vehiculo,null,['class'=>'form-control js-example-responsive form-control','style'=>'width: 100%','readonly'=>'readonly']) !!}
                    <center><div class="help-block with-errors"></div></center>  
                </div>
            </div>
        </li>
        <li class="list-group-item list-group-item-success">
            <div class="row">
                <center>
                    <div class="btn-group col-md-5" role="group">
                        {!! Form::label('Gasolina: ') !!}
                        <div class="input-group">
                            {!! Form::number('gasolina',null, ['class' => 'form-control','placeholder'=>'Ejm. 25','id'=>'gasolina1','onkeyup'=>'sumar();','data-error'=>'Inserte un número']) !!}
                            <span class="input-group-addon" id="basic-addon3">Litros</span>
                        </div>   
                    </div>
                    <div class="btn-group col-md-4" role="group">
                        {!! Form::label('Precio: ') !!}
                        <div class="input-group">
                            {!! Form::text('prega',null, ['class' => 'form-control','placeholder'=>'Ejm. 3.50','id'=>'prega1','onkeyup'=>'sumar();','data-error'=>'Inserte un número']) !!}
                            <center><div class="help-block with-errors"></div></center>
                            <span class="input-group-addon" id="basic-addon3">Bs.</span>
                        </div>   
                    </div>
                    <div class="btn-group col-md-3" role="group">
                        {!! Form::label('Total Bs.:') !!}
                        {!! Form::text('toga',null, ['class' => 'form-control','id'=>'toga1',' value'=>'0','readonly'=>'readonly']) !!}
                        <center><div class="help-block with-errors"></div></center>
                    
                    </div>
                </center>
            </div>
        </li>
        <li class="list-group-item list-group-item-success">
            <div class="row">
                <center>
                    <div class="btn-group col-md-5" role="group">
                        {!! Form::label('Diesel: ') !!}
                        <div class="input-group">
                            {!! Form::number('diesel',null, ['class' => 'form-control','placeholder'=>'Ejm. 0','id'=>'diesel1','onkeyup'=>'sumar();','data-error'=>'Inserte un número']) !!}
                            <center><div class="help-block with-errors"></div></center>
                            <span class="input-group-addon" id="basic-addon3">Litros.</span>
                        </div>
                    </div>
                    <div class="btn-group col-md-4" role="group">
                        {!! Form::label('Precio: ') !!}
                        <div class="input-group">
                            {!! Form::text('predi',null, ['class' => 'form-control','placeholder'=>'Ejm. 4.50','id'=>'predi1','onkeyup'=>'sumar();','data-error'=>'Inserte un número']) !!}
                            <center><div class="help-block with-errors"></div></center>
                            <span class="input-group-addon" id="basic-addon3">Bs.</span>
                        </div>   
                    </div>
                    <div class="btn-group col-md-3" role="group">
                        {!! Form::label('Total Bs.:') !!}
                        {!! Form::text('todi',null, ['class' => 'form-control','id'=>'todi1',' value'=>'0','readonly'=>'readonly']) !!}
                        <center><div class="help-block with-errors"></div></center>
                    </div>
                </center>
            </div>
        </li>
        <li class="list-group-item list-group-item-success">
            <div class="row">
                <center>
                    <div class="btn-group col-md-5" role="group">
                        {!! Form::label('GNV: ') !!}
                        <div class="input-group">
                            {!! Form::number('gnv',null, ['class' => 'form-control','placeholder'=>'Ejm. 40','id'=>'gnv1','onkeyup'=>'sumar();','data-error'=>'Inserte un número']) !!}
                            <center><div class="help-block with-errors"></div></center>
                            <span class="input-group-addon" id="basic-addon3">m³.</span>
                        </div>
                    </div>
                    <div class="btn-group col-md-4" role="group">
                        {!! Form::label('Precio: ') !!}
                        <div class="input-group">
                            {!! Form::text('pregn',null, ['class' => 'form-control','placeholder'=>'Ejm. 3.50','id'=>'pregn1','onkeyup'=>'sumar();','data-error'=>'Inserte un número']) !!}
                            <center><div class="help-block with-errors"></div></center>
                            <span class="input-group-addon" id="basic-addon3">Bs.</span>
                        </div>   
                    </div>
                    <div class="btn-group col-md-3" role="group">
                        {!! Form::label('Total Bs.:') !!}
                        {!! Form::text('togn',null, ['class' => 'form-control','id'=>'togn1',' value'=>'0','readonly'=>'readonly']) !!}
                        <center><div class="help-block with-errors"></div></center>
                    </div>
                </center>
            </div>
        </li>
        <?php $date = date("Y-m-d H:i:s");  ?>
        <input type="hidden" name="fecha" id="fecha" value="{{$date}} ">
    </div>
</div>



