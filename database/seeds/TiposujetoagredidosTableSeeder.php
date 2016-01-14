<?php

use Illuminate\Database\Seeder;

class TiposujetoagredidosTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('tiposujetoagredidos')->delete();
        
		\DB::table('tiposujetoagredidos')->insert(array (
			0 => 
			array (
				'id' => '1',
				'tiposujetoagredido' => 'Periodista',
			),
			1 => 
			array (
				'id' => '2',
				'tiposujetoagredido' => 'Comunicador Social',
			),
			2 => 
			array (
				'id' => '3',
				'tiposujetoagredido' => 'Camarógrafo',
			),
			3 => 
			array (
				'id' => '4',
				'tiposujetoagredido' => 'Vocero de grupos campesinos',
			),
			4 => 
			array (
				'id' => '5',
				'tiposujetoagredido' => 'Periodista independiente',
			),
			5 => 
			array (
				'id' => '6',
				'tiposujetoagredido' => 'Relacionador Pùblico',
			),
			6 => 
			array (
				'id' => '7',
				'tiposujetoagredido' => 'Gerente de Medio de Comunicaciòn',
			),
			7 => 
			array (
				'id' => '8',
				'tiposujetoagredido' => 'Medio Digital',
			),
			8 => 
			array (
				'id' => '9',
				'tiposujetoagredido' => 'Dueño de Medio de Comunicaciòn',
			),
			9 => 
			array (
				'id' => '10',
				'tiposujetoagredido' => 'Fuente de Consulta Mediatìca',
			),
			10 => 
			array (
				'id' => '11',
				'tiposujetoagredido' => 'Corresponsal Internacional',
			),
			11 => 
			array (
				'id' => '12',
				'tiposujetoagredido' => 'Presentador de TV',
			),
			12 => 
			array (
				'id' => '13',
				'tiposujetoagredido' => 'Locutor',
			),
			13 => 
			array (
				'id' => '14',
				'tiposujetoagredido' => 'Estudiante de Periodismo',
			),
			14 => 
			array (
				'id' => '15',
				'tiposujetoagredido' => 'Estudiantes',
			),
			15 => 
			array (
				'id' => '16',
				'tiposujetoagredido' => 'Gremios Sociales',
			),
			16 => 
			array (
				'id' => '17',
				'tiposujetoagredido' => 'Artista',
			),
			17 => 
			array (
				'id' => '18',
				'tiposujetoagredido' => 'Instalaciones Físicas de Medio de Comunicaciòn',
			),
			18 => 
			array (
				'id' => '19',
				'tiposujetoagredido' => 'Defensor de DDHH',
			),
			19 => 
			array (
				'id' => '20',
				'tiposujetoagredido' => 'Abogados',
			),
			20 => 
			array (
				'id' => '21',
				'tiposujetoagredido' => 'Líder Comunitario',
			),
			21 => 
			array (
				'id' => '22',
				'tiposujetoagredido' => 'ONG/DDHH',
			),
			22 => 
			array (
				'id' => '23',
				'tiposujetoagredido' => 'Religiosos',
			),
			23 => 
			array (
				'id' => '24',
				'tiposujetoagredido' => 'Activista Politico',
			),
			24 => 
			array (
				'id' => '25',
				'tiposujetoagredido' => 'Grupo de Periodistas',
			),
			25 => 
			array (
				'id' => '26',
				'tiposujetoagredido' => 'Edificio de Medio
',
			),
			26 => 
			array (
				'id' => '27',
				'tiposujetoagredido' => 'Comunicador Comunitario',
			),
			27 => 
			array (
				'id' => '29',
				'tiposujetoagredido' => 'Radio Comunitaria',
			),
			28 => 
			array (
				'id' => '30',
				'tiposujetoagredido' => 'Fotografo',
			),
		));
	}

}
