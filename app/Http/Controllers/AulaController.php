<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AulaController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function index(Request $request)
	{
		if ($request->has('index') && $request->index == 'deleted'){
			$aulas = Aula::where('status', 0)->get();
		}else{
			$aulas = Aula::where('status', 1)->get();
		}

		return view('aula.index', compact(['aulas']));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$mode = [
			'url' => route('aulas.store'),
			'method' => 'CREATE'
		];

		return view('aula.create', compact(['mode']));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$aula = new Aula($request->all());
		$aula->save();

		return back()->with([
			'message' => 'Aula creada correctamente'
		]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param Aula $aula
	 * @return Response
	 */
	public function show(Aula $aula)
	{
		$grupos = $aula->grupos()->where('status', 1)->get();
		return view('aula.show', compact(['aula', 'grupos']));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param Aula $aula
	 * @return Response
	 */
	public function edit(Aula $aula)
	{
		$mode = [
			'url' => route('aulas.update', $aula->id),
			'method' => 'EDIT'
		];

		return view('aula.create', compact(['mode', 'aula']));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param Request $request
	 * @param Aula $aula
	 * @return Response
	 */
	public function update(Request $request, Aula $aula)
	{
		$aula->update($request->all());

		return back()->with([
			'message' => 'Auala actualizada correctamente'
		]);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param Aula $aula
	 * @return Response
	 */
	public function destroy(Aula $aula)
	{
		$aula->status = 0;
		$aula->save();

		return back()->with([
			'message' => 'Aula eliminada correctamente'
		]);
	}
}
