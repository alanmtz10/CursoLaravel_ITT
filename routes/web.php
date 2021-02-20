<?php

use App\Http\Controllers\AulaController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\ProfesorController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::resource('profesores', ProfesorController::class)->parameters([
	'profesores' => 'profesor'
]);

Route::resource('materias', MateriaController::class)->parameters([
	'materias' => 'materia'
]);

Route::resource('aulas', AulaController::class)->parameters([
	'aulas' => 'aula'
]);

Route::resource('grupos', GrupoController::class)->parameters([
	'grupos' => 'grupo'
]);
