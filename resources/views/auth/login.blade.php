@extends('autoLayout')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading text-center">
					<a href=""><p class="www"><h4>Iniciar Sesión</h4></p></a>
				</div>
				<div class="panel-body">
					<p class="centered text-center"><img class="img-circle" width="120" src="/img/uatf.jpg"><br><br><strong><center><h4>DEPARTAMENTO DE INFRAESTRUCTURA</h4></center></strong></p><br>
					@include('alertas.request')
					<div class="sombra">
						<form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}" data-toggle="validator">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">

							<div class="form-group">
								<label class="col-md-4 control-label">Cédula de Identidad:</label>
								<div class="col-md-6">
								    {!! Form::number('cedula', null, ['class' => 'form-control','placeholder'=>'Ingrese su Cédula de Identidad','data-error'=>'La cédula de identidad es obligatorio','required']) !!}
								    <center><div class="help-block with-errors"></div></center>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Contraseña:</label>
								<div class="col-md-6">
							    	{!! Form::password('password', ['class' => 'form-control','placeholder'=>'Ingrese su contraseña','data-error'=>'La contraseña es obligatorio','required']) !!}
							    	<center><div class="help-block with-errors"></div></center>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									<button type="submit" class="btn btn-primary btn-block btn-sm" style="margin-right: 80px;">
										<h4><p>Ingresar</p></h4>
									</button>
									<center><a href="/password/email">¿Olvidaste tu contraseña?</a></center>									
								</div>
							</div>
						</form> 
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>
@endsection
