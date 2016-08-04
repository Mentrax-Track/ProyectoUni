<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('Código:') !!}
            {!! Form::text('codigo',null,['class'=>'form-control', 'placeholder'=>'Ingrese el código del vehiculo']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('Placa:') !!}
            {!! Form::text('placa',null,['class'=>'form-control', 'placeholder'=>'Ingrese la placa del vehiculo']) !!}
        </div>
    </div>
    <div class="col-md-2"></div>
</div>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('Numero de asientos:') !!}
            {!! Form::number('numero',null,['class'=>'form-control', 'placeholder'=>'Ingrese el numero de asientos disponibles']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('Kilometraje:') !!}
            {!! Form::number('kilometraje',null,['class'=>'form-control', 'placeholder'=>'Ingrese la cantidad de kilometros ']) !!}
        </div>
    </div>
    <div class="col-md-2"></div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('Tipo:') !!}
            {!! Form::select('tipo', config('opciones.types'),null,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('Estado:') !!}
            {!! Form::select('estado',config('estados.estas'),null,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('Color:') !!}
            {!! Form::text('color',null,['class'=>'form-control', 'placeholder'=>'Ingrese los colores del vehiculo']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="form-group">
            {!!Form::label('Poster','Imagen: ')!!}
            {!!Form::file('path',['class'=>'btn btn-info btn-block' ])!!}
        </div>
    </div>
    <div class="col-md-4"></div>
</div>
        