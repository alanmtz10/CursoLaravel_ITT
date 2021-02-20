@extends('layout')

@section('titulo', $mode['method'] == 'CREATE' ? 'Crear' : 'Editar' . ' aula')

@section('contenido-header')
	<div class="row justify-content-between py-4">
		<div class="col-12">
			<h1 class="text-white text-center">{{ $mode['method'] == 'CREATE' ? 'Crear' : 'Editar' }} aula</h1>
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
										<label for="nombre">Nombre</label>
										<input type="text" class="form-control" name="nombre"
												 value="{{ $mode['method'] == 'EDIT' ? $aula->nombre : ''  }}" required>
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
