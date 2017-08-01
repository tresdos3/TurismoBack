<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriaLugarTable extends Migration {

	public function up()
	{
		Schema::create('categoria_lugar', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nombre', 50);
		});
	}

	public function down()
	{
		Schema::drop('categoria_lugar');
	}
}