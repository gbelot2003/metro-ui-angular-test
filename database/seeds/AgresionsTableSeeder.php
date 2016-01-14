<?php

use Illuminate\Database\Seeder;

class AgresionsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('agresions')->delete();
        
		\DB::table('agresions')->insert(array (
			0 => 
			array (
				'id' => '1',
				'agresion' => 'Asesinato',
				'agresioncategorias_id' => '1',
				'description' => 'Acciones con las que se priva de la vida a una persona, en razón de su tarea de informar o de comunicar. O haya sido desaparecida o dada por muerta, cualquiera que sea el medio que haya sido utilizado por el agresor.',
			),
			1 => 
			array (
				'id' => '2',
				'agresion' => 'Atentado',
				'agresioncategorias_id' => '2',
				'description' => 'Un acto de acoso generalizado de mala fe que conlleva diversas acciones y diferentes intensidades de violencia. Es realizado por una persona, o por un grupo de ellas, contra otra, u otras, sean funcionarios públicos o civiles. O, contra objetos ajenos, públicos o privados, con el objetivo de causar daño a la persona o a sus bienes. Como la muerte, en el caso; o la destrucción, si se trata de objetos.',
			),
			2 => 
			array (
				'id' => '3',
				'agresion' => 'Daño Moral',
				'agresioncategorias_id' => '3',
				'description' => 'Implica en acciones de agravio, de menoscabo, en las que se rebaja el nivel de las capacidades personales y subjetivas, o que suscitan un descredito profesional. Siempre en función del ejercicio de la libertad de expresión.',
			),
			3 => 
			array (
				'id' => '4',
				'agresion' => 'Amenazas',
				'agresioncategorias_id' => '4',
				'description' => 'Aviso de una represalia inminente a ser realizada por quien agrede. El mensaje es verbal o escrito, dado en forma directa; o por vías indirectas, como teléfono o mensajes electrónicos, o por medio de otra persona; con el objetivo de provocar la auto censura o censura indirecta.',
			),
			4 => 
			array (
				'id' => '5',
				'agresion' => 'Amenazas a muerte',
				'agresioncategorias_id' => '4',
				'description' => 'La represalia anunciada en el mensaje del que avisa, o manda avisar, es que va a matar a la víctima escogida.',
			),
			5 => 
			array (
				'id' => '6',
				'agresion' => 'Hostigamiento',
				'agresioncategorias_id' => '4',
			'description' => 'Es un contexto de acciones repetidas de acoso progresivo en un mismo evento o una secuencia de estos. Causada por motivos políticos o por presión exterior. Ejemplo: se le niega o limita la entrada el acceso a un sitio (o la salida), a una cosa, un recurso, o a una persona; confiscación o destrucción de sus materiales y equipos; se les limita su libertad de movimiento; se les despide o son degradados de puesto; se hacen ataque a sus familiares.',
			),
			6 => 
			array (
				'id' => '7',
				'agresion' => 'Intimidación',
				'agresioncategorias_id' => '4',
				'description' => 'El efecto de acciones que buscan infundir miedo, como una angustia perturbadora del ánimo personal ante un riesgo o un daño, real o imaginario. O bien, producir temor, a fin de provocar el deseo de huir, o de rehusar una actividad, o un algo, que se obliga a ver como dañoso, arriesgado o peligroso. Con actos que influyen en el trabajo. Sea en sentido editorial, o en la línea informativa de la persona que comunica, que edita, dirige, o trabaja, en un medio de comunicación o campo equivalente.
',
			),
			7 => 
			array (
				'id' => '8',
				'agresion' => 'Presión Psicológica',
				'agresioncategorias_id' => '4',
				'description' => 'El efecto de un conjunto indiscriminado de acciones encaminadas a provocar zozobra, y desestabilizar la organización sicológica de la persona agredida. Están destinadas a causar tensión para coaccionar a la victima a que su trabajo informativo, o comunicativo, se efectúe en cierta forma, o impedir que se realice.
',
			),
			8 => 
			array (
				'id' => '9',
				'agresion' => 'Ataque corporal',
				'agresioncategorias_id' => '5',
				'description' => 'Cualquier arremetida en la que se producen empujones violentos, golpes o heridas al cuerpo de la victima agredida.
',
			),
			9 => 
			array (
				'id' => '10',
				'agresion' => 'Ataque corporal con arma',
				'agresioncategorias_id' => '5',
				'description' => 'Cualquier arremetida en la que se causan golpes o heridas, con
arma o cualquier objeto que cumpla tal función, al cuerpo de la
víctima agredida.
',
			),
			10 => 
			array (
				'id' => '11',
				'agresion' => 'Ataque a edificios',
				'agresioncategorias_id' => '5',
				'description' => 'Cuando un medio de información es dañado, allanado o registrado; incluso cuando algún empleado de la compañía que no es periodista es atacado a consecuencia del trabajo  informativo del medio.
',
			),
			11 => 
			array (
				'id' => '12',
				'agresion' => 'Daño Economico',
				'agresioncategorias_id' => '7',
				'description' => 'Se refiere a las acciones que causan destrucción, total o parcial, de equipos, instrumentos, recursos; y sus costos de reparación. O pagos probables necesarios para recuperar o recomponer lo dañado.
',
			),
			12 => 
			array (
				'id' => '13',
				'agresion' => 'Daño a la salud',
				'agresioncategorias_id' => '5',
				'description' => 'Daños temporales, o definitivos, provocados al organismo por medios físicos o químicos a causa del ejercicio de derecho de expresión de una persona.
',
			),
			13 => 
			array (
				'id' => '14',
				'agresion' => 'Sabotaje',
				'agresioncategorias_id' => '5',
				'description' => 'Consiste en una acción deliberada para ejecutar disturbios, la obstrucción, la interrupción o la destrucción de material por alguien, que va dirigida a debilitar a otra persona, a la que cree su adversaria.
',
			),
			14 => 
			array (
				'id' => '15',
				'agresion' => 'Detención Arbitraria',
				'agresioncategorias_id' => '4',
				'description' => 'Acciones de privación de la libertad por el ejercicio del derecho
de expresión en una práctica informativa, comunicativa. Sea que
ésta se halle en proceso, o que haya sido publicada, o aun esté por publicarse. Si es detenido a causa del ejercicio de su profesión.
',
			),
			15 => 
			array (
				'id' => '16',
			'agresion' => 'Desplazamiento (refugio o exilio) forzado',
				'agresioncategorias_id' => '5',
				'description' => 'Cuando una persona, periodista o comunicadora, es obligada a salir, sea en forma temporal, o definitiva, de su lugar o país de origen, por el temor fundado de que es perseguido por una causa relacionada a su libertad de expresión.',
			),
			16 => 
			array (
				'id' => '17',
				'agresion' => 'Secuestro',
				'agresioncategorias_id' => '5',
				'description' => 'Si no se presume la participación del Estado, se perfila un secuestro extorsivo. El Pacto Internacional de Derechos Civiles y Políticos y la Convención Americana sobre Derechos Humanos y otros instrumentos internacionales, obligan a cada Estado Parte, a “tomar medidas para proteger la vida, libertad, intimidad, reputación y demás derechos fundamentales de la población frente a la delincuencia común u organizada” ',
			),
			17 => 
			array (
				'id' => '18',
				'agresion' => 'Hostigamiento Judicia',
				'agresioncategorias_id' => '6',
				'description' => 'Amenazas de funcionarios de iniciar acciones judiciales contra un medio o periodista; demandas por daños y perjuicios o querellas por calumnias e injurias destinadas a inhibir la difusión de un hecho o de una crítica; sentencias a prisión o a pagar indemnizaciones por esos delitos; imposición para revelar fuentes de información, arresto o detención por orden de autoridades judiciales; allanamiento de medios de comunicación.
',
			),
			18 => 
			array (
				'id' => '19',
				'agresion' => 'Impunidad',
				'agresioncategorias_id' => '7',
				'description' => '',
			),
			19 => 
			array (
				'id' => '20',
				'agresion' => 'Suspención o negación de Credenciales',
				'agresioncategorias_id' => '7',
				'description' => 'Cuando se le niegan o se le suspenden credenciales a un periodista; se le niega o cancela una visa, con el claro propósito de impedir realizar una cobertura informativa.
',
			),
			20 => 
			array (
				'id' => '21',
				'agresion' => 'Restricciones Legales',
				'agresioncategorias_id' => '6',
			'description' => 'Aprobación de leyes restrictivas para la libertad de prensa individual y de medios, o se presentan proyectos legislativos o decretos del ejecutivo con esa finalidad. Si la identidad agredida es demanda por difamación a fin de suprimir (ignorar, detener) una noticia. Cuando es multado o sentenciado a prisión.
',
			),
			21 => 
			array (
				'id' => '22',
				'agresion' => 'Despidos injustificados',
				'agresioncategorias_id' => '7',
				'description' => 'Es la cancelación definitiva del empleo a la víctima, por reclamar derecho de expresión, casi siempre impulsada por la presión que ejercen actores externos, estatales y no estatales; por denunciar irregularidades; o por investigar temas que el medio censura.
',
			),
			22 => 
			array (
				'id' => '23',
				'agresion' => 'Inpedimentos informativos',
				'agresioncategorias_id' => '6',
				'description' => 'Son acciones con las que se retiene, o se oculta, en forma deliberada, informaciones para obstaculizar la investigación o cobertura de un tema determinado. Incluye restringir acceso a la información pública.',
			),
			23 => 
			array (
				'id' => '24',
				'agresion' => 'Presiones económicas',
				'agresioncategorias_id' => '7',
				'description' => 'Se utiliza la contratación de publicidad en un medio determinado, como una forma de premiar o sancionar por la línea informativa. Es un elemento capaz de inhibir el ejercicio crítico. También el uso arbitrario de controles administrativos o tributarios.
',
			),
			24 => 
			array (
				'id' => '25',
				'agresion' => 'Chantaje/Extorción',
				'agresioncategorias_id' => '7',
				'description' => 'Mediante actos violetos o intimidatorios, una persona es obligada a realizar u omitir un acto o negocio jurídico con, o sin, ánimo de lucro y con la intención de causar un perjuicio patrimonial o bien del sujeto pasivo, o de un tercero.
',
			),
			25 => 
			array (
				'id' => '26',
				'agresion' => 'Obstrucción informativa',
				'agresioncategorias_id' => '7',
				'description' => 'Diversas formas de agresión que impiden el acceso, o la permanencia, en el contexto donde ocurre un acontecimiento para obtener o continuar una información a la que se busca darle cobertura periodística.
',
			),
			26 => 
			array (
				'id' => '27',
				'agresion' => 'Represión ilegal e injustificada',
				'agresioncategorias_id' => '7',
			'description' => 'Cuando las personas que realizan una cobertura periodística, en un evento, o circunstancia, son impedidas o reprimidas por agentes del estado (policías, militares y otros similares) a fin de evitar que obtengan información sobre los hechos ocurridos.
',
			),
			27 => 
			array (
				'id' => '28',
				'agresion' => 'Restricción a la democracia',
				'agresioncategorias_id' => '7',
				'description' => 'Toda acción que, de una forma o de otra, limita las libertades y la práctica de la democracia, mediante normas impuestas por el Estado. Produce un contrasentido que afrenta la calidad de estado democrático.
',
			),
			28 => 
			array (
				'id' => '29',
				'agresion' => 'Censura',
				'agresioncategorias_id' => '5',
				'description' => 'Censura',
			),
			29 => 
			array (
				'id' => '30',
				'agresion' => 'Rapto',
				'agresioncategorias_id' => '7',
				'description' => 'Una persona se lleva o retiene a otra a la fuerza, es decir, sin su consentimiento con la intención de miras deshonestas o menoscabar su integridad sexual.',
			),
			30 => 
			array (
				'id' => '31',
				'agresion' => 'Derechos digitales',
				'agresioncategorias_id' => '7',
				'description' => 'Persecución digital, hackeos, intervenciones telefónicas.',
			),
			31 => 
			array (
				'id' => '32',
				'agresion' => 'Uso abusivo del poder del Estado',
				'agresioncategorias_id' => '7',
				'description' => 'Deportación, estigmatización, criminalización, exilio, abuso de control de publicidad.',
			),
			32 => 
			array (
				'id' => '33',
				'agresion' => 'Uso abusivo del poder no estatal',
				'agresioncategorias_id' => '7',
				'description' => 'Control mediante la publicidad, estigmatización.',
			),
			33 => 
			array (
				'id' => '34',
				'agresion' => 'Decomiso de equipo',
				'agresioncategorias_id' => '5',
				'description' => 'Decomiso de equipo',
			),
			34 => 
			array (
				'id' => '35',
				'agresion' => 'Allanamiento',
				'agresioncategorias_id' => '8',
				'description' => 'Allanamiento ',
			),
			35 => 
			array (
				'id' => '36',
				'agresion' => 'Criminalizacion',
				'agresioncategorias_id' => '8',
				'description' => 'Criminalizacion',
			),
			36 => 
			array (
				'id' => '37',
				'agresion' => 'Robo',
				'agresioncategorias_id' => '5',
				'description' => 'Robo',
			),
			37 => 
			array (
				'id' => '38',
				'agresion' => 'Hackeo',
				'agresioncategorias_id' => '7',
				'description' => 'Hackeo',
			),
			38 => 
			array (
				'id' => '39',
				'agresion' => 'Expulsion ',
				'agresioncategorias_id' => '8',
				'description' => 'Expulsion',
			),
			39 => 
			array (
				'id' => '40',
				'agresion' => 'Acoso Cibernetico',
				'agresioncategorias_id' => '7',
				'description' => 'Acoso Cibernetico',
			),
			40 => 
			array (
				'id' => '41',
				'agresion' => 'Violación a la libertad de expresión ',
				'agresioncategorias_id' => '6',
				'description' => 'Violación a la libertad de expresión ',
			),
		));
	}

}
