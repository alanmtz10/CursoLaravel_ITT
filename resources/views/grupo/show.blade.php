@extends('layout')

@section('titulo', $grupo->materia->nombre . ' - ' . $grupo->aula->nombre . ' - ' . $grupo->profesor->nombre)

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
			<h1 class="text-white text-center">
				Grupo {{ $grupo->materia->nombre . ' - ' . $grupo->aula->nombre . ' - ' . $grupo->profesor->nombre }}
			</h1>
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
								<td><span class="h3">Materia:</span></td>
								<td>
									<span class="h3">
										<a href="{{ route('materias.show',$grupo->materia_id) }}">{{ $grupo->materia->nombre }}</a>
									</span>
								</td>
							</tr>
							<tr>
								<td><span class="h3">Aula:</span></td>
								<td>
									<span class="h3">
										<a href="{{ route('aulas.show',$grupo->aula_id) }}">{{ $grupo->aula->nombre }}</a>
									</span>
								</td>
							</tr>
							<tr>
								<td><span class="h3">Profesor:</span></td>
								<td>
									<span class="h3">
										<a href="{{ route('profesores.show', $grupo->profe_id) }}">
											{{ $grupo->profesor->nombre }}
										</a>
									</span>
								</td>
							</tr>
							<tr>
								<td><span class="h3">Horario:</span></td>
								<td><span class="h3">{{ $grupo->horario }}</span></td>
							</tr>
							<tr>
								<td><span class="h3">Total de alumnos:</span></td>
								<td><span class="h3">{{ $grupo->total_alumnos }}</span></td>
							</tr>
							<tr>
								<td><span class="h3">Status:</span></td>
								<td>
									<i class="fas fa-circle {{ $grupo->status ? 'text-success' : 'text-danger' }} mr-1"></i>
									<span class="h3">{{ $grupo->status ? 'Activo' : 'Inactivo' }}</span>
								</td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
