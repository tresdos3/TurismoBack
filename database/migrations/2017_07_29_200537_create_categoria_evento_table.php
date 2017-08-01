<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriaEventoTable extends Migration {

	public function up()
	{
		Schema::create('categoria_evento', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nombre', 50);
			$table->string('descripcion', 300);
		});
	}

	public function down()
	{
		Schema::drop('categoria_evento');
	}
}