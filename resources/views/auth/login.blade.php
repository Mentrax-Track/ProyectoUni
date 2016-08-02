@extends('autoLayout')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Iniciar Sesión</div>
				<div class="panel-body">
					@include('alertas.request')

					<form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">{{ trans('validation.attributes.cedula') }}</label>
							<div class="col-md-6">
							    {!! Form::number('cedula', null, ['class' => 'form-control', 'type' => 'number']) !!}
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">{{ trans('validation.attributes.password') }}</label>
							<div class="col-md-6">
						    	{!! Form::password('password', ['class' => 'form-control']) !!}
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> Recuérdame
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary" style="margin-right: 15px;">
									Ingresar
								</button>

								<a href="/password/email">¿Olvidaste tu contraseña?</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
