<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use App\Models\Grupo;
use App\Models\Materia;
use App\Models\Profesor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function index()
	{
		$stats = [
			Profesor::where('status', 1)->count(), Materia::where('status', 1)->count(),
			Aula::where('status', 1)->count(), Grupo::where('status', 1)->count()
		];

		return view('welcome', compact('stats'));
	}
}
