<div class="list-group-item">
<div class="jumbotron">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4">
            <div class="form-group">
                <center>{!! Form::label('Código:') !!}</center>
                {!! Form::text('codigo',null,['class'=>'form-control', 'placeholder'=>'Ingrese el código del vehiculo','data-error'=>'Inserte un Código de vehiculo','required']) !!}
                <center><div class="help-block with-errors"></div></center>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <center>{!! Form::label('Placa:') !!}</center>
                {!! Form::text('placa',null,['class'=>'form-control', 'placeholder'=>'Ingrese la placa del vehiculo','data-error'=>'Inserte una placa válida','required']) !!}
                <center><div class="help-block with-errors"></div></center>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4">
            <div class="form-group">
                <center>{!! Form::label('Numero de pasageros:') !!}</center>
                {!! Form::number('pasageros',null,['class'=>'form-control', 'placeholder'=>'Ingrese el numero de asientos disponibles','data-error'=>'Inserte el número de asientos','required']) !!}
                <center><div class="help-block with-errors"></div></center>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <center>{!! Form::label('Kilometraje:') !!}</center>
                {!! Form::number('kilometraje',null,['class'=>'form-control', 'placeholder'=>'Ingrese la cantidad de kilometros ','data-error'=>'Inserte el kilometraje vehicular','required']) !!}
                <center><div class="help-block with-errors"></div></center>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <center>{!! Form::label('Tipo:') !!}</center>
                {!! Form::select('tipo', config('opciones.types'),null,['class'=>'form-control','data-error'=>'Seleccione un tipo de vehiculo','required']) !!}
                <center><div class="help-block with-errors"></div></center>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <center>{!! Form::label('Estado:') !!}</center>
                {!! Form::select('estado',config('estados.estas'),null,['class'=>'form-control','data-error'=>'Seleccione el estado del vehiculo','required']) !!}
                <center><div class="help-block with-errors"></div></center>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <center>{!! Form::label('Color:') !!}</center>
                {!! Form::text('color',null,['class'=>'form-control', 'placeholder'=>'Ingrese los colores del vehiculo','data-error'=>'Inserte el color del vehiculo','required']) !!}
                <center><div class="help-block with-errors"></div></center>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="form-group">
                <center>{!!Form::label('Imagen del Vehiculo: ')!!}</center>
                {!!Form::file('path',['class'=>'btn btn-info btn-block'])!!}
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
    
</div>
</div>