<?php

use Illuminate\Database\Seeder;

class DepartamentosTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('departamentos')->delete();
        
		\DB::table('departamentos')->insert(array (
			0 => 
			array (
				'id' => '1',
				'departamento' => 'Atlántida',
				'zona' => 'Norte',
			),
			1 => 
			array (
				'id' => '2',
				'departamento' => 'Colón',
				'zona' => 'Norte',
			),
			2 => 
			array (
				'id' => '3',
				'departamento' => 'Comayagua',
				'zona' => 'Centro',
			),
			3 => 
			array (
				'id' => '4',
				'departamento' => 'Copán',
				'zona' => 'Occidente',
			),
			4 => 
			array (
				'id' => '5',
				'departamento' => 'Cortés',
				'zona' => 'Norte',
			),
			5 => 
			array (
				'id' => '6',
				'departamento' => 'Choluteca',
				'zona' => 'Sur',
			),
			6 => 
			array (
				'id' => '7',
				'departamento' => 'El Paraíso',
				'zona' => 'Sur Occidente',
			),
			7 => 
			array (
				'id' => '8',
				'departamento' => 'Francisco Morazán',
				'zona' => 'Central',
			),
			8 => 
			array (
				'id' => '9',
				'departamento' => 'Gracias a Dios',
				'zona' => 'Oriente',
			),
			9 => 
			array (
				'id' => '10',
				'departamento' => 'Intibucá',
				'zona' => 'Sur Oriente',
			),
			10 => 
			array (
				'id' => '11',
				'departamento' => 'Islas de la Bahía',
				'zona' => 'Norte',
			),
			11 => 
			array (
				'id' => '12',
				'departamento' => 'La Paz',
				'zona' => 'Sur Oriente',
			),
			12 => 
			array (
				'id' => '13',
				'departamento' => 'Lempira',
				'zona' => 'Sur Oriente',
			),
			13 => 
			array (
				'id' => '14',
				'departamento' => 'Ocotepeque',
				'zona' => 'Occidente',
			),
			14 => 
			array (
				'id' => '15',
				'departamento' => 'Olancho',
				'zona' => 'Centro Oriente',
			),
			15 => 
			array (
				'id' => '16',
				'departamento' => 'Santa Bárbara',
				'zona' => 'Occidente',
			),
			16 => 
			array (
				'id' => '17',
				'departamento' => 'Valle',
				'zona' => 'Sur',
			),
			17 => 
			array (
				'id' => '18',
				'departamento' => 'Yoro',
				'zona' => 'Centro',
			),
		));
	}

}
