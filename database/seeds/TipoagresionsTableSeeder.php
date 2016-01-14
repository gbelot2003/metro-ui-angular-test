<?php

use Illuminate\Database\Seeder;

class TipoagresionsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('tipoagresions')->delete();
        
		\DB::table('tipoagresions')->insert(array (
			0 => 
			array (
				'id' => '1',
				'tipoagresion' => 'Agresión Directa',
			),
			1 => 
			array (
				'id' => '2',
				'tipoagresion' => 'Agresión Indirecta',
			),
		));
	}

}
