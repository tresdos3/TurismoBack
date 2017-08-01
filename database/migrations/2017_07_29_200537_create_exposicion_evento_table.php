<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExposicionEventoTable extends Migration {

	public function up()
	{
		Schema::create('exposicion_evento', function(Blueprint $table) {
			$table->increments('id');
			$table->date('inicio');
			$table->integer('final');
			$table->integer('id_exposicion')->unsigned();
			$table->integer('id_evento')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('exposicion_evento');
	}
}