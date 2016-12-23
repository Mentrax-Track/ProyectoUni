<div class="row">
<div class="col-md-8">
    <ul class="list-group">
        <li class="list-group-item list-group-item-success">
            <center>
                <h4>
                    <u><p style="color:black">
                        Inserte los destinos del viaje
                    </p></u>
                </h4>
            </center>
        </li>
        <li class="list-group-item list-group-item-info">  
            <div class="row">
                <div class="col-md-9">
                    <center>{!! Form::label('Destino: ') !!}</center>
                        {!! Form::select('destino_id',$destino,null,['class'=>'js-example-responsive','style'=>'width: 100%','id'=>'destino_id','data-error'=>'Escoja un destino','required', 'value'=>'$destino->id','placeholder'=>'Seleccione sun destino']) !!}
                    <center><div class="help-block with-errors"></div></center>   
                </div>   
                <div class="col-md-3">
                    <center>{!! Form::label('Kilometraje: ') !!}</center>
                    <div class="input-group input-group-sm">
                        {!! Form::text('kilome',null,['class'=>'form-control','id'=>'kilome','value'=>'0','data-error'=>'No se acepta valor vacio','required','aria-describedby'=>'sizing-addon3']) !!}
                        <center><div class="help-block with-errors"></div></center>
                        <span class="input-group-addon" id="sizing-addon3">Km.</span>
                    </div>
                </div>          
            </div>
        </li>
        <li class="list-group-item list-group-item-info">  
            <div class="row">
                <div class="col-md-9">
                    {!! Form::select('dest1',$destino,null,['class'=>'js-example-responsive','style'=>'width: 100%','id'=>'dest1','data-error'=>'Escoja un destino','required', 'value'=>'$destino->id','placeholder'=>'Selecione un Destino']) !!}
                    <center><div class="help-block with-errors"></div></center>   
                </div>   
                <div class="col-md-3">
                    <div class="input-group input-group-sm">
                        {!! Form::text('k1',null,['class'=>'form-control','id'=>'k1','value'=>'0','data-error'=>'No se acepta valor vacio','required','aria-describedby'=>'sizing-addon3']) !!}
                        <center><div class="help-block with-errors"></div></center>
                        <span class="input-group-addon" id="sizing-addon3">Km.</span>
                    </div>
                </div>          
            </div>
        </li>
        <li class="list-group-item list-group-item-success">  
            <div class="row">
                <div class="col-md-9">
                    {!! Form::select('dest2',$destino,null,['class'=>'js-example-responsive','style'=>'width: 100%','id'=>'dest2','value'=>'$destino->id','placeholder'=>'Selecione un Destino']) !!}  
                </div>   
                <div class="col-md-3">
                    <div class="input-group input-group-sm">
                        {!! Form::text('k2',null,['class'=>'form-control','id'=>'k2','value'=>'0','aria-describedby'=>'sizing-addon3']) !!}
                        <span class="input-group-addon" id="sizing-addon3">Km.</span>
                    </div>
                </div>          
            </div>
        </li>
        <li class="list-group-item list-group-item-success">  
            <div class="row">
                <div class="col-md-9">
                    {!! Form::select('dest3',$destino,null,['class'=>'js-example-responsive','style'=>'width: 100%','id'=>'dest3', 'value'=>'$destino->id','placeholder'=>'Selecione un Destino']) !!}
                    <center><div class="help-block with-errors"></div></center>   
                </div>   
                <div class="col-md-3">
                    <div class="input-group input-group-sm">
                        {!! Form::text('k3',null,['class'=>'form-control','id'=>'k3','value'=>'0','aria-describedby'=>'sizing-addon3']) !!}
                        <span class="input-group-addon" id="sizing-addon3">Km.</span>
                    </div>
                </div>          
            </div>
        </li>
        <li class="list-group-item list-group-item-success">  
            <div class="row">
                <div class="col-md-9">
                    {!! Form::select('dest4',$destino,null,['class'=>'js-example-responsive','style'=>'width: 100%','id'=>'dest4', 'value'=>'$destino->id','placeholder'=>'Selecione un Destino']) !!}   
                </div>   
                <div class="col-md-3">
                    <div class="input-group input-group-sm">
                        {!! Form::text('k4',null,['class'=>'form-control','id'=>'k4','value'=>'0','aria-describedby'=>'sizing-addon3']) !!}
                        <span class="input-group-addon" id="sizing-addon3">Km.</span>
                    </div>
                </div>          
            </div>
        </li>
        <li class="list-group-item list-group-item-success">  
            <div class="row">
                <div class="col-md-9">
                    {!! Form::select('dest5',$destino,null,['class'=>'js-example-responsive','style'=>'width: 100%','id'=>'dest5', 'value'=>'$destino->id','placeholder'=>'Selecione un Destino']) !!}
                </div>   
                <div class="col-md-3">
                    <div class="input-group input-group-sm">
                        {!! Form::text('k5',null,['class'=>'form-control','id'=>'k5','value'=>'0','aria-describedby'=>'sizing-addon3']) !!}
                        <span class="input-group-addon" id="sizing-addon3">Km.</span>
                    </div>
                </div>          
            </div>
        </li>   
        <li class="list-group-item list-group-item-info">  
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="sizing-addon2">Km. adicional:</span>
                        {!! Form::text('adicional',null,['class'=>'form-control','style'=>'width: 100%','id'=>'adicional','data-error'=>'Inserte un valor','required','onkeyup'=>'sumar();','aria-describedby'=>'sizing-addon2']) !!}
                        <center><div class="help-block with-errors"></div></center> 
                    </div>  
                </div>   
                <div class="col-md-6">
                    <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="sizing-addon3">Total Km.</span>
                        {!! Form::text('total',null,['class'=>'form-control','id'=>'total',' value'=>'0','data-error'=>'Este campo debe estar lleno','required','aria-describedby'=>'sizing-addon3','readonly'=>'readonly']) !!}
                        <center><div class="help-block with-errors"></div></center>
                    </div>
                </div>          
            </div>
        </li>      
    </ul>
