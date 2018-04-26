@extends('layout')

@section('contenido')



	<h3>Editar a {{ $varUser->nombre}}</h3>

	<p>Complete el siguente formulario.</p>

	<div class="row">
		<div class="col-6">
			<form action="{{ route('user.update', $varUser->id) }}" method="post">
				{!! csrf_field() !!} {{ method_field('PUT') }} 
				<div class="form-group">
					<label for="">Nombre:</label>
					<input type="text" name="nombre" placeholder="Ingresa tu nombre..." class="form-control" value="{{ $varUser->nombre}}" required="">
					{{$errors->first('nombre')}}
				</div>
				<div class="form-group">
					<label for="">Apellido:</label>
					<input type="text" name="apellido" placeholder="Ingresa tu apellido..." class="form-control" value="{{ $varUser->apellido }}" required="">
					{{$errors->first('apellido')}}
				</div>
				<div class="form-group">
					<label for="">e-mail</label>
					<input type="email" name="email" placeholder="Ingresa tu correo electronico..." class="form-control" value="{{$varUser->email}}" required="">
					{{$errors->first('email')}}
				</div>
				<div class="form-group">
					
					<input type="hidden" name="contrasena" placeholder="Ingresa una contraseña..." class="form-control" value="{{ $varUser->contrasena}}" required="">
					{{$errors->first('contrasena')}}
				</div>
				<div>
					<button class="btn btn-danger ">Enviar</button>
				</div>
			</form>
		</div>
	</div>
	
@stop