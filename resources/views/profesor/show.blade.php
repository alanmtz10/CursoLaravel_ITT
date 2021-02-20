@extends('layout')

@section('titulo','Profesor ' . $profesor->nombre)

@section('links')
	<style>
		tr td:first-child {
			text-align: right;
		}
	</style>
@endsection

@section('contenido-header')
	<div class="row justify-content-between py-4">
		<div class="col-12">
			<h1 class="text-white text-center">Profesor {{ $profesor->nombre }}</h1>
		</div>
	</div>
@endsection

@section('contenido')
	<div class="row justify-content-center">
		<div class="col-8">
			<div class="card px-4 py-4">
				<div class="row mt-4">
					<div class="col-12">
						<h2 class="text-center m-0">Información</h2>
					</div>
				</div>
				<div class="row justify-content-center mt-4">
					<div class="col-auto">
						<table class="table">
							<tbody>
							<tr>
								<td><span class="h3">Nombre:</span></td>
								<td><span class="h3">{{ $profesor->nombre }}</span></td>
							</tr>
							<tr>
								<td><span class="h3">Carrera:</span></td>
								<td><span class="h3">{{ $profesor->carrera }}</span></td>
							</tr>
							<tr>
								<td><span class="h3">Edad:</span></td>
								<td><span class="h3">{{ $profesor->edad }}</span></td>
							</tr>
							<tr>
								<td><span class="h3">Status:</span></td>
								<td>
									<i class="fas fa-circle {{ $profesor->status ? 'text-success' : 'text-danger' }} mr-1"></i>
									<span class="h3">{{ $profesor->status ? 'Activo' : 'Inactivo' }}</span>
								</td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="row mt-4">
					<div class="col-12">
						<h2 class="text-center m-0">Grupos</h2>
					</div>
				</div>
				<div class="row justify-content-center mt-4">
					<div class="col-auto">
						<table class="table">
							<thead>
							<tr>
								<th>ID</th>
								<th>Materia</th>
								<th>Aula</th>
								<th>Horario</th>
								<th>Total de alumnos</th>
							</tr>
							</thead>
							<tbody>
							@forelse($grupos as $grupo)
								<tr>
									<td>
										<a href="{{ route('grupos.show',$grupo->id) }}">{{ $grupo->id }}</a>
									</td>
									<td>{{ $grupo->materia->nombre }}</td>
									<td>{{ $grupo->aula->nombre }}</td>
									<td>{{ $grupo->horario }}</td>
									<td>{{ $grupo->total_alumnos }}</td>
								</tr>
							@empty
								<tr>
									<td colspan="10">
										<div class="alert alert-danger">
											<h3 class="text-white text-center m-0">Aún no hay grupos</h3>
										</div>
									</td>
								</tr>
							@endforelse
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
