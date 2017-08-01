<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdminEntidadTable extends Migration {

	public function up()
	{
		Schema::create('admin_entidad', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('id_users')->unsigned();
			$table->integer('id_lugar_interes')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('admin_entidad');
	}
}