@extends('layout')

@section('titulo','Inicio')

@section('contenido-header')
	<div class="row justify-content-between py-2">
		<div class="col-12">
			<h1 class="text-white text-center">CRUD Alan Jaziel Martínez Mejia</h1>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-2">
			<div class="card">
				<div class="card-body">
					<div class="row justify-content-around">
						<div class="col">
							<h5 class="card-title text-uppercase text-muted m-0">Profesores</h5>
							<span class="h2 font-weight-bold m-0">{{ $stats[0] }}</span>
						</div>
						<div class="col-auto">
							<div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
								<i class="fas fa-chalkboard-teacher text-white"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-2">
			<div class="card">
				<div class="card-body">
					<div class="row justify-content-around">
						<div class="col">
							<h5 class="card-title text-uppercase text-muted m-0">Materias</h5>
							<span class="h2 font-weight-bold m-0">{{ $stats[1] }}</span>
						</div>
						<div class="col-auto">
							<div class="icon icon-shape bg-gradient-blue text-white rounded-circle shadow">
								<i class="fas fa-calculator text-white"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-2">
			<div class="card">
				<div class="card-body">
					<div class="row justify-content-around">
						<div class="col">
							<h5 class="card-title text-uppercase text-muted m-0">Aulas</h5>
							<span class="h2 font-weight-bold m-0">{{ $stats[2] }}</span>
						</div>
						<div class="col-auto">
							<div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
								<i class="fas fa-chalkboard text-white"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-2">
			<div class="card">
				<div class="card-body">
					<div class="row justify-content-around">
						<div class="col">
							<h5 class="card-title text-uppercase text-muted m-0">Grupos</h5>
							<span class="h2 font-weight-bold m-0">{{ $stats[3] }}</span>
						</div>
						<div class="col-auto">
							<div class="icon icon-shape bg-gradient-indigo text-white rounded-circle shadow">
								<i class="fas fa-users text-white"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('contenido')
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="row my-3">
					<div class="col-12">
						<h2 class="text-center">Laravel v. {{ App::version() }}</h2>
					</div>
				</div>
				<div class="row justify-content-center my-3">
					<div class="col-2">
						<img src="{{ asset('assets/img/logo.svg') }}" width="100%" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
