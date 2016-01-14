<?php

use Illuminate\Database\Seeder;

class AgresioncategoriasTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('agresioncategorias')->delete();
        
		\DB::table('agresioncategorias')->insert(array (
			0 => 
			array (
				'id' => '1',
				'agresioncategoria' => 'Asesinato',
				'tipoagresion_id' => '1',
			),
			1 => 
			array (
				'id' => '2',
				'agresioncategoria' => 'Atentado',
				'tipoagresion_id' => '1',
			),
			2 => 
			array (
				'id' => '3',
				'agresioncategoria' => 'Daño Moral',
				'tipoagresion_id' => '1',
			),
			3 => 
			array (
				'id' => '4',
				'agresioncategoria' => 'De Afectación sicologica',
				'tipoagresion_id' => '1',
			),
			4 => 
			array (
				'id' => '5',
				'agresioncategoria' => 'De Afectación física y material',
				'tipoagresion_id' => '1',
			),
			5 => 
			array (
				'id' => '6',
				'agresioncategoria' => 'Acciones Legales',
				'tipoagresion_id' => '2',
			),
			6 => 
			array (
				'id' => '7',
				'agresioncategoria' => 'agresión indirecta',
				'tipoagresion_id' => '2',
			),
			7 => 
			array (
				'id' => '8',
				'agresioncategoria' => 'Criminalizacion',
				'tipoagresion_id' => '2',
			),
		));
	}

}
