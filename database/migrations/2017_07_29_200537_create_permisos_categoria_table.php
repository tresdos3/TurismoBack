<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePermisosCategoriaTable extends Migration {

	public function up()
	{
		Schema::create('permisos_categoria', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('id_acciones')->unsigned();
			$table->integer('id_categoria')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('permisos_categoria');
	}
}