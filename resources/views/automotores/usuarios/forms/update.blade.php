<div class="panel panel-default">
    <div class="panel-body">
    <div class="jumbotron">
    <div class=" list-group-item">
        <div class="row">
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
        </div>
        
        <div class="row">
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
        </div>
    </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <center>{!! Form::label('Facultad:') !!}</center>
                    {!! Form::text('facultad',null,['class'=>'form-control', 'placeholder'=>'Ingrese la facultad del encargado']) !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <center>{!! Form::label('Carrera:') !!}</center>
                    {!! Form::text('carrera',null,['class'=>'form-control', 'placeholder'=>'Ingrese la carrera del encargado']) !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <center>{!! Form::label('Materia:') !!}</center>
                    {!! Form::text('materia',null,['class'=>'form-control', 'placeholder'=>'Ingrese la materia del encargado']) !!}
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <center>{!! Form::label('Sigla:') !!}</center>
                    {!! Form::text('sigla',null,['class'=>'form-control', 'placeholder'=>'Ingrese la sigla de la materia del encargado']) !!}
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>