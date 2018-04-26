<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Crud Laravel</title>
	<link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
	<style>
	.color{
		background-color: #fff;
	}
	</style>
</head>
<body>
	
			{{-- @extends('layouts.nav')	 --}}
<header>
	<nav class="navbar  color">
							{{-- <a href="{{route('home')}}" class="navbar-brand">
								<img src="{{ asset('/css/img/img_logo.jpg') }}" width="40" height="40" class="d-incline-block aling-top" align="Esto es un logo">
								<span class="logito">This is Laravel ;p</span>
							</a> --}}
		<div class="colapse navbar-colapse">
			<div class="navbar-nav">
				<a href="{{route('home')}}" class="navbar-item nav-link "> Home</a>
				<a href="{{route('user.create')}}" class="navbar-item nav-link"> Registro</a>
				<a href="{{route('user.index')}}" class="navbar-item nav-link"> Administrar</a>
				
			</div>
		</div>
	</nav>	
</header>
	
<br>
	<div class="container">
		
		@yield('contenido')


		<hr>
		<footer>Copyright ° {{ date('M Y') }}</footer>
	</div>

	{{-- <script src="js/bootstrap.js"></script> --}}
	<script src=" {{asset('js/jquery3.js')}} "></script>
    <script src=" {{asset('js/bootstrap.js')}} "></script>
    <script src=" {{asset('js/bootstrap.min.js')}} "></script>

</body>
</html>