</div>
<div class="col-md-4">
    <ul class="list-group">
        <li class="list-group-item list-group-item-success">
            <center>
                <h4>
                    <u><p style="color:black">
                        Tipo de viaje
                    </p></u>
                </h4>
            </center>
        </li>
        <li class="list-group-item list-group-item-info">
            {!! Form::select('tipo',config('viaTipo.viaTipos'),null,['class'=>'js-example-responsive','style'=>'width: 100%','id'=>'tipo','multiple','data-error'=>'Seleccione un tipo de viaje','required'])!!}
            <center><div class="help-block with-errors"></div></center>
        </li>
        <li class="list-group-item list-group-item-success">
            <center>
                <h4>
                    <u><p style="color:black">
                        Número de pasajeros
                    </p></u>
                </h4>
            </center>
        </li><li class="list-group-item list-group-item-info">
            {!! Form::number('pasajeros',$reserva->pasajeros,['class'=>'form-control', 'placeholder'=>'Ejm. 20','data-error'=>'Inserte el número de pasajeros','required']) !!}
            <center><div class="help-block with-errors"></div></center>
        </li>
        <li class="list-group-item list-group-item-success">
            <center>
                <h4>
                    <u><p style="color:black">
                        Fecha de inicio
                    </p></u>
                </h4>
            </center>
        </li>
        <li class="list-group-item list-group-item-info">
            <div class='input-group date ' id='datetimepicker6'>
                {!! Form::text('fecha_inicial',$reserva->fecha_inicial,['class'=>'form-control', 'placeholder'=>'Ingrese la fecha de inicio','data-error'=>'Inserte la fecha Inicial','required']) !!}
                <center><div class="help-block with-errors"></div></center>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </li>
        <li class="list-group-item list-group-item-success">
            <center>
                <h4>
                    <u><p style="color:black">
                        Fecha de fin del viaje
                    </p></u>
                </h4>
            </center>
        </li> 
        <li class="list-group-item list-group-item-info">
            <div class='input-group date ' id='datetimepicker7'>
                {!! Form::text('fecha_final',$reserva->fecha_final,['class'=>'form-control', 'placeholder'=>'Ingrese la fecha final','data-error'=>'Inserte la fecha Final','required']) !!}
                <center><div class="help-block with-errors"></div></center>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </li>
    </ul>
</div>
</div>
<div class="row">
    <ul class="list-group">
        <li class="list-group-item list-group-item-success">
            <center>
                <h4>
                    <u><p style="color:black">
                        Datos del viaje
                    </p></u>
                </h4>
            </center>          
        </li>
        <li class="list-group-item list-group-item-info col-md-12">
            <div class="form-inline">
                <div class="form-group col-md-4">
                    <label for="chofer">Choferes:</label>
                    {!! Form::select('chofer[]',$choferes,null,['class'=>'js-example-responsive','style'=>'width: 79%','id'=>'chofer','multiple','data-error'=>'Seleccione a los choferes ','required']) !!}
                    <center><div class="help-block with-errors"></div></center>
                </div>
                <div class="form-group col-md-4">
                    <label for="vehiculo">Vehículos:</label>
                    {!! Form::select('vehiculo[]',$vehiculos,null,['class'=>'js-example-responsive','style'=>'width: 78%','multiple','id'=>'vehiculo','data-error'=>'Seleccione a los vehículos','required']) !!}
                    <center><div class="help-block with-errors"></div></center>
                </div>
                <div class="form-group col-md-4">
                    <label for="encargado">Encargados:</label>
                    {!! Form::select('encargado[]',$encargados,null,['class'=>'js-example-responsive','style'=>'width: 73%','multiple','id'=>'encargado','data-error'=>'Seleccione a los encargados','required']) !!}
                    <center><div class="help-block with-errors"></div></center>
                </div>
            </div>
        </li>
    </ul>
</div>
<div class="row">
    <ul class="list-group">
        <li class="list-group-item list-group-item-info col-md-12">
            <div class="form-inline">
                <div class="form-group col-md-3">
                    <label for="entidad">Entidad:</label>
                    {!! Form::text('entidad',$reserva->entidad,['class'=>'js-example-responsive', 'placeholder'=>'Entidad responsable','style'=>'width: 100%','role'=>'search','id'=>'entidad','data-error'=>'Seleccione una Entidad','required']) !!}
                    <center><div class="help-block with-errors"></div></center>
                </div>
                <div class="form-group col-md-2"></div>
                <div class="form-group col-md-7">
                    <label for="objetivo">Objetivo:</label>
                    {!! Form::textarea('objetivo',$reserva->objetivo,['class'=>'form-control', 'placeholder'=>'Ingrese el objetivo del viaje','style'=>'width: 100%','data-error'=>'Inserte el objetivo del viaje','required','rows'=>1,'id'=>'objetivo']) !!}
                    <center><div class="help-block with-errors"></div></center>
                </div>
            </div>
        </li>
    </ul>
</div>
