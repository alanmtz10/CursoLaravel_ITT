<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGruposTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('grupos', function (Blueprint $table) {
			$table->id();
			$table->foreignId('materia_id');
			$table->foreignId('aula_id');
			$table->foreignId('profe_id');
			$table->string('horario');
			$table->tinyInteger('total_alumnos');
			$table->tinyInteger('status')->default('1');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('grupos');
	}
}
