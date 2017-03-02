

<div class="row">    
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <li class="list-group-item list-group-item-success">
            <div class="row">
                <center>
                    <?php if ($capital==null) 
                    {
                        $re = 0;
                        $arrayMeses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
                           'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
                        $arrayDias = array( 'Domingo', 'Lunes', 'Martes',
                               'Miercoles', 'Jueves', 'Viernes', 'Sabado');
                        $date = $arrayDias[date('w')].", ".date('d')." de ".$arrayMeses[date('m')-1]." de ".date('Y');

                    }else{
                        $re = $capital->total;
                        $date = $capital->fecha;
                    }
                    ?>
                    Usted cuenta con un capital de <strong><font color="red">{{$re}}</font></strong>,
                    actualizado en fecha: <strong><font color="blue">{{$date}}</font></strong>
                </center>
                <input type="hidden" name="hay" id="hay" value="{{ $re }}" />
                <input type="hidden" name="fecha" id="fecha" value="{{ $date }}" />
            </div>
        </li>
        <li class="list-group-item list-group-item-success">
            <div class="row">
                <center>
                    <div class="btn-group col-md-2" role="group">  
                    </div>
                    <div class="btn-group col-md-4" role="group">
                        {!! Form::label('Monto: ') !!}
                        <div class="input-group">
                            {!! Form::number('monto',null, ['class' => 'form-control','placeholder'=>'Ejm. 2000','id'=>'monto','onkeyup'=>'sumar();','data-error'=>'Inserte un número','required']) !!}
                            <center><div class="help-block with-errors"></div></center>
                            <span class="input-group-addon" id="basic-addon3">Bs.</span>
                        </div>   
                    </div>
                    <div class="btn-group col-md-4" role="group">
                        {!! Form::label('Total Bs.:') !!}
                        {!! Form::text('total',null, ['class' => 'form-control','id'=>'total',' value'=>'0','readonly'=>'readonly']) !!}
                        <center><div class="help-block with-errors"></div></center>
                    
                    </div>
                </center>
            </div>
        </li>
    </div>
</div>



