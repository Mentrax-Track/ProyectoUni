<div class="panel panel-default">
    <div class="panel-body text-center jumbotron">
          
            <div class="form-group">
                <label class="control-label" for="codig">Código:</label>
                {!! Form::text('codigo',null,['class'=>'form-control', 'placeholder'=>'Ejm. V-5','id'=>'codig','data-error'=>'Inserte el código del vehículo','required']) !!}
                <center><div class="help-block with-errors"></div></center>
            </div>
            <div class="form-group">
                <label class="control-label" for="plac">Placa:</label>
                {!! Form::text('placa',null,['class'=>'form-control', 'placeholder'=>'Ejm. 3027-TRL','id'=>'plac','data-error'=>'Inserte la placa del vehículo','required']) !!}
                <center><div class="help-block with-errors"></div></center>
            </div>
            <div class="form-group">
                <label class="control-label" for="colo">Color:</label>
                {!! Form::text('color',null,['class'=>'form-control','placeholder'=>'Ejm. Blanco','id'=>'colo','data-error'=>'Inserte el color del vehículo','required']) !!}
                <center><div class="help-block with-errors"></div></center>
            </div><hr>

            <div class="form-group">
                <label class="control-label">Motor:</label>
                {!! Form::text('motor',$marca->motor,['class'=>'form-control','placeholder'=>'Serie del motor','data-error'=>'Inserte la serie del motor','required']) !!}
                          <center><div class="help-block with-errors"></div></center>
            </div>
            <div class="form-group">
                <label class="control-label" >Chasis:</label>
                {!! Form::text('chasis',$marca->chasis,['class'=>'form-control','placeholder'=>'Serie del Chasis','data-error'=>'Inserte la serie del chasis','required']) !!}
                <center><div class="help-block with-errors"></div></center>
            </div>
            <div class="form-group">
                <label class="control-label">Cilindrada:</label>
                {!! Form::number('cilindrada',$marca->cilindrada,['class'=>'form-control','placeholder'=>'Ejm. 3000','data-error'=>'Inserte el número de cilindrada','required',]) !!}
                <center><div class="help-block with-errors"></div></center>
            </div><hr>
            
            <div class="form-group">
                <label class="control-label"> Pasajeros:</label>
                {!! Form::number('pasajeros',null,['class'=>'form-control','placeholder'=>'Ejm. 50','data-error'=>'Inserte el múmero de pasajeros','required']) !!}
                          <center><div class="help-block with-errors"></div></center>
            </div>
            <div class="form-group">
                <label class="control-label" > Kilometraje:</label>
                {!! Form::number('kilometraje',$modelo->kilometraje,['class'=>'form-control','placeholder'=>'Ejm. 22015','data-error'=>'Inserte el kilometraje del vehículo']) !!}
                <center><div class="help-block with-errors"></div></center>
            </div><div class="form-group">
                <label class="control-label"> Estado:</label>
                {!! Form::select('estado',config('vehiculos.estados'),null,['class'=>'js-example-responsive','style'=>'width: 100%','placeholder'=>'Seleccione un estado','data-error'=>'Inserte el estado del vehículo','required']) !!}
                <center><div class="help-block with-errors"></div></center>
            </div><hr>
        
            <div class="form-group">
                <label class="control-label" >Tipo general:</label>
                {!! Form::text('tipog',null,['class'=>'form-control','placeholder'=>'Ejm. Vagoneta','id'=>'tipog','data-error'=>'Inserte el motor del vehículo','required']) !!}
                <center><div class="help-block with-errors"></div></center>
            </div>&ensp;&ensp;
            <div class="form-group">
                <label class="control-label" >Marca:</label>
                {!! Form::text('marca',$marca->marca,['class'=>'form-control','placeholder'=>'Ejm. Toyota','id'=>'mar','data-error'=>'Inserte el chasis del vehículo','required']) !!}
                <center><div class="help-block with-errors"></div></center>
            </div>&ensp;&ensp;
            <div class="form-group">
                <label class="control-label" >Modelo:</label>
                {!! Form::number('modelo',$modelo->modelo,['class'=>'form-control','placeholder'=>'Ejm. 2002','id'=>'model','data-error'=>'Inserte el modelo del vehículo','required']) !!}
                <center><div class="help-block with-errors"></div></center>
            </div>&ensp;&ensp;  
            <div class="form-group">
                <label class="control-label" >Tipo especifico:</label>
                {!! Form::text('tipoe',$modelo->tipoe,['class'=>'form-control','placeholder'=>'Ejm. Patrol','id'=>'tipoe','data-error'=>'Inserte el tipo especifo','required']) !!}
                <center><div class="help-block with-errors"></div></center>
            </div>
    </div>
</div>