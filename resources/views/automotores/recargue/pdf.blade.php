<?php use Infraestructura\Pedido; 
      use Infraestructura\Recargue;
      use Infraestructura\Gasolina;
      use Infraestructura\Diesel;
      use Infraestructura\Gnv; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Combustibles</title>
  {!! Html::style('css/pdf/recargas.css') !!}
</head>
<body>
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
            </div><!-- /.box-header -->
                <div id="client"><br /><br /><br /><br /><br /><br /><br /><br />
                    <header class="clearfix">
                      <div id="logo">
                        <center><img style="float:center;" src="img/uatf.jpg" width="70px"></center>
                      </div>
                      <h3><center><strong>UNIVERSIDAD AUTÓNOMA TOMÁS FRÍAS <br />DEPARTAMENTO DE INFRAESTRUCTURA <br /> SECCIÓN AUTOMOTORES </strong></center></h3>
                      <h4><center><strong>RECARGA DE COMBUSTIBLES</strong></center></h4>
                      <h4><center><strong>{{$date}} </strong></center></h4>
                    </header>
                </div>
                <div class="box-body">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th >#</th>
                            <th>Nro. <br /> Pedido</th>
                            <th>Fecha</th>
                            <th>Factura</th>
                            <th>Vehículo<br />Placa</th>
                            <th>Gasolina<br /> Litros</th>
                            <th>Diesel<br /> Litros</th>
                            <th>GNV<br /> m³</th>
                            <th>Precio<br /> Unitario</th>
                            <th>Total<br />Bs.</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $tog = 0;
                            $tod = 0;
                            $ton = 0; 
                            $totales = 0;?>
                            @foreach($recargues as $key => $com)
                                    <tr>
                                        <td ><center>{{ ++$key }}</center></td>
                                        <?php $i = $com->id; 
                                            $pedido = Pedido::where('recargue_id',$i)->first();
                                            //dd($pedido);
                                            $idg = $pedido->gasolina_id;
                                            $idd = $pedido->diesel_id;
                                            $idn = $pedido->gnv_id;
                                            //dd($idg);
                                            ?>
                                        <td ><center>{{ $pedido->numero }}</center></td>
                                        <td><center>{{ $com->fecha }}</center></td>
                                        <td><center>{{ $com->factura }}</center></td>
                                        <td>{{ $com->enviarVehiculo->full_vehiculo }}</td>
                                        <?php  
                                            $gaso = Gasolina::where('id',$idg)->first();
                                            $prec = 0;
                                            $tot = 0;
                                            //dd($gaso);
                                            if($gaso == null)
                                            {
                                                $litrosg=0;
                                            }else{
                                                $litrosg= $gaso->litros;
                                                $prec = $gaso->preciog;
                                                $tot  = $gaso->totalg;
                                                $tog = $tog+$litrosg;
                                            }
                                            //dd($litros);
                                            ?>
                                        <td><center>{{ $litrosg }}</center></td>
                                        <?php  
                                            $die = Diesel::where('id',$idd)->first();
                                            //dd($die);
                                            if($die == null)
                                            {
                                                 $litrosd=0;   
                                            }else{
                                                $litrosd= $die->litros;
                                                $prec = $die->preciod;
                                                $tot  = $die->totald;
                                                $tod = $tod+$litrosd;
                                            }
                                            //dd($litros);
                                            ?>
                                        <td><center>{{ $litrosd }}</center></td>
                                        <?php  
                                            $gn = Gnv::where('id',$idn)->first();
                                            if($gn != null)
                                            {
                                                $litrosn = $gn->litros;
                                                $prec = $gn->precion;
                                                $tot  = $gn->totaln;
                                                $ton = $ton+$litrosn;    
                                            }else{
                                                $litrosn=0;
                                            }
                                            //dd($litros);
                                            ?>
                                        <td><center>{{ $litrosn }}</center></td>
                                        <td><center>{{ $prec }}</center></td>
                                        <?php $totales = $totales+$tot; ?>
                                        <td><center>{{ $tot }}</center></td>
                                        
                                    </tr>
                            @endforeach                    
                        </tbody> 
                       </tr>
                    <tr>
                        <td colspan="5" align="right"><strong>Total:</strong></td>
                        <td colspan="1" align="right"><strong>{{ $tog }}</strong></td>
                        <td colspan="1" align="right"><strong>{{ $tod }}</strong></td>
                        <td colspan="1" align="right"><strong>{{ $ton }}</strong></td>
                        <td colspan="1"></td>
                        <td colspan="1" align="right"><strong>{{ $totales }} </strong></td>
                    </tr>
                  </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  
                </div>
              
                
            </div><!-- /.box --><br><br>
            <center>Sr. {{ $responsable }}<br />ENCARGADO DE AUTOMOTORES </center>
              
            </div>
            <footer>
      Sistema Web Departamento de Infraestructura U.A.T.F.
    </footer>
</body>
</html>





