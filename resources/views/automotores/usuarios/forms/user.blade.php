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
                    <center>{!! Form::label('E-mail:(Opcional)') !!}</center>
                    {!! Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Ingrese el email del usuario']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <center>{!! Form::label('Cedula:') !!}</center>
                    {!! Form::number('cedula',null,['class'=>'form-control', 'placeholder'=>'Ingrese el CI del usuario']) !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <center>{!! Form::label('Celular:') !!}</center>
                    {!! Form::number('celular',null,['class'=>'form-control', 'placeholder'=>'Ingrese el celular del usuario']) !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <center>{!! Form::label('tipo', 'Tipo de usuario') !!}</center>
                    {!! Form::select('tipo', config('tipo.tipos'), null, ['class' => 'form-control']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="form-group">
                    <center>{!! Form::label('Password:') !!}</center>
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
                    <center>{!! Form::label('Celular:') !!}</center>
                    {!! Form::number('celular',null,['class'=>'form-control', 'placeholder'=>'Ingrese el celular del usuario']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <center>{!! Form::label('Facultad:') !!}</center>
                    {!! Form::text('facultad',null,['class'=>'form-control', 'placeholder'=>'Ingrese el CI del usuario']) !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <center>{!! Form::label('Carrera:') !!}</center>
                    {!! Form::text('carrera',null,['class'=>'form-control', 'placeholder'=>'Ingrese el celular del usuario']) !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <center>{!! Form::label('Materia:') !!}</center>
                    {!! Form::text('materia',null,['class'=>'form-control', 'placeholder'=>'Ingrese el celular del usuario']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3">
                <div class="form-group">
                    <center>{!! Form::label('Sigla:') !!}</center>
                    {!! Form::text('sigla',null,['class'=>'form-control', 'placeholder'=>'Ingrese la sigla del usuario']) !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <center>{!! Form::label('tipo', 'Tipo de usuario') !!}</center>
                    {!! Form::select('tipo', config('doce.doces'), null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <center>{!! Form::label('Password:') !!}</center>
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

