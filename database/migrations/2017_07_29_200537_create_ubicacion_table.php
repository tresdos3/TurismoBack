<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUbicacionTable extends Migration {

	public function up()
	{
		Schema::create('ubicacion', function(Blueprint $table) {
			$table->increments('id');
			$table->boolean('latitud');
			$table->boolean('longitud');
			$table->string('direccion', 300);
		});
	}

	public function down()
	{
		Schema::drop('ubicacion');
	}
}