<div class="list-group-item">
<div class="jumbotron ">
<div class="row">    
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <li class="list-group-item">
            <div class="form-group">
                <center>{!! Form::label('Chofer') !!}</center>
                {!! Form::select('chofer_id', $choferes, null, ['class' => 'form-control','placeholder'=>'Seleccione un Chofer','data-error'=>'Seleccione un Chofer','required','id'=>'chofer', 'value'=>'$choferes->id']) !!}
                <center><div class="help-block with-errors"></div></center>
            </div>
        </li>
    </div>
</div>
</div>
</div>