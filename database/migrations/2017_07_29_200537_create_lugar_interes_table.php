<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLugarInteresTable extends Migration {

	public function up()
	{
		Schema::create('lugar_interes', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nombre', 50);
			$table->string('telefono', 20);
			$table->string('descripcion', 300);
			$table->string('url');
			$table->integer('id_tipo_servicio')->unsigned();
			$table->integer('id_ubicacion')->unsigned();
			$table->string('imagen', 500);
		});
	}

	public function down()
	{
		Schema::drop('lugar_interes');
	}
}