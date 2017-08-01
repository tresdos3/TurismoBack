<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTipoServicioTable extends Migration {

	public function up()
	{
		Schema::create('tipo_servicio', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nombre', 50);
			$table->integer('id_categoria_lugar')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('tipo_servicio');
	}
}