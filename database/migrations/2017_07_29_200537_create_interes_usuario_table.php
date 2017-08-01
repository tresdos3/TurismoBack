<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInteresUsuarioTable extends Migration {

	public function up()
	{
		Schema::create('interes_usuario', function(Blueprint $table) {
			$table->increments('id');
			$table->string('tipo');
			$table->string('mensaje', 300);
			$table->integer('id_users')->unsigned();
			$table->integer('id_categoria_lugar');
		});
	}

	public function down()
	{
		Schema::drop('interes_usuario');
	}
}