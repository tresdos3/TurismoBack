<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAutorTable extends Migration {

	public function up()
	{
		Schema::create('autor', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nombre', 50);
			$table->string('apematerno', 50);
			$table->string('apepaterno', 50);
			$table->string('especialidad', 100);
			$table->string('seudonimo', 50);
			$table->string('nacionalidad', 50);
		});
	}

	public function down()
	{
		Schema::drop('autor');
	}
}