<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
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
			$materias = Materia::where('status', 0)->get();
		} else {
			$materias = Materia::where('status', 1)->get();
		}

		return view('materia.index', compact(['materias']));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		$mode = [
			'url' => route('materias.store'),
			'method' => 'CREATE'
		];

		return view('materia.create', compact(['mode']));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$materia = new Materia($request->all());
		$materia->save();

		return back()->with([
			'message' => 'Materia creada correctamente'
		]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param \App\Models\Materia $materia
	 * @return \Illuminate\Http\Response
	 */
	public function show(Materia $materia)
	{
		$grupos = $materia->grupos()->where('status', 1)->get();
		return view('materia.show', compact(['materia', 'grupos']));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param \App\Models\Materia $materia
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Materia $materia)
	{
		$mode = [
			'url' => route('materias.update', $materia->id),
			'method' => 'EDIT'
		];

		return view('materia.create', compact(['mode', 'materia']));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param \App\Models\Materia $materia
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Materia $materia)
	{
		$materia->update($request->all());

		return back()->with([
			'message' => 'Materia actualizada correctamente'
		]);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param \App\Models\Materia $materia
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Materia $materia)
	{
		$materia->status = 0;
		$materia->save();

		return back()->with([
			'message' => 'Materia eliminada correctamente'
		]);
	}
}
