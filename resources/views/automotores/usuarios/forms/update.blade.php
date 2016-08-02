
    <div class="panel panel-default">
    <div class="panel-body">
    <div class="jumbotron">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('Nombre:') !!}
                    {!! Form::text('nombres',null,['class'=>'form-control', 'placeholder'=>'Ingrese el nombre del usuario']) !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('Apellido:') !!}
                    {!! Form::text('apellidos',null,['class'=>'form-control', 'placeholder'=>'Ingrese el apellido del usuario']) !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('Password:') !!}
                    {!! Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingrese su password/clave']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('Facultad:') !!}
                    {!! Form::text('facultad',null,['class'=>'form-control', 'placeholder'=>'Ingrese la facultad del encargado']) !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('Carrera:') !!}
                    {!! Form::text('carrera',null,['class'=>'form-control', 'placeholder'=>'Ingrese la carrera del encargado']) !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('Materia:') !!}
                    {!! Form::text('materia',null,['class'=>'form-control', 'placeholder'=>'Ingrese la materia del encargado']) !!}
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('Sigla:') !!}
                    {!! Form::text('sigla',null,['class'=>'form-control', 'placeholder'=>'Ingrese la sigla de la materia del encargado']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('Email: (Opcional)') !!}
                    {!! Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Ingrese el email del usuario']) !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('Cedula:') !!}
                    {!! Form::text('cedula',null,['class'=>'form-control', 'placeholder'=>'Ingrese la cedula del usuario']) !!}
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('tipo', 'Tipo de usuario') !!}
                    {!! Form::select('tipo', config('completo.completos'), null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('Celular:') !!}
                    {!! Form::number('celular',null,['class'=>'form-control', 'placeholder'=>'Ingrese el celular del usuario']) !!}
                </div>
            </div>
        </div>
        
    </div>
    </div>
    </div>