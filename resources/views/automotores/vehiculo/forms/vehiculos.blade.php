<div class="list-group-item">
<div class="jumbotron">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4">
            <div class="form-group">
                <center>{!! Form::label('Código:') !!}</center>
                {!! Form::text('codigo',null,['class'=>'form-control', 'placeholder'=>'Ingrese el código del vehiculo']) !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <center>{!! Form::label('Placa:') !!}</center>
                {!! Form::text('placa',null,['class'=>'form-control', 'placeholder'=>'Ingrese la placa del vehiculo']) !!}
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4">
            <div class="form-group">
                <center>{!! Form::label('Numero de pasageros:') !!}</center>
                {!! Form::number('pasageros',null,['class'=>'form-control', 'placeholder'=>'Ingrese el numero de asientos disponibles']) !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <center>{!! Form::label('Kilometraje:') !!}</center>
                {!! Form::number('kilometraje',null,['class'=>'form-control', 'placeholder'=>'Ingrese la cantidad de kilometros ']) !!}
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <center>{!! Form::label('Tipo:') !!}</center>
                {!! Form::select('tipo', config('opciones.types'),null,['class'=>'form-control']) !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <center>{!! Form::label('Estado:') !!}</center>
                {!! Form::select('estado',config('estados.estas'),null,['class'=>'form-control']) !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <center>{!! Form::label('Color:') !!}</center>
                {!! Form::text('color',null,['class'=>'form-control', 'placeholder'=>'Ingrese los colores del vehiculo']) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="form-group">
                <center>{!!Form::label('Imagen del Vehiculo: ')!!}</center>
                {!!Form::file('path',['class'=>'btn btn-info btn-block' ])!!}
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
    
</div>
</div>