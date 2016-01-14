<?php

use Illuminate\Database\Seeder;

class MesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('mes')->delete();
        
		\DB::table('mes')->insert(array (
			0 => 
			array (
				'id' => '1',
				'mes' => 'Enero',
			),
			1 => 
			array (
				'id' => '2',
				'mes' => 'Febrero',
			),
			2 => 
			array (
				'id' => '3',
				'mes' => 'Marzo',
			),
			3 => 
			array (
				'id' => '4',
				'mes' => 'Abril',
			),
			4 => 
			array (
				'id' => '5',
				'mes' => 'Mayo',
			),
			5 => 
			array (
				'id' => '6',
				'mes' => 'Junio',
			),
			6 => 
			array (
				'id' => '7',
				'mes' => 'Julio',
			),
			7 => 
			array (
				'id' => '8',
				'mes' => 'Agosto',
			),
			8 => 
			array (
				'id' => '9',
				'mes' => 'Septiembre',
			),
			9 => 
			array (
				'id' => '10',
				'mes' => 'Octubre',
			),
			10 => 
			array (
				'id' => '11',
				'mes' => 'Noviembre',
			),
			11 => 
			array (
				'id' => '12',
				'mes' => 'Diciembre',
			),
		));
	}

}
