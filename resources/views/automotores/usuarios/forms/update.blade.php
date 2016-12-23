<div class="row">
    <ul class="list-group">
        <li class="list-group-item list-group-item-success col-md-12">
            <div class="col-md-4">
                <div class="form-group">
                    <center>{!! Form::label('Nombre:') !!}</center>
                    {!! Form::text('nombres',null,['class'=>'form-control', 'placeholder'=>'Ingrese el nombre del usuario']) !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <center>{!! Form::label('Apellido:') !!}</center>
                    {!! Form::text('apellidos',null,['class'=>'form-control', 'placeholder'=>'Ingrese el apellido del usuario']) !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <center>{!! Form::label('Password:') !!}</center>
                    {!! Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingrese su password/clave']) !!}
                </div>
            </div>
        </li>
        <li class="list-group-item list-group-item-success col-md-12">
            <div class="col-md-4">
                <div class="form-group ">
                    <center>{!! Form::label('Email: (Opcional)') !!}</center>
                    {!! Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Ingrese el email del usuario']) !!}
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <center>{!! Form::label('Cedula:') !!}</center>
                    {!! Form::text('cedula',null,['class'=>'form-control', 'placeholder'=>'Ingrese la cedula del usuario']) !!}
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <center>{!! Form::label('Celular:') !!}</center>
                    {!! Form::text('celular',null,['class'=>'form-control', 'placeholder'=>'Ingrese el celular del usuario']) !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <center>{!! Form::label('tipo', 'Tipo de usuario') !!}</center>
                    {!! Form::select('tipo', config('update.updates'), null, ['class' => 'form-control']) !!}
                </div>
            </div>
        </li>
        <li class="list-group-item list-group-item-info col-md-12">
                <div class="col-md-3">
                    <div class="form-group">
                        <center>{!! Form::label('Facultad:') !!}</center>
                        <center>
                        {!! Form::text('facultad',$entidad->facultad,['class'=>'js-example-responsive','style'=>'width: 98%','data-error'=>'La Facultad es obligatorio...','id'=>'facultad','placeholder'=>'Seleccione una Facultad','value'=>'']) !!}
                        </center>
                        <center><div class="help-block with-errors"></div></center>
                    </div>
                </div><div class="col-md-1"></div>
                <div class="col-md-3">
                    <div class="form-group">
                        <center>{!! Form::label('Carrera:') !!}</center>
                        <center>
                        {!! Form::text('carrera',$entidad->carrera,['class'=>'js-example-responsive','style'=>'width: 97%','data-error'=>'La Carrera es obligatorio...','id'=>'carrera','placeholder'=>'Seleccione una Carrera']) !!}
                        </center>
                        <center><div class="help-block with-errors"></div></center>
                    </div>
                </div><div class="col-md-1"></div>
                <div class="col-md-2">
                    <div class="form-group">
                        <center>{!! Form::label('Materia:') !!}</center>
                        {!! Form::text('materia',$entidad->materia,['class'=>'form-control', 'placeholder'=>'Ingrese la materia del encargado','data-error'=>'La Materia es obligatorio...']) !!}
                         <center><div class="help-block with-errors"></div></center>
                    </div>
                </div>
            <div class="col-md-2">
                <div class="form-group">
                    <center>{!! Form::label('Sigla:') !!}</center>
                    {!! Form::text('sigla',$entidad->sigla,['class'=>'form-control', 'placeholder'=>'Ingrese la sigla de la materia del encargado']) !!}
                </div>
            </div>
        </li>
    </ul>
    </div>