<script type="text/javascript">
function mostrar(id) {
    
    if (id == "usuario") 
    {
        $("#usuario").show();
        $("#encargado").hide();
    }

    if (id == "encargado") 
    {
        $("#usuario").hide();
        $("#encargado").show();
    }
}
</script>

<body>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('tipo', 'Seleccione un Formulario') !!}
                <select id="status" name="status" onChange="mostrar(this.value);" class="form-control">
                        <option value="usuario"> Formulario 1</option>
                        <option value="encargado"> Formulario 2</option>
                </select>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>

<div id="usuario" class="element" style="display: none;">
 
    <center><h2><p class="www">Formulario Interno</p></h2></center>
    {!! Form::open(['route'=>'users.store','method'=>'POST']) !!}
    <div class="panel panel-default">
    <div class="panel-body">
    <div class="jumbotron ">
        <div class="row ">
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
                    {!! Form::label('E-mail:(Opcional)') !!}
                    {!! Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Ingrese el email del usuario']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('Cedula:') !!}
                    {!! Form::number('cedula',null,['class'=>'form-control', 'placeholder'=>'Ingrese el CI del usuario']) !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('Celular:') !!}
                    {!! Form::number('celular',null,['class'=>'form-control', 'placeholder'=>'Ingrese el celular del usuario']) !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('tipo', 'Tipo de usuario') !!}
                    {!! Form::select('tipo', config('tipo.tipos'), null, ['class' => 'form-control']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('Password:') !!}
                    {!! Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingrese su password/clave']) !!}
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                {!! Form::submit('Registrar',['class'=>'btn btn-primary btn-sm btn-block']) !!}        
            </div>
            <div class="col-md-4"></div>   
        </div>
    </div>
    </div>
    </div>
    {!! Form::close() !!}
</div>



<div id="encargado" class="element" style="display: none;">

    <center><h2><p class="www">Formulario para el Encargado de Viaje</p></h2></center>
    {!! Form::open(['route'=>'encar.store','method'=>'POST']) !!}
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
                    {!! Form::label('Celular:') !!}
                    {!! Form::number('celular',null,['class'=>'form-control', 'placeholder'=>'Ingrese el celular del usuario']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('Facultad:') !!}
                    {!! Form::text('facultad',null,['class'=>'form-control', 'placeholder'=>'Ingrese el CI del usuario']) !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('Carrera:') !!}
                    {!! Form::text('carrera',null,['class'=>'form-control', 'placeholder'=>'Ingrese el celular del usuario']) !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('Materia:') !!}
                    {!! Form::text('materia',null,['class'=>'form-control', 'placeholder'=>'Ingrese el celular del usuario']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('Sigla:') !!}
                    {!! Form::text('sigla',null,['class'=>'form-control', 'placeholder'=>'Ingrese la sigla del usuario']) !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('tipo', 'Tipo de usuario') !!}
                    {!! Form::select('tipo', config('doce.doces'), null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('Password:') !!}
                    {!! Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingrese su password/clave']) !!}
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                {!! Form::submit('Registrar',['class'=>'btn btn-primary btn-sm btn-block']) !!}        
            </div>
            <div class="col-md-4"></div>   
        </div>
    </div>
    </div>
    </div>
    {!! Form::close() !!}
</div>

