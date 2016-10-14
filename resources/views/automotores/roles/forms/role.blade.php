<div class="list-group-item">
<div class="jumbotron text-center ">
<div class="row">
    <div class="col-md-4">
        <li class="list-group-item">
            <div class="form-group">
                <center>{!! Form::label('Chofer') !!}</center>
                {!! Form::text('chofer_id', $rol->enviarChofer->full_name, ['class' => 'form-control','data-error'=>'Seleccione un Chofer','disabled']) !!}
                <center><div class="help-block with-errors"></div></center>
            </div>
        </li>
    </div>
    <div class="col-md-4">
        <li class="list-group-item">
            <div class="form-group">
               <center>{!! Form::label('Tipo de Viaje') !!}</center>
               {!! Form::select('tipo', 
               [
                    'Viaje de tipo A' => ['ciudad'   => 'Ciudad (A)'],
                    'Viaje de tipo B' => ['provincia'=> 'Provincia (B)'],
                    'Viaje de tipo C' => ['frontera' => 'Frontera (C)'],
               ],null,['class' => 'form-control','placeholder'=>'Seleccione un tipo de Viaje','data-error'=>'Seleccione un Chofer']) !!}
               <center><div class="help-block with-errors"></div></center>
            </div>
        </li>
        <li class="list-group-item">
            <div class="form-group">
                <center>{!! Form::label('Lugar') !!}</center>
                {!! Form::text('lugar', null, ['class' => 'form-control','placeholder'=>'Inserte el lugar del viaje','data-error'=>'Seleccione un Chofer','required']) !!}
                <center><div class="help-block with-errors"></div></center>
            </div>
        </li>
    </div>
    <div class="col-md-4">
        <li class="list-group-item">
            <div class="form-group"><?php $fecha = date('Y-m-d h:m:s'); ?>
                {!! Form::label('Fecha:') !!}
                <div class='input-group date ' id='datetimepicker6'>
                    {!! Form::text('fecha',$fecha,['class'=>'form-control', 'placeholder'=>'Ingrese la fecha','data-error'=>'Inserte la fecha Inicial']) !!}
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </li>
    </div>
</div>
</div>
</div>