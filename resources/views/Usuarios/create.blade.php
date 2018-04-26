@extends('layout')

@section('contenido')
	<br>
	<h2>Registrate</h2>
	<p>Para regsitrarse debe completar el siguente formulario.</p>

	<div class="row">
		<div class="col-6">
			<form action="{{ route('user.store') }}" method="post">
				{!! csrf_field() !!}  
				<div class="form-group">
					<label for="">Nombre:</label>
					<input type="text" name="nombre" placeholder="Ingresa tu nombre..." class="form-control" value="{{ old('nombre') }}" required="">
					{{$errors->first('nombre')}}
				</div>
				<div class="form-group">
					<label for="">Apellido:</label>
					<input type="text" name="apellido" placeholder="Ingresa tu apellido..." class="form-control" value="{{ old('apellido') }}" required="">
					{{$errors->first('apellido')}}
				</div>
				<div class="form-group">
					<label for="">e-mail</label>
					<input type="email" name="email" placeholder="Ingresa tu correo electronico..." class="form-control" value="{{ old('email') }}" required="">
					{{$errors->first('email')}}
				</div>
				<div class="form-group">
					<label for="">Contraseña</label>
					<input type="password" name="contrasena" placeholder="Ingresa una contraseña..." class="form-control" value="{{ old('contrasena') }}" required="">
					{{$errors->first('contrasena')}}
				</div>
				<div>
					<button class="btn-danger">Enviar</button>
				</div>
			</form>
		</div>
	</div>
@endsection