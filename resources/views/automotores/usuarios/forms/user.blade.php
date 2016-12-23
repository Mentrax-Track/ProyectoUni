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
<center><font color="red">■</font>Los campos de la letra color <font color = "green"><strong> VERDE </strong></font> son Obligatorios.<font color="red">■</font> Los campos de la letra color <font color = "#0830F7"><strong> AZUL </strong></font> son opcionales.</center>
    <div class="row">
        <li class="list-group-item list-group-item-warning col-md-12">
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
        </li>
    </div>
<div id="cero" class="element" style="display: none;"></div>
<div id="usuario" class="element" style="display: none;">
  {!! Form::open(['route'=>'users.store','method'=>'POST','data-toggle'=>'validator']) !!}
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
  <div class="row ">
    <ul class="list-group">
        <li class="list-group-item list-group-item-success col-md-12">
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
                    <center>{!! Form::label('Password:') !!}</center>
                    {!! Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingrese su password/clave', 'data-error'=>'La clave debe contener al menos 6 caracteres','required']) !!}
                    <center><div class="help-block with-errors"></div></center>
                </div>
            </div>
        </li>
        <li class="list-group-item list-group-item-success col-md-12">
            <div class="col-md-4">
                <div class="form-group">
                    <center>{!! Form::label('Cédula:') !!}</center>
                    {!! Form::text('cedula',null,['class'=>'form-control', 'placeholder'=>'Ingrese el CI del usuario','data-error'=>'La cédula es obligatorio...','required']) !!}
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
                    {!! Form::select('tipo', config('tipo.tipos'), null, ['class' => 'form-control','data-error'=>'Elija un tipo de usuario','placeholder'=>'Tipo de usuario','required','id'=>'tipou']) !!}
                    <center><div class="help-block with-errors"></div></center>
                </div>
            </div>
        </li>
        <li class="list-group-item list-group-item-info col-md-12">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="form-group">
                    <center>{!! Form::label('E-mail:(Opcional)') !!}</center>
                    {!! Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Ingrese el email del usuario','data-error'=>'Ingrese un email valido']) !!}
                    <center><div class="help-block with-errors"></div></center>
                </div>
            </div>
            <div class="col-md-4"></div>
        </li>
    </ul>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary btn-block">
                <span class="glyphicon glyphicon-floppy-save "> Registrar</span> 
            </button>        
        </div>
        <div class="col-md-4"></div>   
    </div>
  </div>
  {!! Form::close() !!}
</div>



<div id="encargado" class="element" style="display: none;">
  {!! Form::open(['route'=>'encar.store','method'=>'POST','data-toggle'=>'validator']) !!}
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
  <div class="row">
    <ul class="list-group">
        <li class="list-group-item list-group-item-success col-md-12">
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
        </li>
        <li class="list-group-item list-group-item-success col-md-12">
            <div class="col-md-3">
                <div class="form-group">
                    <center>{!! Form::label('Facultad:') !!}</center>
                 
                    {!! Form::text('facultad',null,['class'=>'js-example-responsive','data-error'=>'La Facultad es obligatorio...','style'=>'width: 148%','required','id'=>'facultad','placeholder'=>'Seleccione una Facultad']) !!}
                   
                    <center><div class="help-block with-errors"></div></center>
                     
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3">
                <div class="form-group">
                    <center>{!! Form::label('Carrera:') !!}</center>
               
                    {!! Form::text('carrera',null,['class'=>'js-example-responsive','data-error'=>'La Carrera es obligatorio...','style'=>'width: 148%','required','id'=>'carrera','placeholder'=>'Seleccione una Carrera']) !!}
               
                    <center><div class="help-block with-errors"></div></center>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4">
                <div class="form-group">
                    <center>{!! Form::label('Materia:') !!}</center>
                    {!! Form::text('materia',null,['class'=>'form-control', 'placeholder'=>'Ingrese la materia del encargado','data-error'=>'La Materia es obligatorio...','required']) !!}
                     <center><div class="help-block with-errors"></div></center>
                </div>
            </div>
        </li>
        <li class="list-group-item list-group-item-success col-md-12">
            <div class="col-md-3">
                <div class="form-group">
                    <center>{!! Form::label('Sigla:') !!}</center></font>
                    {!! Form::text('sigla',null,['class'=>'form-control', 'placeholder'=>'Ingrese la sigla del encargado','data-error'=>'La Sigla de la materia es obligatorio...','required']) !!}
                    <center><div class="help-block with-errors"></div></center>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <font color = "#0830F7"><center>{!! Form::label('E-mail:(Opcional)') !!}</center></font>
                    {!! Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Ingrese el email del usuario','data-error'=>'Ingrese un email valido']) !!}
                    <center><div class="help-block with-errors"></div></center>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <font color = "#0830F7"><center>{!! Form::label('Cédula:(Opcional)') !!}</center></font>
                    {!! Form::text('cedula',null,['class'=>'form-control', 'placeholder'=>'Ingrese la cédula del Encargado','data-error'=>'Ingrese la cédula del Encargado']) !!}
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
        </li>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary btn-block" >
                    <span class="glyphicon glyphicon-floppy-save ">   Registrar</span> 
                </button>        
            </div>
            <div class="col-md-4"></div>   
        </div>
    </ul>
  </div>
  {!! Form::close() !!}
</div>
</body>
