<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use App\Models\Grupo;
use App\Models\Materia;
use App\Models\Profesor;
use Illuminate\Http\Request;

class GrupoController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @param Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request)
	{
		if ($request->has('index') && $request->index == 'deleted') {
			$grupos = Grupo::where('status', 0)->get();
		} else {
			$grupos = Grupo::where('status', 1)->get();
		}

		return view('grupo.index', compact(['grupos']));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		$mode = [
			'url' => route('grupos.store'),
			'method' => 'CREATE'
		];

		$materias = Materia::where('status', 1)->get();
		$aulas = Aula::where('status', 1)->get();
		$profesores = Profesor::where('status', 1)->get();

		return view('grupo.create', compact(['mode', 'materias', 'aulas', 'profesores']));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$grupo = new Grupo($request->all());
		$grupo->save();

		return back()->with([
			'message' => 'Grupo creado correctamente'
		]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param \App\Models\Grupo $grupo
	 * @return \Illuminate\Http\Response
	 */
	public function show(Grupo $grupo)
	{
		return view('grupo.show', compact(['grupo']));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param \App\Models\Grupo $grupo
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Grupo $grupo)
	{
		$mode = [
			'url' => route('grupos.update', $grupo->id),
			'method' => 'EDIT'
		];

		$materias = Materia::where('status', 1)->get();
		$aulas = Aula::where('status', 1)->get();
		$profesores = Profesor::where('status', 1)->get();

		return view('grupo.create', compact(['grupo', 'mode', 'materias', 'aulas', 'profesores']));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param \App\Models\Grupo $grupo
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Grupo $grupo)
	{
		$grupo->update($request->all());
		$grupo->save();

		return back()->with([
			'message' => 'Grupo actualizado correctamente'
		]);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param \App\Models\Grupo $grupo
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Grupo $grupo)
	{
		$grupo->status = 0;
		$grupo->save();

		return back()->with([
			'message' => 'Grupo eliminado correctamente'
		]);
	}
}
