<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventoTable extends Migration {

	public function up()
	{
		Schema::create('evento', function(Blueprint $table) {
			$table->increments('id');
			$table->date('fechainicio');
			$table->date('fechafinal');
			$table->string('titulo', 50);
			$table->string('descripcion', 300);
			$table->integer('id_categoria_evento')->unsigned();
			$table->integer('id_ubicacion')->unsigned();
			$table->integer('id_users');
		});
	}

	public function down()
	{
		Schema::drop('evento');
	}
}