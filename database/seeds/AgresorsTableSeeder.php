<?php

use Illuminate\Database\Seeder;

class AgresorsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('agresors')->delete();
        
		\DB::table('agresors')->insert(array (
			0 => 
			array (
				'id' => 1,
				'alertas_id' => 17,
				'name' => 'Juan Robando Todos',
				'tipoagresors_id' => 20,
				'estadojudicial_id' => 1,
			),
			1 => 
			array (
				'id' => 6,
				'alertas_id' => 20,
				'name' => 'Desconocido',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			2 => 
			array (
				'id' => 7,
				'alertas_id' => 21,
				'name' => 'Joaquín Molina Andrade',
				'tipoagresors_id' => 21,
				'estadojudicial_id' => 1,
			),
			3 => 
			array (
				'id' => 8,
				'alertas_id' => 22,
				'name' => ' Roosevelt Avilés',
				'tipoagresors_id' => 13,
				'estadojudicial_id' => 1,
			),
			4 => 
			array (
				'id' => 9,
				'alertas_id' => 16,
				'name' => 'Roosevelt Avilés',
				'tipoagresors_id' => 13,
				'estadojudicial_id' => 1,
			),
			5 => 
			array (
				'id' => 10,
				'alertas_id' => 23,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			6 => 
			array (
				'id' => 11,
				'alertas_id' => 24,
				'name' => 'empleado de iglesia evangélica',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			7 => 
			array (
				'id' => 12,
				'alertas_id' => 18,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			8 => 
			array (
				'id' => 13,
				'alertas_id' => 25,
				'name' => 'Desconocido',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			9 => 
			array (
				'id' => 14,
				'alertas_id' => 26,
				'name' => 'Centro para Migrantes/Dirección General de Migración y Extranjerí',
				'tipoagresors_id' => 4,
				'estadojudicial_id' => 1,
			),
			10 => 
			array (
				'id' => 16,
				'alertas_id' => 27,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			11 => 
			array (
				'id' => 17,
				'alertas_id' => 28,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 28,
				'estadojudicial_id' => 1,
			),
			12 => 
			array (
				'id' => 18,
				'alertas_id' => 29,
				'name' => 'Desconocido',
				'tipoagresors_id' => 28,
				'estadojudicial_id' => 1,
			),
			13 => 
			array (
				'id' => 19,
				'alertas_id' => 31,
				'name' => 'Estado y Empresarios',
				'tipoagresors_id' => 22,
				'estadojudicial_id' => 1,
			),
			14 => 
			array (
				'id' => 20,
				'alertas_id' => 32,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			15 => 
			array (
				'id' => 21,
				'alertas_id' => 35,
				'name' => 'Guardias de seguridad privados',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			16 => 
			array (
				'id' => 22,
				'alertas_id' => 36,
				'name' => 'Juzgado Primero de lo Civil ',
				'tipoagresors_id' => 12,
				'estadojudicial_id' => 1,
			),
			17 => 
			array (
				'id' => 24,
				'alertas_id' => 38,
				'name' => 'Guardias de la Corte Suprema de Justicia',
				'tipoagresors_id' => 5,
				'estadojudicial_id' => 1,
			),
			18 => 
			array (
				'id' => 25,
				'alertas_id' => 39,
				'name' => 'Operativo Militar y Policial Xatruch',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			19 => 
			array (
				'id' => 26,
				'alertas_id' => 40,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			20 => 
			array (
				'id' => 27,
				'alertas_id' => 41,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			21 => 
			array (
				'id' => 28,
				'alertas_id' => 42,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			22 => 
			array (
				'id' => 29,
				'alertas_id' => 43,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			23 => 
			array (
				'id' => 30,
				'alertas_id' => 44,
				'name' => 'Policías Municipales',
				'tipoagresors_id' => 17,
				'estadojudicial_id' => 1,
			),
			24 => 
			array (
				'id' => 31,
				'alertas_id' => 45,
				'name' => 'Padre Carlo Magno Núñez',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			25 => 
			array (
				'id' => 32,
				'alertas_id' => 46,
				'name' => 'Alcalde y policías de Sabanagrande',
				'tipoagresors_id' => 3,
				'estadojudicial_id' => 1,
			),
			26 => 
			array (
				'id' => 33,
				'alertas_id' => 47,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			27 => 
			array (
				'id' => 34,
				'alertas_id' => 48,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			28 => 
			array (
				'id' => 35,
				'alertas_id' => 49,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			29 => 
			array (
				'id' => 36,
				'alertas_id' => 50,
				'name' => 'Carmen Canales Canales',
				'tipoagresors_id' => 12,
				'estadojudicial_id' => 1,
			),
			30 => 
			array (
				'id' => 37,
				'alertas_id' => 51,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			31 => 
			array (
				'id' => 38,
				'alertas_id' => 52,
				'name' => 'Juzgado de Paz de lo Criminal de la Capital de Honduras ',
				'tipoagresors_id' => 8,
				'estadojudicial_id' => 1,
			),
			32 => 
			array (
				'id' => 39,
				'alertas_id' => 53,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			33 => 
			array (
				'id' => 40,
				'alertas_id' => 54,
				'name' => 'Nora Urbina',
				'tipoagresors_id' => 22,
				'estadojudicial_id' => 1,
			),
			34 => 
			array (
				'id' => 41,
				'alertas_id' => 55,
				'name' => 'Wilfredo Benítez',
				'tipoagresors_id' => 20,
				'estadojudicial_id' => 1,
			),
			35 => 
			array (
				'id' => 42,
				'alertas_id' => 57,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			36 => 
			array (
				'id' => 43,
				'alertas_id' => 58,
				'name' => 'Congreso Nacional',
				'tipoagresors_id' => 22,
				'estadojudicial_id' => 1,
			),
			37 => 
			array (
				'id' => 44,
				'alertas_id' => 59,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			38 => 
			array (
				'id' => 45,
				'alertas_id' => 60,
			'name' => 'Universidad Pedagógica Nacional Francisco Morazán (UPNFM) ',
				'tipoagresors_id' => 15,
				'estadojudicial_id' => 1,
			),
			39 => 
			array (
				'id' => 46,
				'alertas_id' => 61,
				'name' => 'Activistas politicos',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			40 => 
			array (
				'id' => 47,
				'alertas_id' => 62,
				'name' => 'Presidente del Congreso Nacional de Honduras',
				'tipoagresors_id' => 27,
				'estadojudicial_id' => 1,
			),
			41 => 
			array (
				'id' => 48,
				'alertas_id' => 63,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 28,
				'estadojudicial_id' => 1,
			),
			42 => 
			array (
				'id' => 49,
				'alertas_id' => 64,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			43 => 
			array (
				'id' => 50,
				'alertas_id' => 65,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			44 => 
			array (
				'id' => 51,
				'alertas_id' => 66,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			45 => 
			array (
				'id' => 52,
				'alertas_id' => 68,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			46 => 
			array (
				'id' => 53,
				'alertas_id' => 69,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			47 => 
			array (
				'id' => 54,
				'alertas_id' => 70,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			48 => 
			array (
				'id' => 55,
				'alertas_id' => 71,
				'name' => 'Agente Policial',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			49 => 
			array (
				'id' => 56,
				'alertas_id' => 72,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			50 => 
			array (
				'id' => 58,
				'alertas_id' => 74,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			51 => 
			array (
				'id' => 59,
				'alertas_id' => 75,
				'name' => 'Coronel retirado Guillermo Pinél Cálix',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			52 => 
			array (
				'id' => 60,
				'alertas_id' => 76,
				'name' => 'Varios sospechosos',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			53 => 
			array (
				'id' => 61,
				'alertas_id' => 77,
				'name' => 'Juzgado de Paz de lo Criminal ',
				'tipoagresors_id' => 12,
				'estadojudicial_id' => 1,
			),
			54 => 
			array (
				'id' => 62,
				'alertas_id' => 78,
				'name' => 'Criminalidad',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			55 => 
			array (
				'id' => 63,
				'alertas_id' => 79,
			'name' => 'Compañía Azucarera Hondureña Sociedad Anónima (CAHSA)',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			56 => 
			array (
				'id' => 64,
				'alertas_id' => 80,
				'name' => 'Hortensio Lindolfo López Silva ',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			57 => 
			array (
				'id' => 65,
				'alertas_id' => 81,
				'name' => 'Policia Nacional',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			58 => 
			array (
				'id' => 66,
				'alertas_id' => 82,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			59 => 
			array (
				'id' => 67,
				'alertas_id' => 83,
				'name' => 'Jhonny Alexander Carrasco Espinoza ',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			60 => 
			array (
				'id' => 68,
				'alertas_id' => 84,
				'name' => 'compañía de cable Milicon ',
				'tipoagresors_id' => 20,
				'estadojudicial_id' => 1,
			),
			61 => 
			array (
				'id' => 69,
				'alertas_id' => 85,
				'name' => 'Héctor Rolando Hernández ',
				'tipoagresors_id' => 3,
				'estadojudicial_id' => 1,
			),
			62 => 
			array (
				'id' => 70,
				'alertas_id' => 86,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			63 => 
			array (
				'id' => 71,
				'alertas_id' => 87,
				'name' => 'Descoconicodos',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			64 => 
			array (
				'id' => 72,
				'alertas_id' => 88,
				'name' => 'Joaquin Molina Andrade ',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			65 => 
			array (
				'id' => 73,
				'alertas_id' => 89,
				'name' => 'Jueza Carmen Canales Canales',
				'tipoagresors_id' => 12,
				'estadojudicial_id' => 1,
			),
			66 => 
			array (
				'id' => 74,
				'alertas_id' => 90,
				'name' => 'Migración CR',
				'tipoagresors_id' => 22,
				'estadojudicial_id' => 1,
			),
			67 => 
			array (
				'id' => 75,
				'alertas_id' => 91,
				'name' => 'Roosvelt Avilés ',
				'tipoagresors_id' => 3,
				'estadojudicial_id' => 1,
			),
			68 => 
			array (
				'id' => 76,
				'alertas_id' => 92,
				'name' => 'Policías y desconocidos',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			69 => 
			array (
				'id' => 77,
				'alertas_id' => 93,
				'name' => 'Héctor Guillen',
				'tipoagresors_id' => 22,
				'estadojudicial_id' => 1,
			),
			70 => 
			array (
				'id' => 78,
				'alertas_id' => 94,
				'name' => 'Activistas Alcalde MDC',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			71 => 
			array (
				'id' => 79,
				'alertas_id' => 95,
				'name' => 'Presidente del Congreso Nacional',
				'tipoagresors_id' => 27,
				'estadojudicial_id' => 1,
			),
			72 => 
			array (
				'id' => 80,
				'alertas_id' => 96,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			73 => 
			array (
				'id' => 81,
				'alertas_id' => 97,
				'name' => 'José Antonio Laínez',
				'tipoagresors_id' => 3,
				'estadojudicial_id' => 1,
			),
			74 => 
			array (
				'id' => 82,
				'alertas_id' => 98,
				'name' => 'David Zacaro y Armando Ramírez',
				'tipoagresors_id' => 3,
				'estadojudicial_id' => 1,
			),
			75 => 
			array (
				'id' => 83,
				'alertas_id' => 99,
				'name' => 'Alexis García',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			76 => 
			array (
				'id' => 84,
				'alertas_id' => 100,
				'name' => 'Alexis García',
				'tipoagresors_id' => 4,
				'estadojudicial_id' => 1,
			),
			77 => 
			array (
				'id' => 85,
				'alertas_id' => 101,
				'name' => 'Policías y Miliatres',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			78 => 
			array (
				'id' => 86,
				'alertas_id' => 102,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			79 => 
			array (
				'id' => 87,
				'alertas_id' => 103,
				'name' => 'Corte Suprema de Justicia',
				'tipoagresors_id' => 5,
				'estadojudicial_id' => 1,
			),
			80 => 
			array (
				'id' => 88,
				'alertas_id' => 104,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			81 => 
			array (
				'id' => 89,
				'alertas_id' => 105,
				'name' => 'Empleados de Aguas de Choloma',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			82 => 
			array (
				'id' => 90,
				'alertas_id' => 106,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			83 => 
			array (
				'id' => 91,
				'alertas_id' => 107,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			84 => 
			array (
				'id' => 92,
				'alertas_id' => 108,
				'name' => 'Cesar Romero',
				'tipoagresors_id' => 20,
				'estadojudicial_id' => 1,
			),
			85 => 
			array (
				'id' => 93,
				'alertas_id' => 109,
				'name' => 'Luis Alonzo Narvaez',
				'tipoagresors_id' => 22,
				'estadojudicial_id' => 1,
			),
			86 => 
			array (
				'id' => 94,
				'alertas_id' => 110,
				'name' => 'Decreto Ejecutivo',
				'tipoagresors_id' => 16,
				'estadojudicial_id' => 1,
			),
			87 => 
			array (
				'id' => 95,
				'alertas_id' => 111,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
			88 => 
			array (
				'id' => 96,
				'alertas_id' => 112,
				'name' => 'Joaquin Molina Andrade ',
				'tipoagresors_id' => 1,
				'estadojudicial_id' => 1,
			),
			89 => 
			array (
				'id' => 97,
				'alertas_id' => 113,
				'name' => 'Roosevelt Avilés ',
				'tipoagresors_id' => 3,
				'estadojudicial_id' => 1,
			),
			90 => 
			array (
				'id' => 98,
				'alertas_id' => 114,
				'name' => '“Siriavision y Telecable”',
				'tipoagresors_id' => 20,
				'estadojudicial_id' => 1,
			),
			91 => 
			array (
				'id' => 99,
				'alertas_id' => 115,
				'name' => 'Uniformados de Policias',
				'tipoagresors_id' => 26,
				'estadojudicial_id' => 1,
			),
			92 => 
			array (
				'id' => 100,
				'alertas_id' => 116,
				'name' => 'Desconocidos',
				'tipoagresors_id' => 18,
				'estadojudicial_id' => 1,
			),
		));
	}

}
