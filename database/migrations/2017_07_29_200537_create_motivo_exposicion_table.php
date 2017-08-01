<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMotivoExposicionTable extends Migration {

	public function up()
	{
		Schema::create('motivo_exposicion', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nombre', 50);
			$table->string('image', 500);
			$table->string('descripcion', 300);
			$table->integer('id_autor')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('motivo_exposicion');
	}
}