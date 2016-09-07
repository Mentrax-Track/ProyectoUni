<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('Nombre y apellido del encargado :') !!}
            {!! Form::select('encargado[]',$encargados,$encargados,['class'=>'form-control','multiple'=>'multiple','id'=>'encargado']) !!}
                         </div>
    </div>
    <div class="col-md-2"></div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('Nombre y apellido del chofer: ') !!}
            {!! Form::select('chofer[]',$choferes,$choferes,['class'=>'form-control','multiple'=>'multiple','id'=>'chofer']) !!}
            </div>
    </div>
    <div class="col-md-1"></div>
</div>
<div class="row">
    <div class="col-md-1"></div>
    
    <div class="col-md-2"></div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('Vehiculo Destinado: ') !!}
            {!! Form::select('vehiculo[]',$vehiculos,$vehiculos,['class'=>'form-control','multiple'=>'multiple','id'=>'vehiculo']) !!}
           </div>
    </div>
    <div class="col-md-1"></div>
</div>



