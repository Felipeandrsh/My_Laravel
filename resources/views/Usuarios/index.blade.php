@extends('layout')

@section('contenido')
	
	<h2>Tabla de contenidos</h2>

	<div>
		<a class="btn btn-info btn-sm" href="{{ route('user.create')}}">Crear nuevo registro</a>
		<a class="btn btn-info btn-sm" href="#">Modificar registro</a>
	</div>

	<hr>

	<table width="100%">
		<thead >
			<tr>	
				<th>id</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>e-mail</th>
				
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach($persona as $persona)
			
				<tr>
					<td>{{$persona->id}}</td>
					<td>{{$persona->nombre}}</td>
					<td>{{$persona->apellido}}</td>
					<td>{{$persona->email}}</td>
					<td>
						<a class="btn btn-primary btn-sm" href="{{ route('user.show', $persona->id)}}">Ver</a>
						{{-- <a class="btn btn-info btn-sm" href="{{route('user.edit', $persona->id)}}">Editar</a>
						<form style="display:inline" method="POST" action="{{ route('user.destroy', $persona->id) }}">
							{!! csrf_field() !!}
							{!! method_field('DELETE') !!}
							<button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
						</form> --}}
					</td>
				</tr>

			@endforeach
		</tbody>
	</table>
@stop