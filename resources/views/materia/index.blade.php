@extends('layout')

@section('titulo','Materias')

@section('contenido-header')
	<div class="row justify-content-between py-4">
		<div class="col-auto">
			<h2 class="text-white">Materias {{ Request::has('index') ? ' eliminadas' : '' }}</h2>
		</div>
		<div class="col-auto">
			@if(Request::has('index'))
				<a href="{{ route('materias.index') }}" class="btn btn-sm btn-success">
					Ver activos
				</a>
			@else
				<a href="{{ route('materias.index',['index'=>'deleted']) }}" class="btn btn-sm btn-danger">
					Ver eliminados
				</a>
			@endif
			<a href="{{ route('materias.create') }}" class="btn btn-sm btn-secondary">
				<i class="fas fa-plus"></i>
				Agregar
			</a>
		</div>
	</div>
@endsection

@section('contenido')
	<div class="row">
		<div class="col-12">
			<div class="card">
				@if(Session::has('message'))
					<div class="row my-3">
						<div class="col-12 px-5">
							<div class="alert alert-success m-0">
								<h3 class="text-center m-0">
									{{ Session::get('message') }}
								</h3>
							</div>
						</div>
					</div>
			@endif
			<!-- Light table -->
				<div class="table-responsive">
					<table class="table align-items-center table-flush">
						<thead class="thead-light">
						<tr>
							<th scope="col">ID</th>
							<th scope="col">Nombre</th>
							<th scope="col">Descripción</th>
							<th scope="col">Status</th>
							<th scope="col">Fecha de creación</th>
							<th scope="col">Acciones</th>
						</tr>
						</thead>
						<tbody class="list">
						@forelse($materias as $p)
							<tr>
								<td>{{ $p->id }}</td>
								<td>{{ $p->nombre }}</td>
								<td>{{ $p->descripcion }}</td>
								<td>
									<span class="badge badge-dot mr-4">
										<i class="{{ $p->status ? 'bg-success' : 'bg-danger' }}"></i>
										<span class="status">{{ $p->status ? 'Activo' : 'Inactivo' }}</span>
									</span>
								</td>
								<td>
									<span data-toggle="tooltip" data-placement="top"
											title="{{ $p->created_at->format('d/M/Y H:m') }}">
										{{ $p->created_at->diffForHumans() }}
									</span>
								</td>
								<td>
									<span class="mx-2">
										<a href="{{ route('materias.show',$p->id) }}" data-toggle="tooltip" data-placement="top"
											title="Ver">
											<i class="far fa-eye text-success"></i>
										</a>
									</span>
									<span class="mx-2">
										<a href="{{ route('materias.edit', $p->id) }}" data-toggle="tooltip"
											data-placement="top" title="Editar">
											<i class="fas fa-user-edit text-primary"></i>
										</a>
									</span>
									@if(!Request::has('index'))
										<span class="mx-2">
											<form style="display: inline-block" action="{{ route('materias.destroy', $p->id) }}"
													method="POST">
												@csrf
												@method('DELETE')
												<button style="border: none; background: none" class="p-0"
														  data-toggle="tooltip" data-placement="top" title="Eliminar">
													<i class="fas fa-trash-alt text-danger"></i>
												</button>
											</form>
										</span>
									@endif
								</td>
							</tr>
						@empty
							<tr>
								<td colspan="10">
									<div class="alert alert-danger">
										<h3 class="text-white text-center m-0">Aún no hay registros</h3>
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
@endsection
