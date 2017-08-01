<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMotivoExpuestoTable extends Migration {

	public function up()
	{
		Schema::create('motivo_expuesto', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('id_motivo_exposiciom')->unsigned();
			$table->integer('id_exposicion')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('motivo_expuesto');
	}
}