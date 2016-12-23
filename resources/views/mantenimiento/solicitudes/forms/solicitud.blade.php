<div class="list-group-item">
<div class="jumbotron ">
<div class="row">    
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <li class="list-group-item">
            <div class="row">
                <div class="col-md-12">
                    <center>{!! Form::label('Movilidad') !!}</center>
                    {!! Form::select('vehiculo_id',$vehiculo,null,['class'=>'js-example-responsive','style'=>'width: 100%', 'placeholder'=>'Seleccione una movilidad','data-error'=>'Seleccione una movilidad','required','id'=>'vehi','value'=>'id']) !!}
                    <center><div class="help-block with-errors"></div></center>  
                </div>
            </div>
        </li>
        <li class="list-group-item">
            <div class="row">
                <div class="col-md-12">
                    <center>{!! Form::label('Accesorios ') !!}</center>
                    {!! Form::select('solicitud[]', config('mantenimiento.vehiculo'), null, ['multiple'=>'multiple','class'=>'js-example-responsive','style'=>'width: 100%','id'=>'mante','placeholder','data-error'=>'Seleccione uno o mas accesorios','required']) !!}
                    <center><div class="help-block with-errors"></div></center>    
                      
                </div>
            </div>
        </li>
        <li class="list-group-item ">
            <div class="row">
                <div class="col-md-12">
                    <div class="input-group">
                        <span class="input-group-addon" id="">Descripción:</span>
                        {!! Form::textarea('descripsoli', null,['class'=>'form-control', 'rows'=>'3','placeholder'=>'Describa el estado de los accesorios seleccionados o insertados','required','data-error'=>'Describa el trabajo con los accesorios']) !!}   
                         <center><div class="help-block with-errors"></div></center>    
                    </div>
                </div>
            </div>
        </li>
    </div>
</div>



