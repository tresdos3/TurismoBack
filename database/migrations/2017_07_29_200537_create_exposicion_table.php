<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExposicionTable extends Migration {

	public function up()
	{
		Schema::create('exposicion', function(Blueprint $table) {
			$table->increments('id');
			$table->string('titulo', 50);
			$table->string('descripcion', 300);
		});
	}

	public function down()
	{
		Schema::drop('exposicion');
	}
}