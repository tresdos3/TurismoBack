<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComentarioTable extends Migration {

	public function up()
	{
		Schema::create('comentario', function(Blueprint $table) {
			$table->increments('id');
			$table->date('fecha');
			$table->string('texto', 300);
			$table->string('imagen', 500);
			$table->integer('id_lugar_interes')->unsigned();
			$table->integer('id_users');
		});
	}

	public function down()
	{
		Schema::drop('comentario');
	}
}