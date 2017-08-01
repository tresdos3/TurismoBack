<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrigenTable extends Migration {

	public function up()
	{
		Schema::create('origen', function(Blueprint $table) {
			$table->increments('id');
			$table->string('pais', 50);
			$table->string('departamento', 50);
		});
	}

	public function down()
	{
		Schema::drop('origen');
	}
}