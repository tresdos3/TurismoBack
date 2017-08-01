<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAccionesSistemaTable extends Migration {

	public function up()
	{
		Schema::create('acciones_sistema', function(Blueprint $table) {
			$table->increments('id');
			$table->string('estado');
			$table->string('permiso', 50);
		});
	}

	public function down()
	{
		Schema::drop('acciones_sistema');
	}
}