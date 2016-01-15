<?php

use Illuminate\Database\Seeder;

class GenerosTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('generos')->delete();
        
		\DB::table('generos')->insert(array (
			0 => 
			array (
				'id' => 1,
				'genero' => 'Masculino',
			),
			1 => 
			array (
				'id' => 2,
				'genero' => 'Femenina',
			),
			2 => 
			array (
				'id' => 3,
				'genero' => 'LGTBI',
			),
			3 => 
			array (
				'id' => 4,
				'genero' => 'N/G',
			),
		));
	}

}
