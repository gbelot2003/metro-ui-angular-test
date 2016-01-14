<?php

use Illuminate\Database\Seeder;

class TiposistemasTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('tiposistemas')->delete();
        
		\DB::table('tiposistemas')->insert(array (
			0 => 
			array (
				'id' => '1',
				'tiposistema' => 'Medios de Comunicación Varios',
			),
			1 => 
			array (
				'id' => '2',
			'tiposistema' => 'Comercial (Menores, Críticos)',
			),
			2 => 
			array (
				'id' => '3',
				'tiposistema' => 'Radial',
			),
			3 => 
			array (
				'id' => '4',
				'tiposistema' => 'Televisivo',
			),
			4 => 
			array (
				'id' => '5',
			'tiposistema' => 'Comercial (Mega Medios)',
			),
			5 => 
			array (
				'id' => '6',
				'tiposistema' => 'Escrito',
			),
			6 => 
			array (
				'id' => '7',
				'tiposistema' => 'Periódico Digital ',
			),
			7 => 
			array (
				'id' => '8',
				'tiposistema' => 'Organización No Gubernamental',
			),
			8 => 
			array (
				'id' => '9',
				'tiposistema' => 'Radios Comunitarios',
			),
			9 => 
			array (
				'id' => '10',
				'tiposistema' => 'Corrresponsalia Extranjera',
			),
			10 => 
			array (
				'id' => '11',
				'tiposistema' => 'Medio de Comunicacion Estatal',
			),
			11 => 
			array (
				'id' => '12',
				'tiposistema' => 'Sistema de Cable Local',
			),
			12 => 
			array (
				'id' => '13',
				'tiposistema' => 'Medio de Comunicación Local',
			),
			13 => 
			array (
				'id' => '14',
				'tiposistema' => 'Institución Autonoma',
			),
			14 => 
			array (
				'id' => '15',
				'tiposistema' => 'Asociaciones Campesinas',
			),
			15 => 
			array (
				'id' => '16',
				'tiposistema' => 'Periodista Independiente',
			),
			16 => 
			array (
				'id' => '17',
				'tiposistema' => 'Personaje Mediatico',
			),
			17 => 
			array (
				'id' => '18',
				'tiposistema' => 'Partido Politico',
			),
			18 => 
			array (
				'id' => '19',
				'tiposistema' => 'Sindicatos ',
			),
			19 => 
			array (
				'id' => '20',
				'tiposistema' => 'Radial y Televisivo',
			),
			20 => 
			array (
				'id' => '21',
				'tiposistema' => 'Grupo Artistico',
			),
			21 => 
			array (
				'id' => '22',
				'tiposistema' => 'Movimiento Estudiantil',
			),
			22 => 
			array (
				'id' => '23',
				'tiposistema' => 'Pueblo Indígena y Afrodesendiente ',
			),
			23 => 
			array (
				'id' => '24',
				'tiposistema' => 'Ninguno',
			),
			24 => 
			array (
				'id' => '25',
				'tiposistema' => 'Movimiento Social',
			),
			25 => 
			array (
				'id' => '26',
				'tiposistema' => 'Periodico',
			),
			26 => 
			array (
				'id' => '27',
				'tiposistema' => 'Usuarios de Internet ',
			),
		));
	}

}
