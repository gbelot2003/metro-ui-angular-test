<?php

use Illuminate\Database\Seeder;

class MunicipiosTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('municipios')->delete();
        
		\DB::table('municipios')->insert(array (
			0 => 
			array (
				'id' => '1',
				'departamento_id' => '1',
				'municipio' => 'La Ceiba',
			),
			1 => 
			array (
				'id' => '2',
				'departamento_id' => '1',
				'municipio' => 'El Porvenir',
			),
			2 => 
			array (
				'id' => '3',
				'departamento_id' => '1',
				'municipio' => 'Tela',
			),
			3 => 
			array (
				'id' => '4',
				'departamento_id' => '1',
				'municipio' => 'Jutiapa',
			),
			4 => 
			array (
				'id' => '5',
				'departamento_id' => '1',
				'municipio' => 'La Masica',
			),
			5 => 
			array (
				'id' => '6',
				'departamento_id' => '1',
				'municipio' => 'San Francisco',
			),
			6 => 
			array (
				'id' => '7',
				'departamento_id' => '1',
				'municipio' => 'Arizona',
			),
			7 => 
			array (
				'id' => '8',
				'departamento_id' => '1',
				'municipio' => 'Esparta',
			),
			8 => 
			array (
				'id' => '9',
				'departamento_id' => '2',
				'municipio' => 'Trujillo',
			),
			9 => 
			array (
				'id' => '10',
				'departamento_id' => '2',
				'municipio' => 'Balfante',
			),
			10 => 
			array (
				'id' => '11',
				'departamento_id' => '2',
				'municipio' => 'Iriona',
			),
			11 => 
			array (
				'id' => '12',
				'departamento_id' => '2',
				'municipio' => 'Limón',
			),
			12 => 
			array (
				'id' => '13',
				'departamento_id' => '2',
				'municipio' => 'Sabá',
			),
			13 => 
			array (
				'id' => '14',
				'departamento_id' => '2',
				'municipio' => 'Santa Fe',
			),
			14 => 
			array (
				'id' => '15',
				'departamento_id' => '2',
				'municipio' => 'Santa Rosa de Aguán',
			),
			15 => 
			array (
				'id' => '16',
				'departamento_id' => '2',
				'municipio' => 'Sonaguera',
			),
			16 => 
			array (
				'id' => '17',
				'departamento_id' => '2',
				'municipio' => 'Tocoa',
			),
			17 => 
			array (
				'id' => '18',
				'departamento_id' => '2',
				'municipio' => 'Bonito Oriental',
			),
			18 => 
			array (
				'id' => '19',
				'departamento_id' => '3',
				'municipio' => 'Comayagua',
			),
			19 => 
			array (
				'id' => '20',
				'departamento_id' => '3',
				'municipio' => 'Ajuterique',
			),
			20 => 
			array (
				'id' => '21',
				'departamento_id' => '3',
				'municipio' => 'El Rosario',
			),
			21 => 
			array (
				'id' => '22',
				'departamento_id' => '3',
				'municipio' => 'Esquías',
			),
			22 => 
			array (
				'id' => '23',
				'departamento_id' => '3',
				'municipio' => 'Humuya',
			),
			23 => 
			array (
				'id' => '24',
				'departamento_id' => '3',
				'municipio' => 'La Libertad',
			),
			24 => 
			array (
				'id' => '25',
				'departamento_id' => '3',
				'municipio' => 'Lamaní',
			),
			25 => 
			array (
				'id' => '26',
				'departamento_id' => '3',
				'municipio' => 'La Trinidad',
			),
			26 => 
			array (
				'id' => '27',
				'departamento_id' => '3',
				'municipio' => 'Lejamani',
			),
			27 => 
			array (
				'id' => '28',
				'departamento_id' => '3',
				'municipio' => 'Meambar',
			),
			28 => 
			array (
				'id' => '29',
				'departamento_id' => '3',
				'municipio' => 'Minas de Oro',
			),
			29 => 
			array (
				'id' => '30',
				'departamento_id' => '3',
				'municipio' => 'Ojo de Agua',
			),
			30 => 
			array (
				'id' => '31',
				'departamento_id' => '3',
				'municipio' => 'San Jerónimo',
			),
			31 => 
			array (
				'id' => '32',
				'departamento_id' => '3',
				'municipio' => 'San José de Comayagua',
			),
			32 => 
			array (
				'id' => '33',
				'departamento_id' => '3',
				'municipio' => 'San José del Potrero',
			),
			33 => 
			array (
				'id' => '34',
				'departamento_id' => '3',
				'municipio' => 'San Luis',
			),
			34 => 
			array (
				'id' => '35',
				'departamento_id' => '3',
				'municipio' => 'Sab Sebastian',
			),
			35 => 
			array (
				'id' => '36',
				'departamento_id' => '3',
				'municipio' => 'Siguatepeque',
			),
			36 => 
			array (
				'id' => '37',
				'departamento_id' => '3',
				'municipio' => 'Villa de San Antonio',
			),
			37 => 
			array (
				'id' => '38',
				'departamento_id' => '3',
				'municipio' => 'Las Lajas',
			),
			38 => 
			array (
				'id' => '39',
				'departamento_id' => '3',
				'municipio' => 'Taulabé',
			),
			39 => 
			array (
				'id' => '40',
				'departamento_id' => '4',
				'municipio' => 'Santa Rosa de Copán',
			),
			40 => 
			array (
				'id' => '41',
				'departamento_id' => '4',
				'municipio' => 'Cabañas',
			),
			41 => 
			array (
				'id' => '42',
				'departamento_id' => '4',
				'municipio' => 'Concepción',
			),
			42 => 
			array (
				'id' => '43',
				'departamento_id' => '4',
				'municipio' => 'Copán Ruinas',
			),
			43 => 
			array (
				'id' => '44',
				'departamento_id' => '4',
				'municipio' => 'Corquín',
			),
			44 => 
			array (
				'id' => '45',
				'departamento_id' => '4',
				'municipio' => 'Cucuyagua',
			),
			45 => 
			array (
				'id' => '46',
				'departamento_id' => '4',
				'municipio' => 'Dolores',
			),
			46 => 
			array (
				'id' => '47',
				'departamento_id' => '4',
				'municipio' => 'Dulce Nombre',
			),
			47 => 
			array (
				'id' => '48',
				'departamento_id' => '4',
				'municipio' => 'El Paraíso',
			),
			48 => 
			array (
				'id' => '49',
				'departamento_id' => '4',
				'municipio' => 'Florida',
			),
			49 => 
			array (
				'id' => '50',
				'departamento_id' => '4',
				'municipio' => 'La Jigua',
			),
			50 => 
			array (
				'id' => '51',
				'departamento_id' => '4',
				'municipio' => 'La Unión',
			),
			51 => 
			array (
				'id' => '52',
				'departamento_id' => '4',
				'municipio' => 'Nueva Arcadia',
			),
			52 => 
			array (
				'id' => '53',
				'departamento_id' => '4',
				'municipio' => 'San Agustin',
			),
			53 => 
			array (
				'id' => '54',
				'departamento_id' => '4',
				'municipio' => 'San Antonio',
			),
			54 => 
			array (
				'id' => '55',
				'departamento_id' => '4',
				'municipio' => 'Nueva Jerónimo',
			),
			55 => 
			array (
				'id' => '56',
				'departamento_id' => '4',
				'municipio' => 'San José',
			),
			56 => 
			array (
				'id' => '57',
				'departamento_id' => '4',
				'municipio' => 'San Juan de Opoa',
			),
			57 => 
			array (
				'id' => '58',
				'departamento_id' => '4',
				'municipio' => 'San Nicolás',
			),
			58 => 
			array (
				'id' => '59',
				'departamento_id' => '4',
				'municipio' => 'San Pedro',
			),
			59 => 
			array (
				'id' => '60',
				'departamento_id' => '4',
				'municipio' => 'Santa Rita',
			),
			60 => 
			array (
				'id' => '61',
				'departamento_id' => '4',
				'municipio' => 'Trinidad de Copán',
			),
			61 => 
			array (
				'id' => '62',
				'departamento_id' => '4',
				'municipio' => 'Veracruz',
			),
			62 => 
			array (
				'id' => '63',
				'departamento_id' => '5',
				'municipio' => 'San Pedro Sula',
			),
			63 => 
			array (
				'id' => '64',
				'departamento_id' => '5',
				'municipio' => 'Choloma',
			),
			64 => 
			array (
				'id' => '65',
				'departamento_id' => '5',
				'municipio' => 'Omoa',
			),
			65 => 
			array (
				'id' => '66',
				'departamento_id' => '5',
				'municipio' => 'Pimienta',
			),
			66 => 
			array (
				'id' => '67',
				'departamento_id' => '5',
				'municipio' => 'Potrerillos',
			),
			67 => 
			array (
				'id' => '68',
				'departamento_id' => '5',
				'municipio' => 'Puerto Cortéz',
			),
			68 => 
			array (
				'id' => '69',
				'departamento_id' => '5',
				'municipio' => 'San Antonio de Cortéz',
			),
			69 => 
			array (
				'id' => '70',
				'departamento_id' => '5',
				'municipio' => 'San Francisco de Yojoa',
			),
			70 => 
			array (
				'id' => '71',
				'departamento_id' => '5',
				'municipio' => 'San Manuel',
			),
			71 => 
			array (
				'id' => '72',
				'departamento_id' => '5',
				'municipio' => 'Santa Cruz de Yojoa',
			),
			72 => 
			array (
				'id' => '73',
				'departamento_id' => '5',
				'municipio' => 'Villanueva',
			),
			73 => 
			array (
				'id' => '74',
				'departamento_id' => '5',
				'municipio' => 'La Lima',
			),
			74 => 
			array (
				'id' => '75',
				'departamento_id' => '6',
				'municipio' => 'Choluteca',
			),
			75 => 
			array (
				'id' => '76',
				'departamento_id' => '6',
				'municipio' => 'Apacilagua',
			),
			76 => 
			array (
				'id' => '77',
				'departamento_id' => '6',
				'municipio' => 'Concepción de Maria',
			),
			77 => 
			array (
				'id' => '78',
				'departamento_id' => '6',
				'municipio' => 'Duyere',
			),
			78 => 
			array (
				'id' => '79',
				'departamento_id' => '6',
				'municipio' => 'El Corpus',
			),
			79 => 
			array (
				'id' => '80',
				'departamento_id' => '6',
				'municipio' => 'El Triunfo',
			),
			80 => 
			array (
				'id' => '81',
				'departamento_id' => '6',
				'municipio' => 'Marcovia',
			),
			81 => 
			array (
				'id' => '82',
				'departamento_id' => '6',
				'municipio' => 'Morolica',
			),
			82 => 
			array (
				'id' => '83',
				'departamento_id' => '6',
				'municipio' => 'Namasigue',
			),
			83 => 
			array (
				'id' => '84',
				'departamento_id' => '6',
				'municipio' => 'Orocuina',
			),
			84 => 
			array (
				'id' => '85',
				'departamento_id' => '6',
				'municipio' => 'Pespire',
			),
			85 => 
			array (
				'id' => '86',
				'departamento_id' => '6',
				'municipio' => 'San Antonio de Flores',
			),
			86 => 
			array (
				'id' => '87',
				'departamento_id' => '6',
				'municipio' => 'San Isidro',
			),
			87 => 
			array (
				'id' => '88',
				'departamento_id' => '6',
				'municipio' => 'San José',
			),
			88 => 
			array (
				'id' => '89',
				'departamento_id' => '6',
				'municipio' => 'San Marcos de Colón',
			),
			89 => 
			array (
				'id' => '90',
				'departamento_id' => '6',
				'municipio' => 'Santa Ana de Yusguare',
			),
			90 => 
			array (
				'id' => '91',
				'departamento_id' => '7',
				'municipio' => 'Yuscarán',
			),
			91 => 
			array (
				'id' => '92',
				'departamento_id' => '7',
				'municipio' => 'Alauca',
			),
			92 => 
			array (
				'id' => '93',
				'departamento_id' => '7',
				'municipio' => 'Danlí',
			),
			93 => 
			array (
				'id' => '94',
				'departamento_id' => '7',
				'municipio' => 'El Paraíso',
			),
			94 => 
			array (
				'id' => '95',
				'departamento_id' => '7',
				'municipio' => 'Guinope',
			),
			95 => 
			array (
				'id' => '96',
				'departamento_id' => '7',
				'municipio' => 'Jacaleapa',
			),
			96 => 
			array (
				'id' => '97',
				'departamento_id' => '7',
				'municipio' => 'Liure',
			),
			97 => 
			array (
				'id' => '98',
				'departamento_id' => '7',
				'municipio' => 'Morocelí',
			),
			98 => 
			array (
				'id' => '99',
				'departamento_id' => '7',
				'municipio' => 'Oropolí',
			),
			99 => 
			array (
				'id' => '100',
				'departamento_id' => '7',
				'municipio' => 'Potrerillos',
			),
			100 => 
			array (
				'id' => '101',
				'departamento_id' => '7',
				'municipio' => 'San Antonio de Flores',
			),
			101 => 
			array (
				'id' => '102',
				'departamento_id' => '7',
				'municipio' => 'San Lucas',
			),
			102 => 
			array (
				'id' => '103',
				'departamento_id' => '7',
				'municipio' => 'San Matías',
			),
			103 => 
			array (
				'id' => '104',
				'departamento_id' => '7',
				'municipio' => 'Soledad',
			),
			104 => 
			array (
				'id' => '105',
				'departamento_id' => '7',
				'municipio' => 'Teupacenti',
			),
			105 => 
			array (
				'id' => '106',
				'departamento_id' => '7',
				'municipio' => 'Texiguat',
			),
			106 => 
			array (
				'id' => '107',
				'departamento_id' => '7',
				'municipio' => 'Vado Ancho',
			),
			107 => 
			array (
				'id' => '108',
				'departamento_id' => '7',
				'municipio' => 'Yauyupe',
			),
			108 => 
			array (
				'id' => '109',
				'departamento_id' => '7',
				'municipio' => 'Trojes',
			),
			109 => 
			array (
				'id' => '110',
				'departamento_id' => '8',
				'municipio' => 'Distrito Central',
			),
			110 => 
			array (
				'id' => '111',
				'departamento_id' => '8',
				'municipio' => 'Alubarén',
			),
			111 => 
			array (
				'id' => '112',
				'departamento_id' => '8',
				'municipio' => 'Cedros',
			),
			112 => 
			array (
				'id' => '113',
				'departamento_id' => '8',
				'municipio' => 'Curarén',
			),
			113 => 
			array (
				'id' => '114',
				'departamento_id' => '8',
				'municipio' => 'El Porvenir',
			),
			114 => 
			array (
				'id' => '115',
				'departamento_id' => '8',
				'municipio' => 'Guaimaca',
			),
			115 => 
			array (
				'id' => '116',
				'departamento_id' => '8',
				'municipio' => 'La Libertad',
			),
			116 => 
			array (
				'id' => '117',
				'departamento_id' => '8',
				'municipio' => 'La Venta',
			),
			117 => 
			array (
				'id' => '118',
				'departamento_id' => '8',
				'municipio' => 'Lepaterique',
			),
			118 => 
			array (
				'id' => '119',
				'departamento_id' => '8',
				'municipio' => 'Maraita',
			),
			119 => 
			array (
				'id' => '120',
				'departamento_id' => '8',
				'municipio' => 'Marale',
			),
			120 => 
			array (
				'id' => '121',
				'departamento_id' => '8',
				'municipio' => 'Nueva Armenia',
			),
			121 => 
			array (
				'id' => '122',
				'departamento_id' => '8',
				'municipio' => 'Ojojona',
			),
			122 => 
			array (
				'id' => '123',
				'departamento_id' => '8',
				'municipio' => 'Orica',
			),
			123 => 
			array (
				'id' => '124',
				'departamento_id' => '8',
				'municipio' => 'Reitoca',
			),
			124 => 
			array (
				'id' => '125',
				'departamento_id' => '8',
				'municipio' => 'Sabanagrande',
			),
			125 => 
			array (
				'id' => '126',
				'departamento_id' => '8',
				'municipio' => 'San Antonio de Oriente',
			),
			126 => 
			array (
				'id' => '127',
				'departamento_id' => '8',
				'municipio' => 'Sab Buenaventura',
			),
			127 => 
			array (
				'id' => '128',
				'departamento_id' => '8',
				'municipio' => 'San Ignacio',
			),
			128 => 
			array (
				'id' => '129',
				'departamento_id' => '8',
				'municipio' => 'San Juan de Flores',
			),
			129 => 
			array (
				'id' => '130',
				'departamento_id' => '8',
				'municipio' => 'San Miguelito',
			),
			130 => 
			array (
				'id' => '131',
				'departamento_id' => '8',
				'municipio' => 'Santa Ana',
			),
			131 => 
			array (
				'id' => '132',
				'departamento_id' => '8',
				'municipio' => 'Santa Lucia',
			),
			132 => 
			array (
				'id' => '133',
				'departamento_id' => '8',
				'municipio' => 'Talanga',
			),
			133 => 
			array (
				'id' => '134',
				'departamento_id' => '8',
				'municipio' => 'Tatumbla',
			),
			134 => 
			array (
				'id' => '135',
				'departamento_id' => '8',
				'municipio' => 'Valle de Angeles',
			),
			135 => 
			array (
				'id' => '136',
				'departamento_id' => '8',
				'municipio' => 'Villa de San Francisco',
			),
			136 => 
			array (
				'id' => '137',
				'departamento_id' => '8',
				'municipio' => 'Vallecillo',
			),
			137 => 
			array (
				'id' => '138',
				'departamento_id' => '9',
				'municipio' => 'Puerto Lempira',
			),
			138 => 
			array (
				'id' => '139',
				'departamento_id' => '9',
				'municipio' => 'Brus Laguna',
			),
			139 => 
			array (
				'id' => '140',
				'departamento_id' => '9',
				'municipio' => 'Ahuas',
			),
			140 => 
			array (
				'id' => '141',
				'departamento_id' => '9',
				'municipio' => 'Juan Francisco Bulnes',
			),
			141 => 
			array (
				'id' => '142',
				'departamento_id' => '9',
				'municipio' => 'Ramón Villeda Morales',
			),
			142 => 
			array (
				'id' => '143',
				'departamento_id' => '9',
				'municipio' => 'Wampusirpe',
			),
			143 => 
			array (
				'id' => '144',
				'departamento_id' => '10',
				'municipio' => 'La Esperanza',
			),
			144 => 
			array (
				'id' => '145',
				'departamento_id' => '10',
				'municipio' => 'Camsca',
			),
			145 => 
			array (
				'id' => '146',
				'departamento_id' => '10',
				'municipio' => 'Concepción',
			),
			146 => 
			array (
				'id' => '147',
				'departamento_id' => '10',
				'municipio' => 'Dolores',
			),
			147 => 
			array (
				'id' => '148',
				'departamento_id' => '10',
				'municipio' => 'Intibucá',
			),
			148 => 
			array (
				'id' => '149',
				'departamento_id' => '10',
				'municipio' => 'Jesús de Otoro',
			),
			149 => 
			array (
				'id' => '150',
				'departamento_id' => '10',
				'municipio' => 'Magdalena',
			),
			150 => 
			array (
				'id' => '151',
				'departamento_id' => '10',
				'municipio' => 'San Antonio',
			),
			151 => 
			array (
				'id' => '152',
				'departamento_id' => '10',
				'municipio' => 'San Isidro',
			),
			152 => 
			array (
				'id' => '153',
				'departamento_id' => '10',
				'municipio' => 'San Juan',
			),
			153 => 
			array (
				'id' => '154',
				'departamento_id' => '10',
				'municipio' => 'San Marcos de la Sierra',
			),
			154 => 
			array (
				'id' => '155',
				'departamento_id' => '10',
				'municipio' => 'San Miguel Guancapla',
			),
			155 => 
			array (
				'id' => '156',
				'departamento_id' => '10',
				'municipio' => 'Santa Lucía',
			),
			156 => 
			array (
				'id' => '157',
				'departamento_id' => '10',
				'municipio' => 'Yamaranguila',
			),
			157 => 
			array (
				'id' => '158',
				'departamento_id' => '10',
				'municipio' => 'San Francisco de Opalaca',
			),
			158 => 
			array (
				'id' => '159',
				'departamento_id' => '11',
				'municipio' => 'Roatán',
			),
			159 => 
			array (
				'id' => '160',
				'departamento_id' => '11',
				'municipio' => 'Guanaja',
			),
			160 => 
			array (
				'id' => '161',
				'departamento_id' => '11',
				'municipio' => 'José Santos Guardiola',
			),
			161 => 
			array (
				'id' => '162',
				'departamento_id' => '11',
				'municipio' => 'Utila',
			),
			162 => 
			array (
				'id' => '163',
				'departamento_id' => '12',
				'municipio' => 'La Paz',
			),
			163 => 
			array (
				'id' => '164',
				'departamento_id' => '12',
				'municipio' => 'Aguanqueterque',
			),
			164 => 
			array (
				'id' => '165',
				'departamento_id' => '12',
				'municipio' => 'Cabañas',
			),
			165 => 
			array (
				'id' => '166',
				'departamento_id' => '12',
				'municipio' => 'Cane',
			),
			166 => 
			array (
				'id' => '167',
				'departamento_id' => '12',
				'municipio' => 'Chinacla',
			),
			167 => 
			array (
				'id' => '168',
				'departamento_id' => '12',
				'municipio' => 'Guajiquiro',
			),
			168 => 
			array (
				'id' => '169',
				'departamento_id' => '12',
				'municipio' => 'Lauterique',
			),
			169 => 
			array (
				'id' => '170',
				'departamento_id' => '12',
				'municipio' => 'Marcala',
			),
			170 => 
			array (
				'id' => '171',
				'departamento_id' => '12',
				'municipio' => 'Merceds de Oriente',
			),
			171 => 
			array (
				'id' => '172',
				'departamento_id' => '12',
				'municipio' => 'Opatoro',
			),
			172 => 
			array (
				'id' => '173',
				'departamento_id' => '12',
				'municipio' => 'San Antonio del Norte',
			),
			173 => 
			array (
				'id' => '174',
				'departamento_id' => '12',
				'municipio' => 'San José',
			),
			174 => 
			array (
				'id' => '175',
				'departamento_id' => '12',
				'municipio' => 'San Pedro de Tutule',
			),
			175 => 
			array (
				'id' => '176',
				'departamento_id' => '12',
				'municipio' => 'Santa Ana',
			),
			176 => 
			array (
				'id' => '177',
				'departamento_id' => '12',
				'municipio' => 'Santa Elena',
			),
			177 => 
			array (
				'id' => '178',
				'departamento_id' => '12',
				'municipio' => 'Santa María',
			),
			178 => 
			array (
				'id' => '179',
				'departamento_id' => '12',
				'municipio' => 'Santiago de Puringla',
			),
			179 => 
			array (
				'id' => '180',
				'departamento_id' => '12',
				'municipio' => 'Yarula',
			),
			180 => 
			array (
				'id' => '181',
				'departamento_id' => '13',
				'municipio' => 'Gracias',
			),
			181 => 
			array (
				'id' => '182',
				'departamento_id' => '13',
				'municipio' => 'Belén',
			),
			182 => 
			array (
				'id' => '183',
				'departamento_id' => '13',
				'municipio' => 'Candelaria',
			),
			183 => 
			array (
				'id' => '184',
				'departamento_id' => '13',
				'municipio' => 'Cololaca',
			),
			184 => 
			array (
				'id' => '185',
				'departamento_id' => '13',
				'municipio' => 'Erandique',
			),
			185 => 
			array (
				'id' => '186',
				'departamento_id' => '13',
				'municipio' => 'Gualcince',
			),
			186 => 
			array (
				'id' => '187',
				'departamento_id' => '13',
				'municipio' => 'La Campa',
			),
			187 => 
			array (
				'id' => '188',
				'departamento_id' => '13',
				'municipio' => 'La Iguala',
			),
			188 => 
			array (
				'id' => '189',
				'departamento_id' => '13',
				'municipio' => 'Las Flores',
			),
			189 => 
			array (
				'id' => '190',
				'departamento_id' => '13',
				'municipio' => 'La Union',
			),
			190 => 
			array (
				'id' => '191',
				'departamento_id' => '13',
				'municipio' => 'La Virtud',
			),
			191 => 
			array (
				'id' => '192',
				'departamento_id' => '13',
				'municipio' => 'Lepaera',
			),
			192 => 
			array (
				'id' => '193',
				'departamento_id' => '13',
				'municipio' => 'Mapulaca',
			),
			193 => 
			array (
				'id' => '194',
				'departamento_id' => '13',
				'municipio' => 'Piraera',
			),
			194 => 
			array (
				'id' => '195',
				'departamento_id' => '13',
				'municipio' => 'San Andrés',
			),
			195 => 
			array (
				'id' => '196',
				'departamento_id' => '13',
				'municipio' => 'San Francisco',
			),
			196 => 
			array (
				'id' => '197',
				'departamento_id' => '13',
				'municipio' => 'San Juan Guarita',
			),
			197 => 
			array (
				'id' => '198',
				'departamento_id' => '13',
				'municipio' => 'San Manuel Colohente',
			),
			198 => 
			array (
				'id' => '199',
				'departamento_id' => '13',
				'municipio' => 'San Rafael',
			),
			199 => 
			array (
				'id' => '200',
				'departamento_id' => '13',
				'municipio' => 'San Sebastián',
			),
			200 => 
			array (
				'id' => '201',
				'departamento_id' => '13',
				'municipio' => 'Santa Cruz',
			),
			201 => 
			array (
				'id' => '202',
				'departamento_id' => '13',
				'municipio' => 'Talgua',
			),
			202 => 
			array (
				'id' => '203',
				'departamento_id' => '13',
				'municipio' => 'Tambla',
			),
			203 => 
			array (
				'id' => '204',
				'departamento_id' => '13',
				'municipio' => 'Tamalá',
			),
			204 => 
			array (
				'id' => '205',
				'departamento_id' => '13',
				'municipio' => 'Valladolid',
			),
			205 => 
			array (
				'id' => '206',
				'departamento_id' => '13',
				'municipio' => 'Virginia',
			),
			206 => 
			array (
				'id' => '207',
				'departamento_id' => '13',
				'municipio' => 'San Marcos de Coiquín',
			),
			207 => 
			array (
				'id' => '208',
				'departamento_id' => '14',
				'municipio' => 'Ocotepeque',
			),
			208 => 
			array (
				'id' => '209',
				'departamento_id' => '14',
				'municipio' => 'Belén Gualcho',
			),
			209 => 
			array (
				'id' => '210',
				'departamento_id' => '14',
				'municipio' => 'Concepción',
			),
			210 => 
			array (
				'id' => '211',
				'departamento_id' => '14',
				'municipio' => 'Dolores Merendón',
			),
			211 => 
			array (
				'id' => '212',
				'departamento_id' => '14',
				'municipio' => 'Fraternidad',
			),
			212 => 
			array (
				'id' => '213',
				'departamento_id' => '14',
				'municipio' => 'La Encarnación',
			),
			213 => 
			array (
				'id' => '214',
				'departamento_id' => '14',
				'municipio' => 'La Labor',
			),
			214 => 
			array (
				'id' => '215',
				'departamento_id' => '14',
				'municipio' => 'Lucerna',
			),
			215 => 
			array (
				'id' => '216',
				'departamento_id' => '14',
				'municipio' => 'Mercedes',
			),
			216 => 
			array (
				'id' => '217',
				'departamento_id' => '14',
				'municipio' => 'San Fernando',
			),
			217 => 
			array (
				'id' => '218',
				'departamento_id' => '14',
				'municipio' => 'San Francisco del Valle',
			),
			218 => 
			array (
				'id' => '219',
				'departamento_id' => '14',
				'municipio' => 'Sab Jorge',
			),
			219 => 
			array (
				'id' => '220',
				'departamento_id' => '14',
				'municipio' => 'San Marcos',
			),
			220 => 
			array (
				'id' => '221',
				'departamento_id' => '14',
				'municipio' => 'Santa Fé',
			),
			221 => 
			array (
				'id' => '222',
				'departamento_id' => '14',
				'municipio' => 'Sensenti',
			),
			222 => 
			array (
				'id' => '223',
				'departamento_id' => '14',
				'municipio' => 'Sinuapa',
			),
			223 => 
			array (
				'id' => '224',
				'departamento_id' => '15',
				'municipio' => 'Juticalpa',
			),
			224 => 
			array (
				'id' => '225',
				'departamento_id' => '15',
				'municipio' => 'Campamento',
			),
			225 => 
			array (
				'id' => '226',
				'departamento_id' => '15',
				'municipio' => 'Catacamas',
			),
			226 => 
			array (
				'id' => '227',
				'departamento_id' => '15',
				'municipio' => 'Concordia',
			),
			227 => 
			array (
				'id' => '228',
				'departamento_id' => '15',
				'municipio' => 'Dulce Nombre de Culmin',
			),
			228 => 
			array (
				'id' => '229',
				'departamento_id' => '15',
				'municipio' => 'El Rosario',
			),
			229 => 
			array (
				'id' => '230',
				'departamento_id' => '15',
				'municipio' => 'Esquipulas del Norte',
			),
			230 => 
			array (
				'id' => '231',
				'departamento_id' => '15',
				'municipio' => 'Gualaco',
			),
			231 => 
			array (
				'id' => '232',
				'departamento_id' => '15',
				'municipio' => 'Guarizama',
			),
			232 => 
			array (
				'id' => '233',
				'departamento_id' => '15',
				'municipio' => 'Guata',
			),
			233 => 
			array (
				'id' => '234',
				'departamento_id' => '15',
				'municipio' => 'Jano',
			),
			234 => 
			array (
				'id' => '235',
				'departamento_id' => '15',
				'municipio' => 'La Unión',
			),
			235 => 
			array (
				'id' => '236',
				'departamento_id' => '15',
				'municipio' => 'Manguelile',
			),
			236 => 
			array (
				'id' => '237',
				'departamento_id' => '15',
				'municipio' => 'Manto',
			),
			237 => 
			array (
				'id' => '238',
				'departamento_id' => '15',
				'municipio' => 'Salamá',
			),
			238 => 
			array (
				'id' => '239',
				'departamento_id' => '15',
				'municipio' => 'San Esteban',
			),
			239 => 
			array (
				'id' => '240',
				'departamento_id' => '15',
				'municipio' => 'San Francisco de Becerra',
			),
			240 => 
			array (
				'id' => '241',
				'departamento_id' => '15',
				'municipio' => 'San Francisco de la paz',
			),
			241 => 
			array (
				'id' => '242',
				'departamento_id' => '15',
				'municipio' => 'Santa María del Real',
			),
			242 => 
			array (
				'id' => '243',
				'departamento_id' => '15',
				'municipio' => 'Silca',
			),
			243 => 
			array (
				'id' => '244',
				'departamento_id' => '15',
				'municipio' => 'Yocón',
			),
			244 => 
			array (
				'id' => '245',
				'departamento_id' => '15',
				'municipio' => 'Patuca',
			),
			245 => 
			array (
				'id' => '246',
				'departamento_id' => '16',
				'municipio' => 'Santa Bárbara',
			),
			246 => 
			array (
				'id' => '247',
				'departamento_id' => '16',
				'municipio' => 'Arada',
			),
			247 => 
			array (
				'id' => '248',
				'departamento_id' => '16',
				'municipio' => 'Atima',
			),
			248 => 
			array (
				'id' => '250',
				'departamento_id' => '16',
				'municipio' => 'Azacualpa',
			),
			249 => 
			array (
				'id' => '251',
				'departamento_id' => '16',
				'municipio' => 'Ceguaca',
			),
			250 => 
			array (
				'id' => '252',
				'departamento_id' => '16',
				'municipio' => 'Consepción del Norte',
			),
			251 => 
			array (
				'id' => '253',
				'departamento_id' => '16',
				'municipio' => 'Consepción del Sur',
			),
			252 => 
			array (
				'id' => '254',
				'departamento_id' => '16',
				'municipio' => 'Chinda',
			),
			253 => 
			array (
				'id' => '255',
				'departamento_id' => '16',
				'municipio' => 'El Nispero',
			),
			254 => 
			array (
				'id' => '256',
				'departamento_id' => '16',
				'municipio' => 'LLama',
			),
			255 => 
			array (
				'id' => '257',
				'departamento_id' => '16',
				'municipio' => 'Las Vegas',
			),
			256 => 
			array (
				'id' => '258',
				'departamento_id' => '16',
				'municipio' => 'Macuelizo',
			),
			257 => 
			array (
				'id' => '259',
				'departamento_id' => '16',
				'municipio' => 'Naranjito',
			),
			258 => 
			array (
				'id' => '260',
				'departamento_id' => '16',
				'municipio' => 'Nueva Celilac',
			),
			259 => 
			array (
				'id' => '261',
				'departamento_id' => '16',
				'municipio' => 'Nueva Frontera',
			),
			260 => 
			array (
				'id' => '262',
				'departamento_id' => '16',
				'municipio' => 'Petoa',
			),
			261 => 
			array (
				'id' => '263',
				'departamento_id' => '16',
				'municipio' => 'Protección',
			),
			262 => 
			array (
				'id' => '264',
				'departamento_id' => '16',
				'municipio' => 'Quimistán',
			),
			263 => 
			array (
				'id' => '265',
				'departamento_id' => '16',
				'municipio' => 'San Fransisco de Ojuera',
			),
			264 => 
			array (
				'id' => '266',
				'departamento_id' => '16',
				'municipio' => 'San José de las Colinas',
			),
			265 => 
			array (
				'id' => '268',
				'departamento_id' => '16',
				'municipio' => 'San Luis',
			),
			266 => 
			array (
				'id' => '270',
				'departamento_id' => '16',
				'municipio' => 'San Marcos',
			),
			267 => 
			array (
				'id' => '271',
				'departamento_id' => '16',
				'municipio' => 'San Nicolás',
			),
			268 => 
			array (
				'id' => '272',
				'departamento_id' => '16',
				'municipio' => 'San Pedro de Zacapa',
			),
			269 => 
			array (
				'id' => '273',
				'departamento_id' => '16',
				'municipio' => 'San Vicente Centenario',
			),
			270 => 
			array (
				'id' => '274',
				'departamento_id' => '16',
				'municipio' => 'Santa Rita',
			),
			271 => 
			array (
				'id' => '275',
				'departamento_id' => '16',
				'municipio' => 'Trinidad',
			),
			272 => 
			array (
				'id' => '276',
				'departamento_id' => '17',
				'municipio' => 'Nacaome',
			),
			273 => 
			array (
				'id' => '277',
				'departamento_id' => '17',
				'municipio' => 'Alianza',
			),
			274 => 
			array (
				'id' => '278',
				'departamento_id' => '17',
				'municipio' => 'Amapala',
			),
			275 => 
			array (
				'id' => '279',
				'departamento_id' => '17',
				'municipio' => 'Aramecina',
			),
			276 => 
			array (
				'id' => '280',
				'departamento_id' => '17',
				'municipio' => 'Caridad',
			),
			277 => 
			array (
				'id' => '281',
				'departamento_id' => '17',
				'municipio' => 'Goascorán',
			),
			278 => 
			array (
				'id' => '282',
				'departamento_id' => '17',
				'municipio' => 'Langue',
			),
			279 => 
			array (
				'id' => '283',
				'departamento_id' => '17',
				'municipio' => 'San Francisco de Coray',
			),
			280 => 
			array (
				'id' => '284',
				'departamento_id' => '17',
				'municipio' => 'San Lorenzo',
			),
			281 => 
			array (
				'id' => '285',
				'departamento_id' => '18',
				'municipio' => 'Yoro',
			),
			282 => 
			array (
				'id' => '286',
				'departamento_id' => '18',
				'municipio' => 'Arenal',
			),
			283 => 
			array (
				'id' => '287',
				'departamento_id' => '18',
				'municipio' => 'El Negrito',
			),
			284 => 
			array (
				'id' => '288',
				'departamento_id' => '18',
				'municipio' => 'EL Progreso',
			),
			285 => 
			array (
				'id' => '289',
				'departamento_id' => '18',
				'municipio' => 'Jocón',
			),
			286 => 
			array (
				'id' => '291',
				'departamento_id' => '18',
				'municipio' => 'Morazán',
			),
			287 => 
			array (
				'id' => '292',
				'departamento_id' => '18',
				'municipio' => 'Olanchito',
			),
			288 => 
			array (
				'id' => '293',
				'departamento_id' => '18',
				'municipio' => 'Santa Rita',
			),
			289 => 
			array (
				'id' => '294',
				'departamento_id' => '18',
				'municipio' => 'Sulaco',
			),
			290 => 
			array (
				'id' => '295',
				'departamento_id' => '18',
				'municipio' => 'Victoria',
			),
			291 => 
			array (
				'id' => '296',
				'departamento_id' => '18',
				'municipio' => 'Yorito',
			),
		));
	}

}
