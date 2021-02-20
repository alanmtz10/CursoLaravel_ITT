@extends('layout')

@section('titulo', $mode['method'] == 'CREATE' ? 'Crear' : 'Editar' . ' grupo')

@section('contenido-header')
	<div class="row justify-content-between py-4">
		<div class="col-12">
			<h1 class="text-white text-center">{{ $mode['method'] == 'CREATE' ? 'Crear' : 'Editar' }} grupo</h1>
		</div>
	</div>
@endsection

@section('contenido')
	<div class="row justify-content-center">
		<div class="col-5">
			<div class="card py-4">
				@if(Session::has('message'))
					<div class="row">
						<div class="col-12 px-5">
							<div class="alert alert-success">
								<h3 class="text-center m-0">
									{{ Session::get('message') }}
								</h3>
							</div>
						</div>
					</div>
				@endif
				<div class="row">
					<div class="col-12 px-5">
						<form action="{{ $mode['url'] }}" method="POST">
							@csrf
							@if($mode['method'] == 'EDIT')
								@method('PUT')
							@endif
							<div class="form-row">
								<div class="col-12">
									<div class="form-group">
										<label for="materia_id">Materia</label>
										<select name="materia_id" class="form-control" required>
											<option value="0" disabled {{ $mode['method'] == 'CREATE' ? 'selected' : '' }}>
												Seleccione una materia
											</option>
											@foreach($materias as $materia)
												<option value="{{ $materia->id }}"
													{{ $mode['method'] == 'EDIT' && $grupo->materia_id == $materia->id ? 'selected' : '' }}>
													{{ $materia->nombre }}
												</option>
											@endforeach
										</select>
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="col-12">
									<div class="form-group">
										<label for="aula_id">Aula</label>
										<select name="aula_id" class="form-control" required>
											<option value="0" disabled {{ $mode['method'] == 'CREATE' ? 'selected' : '' }}>
												Seleccione una aula
											</option>
											@foreach($aulas as $aula)
												<option value="{{ $aula->id }}"
													{{ $mode['method'] == 'EDIT' && $grupo->aula_id == $aula->id ? 'selected' : '' }}>
													{{ $aula->nombre }}
												</option>
											@endforeach
										</select>
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="col-12">
									<div class="form-group">
										<label for="profe_id">Profesor</label>
										<select name="profe_id" class="form-control" required>
											<option value="0" disabled {{ $mode['method'] == 'CREATE' ? 'selected' : '' }}>
												Seleccione un profesor
											</option>
											@foreach($profesores as $profesor)
												<option value="{{ $profesor->id }}"
													{{ $mode['method'] == 'EDIT' && $grupo->profe_id == $profesor->id ? 'selected' : '' }}>
													{{ $profesor->nombre }}
												</option>
											@endforeach
										</select>
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="col-12">
									<div class="form-group">
										<label for="horario">Horario</label>
										<input type="text" class="form-control" name="horario"
												 value="{{ $mode['method'] == 'EDIT' ? $grupo->horario : '' }}" required>
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="col-12">
									<div class="form-group">
										<label for="total_alumnos">Total alumnos</label>
										<input type="number" min="1" class="form-control" name="total_alumnos"
												 value="{{ $mode['method'] == 'EDIT' ? $grupo->total_alumnos : '' }}" required>
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="col-12">
									<button class="btn btn-block btn-primary">
										<i class="far fa-save"></i> Guardar
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
