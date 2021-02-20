<?php

namespace App\Http\Controllers;

use App\Models\Grupo;
use App\Models\Profesor;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProfesorController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @param Request $request
	 * @return Application|Factory|View|Response
	 */
	public function index(Request $request)
	{
		if ($request->has('index') && $request->index == 'deleted') {
			$profesores = Profesor::where('status', 0)->get();
		} else {
			$profesores = Profesor::where('status', 1)->get();
		}

		return view('profesor.index', compact('profesores'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Application|Factory|View|Response
	 */
	public function create()
	{
		$mode = [
			'url' => route('profesores.store'),
			'method' => 'CREATE'
		];

		return view('profesor.create', compact('mode'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return RedirectResponse
	 */
	public function store(Request $request)
	{
		$profesor = new Profesor($request->all());
		$profesor->save();

		return back()->with([
			'message' => 'Profesor creado correctamente'
		]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param Profesor $profesor
	 * @return Response
	 */
	public function show(Profesor $profesor)
	{
		$grupos = $profesor->grupos()->where('status', 1)->get();
		return view('profesor.show', compact(['profesor', 'grupos']));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param Profesor $profesor
	 * @return Application|Factory|View|Response
	 */
	public function edit(Profesor $profesor)
	{
		$mode = [
			'url' => route('profesores.update', $profesor->id),
			'method' => 'EDIT'
		];

		return view('profesor.create', compact(['mode', 'profesor']));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param Request $request
	 * @param Profesor $profesor
	 * @return RedirectResponse
	 */
	public function update(Request $request, Profesor $profesor)
	{
		$profesor->update($request->all());

		return back()->with([
			'message' => 'Profesor actualizado correctamente'
		]);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param Profesor $profesor
	 * @return RedirectResponse
	 */
	public function destroy(Profesor $profesor)
	{
		$profesor->status = 0;
		$profesor->save();

		return back()->with([
			'message' => 'Profesor eliminado correctamente'
		]);
	}
}
