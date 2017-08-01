<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria_usuario')->insert([
            'nombre' => 'superadmin'
        ]);
        DB::table('categoria_usuario')->insert([
            'nombre' => 'admin'
        ]);
        DB::table('categoria_usuario')->insert([
            'nombre' => 'turista'
        ]);
        DB::table('acciones_sistema')->insert([
            'estado' => 'Activo',
            'permiso' => 'reportes'           
        ]);
        DB::table('acciones_sistema')->insert([
            'estado' => 'Activo',
            'permiso' => 'adduser'           
        ]);
        DB::table('permisos_categoria')->insert([
            'id_acciones' => 1,
			'id_categoria' => 1          
        ]);
        DB::table('permisos_categoria')->insert([
            'id_acciones' => 2,
			'id_categoria' => 2            
        ]);
        DB::table('user')->insert([
            'id_acciones' => 2,
			'id_categoria' => 2            
        ]);
        DB::table('origen')->insert([
            'pais' => 'Bolivia',
			'departamento' => 'Tarija'            
        ]);
        DB::table('origen')->insert([
            'pais' => 'Bolivia',
			'departamento' => 'Potosi'            
        ]);
        DB::table('origen')->insert([
            'pais' => 'Bolivia',
			'departamento' => 'La Paz'            
        ]);
        DB::table('origen')->insert([
            'pais' => 'Bolivia',
			'departamento' => 'Cochabamba'            
        ]);
        DB::table('origen')->insert([
            'pais' => 'Bolivia',
			'departamento' => 'Santa Cruz'            
        ]);
    }
}
