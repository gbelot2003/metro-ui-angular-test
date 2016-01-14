<?php

use Illuminate\Database\Seeder;

class TipoagresorsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('tipoagresors')->delete();
        
		\DB::table('tipoagresors')->insert(array (
			0 => 
			array (
				'id' => '1',
				'tipoagresor' => 'Civil Identificado',
			),
			1 => 
			array (
				'id' => '2',
				'tipoagresor' => 'Empresa Privada',
			),
			2 => 
			array (
				'id' => '3',
				'tipoagresor' => 'Alcalde Municipal',
			),
			3 => 
			array (
				'id' => '5',
				'tipoagresor' => 'Guardias Seguridad Edificio Estatal',
			),
			4 => 
			array (
				'id' => '12',
				'tipoagresor' => 'Tribunal de Justicia',
			),
			5 => 
			array (
				'id' => '15',
				'tipoagresor' => 'Autoridades del Sistema Educativo Publico ',
			),
			6 => 
			array (
				'id' => '16',
				'tipoagresor' => 'Presidente de la República',
			),
			7 => 
			array (
				'id' => '17',
				'tipoagresor' => 'Policía Municipal',
			),
			8 => 
			array (
				'id' => '18',
			'tipoagresor' => 'Civil no identificado (Desconocido)',
			),
			9 => 
			array (
				'id' => '20',
				'tipoagresor' => 'Dueño o Gerente de Medio de Comunicacion',
			),
			10 => 
			array (
				'id' => '21',
				'tipoagresor' => 'Guardaespaldas ',
			),
			11 => 
			array (
				'id' => '22',
				'tipoagresor' => 'Funcionario Publico',
			),
			12 => 
			array (
				'id' => '23',
				'tipoagresor' => 'Compañías Mineras',
			),
			13 => 
			array (
				'id' => '25',
				'tipoagresor' => 'Secretarias de Estado',
			),
			14 => 
			array (
				'id' => '26',
				'tipoagresor' => 'Policías y Militares',
			),
			15 => 
			array (
				'id' => '27',
				'tipoagresor' => 'Diputado CN',
			),
			16 => 
			array (
				'id' => '28',
				'tipoagresor' => 'Sicarios',
			),
			17 => 
			array (
				'id' => '29',
				'tipoagresor' => 'Diputado/a',
			),
			18 => 
			array (
				'id' => '31',
				'tipoagresor' => 'Jefe de Redacción ',
			),
			19 => 
			array (
				'id' => '32',
				'tipoagresor' => 'Presentador',
			),
			20 => 
			array (
				'id' => '33',
				'tipoagresor' => 'Medio de Comunicación',
			),
			21 => 
			array (
				'id' => '34',
				'tipoagresor' => 'Policia',
			),
			22 => 
			array (
				'id' => '35',
				'tipoagresor' => 'ONGs',
			),
			23 => 
			array (
				'id' => '36',
				'tipoagresor' => 'Operador de Medio de Comunicación ',
			),
			24 => 
			array (
				'id' => '37',
				'tipoagresor' => 'Miembro del Consejo',
			),
			25 => 
			array (
				'id' => '41',
				'tipoagresor' => 'CONATEL',
			),
			26 => 
			array (
				'id' => '43',
				'tipoagresor' => 'Ciudadano',
			),
			27 => 
			array (
				'id' => '44',
				'tipoagresor' => 'Embajador',
			),
			28 => 
			array (
				'id' => '45',
				'tipoagresor' => 'Docentes ',
			),
			29 => 
			array (
				'id' => '46',
				'tipoagresor' => 'Guardia de seguridad',
			),
			30 => 
			array (
				'id' => '47',
				'tipoagresor' => 'Cibernauta',
			),
			31 => 
			array (
				'id' => '49',
				'tipoagresor' => 'Ministro de Trabajo',
			),
			32 => 
			array (
				'id' => '50',
				'tipoagresor' => 'Exprimiera Dama',
			),
			33 => 
			array (
				'id' => '51',
				'tipoagresor' => 'Empresarios',
			),
		));
	}

}
