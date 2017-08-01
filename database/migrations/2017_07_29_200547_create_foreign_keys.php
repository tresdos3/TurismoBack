<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('users', function(Blueprint $table) {
			$table->foreign('id_categoria_usuario')->references('id')->on('categoria_usuario')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('users', function(Blueprint $table) {
			$table->foreign('id_origen')->references('id')->on('origen')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('permisos_categoria', function(Blueprint $table) {
			$table->foreign('id_acciones')->references('id')->on('acciones_sistema')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('permisos_categoria', function(Blueprint $table) {
			$table->foreign('id_categoria')->references('id')->on('categoria_usuario')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('lugar_interes', function(Blueprint $table) {
			$table->foreign('id_tipo_servicio')->references('id')->on('tipo_servicio')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('lugar_interes', function(Blueprint $table) {
			$table->foreign('id_ubicacion')->references('id')->on('ubicacion')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('comentario', function(Blueprint $table) {
			$table->foreign('id_lugar_interes')->references('id')->on('lugar_interes')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('tipo_servicio', function(Blueprint $table) {
			$table->foreign('id_categoria_lugar')->references('id')->on('categoria_lugar')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('admin_entidad', function(Blueprint $table) {
			$table->foreign('id_users')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('admin_entidad', function(Blueprint $table) {
			$table->foreign('id_lugar_interes')->references('id')->on('lugar_interes')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('interes_usuario', function(Blueprint $table) {
			$table->foreign('id_users')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('evento', function(Blueprint $table) {
			$table->foreign('id_categoria_evento')->references('id')->on('categoria_evento')
						->onDelete('cascade')
						->onUpdate('no action');
		});
		Schema::table('evento', function(Blueprint $table) {
			$table->foreign('id_ubicacion')->references('id')->on('ubicacion')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('motivo_exposicion', function(Blueprint $table) {
			$table->foreign('id_autor')->references('id')->on('autor')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('motivo_expuesto', function(Blueprint $table) {
			$table->foreign('id_motivo_exposiciom')->references('id')->on('motivo_exposicion')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('motivo_expuesto', function(Blueprint $table) {
			$table->foreign('id_exposicion')->references('id')->on('exposicion')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('exposicion_evento', function(Blueprint $table) {
			$table->foreign('id_exposicion')->references('id')->on('exposicion')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('exposicion_evento', function(Blueprint $table) {
			$table->foreign('id_evento')->references('id')->on('evento')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('users', function(Blueprint $table) {
			$table->dropForeign('users_id_categoria_usuario_foreign');
		});
		Schema::table('users', function(Blueprint $table) {
			$table->dropForeign('users_id_origen_foreign');
		});
		Schema::table('permisos_categoria', function(Blueprint $table) {
			$table->dropForeign('permisos_categoria_id_acciones_foreign');
		});
		Schema::table('permisos_categoria', function(Blueprint $table) {
			$table->dropForeign('permisos_categoria_id_categoria_foreign');
		});
		Schema::table('lugar_interes', function(Blueprint $table) {
			$table->dropForeign('lugar_interes_id_tipo_servicio_foreign');
		});
		Schema::table('lugar_interes', function(Blueprint $table) {
			$table->dropForeign('lugar_interes_id_ubicacion_foreign');
		});
		Schema::table('comentario', function(Blueprint $table) {
			$table->dropForeign('comentario_id_lugar_interes_foreign');
		});
		Schema::table('tipo_servicio', function(Blueprint $table) {
			$table->dropForeign('tipo_servicio_id_categoria_lugar_foreign');
		});
		Schema::table('admin_entidad', function(Blueprint $table) {
			$table->dropForeign('admin_entidad_id_users_foreign');
		});
		Schema::table('admin_entidad', function(Blueprint $table) {
			$table->dropForeign('admin_entidad_id_lugar_interes_foreign');
		});
		Schema::table('interes_usuario', function(Blueprint $table) {
			$table->dropForeign('interes_usuario_id_users_foreign');
		});
		Schema::table('evento', function(Blueprint $table) {
			$table->dropForeign('evento_id_categoria_evento_foreign');
		});
		Schema::table('evento', function(Blueprint $table) {
			$table->dropForeign('evento_id_ubicacion_foreign');
		});
		Schema::table('motivo_exposicion', function(Blueprint $table) {
			$table->dropForeign('motivo_exposicion_id_autor_foreign');
		});
		Schema::table('motivo_expuesto', function(Blueprint $table) {
			$table->dropForeign('motivo_expuesto_id_motivo_exposiciom_foreign');
		});
		Schema::table('motivo_expuesto', function(Blueprint $table) {
			$table->dropForeign('motivo_expuesto_id_exposicion_foreign');
		});
		Schema::table('exposicion_evento', function(Blueprint $table) {
			$table->dropForeign('exposicion_evento_id_exposicion_foreign');
		});
		Schema::table('exposicion_evento', function(Blueprint $table) {
			$table->dropForeign('exposicion_evento_id_evento_foreign');
		});
	}
}