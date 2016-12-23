
<div class="jumbotron ">
<div class="row">    
    <div class="col-md-4">
        <li class="list-group-item list-group-item-success">
            <div class="form-group">
                <center>{!! Form::label('Origen:') !!}</center>
                {!! Form::text('origen',null,['class'=>'form-control', 'placeholder'=>'Desde donde partirá el vehículo','data-error'=>'Inserte un lugar exacto','required']) !!}
                <center><div class="help-block with-errors"></div></center>
            </div>
            <div class="form-group">
                {!! Form::label('Departamento:') !!}
                {!! Form::select('dep_inicio', config('dep.deps'), null, ['class'=>'js-example-responsive','style'=>'width: 100%','id'=>'depini','placeholder'=>'Departamento de salida','data-error'=>'Seleccione un departamento','required']) !!}
                <center><div class="help-block with-errors"></div></center>
            </div>
            <!--<div class="form-group">
                {!! Form::label('Provincia:') !!}
                {!! Form::select('pro_inicio', config('dep.deps'), null, ['class' => 'form-control','id'=>'proini','placeholder'=>'Provincia de salida','data-error'=>'Seleccione un departamento','required']) !!}
                <center><div class="help-block with-errors"></div></center>
            </div>
            <div class="form-group">
                {!! Form::label('Municipio:') !!}
                {!! Form::select('mun_inicio', config('dep.deps'), null, ['class' => 'form-control','id'=>'munini','placeholder'=>'Municipio de salida','data-error'=>'Seleccione un departamento','required']) !!}
                <center><div class="help-block with-errors"></div></center>
            </div>-->
        </li>
    </div>
    <div class="col-md-4">
        <li class="list-group-item list-group-item-success">
            <div class="form-group">
                <center>{!! Form::label('Descripción de la Ruta:') !!}</center> 
                {!! Form::textarea('ruta',null,['class'=>'form-control', 'rows'=>'3','placeholder'=>'Agregue una breve descripción de la ruta de viaje','data-error'=>'Inserte una breve descripción de la ruta','required']) !!}
                <center><div class="help-block with-errors"></div></center>
            </div>
        </li>
        <li class="list-group-item list-group-item-success">
            <div class="form-group">
                <center>{!! Form::label('Distancia (km):') !!}</center>
                {!! Form::number('kilometraje',null,['step'=>'any','class'=>'form-control','placeholder'=>'Ejm. 12,5','data-error'=>'Inserte una distancia válida','required']) !!}
                <center><div class="help-block with-errors"></div></center>
            </div>
            <div class="form-group">
                <center>{!! Form::label('Tiempo aproximado:') !!}</center> 
                <div class="input-group has-success has-feedback">  
                    {!! Form::text('tiempo',null,['class'=>'form-control', 'placeholder'=>'Ejm. 5:30 ','data-error'=>'Inserte un tiempo aproximado de rrecorrido','required']) !!}
                    <span class="input-group-addon" id="basic-addon3"><strong>Horas.</strong></span>
                </div>
                <center><div class="help-block with-errors"></div></center>
            </div>
        </li>
    </div>
    <div class="col-md-4">
        <li class="list-group-item list-group-item-success">
            <div class="form-group">
                <center>{!! Form::label('Destino:') !!}</center>
                {!! Form::text('destino',null,['class'=>'form-control', 'placeholder'=>'Hasta el lugar exacto de llegada','data-error'=>'Inserte un lugar exacto','required']) !!}
                <center><div class="help-block with-errors"></div></center>
            </div>
            <div class="form-group">
                {!! Form::label('Departamento:') !!}
                {!! Form::select('dep_final', config('dep.deps'), null, ['class'=>'js-example-responsive','style'=>'width: 100%','id'=>'depfin','placeholder'=>'Departamento de llegada','data-error'=>'Seleccione un departamento','required']) !!}
                <center><div class="help-block with-errors"></div></center>
            </div>
            <!--<div class="form-group">
                {!! Form::label('Provincia:') !!}
                {!! Form::select('pro_final', config('dep.deps'), null, ['class' => 'form-control','id'=>'profin','placeholder'=>'Provincia de llegada','data-error'=>'Seleccione un departamento','required']) !!}
                <center><div class="help-block with-errors"></div></center>
            </div>
            <div class="form-group">
                {!! Form::label('Municipio:') !!}
                {!! Form::select('mun_final', config('dep.deps'), null, ['class' => 'form-control','id'=>'munfin','placeholder'=>'Municipio de llegada','data-error'=>'Seleccione un departamento','required']) !!}
                <center><div class="help-block with-errors"></div></center>
            </div>-->
        </li>
    </div>
</div><br>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
    
    </div>
</div>  
</div>