<div class="row text-center">
    <div class="col-md-2"></div>
  <div class="col-md-8">
    <?php $insertador = \Auth::user()->full_name; ?>
    <input type="hidden" name="insertador" value="{{ $insertador }}" />
    <input type="hidden" name="mecanico_id" value="{{ $id }}" />
    <li class="list-group-item list-group-item-success col-md-12">  
        <div class="col-md-5">
            <label>Serial</label>
            {!! Form::text('serial',null,['class'=>'form-control','value'=>'id','placeholder'=>'Ejm. FGHDFH3131']) !!}
              
        </div>
        <div class="col-md-7">
            <label>Fecha</label>
            <div class='input-group date ' id='datetimepicker1'>
                {!! Form::text('fecha',null,['class'=>'form-control', 'placeholder'=>'Fecha del trabajo','data-error'=>'Inserte la fecha Inicial','required']) !!}
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
            <center><div class="help-block with-errors"></div></center>
        </div>
    </li>
    <li class="list-group-item list-group-item-success col-md-12">  
        <div class="col-md-6">
            <label>Cantidad</label>
            {!! Form::number('cantidad',null,['class'=>'form-control','value'=>'id','placeholder'=>'Ejm. 1','data-error'=>'Inserte un número','required']) !!}
            <center><div class="help-block with-errors"></div></center>
        </div>
        <div class="col-md-6">
            <label>Nombre</label>
            {!! Form::text('nombre',null,['class'=>'form-control','value'=>'id','placeholder'=>'Ejm. Compra de llantas','data-error'=>'Inserte un nombre de la compra','required']) !!}
                <center><div class="help-block with-errors"></div></center>
        </div>
    </li>
    <li class="list-group-item list-group-item-success col-md-12">
        <div class="col-md-12">
            <label>Detalle</label>
            {!! Form::textarea('detalle',null,['class'=>'form-control','value'=>'id','data-error'=>'Inserte un trabajo','placeholder'=>'Realiza un detalle de la devolución.','required','rows'=>'2']) !!}
            <center><div class="help-block with-errors"></div></center>
        </div>
    </li>
    
  </div>
</div>
