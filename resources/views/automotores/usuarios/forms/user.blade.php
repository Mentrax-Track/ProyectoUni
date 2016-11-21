<script type="text/javascript">
function mostrar(id) {
    
    if (id == "cero") 
    {
    }
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
                <center>{!! Form::label('tipo', 'Seleccione un Formulario') !!}</center>
                <select id="status" name="status" onChange="mostrar(this.value);" class="form-control">
                        <option value="cero"> Seleccione un Formulario</option>
                        <option value="usuario"> Registro General</option>
                        <option value="encargado"> Registro de Encargado</option>
                </select>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
<div id="cero" class="element" style="display: none;"></div>
<div id="usuario" class="element" style="display: none;">
 
    <center><h2><p class="www">Formulario Interno</p></h2></center>
    {!! Form::open(['route'=>'users.store','method'=>'POST','data-toggle'=>'validator']) !!}
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    <div class="panel panel-default">
    <div class="panel-body">
    <div class="jumbotron ">
        <div class="row ">
            <div class="col-md-4">
                <div class="form-group">
                    <center>{!! Form::label('Nombre:') !!}</center>
                    {!! Form::text('nombres',null,['class'=>'form-control', 'placeholder'=>'Ingrese el nombre del usuario','data-error'=>'El nombre es obligatorio...','required']) !!}
                     <center><div class="help-block with-errors"></div></center>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <center>{!! Form::label('Apellido:') !!}</center>
                    {!! Form::text('apellidos',null,['class'=>'form-control', 'placeholder'=>'Ingrese el apellido del usuario','data-error'=>'El apellido es obligatorio...','required']) !!}
                    <center><div class="help-block with-errors"></div></center>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <center>{!! Form::label('E-mail:(Opcional)') !!}</center>
                    {!! Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Ingrese el email del usuario','data-error'=>'Ingrese un email valido']) !!}
                    <center><div class="help-block with-errors"></div></center>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <center>{!! Form::label('Cedula:') !!}</center>
                    {!! Form::number('cedula',null,['class'=>'form-control', 'placeholder'=>'Ingrese el CI del usuario','data-error'=>'La cédula es obligatorio...','required']) !!}
                    <center><div class="help-block with-errors"></div></center>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <center>{!! Form::label('Celular:') !!}</center>
                    {!! Form::number('celular',null,['class'=>'form-control', 'placeholder'=>'Ingrese el celular del usuario','data-error'=>'El celular es obligatorio...','required']) !!}
                    <center><div class="help-block with-errors"></div></center>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <center>{!! Form::label('tipo', 'Tipo de usuario') !!}</center>
                    {!! Form::select('tipo', config('tipo.tipos'), null, ['class' => 'form-control','data-error'=>'Elija un tipo de usuario','required']) !!}
                    <center><div class="help-block with-errors"></div></center>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="form-group">
                    <center>{!! Form::label('Password:') !!}</center>
                    {!! Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingrese su password/clave', 'data-error'=>'La clave debe contener al menos 6 caracteres','required']) !!}
                    <center><div class="help-block with-errors"></div></center>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary btn-block" onClick="this.disabled='disabled'">
                    <span class="glyphicon glyphicon-floppy-save ">   Registrar</span> 
                </button>        
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
    {!! Form::open(['route'=>'encar.store','method'=>'POST','data-toggle'=>'validator']) !!}
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    <div class="panel panel-default">
    <div class="panel-body">
        <div class="jumbotron"> 
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <center>{!! Form::label('Nombre:') !!}</center>
                        {!! Form::text('nombres',null,['class'=>'form-control', 'placeholder'=>'Ingrese el nombre del usuario','data-error'=>'El nombre es obligatorio...','required']) !!}
                        <center><div class="help-block with-errors"></div></center>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <center>{!! Form::label('Apellido:') !!}</center>
                        {!! Form::text('apellidos',null,['class'=>'form-control', 'placeholder'=>'Ingrese el apellido del usuario','data-error'=>'El apellido es obligatorio...','required']) !!}
                         <center><div class="help-block with-errors"></div></center>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <center>{!! Form::label('Celular:') !!}</center>
                        {!! Form::number('celular',null,['class'=>'form-control', 'placeholder'=>'Ingrese el celular del usuario','data-error'=>'El celular es obligatorio...','required']) !!}
                         <center><div class="help-block with-errors"></div></center>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <center>{!! Form::label('Facultad:') !!}</center>
                        <center>
                        {!! Form::text('facultad',null,['class'=>'form-control','data-error'=>'La Facultad es obligatorio...','required','id'=>'facultad','placeholder'=>'Seleccione una Facultad']) !!}
                        </center>
                       <!-- <input id="facultad" class="form-control" placeholder="Seleccione una Facultad"/>-->
                         <center><div class="help-block with-errors"></div></center>
                         
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <center>{!! Form::label('Carrera:') !!}</center>
                        <center>
                        {!! Form::text('carrera',null,['class'=>'form-control','data-error'=>'La Carrera es obligatorio...','required','id'=>'carrera','placeholder'=>'Seleccione una Carrera']) !!}
                        </center>
                      <!-- <input id="carrera" class="form-control" placeholder="Seleccione una Carrera"/>-->
                         <center><div class="help-block with-errors"></div></center>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <center>{!! Form::label('Materia:') !!}</center>
                        {!! Form::text('materia',null,['class'=>'form-control', 'placeholder'=>'Ingrese el celular del usuario','data-error'=>'La Materia es obligatorio...','required']) !!}
                         <center><div class="help-block with-errors"></div></center>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-3">
                    <div class="form-group">
                        <center>{!! Form::label('Sigla:') !!}</center>
                        {!! Form::text('sigla',null,['class'=>'form-control', 'placeholder'=>'Ingrese la sigla del usuario','data-error'=>'La Sigla de la materia es obligatorio...','required']) !!}
                        <center><div class="help-block with-errors"></div></center>
                    </div>
                     
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <center>{!! Form::label('tipo', 'Tipo de usuario') !!}</center>
                        {!! Form::select('tipo', config('doce.doces'), null, ['class' => 'form-control','data-error'=>'Elija un tipo de usuario','required']) !!}
                        <center><div class="help-block with-errors"></div></center>
                    </div>
                     
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <center>{!! Form::label('Password:') !!}</center>
                        {!! Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingrese su password/clave', 'data-error'=>'La clave debe contener al menos 6 caracteres','required']) !!}
                        <center><div class="help-block with-errors"></div></center>
                    </div>
                     
                </div>
                <div class="col-md-1"></div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary btn-block" onClick="this.disabled='disabled'">
                        <span class="glyphicon glyphicon-floppy-save ">   Registrar</span> 
                    </button>        
                </div>
                <div class="col-md-4"></div>   
            </div>
        </div>
    </div>
    </div>
    {!! Form::close() !!}
</div>
</body>
