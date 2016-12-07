@extends('autoLayout')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"><center><h4><p class="www">Restablecer la Contraseña</p></h4></center></div>
				<div class="panel-body">
					<p class="centered text-center"><img class="img-circle" width="120" src="/img/uatf.jpg"><br><br><strong><center><h4>DEPARTAMENTO DE INFRAESTRUCTURA</h4></center></strong></p><br>
					@if (session('status'))
						<div class="alert alert-success">
							{{ session('status') }}
						</div>
					@endif

					@include('alertas.request')

					<div class="sombra">
						<form class="form-horizontal" role="form" method="POST" action="/password/email" data-toggle="validator">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">

							<div class="form-group">
								<label class="col-md-4 control-label">Dirección de correo electrónico</label>
								<div class="col-md-6">
									<input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Ingrese su cuenta de email" data-error="Este campo es Obligatorio" required>
									<center><div class="help-block with-errors"></div></center>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									<center>
										<button type="submit" class="btn btn-primary ">
											Enviar un enlace para restablecer mi contraseña 
										</button>
									</center>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
