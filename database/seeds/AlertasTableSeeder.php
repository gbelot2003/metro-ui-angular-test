<?php

use Illuminate\Database\Seeder;

class AlertasTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('alertas')->delete();
        
		\DB::table('alertas')->insert(array (
			0 => 
			array (
				'id' => 27,
				'title' => 'Instituciones del Estado restringen los derechos a la libertad de expresión y acceso a la información',
				'number' => '0001-201',
				'mes_id' => 1,
				'year' => 2013,
				'departamentos_id' => 8,
				'municipios_id' => 110,
				'body' => '<p style=\\"text-align: justify;\\">
<span style=\\"font-family: arial, helvetica, sans-serif; font-size: 16px;\\">La oficina regional del Comisionado Nacional de los Derechos Humanos -CONADEH-, ha restringido la toma de fotograf&iacute;as, videos y entrevistas a los migrantes que se encuentran en calidad de detenidos en el Centro para Migrantes ubicado en la ciudad de Choluteca al sur del pa&iacute;s, inform&oacute; al peri&oacute;dico digital Conexi&oacute;n.info, el se&ntilde;or Miguel Farach, encargado de ese organismo dependiente de la Direcci&oacute;n General de Migraci&oacute;n y Extranjer&iacute;a y esta a su vez de la Secretaria del Interior y Poblaci&oacute;n -SIYP- . &nbsp;</span></p>
<p style=\\"text-align: justify;\\">
<span style=\\"font-size:16px;\\"><span style=\\"font-family:arial,helvetica,sans-serif;\\">De acuerdo con las declaraciones del funcionario p&uacute;blico estas medidas se aplican para &nbsp;evitar la violaci&oacute;n de los derechos humanos de los migrantes.</span></span></p>
<p style=\\"text-align: justify;\\">
<span style=\\"font-size:16px;\\"><span style=\\"font-family:arial,helvetica,sans-serif;\\">Consultada sobre el particular, la Licenciada Lilian Rodr&iacute;guez delegada del CONADEH en la zona sur, inform&oacute; que ella no ha girado instrucciones en ese sentido y que niega rotundamente&nbsp; las versiones del Jefe de Migraci&oacute;n en la ciudad de Choluteca. As&iacute; mismo manifest&oacute; que quienes establecen esas &oacute;rdenes son ellos mismos.</span></span></p>
<p style=\\"text-align: justify;\\">
<span style=\\"font-size:16px;\\"><span style=\\"font-family:arial,helvetica,sans-serif;\\">El peri&oacute;dico digital Conexi&oacute;n.info, espacio comunicativo del Comit&eacute; por la Libertad de Expresi&oacute;n -C-libre-, tratando de obtener declaraciones de los detenidos, para conocer su estado f&iacute;sico y de salud, y en apego al derecho universal a la libertad de expresi&oacute;n y de libre acceso a la informaci&oacute;n p&uacute;blica que gozamos todos/as los seres humanos, no pudo realizar su trabajo, por cuanto el se&ntilde;or Farach, no lo permiti&oacute;, aduciendo que la &ldquo;oficina regional del CONADEH, tiene restringido la toma de fotograf&iacute;as, videos y entrevistas como pol&iacute;tica para evitar la violaci&oacute;n de los derechos humanos de los migrantes&rdquo;.</span></span></p>
<p style=\\"text-align: justify;\\">
<span style=\\"font-size:16px;\\"><span style=\\"font-family:arial,helvetica,sans-serif;\\">Para C-libre esta medida, proceda de donde proceda, adem&aacute;s de arbitraria, violenta el derecho a la libertad de expresi&oacute;n de los migrantes en calidad de detenidos, en esa instituci&oacute;n del Estado, pero por otra parte es un obst&aacute;culo al libre ejercicio profesional del periodismo, puesto que limita el libre acceso a la informaci&oacute;n; ambos derechos garantizados en la Constituci&oacute;n de la Rep&uacute;blica de Honduras, la Convenci&oacute;n Interamericana de los Derechos Humanos y la Declaraci&oacute;n Universal de los Derechos Humanos, entre otras.</span></span></p>
<p style=\\"text-align: justify;\\">
<span style=\\"font-size:16px;\\"><span style=\\"font-family:arial,helvetica,sans-serif;\\">Al respecto El art&iacute;culo 19 de la Declaraci&oacute;n Universal de los Derechos Humanos establece que: &ldquo;todo individuo tiene derecho a la libertad de opini&oacute;n y de expresi&oacute;n; este derecho incluye el de no ser molestado a causa de sus opiniones, el de investigar y recibir informaciones y opiniones, y el de difundirlas, sin limitaci&oacute;n de fronteras, por cualquier medio de expresi&oacute;n&rdquo;.</span></span></p>
<p style=\\"text-align: justify;\\">
<span style=\\"font-size:16px;\\"><span style=\\"font-family:arial,helvetica,sans-serif;\\">Por su parte el art&iacute;culo 30 limita a los Estados a grupos o a una persona, para que &nbsp;puedan &ldquo;emprender y desarrollar actividades o realizar actos tendientes a la supresi&oacute;n de cualquiera de los derechos y libertades&rdquo;.</span></span></p>
<p style=\\"text-align: justify;\\">
<span style=\\"font-size:16px;\\"><span style=\\"font-family:arial,helvetica,sans-serif;\\">Tambi&eacute;n el art&iacute;culo 13, inciso 3 de la Convenci&oacute;n dice que no se puede restringir el derecho de expresi&oacute;n por v&iacute;as o medios indirectos, tales como el abuso de controles oficiales. Adem&aacute;s que el art&iacute;culo 29 cita que no se permite a alguno de los Estados Partes, grupo o persona, suprimir el goce y ejercicio de los derechos y libertades reconocidos en la misma Convenci&oacute;n o limitarlos en mayor medida que la prevista en ella.En tal sentido no se puede excluir otros derechos y garant&iacute;as que son inherentes al ser humano o que se derivan de la forma democr&aacute;tica representativa de gobierno aun y cuando las mismas sean para proteger los otros derechos que tenemos las personas.Adem&aacute;s de la violaci&oacute;n del derecho a la libertad de expresi&oacute;n, a su paso por Honduras los migrantes, son asaltados, secuestrados y maltratados por los llamados &ldquo;coyotes&rdquo; o traficantes de ilegales y por polic&iacute;as corruptos, que ven en su desdicha una mina de oro para enriquecerse sin ning&uacute;n escr&uacute;pulo o cargo de conciencia.</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 2,
				'published_date' => '2013-01-08 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-04-29 18:02:18',
			),
			1 => 
			array (
				'id' => 28,
				'title' => 'Sin avances crímenes de Villalobos y Landaverde',
				'number' => '0002',
				'mes_id' => 1,
				'year' => 2012,
				'departamentos_id' => 8,
				'municipios_id' => 110,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="background-color: white; text-align: justify;">En el mes de diciembre del 2011, en la ciudad capital de Honduras, ocurrieron dos cr&iacute;menes de personalidades medi&aacute;ticas. El martes seis, la periodista radial Luz Marina Paz Villalobos fue asesinada junto a su motorista y &nbsp;al d&iacute;a siguiente sicarios en motocicleta acribillaron al experto en temas antidrogas, Alfredo Landaverde.</span></span></span></p>
<p style="margin: 0cm 0cm 0.0001pt; background-color: white; text-align: justify; background-position: initial initial; background-repeat: initial initial;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span lang="ES-AR">&nbsp;</span></span></span></p>
<p style="margin: 0cm 0cm 0.0001pt; background-color: white; text-align: justify; background-position: initial initial; background-repeat: initial initial;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span lang="ES-AR">La periodista radia Villalobos fue asesinada en medio de una campa&ntilde;a de censuras, ataques y agresiones a la libertad de expresi&oacute;n hacia los medios de comunicaci&oacute;n as&iacute; como periodistas que cubren las fuentes policiales y judiciales.</span></span></span><span lang="ES-AR" style="font-size: 10pt; font-family: Verdana, sans-serif;"><o:p></o:p></span></p>
<p style="background-color: white; text-align: justify; background-position: initial initial; background-repeat: initial initial;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span lang="ES-AR">Por su parte el crimen del analista Landaverde, una fuente de consulta accesibles a los medios de comunicaci&oacute;n, se produce tras develar que desde la misma polic&iacute;a se hab&iacute;a asesinado al zar antidrogas, el extinto general Ar&iacute;stides Gonz&aacute;lez, hace dos a&ntilde;os, justo cuando se dispon&iacute;a a presentar una lista de polic&iacute;as corruptos implicados en el narcotr&aacute;fico. </span></span></span><span lang="ES-AR" style="font-size: 10pt; font-family: Verdana, sans-serif;"><o:p></o:p></span></p>
<p style="background-color: white; text-align: justify; background-position: initial initial; background-repeat: initial initial;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span lang="ES-AR">Autoridades de la Polic&iacute;a Nacional, quien esos momentos acuerdo a denuncias de la prensa confirmadas por las mismas autoridades de Seguridad, atravesaba una aguda crisis por sus v&iacute;nculos con el crimen organizado, asesinato de personas, extorsiones, tr&aacute;fico de drogas, secuestros, extrav&iacute;o de armas, bandas de roba carros, entre otros, aseguraron que pondr&iacute;an todos sus recursos y esfuerzos para esclarecer ambos cr&iacute;menes y no quedaran en la impunidad. </span></span></span><span lang="ES-AR" style="font-size: 10pt; font-family: Verdana, sans-serif;"><o:p></o:p></span></p>
<p style="background-color: white; text-align: justify; background-position: initial initial; background-repeat: initial initial;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span lang="ES-AR">Actualmente a m&aacute;s de un mes de los asesinatos de la periodista Paz Villalobos y de Alfredo Landaverde, ambos cr&iacute;menes &nbsp;siguen sin avances sustanciales ya que la &nbsp;Polic&iacute;a hasta ahora no ha presentado alguna hip&oacute;tesis de los hechos, al contrario, se muestra arisca ante los cuestionamientos period&iacute;sticos optando por una postura de agresividad a la prensa al insinuar que existe una &ldquo;campa&ntilde;a medi&aacute;tica&rdquo; para destruir a la polic&iacute;a.</span></span></span><span lang="ES-AR" style="font-size: 10pt; font-family: Verdana, sans-serif;"><o:p></o:p></span></p>
<p style="background-color: white; text-align: justify; background-position: initial initial; background-repeat: initial initial;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span lang="ES-AR">Honduras sigue trascendiendo por sus &iacute;ndices de violencia, el retiro de los voluntarios del Cuerpo de Paz de Estados Unidos a partir de este mes de enero y por las presiones internacionales que piden acabar con la impunidad en esta naci&oacute;n ubicada en el coraz&oacute;n de la Am&eacute;rica Central.</span></span></span><span lang="ES-AR" style="font-size: 10pt; font-family: Verdana, sans-serif;"><o:p></o:p></span></p>
<p style="background-color: white; text-align: justify; background-position: initial initial; background-repeat: initial initial;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span lang="ES-AR">La Polic&iacute;a Nacional es percibida en los sondeos de opini&oacute;n p&uacute;blica como una de las instituciones m&aacute;s corruptas del pa&iacute;s y pese a las denuncias en su contra y a la presi&oacute;n p&uacute;blica hacia el gobierno para limpiar la instituci&oacute;n policial, las respuestas no han sido contundentes.</span></span></span><span lang="ES-AR" style="font-size: 10pt; font-family: Verdana, sans-serif;"><o:p></o:p></span></p>
<p style="background-color: white; text-align: justify; background-position: initial initial; background-repeat: initial initial;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span lang="ES-AR">A ra&iacute;z de las presiones de la sociedad civil as&iacute; como organismos de cooperaci&oacute;n internacional, las Polic&iacute;a Nacional se encuentra en proceso de depuraci&oacute;n a cargo de la &nbsp;reci&eacute;n creada Direcci&oacute;n de Investigaci&oacute;n y Evaluaci&oacute;n de la Carrera Policial. A la fecha se registra la separaci&oacute;n de 53 efectivos en su mayor&iacute;a por &ldquo;faltas graves&rdquo; y porque ten&iacute;an entre 25 y 30 a&ntilde;os de servicio en la Polic&iacute;a.</span></span></span><span lang="ES-AR" style="font-size: 10pt; font-family: Verdana, sans-serif;"><o:p></o:p></span></p>
<p style="background-color: white; text-align: justify; background-position: initial initial; background-repeat: initial initial;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span lang="ES-AR">Se anuncia para la pr&oacute;xima semana nuevos rechazados, pero la c&uacute;pula policial se resiste a dar los nombres de los cesanteados bajo el argumento de &ldquo;protecci&oacute;n de imagen&rdquo;, un hecho que en tanto no se indique qu&eacute; es y qu&eacute; no es una &ldquo;falta grave&rdquo; no debe impedir el derecho de la ciudadan&iacute;a a conocer la identidad de los que se van porque no cumplieron bien su trabajo, como parte del inter&eacute;s p&uacute;blico por encima del inter&eacute;s privado, cuando el primero por su trascendencia debe anteponerse al segundo, seg&uacute;n establecen los avances del derecho positivo moderno.</span></span></span><span lang="ES-AR" style="font-size: 10pt; font-family: Verdana, sans-serif;"><o:p></o:p></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-01-10 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 18:56:00',
			),
			2 => 
			array (
				'id' => 29,
				'title' => 'Acribillan a abogado que denunció violaciones a los DDHH ',
				'number' => '0003',
				'mes_id' => 1,
				'year' => 2012,
				'departamentos_id' => 1,
				'municipios_id' => 3,
				'body' => '<p>
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">El abogado Jos&eacute; Ricardo Rosales, fue asesinado &nbsp;tres d&iacute;as despu&eacute;s de haber denunciado que la polic&iacute;a asignada a la ciudad de Tela en el departamento de Atl&aacute;ntida, violaba los derechos humanos de j&oacute;venes; al golpearlos, torturarlos y manosearlos. Esta contundente declaraci&oacute;n la ofreci&oacute; a Diario Tiempo en su edici&oacute;n del s&aacute;bado 14 de enero de 2012.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n el jefe de la polic&iacute;a de Tela, H&eacute;ctor Turcios, el d&iacute;a martes 17 del presente a eso de las 11:30 de la ma&ntilde;ana, cuando Rosales se dispon&iacute;a a abordar una camioneta azul, matr&iacute;cula PCT3029, fue interceptado por tres sujetos que lo acribillaron a balazos, y que luego huyeron de la escena del crimen. &nbsp;</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El d&iacute;a viernes 13 de enero de 2012, Jos&eacute; Ricardo Rosales, en compa&ntilde;&iacute;a del tambi&eacute;n abogado Elvin Varela, se aperson&oacute; a las oficinas de Diario Tiempo, donde denunci&oacute; &ldquo;que elementos policiales que acaban de llegar a la ciudad de Tela, y que participaron en operativos cometieron abusos y violaciones a los derechos humanos al golpear y torturar a algunos muchachos e incluso manosear jovencitas&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Rosales agreg&oacute; &ldquo;La fiscal&iacute;a ya tiene conocimiento de esto pero se hace de la vista gorda: sabemos de menores que los polic&iacute;as estuvieron manoseando&hellip; los ponen a hacer tiburones y culucas&hellip; conozco un caso con nombre y apellido de un joven a quien le rompieron la frente de un culetazo&hellip;&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Al respecto el subcomisario Geovanny Fonseca, jefe de la Direcci&oacute;n Nacional de Investigaci&oacute;n Criminal (DNIC) de esa misma ciudad, manifest&oacute; que el profesional del derecho, recientemente, hizo una seria denuncia en contra de efectivos policiales, quienes supuestamente torturaban a personas detenidas por diferentes delitos.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;No tenemos claro qu&eacute; es lo que haya pasado, pero recientemente el abogado denunci&oacute; supuestos vej&aacute;menes cometidos por polic&iacute;as en perjuicio de detenidos; sin embargo las averiguaciones son las que confirmar&aacute;n o descartar&aacute;n ese extremo&rdquo;, coment&oacute;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Rosales fue el abogado que defendido y logr&oacute; la libertad de Marco Joel &Aacute;lvarez Barahona, alias &ldquo;El Unicornio&rdquo;, mencionado como el supuesto culpable del crimen del periodista ceibeno David Meza Montesinos, asesinado el 11 de marzo del 2010.</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-01-18 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 19:01:00',
			),
			3 => 
			array (
				'id' => 30,
				'title' => 'Asesinato de dirigente campesino del MUCA, es un crimen a la libertad de expresión',
				'number' => '0004',
				'mes_id' => 1,
				'year' => 2012,
				'departamentos_id' => 2,
				'municipios_id' => 17,
				'body' => '<p style="text-align: justify;">
<span style="font-family: arial, helvetica, sans-serif; font-size: 16px; background-color: white;">Mat&iacute;as Valle, dirigente Campesino del Movimiento Unificado del Aguan (MUCA) de la margen derecha, fue asesinado el d&iacute;a de hoy viernes 20 de enero aproximadamente a las 6:30 de la ma&ntilde;ana en la comunidad de Quebrada de Arena, departamento de Colon.</span></p>
<p style="background-color: white; text-align: justify; background-position: initial initial; background-repeat: initial initial;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span lang="ES-AR">Valle, de 55 a&ntilde;os de edad originario de Moraz&aacute;n, Yoro y residente en la aldea La Confianza de Col&oacute;n, muri&oacute; por los impactos de bala que propinaron desconocidos que se conduc&iacute;an en una motocicleta.</span></span></span><span lang="ES-AR" style="font-family: Calibri, sans-serif;"><o:p></o:p></span></p>
<p style="background-color: white; text-align: justify; background-position: initial initial; background-repeat: initial initial;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span lang="ES-AR">Seg&uacute;n el Observatorio Internacional Permanente de Derechos Humanos del Agu&aacute;n (OIPDHA), Mat&iacute;as Valle, fue asesinado mientras esperaba un autob&uacute;s para trasladarse al asentamiento campesino La Confianza.</span></span></span><span lang="ES-AR" style="font-family: Calibri, sans-serif;"><o:p></o:p></span></p>
<p style="background-color: white; text-align: justify; background-position: initial initial; background-repeat: initial initial;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span lang="ES-AR">&ldquo;Sin lugar a dudas el asesinato de Mat&iacute;as,&nbsp; es un crimen a la libertad de expresi&oacute;n, pues Mat&iacute;as con su voz firme y fuerte, era un portavoz beligerante, por eso yo v&iacute;nculo su muerte a una violaci&oacute;n a la libre expresi&oacute;n, lamentablemente han callado una voz cantante dentro del movimiento campesino del Aguan&rdquo;, especific&oacute;, Alegr&iacute;a.</span></span></span><span lang="ES-AR" style="font-family: Calibri, sans-serif;"><o:p></o:p></span></p>
<p style="background-color: white; text-align: justify; background-position: initial initial; background-repeat: initial initial;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span lang="ES-AR">El director de V&iacute;a Campesina, Rafael Alegr&iacute;a, tambi&eacute;n denunci&oacute; que Valle al igual que muchos campesinos del sector, ven&iacute;a siendo amenazado de muerte desde hace varios a&ntilde;os, &ldquo;existe persecuci&oacute;n pol&iacute;tica, hace cuatro meses a Mat&iacute;as lo mantuvieron detenido en Tamara por portaci&oacute;n ilegal de arma de fuego y hace una semana denunciamos que varios dirigentes campesinos del MUCA fueron detenidos en la ciudad de la Ceiba a su regreso de Tegucigalpa hacia Toc&oacute;a, Colon&rdquo;.</span></span></span><span lang="ES-AR" style="font-family: Calibri, sans-serif;"><o:p></o:p></span></p>
<p style="background-color: white; text-align: justify; background-position: initial initial; background-repeat: initial initial;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span lang="ES-AR">Alegr&iacute;a inform&oacute; que Mat&iacute;as Valle era beneficiario de Medidas Cautelares. Tambi&eacute;n &nbsp;asegur&oacute; que el caso del Aguan es cr&iacute;tico &ldquo;siempre hemos denunciado que la falta de voluntad del gobierno o la indiferencia podr&iacute;a provocar m&aacute;s muertos y eso fue lo que ocurri&oacute; este d&iacute;a con el crimen de Mat&iacute;as Valle, continua derram&aacute;ndose sangre en el Aguan y el gobierno se desentiende de la problem&aacute;tica&rdquo;.</span></span></span><span lang="ES-AR" style="font-family: Calibri, sans-serif;"><o:p></o:p></span></p>
<p style="background-color: white; text-align: justify; background-position: initial initial; background-repeat: initial initial;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span lang="ES-AR">&ldquo;La situaci&oacute;n de indefensi&oacute;n de los campesinos del sector es enorme, porque no hay un tan solo requerimiento fiscal, ni un capturado, ni un juicio activo y ning&uacute;n plan de investigaci&oacute;n, es decir, es como que no pasa nada y claro los campesinos son los m&aacute;s indefensos porque no tienen la posibilidad de estar armados&rdquo;, denunci&oacute; Alegr&iacute;a.</span></span></span><span lang="ES-AR" style="font-family: Calibri, sans-serif;"><o:p></o:p></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-01-20 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 19:05:00',
			),
			4 => 
			array (
				'id' => 31,
				'title' => 'Indignados escritores por la creciente censura ',
				'number' => '0005',
				'mes_id' => 1,
				'year' => 2012,
				'departamentos_id' => 5,
				'municipios_id' => 63,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Escritores de la ciudad de San Pedro, en la zona norte del pa&iacute;s, aseguraron sentirse excluidos e indignados por la censura, de que son objeto, por parte del gobierno, de algunos peri&oacute;dicos, librer&iacute;as y universidades, siendo ello una franca violaci&oacute;n a la libertad de expresi&oacute;n y a la Constituci&oacute;n de la Rep&uacute;blica.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El catedr&aacute;tico y escritor Giovany Rodr&iacute;guez manifest&oacute; a C-Libre, que la censura siempre existi&oacute; en contra de las personas que escriben, pintan o se dedican al arte, pero que se acentu&oacute; tras el golpe de Estado.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Rodr&iacute;guez coment&oacute; que durante la administraci&oacute;n del doctor Rodolfo Pastor Fasquelle como titular de la Secretaria de Cultura Artes y Deportes, el sector art&iacute;stico recibi&oacute; apoyo, &ldquo;sin embargo tras el golpe de Estado con la ex ministra Mirna Castro,&nbsp; se sinti&oacute; m&aacute;s cruda la censura oficial, posteriormente con el arribo del ex ministro, Bernard Mart&iacute;nez, el ambiente empeor&oacute; y aduciendo austeridad y directrices del gobierno de Porfirio Lobo Sosa, se cancel&oacute; un importante espacio cultural como lo es el programa de cine en la calle&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n Rodr&iacute;guez, no solo se puede hablar de la censura oficial tambi&eacute;n la hay por parte de algunas librer&iacute;as de los centros comerciales que luego del golpe de Estado hicieron algunas depuraciones para quitar o rechazar la venta de obras de autores hondure&ntilde;os. &ldquo;Privilegian aquellas obras afines a la pol&iacute;tica conservadora&rdquo;, asegur&oacute;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El ataque viene adem&aacute;s de algunos docentes de las universidades quienes rechazan libros como: <strong>Las Virtudes de On&agrave;n</strong>, de Mario Gallardo, <strong>Poff, </strong>de Dar&iacute;o Calix&nbsp; y Ficci&oacute;n de un Hereje para lectores Castos, escrita por m&iacute; persona, dij&oacute; Rodr&iacute;guez.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Estos&nbsp; mentores tildan a las obras de diab&oacute;licas, vulgares e irreverentes, en un claro desconocimiento del principio universal, de tolerancia y respeto a la libertad de expresi&oacute;n que debe prevalecer en las universidades. Al esp&iacute;ritu del arte no se le puede poner m&aacute;rgenes y censurar la literatura es coartar la libertad de expresi&oacute;n, sostuvo Rodr&iacute;guez, autor de los poemarios: Morir Todav&iacute;a (2005) y Las Horas Bajas (2007).</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&nbsp;Por su parte el guionista y escritor, Jorge Mart&iacute;nez, dijo que ha experimentado en carne propia la censura por parte de algunos peri&oacute;dicos locales quienes no les publican los escritos a aquellos artistas identificados con el movimiento de Resistencia Nacional.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Los medios prefieren dar cobertura a las cosas que hace Madonna, Jennifer L&oacute;pez&nbsp; o Ricky Martin que a los escritores hondure&ntilde;os, nos hemos convertido, seg&uacute;n ellos, en una amenaza a sus intereses, quiz&aacute;s por la posici&oacute;n beligerante de los literatos.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Lo vivo a diario la censura ha llegado a niveles que hasta los blogs que creamos son &ldquo;jackeados&rdquo;, es decir sacados de los espacios digitales, en una franca violaci&oacute;n a la libertad de expresi&oacute;n y a las leyes del pa&iacute;s. Concluy&oacute; el autor de la obra literaria El Mundo es un Pu&ntilde;ado de Polvo (2011).</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 2,
				'published_date' => '2012-01-23 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 19:08:00',
			),
			5 => 
			array (
				'id' => 32,
				'title' => 'Amenazada otra Mujer del colectivo de “Periodistas por la Vida y la Libertad de Expresión"',
				'number' => '0006',
				'mes_id' => 1,
				'year' => 2012,
				'departamentos_id' => 8,
				'municipios_id' => 110,
				'body' => '<p style="text-align: justify;">
<span style="font-family: arial, helvetica, sans-serif; font-size: 16px; background-color: white;">La periodista Gilda Silvestrucci, directora del programa &quot;En la Plaza&quot;&nbsp; que se transmite de lunes a viernes, en el horario de 8:00 a 9:00 de la ma&ntilde;ana, por Radio Globo, denunci&oacute; estar siendo acosada y amenazada v&iacute;a tel&eacute;fono.</span></p>
<p style="background-color: white; text-align: justify; background-position: initial initial; background-repeat: initial initial;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span lang="ES-AR">Seg&uacute;n el relato de Silvestrucci, en su tel&eacute;fono recibi&oacute; una llamada donde le dijeron &quot;Ya sabemos que ten&eacute;s tres hijos, que la mayor tiene 15 a&ntilde;os, que ahorita and&aacute;s en la calle con tu hijo de siete a&ntilde;os, y que la mayor est&aacute; en tu casa, cuidando a la ni&ntilde;a de un a&ntilde;o, y te vamos a matar&quot;. </span></span></span><span lang="ES-AR" style="font-size: 10pt; font-family: Verdana, sans-serif;"><o:p></o:p></span></p>
<p style="background-color: white; text-align: justify; background-position: initial initial; background-repeat: initial initial;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span lang="ES-AR">Al escuchar la amenaza, la periodista interrumpi&oacute; inmediatamente la comunicaci&oacute;n telef&oacute;nica, pero segundos despu&eacute;s recibi&oacute; una nueva llamada del mismo n&uacute;mero, la que fue tomada por otro colega periodista, quien increp&oacute; al autor de la misma, por las amenazas vertidas en contra de Gilda Silvestrucci y su familia y le pidi&oacute; que diera la cara y no ocultara su identidad tras un tel&eacute;fono.</span></span></span><span lang="ES-AR" style="font-size: 10pt; font-family: Verdana, sans-serif;"><o:p></o:p></span></p>
<p style="background-color: white; text-align: justify; background-position: initial initial; background-repeat: initial initial;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span lang="ES-AR">Silvestrucci llam&oacute; inmediatamente a su casa, para saber el estado de sus hijas, siendo informada por la mayor, de la llamada de un hombre que preguntaba a qu&eacute; horas llegaba normalmente a la casa, por lo que orden&oacute; la desconexi&oacute;n del tel&eacute;fono.</span></span></span><span lang="ES-AR" style="font-size: 10pt; font-family: Verdana, sans-serif;"><o:p></o:p></span></p>
<p style="background-color: white; text-align: justify; background-position: initial initial; background-repeat: initial initial;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span lang="ES-AR">El viernes anterior, la madre de la periodista recibi&oacute; una llamada telef&oacute;nica, solicitando los lugares donde ella se lleva, el n&uacute;mero de celular y horas fijas de llegada.</span></span></span><span lang="ES-AR" style="font-size: 10pt; font-family: Verdana, sans-serif;"><o:p></o:p></span></p>
<p style="background-color: white; text-align: justify; background-position: initial initial; background-repeat: initial initial;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span lang="ES-AR">Silvestrucci es miembra activa del Colectivo &quot;Periodistas por la Vida y la Libertad de Expresi&oacute;n&quot; que el pasado 21 de diciembre, presentaron formal denuncia ante la Fiscal&iacute;a de Derechos Humanos en contra del se&ntilde;or Porfirio Lobo Sosa, Presidente de la Rep&uacute;blica, el Jefe del Estado Mayor Conjunto de las Fuerzas Armadas, General Ren&eacute; Arnoldo Osorio Canales, Jefe del Estado Mayor conjunto de las Fuerzas Armadas, y el General Andr&eacute;s Felipe D&iacute;az, Jefe de la Guardia de Honor Presidencial, por Delitos Cometidos contra el Ejercicio de los Derechos Garantizados por la Constituci&oacute;n de la Rep&uacute;blica, Abuso de Autoridad y Tratos Crueles, Inhumanos y Degradantes.</span></span></span><span lang="ES-AR" style="font-size: 10pt; font-family: Verdana, sans-serif;"><o:p></o:p></span></p>
<p style="background-color: white; text-align: justify; background-position: initial initial; background-repeat: initial initial;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span lang="ES-AR">D&iacute;as despu&eacute;s de la presentaci&oacute;n de la denuncia, Silvestrucci, quien no posee veh&iacute;culo propio, fue alertada por el conductor del taxi que la trasladaba hasta su trabajo, de que un veh&iacute;culo Honda Civic color rojo, les daba seguimiento desde la colonia en la que reside. El taxista hizo varias maniobras para evadir el seguimiento, logrando esquivarlo.</span></span></span><span lang="ES-AR" style="font-size: 10pt; font-family: Verdana, sans-serif;"><o:p></o:p></span></p>
<p style="background-color: white; text-align: justify; background-position: initial initial; background-repeat: initial initial;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span lang="ES-AR">Las amenazas a la colega Gilda Silvestrucci se producen en un contexto adverso para el ejercicio del periodismo, ya que desde la toma de posesi&oacute;n del Presidente Porfirio Lobo Sosa, han sido asesinados 17 comunicadores sociales, y hasta la fecha ninguno de los cr&iacute;menes ha sido cient&iacute;ficamente esclarecidos, por lo que no se puede descartar que sus muertes sean consecuencia de su labor profesional.</span></span></span><span lang="ES-AR" style="font-size: 10pt; font-family: Verdana, sans-serif;"><o:p></o:p></span></p>
<p style="background-color: white; text-align: justify; background-position: initial initial; background-repeat: initial initial;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Ayer mismo, en la presentaci&oacute;n de su Informe 2012, la organizaci&oacute;n Humans Rights Watch en el cap&iacute;tulo relativo a Honduras, resumi&oacute; bajo el t&iacute;tulo &ldquo;Ataques contra periodistas&rdquo;, los asesinatos e intimidaciones recibidas por los y las periodistas en lo que va de la Administraci&oacute;n Lobo Sosa, arribando a la siguiente conclusi&oacute;n:</span></span></p>
<p style="background-color: white; text-align: justify; background-position: initial initial; background-repeat: initial initial;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span lang="ES-AR">&nbsp;&ldquo;En la mayor&iacute;a de estos cr&iacute;menes, las personas responsables no han sido identificadas ni acusadas penalmente. En marzo de 2011, la Secretaria de Justicia y Derechos Humanos inform&oacute; al Consejo de Derechos Humanos de las Naciones Unidas que cuatro casos estaban siendo analizados por la justicia y que otros seis a&uacute;n estaban siendo investigados. Varios funcionarios gubernamentales, entre ellos el Secretario de Seguridad y la Secretaria de Justicia y Derechos Humanos, han rechazado se&ntilde;alamientos que aseguran que los asesinatos estar&iacute;an&nbsp; relacionados con la actividad profesional de las v&iacute;ctimas&rdquo;.</span></span></span><span lang="ES-AR" style="font-size: 10pt; font-family: Verdana, sans-serif;"><o:p></o:p></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-01-23 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 19:11:00',
			),
			6 => 
			array (
				'id' => 33,
				'title' => 'Lobo Sosa advierte sobre decreto  para regular la Libre Expresión',
				'number' => '0007',
				'mes_id' => 1,
				'year' => 2012,
				'departamentos_id' => 8,
				'municipios_id' => 110,
				'body' => '<p style="text-align: justify;">
<span style="font-family: arial, helvetica, sans-serif; font-size: 16px;">En los actos de inauguraci&oacute;n de la &nbsp;instalaci&oacute;n de la tercera legislatura del Congreso Nacional (CN), el d&iacute;a mi&eacute;rcoles 25 de Enero en la ciudad Capital de Honduras, el presidente Porfirio Lobo Sosa, advirti&oacute; a los presentes que enviar&aacute; un decreto, el que se presume, dadas sus declaraciones ser&aacute; para regular la libre expresi&oacute;n.</span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Durante su participaci&oacute;n el primer mandatario del pa&iacute;s agradeci&oacute; a los miembros de la prensa por denunciar los actos de corrupci&oacute;n en los que han incurrido algunos de los funcionarios de su administraci&oacute;n, &quot;Muchas gracias (...) Me da pena, pero hay muchas cosas de las que me doy cuenta por la prensa&quot;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n Lobo Sosa, los periodistas deben orientar e informar a la opini&oacute;n p&uacute;blica de manera imparcial sobre temas que deben seguir en Honduras y deben seguir vigilantes, al mismo tiempo, Lobo Sosa, detall&oacute; que &ldquo;est&aacute; determinado a no coartarle a nadie su libertad de expresi&oacute;n, (porque) para m&iacute; eso es fundamental&quot;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Parad&oacute;jicamente, el titular del Gobierno del &ldquo;Humanismo Cristiano&rdquo;, cambi&oacute; su discurso conciliador y afirm&oacute; que &quot;en el nombre de la libertad de expresi&oacute;n nadie debe defender intereses personales&quot;, pues el periodismo es un apostolado y como tal, debe ser un &quot;servicio libre de cualquier influencia o inter&eacute;s particular&quot;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Lobo Sosa, advirti&oacute; en relaci&oacute;n al tema, &ldquo;Al&iacute;stense porque les voy a mandar un decreto, ah&iacute; se los mando&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Las controversiales declaraciones del Presidente hondure&ntilde;o, tomaron por sorpresa a los y las periodistas presentes por lo que se buscaron las reacciones de funcionarios cercanos al Presidente Lobo Sosa. En ese sentido su ministro de Comunicaciones, Miguel &Aacute;ngel Bonilla, dijo en referencia a las palabras de Lobo que &quot;hay muchos intereses econ&oacute;micos que muchas veces se defienden contra los intereses del pueblo hondure&ntilde;o&quot;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Bonilla sostuvo que se debe proteger la libertad de expresi&oacute;n y que las aseveraciones del gobernante no deben mezclarse con intolerancia, &quot;Cuando se manda un decreto, eso se discute, se socializa. Es un tema que se va a ver en la palestra p&uacute;blica&quot;, coment&oacute;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Por su parte, la ministra de Derechos Humanos, Ana Pineda, dijo que desconoce la existencia de dicho decreto y que el presidente Lobo ser&aacute; el responsable de decir en qu&eacute; consiste el mismo.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">La libertad de expresi&oacute;n &quot;es un valor esencial del estado de derecho, de la institucionalidad democr&aacute;tica&quot;, record&oacute;.</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-01-27 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 19:12:00',
			),
			7 => 
			array (
				'id' => 34,
				'title' => 'Mujer toleteada por la Guardia de “Honor” Presidencial víctima de amenazas a muerte',
				'number' => '0008',
				'mes_id' => 1,
				'year' => 2012,
				'departamentos_id' => 8,
				'municipios_id' => 110,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Itsmania Pineda Platero, una de las periodistas reprimidas por miembros de la Guardia de &ldquo;Honor&rdquo; Presidencial, el d&iacute;a martes 13 de diciembre de 2011, frente a Casa de Gobierno, denunci&oacute; estar siendo amenazada e intimidada v&iacute;a tel&eacute;fono celular.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n la denuncia de Pineda Plateros, desde el d&iacute;a 6 de enero del presente a&ntilde;o a eso de las seis de la tarde, recibi&oacute; una llamada a su celular por parte de un hombre que le dijo: &ldquo;PERRA TE VAMOS A MATAR&rdquo;. Cuatro horas m&aacute;s tarde le volvieron a llamar y al contestar escuch&oacute; voces de hombres, al tiempo que&nbsp; cerrajeaban un arma de fuego como acto de intimidaci&oacute;n.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El domingo ocho de enero a las 12:27pm con 18 segundos, Pineda Plateros&nbsp; recibi&oacute; un mensaje en su celular, enviado desde el n&uacute;mero 8814-4796, el que literalmente dice: &ldquo;El que escupe para arriba en la cara le cae, no juegues con fuego, que ni tu guarda espalda te va a salvar, caminas botadita cu&iacute;date&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Sabes, as&iacute; ll&eacute;vatela en cualquier momento te vamos a ir a votar al crematorio vamos a ser tu pesadilla&rdquo;, es otro de los mensajes que seg&uacute;n Pineda Plateros le enviaron sus agresores el lunes nueve de enero a las 8:26am con 43 segundos.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">La tambi&eacute;n defensora de Derechos Humanos, es una de las 15 periodistas del colectivo por la Vida y la Libertad de Expresi&oacute;n&nbsp;que el 21 de diciembre del a&ntilde;o pasado denunciaron ante la Fiscal&iacute;a Especial de los Derechos Humanos,&nbsp; al Presidente de Honduras, al Jefe del Estado Mayor de las Fuerzas Armadas y al Jefe de la Guardia de &ldquo;Honor&rdquo; Presidencial por los delitos de abuso de autoridad y tratos crueles, inhumanos y degradantes cometidos por funcionarios civiles y militares contra el ejercicio de los derechos garantizados por la constituci&oacute;n de la rep&uacute;blica.&nbsp;</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Cualquier cuesti&oacute;n que me pase a m&iacute; y a mis familiares ser&aacute; responsabilidad del Estado de Honduras que hasta la fecha ha incumplido con las medidas de seguridad otorgadas a&nbsp; mi favor y de la se&ntilde;ora Mar&iacute;a Isabel Barahona Morales fundadora de XIBALBA&rdquo;. Denuncio la afectada.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Por su parte, la periodista Sandra Maribel S&aacute;nchez, del colectivo de periodistas por la Vida y la Libertad de Expresi&oacute;n, repudi&oacute; en&eacute;rgicamente las amenazas e intimidaciones en contra de su colega, &ldquo;no nos queda duda de que el acoso contra Itsmania, es consecuencia de las acciones de denuncia nacional e internacional que hemos realizado contra este r&eacute;gimen y del enojo que les ha provocado la gran repercusi&oacute;n que sus acciones han tenido a nivel mundial.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Itmania Pineda Plateros era una de la periodistas que cargaba un simb&oacute;lico ata&uacute;d el d&iacute;a la protesta frente a Casa de Gobierno, imagen que fue recogida por el peri&oacute;dico Los &Aacute;ngeles Times, para ilustrar uno de sus editoriales en el que demand&oacute; que el gobierno de Lobo Sosa rindiera cuentas sobre las violaciones a los derechos humanos en Honduras, inform&oacute; S&aacute;nchez.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Por su parte el Comit&eacute; por la Libre Expresi&oacute;n (C-Libre), emiti&oacute; durante el 2011 una alerta con fecha 18 de mayo, donde Pineda Plateros, denunciaba ser v&iacute;ctima de una campa&ntilde;a de persecuci&oacute;n y desprestigio en su contra.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">En el informe de violaciones a la libertad de expresi&oacute;n del a&ntilde;o 2010, C-Libre tambi&eacute;n registra las denuncias de amenaza e intimidaci&oacute;n de que fue objeto Pineda Plateros, cuando dirig&iacute;a una organizaci&oacute;n humanitaria en Honduras.</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-01-18 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 19:14:00',
			),
			8 => 
			array (
				'id' => 35,
			'title' => 'Vocero del Movimiento Unificado Campesino del Bajo Aguan (MUCA), denuncia atentado en su contra',
				'number' => '0009',
				'mes_id' => 1,
				'year' => 2012,
				'departamentos_id' => 2,
				'municipios_id' => 9,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El vocero del Movimiento Unificado Campesino del Aguan, (MUCA), Vitalino &Aacute;lvarez, denunci&oacute; ayer, al ser entrevistado por un corresponsal de nuestro peri&oacute;dico digital Conexihon.info, que vive una gran incertidumbre por las m&uacute;ltiples amenazas que recibe, por parte de los guardias del empresario agr&iacute;cola, Miguel Facuss&eacute; Barjun.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&Aacute;lvarez agreg&oacute; que percibe en el ambiente que traman un atentado en su contra y hacerlo ver como un l&iacute;o de maras y pandillas, &ldquo;cuando en realidad lo que buscan es matarme dada mi posici&oacute;n en cuanto al tema de la recuperaci&oacute;n de la tierra&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Denotando cierto grado de temor el dirigente expres&oacute; que al analizar los escenarios de violencia que se viven en la regi&oacute;n del Bajo Aguan,&nbsp; siente que ya solo est&aacute; esperando el momento que le pase algo.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Mucha gente me recomienda que me vaya por un rato para alg&uacute;n lugar que no sea este, pero pienso que si estoy en esta lucha debo prepararme para lo que se venga&rdquo;, dijo &Aacute;lvarez, en tono preocupado.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Al preguntarle por qu&eacute; estar&iacute;an tramando una agresi&oacute;n a su persona y hacerlo ver como un crimen ejecutado por maras o pandillas, respondi&oacute; que cuando fungi&oacute; como ministro de seguridad el abogado, Gautama Fonseca, &eacute;l junto a otros vecinos de la colonia El Carmen al noreste de San Pedro Sula, contribuyeron con la detenci&oacute;n de unos j&oacute;venes vinculados a maras.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Tengo informaci&oacute;n que estos sujetos han sido contactados por los guardias de Facuss&eacute; para atentar en contra de mi vida, sostuvo tras asegurar que algunos de estos malvivientes hacen visitas frecuentes a Tocoa, Col&oacute;n.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Vitalino &Aacute;lvarez record&oacute; que en agosto de 2011 varios guardias de Faucss&eacute; lo intentaron secuestrar cerca de Tocoa, pero por suerte pudo escapar, &ldquo;desde entonces estoy tomando medidas de seguridad&rdquo;, Aseguro el portavoz del MUCA.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">A lo anterior se agrega que su familia fue v&iacute;ctima de un cate&oacute; en el pasado mes de noviembre en su residencia localizada en la colonia en menci&oacute;n por parte de siete sujetos a bordo de un Toyota, 3.0. Este hecho fue denunciado ante la Fiscal&iacute;a del Ministerio P&uacute;blico, en su momento.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Lo que quieren es atraparme de una u otra forma, no es casual que los guardias de Facuss&eacute; cuando tienen la ocasi&oacute;n me gritan &ldquo;te vamos a pelar&rdquo;, &ldquo;a este hay que darle para abajo&rdquo;, para indicar que lo que quieren es matarme.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&Aacute;lvarez responsabiliz&oacute;, de cualquier cosa que le suceda, a los guardias del se&ntilde;or Facuss&eacute;, y a los aparatos represores del gobierno actual, es decir a la polic&iacute;a y el ej&eacute;rcito, denunci&oacute; el dirigente campesino.</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-01-31 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 19:18:00',
			),
			9 => 
			array (
				'id' => 36,
				'title' => 'Por demanda de cooperativa juzgado impide viaje de periodista a Brasil ',
				'number' => '0010',
				'mes_id' => 2,
				'year' => 2012,
				'departamentos_id' => 8,
				'municipios_id' => 110,
				'body' => '<p style="text-align: justify;">
<span style="font-family: arial, helvetica, sans-serif; font-size: 16px;">El Periodista Esdras Amado L&oacute;pez,&nbsp; Director de los Noticieros As&iacute; se Informa que se transmiten por canal 36 en Honduras, fue requerido el 3 de febrero por el Juzgado Primero de lo Civil para que comparezca a una audiencia judicial por denuncia interpuesta por el abogado Dagoberto Mej&iacute;a Pineda en representaci&oacute;n de la Cooperativa de Ahorro y Cr&eacute;dito ELGA.</span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n las informaciones que obran en poder de L&oacute;pez y divulgadas en su medio de comunicaci&oacute;n esta cooperativa ha malversado cientos de millones de lempiras en transacciones nada rentables para los m&aacute;s de 80 mil socios. Situaci&oacute;n que tiene a esta entidad al borde del fracaso, y que dio como resultado, seg&uacute;n informaci&oacute;n divulgada&nbsp; por el periodista David Romero de Radio Globo, de la separaci&oacute;n de sus cargos de altos funcionarios cooperativos.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Curiosamente, cuando el Canal 36 difunde promoci&oacute;nales del viaje de L&oacute;pez a Brasil a invitaci&oacute;n de autoridades de ese gobierno, el Poder Judicial hondure&ntilde;o admite una nueva acusaci&oacute;n contra el periodista la que hoy le impide salir del pa&iacute;s y asistir a la presentaci&oacute;n del documental Conexi&oacute;n Cuba Honduras a realizarse en el pa&iacute;s suramericano el 10 de febrero.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">L&oacute;pez, hablar&iacute;a en Brasil sobre su experiencia vivida durante el golpe de Estado en Honduras y de las violaciones a los Derechos Humanos a las que hasta hoy se ha visto sometido.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Por otra parte denunci&oacute; que el abogado que interpuso la denuncia en su contra es el mismo profesional del derecho que en varias oportunidades ha representado a la Junta de Comandantes de las Fuerzas Armadas de Honduras que dio el Golpe de Estado&nbsp; en junio de 2009.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">En ese sentido expres&oacute;, que no le cabe la menor duda, que detr&aacute;s de esta treta se encuentran los autores del golpe de Estado, entre los que destaca el presidente del Poder Judicial, Jorge Alberto Rivera Avil&eacute;s y otros Magistrados de ese Poder del Estado quienes se han declarado sus &ldquo;enemigos&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;No hay duda que aqu&iacute; ha existido una notable injerencia&nbsp; en el Poder Judicial por parte&nbsp; del ex dictador hondure&ntilde;o Roberto Michelleti Bain&rdquo; asegur&oacute; L&oacute;pez en conferencia de prensa.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El Periodista Esdras Amado L&oacute;pez fue acusado previamente en dos ocasiones por la misma cooperativa y el juzgado que conoci&oacute; ambas acciones las declar&oacute; &ldquo;inadmisibles&rdquo; desestimando la acci&oacute;n que pretend&iacute;a callar al comunicador.</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-02-10 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 19:21:00',
			),
			10 => 
			array (
				'id' => 37,
				'title' => 'Niña de cinco años pide a organismos internacionales obligar al Presidente a retirar policía y ejército del Bajo Aguan',
				'number' => '0011',
				'mes_id' => 2,
				'year' => 2012,
				'departamentos_id' => 2,
				'municipios_id' => 9,
				'body' => '<p style="text-align: justify;">
<strong style="font-family: arial, helvetica, sans-serif; font-size: 16px;"><em>Aclaraci&oacute;n:</em></strong><span style="font-family: arial, helvetica, sans-serif; font-size: 16px;"> Debido a lo establecido en el C&oacute;digo de la Ni&ntilde;ez Hondure&ntilde;a as&iacute; como en los diferentes tratados internacionales suscritos por Honduras, que protegen la integridad f&iacute;sica y emocional de las ni&ntilde;as y ni&ntilde;os, C-Libre en la presente Alerta omite el nombre de la menor, quien denunci&oacute; ser una ni&ntilde;a perseguida por la fuerza Militar Xatruch y la Polic&iacute;a Nacional, acampadas en el sector del Bajo Aguan, departamento de Col&oacute;n.</span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">No obstante ante el drama que viven a diario las y los campesinos en esa zona, particularmente los ni&ntilde;os y ni&ntilde;as, consideramos importante publicar esta nota, pues la protagonista es un ser humano indefenso, que a su corta edad, percibe con madurez y consciencia el conflicto agrario en el Bajo Aguan por lo que defiende con entereza y firmeza su situaci&oacute;n de clase oprimida.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">A continuaci&oacute;n transcribimos &iacute;ntegramente las palabras de la ni&ntilde;a, que fueron grabadas el d&iacute;a s&aacute;bado 4 de febrero de 2012, en la comunidad de Rigores, departamento de Colon, mientras se inauguraba la reconstrucci&oacute;n de la escuela Rep&uacute;blica de Espa&ntilde;a.&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><strong><em>Tegucigalpa, Honduras, (C-Libre). </em></strong>&ldquo;Le pedimos a los organismos internacionales y nacionales que obliguen a Porfirio Lobo Sosa a retirar esta polic&iacute;a sanguinaria, soy una ni&ntilde;a de cinco a&ntilde;os que soy perseguida por la operaci&oacute;n Xatruch&rdquo;, denunci&oacute; la entrevistada.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><strong>&ldquo;</strong>El d&iacute;a viernes 24 de junio del 2011 el movimiento campesino de rigores fue desalojado violentamente de las tierras que pose&iacute;amos desde hace muchos a&ntilde;os por un comando de militares y de la polic&iacute;a preventiva, ellos llegaron a quitarnos nuestras tierras y nos dieron un plazo de dos horas y cumplidas las dos horas, nos atacaron y reprimieron con violencia; quemaron nuestras viviendas y nuestra escuela&rdquo;, relat&oacute; la ni&ntilde;a.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;La comunidad de Rigores nos alberg&oacute; en el centro comunal y una gran cantidad de ni&ntilde;os estaba llorando por no tener la cama donde dorm&iacute;an y desde ese momento nos quitaron la tranquilidad que nosotros ten&iacute;amos, porque nos destruyeron nuestros cultivos de frijoles, yuca, naranjo y por su culpa perdimos nuestra comida y compa&ntilde;eros campesinos fueron trasladados al hospital sumamente graves producto de la represi&oacute;n policial&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Ese mismo d&iacute;a nos llevaron a 13 compa&ntilde;eros, entre ellos una compa&ntilde;era, para la jefatura de Tocoa, pero gracias a la ayuda de otros compa&ntilde;eros amigos fueron liberados ese mismo d&iacute;a&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Me siento muy orgullosa porque soy hija de una campesina y de un campesino.. Tierra para la tierra, campesino estar al pie de guerra, campesinos si, Facusse no, fuera terratenientes,&nbsp; aqu&iacute; no los queremos, concluy&oacute; la ni&ntilde;a.</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-02-06 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 19:24:00',
			),
			11 => 
			array (
				'id' => 38,
				'title' => 'Guardias del Juzgado primero de lo civil impiden a la prensa cubrir juicio oral y público ',
				'number' => '0012',
				'mes_id' => 2,
				'year' => 2012,
				'departamentos_id' => 8,
				'municipios_id' => 110,
				'body' => '<p style="text-align: justify;">
<span style="font-family: arial, helvetica, sans-serif; font-size: 16px;">Guardias de seguridad privada del edificio del Centro Judicial Civil, adscrito a la Corte Suprema de Justicia (CSJ), impidieron el acceso a periodistas que daban cobertura a la audiencia judicial interpuesta por el abogado Dagoberto Mej&iacute;a Pineda en representaci&oacute;n de la Cooperativa de Ahorro y Cr&eacute;dito ELGA en contra de los periodistas Esdras Amado L&oacute;pez, Javier Aguilera y Allan Fiallos de Canal 36.</span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Gran parte de la prensa de la ciudad capital de Honduras, se dio cita en las afueras del&nbsp; Juzgado Primero de lo Civil, para brindarle cobertura noticiosa a la primera audiencia conciliatoria programada para el d&iacute;a de hoy jueves nueve de febrero a partir de las 10:00 de la ma&ntilde;ana. Y con la cual ese juzgado imposibilit&oacute; que Amado L&oacute;pez viajara a Brasil a presenciar el documental Conexi&oacute;n Cuba Honduras y a disertar sobre sus experiencias durante y despu&eacute;s del golpe de Estado &nbsp;&nbsp;</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">A las 9:30 de la ma&ntilde;ana, ingresaron al edificio&nbsp; del Centro Judicial Civil, algunos medios de comunicaci&oacute;n, pero de manera repentina los guardias de seguridad privada resguardados por elementos policiales antimotines impidieron el acceso al resto de los comunicadores sociales que se encontraban en la zona.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n una de las periodistas afectadas, Tomy Morales del peri&oacute;dico digital &ldquo;Defensores en L&iacute;nea&rdquo;, de forma brusca una mujer y un hombre encargados de ingreso en el port&oacute;n principal, la empujaron y le golpearon.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Al resto de periodistas que est&aacute;bamos recopilando informaci&oacute;n, nos restringieron el paso, sin argumento alguno pese a presentar nuestra identificaci&oacute;n; hoy al negarnos la entrada a un juicio oral y p&uacute;blico, se le niega a la prensa el derecho a la libertad de expresi&oacute;n&rdquo;, denunci&oacute; Morales.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Despu&eacute;s de una espera de aproximadamente una hora y tras haber demandado por parte de los periodistas una explicaci&oacute;n, por el bloqueo a la informaci&oacute;n, empleados del departamento de Relaciones Publicas de la CSJ, permitieron el acceso a los periodistas y argumentaron que hab&iacute;a sido un error de la guardia de seguridad aduciendo que solamente lleva tres meses en su puesto y &ldquo;aun no le entienden al tr&aacute;mite&rdquo;.</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-02-10 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 19:25:00',
			),
			12 => 
			array (
				'id' => 39,
				'title' => 'Militares intimidan a prensa internacional en el Bajo Aguan',
				'number' => '0013',
				'mes_id' => 2,
				'year' => 2012,
				'departamentos_id' => 2,
				'municipios_id' => 17,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">En el marco de la realizaci&oacute;n del Encuentro internacional de Derechos Humanos en solidaridad con Honduras, instaurado en la zona del Bajo Aguan, en Tocoa, Col&oacute;n, miembros del ej&eacute;rcito miliar intimidaron a unos 20 periodistas de medios de comunicaci&oacute;n internacionales que le daban cobertura a dicho evento.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n la denuncia del periodista de origen italiano, Giorgio Trucchi, corresponsal de Agencia Noticiosa de Uruguay, en horas de la tarde del d&iacute;a domingo 19 de febrero del presente a&ntilde;o, una caravana de seis veh&iacute;culos con aproximadamente 50 personas se dirig&iacute;a hacia el asentamiento humano de la comunidad de &ldquo;Mara&ntilde;ones&rdquo;, cuando fueron detenidos por un ret&eacute;n militar a la altura del desv&iacute;o hacia Paso Agu&aacute;n.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Los militares, con un actitud injustificadamente agresiva, bajaron y exigieron las identificaciones a los ocupantes de la camioneta conducida por Gerardo Argueta, coordinador del asentamiento Mara&ntilde;ones, tambi&eacute;n directivo del MUCA margen izquierda y quien en el pasado ha sufrido fuertes amenazas&rdquo;, dij&ograve; Trucchi al periodista del Comit&eacute; por la Libre Expresi&oacute;n (C-Libre) v&iacute;a telef&oacute;nica.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Por tal raz&oacute;n, detall&oacute; Trucchi, el resto de la caravana decidi&oacute; salir de los autom&oacute;viles y acercarse al carro de Argueta, para saber el motivo de la detenci&oacute;n, &ldquo;los periodistas en lo particular les preguntamos a los militares el porqu&eacute; del accionar para con ese grupo en particular&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Al no tener una respuesta por parte de los uniformados, relat&oacute; Trucchi, empezamos a fotografiar y a filmar el acontecimiento, esta acci&oacute;n alarmo a los militares y de manera inmediata empezaron a tocar sus armas en evidente actitud intimidatoria para con los periodistas.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Uno de ellos se paseaba entre los periodistas y nos dijo en reiteradas ocasiones guarden esas c&aacute;maras y dejen de fotografiar que si contin&uacute;an con eso se las vamos a decomisar, un militar trato de ponerle la mano a mi lente pero como hab&iacute;amos tantas personas lo pusieron nervioso y desisti&oacute;&rdquo;, precis&oacute; Trucchi.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El acto de abuso de poder, narr&oacute; Trucchi, dur&oacute; aproximadamente unos 25 minutos, hasta que lleg&oacute; al sector un militar superior a cargo del operativo, que no nos quiso dar su nombre, pero a quien le pregunte si en Honduras era legal que se nos dijera a los periodistas que nos iban a quitar nuestro equipo de trabajo sin argumento justificado, &ldquo;este militar me contesto que no, que eso no era legal&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Trucchi, asegur&oacute; que la prensa internacional, sinti&oacute; en carne propia el clima de terror que diariamente viven los campesinos del Bajo Aguan, &ldquo;la gran pregunta es si esta actitud de soberbia y arrogancia lo hacen con periodistas internacionales, como no lo har&aacute;n con los pobres amigos campesinos&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Dentro del grupo de periodistas que fueron intimidados por los militares hondure&ntilde;os se encontraban representantes de Argentina, Italia, Espa&ntilde;a, Estados Unidos, Brasil, Noruega y Uruguay, concluy&oacute; Trucchi.&nbsp;</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-02-20 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 19:32:00',
			),
			13 => 
			array (
				'id' => 40,
				'title' => 'Periodista denuncia extraño robo de computadoras ',
				'number' => '0014',
				'mes_id' => 2,
				'year' => 2012,
				'departamentos_id' => 8,
				'municipios_id' => 110,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">A trav&eacute;s del programa televisivo y radial &ldquo;Interpretando La Noticia&rdquo;, transmitido de lunes a viernes de 1:00 &ndash; 3:00 de la tarde por Radio Globo y Globo TV, el periodista Ivis Alvarado hizo p&uacute;blica su preocupaci&oacute;n ante recientes actos de supuesta delincuencia com&uacute;n en su contra.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Sinceramente no hab&iacute;a querido hacer p&uacute;blico diferentes circunstancias a t&iacute;tulo personal que me han sucedido en los recientes d&iacute;as, pero me parece muy extra&ntilde;o que supuestos ladrones que se metieron a mi casa de habitaci&oacute;n y cuando se pudieron haber llevado art&iacute;culos de valor solamente se llevaron dos computadoras&rdquo;, relat&oacute; Alvarado.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">A esta acci&oacute;n, el periodista y actual coordinador de Noticias Globo TV, se&ntilde;al&oacute; que unos d&iacute;as atr&aacute;s tipos desconocidos estuvieron indagando entre los vecinos del edificio Villatoro (donde funciona la estaci&oacute;n de radio y televisi&oacute;n), cu&aacute;l era el carro de Ivis Alvarado, &ldquo;mi carro fue forzado y se llevaron papeler&iacute;a de su interior&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Alvarado, precis&oacute; que &ldquo;Los casos que ventilamos lo hacemos de manera directa y desde antes del Golpe de Estado toda Honduras conoc&iacute;a sobre mi ideolog&iacute;a, estas situaciones me preocupan no por mi sino por mi familia, pues en este pa&iacute;s poner una denuncia es solamente para que quede un referente&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n Alvarado, debido a un intento de secuestro hacia uno de sus hijos hace unos a&ntilde;os atr&aacute;s el decidi&oacute; traspasar sus medidas caut&eacute;lales a su v&aacute;stago menor de edad.</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-02-22 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 19:34:00',
			),
			14 => 
			array (
				'id' => 41,
				'title' => 'Vicepresidente de C-Libre recibe nuevas amenazas contra su vida. ',
				'number' => '0015',
				'mes_id' => 2,
				'year' => 2012,
				'departamentos_id' => 4,
				'municipios_id' => 40,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El pasado 22 de febrero, el Vicepresidente del Comit&eacute; por la Libre Expresi&oacute;n C-Libre, periodista Danilo Osmaro Castellanos, fue v&iacute;ctima de amenazas contra su integridad f&iacute;sica y la de su familia, luego de criticar a trav&eacute;s de su programa noticioso ATN, &ldquo;Honduras A Todo Noticias&rdquo; del canal local 32, la gesti&oacute;n de un alto funcionario edilicio en el departamento de Cop&aacute;n, en el occidente de Honduras.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Entrevistado inmediatamente despu&eacute;s del hecho, el comunicador coment&oacute; a C-Libre que las amenazas las recibi&oacute; a trav&eacute;s de mensajes de texto y de llamadas telef&oacute;nicas, donde le expresaron &ldquo;ya te conocemos periodista&hellip;ten&eacute;s media hora a partir de este instante, &hellip;sabemos de tu familia&rdquo;. En un mensaje anterior recibido durante presentaba su noticiero de televisi&oacute;n, recibi&oacute; otro ultim&aacute;tum a muerte.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Luego de estas amenazas, Castellanos interpuso la denuncia ante el Comisionado Nacional de los Derechos Humanos y la Direcci&oacute;n Nacional de Investigaci&oacute;n Criminal de la localidad.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El periodista resalt&oacute; que el ambiente para el ejercicio del periodismo en la zona es tenso y complicado &ldquo;es dif&iacute;cil y peligroso hacer periodismo aqu&iacute;, cualquier comentario trae graves consecuencias&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">En otro contexto, el 24 de noviembre del 2011, C-libre emiti&oacute; una alerta denunciando las amenazas en contra del periodista Castellanos a ra&iacute;z de las cr&iacute;ticas emitidas por el comunicador sobre la explotaci&oacute;n minera de la zona.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">C-Libre condena en&eacute;rgicamente las amenazas contra el periodista y vicepresidente de nuestra organizaci&oacute;n Danilo Osmaro Castellanos, por ser violatorias a los derechos a la libre emisi&oacute;n del pensamiento y libertad de expresi&oacute;n.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Se pide a las autoridades competentes investigar el origen de las amenazas, asimismo se solicita a la comunidad nacional e internacional instar al Estado de Honduras a tomar las medidas necesarias y mecanismos efectivos para garantizar la vida y la integridad del periodista Castellanos y su familia.</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-02-24 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 19:35:00',
			),
			15 => 
			array (
				'id' => 42,
				'title' => 'Equipo periodístico de canal local es amenazado de muerte por su trabajo de cobertura en el incendio de la granja penal de Comayagua',
				'number' => '0016',
				'mes_id' => 2,
				'year' => 2012,
				'departamentos_id' => 3,
				'municipios_id' => 19,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">Equipo period&iacute;stico del canal local &ldquo;Catedral TV&rdquo;, de la ciudad de Comayagua, est&aacute; recibiendo amenazas de muerte a ra&iacute;z de la cobertura en el incendio de la Granja Penal de esa ciudad ocurrido el pasado 14 de febrero.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El periodista Luis Rodr&iacute;guez y su camar&oacute;grafo Javier Villalobos al igual que el due&ntilde;o del canal Juan Ram&oacute;n Flores, han recibido amenazas y agresiones al punto tal de dormir todos en una misma casa de habitaci&oacute;n para proteger sus vidas.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Juan Ram&oacute;n Flores, narr&oacute; mediante una denuncia que su equipo de trabajo as&iacute; como el due&ntilde;o de &ldquo;Digicable&rdquo;, (servicio de televisi&oacute;n por cable departamental), han sido v&iacute;ctimas de intimidaci&oacute;n v&iacute;a llamadas y mensajes a sus tel&eacute;fonos celulares.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Los videos exclusivos del programa s&aacute;lvese quien pueda, evidencio entre otras cosas, como una hora y media despu&eacute;s del incendio se constato que las celdas estaban con candados, las declaraci&oacute;n de los bomberos que aseguraron que quienes les llamaron para alertar fueron ciudadanos vecinos y no la polic&iacute;a nacional&rdquo;, detall&oacute; Flores.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n Flores, al transmitir dichas im&aacute;genes inicio una fuerte campa&ntilde;a de acoso en contra de su equipo de prensa&rdquo; los mensajes son claros, dejen de hablar del tema o los matamos, tambi&eacute;n dicen dejen de seguir hablando del incendio o les metemos fuego&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Flores denunci&oacute; que haces un par de noches en un velorio a su camar&oacute;grafo Javier Villalobos, un grupo de desconocidos lo agredi&oacute; y le quebr&oacute; la c&aacute;mara filmadora, &ldquo;estas acciones solamente nos indican que quieren callarnos porque nosotros tenemos en nuestras cintas las im&aacute;genes que precisan la verdad del incendio&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Flores agreg&oacute; que a los videos se le suma una entrevista con un reo pr&oacute;fugo quien da detalles de lo ocurrido la noche del 14 de febrero, &ldquo;el da testimonio desde mi punto de vista profesional cre&iacute;ble porque narro a detalle como uno de sus hermanos pago una fuerte suma al director del centro penal para fugarse junto a otros reclusos pero que ese d&iacute;a en vez de dejarlos escapar los encerraron y les metieron fuego&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">De igual manera Flores, revelo que el d&iacute;a domingo 19 de febrero, primer d&iacute;a de visita al centro penal despu&eacute;s del incendio, &ldquo;la polic&iacute;a nos neg&oacute; el acceso al interior del edificio, aduciendo que esto estaba estipulado en sus normas, pero sabemos que fue para que no transmiti&eacute;ramos las condiciones dentro del precinto&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Flores admiti&oacute; que aun mantiene en su poder videos in&eacute;ditos que prueban como los reos en su intento de escapar del fuego, eran ejecutados a bala viva, &ldquo;para opacar el buen trabajo de mis periodistas est&aacute;n haciendo una campa&ntilde;a de desprestigio a mi persona donde me difaman ligandome al narcotr&aacute;fico&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Finalmente Flores, expres&oacute; que tambi&eacute;n ha sufrido censura por parte de CONATEL, al alargarle el proceso de permiso para su canal de televisi&oacute;n, &ldquo;mi abogada me dijo que en CONATEL le dijeron que mi canal es de la resistencia y esa es la raz&oacute;n de las trabas del tr&aacute;mite&rdquo;.</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-02-24 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 19:36:00',
			),
			16 => 
			array (
				'id' => 43,
				'title' => 'Gerente de empresa que brinda servicios de televisión por cable recibe amenazas ',
				'number' => '0017',
				'mes_id' => 2,
				'year' => 2012,
				'departamentos_id' => 3,
				'municipios_id' => 19,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">El se&ntilde;or Ram&oacute;n Cabrera, gerente general de la compa&ntilde;&iacute;a&nbsp; &ldquo;Digicable&rdquo;, que brinda servicios de televisi&oacute;n por cable en la ciudad de Comayagua, departamento de Comayagua, denunci&oacute; a C-Libre que ha recibido amenazas y presiones para sacar de su sistema al canal local 49, Catedral TV.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n lo expresado por Cabrera a ra&iacute;z de la cobertura period&iacute;stica por parte del equipo de prensa de Catedral TV, durante el incendio en la granja penal de Comayagua ocurrido el 14 de febrero del presente y donde murieron 361 privados de libertad, le han enviado mensajes de texto a su tel&eacute;fono celular en los que dicen que &ldquo;vas a tener problemas&hellip; te vamos a fregar&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Tengo casi ocho a&ntilde;os con la compa&ntilde;&iacute;a y nunca antes me hab&iacute;an amenazado&rdquo;, expres&oacute; preocupado Cabrera a C-libre, &ldquo;por eso con seguridad les inform&oacute; que las amenazas provienen de personas que me quieren obligar a sacar a canal 49 de Digicable&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El empresario de la comunicaci&oacute;n resalt&oacute; que debido al grado de inseguridad que existe en la zona ya le explic&oacute; a sus familiares que es v&iacute;ctima de amenazas por parte de desconocidos, &ldquo;en estos tiempos dif&iacute;ciles que vivimos uno nunca sabe que pueda suceder, aqu&iacute; pesa m&aacute;s el dinero y el poder, que nuestra responsabilidad. Me considero un hombre honesto y luchador&rdquo;, explic&oacute;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Por esa raz&oacute;n le abrimos las puertas a Juan Ram&oacute;n Flores y a su equipo de prensa&rdquo;, detall&oacute; Cabrera, &ldquo;somos una empresa que brinda oportunidades; yo no tengo porque privarle de esa oportunidad a ninguna persona mucho menos por intereses particulares&rdquo; concluy&oacute;</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">C-libre emiti&oacute;, el pasado 24 de febrero, la alerta &ldquo;Periodistas amenazados de muerte por&nbsp; cobertura period&iacute;stica&rdquo;, en la que se devela las amenazas a muerte de que han sido objeto&nbsp; periodistas del canal 49 de la ciudad de Comayagua.</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-02-28 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 19:38:00',
			),
			17 => 
			array (
				'id' => 44,
				'title' => 'Policías municipales decomisan celular a caricaturista mientras filmaba hostigamiento a mujer embarazada',
				'number' => '0018',
				'mes_id' => 2,
				'year' => 2012,
				'departamentos_id' => 8,
				'municipios_id' => 110,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Luis Antonio Henr&iacute;quez, caricaturista del peri&oacute;dico El Libertador, fue despojado de su tel&eacute;fono celular por parte de polic&iacute;as municipales y personal civil de la alcald&iacute;a municipal del Distrito Central.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El hecho ocurri&oacute; cuando Henr&iacute;quez grababa un v&iacute;deo para registrar una acci&oacute;n de hostigamiento que seis polic&iacute;as municipales hac&iacute;an en contra de una mujer embarazada que se dedica a vender frutas en la entrada del centro comercial La Isla en la capital del pa&iacute;s.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Me inquiet&oacute; mucho el hecho de que seis polic&iacute;as municipales cercaban a una mujer embarazada que se gana la vida vendiendo frutas&rdquo;, dijo Henr&iacute;quez a C-Libre.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Mientras grababa las im&aacute;genes, me aproxime a los polic&iacute;as y les pregunte qu&eacute; pasaba; ellos revelaron que estaban cumpliendo una ordenanza municipal, luego una persona con atuendo de la municipalidad se me acerc&oacute; y me pregunt&oacute; si portaba carnet de periodista, yo le respond&iacute; que no, pero que laboraba para el peri&oacute;dico El Libertador&rdquo;, Explic&oacute; el artista gr&aacute;fico.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">No obstante a las explicaciones dadas por el comunicador los polic&iacute;as en forma hostil le arrebataron el tel&eacute;fono celular y le expresaron que pasara a reclamarlo en las oficinas de la municipalidad ubicadas en el barrio Los Dolores.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Cuando recib&iacute; el aparto telef&oacute;nico me di cuenta que los polic&iacute;as hab&iacute;an&nbsp;</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-02-29 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 19:39:00',
			),
			18 => 
			array (
				'id' => 45,
				'title' => 'Juzgado de Paz cita a sacerdote por violenta agresión contra periodista. ',
				'number' => '0019',
				'mes_id' => 3,
				'year' => 2012,
				'departamentos_id' => 8,
				'municipios_id' => 110,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">El Juzgado de Paz Criminal de la Capital de Honduras cit&oacute; el jueves anterior a primera audiencia al Canciller de la Iglesia Cat&oacute;lica Hondure&ntilde;a, el Padre Carlo Magno N&uacute;&ntilde;ez, bajo los cargos de violenta agresi&oacute;n en contra de Luis Ortiz reportero de &ldquo;Canal 36 Cholusat Sur&rdquo;.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El ataque ocurri&oacute; el pasado 14 de febrero cuando el Padre Magno oficiaba una misa de inauguraci&oacute;n del paso a desnivel en el Boulevard Suyapa de la capital hondure&ntilde;a.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Concluida la ceremonia el reportero intent&oacute; entrevistar al p&aacute;rroco, referente a la destituci&oacute;n del tambi&eacute;n sacerdote Roberto Paiz, empero para sorpresa del comunicador, el cura intent&oacute; arrebatarle el micr&oacute;fono y en el forcejeo lo agredi&oacute; propin&aacute;ndole una bofetada en su rostro.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n las declaraciones de Ortiz su intenci&oacute;n era ejercer su labor period&iacute;stica a trav&eacute;s de una entrevista tal y como lo hace con todo tipo de personalidades diariamente.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Tras el suceso, la Representaci&oacute;n Legal de &ldquo;Canal 36 Cholusat Sur&rdquo; por instrucciones de la Direcci&oacute;n y la Gerencia General de la estaci&oacute;n, interpuso la denuncia ante el Ministerio Publico misma que fue remitida por el Fiscal de Turno al Juzgado de Paz de lo Criminal de Francisco Moraz&aacute;n &ldquo;en virtud que los hechos son constitutivos de delitos se&ntilde;alados en el c&oacute;digo penal hondure&ntilde;o&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n los abogados de la estaci&oacute;n televisiva &ldquo;esta no es la primera vez que uno de nuestros trabajadores recibe una agresi&oacute;n por parte de sacerdotes hondure&ntilde;os, estamos cansados de este tipo de atropellos y lo que pretendemos es parar este tipo de agresiones que adem&aacute;s de atentar contra la Libertad de Prensa ahora atenta contra la integridad f&iacute;sica de nuestros representados&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Se aclara que la audiencia inicial no se llev&oacute; acabo y se reprogram&oacute; para el viernes 2 de marzo a las 9 de la ma&ntilde;ana.</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-03-01 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 19:42:00',
			),
			19 => 
			array (
				'id' => 46,
				'title' => 'Alcalde y policías intimidan a jóvenes artistas',
				'number' => '0020',
				'mes_id' => 3,
				'year' => 2012,
				'departamentos_id' => 8,
				'municipios_id' => 110,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">J&oacute;venes artistas del municipio de Sabanagrande, departamento de Francisco Moraz&aacute;n son v&iacute;ctimas de represi&oacute;n y amenazas por parte del alcalde municipal y polic&iacute;as asignados a la comunidad, denunci&oacute; El poeta Fabricio Estrada.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">La denuncia publicada en el peri&oacute;dico digital defensoresenlinea.com, &ldquo;Alcalde y polic&iacute;as de Sabanagrande asumen actitudes intolerantes y agresivas contra su pueblo&rdquo;, relata que a partir de la presentaci&oacute;n de la obra callejera &ldquo;El Rey Feo&rdquo;, hace dos semanas con motivo de la feria patronal del municipio, los j&oacute;venes integrantes de un grupo de teatro han sufrido continuas amenazas.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n la publicaci&oacute;n, el edil Germ&aacute;n Rafael D&iacute;az lleg&oacute; al extremo de emitir una ordenanza prohibiendo la permanencia de menores de 17 a&ntilde;os en los lugares p&uacute;blicos de la comunidad despu&eacute;s de las 10 de la noche. En reacci&oacute;n a la ordenanza, los pobladores&nbsp; junto a varios j&oacute;venes menores de edad, se dieron cita despu&eacute;s de las 10 de noche en el parque central y al d&iacute;a siguiente realizaron un plant&oacute;n pac&iacute;fico frente a la alcald&iacute;a municipal.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El poeta Fabricio Estrada originario de Sabanagrande explic&oacute; que la ordenanza es la reacci&oacute;n de las autoridades a la obra de teatro callejero &ldquo;El Rey Feo&rdquo;, que se realiz&oacute; hace dos semanas durante la feria patronal de dicho municipio, &ldquo;El Rey Feo es una din&aacute;mica burlesca, sat&iacute;rica con mojiganga en donde los hombres se visten de mujer, utilizando&nbsp; m&aacute;scaras y van satirizando a la poblaci&oacute;n elevando el tono en una actuaci&oacute;n picaresca&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Estrada relat&oacute; que la obra estaba dirigida hacia las acciones policiales, lo que molest&oacute; a los polic&iacute;as presentes que resguardaban el acto p&uacute;blico de al menos dos mil personas, &ldquo;se sintieron directamente se&ntilde;alados, se sintieron burlados ante los ojos del pueblo y en consecuencia se han dado a la tarea de amenazar&nbsp; y capturar a los j&oacute;venes que actuaron de s&eacute;quito del rey Feo.&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Por su parte la defensora de derechos humanos del Comit&eacute; de Familiares de Detenidos Desaparecidos en Honduras (Cofadeh), Ana Luc&iacute;a Armijo, expres&oacute; que el alcalde mostr&oacute; su malestar al decir que en la obra &ldquo;El Rey Feo&rdquo; se dicen chismes y que le botan la integridad a las muchachas, y que no hab&iacute;a emitido ninguna ordenanza que indicara que a las 10:00 de la noche ten&iacute;a que estar toda la gente en su casa.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Sin embargo el alcalde admiti&oacute; que la ordenanza fue para que a los menores de 17 a&ntilde;os que se encontraran en la calle, despu&eacute;s de las 10:00 de la noche, fueran llevados a sus casas por la polic&iacute;a, asegur&oacute; Armijo.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;La polic&iacute;a, al parecer, tiene una lista de los actores del Rey Feo y los han intimidado uno a uno, finaliz&oacute; Armijo</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-03-01 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 19:43:00',
			),
			20 => 
			array (
				'id' => 47,
				'title' => 'Asesinan a estudiante de Comunicación Social y Pública ',
				'number' => '0021',
				'mes_id' => 3,
				'year' => 2012,
				'departamentos_id' => 5,
				'municipios_id' => 64,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">El d&iacute;a de ayer (29 de febrero), en la aldea Meril&uacute; en el sector de R&iacute;o Blanquito del municipio de Choloma, departamento </span><span style="text-align: justify;">de Cort&eacute;s, al norte de Honduras, autoridades policiales encontraron el cad&aacute;ver de Saira Fabiola Almendares Borjas, estudiante de la carrera de Comunicaci&oacute;n de la Universidad Metropolitana de Honduras (UMH).</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Borjas fue encontrada junto al joven Jos&eacute; Ram&oacute;n Orellana Castellanos, y un menor, quienes presuntamente fueron llevados hasta el sector para ultimarlos a balazos.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n el periodista Aldo Romero, actual coordinador de la carrera de Comunicaci&oacute;n Social y P&uacute;blica de la UMH, a la joven estudiante de 22 a&ntilde;os, solamente le hac&iacute;an falta ocho materias para culminar su licenciatura.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Sabemos que Sayra hab&iacute;a iniciado el ejercicio de la profesi&oacute;n en Radio Cadena Voces y canal 30 de la ciudad capital, como periodista deportiva, tambi&eacute;n colabor&oacute; como &nbsp;&nbsp;presentadora del programa de la Universidad transmitido en canal 8&rdquo;, relat&oacute; Romero.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Por su parte, el periodista deportivo Manuel Alejandro Rodr&iacute;guez, quien se encarg&oacute; de introducirla a los medios de comunicaci&oacute;n, le dijo al peri&oacute;dico <strong>Proceso Digital </strong>que cuando eran compa&ntilde;eros en la Universidad Metropolitana le mir&oacute; grandes dotes y que por eso la llev&oacute; al programa deportivo &ldquo;A ras de Cancha&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Yo la llev&eacute; al programa de televisi&oacute;n, donde estuvo m&aacute;s o menos un a&ntilde;o y medio, luego le sali&oacute; una oportunidad en radio Cadena Voces con Orlando Ponce Moraz&aacute;n y me parece que &uacute;ltimamente estaba trabajando en San Pedro Sula en un proyecto de radio con Roberto Rodr&iacute;guez&rdquo;, expres&oacute; el periodista.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Aunque no se ha logrado establecer las causas por las que muri&oacute; la periodista Saira Almendares, Honduras es uno de los pa&iacute;ses m&aacute;s inseguros de Latinoam&eacute;rica para el ejercicio de la profesi&oacute;n del periodismo, seg&uacute;n datos del Observatorio Iberoamericano de la Libertad de Prensa.</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-03-01 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 19:51:00',
			),
			21 => 
			array (
				'id' => 48,
				'title' => 'Periodista recibe amenaza a muerte de mujer desconocida',
				'number' => '0022',
				'mes_id' => 3,
				'year' => 2012,
				'departamentos_id' => 5,
				'municipios_id' => 63,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">La periodista Mavis Ethel Cruz fue amenazada a muerte v&iacute;a tel&eacute;fono, el mi&eacute;rcoles anterior,&nbsp; treinta minutos despu&eacute;s de salir del programa &ldquo;Noticias a la Hora&rdquo; que se transmite por Radio Libertad en un horario de 12:00m a 1:00pm&nbsp; de la tarde y en el que analiza con su colega, Karina Interiano, temas de inter&eacute;s general.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Era la 1:50 de la tarde, Mavis se dispon&iacute;a a servir el almuerzo cuando son&oacute; el tel&eacute;fono fijo de la casa y yo contest&eacute;, era la voz de una mujer quien me dijo al menos dos veces &ldquo;p&aacute;seme a Mavis por favor&rdquo;, ante mi insistencia de pedirle que se identificara, la dama opt&oacute; por expresarme lo siguiente: &ldquo;d&iacute;gale a do&ntilde;a Mavis que la vamos a quebrar, pero que primero vamos a comenzar por su hijo, porque tira riata ah&iacute;&rdquo;, en alusi&oacute;n al programa radial, relat&oacute; a C-Libre Carlos Rodr&iacute;guez, esposo de la afectada y a la vez periodista.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El mi&eacute;rcoles no quisimos hacer la denuncia sino hasta ayer; nos presentamos ante la Fiscal&iacute;a del Ministerio P&uacute;blico y luego ante el licenciado Wilfredo Castellanos, director del Comisionado Nacional de los Derechos Humanos de Honduras, Conadeh. Estas acciones las realizamos aun sabiendo que no hay voluntad pol&iacute;tica para dar una respuesta inmediata de parte de las autoridades, concluy&oacute;.&nbsp;</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Al consultar a la periodista Mavis Cruz dijo que no sospecha de nadie y que seguir&aacute; informando como lo ha venido haciendo desde que fund&oacute; su programa hace unos cuatro a&ntilde;os. Ayer lo dije en mi programa para que lo escuchara la audiencia que voy a seguir informando y que a m&iacute; lo que me molesta es que amenacen a mi hijo, cuando si alguien tiene algo personal en contra de mi persona que lo resuelva conmigo, afirm&oacute;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Al preguntarle si antes recibi&oacute; amenazas, respondi&oacute; que no y que el &uacute;nico antecedente que existe se registra en el 2010 cuando el oficial H&eacute;ctor Iv&aacute;n Mej&iacute;a, quien se desempe&ntilde;a actualmente como vocero de la Polic&iacute;a Nacional Preventiva pidi&oacute; la cancelaci&oacute;n de su programa el cual se transmit&iacute;a en Radio Romance, propiedad de la familia Sikaffy.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">En aquella oportunidad, el polic&iacute;a llam&oacute; a mi programa&nbsp; y debatimos varios puntos de vista sobre la muerte del periodista Georgino Orellana, asesinado en abril del 2010, y &eacute;l a lo mejor se molest&oacute; por mi posici&oacute;n,&nbsp; pidi&oacute; a la administraci&oacute;n de la radio&nbsp; la cancelaci&oacute;n de mi programa, pero afortunadamente no se cumpli&oacute;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Sin se&ntilde;alar que sea la causa, Mavis manifest&oacute; que siempre mantuvo una f&eacute;rrea oposici&oacute;n frente al golpe de Estado perpetrado en junio de 2009 y que los temas que se ventilan en su programa est&aacute;n relacionados con los hechos que acontecen en el pa&iacute;s sobre todo los esc&aacute;ndalos de corrupci&oacute;n y la agenda que maneja el gobierno.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Entre los temas que abord&oacute; el d&iacute;a de las amenazas a muerte, la reportera, dijo que estos se relacionan con una quema de los archivos de la Direcci&oacute;n Ejecutiva de Ingresos, DEI, en donde casualmente se encontraba la lista de morosos. Nosotros (la periodista Karina Interiano y yo) comentamos sobre la coincidencia de estos hechos.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Otro tema que abordamos es sobre una denuncia de varios empleados en contra de las empresas mexicanas Electra y Banco Azteca cuyos jefes rebajaron los sueldos a un 50 por ciento aduciendo que no tienen ventas. El comentario que se hac&iacute;a al respecto era que la inversi&oacute;n extranjera es buena siempre y cuando se respeten los derechos de las y los trabajadores.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Otro t&oacute;pico de inter&eacute;s que se toc&oacute; era sobre la renuncia del Director de Investigaci&oacute;n y Evaluaci&oacute;n de la Carrera Policial, (DIECP), el abogado &Oacute;scar Manuel Arita Aguilar, quien dej&oacute; el cargo el d&iacute;a que me amenazaron. Sobre el particular sosten&iacute;amos que el gobierno cre&oacute; ese puesto solo para distraer la atenci&oacute;n y nos pregunt&aacute;bamos qu&eacute; pensar&aacute; ahora la rectora de la Universidad Nacional Aut&oacute;noma de Honduras, Julieta Castellanos, cuando hasta un hijo perdi&oacute; por las actuaciones de la polic&iacute;a, concluy&oacute;.</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-03-02 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 19:52:00',
			),
			22 => 
			array (
				'id' => 49,
				'title' => 'Atentan contra la vida de estudiante de periodismo y actual coordinador de juzgado.',
				'number' => '0023',
				'mes_id' => 3,
				'year' => 2012,
				'departamentos_id' => 5,
				'municipios_id' => 63,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">El lunes 27 de febrero, sujetos desconocidos atentaron contra la vida de Erick Euceda Ortez, estudiante de la carrera de periodismo de la Universidad Nacional Aut&oacute;noma de Honduras en el Valle de Sula (UNAH-VS) y actual Juez del Juzgado de Ejecuci&oacute;n de San Pedro Sula,</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Euceda, de 36 a&ntilde;os, sobrevivi&oacute; al atentado donde recibi&oacute; dos balazos calibre 40 mil&iacute;metros, a inmediaciones de la colonia Santa Martha en la ciudad de San Pedro Sula. El pasante de la carrera de periodismo se encuentra fuera de peligro tras ser sometido a una intervenci&oacute;n quir&uacute;rgica, donde le extrajeron dos balas; una incrustada a la altura del hombro y la otra en la barbilla.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Ven&iacute;a de traer a mi hermana de la Universidad cuando se nos atraves&oacute; un auto Corolla gris; como no obedecimos a la orden de bajar los vidrios, comenzaron a disparar, estoy vivo gracias a Dios&rsquo;&rsquo;, relat&oacute; en la camilla del hospital donde actualmente se est&aacute; recuperando.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&nbsp;&ldquo;Creo que esto es producto del trabajo que uno hace. Cuando se hace el trabajo bien hay mucha gente a la que no le gusta. No puede ser m&aacute;s que por eso, ya que no tengo enemigos y trato de hacer las cosas bien&rdquo;, manifest&oacute; Euceda.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Deber&iacute;an darles protecci&oacute;n a todos los jueces por la naturaleza de las labores que realizamos, no tenemos protecci&oacute;n solo la de Dios. Ya lo he vivido en carne propia y deber&iacute;a d&aacute;rseles seguridad a los compa&ntilde;eros a todos sin excepci&oacute;n&rdquo;. Luego de lo acontecido, el juez manifest&oacute; que tomar&aacute; precauciones y que continuar&aacute; realizando sus labores de forma correcta como lo ha hecho siempre.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Por su parte la asociaci&oacute;n de estudiantes, coordinaci&oacute;n y claustro de docentes de la carrera de Periodismo UNAH-VS, condenaron el atentado criminal en contra de su compa&ntilde;ero y exigieron a la vez una investigaci&oacute;n exhaustiva as&iacute; como el inmediato apoyo por parte del Ministro de seguridad y del Fiscal General de la Republica.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">En la nota de prensa de la UNAH-VS, demandan anuencia por parte de las autoridades para que el atentado contra Euceda no forme parte de la cifra de casos sin resolver de profesionales del derecho y del periodismo, que en el ejercicio de su profesi&oacute;n ha sufrido atentados o perdido la vida de forma violenta.</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-03-02 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 19:53:00',
			),
			23 => 
			array (
				'id' => 50,
				'title' => 'Juez de paz restringe  ingreso de periodista a su propia audiencia inicial',
				'number' => '0024',
				'mes_id' => 3,
				'year' => 2012,
				'departamentos_id' => 8,
				'municipios_id' => 110,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">La Juez de Paz, Carmen Canales Canales, restringi&oacute; el ingreso del periodista Luis Ortiz de canal 36, a la primera audiencia inicial que se celebr&oacute; el viernes 2 de marzo, por denuncia interpuesta por el medio de comunicaci&oacute;n contra el Canciller de la Iglesia Cat&oacute;lica Hondure&ntilde;a, Carlo Magno, por los cargos de violenta agresi&oacute;n.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Ortiz denunci&oacute; que al momento de apersonarse a las instalaciones donde se llevar&iacute;a a cabo la audiencia, la Juez le dijo que no pod&iacute;a ingresar con celulares ni con c&aacute;maras de video, &ldquo;es un juicio oral y p&uacute;blico e independientemente donde se realice una vez acordado el lugar, le da al proceso el car&aacute;cter de legal&rdquo;, explic&oacute; el periodista.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">La audiencia se llev&oacute; a cabo en las oficinas del Arzobispado de Tegucigalpa, ubicado en el bulevar Moraz&aacute;n avenida la Paz.&nbsp;</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Al respecto Luis Ortiz, expres&oacute; que la audiencia no se realiz&oacute; en las instalaciones f&iacute;sicas de los juzgados correspondientes porque al Sacerdote le han otorgado privilegios &nbsp;de diplom&aacute;tico debido a su envestidura dentro de la iglesia cat&oacute;lica.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">En comunicaci&oacute;n telef&oacute;nica con C-Libre, Ortiz expres&oacute; que &ldquo;sinceramente tengo miedo de entrar sin c&aacute;maras a un lugar que no conozco y en donde en su interior hay hombres armados que le brindan seguridad a mi agresor&rdquo;. Finalmente Ortiz demand&oacute; una verdadera &ldquo;justicia con un trato equitativo&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Por su parte el Director de noticias de Canal 36, Esdras Amado L&oacute;pez, conden&oacute; en&eacute;rgicamente el favoritismo por parte de la juez para con el sacerdote, &ldquo;si las condiciones hubiesen sido al contrario, Luis Ortiz ya estuviera muerto por &oacute;rdenes superiores&rdquo;, ejemplific&oacute;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Al lugar se hicieron presentes una comisi&oacute;n inspectora de la fiscal&iacute;a de Derechos Humanos del Ministerio Publico (MP), as&iacute; como un inspector de la Corte Suprema de Justicia (CSJ) con el prop&oacute;sito de asegurar el debido proceso.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Una vez pasada las 11 de la ma&ntilde;ana, las autoridades antes mencionadas corroboraron que la Juez Canales Canales, se hab&iacute;a marchado tras celebrada la audiencia, la que finaliz&oacute; solamente con una de las partes; el agresor.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Luis Ortiz reportero de &ldquo;Canal 36 Cholusat Sur&rdquo;, fue agredido, 14 de febrero, por el Canciller de la Iglesia Cat&oacute;lica, Carlos Magno, mientras intentaba entrevistarlo por la separaci&oacute;n de la iglesia cat&oacute;lica del sacerdote Roberto Paiz, ex director del Instituto Cat&oacute;lico San Miguel.</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-03-02 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 19:54:00',
			),
			24 => 
			array (
				'id' => 51,
				'title' => 'Periodista asesinado a machetazos por desconocidos',
				'number' => '0025',
				'mes_id' => 3,
				'year' => 2012,
				'departamentos_id' => 2,
				'municipios_id' => 13,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">El periodista Fausto Elio Hern&aacute;ndez de 58 a&ntilde;os de edad, corresponsal y presentador del programa de noticias &ldquo;La Voz de la Noticia&rdquo;, que se trasmite por Radio Alegre en el municipio de Saba departamento de Col&oacute;n, al norte de Honduras, &nbsp;se convirti&oacute; el d&iacute;a s&aacute;bado 10 de marzo, en el segundo periodista hondure&ntilde;o asesinado en lo que va del a&ntilde;o 2012.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n el reporte preliminar de la Polic&iacute;a Nacional de la localidad, alrededor de las 10:30 de la ma&ntilde;ana, Hern&aacute;ndez fue asesinado por desconocidos que le infirieron varios machetazos (arma blanca) en su cuerpo.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El hecho ocurri&oacute; la ma&ntilde;ana del d&iacute;a s&aacute;bado en la colonia &ldquo;Standar&rdquo;, mientras el comunicador se dirig&iacute;a, en su bicicleta, a su vivienda ubicada en la aldea Golondrinas del municipio de Saba.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Los vecinos del sector denunciaron a los miembros de la polic&iacute;a que tras escuchar gritos, observaron como varias personas hu&iacute;an de la zona del crimen.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Desde hace nueve a&ntilde;os, Hern&aacute;ndez ejerc&iacute;a el periodismo; primero en su ciudad natal Olanchito en el departamento de Yoro y desde hace 8 a&ntilde;os se desempe&ntilde;aba como corresponsal y presentador en radio Alegre, pero tambi&eacute;n colaboraba para una televisora local propiedad del mismo due&ntilde;o de la estaci&oacute;n radial.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El periodista difund&iacute;a temas informativos referentes a la administraci&oacute;n municipal, el Registro Nacional de las Personas, los conflictos agrarios en la zona del Bajo Aguan y recientemente hab&iacute;a abordado el incendio en la granja penal de Comayagua en donde murieron 361 reos.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Durante la administraci&oacute;n de Porfirio Lobo Sosa han ocurrido 19 cr&iacute;menes de periodistas y comunicadores sociales. En la actualidad estos homicidios permanecen en completo estado de impunidad. Al respecto el Presidente de la Rep&uacute;blica declar&oacute;, el 19 de noviembre de 2011, que su gobierno est&aacute; aplazado en cuanto a la investigaci&oacute;n de estos hechos, por lo que es entendible que no hay voluntad pol&iacute;tica para resolver los asesinatos.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">La anterior situaci&oacute;n de injusticia, caracterizada, a su vez, &nbsp;por una investigaci&oacute;n simplista y reducida de los hechos, sumada a la ineficiencia judicial, han contribuido a crear un ambiente hostil para el ejercicio de la profesi&oacute;n cuya principal amenaza es la violencia extrema.</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-03-12 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 19:57:00',
			),
			25 => 
			array (
				'id' => 52,
				'title' => '“Inmunidad jurídica” para el religioso que agredió a periodista ',
				'number' => '0026',
				'mes_id' => NULL,
				'year' => 2012,
				'departamentos_id' => 8,
				'municipios_id' => 110,
				'body' => '<p>
<span style="text-align: justify;">Por la embestidura eclesi&aacute;stica del Canciller de la Iglesia Cat&oacute;lica Carlos Magno, el Juzgado de Paz de lo Criminal de la Capital de Honduras remiti&oacute; el caso a la Corte Suprema de Justicia (CSJ), para que sea este organismo el que dirima la querella entablada al cura por el periodista Luis Ortiz.</span></p>
<p style="text-align: justify;">
El comunicador present&oacute; los cargos el pasado 14 de febrero tras recibir una cachetada por parte del Padre Carlos Magno. De acuerdo al expediente la acusaci&oacute;n es por violenta agresi&oacute;n a un periodista.</p>
<p style="text-align: justify;">
Tras una inusual primera audiencia celebrada el viernes 2 de marzo, en la casa de habitaci&oacute;n del sacerdote, misma que no cont&oacute; con la presencia del acusador a quien se restringi&oacute; el ingreso a su propio juicio oral y p&uacute;blico, la Juez de Paz, Carmen Canales Canales remiti&oacute; el caso a la CSJ.</p>
<p style="text-align: justify;">
Seg&uacute;n la juez, el sacerdote Carlos Magno es considerado un alto funcionario del Estado por la analog&iacute;a como Canciller de la iglesia Cat&oacute;lica, por lo que la resoluci&oacute;n del juzgado de Paz fue remitir el caso a una instancia superior.</p>
<p style="text-align: justify;">
En respuesta a esta acci&oacute;n de la juez Canales, el periodista Luis Ortiz denunci&oacute; p&uacute;blicamente que el sistema de justicia hondure&ntilde;o es un ente que solo sirve para amparar &ldquo;con un blindaje de impunidad a un poder&iacute;o social elitista&rdquo;, que en este caso est&aacute; representado por el religioso.</p>
<p style="text-align: justify;">
&ldquo;Honduras es un pa&iacute;s laico, el sistema no tiene porque reconocedor la figura del padre Magno, dentro de los procedimientos judiciales&hellip; Carlos Magno tiene que enfrentar el juicio como un hombre com&uacute;n y corriente. Apelando a sus principios cristianos, le pido humildad para reconocer que se equivoco en su actuar&rdquo;, recapacit&oacute; Ortiz.</p>
<p style="text-align: justify;">
Luis Ortiz reportero de &ldquo;Canal 36 Cholusat Sur&rdquo;, fue agredido, el 14 de febrero de 2011, por el Canciller de la Iglesia Cat&oacute;lica, Carlos Magno, mientras intentaba entrevistarlo por la separaci&oacute;n de la iglesia cat&oacute;lica del sacerdote Roberto Paiz, ex director del Instituto Cat&oacute;lico San Miguel.&nbsp;</p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-03-13 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-01-07 00:00:00',
				'updated_at' => '2013-01-07 23:56:00',
			),
			26 => 
			array (
				'id' => 53,
				'title' => 'Comunicador amenazado a muerte en Choloma',
				'number' => '0027',
				'mes_id' => 3,
				'year' => 2012,
				'departamentos_id' => 5,
				'municipios_id' => 64,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El comunicador, Alex Roberto Sabill&oacute;n G&oacute;mez, quien se desempe&ntilde;a como reportero del canal de televisi&oacute;n, Multicanal, localizado en el Municipio de Choloma departamento de Cort&eacute;s, denunci&oacute; ante la Direcci&oacute;n General de Investigaci&oacute;n Criminal, DGIC, de San Pedro Sula, ser objeto de amenazas a muerte.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Sin precisar el nombre de la persona responsable de las amenazas, Sabill&oacute;n G&oacute;mez, dijo que las mismas se dieron por la v&iacute;a telef&oacute;nica, entre las 7:00 y 8:00pm de la noche, tiempo durante el cual se transmite el programa.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El comunicador manifest&oacute; a C-Libre, que la agenda tem&aacute;tica que ventil&oacute;, el martes 13 de marzo, d&iacute;a en que lo intimidaron, trat&oacute; sobre el aumento a la tarifa del agua por parte de la empresa Aguas de Choloma y la violaci&oacute;n de los derechos humanos de los vendedores de la calle y los locatarios de los mercados.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Agreg&oacute;, que &ldquo;adem&aacute;s de los temas mencionados, abordo la problem&aacute;tica relacionada con la tasa de seguridad, el alza a los impuestos, el plan de arbitrios y la corrupci&oacute;n. &ldquo;Mi vida est&aacute; en manos de los grupos de poder del municipio y de los corruptos&rdquo;. Asegur&oacute; el comunicador.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Sabill&oacute;n aclar&oacute; que no culpa de las amenazas a muerte al alcalde de Choloma, Leopoldo Crivelli Durant, y los ejecutivos de la empresa Aguas de Choloma, sin embargo &ldquo;teme que por ese lado pueden provenir las mismas&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Yo siento temor de los activistas del alcalde, no propiamente de &eacute;l, pues no es una persona confrontativa, soy amigo de uno de sus hijos, lo &uacute;nico es que no compartimos ideolog&iacute;as, detall&oacute; Sabill&oacute;n, quien estudia una licenciatura en Matem&aacute;ticas en la universidad Pedag&oacute;gica Nacional&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Finalmente el comunicador expres&oacute; que considera que las amenazas tambi&eacute;n pueden proceder por la cobertura a los eventos, marchas, plantones y dem&aacute;s actividades que realizan las obreras de la maquila, los pobladores, los maestros y el Frente Nacional de Resistencia Popular, FNRP.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Alex Roberto Sabill&oacute;n recibi&oacute; las primeras amenazas de muerte en el a&ntilde;o 2010 de parte de un regidor de la corporaci&oacute;n municipal de Choloma, cuyo nombre no revel&oacute;. En aquella oportunidad interpuso la denuncia ante la Fiscal&iacute;a del Ministerio P&uacute;blico, pero la misma no prospero.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Cabe recordar que el mi&eacute;rcoles 29 de febrero de 2012 el cad&aacute;ver de la comunicadora Saira Fabiola Almendrares fue encontrado en municipio de Choloma</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-03-19 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 19:58:00',
			),
			27 => 
			array (
				'id' => 54,
				'title' => 'Portavoz del Ministerio Público se encomienda a Dios ante amenazas',
				'number' => '0028',
				'mes_id' => 3,
				'year' => 2012,
				'departamentos_id' => 8,
				'municipios_id' => 110,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">El periodista Elvis Guzm&aacute;n, vocero de la Fiscal&iacute;a del Ministerio P&uacute;blico de la regi&oacute;n norte del pa&iacute;s con sede en la ciudad de San Pedro Sula, responsabiliz&oacute; a la abogada Nora Urbina, Coordinadora de la Fiscal&iacute;a Especial de la Ni&ntilde;ez con sede en Tegucigalpa,&nbsp; de cualquier atentando en su contra. Asimismo el comunicador aclar&oacute; que no piensa irse del pa&iacute;s, pues aqu&iacute; est&aacute; su familia, &ldquo;esta situaci&oacute;n la pongo en manos de Dios&rdquo;, afirm&oacute;.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Elvis Guzm&aacute;n, dijo a colegas periodistas, luego de una reuni&oacute;n el jueves 15 de marzo, que ten&iacute;a en la fiscal&iacute;a dos denuncias por amenazas a muerte, pero que interpondr&iacute;a una tercera, en la que responsabilizar&iacute;a a la abogada, Nora Urbina&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Ella, en su momento manifest&oacute; que yo le brinde a los medios de comunicaci&oacute;n un video y fotograf&iacute;as de un caso muy delicado relacionado con un allanamiento, lo cual es totalmente falso, porque en esta oficina no cuento con c&aacute;mara fotogr&aacute;fica, muchos menos de video, porque aqu&iacute; trabajamos &ldquo;a puras u&ntilde;as y eso ella bien lo sabe&rdquo;, relat&oacute;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Guzm&aacute;n declar&oacute; que a ra&iacute;z de las declaraciones de la fiscal, una camioneta color rojo con varias personas en su interior ha rondado su residencia en cuatro ocasiones, por lo que considera que su vida est&aacute; en riesgo.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Las personas particulares a que se refiere el vocero son las que al parecer le hicieron llegar a su oficina de trabajo un mensaje construido con recortes de peri&oacute;dicos, cuya esencia e intenci&oacute;n era amedrentarlo.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Otra amenaza procede de una banda de roba carros que se dedican al sicariato, la cual fue detenida el a&ntilde;o anterior por agentes de la Polic&iacute;a Nacional Preventiva y entre sus pertenencias le encontraron una lista con el nombre de varias personas por liquidar, entre las que se menciona al periodista Elvis Guzm&aacute;n.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Guzm&aacute;n confi&oacute; a varios colegas que dado que su vida corre peligro se le ha asignado un agente policial, quien le brinda protecci&oacute;n desde hace alg&uacute;n tiempo atr&aacute;s. Asimismo sostuvo que las denuncias son del conocimiento de la embajada de Estados Unidos en Honduras y del Comisionado Nacional de los Derechos Humanos de Honduras, Conadeh, con sede en San Pedro Sula.</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-03-20 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 20:00:00',
			),
			28 => 
			array (
				'id' => 55,
				'title' => 'Comunicador Social victima de acciones intimidatorias por parte de ex militar',
				'number' => '0029',
				'mes_id' => 3,
				'year' => 2012,
				'departamentos_id' => 14,
				'municipios_id' => 208,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">El periodista Jos&eacute; Modesto Acosta, con 30 a&ntilde;os de ejercer la profesi&oacute;n, denunci&oacute; ante C-Libre, al mayor retirado del Ej&eacute;rcito de Honduras Wilfredo Ben&iacute;tez, propietario de la compa&ntilde;&iacute;a de cable y televisora Canal 50, &nbsp;SOL TV, &nbsp;por&nbsp; acciones intimidatorias contra la libertad de expresi&oacute;n.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n Acosta durante cuatro a&ntilde;os mantuvo una relaci&oacute;n comercial con el Canal 50, SOL TV, &nbsp;propiedad del ex militar y ubicado en el municipio de Ocotepeque, departamento de Ocotepeque en el occidente del pa&iacute;s, que consisti&oacute; en el alquiler de un espacio televisivo para &nbsp;trasmitir su programa Atardecer Informativo.&nbsp;</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Acosta quien trabajo para Radio Am&eacute;rica y ahora lo hace como corresponsal de Radio Globo, inform&oacute; que debido a la dif&iacute;cil situaci&oacute;n financiera que atraviesa, resolvi&oacute; trabajar de manera directa con dos medios de comunicaci&oacute;n cat&oacute;licos del municipio, decisi&oacute;n que fue notificada al mayor Ben&iacute;tez con 15 d&iacute;as de anticipaci&oacute;n.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Acosta asegur&oacute; que los problemas con el ex militar surgieron a ra&iacute;z de su nueva relaci&oacute;n de trabajo con el Canal 29 y Radio Comunidad, ambos medios, propiedad de la Iglesia Cat&oacute;lica de aquella zona, y que levantan su se&ntilde;al con la empresa&nbsp; Sol TV.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Cada vez que estoy trasmitiendo mi programa, la se&ntilde;al es interrumpida por ordenes del ex militar Ben&iacute;tez&rdquo;, dijo el comunicador Acosta a C-Libre.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Ante tal situaci&oacute;n el P&aacute;rroco de la Iglesia de Ocotepeque, Fray Jaime Mena, decidi&oacute; &nbsp;dialogar con el se&ntilde;or Ben&iacute;tez, &ldquo;pero las gestiones&nbsp; conciliatorias no han surtido los efectos positivos esperados&rdquo;, narr&oacute; el afectado.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Lamentablemente a esta penosa situaci&oacute;n se ha coludido la due&ntilde;a de la empresa de televisi&oacute;n por cable INCATECO, Lorenia de Anchecta, quien se prest&oacute; al juego al no ofrecer a la Iglesia Cat&oacute;lica la se&ntilde;al para pasar mi programa televisivo&rdquo;, denuncio el comunicador.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Se me est&aacute;n violentando los derechos constitucionales tales como la libertad de expresi&oacute;n, el derecho a informar y ser informado y otros que son atinentes a los derechos establecidos en la Carta Magna&rdquo;, afirm&oacute; &nbsp;Acosta.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">En ese sentido demand&oacute; de las autoridades hondure&ntilde;as, efectuar una investigaci&oacute;n sobre su conducta como comunicador social pero asimismo la situaci&oacute;n legal actual de las dos empresas de televisi&oacute;n por cable. Finalmente responsabiliza a los se&ntilde;ores Wilfredo Ben&iacute;tez de Sol TV y a la se&ntilde;ora Lorenia de Anchecta y a su esposo Ad&aacute;n Anchecta propietarios de INCATECO por lo que le pueda suceder a &eacute;l y a su familia.&nbsp;</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-03-21 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 20:02:00',
			),
			29 => 
			array (
				'id' => 56,
				'title' => 'Desconocidos destruyen unidad móvil al no poder ingresar de manera violenta al edificio operativo de Canal 36',
				'number' => '0030',
				'mes_id' => 3,
				'year' => 2012,
				'departamentos_id' => 8,
				'municipios_id' => 110,
				'body' => '<p style="text-align: justify;">
<span style="text-align: justify;">A<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"> las 5:15 de la ma&ntilde;ana del d&iacute;a de hoy (mi&eacute;rcoles 28), dos hombres armados pretendieron ingresar de manera violentamente al edificio operativo de Canal 36. Al no poder realizar la acci&oacute;n quebraron los vidrios de una unidad m&oacute;vil propiedad del canal de televisi&oacute;n que se encontraba estacionada en la parte externa del edificio.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El periodistas Javier Aguilera, a trav&eacute;s del noticiero &ldquo;El sol de las ma&ntilde;anas&rdquo;, dio a conocer las im&aacute;genes de la unidad y a tiempo de condenar el atentado, asegur&oacute; que en esta ocasi&oacute;n el da&ntilde;o, no ser&aacute; reportado ante las autoridades competentes, &ldquo;estamos cansados de formar parte de las estad&iacute;sticas de los entes investigadores solamente canal 36 y radio la catracha ha denunciado m&aacute;s de 20&nbsp; agresiones hacia sus periodistas y su equipo de trabajo en menos de tres a&ntilde;os&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Aguilera dijo &ldquo;&hellip; ya conocemos este tipo de reacciones por parte de personas que se sienten da&ntilde;adas, cuando informamos al pueblo hondure&ntilde;o con veracidad y transparencia&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Producto del atentado, el periodista Aguilera, dio participaci&oacute;n telef&oacute;nica de los televidentes por un espacio de dos horas y media, donde&nbsp; ciudadanos/as se solidarizaron con los periodistas y con el medio de comunicaci&oacute;n. Asimismo el p&uacute;blico relaciono la agresi&oacute;n a las noticas transmitidas durante la emisi&oacute;n del noticiero estelar del d&iacute;a de ayer (martes 27).</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Dicha emisi&oacute;n transmiti&oacute; en vivo un accidente automovil&iacute;stico protagonizado por el candidato a la Presidencia del pa&iacute;s, por el &nbsp;partido pol&iacute;tico &ldquo;Abticorrupcion&rdquo;, inscrito recientemente y quien seg&uacute;n las declaraciones de los presentes pretendi&oacute; darse a la fuga.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El presidenciable en tono alterado ante la labor del periodista que daba cobertura a la noticia, manifest&oacute;, &ldquo;este canal tiene una campa&ntilde;a en contra de mi persona no me extra&ntilde;a que ustedes hayan enviado a este motociclista para chocarme&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Tambi&eacute;n en esa misma emisi&oacute;n a partir de las nueve de la noche, el canal transmiti&oacute; la exclusiva de las declaraciones de la hija del Coronel Jos&eacute; Arnulfo Jim&eacute;nez, quien actualmente enfrenta cargos por violaci&oacute;n por parte de su hija.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">La joven de 25 a&ntilde;os de edad, narr&oacute; detalladamente como desde que ten&iacute;a ocho &oacute; 10 a&ntilde;os ha sido v&iacute;ctima de abuso sexual por parte de su padre quien durante ocho a&ntilde;os se mantuvo acosada, atormentada y torturada por las depravaciones sexuales de su propio padre.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">C-Libre por su parte ha documentado y publicado, cada una de las violaciones a la libertad de expresi&oacute;n que ha sufrido Canal 36 y Radio La Catracha entre las que destacan: el cierre y militarizaci&oacute;n del canal; sabotaje en su se&ntilde;al; periodistas y camar&oacute;grafos golpeados; destrucci&oacute;n del equipo period&iacute;stico y agresi&oacute;n por parte de funcionarios del Estado.</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-03-28 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 20:03:00',
			),
			30 => 
			array (
				'id' => 57,
				'title' => 'Periodista habla sobre su secuestro por hombres encapuchados',
				'number' => '0031',
				'mes_id' => 3,
				'year' => 2012,
				'departamentos_id' => 5,
				'municipios_id' => 63,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El contenido de esta Alerta, se retiro a solicitud de la victima.</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-03-23 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 20:04:00',
			),
			31 => 
			array (
				'id' => 58,
				'title' => 'Congreso Nacional incumple Ley de Transparencia y no entrega información',
				'number' => '0032',
				'mes_id' => 4,
				'year' => 2012,
				'departamentos_id' => 8,
				'municipios_id' => 110,
				'body' => '<p>
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">El pasado 27 de febrero, la periodista Eleana Borjas del peri&oacute;dico digital www.conexi&oacute;n.info, solicit&oacute; informaci&oacute;n v&iacute;a Ley de Transparencia al Congreso Nacional, sobre los gastos en publicidad que realiz&oacute; durante la segunda legislatura 2011-2012.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">En aras de la transparencia se solicit&oacute;: Monto total pagado en concepto de publicidad del Congreso Nacional durante la segunda legislatura 2011; total de spots publicitarios en radio y televisi&oacute;n, as&iacute; como publicidad en prensa escrita; nombre de las empresas de radio y televisi&oacute;n, y&nbsp; nombre de los programas en los que se transmitieron los spots; asimismo nombre de los diarios en los que se publicit&oacute; el Congreso Nacional y monto total pagado en concepto de publicidad a cada una de las empresas de radio, televisi&oacute;n y prensa escrita (diarios); indicar de manera individual el pago a cada una de las empresas antes mencionadas.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">La pr&oacute;rroga</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Luego de concluidos los d&iacute;as (diez d&iacute;as h&aacute;biles) para que el Congreso Nacional informara sobre el gasto en publicidad durante el 2011,&nbsp; el oficial de informaci&oacute;n, Rolando Raudales, solicit&oacute; a la periodista Borjas una pr&oacute;rroga de diez d&iacute;as m&aacute;s para la entrega de la informaci&oacute;n. &ldquo;Buen d&iacute;a Sra. Borjas le estamos enviando la solicitud de pr&oacute;rroga que nos hizo llegar la oficina de la Direcci&oacute;n de comunicaciones, en virtud que estamos en la mejor disposici&oacute;n de proporcionarle la informaci&oacute;n&nbsp; requerida&rdquo;, la solicitud de espera fue enviada el 13 de marzo.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El Congreso Nacional deb&iacute;a de haber entregado la informaci&oacute;n requerida el 27 de marzo, pero hasta la fecha la Unidad de Transparencia no ha dado ninguna respuesta, luego de la solicitud de pr&oacute;rroga.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Recurso de revisi&oacute;n</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El 30 marzo, este medio de comunicaci&oacute;n a trav&eacute;s de Borjas interpuso un recurso de revisi&oacute;n en contra del Congreso Nacional de Honduras, por no entregar informaci&oacute;n p&uacute;blica y de oficio y por considerar que atenta contra el derecho de petici&oacute;n y de&nbsp; informaci&oacute;n de los solicitantes, ante el pleno de comisionados del Instituto de Acceso a la Informaci&oacute;n P&uacute;blica &ndash;IAIP-.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Interpongo este recurso con el fin de que se le envi&eacute; comunicaci&oacute;n a este poder del Estado para que me proporcionen la informaci&oacute;n de acuerdo al termino de Ley, porque de nada sirve tener una Ley si al final no la vamos aplicar&rdquo;, indica el recurso de revisi&oacute;n presentado por la periodista Borjas.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El recurso fue fundamentado en los art&iacute;culos 80 de la Constituci&oacute;n de la Republica y 26 de la Ley de Transparencia y Acceso a la informaci&oacute;n P&uacute;blica.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Durante 2011, el Congreso Nacional realiz&oacute; fuertes campa&ntilde;as en los diferentes medios de comunicaci&oacute;n, en las que sobresalen: El programa de los Eco-Fogones de la Oficina &ldquo;Vida Mejor&rdquo;, las reformas a la Ley Fundamental de Educaci&oacute;n, Aula Digital y la Tasa de Seguridad.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Cabe mencionar que la periodista Borjas visit&oacute; el Portal de Transparencia del Congreso Nacional, y no se encontr&oacute; informaci&oacute;n referente a contratos por publicidad.&nbsp;</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-04-03 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 20:07:00',
			),
			32 => 
			array (
				'id' => 59,
				'title' => 'Desconocidos impiden transmisión de Radios Comunitarias ',
				'number' => '0033',
				'mes_id' => 4,
				'year' => 2012,
				'departamentos_id' => 10,
				'municipios_id' => 144,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">En plena transmisi&oacute;n del jueves 12 del presente desconocidos ingresaron y cortaron el fluido el&eacute;ctrico de las instalaciones f&iacute;sicas de las radios comunitarias &ldquo;La Voz Lenca&rdquo; y &ldquo;Radio Guarajambala&rdquo;, ambas propiedad del Consejo C&iacute;vico de Organizaciones Populares e Ind&iacute;genas de Honduras (Copinh), ubicadas en la ciudad de Intibuc&aacute;, en el departamento de la Esperanza.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&quot;Ya mucha critica por estas radios&quot;, dijeron los hombres justamente cuando los comunicadores en cabina hac&iacute;an publico el respaldo institucionalizado hacia la comunidad de Santo Domingo, Colomoncagua, departamento de Intibuc&aacute;, por su oposici&oacute;n en la construcci&oacute;n de una represa para la generaci&oacute;n de energ&iacute;a el&eacute;ctrica privatizada.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Las radios La Voz Lenca y&nbsp; Guarajambala han sufrido permanentemente descargas el&eacute;ctricas en sus trasmisores, lo que ha provocado que se quemen. &ldquo;En una ocasi&oacute;n fueron&nbsp; ya silenciadas, sujetos de SEMEH vinculados al&nbsp; privatizado servicio de medici&oacute;n de la energ&iacute;a el&eacute;ctrica procedieron a da&ntilde;ar las instalaciones el&eacute;ctricas de las radios&rdquo;, dijeron directivos del Copinh.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El Copinh denuncia que lo sucedido&nbsp; es parte de una escalada de represi&oacute;n contra el pueblo lenca que lucha contra la privatizaci&oacute;n y el saqueo de los bienes naturales, concesionados por el &ldquo;r&eacute;gimen a la oligarqu&iacute;a y las transnacionales&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Asimismo evidenciaron que en la zona se han acrecentado las amenazas a muerte y los actos de intimidaci&oacute;n contra las personas que lucha por la defensa de los r&iacute;os, la tierra y el bosque.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">En comunicado de prensa el Copinh hizo un llamado urgente a la solidaridad nacional e internacional, para condenar &ldquo;este nuevo acto de violaciones a los derechos humanos que cuarta la libre emisi&oacute;n del pensamiento&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Agregan que reafirman su decisi&oacute;n de luchar de manera permanente en la defensa de los derechos humanos y la vida, particularmente del pueblo lenca de Honduras.</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-04-13 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 20:08:00',
			),
			33 => 
			array (
				'id' => 60,
				'title' => 'Dirigentes estudiantiles denuncian violaciones a la libertad de expresión y asociación ',
				'number' => '0034',
				'mes_id' => 4,
				'year' => 2012,
				'departamentos_id' => 8,
				'municipios_id' => 110,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">Los dirigentes estudiantiles Kelly N&uacute;&ntilde;ez, Erlin Guti&eacute;rrez y Miguel &Aacute;ngel Aguilar denunciaron el d&iacute;a&nbsp; 12 de abril ser objeto de persecuci&oacute;n pol&iacute;tica y de violarles su derecho a la libertad de expresi&oacute;n y de asociaci&oacute;n por parte de las autoridades de la Universidad Pedag&oacute;gica Nacional Francisco Moraz&aacute;n (UPNFM) cuyo rector es el profesor David Orlando Mar&iacute;n.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n los denunciantes, estudiantes de la Carrera de Ciencias Naturales, las autoridades universitarias, que lejos de limitar estos derechos, deber&iacute;an de promoverlos, se basan en el Reglamento del R&eacute;gimen Acad&eacute;mico aprobado el 13 de diciembre de 2005, para acusarlos como incitadores en la organizaci&oacute;n de movilizaciones, suspensi&oacute;n de las labores acad&eacute;micas, denigrar la imagen p&uacute;blica de la universidad y llamar a la sublevaci&oacute;n en contra de las autoridades, por lo que podr&iacute;an ser expulsados de dicha casa de estudios.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">En declaraciones brindadas al peri&oacute;dico digital <strong><em>defensoreenlinea.com</em></strong> los estudiantes expresaron que el reglamento les limita la libertad de expresi&oacute;n y la posibilidad de que los estudiantes formen asociaciones ya que existe un ambiente hostil hacia sus actividades. &ldquo;Para el caso est&aacute; prohibido realizar manifestaciones p&uacute;blicas dentro de los predios universitarios y el uso de sistemas de audio, sin la autorizaci&oacute;n previa de las autoridades&rdquo;, denunci&oacute; Kelly N&uacute;&ntilde;ez al medio digital.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">La represi&oacute;n hacia los dirigentes estudiantiles ha llegado a tal extremo que en una audiencia, los universitarios, citados por el decano Jos&eacute; Gerardo Fuentes fueron informados que Las autoridades hab&iacute;an determinado, mediante pruebas, que a los principales dirigentes y dirigentas del movimiento estudiantil se les iniciar&iacute;a un proceso de expulsi&oacute;n.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El pasado 7 de marzo&nbsp; un grupo de estudiantes realiz&oacute; una peque&ntilde;a movilizaci&oacute;n desde Plaza Miraflores hasta llegar a la sede del Instituto de Previsi&oacute;n del Magisterio (INPREMA) en defensa a la educaci&oacute;n p&uacute;blica. Por esa acci&oacute;n agentes antimotines los atacaron con chorros de agua a presi&oacute;n, gases lacrim&oacute;genos y toletazos. No bastando lo anterior fueron acusados &nbsp;por las autoridades de la UPNFM de poner en riesgo la vida de los estudiantes y los bienes materiales de la universidad.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">De acuerdo con Marvin Palacios periodista de <strong><em>defensoresenlinea.com</em></strong> esta acciones limitan las libertades de los estudiantes establecidas en la Constituci&oacute;n de la Rep&uacute;blica y en la Convenci&oacute;n sobre los Derechos de la Juventud aprobada en el a&ntilde;o 2004 en Badajoz, Espa&ntilde;a, de la cual Honduras es signataria.</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-04-13 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 20:09:00',
			),
			34 => 
			array (
				'id' => 61,
				'title' => 'Periodista radial golpeado y amenazado de muerte por dirigentes del Partido Liberal ',
				'number' => '0035',
				'mes_id' => 4,
				'year' => 2012,
				'departamentos_id' => 8,
				'municipios_id' => 110,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">El periodista, Rony Espinoza, de Radio Globo denunci&oacute; a trav&eacute;s del noticiero matutino del pasado 19 de abril una agresi&oacute;n f&iacute;sica as&iacute; como amenazas de muerte de las que fue objeto por parte de dirigentes liberales que acompa&ntilde;aban al Monse&ntilde;or Luis Alfonso Santos en un evento convocado por el Partido Liberal.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n Espinoza el d&iacute;a mi&eacute;rcoles 18 abril mientras le daba cobertura period&iacute;stica a una reuni&oacute;n pol&iacute;tica en la sede del Partido Liberal ubicada en la ciudad capital, le llamo la atenci&oacute;n el repentino retiro de monse&ntilde;or Santos cuando el evento a&uacute;n no culminaba, por lo que decidi&oacute; seguirlo e interrogarlo al respecto.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">En su relat&oacute; Espinoza dijo que su labor period&iacute;stica fue obstaculizada por varias personas que bloquear&oacute;n el acceso al sacerdote entre ellos los reconocidos pol&iacute;ticos liberales &nbsp;V&iacute;ctor Cubas, ex diputado y &nbsp;Fredy Cerrato ex ministro de la Secretaria de Industria y Comercio durante la administraci&oacute;n del ex presidente Manuel Zelaya Rosales.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Trate de entrevistar a Monse&ntilde;or Santos y por unos minutos le persegu&iacute; pero al ver el bloqueo a mi trabajo decid&iacute; encender mi grabadora, pero la reacci&oacute;n por parte de estos se&ntilde;ores fue violenta&hellip; Cerrato me codeo fuertemente y V&iacute;ctor Cubas de manera amenazante me dijo; te queres morir&rdquo;, pormenoriz&oacute; Espinoza.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">En los primeros cuatro meses del a&ntilde;o C-libre ha registrado 41 agresiones&nbsp; a la libertad de expresi&oacute;n de las cuales 14 son amenazas a muerte a periodistas y dos son asesinatos de comunicadores.</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-04-19 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 20:13:00',
			),
			35 => 
			array (
				'id' => 62,
				'title' => 'Presidente del Congreso Nacional ordena restringir acceso de periodistas a ese poder del Estado ',
				'number' => '0036',
				'mes_id' => 4,
				'year' => 2012,
				'departamentos_id' => 8,
				'municipios_id' => 110,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">El presidente del Congreso Nacional (CN), Juan Orlando Hern&aacute;ndez, neg&oacute; el ingreso a ese poder del Estado de un grupo de periodistas que dar&iacute;an cobertura de la reuni&oacute;n que sostuvo con el ex presidente Manuel Zelaya Rosales y dirigentes sociales de diversos sectores, quienes despu&eacute;s de una protesta p&uacute;blica le entregaron un pronunciamiento en el que denunciaron entre otros aspectos los altos &iacute;ndices de criminalidad y el incremento desmedido a los precios de la canasta b&aacute;sica&nbsp; y los carburantes.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">Unos 20 periodistas y ocho camar&oacute;grafos en su mayor&iacute;a de la prensa independiente fueron detenidos por polic&iacute;as y militares en el momento en que pretend&iacute;an entrar al Congreso Nac</span><span style="text-align: justify;">ional. Los encargados de la seguridad justificaron su atropello argumentando que la orden proven&iacute;a del mismo presidente del poder legislativo Juan Orlando Hern&aacute;ndez.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Oswaldo Estrada uno de los periodistas al que se le obstruy&oacute; el ingreso a las oficinas del Congreso Nacional denunci&oacute; que los afectados son periodistas que han mostrado simpat&iacute;a hacia el Frente Nacional de Resistencia Popular (FNRP), por lo que la acci&oacute;n la catalogaba de sectaria y una clara violaci&oacute;n a la libertad de expresi&oacute;n.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Por su parte encargados del &aacute;rea de comunicaci&oacute;n del CN, aseguraron que la reuni&oacute;n era a puerta cerrada, sin embargo al ser cuestionados del porqu&eacute; hab&iacute;a periodistas, de los medios de comunicaci&oacute;n tradicionales, a lo interno del edificio, estos manifestaron que se las hab&iacute;an ingeniado para ingresar por otros lugares.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Con esta nueva agresi&oacute;n a la libertad de expresi&oacute;n por parte del Poder Legislativo ya suman dos las alertas emitidas por C-Libre durante el presente mes. La primera fue por la negativa de informaci&oacute;n p&uacute;blica a la periodista Eleana Borjas del peri&oacute;dico digital Conexihon.info.</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-04-20 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 20:14:00',
			),
			36 => 
			array (
				'id' => 63,
				'title' => 'Asesinan a presentador de programa televisivo',
				'number' => '0037',
				'mes_id' => 4,
				'year' => 2012,
				'departamentos_id' => 8,
				'municipios_id' => 110,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">Noe Valladares, presentador y productor del programa de televisi&oacute;n &ldquo;El show del Tecolote&rdquo; que se trasmite por Canal 66 Maya TV, fue asesinado el 23 de abril de 2012, minutos despu&eacute;s de haber finalizado la transmisi&oacute;n de su programa.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El hecho ocurri&oacute; a escasos metros del edificio donde opera la estaci&oacute;n televisiva, en el anillo perif&eacute;rico a inmediaciones de la Colonia La Ca&ntilde;ada de la ciudad de Comayag&uuml;ela.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Al momento de producirse el atentado criminal Valladares se trasladaba en un veh&iacute;culo Toyota Corola color amarillo con n&uacute;mero de placa PAU 5985, junto a su co-presentadora y compa&ntilde;era de hogar Nelly Yorleny Pav&oacute;n y dos hombres quienes se presume eran guardaespaldas del joven conocido en el medio como &ldquo;el tecolote&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n lo relatado por Pav&oacute;n a los agentes de la Direcci&oacute;n Nacional de Investigaci&oacute;n Criminal (DNIC) que le tomaron declaraci&oacute;n en la sala de emergencia del Hospital Escuela, el presentador y ella viajaban en el asiento trasero del automotor, al momento de ser interceptados por cuatro hombres armados y con sus rostros cubiertos por pasamonta&ntilde;as, quienes se conduc&iacute;an en una camioneta marca Toyota Prado color blanco.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;El show del Tecolote&rdquo;, era un programa de entretenimiento que se transmit&iacute;a de Lunes a Viernes de 9:00 a 10:00 de la ma&ntilde;ana, en el que, el presentador recib&iacute;a llamadas telef&oacute;nicas con el objetivo de proporcionar a los oyentes los supuestos n&uacute;meros que saldr&iacute;an premiados en los sorteos de la Loter&iacute;a Mayor y Menor, as&iacute; como en la loter&iacute;a electr&oacute;nica.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n la informaci&oacute;n hecha trascender en Maya TV Valladares habr&iacute;a tenido amenazas a muerte y era objeto de extorci&oacute;n. &nbsp;</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-04-23 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 20:15:00',
			),
			37 => 
			array (
				'id' => 64,
				'title' => 'Amnistía Internacional emite acción urgente para salvaguardar la vida de periodista hondureña.',
				'number' => '0038',
				'mes_id' => NULL,
				'year' => 2012,
				'departamentos_id' => 8,
				'municipios_id' => 110,
				'body' => '<p>
<span style="text-align: justify;">El pasado 18 de abril, la organizaci&oacute;n defensora de los derechos humanos Amnist&iacute;a Internacional, emiti&oacute; una acci&oacute;n urgente con el fin de salvaguardar la vida de la periodista y defensora de los derechos humanos en Honduras, Dina Meza Elvir, quien recientemente ha reportado ser v&iacute;ctima de amenazas de violencia sexual.</span></p>
<p style="text-align: justify;">
El documento de Amnist&iacute;a Internacional, enfatiza el peligro que actualmente est&aacute; corriendo la periodista hondure&ntilde;a que goza de medidas cautelares, otorgadas en los a&ntilde;os 2006 y 2009, por la Comisi&oacute;n Interamericana de Derechos Humanos (CIDH).</p>
<p style="text-align: justify;">
Meza en la actualidad labora en el &aacute;rea de comunicaci&oacute;n del Comit&eacute; de Familiares de Detenidos y Desaparecidos en Honduras (COFADEH) y en marzo pasado fue una de las ponentes en la audiencia &ldquo;Situaci&oacute;n de la libertades fundamentales y su efecto en la protecci&oacute;n de los derechos humanos en Honduras&rdquo;, en el marco del 144 periodo de sesiones de la Comisi&oacute;n Interamericana de Derechos Humanos celebrada en Washington.</p>
<p style="text-align: justify;">
Seg&uacute;n el escrito de Amnist&iacute;a Internacional, &ldquo;el 14 de abril, Dina Meza recibi&oacute; tres llamadas en su tel&eacute;fono m&oacute;vil, por la ma&ntilde;ana y por la tarde, realizadas desde el mismo n&uacute;mero, en las que la persona que llamaba no dijo nada. Cuando respondi&oacute; a una cuarta llamada, una voz de hombre le pregunt&oacute;: &ldquo;&iquest;Qu&eacute; hay de nuevo?&rdquo; y colg&oacute;. Dina Meza llam&oacute; al n&uacute;mero y pregunt&oacute; al hombre qui&eacute;n era y qu&eacute; quer&iacute;a. El comunicante dijo que se llamaba Miguel y que hab&iacute;a marcado un n&uacute;mero equivocado, pero termin&oacute; la llamada dici&eacute;ndole a Dina: &quot;Cu&iacute;dese la pipa&quot; (&oacute;rgano genital externo femenino)&rdquo;.</p>
<p style="text-align: justify;">
Una semana antes, (6 de abril), Meza caminaba en su barrio con sus hijos cuando observ&oacute; que dos hombres les estaban haciendo fotos. Semanas antes, (22 de febrero), Meza recibi&oacute; dos mensajes de texto con amenazas en las que se hac&iacute;a referencia a la violencia sexual. El primero dec&iacute;a:</p>
<p style="text-align: justify;">
&nbsp;&ldquo;Les vamos a quemar con cal la pipa hasta q griten y luego toda la quadrilla va gozar. CAM&rdquo;. Y el segundo: &ldquo;van a terminar como los del aguan muertos no hay nada m&aacute;s rico q cojer a unas zorras&quot;.</p>
<p style="text-align: justify;">
&nbsp;&ldquo;CAM&rdquo;, es el acr&oacute;nimo del Comando &Aacute;lvarez Mart&iacute;nez, seud&oacute;nimo que se emplea en amenazas contra defensores y defensoras de los derechos humanos, y periodistas tras el golpe de Estado de 2009.</p>
<p style="text-align: justify;">
En lo que va del a&ntilde;o 2012 el Comit&eacute; por la Libre Expresi&oacute;n C-Libre ha registrado 38 agresiones a la libertad de expresi&oacute;n de las cuales se reportan como casos extremos, la muerte de tres comunicadores/as y las amenazas a muerte contra 13 periodistas.</p>
<p style="text-align: justify;">
Esta preocupante ola de violencia contra el periodismo hondure&ntilde;o tiene en otros or&iacute;genes, el alto &iacute;ndice de impunidad que impera en el pa&iacute;s producto de la par&aacute;lisis de las autoridades de investigaci&oacute;n y de impartici&oacute;n de justicia, en la celeridad de las investigaciones de los hechos y el posterior castigo a los criminales, situaci&oacute;n que coadyuva&nbsp; a que el ejercicio del periodismo se ejerza bajo peligro y sin protecci&oacute;n alguna de parte del Estado.</p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-04-23 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-01-07 00:00:00',
				'updated_at' => '2013-01-08 00:49:00',
			),
			38 => 
			array (
				'id' => 65,
				'title' => 'Comunicador social sobrevive milagrosamente a atentado criminal ',
				'number' => '0039',
				'mes_id' => 4,
				'year' => 2012,
				'departamentos_id' => 4,
				'municipios_id' => 52,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">Elder Joel Aguilar, corresponsal de Canal 6, en la zona occidental del pa&iacute;s, sobrevivi&oacute; milagrosamente a un atentado criminal perpetrado por desconocidos el pasado s&aacute;bado 28 al rededor de la media noche, a la altura de la carretera que conduce del municipio de Nueva Arcadia, m&aacute;s conocida como La Entrada, departamento de Cop&aacute;n, hacia la ciudad de San Pedro Sula.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n Aguilar, cuando regresaba de traer a su compa&ntilde;era de hogar, qui&eacute;n labora en una gasolinera en las afueras del municipio, dos desconocidos que se transportaban en un autom&oacute;vil tipo paila, le dispararon en repetidas ocasiones a quema ropa con armas AK-47.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">En su narraci&oacute;n de los hechos Aguilar asegur&oacute; que al sentir los impactos de las balas en su autom&oacute;vil, aceler&oacute; al tope y recorri&oacute; aproximadamente un kilometro hasta que se estrell&oacute; en una rastra que estaba estacionada en una gasolinera ubicada por el kil&oacute;metro 100, justo en un &aacute;rea verde de la carretera entre La entrada y San Pedro Sula.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El reporte policial contabiliz&oacute; 14 perforaciones de bala de AK-47, en diferentes partes del auto de Aguilar, &ldquo;Los disparos impactaron en la parte trasera del veh&iacute;culo, en el vidrio delantero del lado del conductor, y en las puertas laterales izquierdas&rdquo;, inform&oacute; uno de los inspectores que perit&oacute; el hecho.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n la hip&oacute;tesis de fuentes que pidieron el anonimato, el comunicador recientemente le hab&iacute;a dado cobertura period&iacute;stica al asalto de cuatro camiones cargados con caf&eacute; a manos de una banda que opera en la zona, pues las descripciones del veh&iacute;culo donde se transportaban las personas que atentaron en contra de Aguilar coinciden con las caracter&iacute;sticas de los veh&iacute;culos de la personas que en el sector se dedican al crimen organizado.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Al respecto el Alcalde municipal de Nueva Arcadia (La Entrada), Roberto Hern&aacute;ndez, &nbsp;denunci&oacute; que por la labor period&iacute;stica que realiza Aguilar, se provocan este tipo de reacciones por parte de ciertos individuos, al tiempo que conden&oacute; el acto criminal. &nbsp;</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Debido a la gravedad del atentado, el comunicador Aguilar solicit&oacute; la debida protecci&oacute;n policial.</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-04-30 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 20:16:00',
			),
			39 => 
			array (
				'id' => 66,
				'title' => 'Periodista de Canal 6 denuncia amenazas a muerte',
				'number' => '0040',
				'mes_id' => 4,
				'year' => 2012,
				'departamentos_id' => 5,
				'municipios_id' => 63,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">El periodista Santiago Cerna director y conductor de los programas &ldquo;</span><strong style="text-align: justify;">Actualidades 2012&rdquo; y &ldquo;Al Punto&rdquo;, </strong><span style="text-align: justify;">que se trasmiten por Canal 6, denunci&oacute; ante el Comisionado Nacional de los Derechos Humanos de la ciudad de San Pedro Sula, al norte del pa&iacute;s, ser objeto de intimidaci&oacute;n.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Les saluda Santiago Cerna Moncada hoy, ma&ntilde;ana quien sabe y hoy s&iacute; quien sabe&hellip;&rdquo; fue el saludo de despedida que ofreci&oacute; el periodista al cerrar su programa &ldquo;Actualidades 2012&rdquo; el viernes anterior y minutos antes que sujetos a bordo de veh&iacute;culos sin placas y polarizados le obstruyeran el paso en un restaurante localizado en la avenida circunvalaci&oacute;n, de la ciudad de San Pedro Sula.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El jueves anterior a eso de las 7:00 de la noche una persona me dijo que hab&iacute;a escuchado &ldquo;que por boc&oacute;n me iban a volar el ga&ntilde;ote&rdquo;, es por eso que yo cierro el programa el d&iacute;a siguiente (el viernes) con ese saludo. Por lo general y a consecuencia de la muerte de varios colegas lo hago, pero es hasta ese d&iacute;a que le agreg&oacute; la frase &ldquo;y hoy si quien sabe&rdquo;, sin sospechar que al llegar al restaurante iba a ser objeto de intimidaci&oacute;n, dijo el periodista en entrevista para C-Libre.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Cerna inform&oacute; que los temas que ha venido abordando a trav&eacute;s de sus programas se vinculan con la agenda del gobierno local, la empresa de Servicios de Medici&oacute;n de Honduras, (Semeh), y en ciertas ocasiones, cuando la coyuntura lo amerita, abordo los asuntos relacionados con el Congreso Nacional y la Polic&iacute;a, puntualiz&oacute;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Sin embargo no puedo probar de donde provienen las amenazas expres&oacute; el comunicador quien viene ejerciendo el periodismo desde 1978, tiempo durante el cual se ha desempe&ntilde;ado en programas de deporte, m&uacute;sica y como reportero/redactor en los diarios El Heraldo y Tiempo.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n Cerna entre las amenazas que ha recibido, y que le han llegado por mensajes de textos y llamadas a su celular est&aacute;n: &ldquo;Te vamos a provocar un encuentro con Jes&uacute;s&rdquo;; &ldquo;te vamos a callar el pico&rdquo; y &ldquo;te voy a matar si a mi mam&aacute; le pasa algo por lo que est&aacute;s diciendo&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Por otra parte record&oacute; que en el a&ntilde;o 2001 recibi&oacute; las primeras amenazas; en aquel a&ntilde;o responsabiliz&oacute; a funcionarios municipales y a una persona particular, pero todo qued&oacute; sin efecto pues en el &uacute;ltimo caso hasta se produjo una disculpa.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">En el 2008, no sabe si producto de la casualidad, pero su carro apareci&oacute; con las tuercas flojas de una de las llantas delanteras. &ldquo;El mec&aacute;nico me dijo que eso solo pod&iacute;a ser una acci&oacute;n dirigida para matarme&rdquo;, coment&oacute; Cerna.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Ese mismo a&ntilde;o se produce otro incidente. &ldquo;Viajando para Tegucigalpa &ndash;capital de Honduras- &nbsp;y a la altura de la ciudad de Comayagua, soy rebasado por un carro y su conductor, un hombre de aspecto fraterno, me indica que mi veh&iacute;culo va derramando combustible, al aparcarme me cercioro que hay una fuga de agua, pero inmediatamente cuando estoy por reiniciar la marcha se desprendi&oacute; el tanque de la gasolina&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El mec&aacute;nico que me atendi&oacute; me dijo que alguien hab&iacute;a aflojo los tornillos que sostienen el tanque, que no hab&iacute;a otra explicaci&oacute;n, sostuvo Cerna.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Con Santiago Cerna suman cinco los periodistas que sufren amenazas en la ciudad de San Pedro Sula. De todos los casos tienen conocimiento los organismos estatales de derechos humanos, El Ministerio P&uacute;blico y la Polic&iacute;a Nacional</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-04-30 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 20:19:00',
			),
			40 => 
			array (
				'id' => 67,
				'title' => 'Desconocidos disparan contra la vivienda de comunicador',
				'number' => '0041',
				'mes_id' => 4,
				'year' => 2012,
				'departamentos_id' => 5,
				'municipios_id' => 65,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">El comunicador y corresponsal de JBN Televisi&oacute;n, en el municipio de Omoa, departamento de Cort&eacute;s, Selvin Mart&iacute;nez de 34 a&ntilde;os de edad, conocido en el medio como &ldquo;El Halc&oacute;n&rdquo;, por su agilidad period&iacute;stica, sufri&oacute; el jueves anterior una intimidaci&oacute;n en su propia casa de habitaci&oacute;n.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Alrededor de las 5:30 de la tarde del d&iacute;a jueves 26 de abril, justamente cuando Mart&iacute;nez regresaba de un viaje de trabajo de la ciudad de San Pedro Sula, observ&oacute; como un grupo de individuos desconocidos disparaban, desde un carro color rojo tipo turismo, con direcci&oacute;n a su hogar.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Mart&iacute;nez cont&oacute; a C-Libre, que en el instante del suceso, &ldquo;mis dos hijos de cinco y tres a&ntilde;os estaban jugando en frente de mi casa y mi esposa que tiene 15 d&iacute;as de haber dado a luz los vigilaba&hellip; yo sent&iacute; que el mundo se me derrumbaba, me imagine lo peor&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Una vez que Mart&iacute;nez se asegur&oacute; que sus v&aacute;stagos y compa&ntilde;era de hogar estaban ilesos, llamo inmediatamente a los jefes de la Polic&iacute;a Nacional del municipio de Omoa, pero la respuesta de la autoridad que respondi&oacute; el tel&eacute;fono fue, &ldquo;estoy en una reuni&oacute;n y colg&oacute; bruscamente&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;A dos cuadras de mi casa hay una posta policial por lo que tambi&eacute;n marqu&eacute; el n&uacute;mero telef&oacute;nico, pero jam&aacute;s me contestaron, a&uacute;n sigo esperando a la polic&iacute;a y a los agentes de investigaci&oacute;n para que constaten la acci&oacute;n criminal en mi contra, imag&iacute;nese que yo recog&iacute; del patio frontal de mi casa 16 casquillos de bala&rdquo;, denunci&oacute; Mart&iacute;nez.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El comunicador record&oacute; que el &uacute;nico tema que le pudiese haber tra&iacute;do este tipo de represar&iacute;as ser&iacute;a la denuncia que trasmiti&oacute; de una humilde pobladora, quien evidenci&oacute; el mal accionar del alcalde municipal de Omoa, Ricardo Alvarado, al negarle una ayuda econ&oacute;mica.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Mart&iacute;nez, con nueve a&ntilde;os de ejercer el periodismo asegur&oacute; que jam&aacute;s hab&iacute;a experimentado este tipo de agresiones por su trabajo como reportero.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;La responsabilidad la tiene el Gobierno por el estado de impunidad que existe y por la negligencia de las autoridades competentes&hellip; a los periodistas por informar diariamente al pueblo nos quieren callar a puro plomo, pero a m&iacute; no me callaran con este tipo de intimidaci&oacute;n, mi gran preocupaci&oacute;n es mi familia pero a ellos se los encomiendo a Dios&rdquo;, finaliz&oacute; Mart&iacute;nez.</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-04-30 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 21:04:00',
			),
			41 => 
			array (
				'id' => 68,
				'title' => 'Director de noticiero con medidas cautelares continúa recibiendo amenazas a muerte',
				'number' => '0042',
				'mes_id' => 5,
				'year' => 2012,
				'departamentos_id' => 8,
				'municipios_id' => 110,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">El periodista Edgardo Castro, director del programa &ldquo;El L&aacute;tigo Contra la Corrupci&oacute;n&rdquo;, que se trasmite por la Cadena Globo Televisi&oacute;n, denunci&oacute; que durante la transmisi&oacute;n del primero de mayo recibi&oacute; amenazas a muerte a trav&eacute;s de 100 mensajes de texto enviados a su tel&eacute;fono celular.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;En mi trayectoria como comunicador he sufrido varias amenazas; durante el golpe de Estado me golpearon y ahora que trasmito mi programa por Globo TV, las amenazas son todos los d&iacute;as, expres&oacute; el periodista. En el transcurso de la transmisi&oacute;n que hice el Primero de Mayo recib&iacute; 800 mensajitos de los cuales 100 conten&iacute;an frases de amenazas contra mi vida&rdquo;. Asegur&oacute;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Los mensajes son precisos y lanzan amenazas como&hellip; sos perro, hijo de p&hellip;, sos un cerdo de Manuel Zelaya Rosales; defendes al delincuente de Enrique Flores Lanza&rdquo;, detall&oacute; Castro a <strong><em>conexi&oacute;n.info</em></strong>. De tales amenazas responsabiliza a los miembros de la oligarqu&iacute;a hondure&ntilde;a liderada por un grupo de trece familias.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El comunicador infiri&oacute; que los atropellos vienen de hijos de campesinos y de obreros que ahora sirven en los aparatos de seguridad, &ldquo;no son burgueses, una persona de apellido Kattan, Facuss&eacute;, Larach no se pone un uniforme para golpearte, ellos utilizan a la polic&iacute;a y al ej&eacute;rcito para matar, amedrentar, extorsionar y provocar inseguridad en este pa&iacute;s&rdquo;, asegur&oacute;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Al consultarle si ha tomado medidas al respecto, dijo que dada esta situaci&oacute;n tiene protecci&oacute;n de la Relator&iacute;a de los Derechos Humanos de la Organizaci&oacute;n de Naciones Unidas ONU y de la Organizaci&oacute;n de Estados Americanos, OEA.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Castro, agreg&oacute; que &ldquo;cuando la oligarqu&iacute;a siente que alguien le estorba, lo primero que hace es callar el pensamiento y eso se ve reflejado en los asesinatos en contra de periodistas y comunicadores&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Los que m&aacute;s estorbamos somos los periodistas que tenemos dignidad y conciencia, eso es lo que ha pasado y por eso han asesinado a varios colegas y otros sufrimos amenazas a muerte, tal es el caso del comunicador Manuel Santiago Cerna quien denunci&oacute; intimidaci&oacute;n en d&iacute;as recientes, por parte de sujetos desconocidos&rdquo;, ilustr&oacute;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Hoy su servidor es amenazado a muerte de forma permanente por la oligarqu&iacute;a con el fin de que calle la verdad y que salga corriendo del pa&iacute;s, pero eso no lo van a lograr nunca, expres&oacute;. &ldquo;Cuando un periodista es amenazado es porque est&aacute; haciendo un buen trabajo a favor del pueblo hondure&ntilde;o&rdquo;, afirm&oacute;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Para Castro, el abordaje de temas sociales como el hablar a favor del sector campesino, del salario m&iacute;nimo, de la defensa de los obreros y en contra de la inseguridad ciudadana, &ldquo;hace que la oligarqu&iacute;a del pa&iacute;s se moleste y nos &nbsp;amenace&rdquo;, concluy&oacute;.</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-05-07 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 21:09:00',
			),
			42 => 
			array (
				'id' => 69,
				'title' => 'Asesinan a periodista y defensor de los derechos humanos',
				'number' => '0043',
				'mes_id' => 5,
				'year' => 2012,
				'departamentos_id' => 8,
				'municipios_id' => 110,
				'body' => '<p style="text-align: justify;">
<span style="font-family: arial, helvetica, sans-serif; font-size: 16px;">El periodista Erick Mart&iacute;nez &Aacute;vila, de 32 a&ntilde;os de edad, oficial de Monitoreo, Evaluaci&oacute;n y Relaciones P&uacute;blicas de la agrupaci&oacute;n gay, l&eacute;sbico, bisexual y transexual -LGTBI- &nbsp;Kukulc&aacute;n&nbsp; y precandidato a diputado por la Mesa de la Diversidad Sexual del Frente Nacional de Resistencia &ndash;FNRP- para las elecciones internas del Partido Libertad y Refundaci&oacute;n &ndash;Libre-, fue encontrado sin vida el d&iacute;a 7 de mayo.</span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n autoridades policiales, el periodista ten&iacute;a un reporte de desaparecido desde el s&aacute;bado cinco del presente mes y no fue hasta en horas del medio del d&iacute;a 7 de mayo, que pobladores de la comunidad de Guasculile, avisaron de un cuerpo sin vida, tirado en una cuneta a orillas de la carretera que conduce de Tegucigalpa, la capital de Honduras, hacia el departamento de Olancho.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El hoy occiso anunci&oacute; hace tres semanas su postulaci&oacute;n a una candidatura para diputado por el departamento de Francisco Moraz&aacute;n, por el reci&eacute;n inscrito partido Libre, (brazo pol&iacute;tico del Frente Nacional de Resistencia Popular, surgido a partir del golpe de Estado del 2009), desde donde representar&iacute;a a la diversidad sexual del pa&iacute;s.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Hasta el momento se desconocen los m&oacute;viles del crimen, sin embargo datos preliminares de medicina forense aseguran&nbsp; que el cad&aacute;ver de Mart&iacute;nez no presentaba heridas por lo que se supone que pudo haber muerto por asfixia.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Periodistas pr&oacute;ximos a Mart&iacute;nez, aseguraron que pese a sus ocupaciones profesionales e ideol&oacute;gicas, nunca coment&oacute; temer por su integridad f&iacute;sica, por lo que este asesinato les resulta inexplicable e inesperado.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El profesional del periodismo tambi&eacute;n fue fundador del Movimiento de la Diversidad en Resistencia (MDR) y era militante del grupo pol&iacute;tico conocido como los Necios.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">La &uacute;ltima vez que Mart&iacute;nez fue visto p&uacute;blicamente, fue durante la manifestaci&oacute;n del D&iacute;a Internacional del Trabajo, el pasado primero de mayo, donde el periodista acompa&ntilde;o a la comunidad LGTBI.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Desde noviembre del 2003 a la fecha, C-libre mantiene en sus registros la muerte violenta de al menos 28 periodistas y comunicadores sociales.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Son entre otros: Germ&aacute;n Rivas, Carlos Salgado, Rafael Mungu&iacute;a, Osman Rodrigo L&oacute;pez, Bernardo Rivera Paz, Gabriel Fino Noriega, Nicol&aacute;s Asfura.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Se suman a la lista, Joseph Hern&aacute;ndez, David Meza, Nah&uacute;n Palacios, Bayardo Mairena, Manuel de Jes&uacute;s Ju&aacute;rez, George &ldquo;Georgino&rdquo; Orellana, Luis Arturo Mondrag&oacute;n, Israel D&iacute;az Zelaya, Henry Orlando Suazo, H&eacute;ctor Francisco Medina, Luis Mendoza, Luz Marina Paz, Saira Almendares y Fausto Flores Valle.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Erick Mart&iacute;nez, estudi&oacute; en la Escuela de Periodismo de la Universidad Nacional Aut&oacute;noma de Honduras (UNAH), donde goz&oacute; del respeto de sus maestros y compa&ntilde;eros por su compromiso con las causas de pa&iacute;s.</span></span></p>
<p>
&nbsp;</p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-05-07 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 21:11:00',
			),
			43 => 
			array (
				'id' => 70,
				'title' => 'Secuestran a coordinador de noticias de Radio HRN',
				'number' => '0044',
				'mes_id' => 5,
				'year' => 2012,
				'departamentos_id' => 8,
				'municipios_id' => 110,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">El periodista Alfredo Villatoro, coordinador de noticias de Radio HRN, con 21 a&ntilde;os de ejercicio profesional, fue secuestrado el d&iacute;a de hoy (9 de mayo de 2012), alrededor de las 4:30 de la madrugada en la colonia Tres Caminos de la ciudad capital de Honduras.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n las versiones difundidas por el portavoz de la Polic&iacute;a Nacional H&eacute;ctor Iv&aacute;n Mej&iacute;a, unos seis hombres que se transportaban en dos veh&iacute;culos, emboscaron al periodista y se lo llevaron contra su voluntad con rumbo desconocido.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">En una entrevista corta con C-Libre, Karla Fonseca, esposa de Villatoro, manifest&oacute; que se enter&oacute; de la desaparici&oacute;n de su esposo al recibir una llamada de Patricia Romero compa&ntilde;era de labores del comunicador. &ldquo;Despu&eacute;s de la llamada de Karla se me inform&oacute; que el carro de Alfredo estaba abandonado en las cercan&iacute;as de la farmacia Senrros&rdquo;, ubicada en la colonia Tres Caminos. Asimismo Fonseca, quien tambi&eacute;n es periodista, inform&oacute; que su c&oacute;nyuge no hab&iacute;a recibido amenazas de ninguna naturaleza.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Consultada al respecto, la periodista Patricia Romero, nos inform&oacute; que al saber que su colega estaba retrasado, decidi&oacute; comunicarse con &eacute;l v&iacute;a tel&eacute;fono celular, pero los intentos fueron en vano,&nbsp; raz&oacute;n por la que llam&oacute; a la casa de habitaci&oacute;n de Villatoro, donde la esposa le asegur&oacute; que hab&iacute;a salido con rumbo a su lugar de trabajo a la hora de costumbre.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Romero confirm&oacute; que su colega en ning&uacute;n momento coment&oacute; haber recibido amenazas; &ldquo;nunca denunci&oacute; amenaza alguna y en el transcurso de la semana nuestra agenda noticiosa estuvo dedicada a los temas habituales; tratamos la tem&aacute;tica de la distribuci&oacute;n justa y equitativa de tierras en nuestro pa&iacute;s, entre otros temas de la agenda medi&aacute;tica hondure&ntilde;a&rdquo;, coment&oacute; la comunicadora.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El secuestro del periodista, orill&oacute; a las autoridades competentes a realizar la &ldquo;Operaci&oacute;n Jaula&rdquo;, la que conllev&oacute; a la captura en el anillo perif&eacute;rico del ex agente de la polic&iacute;a Gerson Basilio Godoy C&oacute;rdova, separado de su cargo en el a&ntilde;o 2011 por las autoridades de la Secretar&iacute;a de Seguridad.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Al momento de su detenci&oacute;n el ex agente se trasladaba a bordo de una camioneta marca Toyota Runner, color gris, sin placas, en compa&ntilde;&iacute;a de Alpidio Fern&aacute;ndez (suegro) y Allan Padilla (cu&ntilde;ado), quienes fueron remitidos a la Direcci&oacute;n Nacional de Investigaci&oacute;n Criminal (DNIC), para su respectiva indagaci&oacute;n, por su supuesta participaci&oacute;n en el secuestro de Villatoro.</span></span></p>
<p>
&nbsp;</p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-05-09 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 21:28:00',
			),
			44 => 
			array (
				'id' => 71,
				'title' => 'Miembro de la policía nacional agrede verbalmente a comunicadores ',
				'number' => '0045',
				'mes_id' => 5,
				'year' => 2012,
				'departamentos_id' => 5,
				'municipios_id' => 63,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">&ldquo;Periodistas basuras&hellip; por eso los matan&rdquo;, fue el trato que el polic&iacute;a &Aacute;vila, les dio a unos 12 comunicadores sociales que intentaban darle cobertura al levantamiento de tres cad&aacute;veres encontrados en el municipio de Puerto Cort&eacute;s, departamento de Cort&eacute;s, en el norte de Honduras, el pasado viernes cinco de mayo.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n Mart&iacute;nez, &ldquo;como a eso de la 4:30 de la tarde se nos inform&oacute; de tres cad&aacute;veres por lo que inmediatamente me transporte al lugar de los hechos y pude observar como en la escena hab&iacute;an unos 12 periodistas&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Mart&iacute;nez, afirm&oacute; que el polic&iacute;a &Aacute;vila, al ver que los periodistas fotografiaban los cuerpos inertes, comenz&oacute; a insultarlos al punto de asegurar que debido a ese trabajo eran asesinados.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Ante tales agresiones, Mart&iacute;nez, procedi&oacute; a fotografiar y filmar al polic&iacute;a, qui&eacute;n respondi&oacute; de igual manera, &ldquo;me tom&oacute; varias fotograf&iacute;as y me desafiaba con su mirada, yo le puse la denuncia a sus superiores pero me dijeron que no le diera importancia porque &eacute;l era as&iacute;, agresivo y malcriado&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Selvin Mart&iacute;nez sufri&oacute; un atentado junto a su familia, cuando individuos le tirotearon su casa de habitaci&oacute;n el 26 de abril de 2012. Doce d&iacute;as despu&eacute;s del suceso un equipo de investigaci&oacute;n policial procedente de la ciudad capital lleg&oacute; a su casa de habitaci&oacute;n para hacer las indagaciones correspondientes, &ldquo;fueron 21 plomazos que contaron los investigadores&hellip;mi familia y yo somos muy afortunados&rdquo;, finaliz&oacute; Mart&iacute;nez.</span></span></p>
<p>
&nbsp;</p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-05-09 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 21:29:00',
			),
			45 => 
			array (
				'id' => 72,
				'title' => 'Ejecutado encuentran a periodista secuestrado hace siete días',
				'number' => '0046',
				'mes_id' => 5,
				'year' => 2012,
				'departamentos_id' => 8,
				'municipios_id' => 110,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">Ejecutado fue encontrado ayer (martes 15), en una colonia al sur de la capital hondure&ntilde;a, Alfredo Villatoro, periodista secuestrado hace siete d&iacute;as.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Una pareja residente en la colonia la Uvas, report&oacute; a la polic&iacute;a el hallazgo de un cad&aacute;ver a eso de las 8:00 de la noche. Al llegar al lugar de los hechos, periodistas, camar&oacute;grafos y polic&iacute;as que cubren la &ldquo;nota roja&rdquo;, constataron que la v&iacute;ctima era el coordinador de noticias de Radio HRN, secuestrado el nueve de mayo.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">En la escena del crimen, yac&iacute;a el cuerpo sin vida de Villatoro, vestido con un uniforme similar al que usa el escuadr&oacute;n policial &ldquo;Cobra&rdquo;, y con una venda color rojo en su rostro. Seg&uacute;n los datos de medicina forense, la v&iacute;ctima presentaba dos impactos de bala en el cr&aacute;neo as&iacute; como golpes en el rostro.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">La noticia del asesinato de Villatoro, se difundi&oacute; de manera inmediata a trav&eacute;s de los diferentes medios de comunicaci&oacute;n nacional, por lo que decenas de periodistas se aprestaron a la morgue capitalina en un acto de solidaridad para con su colega, al&nbsp; tiempo que repudian el suceso.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El clamor en el gremio period&iacute;stico fue generalizado al exigir justicia no solamente en el caso Villatoro, si que para cada uno de los cr&iacute;menes cometidos en contra de periodistas y los que contin&uacute;an en completa impunidad.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El d&iacute;a 16 de mayo a las 8:40 de la ma&ntilde;ana el Presidente Porfirio Lobo Sosa en conferencia de prensa desde Casa Presidencial, anunci&oacute; una recompensa de tres millones de lempiras para quien informe sobre los responsables del crimen del periodista Villatoro.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Ese mismo d&iacute;a trascendi&oacute; que uno de los sospechosos en el secuestro del periodista &Aacute;ngel Alfredo Villatoro fue capturado en la ciudad de Danl&iacute;, El Para&iacute;so, oriente de Honduras. Seg&uacute;n se inform&oacute; en Proceso Digital, este individuo fue detenido por suponerlo responsable del env&iacute;o de mensajes hacia la familia de Villatoro para entablar una negociaci&oacute;n sobre su liberaci&oacute;n.</span></span></p>
<div>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Desde el a&ntilde;o 2010, se ha reportado el asesinato de 21 periodistas de los cuales los &uacute;ltimos dos cr&iacute;menes ocurrieron en la ciudad capital del pa&iacute;s.&nbsp;</span></span></p>
</div>
<p>
&nbsp;</p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 2,
				'published_date' => '2012-05-16 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 21:30:00',
			),
			46 => 
			array (
				'id' => 73,
				'title' => 'Periodista denuncia intento de secuestro ',
				'number' => '0047',
				'mes_id' => 5,
				'year' => 2012,
				'departamentos_id' => 5,
				'municipios_id' => 68,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">En su declaraci&oacute;n a C-Libre, Dilcia Moreno expres&oacute; que como a eso de las 9:30 de la ma&ntilde;ana del 17 de mayo, cuando transitaba por la zona comercial de la ciudad de Omoa, un hombre de tez morena, de unos 24 a&ntilde;os de edad, se bajo de un veh&iacute;culo turismo color gris, con dos sujetos m&aacute;s en su interior, y mientras sosten&iacute;a un folder en sus manos se le acerc&oacute; y le pregunt&oacute; por la direcci&oacute;n de un ente bancario.</span></span></p>
<p a="" al="" asuste="" carro="" como="" conteste="" del="" disculpe="" donde="" en="" era="" ese="" esposa="" esposo="" instante="" la="" le="" lo="" luego="" me="" mi="" mientras="" muy="" ndote.="" no="" ntate="" ntate.="" p="" pidamente="" por="" pregunte="" preocupada="" que="" queda="" quien="" reloj.="" s="" sabia="" style="text-align: justify;" tenia="" tu="" una="" y="" yo="">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Por su parte Mart&iacute;nez, manifest&oacute; que al enterarse, en horas de la noche, &nbsp;de lo acontecido, lo notific&oacute; inmediatamente, mediante tel&eacute;fono celular, al jefe de la polic&iacute;a de la zona, Carlos Gonzales, quien le recomend&oacute; que interpusiera la denuncia a primeras horas del d&iacute;a siguiente.</span></span></p>
<p a="" autoridades.="" avances="" casa="" contundentes="" de="" denuncia="" e="" el="" esposa="" estar="" fecha="" han="" haya="" hoy="" integridad="" interpuse="" la="" las="" los="" me="" mi="" miedo="" miembros="" muy="" nez="" no="" notificado="" p="" para="" parte="" pienso="" poner="" por="" preocupa="" preocupado="" que="" respuestas="" salir="" si="" sobre="" style="text-align: justify;" su="" tengo="" tiroteo="" trabajar.="" vine="" y="">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Si la autoridad quiere pueden identificar f&aacute;cilmente a los agresores por medio de las c&aacute;maras de video que hay en la zona donde mi esposa fue acosada, todo es que exista una verdadera voluntad&rdquo;, se&ntilde;al&oacute; Mart&iacute;nez.</span></span></p>
<p a="" acciones="" al="" algo="" an="" asegurar="" casa="" claros="" con="" contra="" contundente="" cuando="" de="" directo="" el="" es="" esa="" esposa="" estas="" evidente="" familia="" fue="" gran="" hacia="" hoy="" la="" mensajes="" mi="" mis="" n="" no="" p="" que="" seres="" sino="" son="" style="text-align: justify;" su="" tirotearon="" trabajo="" una="" y="">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Mart&iacute;nez alias &ldquo;El Halc&oacute;n&rdquo;, sufri&oacute; un atentado el pasado 26 de abril en su casa de habitaci&oacute;n cuando sujetos desconocidos a bordo de un carro turismo color rojo, tirotearon su vivienda matando a su perro y dejando seg&uacute;n el reporte de la DGIC, 21 impactos de bala incrustados en las paredes de su hogar.</span></span></p>
<p 12="" 4="" a="" al="" anterior="" apellido="" cobertura="" comunicadores="" con="" cuando="" daban="" de="" el="" junto="" la="" lenguaje="" levantamiento="" lo="" los="" nez="" p="" parte="" periodistas="" por="" que="" quien="" se="" style="text-align: justify;" suma="" un="" unos="" zona="">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Ante esta nueva alerta, el Comit&eacute; por la Libre Expresi&oacute;n, demanda de la Secretaria de Justicia y Derechos Humanos (SJDH) y la Secretaria de Seguridad, garantizar la integridad f&iacute;sica de Selvin Mart&iacute;nez y de cada uno de los miembros de su familia.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&lt;p style=&quot;&amp;quot;text-align:&quot; justify;&quot;=&quot;&quot;&gt; De igual manera, se solicita, realizar de manera precisa y efectiva las investigaciones pertinentes que conlleven a la identificaci&oacute;n de los agresores de Zelvin Mart&iacute;nez y su familia. El comunicador es miembro de la Red de Alertas y Protecci&oacute;n a Periodistas y Comunicadores Sociales (RAPCOS), un organismo para promover el respeto, defensa y ejercicio de la libertad de expresi&oacute;n organizado en las regiones del pa&iacute;s, por el Comit&eacute; por la Libre Expresi&oacute;n (C-Libre).</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-05-18 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 21:31:00',
			),
			47 => 
			array (
				'id' => 74,
				'title' => 'Periodista denuncia amenazas ',
				'number' => '0048',
				'mes_id' => 5,
				'year' => 2012,
				'departamentos_id' => 1,
				'municipios_id' => 1,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">El periodista Antonio Cabrera responsable de los noticieros de la Radio Frescura 90.9 localizada en la ciudad de Tela, departamento de Atl&aacute;ntida, denunci&oacute; a C-Libre ser objeto de amenazas a muerte por parte de personas desconocidas.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Cabrera a&ntilde;adi&oacute; que las amenazas las recibe a trav&eacute;s de mensajes de texto enviados a su tel&eacute;fono celular, generalmente cuando est&aacute; trasmitiendo el noticiero matutino. &ldquo;Te quedan pocos d&iacute;as para que sigas hablando&rdquo;; vas a ser el antepen&uacute;ltimo periodista en cortarle la lengua&rdquo;, son algunos de los mensajes que recibe el comunicador.</span></span></p>
<div>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Al preguntarle sobre los temas que informa en su programa y que podr&iacute;an generar las amenazas, respondi&oacute; que uno de ellos es la tala ilegal del Parque Nacional Lancetilla por parte de las autoridades de la Escuela Nacional Forestal, Esnacifor.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;En reiteradas ocasiones he denunciando que nos van a dejar sin agua, si nadie para la deforestaci&oacute;n en &eacute;sta &aacute;rea de amortiguamiento&rdquo;, agreg&oacute; Cabrera.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Otro tema responde a las arbitrariedades que comete el gobierno local y el contubernio de algunos comunicadores al no dar a conocer lo que est&aacute; pasando, esto incluso molesta a la ciudadan&iacute;a quien reclama un manejo responsable de la informaci&oacute;n&rdquo;, asegur&oacute;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Le siguen los comentarios alrededor de los problemas por la mala calidad de los servicios del agua potable y la energ&iacute;a el&eacute;ctrica, lo mismo que el descubrimiento de un cementerio clandestino hecho sobre el cual tanto la polic&iacute;a como la Fiscal&iacute;a del Ministerio P&uacute;blico no han informado sobre la identidad de los cuerpos encontrados.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Este caso es tan delicado que el fiscal asignado, Carlos Eduardo Ramos, prefiri&oacute; abandonar el cargo dado que ten&iacute;a que brindar un informe; seguramente le tuvo miedo al crimen organizado que opera en la zona atl&aacute;ntica del pa&iacute;s&rdquo;, coment&oacute; Cabrera.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Tras expresar que esta denuncia es la primera vez que la hace p&uacute;blica, debido a que no conf&iacute;a en los operadores de justicia, nos inform&oacute; que implementa medidas de autoprotecci&oacute;n para proteger su vida y que pide a Dios para que cuide a su familia.</span></span></p>
</div>
<p>
&nbsp;</p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-05-28 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 21:32:00',
			),
			48 => 
			array (
				'id' => 75,
				'title' => 'Coronel retirado afirma que a los periodistas en Honduras los matan por bocones',
				'number' => '0049',
				'mes_id' => 5,
				'year' => 2012,
				'departamentos_id' => 8,
				'municipios_id' => 110,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">Durante la transmisi&oacute;n del noticiario matutito del 28 de mayo, el director de noticias de Radio Globo, David Romero, devel&oacute;, que una fuente de su entera confianza, le inform&oacute; que el Coronel retirado Guillermo Pin&eacute;l C&aacute;lix, expres&oacute; que si al periodista Alfredo Villatoro lo hab&iacute;an matado por boc&oacute;n, que no les podr&iacute;a pasar al periodistas Esdras Amado L&oacute;pez propietario de Canal 36,&nbsp; y a David Romero Elner, de Radio Globo.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">De acuerdo a Romero tales afirmaciones las realiz&oacute; el ex Jefe de Inteligencia Militar de las Fuerzas Armadas y actual Director de Informaci&oacute;n Estrat&eacute;gica de la Empresa Hondure&ntilde;a de Telecomunicaciones (HONDUTEL), en una reuni&oacute;n de an&aacute;lisis de la realidad nacional entre empleados de confianza de la instituci&oacute;n.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El periodista reiter&oacute; que no es la primera vez que recibe amenazas de manera directa o indirecta, pero su preocupaci&oacute;n en esta ocasi&oacute;n se debe a que &quot;no se trata de un hombre improvisado de la calle; Pinel estuvo vinculado al tr&aacute;fico de armas con Mario del Amico, en la d&eacute;cada de 1980 y tambi&eacute;n se relacion&oacute; con los escuadrones de la muerte en esa d&eacute;cada&rdquo; record&oacute;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Tomo muy en serio esta amenaza porque viene de un hombre que conoce perfectamente el paramilitarismo, a los escuadrones de la muerte y que fue jefe de inteligencia &nbsp;de las Fuerzas Armadas de Honduras y su historial, en el marco del golpe de Estado, se puede leer en la Internet&rdquo;, asegur&oacute;, Romero.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El comunicador responsabiliz&oacute; al exmilitar de cualquier incidente que le ocurra. De igual manera el periodista exhort&oacute; a la Fiscal&iacute;a Contra el Crimen Organizado a investigar las aseveraciones de Pinel en cuanto a la muerte de Alfredo Villatoro, &ldquo;Este hombre sabe que a Villatoro lo mataron por boc&oacute;n, tambi&eacute;n es un hombre que sabe torturar y desaparecer porque esa es su formaci&oacute;n&rdquo; dijo en tono molesto Romero.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seguidamente expres&oacute; que el Coronel sab&iacute;a lo que le pas&oacute; a Alfredo Villatoro y por tal motivo dej&oacute; constancia de que si algo le sucede a &eacute;l y/o a su familia, el Coronel retirado &ldquo;ser&aacute; el responsable&rdquo; y no le queda la menor duda, &ldquo;que puede cumplir sus amenazas&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">De igual manera el periodista Esdras Amado L&oacute;pez, gerente propietario de Cholusat Sur y Radio La Catracha,&nbsp; v&iacute;a telef&oacute;nica con el noticiario, manifest&oacute; su preocupaci&oacute;n por lo ocurrido y refiri&eacute;ndose al exmilitar expres&oacute;: &ldquo;Sabemos de su papel en el golpe de Estado, sabemos que estuvo cerca de Micheletti y pr&aacute;cticamente estas afirmaciones nos coloca en una lista y nos puede pasar lo mismo que a Alfredo Villatoro&rdquo;, dijo L&oacute;pez.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Por su parte el Coronel retirado Guillermo Pinel, al &nbsp;comunicarse telef&oacute;nicamente con el programa de noticias expres&oacute; que alguien hab&iacute;a tergiversado sus comentarios e informaciones.</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-05-28 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 21:34:00',
			),
			49 => 
			array (
				'id' => 76,
				'title' => 'Un total de ocho detenidos por el secuestro y asesinato del periodista Villatoro',
				'number' => '0050',
				'mes_id' => 5,
				'year' => 2012,
				'departamentos_id' => 8,
				'municipios_id' => 110,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">La Direcci&oacute;n Nacional de Servicios Especiales de Investigaci&oacute;n, (DNSEI), ha capturado en menos de dos semanas a ocho sospechosos en el asesinato del periodista &Aacute;ngel Villatoro, Director de noticias de la radio HRN, secuestrado el 9 de mayo y ultimado el martes 15 del mismo mes.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Los primeros en ser requeridos y trasladados v&iacute;a helic&oacute;ptero y bajo fuertes medidas de seguridad fueron los privados de libertad Juan Ram&oacute;n Fonseca (25) y Miguel &Aacute;ngel &Aacute;lvarez (34), recluidos en el centro penal de la ciudad de Danli, departamento de El Para&iacute;so.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n la Polic&iacute;a Nacional a Juan Ram&oacute;n Fonseca se le acusa como el encargado de negociar el rescate con los familiares de Villatoro Rivera.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">D&iacute;as despu&eacute;s la Fiscal&iacute;a contra el Crimen Organizado acus&oacute; por el delito de secuestro agravado, por la privaci&oacute;n de libertad de Villatoro seguida del asesinato a las hermanas Jesica Yamileth Zambrano Ortiz y Katlin Zambrano Ortiz junto con su primo Marvin Enrique Oliva, residentes en la ciudad capital del pa&iacute;s.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Sin embargo, en la audiencia inicial el juez resolvi&oacute; dictar el auto de prisi&oacute;n contra los tres acusados por el delito de secuestro, en su grado de complicidad agravada.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Recientemente la Polic&iacute;a Nacional captur&oacute; en la aldea El Cacao en el sector de Cofrad&iacute;a, departamento de Cort&eacute;s, en un amplio operativo, a Marvin Alonso G&oacute;mez, Osman Fernando Osorio Arguijo y Edgar Francisco Osorio Arguijo.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Estos &uacute;ltimos tres supuestos implicados en el secuestro y asesinato de Alfredo Villatoro, fueron presentados a audiencia de declaraci&oacute;n de imputado por los delitos de asociaci&oacute;n il&iacute;cita y tenencia ilegal de armas.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Cabe destacar que al momento del operativo y cuando la polic&iacute;a ten&iacute;a cercada la vivienda en la cual se encontraban los supuestos malhechores, estos &uacute;ltimos solicitaron a la polic&iacute;a la presencia de los medios de comunicaci&oacute;n y uno de ellos exigi&oacute; se llamara al periodista de Canal 6, Edy Andino, quien sirvi&oacute; de negociador entre ambas partes.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Edy Andino reportero de la fuente policial y uno de los presentadores del noticiero Notise<strong>i</strong>s Nocturno de canal 6, fue tiroteado por desconocidos la noche del viernes 28 de octubre mientras se conduc&iacute;a en su veh&iacute;culo tipo camioneta marca Toyota Runner color gris, matr&iacute;cula PAA8397.&nbsp;</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-05-28 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 21:35:00',
			),
			50 => 
			array (
				'id' => 77,
				'title' => 'Periodista pide a juez orden de captura en contra de Padre que lo agredió',
				'number' => '0051',
				'mes_id' => 6,
				'year' => 2012,
				'departamentos_id' => 8,
				'municipios_id' => 110,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">Abogados acusadores presentaron un escrito ante el Ministerio Publico (MP), para que se declare en rebeld&iacute;a por desobediencia fiscal al Canciller de la iglesia cat&oacute;lica hondure&ntilde;a, Carlos Magno N&uacute;&ntilde;ez, quien no se ha presentado a las dos &uacute;ltimas citaciones del juicio oral y p&uacute;blico en su contra por los cargos de violenta agresi&oacute;n en contra del periodista Luis Ortiz de canal 36.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Ortiz, denuncio a C-Libre que el caso se ha desarrollado de manera at&iacute;pica por parte de la justicia hondure&ntilde;a, &ldquo;existe un delito pues de manera mal intencionada el se&ntilde;or Carlos Magno N&uacute;&ntilde;ez, esta alargando el proceso&hellip;no hay justificaci&oacute;n para que Magno N&uacute;&ntilde;ez no sea sometido a juicio oral y p&uacute;blico&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n Ortiz, si la juez en resoluci&oacute;n no solicita una orden de captura para Carlos Magno, el caso ser&aacute; remitido a la reci&eacute;n nombrada Comisi&oacute;n de Reforma a la Seguridad Publica, &oacute;rgano que se encargar&aacute; de eficientar e impulsar la depuraci&oacute;n del sistema de seguridad y justicia en Honduras.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><strong>Antecedentes</strong></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Luis Ortiz, fue agredido, 14 de febrero, por el padre Carlos Magno, mientras intentaba entrevistarlo por la separaci&oacute;n de la iglesia cat&oacute;lica del sacerdote Roberto Paiz, ex director del Instituto Cat&oacute;lico San Miguel.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">En una primera audiencia inicial, la Juez de Paz, Carmen Canales Canales, restringi&oacute; el ingreso del periodista Luis Ortiz a su propia audiencia, celebrada el viernes 2 de marzo, en la casa de habitaci&oacute;n del sacerdote. Debido a que la parte acusadora no estaba presente la audiencia se declaro nula.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Mediante una notificaci&oacute;n la Juez Canales Canales, comunico al cuerpo de abogados del periodista Ortiz, que dada la embestidura eclesi&aacute;stica del Canciller de la Iglesia Cat&oacute;lica Carlos Magno, el Juzgado de Paz de lo Criminal de la Capital de Honduras remitir&aacute; el caso a la Corte Suprema de Justicia (CSJ), para que sea este organismo el que dirima la querella entablada al cura por el periodista Luis Ortiz.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Posteriormente la CSJ, estipulo que el Padre no ostentaba un cargo de funcionario p&uacute;blico ya que el mismo no recibe un salario por parte del Estado de Honduras.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El d&iacute;a 25 de mayo, en audiencia inicial, la parte acusada (Padre Carlos Magno), no se hizo presente y seg&uacute;n el periodista Luis Ortiz, la juez le comunic&oacute; que la cita no pudo ser entregada al eclesi&aacute;stico debido a que el mismo se encontraba fuera del pa&iacute;s.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El 7 de junio de nuevo la historia se repiti&oacute; al no hacerse presente el canciller Carlos Magno y seg&uacute;n el argumento de la Juez nuevamente fue imposible entregar la cita al acusado.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n los abogados del periodista Luis Ortiz, Marco Zelaya y Manuel Rodr&iacute;guez, el nuevo c&oacute;digo procesal Penal estipula que las citaciones se pueden realizar v&iacute;a correo electr&oacute;nico y/o telef&oacute;nicamente tal cual lo hicieron con su apoderado a quien a trav&eacute;s de una llamada a su celular se le notifico la audiencia del viernes 2 de mayo.</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-06-09 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 21:46:00',
			),
			51 => 
			array (
				'id' => 78,
				'title' => 'Autocensura en el pulpito: reflejo de la violación a la libertad de expresión',
				'number' => '0052',
				'mes_id' => 6,
				'year' => 2012,
				'departamentos_id' => 5,
				'municipios_id' => 63,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">El m&aacute;ximo l&iacute;der de la iglesia Menonita Central de Honduras, con sede en la ciudad de San Pedro Sula departamento de Cortes, Adalid Romero, denunci&oacute; que la libertad de expresi&oacute;n en el pa&iacute;s est&aacute; en riesgo, al punto extremo de existir autocensura en los p&uacute;lpitos y por eso algunos l&iacute;deres religiosos construyen un discurso plagado de escapismo, espiritualismo y reduccionismo.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">A juicio del pastor, &ldquo;esta situaci&oacute;n afecta a la libertad de expresi&oacute;n porque al asesinar a periodistas, abogados, obreros, campesinos y hasta pastores, infunden miedo en la poblaci&oacute;n al extremo de sentirnos acobardados. Se trata de una gran embestida contra libertad de expresi&oacute;n, asegur&oacute; el l&iacute;der espiritual.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Yo siento mucha libertad al hablar desde el p&uacute;lpito, pero a veces recibo comentarios de parte de algunos feligreses que se acercan para tratar de decirme que no hable de aquellos asuntos que tocan el poder que oprime el pa&iacute;s&rdquo;, expres&oacute; Romero.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Por eso muchos pastores predican un evangelio que se resume a como ser, no beber, no fumar, etc. Condenan al borracho y al fumador y se olvidan de las productoras de licor y tabaco, aducen que la bendici&oacute;n va a venir hasta que nos muramos&rdquo;, cuestion&oacute;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Otros l&iacute;deres le hacen el juego al neoliberalismo y tienen dentro de los predios de la iglesia, la escuela, el colegio y la librer&iacute;a, por eso no es extra&ntilde;o que algunos desentendieron el golpe de Estado perpetrado en contra del expresidente Jos&eacute; Manuel Zelaya Rosales en junio de 2009&rdquo;, record&oacute;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n el Pastor, la ola de criminalidad e impunidad que azota a Honduras nos hace pensar que &eacute;sta naci&oacute;n vive su propio apocalipsis, &ldquo;la situaci&oacute;n que atraviesa el pa&iacute;s hace recordar los tiempos an&aacute;rquicos que vivi&oacute; el pueblo Jud&iacute;o en la &eacute;poca de los jueces, en ese contexto cada quien hac&iacute;a lo que se le antojaba eran comunes los actos de violencia, de injusticia y perversidad&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Era tanta la brutalidad que hubo un rey amonita identificado como Naj&aacute;s, que amenaz&oacute; con arrancarles a cada uno el ojo derecho, e infligir as&iacute; un oprobio a todo Israel sino se rend&iacute;an, sin embargo en medio de esas circunstancias se levantaron libertadores de la talla de Sans&oacute;n, Sa&uacute;l, Jeft&eacute; y Gede&oacute;n, ilustr&oacute; el pastor.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">En ese sentido yo puedo ver que a pesar de la turbulencia, en Honduras hay lideresas y l&iacute;deres que pueden tomar este mismo ejemplo, solo es cuesti&oacute;n de perder el miedo, superar el acorralamiento y la toma de conciencia para que no sigamos en esta situaci&oacute;n.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Al consultarle por qu&eacute; el pa&iacute;s sufre la situaci&oacute;n de violencia, respondi&oacute; que es como consecuencia de la injusticia acumulada durante siglos y el modelo econ&oacute;mico impuesto el cual no responde a las necesidades del pueblo. El modelo fall&oacute; porque la acumulaci&oacute;n de medios de producci&oacute;n en pocas manos y la injusta distribuci&oacute;n de la riqueza son factores que inciden en la multiplicaci&oacute;n de la pobreza y la grave problem&aacute;tica de la naci&oacute;n&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">En sus palabras finales el pastor afirm&oacute; que &ldquo;el pueblo ya no aguanta, y se va a tener que revelar y lo peor ser&iacute;a que lo haga con las armas. La gente se cansa de que la maten y la desaparezcan&rdquo;, finaliz&oacute;.</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-06-12 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 21:48:00',
			),
			52 => 
			array (
				'id' => 79,
				'title' => 'Hombre filma a periodistas mientras  cubrían operativo de desalojo a campesinos',
				'number' => '0053',
				'mes_id' => 6,
				'year' => 2012,
				'departamentos_id' => 5,
				'municipios_id' => 63,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">Durante un operativo de desalojo a campesinos, por parte de la Polic&iacute;a y el Ej&eacute;rcito, ocurrido el 12 de junio, un presunto empleado de la Compa&ntilde;&iacute;a Azucarera Hondure&ntilde;a Sociedad An&oacute;nima (CAHSA), film&oacute; y fotograf&iacute;o en repetidas ocasiones a tres periodistas que daban cobertura al suceso.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Leonardo Aguilar y Gerardo Chevez de Radio Progreso as&iacute; como Bartolo Fuentes del peri&oacute;dico digital &ldquo;Vida Laboral&rdquo;, denunciaron que cuando se encontraban realizando su labor period&iacute;stica, observaron como un hombre de contextura robusta, quien portaba una c&aacute;mara de v&iacute;deo y una fotogr&aacute;fica, capt&oacute; im&aacute;genes de ellos en repetidas ocasiones.&nbsp;</span></span></p>
<div>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Al ver la inusual acci&oacute;n por parte del desconocido, quien vest&iacute;a ropa de civil, el periodista Bartolo Fuentes, le cuestion&oacute; el porqu&eacute;&nbsp; les fotografiaba, pero la respuesta fue escudarse tras el cerco de militares y polic&iacute;as, para posteriormente escabullirse de la escena.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Gerardo Chevez, inform&oacute; a C-Libre, que este hombre ha sido visto en los tres operativos de desalojo que se han realizado en la zona, raz&oacute;n por la que presume que es un ejecutivo de la compa&ntilde;&iacute;a azucarera due&ntilde;a de los terrenos que han sido ocupados por el Movimiento Campesino de San Manuel (MOCSAM).</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Chevez inform&oacute; que cuando concluy&oacute; su labor reporteril durante el segundo desalojo llevado a cabo el 19 de mayo, dos sujetos desconocidos le dieron seguimiento. &ldquo;Yo me transportaba en mi motocicleta, con rumbo a la Radio, cuando me percate que dos hombres que se conduc&iacute;an en otra motocicleta me hicieron se&ntilde;al de parada, pero mi reacci&oacute;n fue acelerar. Ellos me siguieron unos dos kil&oacute;metros y luego se desviaron.&rdquo;, record&oacute;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Cabe se&ntilde;alar que mediante decreto legislativo nro. 240-2011, se prohibi&oacute; que dos hombres se transportaran en motocicleta debido a que una alta tasa de asesinatos &nbsp;&nbsp;cometidos en el pa&iacute;s se produjo por sicarios que se conduc&iacute;an en este tipo de veh&iacute;culo. &nbsp; &nbsp;&nbsp;</span></span></p>
</div>
<p>
&nbsp;</p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-06-13 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 21:50:00',
			),
			53 => 
			array (
				'id' => 80,
				'title' => 'Dentro de 60 días dictarían sentencia en contra de policía que agredió a camarógrafo',
				'number' => '0054',
				'mes_id' => 6,
				'year' => 2012,
				'departamentos_id' => 5,
				'municipios_id' => 63,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">Seg&uacute;n Elvis Enrique Guzm&aacute;n vocero del Ministerio Publico, la Fiscal&iacute;a de Derechos Humanos tiene un plazo de 60 d&iacute;as para presentar las pruebas y lograr una sentencia definitiva en contra del polic&iacute;a Hortensio Lindolfo L&oacute;pez Silva a quien el&nbsp; jueves anterior se le dict&oacute; auto de prisi&oacute;n con medidas sustitutivas por el delito de tortura en perjuicio de Uriel Gudiel Rodr&iacute;guez, ex camar&oacute;grafo de Globo TV.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El juez Alberto Canales titular del Juzgado Unificado de Letras de lo Penal determin&oacute; dictar auto de prisi&oacute;n en contra del polic&iacute;a Hortensio Lindolfo L&oacute;pez Silva, tras ser identificado como uno de los integrantes del&nbsp; contingente policial que&nbsp; atac&oacute; a golpes al camar&oacute;grafo, mientras cubr&iacute;a las&nbsp; protestas que se realizaban en contra del evento &quot;Honduras Abierta a los Negocios&quot;, el seis de mayo de 2011.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n el vocero de la Fiscal&iacute;a, Elvis Enrique Guzm&aacute;n el auto de prisi&oacute;n obliga al polic&iacute;a a no comunicarse con la v&iacute;ctima, ni emigrar del pa&iacute;s. Asimismo deber&aacute;&nbsp; acudir en forma programada al juzgado en menci&oacute;n para firmar el libro de control en tanto sigue el proceso judicial.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Al momento de la audiencia inicial el comunicador se hizo acompa&ntilde;ar&nbsp; de la fiscal especial de Derechos Humanos, Carlota Lagos y la periodista Tomy Morales, esta &uacute;ltima en calidad de testigo, en vista que el d&iacute;a de la golpiza tambi&eacute;n se encontraba en las afueras de la Universidad Nacional Aut&oacute;noma de Honduras - Valle de Sula, donde alumnos de este centro educativo manten&iacute;an una toma pac&iacute;fica en protesta del encuentro empresarial.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Al dialogar con&nbsp; C-Libre el camar&oacute;grafo dijo que lo &uacute;nico que espera es que se haga justicia en contra de sus agresores, &ldquo;es lo menos que espero&rdquo;, dijo con tono de esperanza, sin dejar de pensar en aquel fat&iacute;dico d&iacute;a, en que fue rescatado por varias personas del poder de sus captores mientras lo garroteaban.</span></span></p>
<p>
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Al preguntarle si teme por las represalias que puedan urdirse en su contra por llevar adelante esta demanda, Uriel respondi&oacute; que no, y enfatiz&oacute; que desde ya responsabiliza a los aparatos de seguridad del Estado de cualquier atentado en su contra.</span></span></p>
<p>
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Uriel expres&oacute; que aun siente los efectos de la golpiza propinada por los polic&iacute;as, &ldquo;me duele la cabeza&rdquo; y eso es una situaci&oacute;n por la que el Estado de Honduras deber&aacute; responder, afirm&oacute;. &nbsp;</span></span></p>
<p>
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Por su lado la periodista Tomy Morales, dijo que ella al entrevistarse con las autoridades del juzgado y del Ministerio P&uacute;blico, se limit&oacute; a se&ntilde;alar en detalle c&oacute;mo se dieron los hechos en el que su compa&ntilde;ero result&oacute; con lesiones de consideraci&oacute;n en el momento en que daba cobertura period&iacute;stica.</span></span></p>
<p>
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Morales hizo memoria de como se desarrollaron los hechos. Vimos a Gudiel filmar en la entrada de la UNAH-VS, luego ser cercado por&nbsp; unos quince&nbsp; polic&iacute;as quienes lo despojaron de su&nbsp; c&aacute;mara y&nbsp; el chaleco que lo identificaba como camar&oacute;grafo, hasta dejarlo herido de gravedad en medio de una nube de gas lacrim&oacute;geno.</span></span></p>
<p>
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">En aquella fecha el diagn&oacute;stico m&eacute;dico determin&oacute; que el camar&oacute;grafo presentaba dos heridas en el cr&aacute;neo y golpes en el t&oacute;rax, como consecuencia de la violenta agresi&oacute;n.&nbsp;</span></span></p>
<p>
&nbsp;</p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-06-19 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 21:53:00',
			),
			54 => 
			array (
				'id' => 81,
				'title' => 'Agentes policiales detienen  y secuestran a camarógrafo ',
				'number' => '0055',
				'mes_id' => 6,
				'year' => 2012,
				'departamentos_id' => 8,
				'municipios_id' => 110,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">Mientras filmaba el hallazgo de un cuerpo dentro de una caja de cart&oacute;n, en el barrio Lempira de Comayag&uuml;ela, el camar&oacute;grafo Edwin Murillo del canal de televisi&oacute;n Hable como Habla fue detenido y secuestrado durante dos horas y media por elementos de la Polic&iacute;a Nacional.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El d&iacute;a 27 de junio a las 5:30 de la tarde, el camar&oacute;grafo Murillo junto a la periodista Alejandra V&aacute;squez llegaron a la escena del crimen y mientras realizaba su labor period&iacute;stica, Murillo fue agredido por polic&iacute;as y subido con las manos esposadas en contra de su voluntad a la patrulla M1-08 y llevado con rumbo desconocido.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Ante tal hecho y la b&uacute;squeda infructuosa del comunicador en varias postas policiales, el periodista Eduardo Maldonado director y propietario de Hable como Hable, hizo un llamado al titular de la Polic&iacute;a Nacional, a trav&eacute;s de las redes sociales y el canal televisivo, para demandar el respeto a la integridad f&iacute;sica del joven.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Por su parte el coordinador de noticias de Hable como Habla, el periodista Pablo Matamoros inform&oacute; a C-Libre que Murillo apareci&oacute; dos horas y media despu&eacute;s de ser capturado y que los polic&iacute;as de la patrulla M1-08, &ldquo;lo anduvieron de un lado para otro, en barrios y colonia de la ciudad capital, y jam&aacute;s lo llevaron a ninguna posta policial&rdquo;, en un acto intimidatorio y violatorio a la libertad de expresi&oacute;n.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Matamoros denunci&oacute; que el camar&oacute;grafo Murillo fue v&iacute;ctima de golpes durante los primeros minutos de la detenci&oacute;n y que le expresaron que &ldquo;por la prensa&rdquo; la polic&iacute;a &nbsp;estaba en una situaci&oacute;n delicada.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Hasta el momento la polic&iacute;a Nacional no nos ha informado sobre el incidente con nuestro compa&ntilde;ero Murillo quien &uacute;nicamente realizaba su trabajo de manera efectiva y profesional&rdquo;, finaliz&oacute; Matamoros.</span></span></p>
<p>
&nbsp;</p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-06-28 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 21:54:00',
			),
			55 => 
			array (
				'id' => 82,
				'title' => 'Radios comunitarias condenan atentado contra dos comunicadores indígenas',
				'number' => '0056',
				'mes_id' => 6,
				'year' => 2012,
				'departamentos_id' => 16,
				'municipios_id' => 246,
				'body' => '<p style="text-align: justify;">
<span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><span style="text-align: justify;">La Red de Radios Comunitarias de Honduras mediante comunicado p&uacute;blico emitido el 20 de junio, conden&oacute; en&eacute;rgicamente el atentando en contra de Juan V&aacute;squez y Sotero Chavarr&iacute;a, comunicadores sociales de las radios del Consejo de Organizaciones Populares e Ind&iacute;genas de Honduras (COPINH).</span></span></span></p>
<p style="text-align: justify;">
<span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">Seg&uacute;n el documento el pasado 13 de junio en horas de la noche, despu&eacute;s de finalizar una reuni&oacute;n en una comunidad ind&iacute;gena de Santa B&aacute;rbara, ambos comunicadores fueron atacados por dos individuos quienes desde una motocicleta les dispararon por en dos ocasiones provoc&aacute;ndoles un accidente automovil&iacute;stico.</span></span></p>
<p style="text-align: justify;">
<span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">La agresi&oacute;n es catalogada por la Red de Radios Comunitarias de Honduras como &ldquo;un atentando criminal&rdquo;, en contra de los comunicadores y dirigentes del COPINH, por lo que hacen un llamado de apoyo a la comunidad internacional para que gestione el cumplimiento por parte del Estado hondure&ntilde;o de garantizarles la vida, as&iacute; como el derecho a conocer la verdad y acceder a la justicia.</span></span></p>
<p style="text-align: justify;">
<span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">Las Radios Comunitarias de Honduras, as&iacute; como sus comunicadores sociales, desde hace mucho tiempo son objeto de amenazas, intimidaci&oacute;n y agresi&oacute;n, por lo que exigen a las autoridades nacionales la investigaci&oacute;n de todas las violaciones a libertad de expresi&oacute;n y al derecho a la vida, particularmente el asesinato de 24 comunicadores, incluido el de su compa&ntilde;ero Nery Gerem&iacute;as Orellana de Radio Joconguera, asesinado el pasado 14 de julio de 2011.</span></span></p>
<p style="text-align: justify;">
<span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">Finalmente la Red de Radios Comunitarias de Honduras, ratific&oacute; que a pesar de las amenazas y agresiones por parte del sistema opresor, continuar&aacute;n denunciando las injusticias y construyendo una comunicaci&oacute;n alternativa y democr&aacute;tica, que responda a las necesidades de sus comunidades.</span></span></p>
<p>
&nbsp;</p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-06-20 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 21:56:00',
			),
			56 => 
			array (
				'id' => 83,
				'title' => 'Policía responsable de agresión a periodistas presenta propuesta para evitar juicio oral',
				'number' => '0057',
				'mes_id' => 6,
				'year' => 2012,
				'departamentos_id' => 8,
				'municipios_id' => 110,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">El polic&iacute;a Jhonny Alexander Carrasco Espinoza imputado por el delito de abuso de Autoridad, en contra de la periodista Sandra Maribel Sanchez el 21 de marzo del 2011, present&oacute; el d&iacute;a de ayer 27 de junio, ante el Juez conciliador del Juzgado de Letras Penal de Tegucigalpa, una propuesta para evitar llegar al juicio oral y p&uacute;blico.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">La propuesta, hecha a trav&eacute;s de su apoderado legal, consiste en hacer trabajo comunitario por unos seis meses en una escuela, en una iglesia o en cualquier otra instituci&oacute;n.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Por su parte la periodista Sandra Maribel S&aacute;nchez declar&oacute; a conexi&oacute;n.info que la&nbsp; &ldquo;intimidaci&oacute;n a la prensa en esas circunstancias tiene implicaciones m&aacute;s graves que el simple hecho de que le lancen una bomba lacrim&oacute;gena o que le den un insulto; porque impide que uno con plena libertad pueda informar de los hechos que est&aacute;n ocurriendo&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Por tal raz&oacute;n dijo la afectada &ldquo;mi demanda exige que la Polic&iacute;a como instituci&oacute;n, siendo que la represi&oacute;n a la prensa es parte de una pol&iacute;tica institucional, a trav&eacute;s del director general nos pida una disculpa, a Uriel Rodr&iacute;guez y a m&iacute;,&nbsp; en conferencia de prensa&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Asimismo, que se obligue al imputado a recibir un curso intensivo de derechos humanos con &eacute;nfasis en libertad de expresi&oacute;n, un curso de relaciones humanas y el conocimiento pleno de la Ley Org&aacute;nica de la Polic&iacute;a y de la Ley de Convivencia Ciudadana&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Tambi&eacute;n solicita que este ente policial le reponga la c&aacute;mara que se da&ntilde;&oacute; en el forcejeo.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El 21 de marzo de 2011, Sandra Maribel S&aacute;nchez entonces Directora de Radio Gualcho, y el camar&oacute;grafo de Globo TV, Uriel Rodr&iacute;guez, tomaron fotograf&iacute;as y video de las acciones &nbsp;&nbsp;fuerte represi&oacute;n en contra del magisterio, (mediante el lanzamiento de muchas bombas lacrim&oacute;gemas ), elementos de la Polic&iacute;a Nacional al verse evidenciados da&ntilde;aron el equipo period&iacute;stico de ambos comunicadores.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El Juez conciliador&nbsp; fij&oacute; audiencia para el pr&oacute;ximo 20 de julio. &ldquo;Ese d&iacute;a vamos a saber si se acept&oacute; la conciliaci&oacute;n y si yo acepto los t&eacute;rminos, o vamos a juicio oral&rdquo;, dijo S&aacute;nchez.</span></span></p>
<p>
&nbsp;</p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-06-28 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 21:57:00',
			),
			57 => 
			array (
				'id' => 84,
				'title' => 'Compañía de cable trasnacional se rehúsa a incorporar televisora local ',
				'number' => '0058',
				'mes_id' => 6,
				'year' => 2012,
				'departamentos_id' => 6,
				'municipios_id' => 75,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">La compa&ntilde;&iacute;a de cable Milicon perteneciente a la transnacional Tigo, ubicada en el departamento de Choluteca al sur del pa&iacute;s, se reh&uacute;sa a levantar la se&ntilde;al de la televisora &ldquo;Libertad Tv-Canal 21&rdquo;, propiedad del periodista Ariel D`Vicente.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n el comunicador despu&eacute;s de dos meses de haber salido la se&ntilde;al de la televisora, la compa&ntilde;&iacute;a de cable Milicon se niega a colocar la se&ntilde;al, en una flagrante y abierta &nbsp;violaci&oacute;n a los derechos de libertad de expresi&oacute;n y prensa garantizados en la legislaci&oacute;n hondure&ntilde;a as&iacute; como en convenios internacionales sobre derechos humanos.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&nbsp;&ldquo;Ya han pasado m&aacute;s de 60 d&iacute;as de estar operando y a&uacute;n no nos han resuelto satisfactoriamente nuestra petici&oacute;n, violent&aacute;ndome con esto mis derechos como periodista y empresario&rdquo;, dijo el afectado.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">De acuerdo con el periodista la raz&oacute;n de esta represalia es producto de las denuncias que ha realizado, desde su medio de comunicaci&oacute;n, en relaci&oacute;n a los abusos que Tigo y Milicon cometen contra sus clientes.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Nuestro corresponsal para la zona sur del pa&iacute;s, ha intentado en varias ocasiones abordar al&nbsp; se&ntilde;or Reynaldo Corea gerente de Milicon, pero los intentos de entrevistarlo han fracasado con el argument&oacute; que el se&ntilde;or se encuentra fuera del pa&iacute;s o no est&aacute; en su oficinas.</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-06-28 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 21:58:00',
			),
			58 => 
			array (
				'id' => 85,
				'title' => 'Comunicador responsabiliza a compañías mineras y alcalde por cualquier atentado a su vida',
				'number' => '0059',
				'mes_id' => 7,
				'year' => 2012,
				'departamentos_id' => 2,
				'municipios_id' => 17,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">El Periodista David Corea, coordinador del noticiero La Verdad de Radio Stero Linda y reportero del Centro de Noticias de Colon (CNC) en el municipio de Tocoa, departamento de Col&oacute;n, responsabiliz&oacute; por cualquier atentado contra su vida al alcalde municipal H&eacute;ctor Rolando Hern&aacute;ndez y a los representantes de la compa&ntilde;&iacute;a minera &ldquo;RDD&rdquo;.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Corea detall&oacute; a C-Libre que una fuente de su entera confianza le dijo:&nbsp; &nbsp;&ldquo;Tene cuidado con lo que dec&iacute;s te andan bien de cerca, el alcalde dijo que sea como sea el proyecto minero va aunque haya derramamiento de sangre&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Corea puntualiz&oacute; que su trabajo de investigaci&oacute;n period&iacute;stica sobre la miner&iacute;a en la zona, lo llev&oacute; a conocer y divulgar anomal&iacute;as dentro del proyecto minero multimillonario, as&iacute; como de la cercana relaci&oacute;n entre el alcalde municipal y las dos compa&ntilde;&iacute;as que se pretenden instalar en el sector bajo el supuesto nombre de &ldquo;RDD&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Fuentes de mi entera confianza me informaron que por ordenes del alcalde me&nbsp; monitorean y &nbsp;me graban los programas de radio y televisi&oacute;n; es decir me est&aacute;n levantando un perfil, cosa que antes no se hac&iacute;a, por eso he decidido hacer p&uacute;blica la denuncia como un mecanismo de protecci&oacute;n a mi persona&rdquo;, asegur&oacute; Corea.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Por otra parte, &nbsp;Corea denunci&oacute; que a inicios de esta semana el alcalde municipal, de manera irresponsable, entreg&oacute; a los alumnos del primero y segundo grado de la Escuela Paulo Freire, un &nbsp;medicamento vencido, que les provoco malestar a su salud.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n Corea la denuncia constante de la problem&aacute;tica campesina, la instalaci&oacute;n de compa&ntilde;&iacute;as mineras y la reci&eacute;n entrega de medicamentos vencidos, a menores de edad, por parte del edil, ser&aacute;n la causa principal de un posible atentado a su vida.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">C-Libre, ante el peligro que corre la vida del comunicador David Corea solicita urgentemente del &nbsp;ciudadano presidente de la Rep&uacute;blica de Honduras, Porfirio Lobo Sosa; de la Secretaria en los Despachos de Justicia y Derechos Humanos, Ana Pineda y del cuerpo policial del pa&iacute;s, la &nbsp;protecci&oacute;n de la vida del comunicador y la garant&iacute;a de las condiciones favorables para la realizaci&oacute;n de su labor period&iacute;stica.&nbsp;</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">A las Organizaciones de Derechos Humanos a nivel internacional solicitamos brindar el acompa&ntilde;amiento y respaldo necesario para el periodista David Corea, mediante la respectiva solidaridad.</span></span></p>
<p style="text-align: justify;">
&nbsp;</p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Porfirio Lobo Sosa</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Presidente de la Republica de Honduras</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Bulevar Juan Pablo II</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Tegucigalpa, Honduras, C.A.</span></span></p>
<p style="text-align: justify;">
&nbsp;</p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Ana Pineda</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Ministra de Justicia y Derechos Humanos</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Col. Lomas del Mayab,</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Ave. Rep&uacute;blica de Costa Rica,</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Tegucigalpa, Honduras, C.A.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Pompeyo Bonilla</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Secretar&iacute;a de Estado en el Despacho de Seguridad</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Plantel Casamata, subida al Picacho</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Tegucigalpa, Honduras, C.A.</span></span></p>
<p>
&nbsp;</p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-07-06 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 22:00:00',
			),
			59 => 
			array (
				'id' => 86,
				'title' => 'Asesinan a reportero radial al norte de Honduras',
				'number' => '0060',
				'mes_id' => 7,
				'year' => 2012,
				'departamentos_id' => 5,
				'municipios_id' => 73,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">Adonis Felipe Bueso Guti&eacute;rrez comunicador social de Radio Stereo Naranja, una emisora cristiana ubicada en el municipio de Sonaguera, departamento de Col&oacute;n, fue acribillado junto a dos primos la noche del domingo ocho de julio, en la ciudad de Villanueva, departamento de Cort&eacute;s.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Bueso Guti&eacute;rrez (24), Miguel &Aacute;ngel Guti&eacute;rrez Coto (18) y Francisco Iraeta L&oacute;pez (20) fueron ultimados por desconocidos alrededor de las 6:00 de la tarde a la salida de un caf&eacute; internet en la colonia Siboney, en la norte&ntilde;a ciudad de Villanueva.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n Orlin Coto, administrador de la radio local donde laboraba el joven reportero, &eacute;ste habr&iacute;a solicitado un permiso especial de una semana para poder convivir con unos primos a los que ten&iacute;a mucho tiempo sin verlos. Adem&aacute;s inform&oacute; que mantuvo una fluida comunicaci&oacute;n con Bueso debido a que este 21 de julio celebrar&iacute;an el primer aniversario de Stereo Naranja.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;&Eacute;l me asegur&oacute; que iba a regresar a tiempo para ayudarme con los preparativos del aniversario, jam&aacute;s imagine que regresar&iacute;a de esta manera, &eacute;l era una persona colaboradora y muy generosa, desde hace tres a&ntilde;os nos congreg&aacute;bamos en la iglesia Bautista Defensores de la F&eacute;&rdquo;, dijo, con mucho pesar, Coto.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El comunicador record&oacute; que Bueso le coment&oacute; el d&iacute;a s&aacute;bado siete de julio, que &ldquo;la situaci&oacute;n de Villanueva no se comparaba con la de Sonaguera&rdquo; y que la ciudad &ldquo;era un &nbsp;infierno&rdquo;, asimismo que el d&iacute;a jueves &nbsp;hab&iacute;an intentado asesinar a uno de sus primos.</span></span></p>
<div>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Desde hace seis a&ntilde;os el joven comunicador incursion&oacute; como reportero radial y gracias a sus principios cristianos se hab&iacute;a ganado el respeto y simpat&iacute;a de los pobladores del sector de&nbsp;&nbsp;Sonaguera.</span></span></p>
</div>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">C-Libre ha registrado durante el a&ntilde;o 2012 el asesinato de seis comunicadores sociales a nivel nacional: Sayda Almendarez (22), Fausto Elio Hern&aacute;ndez (58), Noel Alexander Valladares (28), Erick Mart&iacute;nez &Aacute;vila (32), &Aacute;ngel Villatoro (49) y Adonis Bueso (24).&nbsp;</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-07-11 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 22:01:00',
			),
			60 => 
			array (
				'id' => 87,
				'title' => 'Segundo atentado del año para comunicador de la zona norte',
				'number' => '0061',
				'mes_id' => 7,
				'year' => 2012,
				'departamentos_id' => 5,
				'municipios_id' => 68,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">Un segundo atentado se produjo en contra del corresponsal de la televisora nacional JBN en la ciudad de Puerto Cortes, Selvin Mart&iacute;nez por parte de un hombre que le disparo en repetidas ocasiones.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Mart&iacute;nez dijo a C-Libre que el hecho ocurri&oacute;, a las 11:10 de la ma&ntilde;ana del mi&eacute;rcoles 11 de julio, cuando se dirig&iacute;a, en su motocicleta, a traer a su esposa e hija a la escuela Francisco Moraz&aacute;n ubicada en la aldea Presa Vieja del municipio de Puerto Cort&eacute;s.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n el relato de Mart&iacute;nez fueron doce los disparos de bala habr&iacute;an sido ejecutadas en contra de su persona; &ldquo;solamente una llanta de la motocicleta recibi&oacute; tres impactos de bala y yo cont&eacute; unos 12 balazos, sinceramente cre&iacute; que me hab&iacute;an herido pero gracias a Dios no fue as&iacute;&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El reportero informo que despu&eacute;s del atentado, se apersono a interponer la denuncia&nbsp; ante las autoridades de la Polic&iacute;a Nacional Preventiva y de la Direcci&oacute;n General de Investigaci&oacute;n Criminal (DGIC), pues asegur&oacute; conocer la identidad de su agresor.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Se trata de un jefe de una mara que hace poco se vino de la ciudad de Tela y en varias ocasiones me han informado que este sujeto dijo que mi esposa y yo le ca&iacute;amos mal por lo que nos iba a reventar a ambos&rdquo;, puntualiz&oacute; Mart&iacute;nez.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Por su parte las autoridades procedieron, en horas de la tarde, a buscar al sospechoso, basados en un retrato hablado elaborado seg&uacute;n los perfiles proporcionadas por Mart&iacute;nez.</span></span></p>
<div>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El d&iacute;a jueves 26 de abril C-Libre emiti&oacute; la alerta &ldquo;Desconocidos disparan contra la vivienda de comunicador&rdquo;, donde se detalla el tiroteo a la casa del comunicador a eso de las 5:30 pm. Posteriormente el 18 de mayo, se &nbsp;emiti&oacute; una nueva alerta por intento de secuestro en contra de la profesora Dilcia Moreno, esposa del comunicador social.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El periodista solicit&oacute; a las autoridades competentes brindarle toda la seguridad del caso, &ldquo;mire ya son dos de las que me he salvado, la tercera no la voy a contar, tambi&eacute;n me preocupa mi familia se est&aacute;n exponiendo demasiado, necesito el apoyo de las autoridades para que protejan a mis hijos y a mi esposa&rdquo;.&nbsp;</span></span></p>
</div>
<p>
&nbsp;</p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-07-11 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 22:02:00',
			),
			61 => 
			array (
				'id' => 88,
				'title' => 'Prisión preventiva para el responsable del atentado contra comunicador',
				'number' => '0062',
				'mes_id' => 7,
				'year' => 2012,
				'departamentos_id' => 5,
				'municipios_id' => 68,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">El Juzgado de Letras Penal de la ciudad de Puerto Cortes, departamento de Cort&eacute;s, dict&oacute; auto de prisi&oacute;n a Joaquin Molina Andrade (28), por tentativa de homicidio en contra del comunicador Selvin Mart&iacute;nez, el pasado 11 de julio.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Durante el juicio que dur&oacute; alrededor de cinco horas, Mart&iacute;nez, present&oacute; ante la Juez Wendy Lakeman, en calidad de evidencia la motocicleta con varias perforaciones de bala producto del ataque perpetrado por Molina Andrade.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Asimismo el reportero acompa&ntilde;ado por su esposa, reconoci&oacute; a Molina Andrade como la persona que atent&oacute; contra su vida hace seis d&iacute;as, cuando se dirig&iacute;a, en su motocicleta, a traer a su esposa e hija a la escuela Francisco Moraz&aacute;n, ubicada en la aldea Presa Vieja del municipio de Puerto Cort&eacute;s.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El comunicador dijo a C-Libre que pese a la sentencia a&uacute;n teme por la vida de sus seres queridos, &ldquo;mi miedo por el contrario se ha incrementado pues nos enteramos que Joaquin Molina pertenece a una banda de sicarios, por lo que el autor intelectual del atentado en mi contra esta libre&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Colegas de Mart&iacute;nez, en un acto de solidaridad llegaron, con pancartas y consignas, a las instalaciones de los Tribunales de Justicia desde donde demandaron justicia y respeto a la libertad de expresi&oacute;n.</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-07-18 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 22:05:00',
			),
			62 => 
			array (
				'id' => 89,
				'title' => 'Jueza pone mordaza a comunicador en su propio juicio oral y público',
				'number' => '0063',
				'mes_id' => 7,
				'year' => 2012,
				'departamentos_id' => 8,
				'municipios_id' => 110,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">La jueza Carmen Canales Canales, emiti&oacute; el d&iacute;a 20 de julio una resoluci&oacute;n mediante la cual proh&iacute;be, al periodista Luis Ortiz de canal 36 y a su cuerpo de abogados, divulgar informaci&oacute;n relativa al juicio oral y p&uacute;blico que se ventila en el Juzgado de Paz de Tegucigalpa en contra del &ldquo;canciller&rdquo; de la Iglesia Cat&oacute;lica, Carlos Magno N&uacute;&ntilde;ez, por violenta agresi&oacute;n en contra del comunicador.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El argumento de la jueza para acallar al periodista es que su vida y la del cura corren riesgo, por lo que puso en &ldquo;Secretividad&rdquo; el proceso judicial.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">La resoluci&oacute;n fue aprobada a solicitud del apoderado legal del Padre Carlos Magno, sin tomar en cuenta a la parte demandante.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">De acuerdo con una fuente de C-Libre, el documento establece, entre otras situaciones, que ni el periodista Luis Ortiz y su cuerpo de abogados pueden divulgar informaci&oacute;n sobre el caso. La juez tambi&eacute;n pone como excusa que su decisi&oacute;n se debe a que en las afueras del juzgado se han producido manifestaciones de solidaridad a favor del reportero que ponen en peligro su integridad f&iacute;sica y la del sacerdote.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n la fuente, el periodista Ortiz ha sufrido diferentes vej&aacute;menes del sistema jur&iacute;dico nacional al parcializarse con el cl&eacute;rigo, as&iacute; como la influencia del poder religioso, que pone en jaque al Estado laico, al interferir en la aplicaci&oacute;n de la justicia.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">A criterio de C-Libre esta resoluci&oacute;n violenta garant&iacute;as constitucionales en materia de derechos y pone en duda en el &aacute;mbito internacional los compromisos asumidos por Honduras en diversos foros, instrumentos jur&iacute;dicos y organismos que defienden los Derechos Humanos en el mundo.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Para el caso la Constituci&oacute;n de la Rep&uacute;blica en su art&iacute;culo 72 reza que &ldquo;es libre la emisi&oacute;n del pensamiento por cualquier medio de difusi&oacute;n, sin previa censura. Son responsables ante la ley los que abusen de este derecho y aquellos que por medios directos o indirectos restrinjan o impidan la comunicaci&oacute;n y circulaci&oacute;n de ideas y opiniones&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Asimismo el art&iacute;culo 19 de la declaraci&oacute;n Universal de los Derechos Humanos dice que&nbsp; &ldquo;todo individuo tiene derecho a la libertad de opini&oacute;n y de expresi&oacute;n; este derecho incluye el de no ser molestado a causa de sus opiniones, el de investigar y recibir informaciones y opiniones, y el de difundirlas, sin limitaci&oacute;n de fronteras, por cualquier medio de expresi&oacute;n&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Por otra parte una de las recomendaciones hechas a Honduras por el Consejo de Derechos Humanos en 2011, establece que el Estado debe tomar las medidas necesarias para mejorar la seguridad de los periodistas y defensores de derechos humanos y llevar a cabo investigaciones independientes y cre&iacute;bles sobre los asesinatos y agresiones y llevar a la &nbsp;justicia a los perpetradores de estos actos condenables.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Finalmente el art&iacute;culo 8 de las Garant&iacute;as Judiciales, establecidas en la Convenci&oacute;n Americana de los Derechos Humanos expresa que toda persona tiene derecho a ser o&iacute;da, con las debidas garant&iacute;as y dentro de un plazo razonable, por un juez o tribunal competente, independiente e imparcial. &nbsp;</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-07-20 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 22:06:00',
			),
			63 => 
			array (
				'id' => 90,
				'title' => 'Periodista y su esposa son detenidos y hostigados por agentes policiales en el aeropuerto Juan Santa María de Costa Rica',
				'number' => '0064',
				'mes_id' => 7,
				'year' => 2012,
				'departamentos_id' => 8,
				'municipios_id' => 110,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">Durante el trasbordo de un avi&oacute;n a otro, en el aeropuerto Juan Santamar&iacute;a, de San Jos&eacute; de Costa Rica, agentes de la Direcci&oacute;n de Inteligencia y Seguridad (DIS), retienen arbitrariamente y hostigan al periodista de origen sueco Dick Emanuelsson, radicado en Honduras desde el a&ntilde;o 2000 y subdirector de la Agencia de Noticias de la Nueva Colombia (ANNCOL).</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Emanuelsson, junto a su compa&ntilde;era de trabajo y esposa Miriam de Emanuelsson de nacionalidad hondure&ntilde;a, fueron aislados por una hora y media dentro en una oficina con dispositivo de video, donde les fotocopiaron sus identificaciones personales y les registraron exhaustivamente el equipaje de mano incluyendo, una inspecci&oacute;n de su equipo de trabajo.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Los comunicadores fueron dejados en libertad unos minutos antes que partiera su avi&oacute;n con destino a la ciudad de Tegucigalpa, Honduras, no sin antes obligarlos a firmar un acta en la que se estipulaba que no hab&iacute;an sido tratados en forma abusiva o violenta.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n el relato de Dick Emanuelsson, ambos fueron v&iacute;ctimas de un operativo en el que est&aacute;n implicados los organismos de seguridad de varios pa&iacute;ses latinoamericanos por ser periodistas alternativos, que han sido una fuente imprescindible en el cubrimiento del movimiento popular en Honduras.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;A su regreso a Honduras de una gira por Venezuela, cinco agentes ya estaban esperando en la &ldquo;manga&rdquo; cuando arribamos a San Jos&eacute; de Costa Rica. Ni siquiera esperaban en la terminal sino que nos recibieron en la misma &ldquo;manga&rdquo; donde nos preguntaron por los pasaportes&rdquo;, coment&oacute; el periodista.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El reportero inform&oacute;, &ldquo;fuimos llevados a un local en el aeropuerto donde hab&iacute;a c&aacute;maras en el techo y ah&iacute; estaban nuestras maletas y mochilas. Me llevaron a m&iacute; primero y estuve presente cuando sacaron todo el contenido de las maletas, chequeando hasta en cada borde de la tela y los zapatos&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El comunicador, asegur&oacute; que los agentes de la DIS, filmaron y fotografiaron todos los documentos personales que portaban as&iacute; como el itenario de su cobertura en el Foro de Sao Paulo durante la semana en Caracas.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Los agentes de la DIS, me dijeron: &ldquo;vimos algunas cosas sospechosas cuando sus maletas pasaron por el control&rdquo;. Lo que Dick, consider&oacute; una &ldquo;tremenda mentira&rdquo; pues ellos ya se encontraban en &ldquo;la manga cuando el avi&oacute;n arrib&oacute; y las maletas todav&iacute;a estaban en la bodega de la m&aacute;quina&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Emanuelson y su esposa, no dejan de estar preocupados por el operativo montado en su contra, y por las fotocopiadas que los agentes de la DIS les sacaron a sus identificaciones personales y tarjetas de cr&eacute;dito.</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-07-23 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 22:08:00',
			),
			64 => 
			array (
				'id' => 91,
				'title' => 'Alcalde Municipal nacionalista cierra medios de comunicación y censura a periodistas',
				'number' => '0065',
				'mes_id' => 7,
				'year' => 2012,
				'departamentos_id' => 8,
				'municipios_id' => 110,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">Francis Estrada, aspirante a la Alcald&iacute;a Municipal del Municipio de Talanga en el departamento de Francisco Moraz&aacute;n, denunci&oacute; abuso de poder por parte del edil de dicha ciudad, quien mediante el cierre de medios y espacios de comunicaci&oacute;n, intenta controlar la libertad de expresi&oacute;n de los candidatos de fuerzas pol&iacute;ticas opositoras y asimismo mantener una campa&ntilde;a de manipulaci&oacute;n de la informaci&oacute;n que emana de la alcald&iacute;a municipal.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">En su narrativa, Estrada detall&oacute; que &ldquo;recientemente cerraron el programa televisivo Ojo Cr&iacute;tico &nbsp;y lo mismo ocurri&oacute; el a&ntilde;o pasado cuando le cerraron la radio por tres d&iacute;as a Nelson Alvarado, porque al Alcalde no le gusta que lo critiquen&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El entrevistado asegur&oacute; que los periodistas que tienen espacios comunicativos, le han expresado que el Alcalde los amenaza con incrementarle el pago de su programa y los chantajea con no cobrarles los impuestos municipales para que no se&ntilde;alen los desbarajustes de su gesti&oacute;n.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">En tanto uno de los due&ntilde;os de los canales que ha sido afectado, quien no quiso dar su nombre por temor, dijo que: &ldquo;es cierto, nos llaman para decirnos que dejemos el espacio porque lo va ocupar otra persona y lo que hacen es bloquearnos. Queremos resolver esta situaci&oacute;n porque nos afecta la libertad de expresi&oacute;n&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n Estrada este accionar, no es m&aacute;s que una estrategia pol&iacute;tica del alcalde Roosvelt Avil&eacute;s para su reelecci&oacute;n, &ldquo;en este momento no tenemos publicidad en nuestros medios debido a que los due&ntilde;os aducen que el Alcalde les ha prohibido que nos permita pautar &nbsp;publicidad&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Estrada quien funge como regidor municipal en representaci&oacute;n del Partido Nacional de Honduras, el mismo partido pol&iacute;tico del Alcalde, declar&oacute; que &ldquo;se ha llegado al extremo que han cerrado canales de televisi&oacute;n y radios, con la sola llamada telef&oacute;nica del Alcalde a la compa&ntilde;&iacute;a de cable&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Por otra parte Estrada afirm&oacute; que cuando un aspirante pol&iacute;tico llega a un medio de comunicaci&oacute;n a expresar sus ideas partidarias, inmediatamente le cortan la se&ntilde;al del medio, &ldquo;El pasado martes se cerr&oacute; el canal Telecentro de don Freddy Cruz, desde las 11:00 de la ma&ntilde;ana hasta las 6:00 de la tarde. Ellos nos dijeron que fue por una orden del Alcalde&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Respecto de la denuncia, el alcalde Roosvelt Avil&eacute;s desminti&oacute; la acusaci&oacute;n hecha por su correligionario, al tiempo de afirmar que &eacute;l no ha cerrado ning&uacute;n medio de comunicaci&oacute;n, &ldquo;las cuatro radios y tres canales locales siguen funcionado, y aqu&iacute; no nos pueden calificar de dictadores&rdquo;.</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-07-23 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 22:09:00',
			),
			65 => 
			array (
				'id' => 92,
				'title' => 'Previo a la visita del relator de libertad de expresión a Honduras, se  incrementan agresiones a la prensa ',
				'number' => '0066',
				'mes_id' => 8,
				'year' => 2012,
				'departamentos_id' => 5,
				'municipios_id' => 63,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">En el marco&nbsp; de la visita oficial del Relator Especial sobre la Promoci&oacute;n y Protecci&oacute;n del Derecho a la Libertad de Opini&oacute;n y Expresi&oacute;n de la Organizaci&oacute;n de las Naciones Unidas (ONU), Frank La Rue, a Honduras, el pr&oacute;ximo 7 al 14 de agosto de 2012, se incrementan agresiones a periodistas y medios de comunicaci&oacute;n nacional.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El viernes tres de agosto, durante la trasmisi&oacute;n del foro de realidad nacional de Radio Progreso, ubicada en la zona norte del pa&iacute;s, dos polic&iacute;as ingresaron al interior de la estaci&oacute;n radial, donde se debat&iacute;a junto a dirigentes campesinos del Movimiento Unificado de Campesinos del Aguan (MUCA),&nbsp; un an&aacute;lisis relacionado con la conflictiva situaci&oacute;n en el Bajo Agu&aacute;n.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n Karla Rivas, del equipo de redacci&oacute;n de Radio Progreso as&iacute; como del equipo de Reflexi&oacute;n y Comunicaci&oacute;n (ERIC) de los Jesuitas, &ldquo;dos polic&iacute;as de apellidos Guzm&aacute;n y Gonz&aacute;lez, les preguntaban, &iquest;D&oacute;nde est&aacute;n los campesinos, d&oacute;nde los tienen?, pero cuando se les cuestion&oacute; su presencia, los agentes respondieron que era un &ldquo;operativo de rutina&rdquo; ordenado por el jefe de la polic&iacute;a, Juan Carlos, el &ldquo;Tigre&rdquo; Bonilla.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Para que los polic&iacute;as abandonaran la estaci&oacute;n radial fue necesaria la presencia de la&nbsp; apoderada legal de la radio, quien les hizo saber a los agentes del orden que la misma porque la misma goza medidas cautelares otorgadas por la Comisi&oacute;n Interamericana de Derechos Humanos (CIDH).</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">La acci&oacute;n se produce a pocos d&iacute;as del regreso de Estados Unidos del director de la radio, el sacerdote Ismael Moreno, quien rindi&oacute; testimonio ante importantes congresistas sobre el tema de libertad de expresi&oacute;n en Honduras.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Por otra parte, este mismo viernes tres de agosto, dos individuos que se movilizaban a bordo de una motocicleta abrieron fuego contra la casa de Jos&eacute; Encarnaci&oacute;n Chinchilla, corresponsal de Radio Cadena Voces, hiriendo a uno de los hijos del periodista, a quien se le practic&oacute; una cirug&iacute;a de emergencia para salvarle la vida.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Encarnaci&oacute;n Chinchilla, contempla la posibilidad del exilio en Estados Unidos, junto a sus dos hijos y su esposa, por lo que solicit&oacute; de manera urgente el apoyo del presidente Porfirio Lobo Sosa.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Igualmente, denunci&oacute; p&uacute;blicamente la lentitud de la respuesta de la polic&iacute;a, &ldquo;la investigaci&oacute;n sobre este atentado debe ir acompa&ntilde;ada de otra sobre las graves deficiencias de esta instituci&oacute;n, que en algunas ocasiones, ha llegado a ser la responsable de graves violaciones de los derechos humanos&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">En tanto, el presidente del Poder Legislativo, Juan Orlando Hern&aacute;ndez as&iacute; como el ex ministro de Finanzas, H&eacute;ctor Guillermo Guill&eacute;n, han culpado a los periodistas y medios de comunicaci&oacute;n nacional por su cobertura en el caso de la incautaci&oacute;n de 1.125 millones de lempiras, el pasado 31 de julio a la esposa del ex ministro.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Finalmente, seg&uacute;n la ONU, el prop&oacute;sito de la visita oficial de La Rue, ser&aacute; buscar la protecci&oacute;n para los periodistas hondure&ntilde;os, para ello el relator se reunir&aacute; con el Gobierno, representantes de las agencias internacionales, la sociedad civil y asociaciones de periodistas, para identificar los caminos que aseguren que todas las personas, y en particular los periodistas, ejerciten sus derechos a la libertad de opini&oacute;n y expresi&oacute;n sin temor por su seguridad.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Durante su misi&oacute;n, el relator especial visitar&aacute; Tegucigalpa y San Pedro Sula, para recolectar insumos que le permitan establecer hallazgos y recomendaciones para su informe final, que ser&aacute; presentado al Consejo de Derechos Humanos en el 2013.</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-08-06 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 22:11:00',
			),
			66 => 
			array (
				'id' => 93,
				'title' => 'Héctor Guillen culpa a la prensa por su salida del Ministerio de Finanzas',
				'number' => '0067',
				'mes_id' => 8,
				'year' => 2012,
				'departamentos_id' => 8,
				'municipios_id' => 110,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="background-color: white; line-height: 12pt; text-align: justify;">El ex ministro de Finanzas, H&eacute;ctor Guillen, asegur&oacute; que la cobertura period&iacute;stica en el caso de la incautaci&oacute;n de m&aacute;s de 1.125 millones de lempiras a su esposa e hijo,&nbsp;el pasado 31 de julio,&nbsp;provoc&oacute; la determinaci&oacute;n de poner su renuncia con car&aacute;cter irrevocable, al d&iacute;a siguiente de lo ocurrido con su compa&ntilde;era de hogar.</span></span></span></p>
<p style="margin: 0cm 0cm 0.0001pt; line-height: 12pt; background-color: white; text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span lang="ES-AR">&nbsp;</span></span></span><span lang="ES-AR" style="font-size: 10pt; font-family: Calibri, sans-serif;"><o:p></o:p></span></p>
<p style="margin: 0cm 0cm 0.0001pt; line-height: 12pt; background-color: white; text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span lang="ES-AR">Seg&uacute;n Guillen, &quot;el amarillismo del periodismo ha provocado un esc&aacute;ndalo de grandes proporciones, pues me han tratado como delincuente y para no afectar la imagen del presidente Porfirio Lobo Sosa, con un hecho que no es delito, he decidido dejar mi cargo de ministro&quot;.</span></span></span><span lang="ES-AR" style="font-size: 10pt; font-family: Calibri, sans-serif;"><o:p></o:p></span></p>
<p style="margin: 0cm 0cm 0.0001pt; line-height: 12pt; background-color: white; text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span lang="ES-AR">&nbsp;</span></span></span><span lang="ES-AR" style="font-size: 10pt; font-family: Calibri, sans-serif;"><o:p></o:p></span></p>
<p style="margin: 0cm 0cm 0.0001pt; line-height: 12pt; background-color: white; text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span lang="ES-AR">La esposa del funcionario y su hijo fueron detenidos, en un operativo de rutina, en la posta El Durazno, salida a la zona norte del pa&iacute;s, cuando se conduc&iacute;an en un veh&iacute;culo marca Ford F-150 Tuxedo negro, placas PDB 2714.</span></span></span><span lang="ES-AR" style="font-size: 10pt; font-family: Calibri, sans-serif;"><o:p></o:p></span></p>
<p style="margin: 0cm 0cm 0.0001pt; line-height: 12pt; background-color: white; text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span lang="ES-AR">&nbsp;</span></span></span><span lang="ES-AR" style="font-size: 10pt; font-family: Calibri, sans-serif;"><o:p></o:p></span></p>
<p style="margin: 0cm 0cm 0.0001pt; line-height: 12pt; background-color: white; text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span lang="ES-AR">Mientras la polic&iacute;a realizaba la inspecci&oacute;n del auto motor, se percato que en el interior del carro hab&iacute;a un bolso de tela que al abrirlo conten&iacute;a 1.125 millones de lempiras. &nbsp;</span></span></span><span lang="ES-AR" style="font-size: 10pt; font-family: Calibri, sans-serif;"><o:p></o:p></span></p>
<p style="margin: 0cm 0cm 0.0001pt; line-height: 12pt; background-color: white; text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span lang="ES-AR">&nbsp;</span></span></span><span lang="ES-AR" style="font-size: 10pt; font-family: Calibri, sans-serif;"><o:p></o:p></span></p>
<p style="margin: 0cm 0cm 0.0001pt; line-height: 12pt; background-color: white; text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span lang="ES-AR">Ante un caso tan inusual los polic&iacute;as procedieron a notificar el hecho a sus superiores y remitirlo a la polic&iacute;a de fronteras.</span></span></span><span lang="ES-AR" style="font-size: 10pt; font-family: Calibri, sans-serif;"><o:p></o:p></span></p>
<p style="margin: 0cm 0cm 0.0001pt; line-height: 12pt; background-color: white; text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span lang="ES-AR">&nbsp;</span></span></span><span lang="ES-AR" style="font-size: 10pt; font-family: Calibri, sans-serif;"><o:p></o:p></span></p>
<p style="margin: 0cm 0cm 0.0001pt; line-height: 12pt; background-color: white; text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span lang="ES-AR">El veh&iacute;culo est&aacute; registrado como propiedad de la asociaci&oacute;n civil Fundeciman, administrada por Dennis Figueroa, asesor financiero del presidente del Congreso Nacional, Juan Orlando Hern&aacute;ndez y tambi&eacute;n presidente del Grupo Colibr&iacute;, una Fundaci&oacute;n de Desarrollo Comunitario.</span></span></span><span lang="ES-AR" style="font-size: 10pt; font-family: Calibri, sans-serif;"><o:p></o:p></span></p>
<p style="margin: 0cm 0cm 0.0001pt; line-height: 12pt; background-color: white; text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span lang="ES-AR">&nbsp;</span></span></span><span lang="ES-AR" style="font-size: 10pt; font-family: Calibri, sans-serif;"><o:p></o:p></span></p>
<p style="margin: 0cm 0cm 0.0001pt; line-height: 12pt; background-color: white; text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span lang="ES-AR">Al respecto, Guillen, explic&oacute; que el auto se lo compr&oacute; a una fundaci&oacute;n en cuotas, que hizo el primer pago en febrero, &quot;estoy por hacer el segundo abono, en cuanto se pague el veh&iacute;culo se va a ser el tr&aacute;mite de traspaso, pero no tiene nada que ver con la Corporaci&oacute;n Colibr&iacute; como se rumora maliciosamente aqu&iacute; en la capital&quot;.</span></span></span><span lang="ES-AR" style="font-size: 10pt; font-family: Calibri, sans-serif;"><o:p></o:p></span></p>
<p style="margin: 0cm 0cm 0.0001pt; line-height: 12pt; background-color: white; text-align: justify; background-position: initial initial; background-repeat: initial initial;">
<span lang="ES-AR" style="font-family: Calibri, sans-serif;">&nbsp;</span><span lang="ES-AR" style="font-size: 10pt; font-family: Calibri, sans-serif;"><o:p></o:p></span></p>
<p style="margin: 0cm 0cm 0.0001pt; line-height: 12pt; background-color: white; text-align: justify; background-position: initial initial; background-repeat: initial initial;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span lang="ES-AR">Por otra parte, v&iacute;a telef&oacute;nica en varios medios de comunicaci&oacute;n, el ex funcionario justific&oacute; que el dinero, incautado a su esposa, era producto de un pr&eacute;stamo con la banca nacional para ser utilizado en la compra de divisas y que este estilo de traslado de efectivo, no era la primera vez que lo utilizaba.</span></span></span><span lang="ES-AR" style="font-size: 10pt; font-family: Calibri, sans-serif;"><o:p></o:p></span></p>
<p style="margin: 0cm 0cm 0.0001pt; line-height: 12pt; background-color: white; text-align: justify; background-position: initial initial; background-repeat: initial initial;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span lang="ES-AR">&nbsp;</span></span></span><span lang="ES-AR" style="font-size: 10pt; font-family: Calibri, sans-serif;"><o:p></o:p></span></p>
<p style="margin: 0cm 0cm 0.0001pt; line-height: 12pt; background-color: white; text-align: justify; background-position: initial initial; background-repeat: initial initial;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span lang="ES-AR">Guill&eacute;n, quien asumi&oacute; el cargo de titular de finanzas el 16 de febrero de este a&ntilde;o, determin&oacute; que regresara a su cargo como diputado por el departamento de Cort&eacute;s, donde manten&iacute;a un permiso del legislativo para acompa&ntilde;ar al presidente Porfirio Lobo manejando las finanzas del pa&iacute;s.&nbsp;</span></span></span><span lang="ES-AR" style="font-size: 10pt; font-family: Calibri, sans-serif;"><o:p></o:p></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-08-02 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 22:13:00',
			),
			67 => 
			array (
				'id' => 94,
				'title' => 'Activistas políticos del alcalde capitalino agreden a periodistas',
				'number' => '0068',
				'mes_id' => 8,
				'year' => 2012,
				'departamentos_id' => 8,
				'municipios_id' => 110,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">El jueves nueve de agosto, alrededor de las 3:00 pm, ante la vista y paciencia de Agentes de la Polic&iacute;a Nacional, activistas del alcalde municipal del Distrito Central agredieron f&iacute;sica y verbalmente a las periodistas Lidieth D&iacute;az de canal 36 y Fidelina Sandoval de Globo TV, como tambi&eacute;n al camar&oacute;grafo Cesar Maldonado.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El hecho ocurri&oacute; mientras las comunicadoras y el camar&oacute;grafo intentaban entrevistar al edil capitalino Ricardo &Aacute;lvarez en la salida de su sede pol&iacute;tica, ubicada en un edificio a escasos metros del Ministerio P&uacute;blico.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Los activistas pol&iacute;ticos que se apostaron en la entrada del edificio junto a los guardaespaldas del alcalde, fueron identificados como Santos Cruz y otro conocido por el apodo&nbsp; de Juan &ldquo;cara de vaina&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Uno de los agresores lleg&oacute; al extremo te tapar bruscamente el lente de la c&aacute;mara de Maldonado, al tiempo de preguntarle en tono desafiante &ldquo;a qui&eacute;n estas gravando cara de p&hellip;.. (al referirse al &oacute;rgano sexual masculino), aqu&iacute; le vamos a ense&ntilde;ar caras de p&hellip;&rdquo;, repet&iacute;an los&nbsp; activistas pol&iacute;ticos.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Otros miembros de la prensa, ante la embestida de los agitadores, corrieron a proteger a sus compa&ntilde;eros, particularmente a Maldonado, evitando con ello que se le lastimara. Pese a la agresividad de los activistas, Maldonado no se intimid&oacute; y continu&oacute; realizando su trabajo.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Esta nueva agresi&oacute;n contra la prensa hondure&ntilde;a sucede en el marco de la visita oficial del&nbsp; relator de las Naciones Unidas para la Promoci&oacute;n y Protecci&oacute;n de la Libertad de Expresi&oacute;n y de Opini&oacute;n, Frank La Rue y de la conferencia sobre Seguridad, Protecci&oacute;n y Solidaridad para la Libertad de Expresi&oacute;n que se realiza en Tegucigalpa, bajo la coordinaci&oacute;n de la Sociedad Interamericana de Prensa.&nbsp;</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-08-10 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 22:15:00',
			),
			68 => 
			array (
				'id' => 95,
				'title' => 'Presidente del Congreso Nacional envía mensajero para chantajear a periodista D´vicente',
				'number' => '0069',
				'mes_id' => 8,
				'year' => 2012,
				'departamentos_id' => 6,
				'municipios_id' => 75,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">&ldquo;Yo interpuse este fin de semana una denuncia ante el Ministerio Publico, porque un aspirante a diputado por el movimiento que encabeza el presidente del Congreso Nacional de la Rep&uacute;blica de Honduras, Juan Orlando Hern&aacute;ndez, ha servido de mensajero para proponerme estipendios met&aacute;licos y un plazo para salir del pa&iacute;s hasta que termine el mandato del titular del legislativo&rdquo;, asegur&oacute; a C-Libre, el periodista Ariel D&acute;Viciente.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">D&acute; Vicente destaca en la denuncia presentada ante el Fiscal Franklin Ortez Zuniga, que el mensajero tambi&eacute;n le dijo que buscar&aacute;n las trabas necesarias en la Comisi&oacute;n Nacional de Telecomunicaciones &ndash;CONATEL- para sacar del aire la se&ntilde;al de su canal de televisi&oacute;n. &nbsp;&nbsp;&nbsp;&nbsp;</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&nbsp;&ldquo;Estas nuevas amenazas son el resultado por haber cumplido a cabalidad con la profesi&oacute;n del periodista, al denunciar p&uacute;blicamente ante el jefe de polic&iacute;a hondure&ntilde;a, durante un programa de televisi&oacute;n, que el empresario del transporte Jos&eacute; Natividad Pereira Luna, mejor conocido como &uml;Chepe Luna&uml;, sostiene una relaci&oacute;n de camarader&iacute;a con polic&iacute;as de la zona sur&rdquo;, denunci&oacute;, D&acute;Vicente.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Siento temor que al expirar el plazo y ellos no consoliden sus objetivos (sacarlo del pa&iacute;s), puedan eliminarme porque aqu&iacute; existe una organizaci&oacute;n de sicariato disponible al mejor postor encabezada por Jos&eacute; Luna, quien fue dejado en libertad, en una afrenta contra la justicia hondure&ntilde;a por estar ligado al crimen organizado&rdquo;, declar&oacute; el comunicador.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Chepe Luna, fue detenido el martes (7 de agosto), en una empresa de transporte terrestre de su propiedad, por agentes de la Direcci&oacute;n Nacional de Investigaci&oacute;n Criminal (DNIC), en cumplimiento de la orden de captura del 4 de agosto de 1998, emitida por el Juzgado Seccional de Choluteca.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Luna, fue remitido a la Direcci&oacute;n de Migraci&oacute;n y Extranjer&iacute;a, donde fue dejado en libertad unas 24 horas despu&eacute;s de arresto debido al recurso de Habeas Corpus a su favor presentado por su abogado, Marlon Duarte.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Las declaraciones del Chepe Luna, fueron tajantes al asegurar no tener cuentas pendientes, &ldquo;Migraci&oacute;n determin&oacute; que soy hondure&ntilde;o nato, mi mam&aacute; es salvadore&ntilde;a y nac&iacute; en Alianza, Valle. Todo se dio por la denuncia del periodista (Ariel D&rsquo;Vicente), pero antes de todo tuvieron que investigar, se comprob&oacute; que no tengo nada que ver en las acusaciones&rdquo;, asegur&oacute;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">En reacci&oacute;n a lo acontecido, el presidente de la Rep&uacute;blica de El Salvador, Mauricio F&uacute;nez, manifest&oacute; que, &quot;Una importante captura que hab&iacute;a realizado la fuerza de seguridad p&uacute;blica hondure&ntilde;a sencillamente se ve frustrada, al poner en libertad (a Pereira) porque la defensa present&oacute; un recurso de h&aacute;beas corpus a la Sala de lo Constitucional de la Corte Suprema de Justicia de Honduras y esta sala en forma expr&eacute;s resolvi&oacute; el recurso y lo puso en libertad&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n el diario salvadore&ntilde;o, La Prensa Grafica, en el 2009, diversas publicaciones detallaron que documentos de inteligencia y memorandos internos de la Polic&iacute;a Nacional Civil (PNC), ligaban a Chepe Luna con el exdirector policial Ricardo Menesses y con el exjefe de la PNC en San Miguel Herberth Larios.</span></span></p>
<div>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">En el 2004, la Corte del Distrito Sur de Nueva York liber&oacute; una orden de captura contra Chepe Luna por los supuestos delitos de migraci&oacute;n clandestina (coyote), drogas, blanqueo de capitales y tr&aacute;fico de coca&iacute;na.</span></span></p>
</div>
<p>
&nbsp;</p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-08-10 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 22:19:00',
			),
			69 => 
			array (
				'id' => 96,
				'title' => 'Asesinan a trabajador del periódico digital Hondudiario.com',
				'number' => '0070',
				'mes_id' => 8,
				'year' => 2012,
				'departamentos_id' => 8,
				'municipios_id' => 110,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">En el interior de su veh&iacute;culo &ldquo;pick-up&rdquo;, rojo, fue asesinado a balazos el viernes 10 de agosto, en la colonia Bella Vista de la ciudad capital, Jos&eacute; Noel Canales de 34 a&ntilde;os de edad, empleado del peri&oacute;dico digital hondudiario.com y de Seproc (Servicios Profesionales de Comunicaci&oacute;n),empresa dedicada al monitoreo de noticias a nivel nacional.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Canales, estuvo estudiando la carrera de periodismo en la Universidad Nacional Aut&oacute;noma de Honduras (UNAH) y desde hace 12 a&ntilde;os laboraba como monitor de noticias para Seproc, y en el peri&oacute;dico digital Hondudiario.com, donde en ocasiones ejerc&iacute;a labores como reportero.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El asesinato a Canales se da en el marco de la visita oficial del Relator Especial sobre la Promoci&oacute;n y Protecci&oacute;n del Derecho a la Libertad de Opini&oacute;n y Expresi&oacute;n de la Organizaci&oacute;n de las Naciones Unidas (ONU), Frank La Rue &nbsp;y de la clausura del foro sobre Libertad de Expresi&oacute;n, convocado por la Sociedad Interamericana de Prensa (SIP) y la Asociaci&oacute;n de Medios de Comunicaci&oacute;n de Honduras (AMC), en la ciudad capital del pa&iacute;s.&nbsp;</span></span></p>
<div>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">En una nota informativa titulada, &quot;Nos asesinaron a un empleado ejemplar, digno y honesto&quot;, el medio digital lament&oacute; la muerte de Canales. Uno de sus p&aacute;rrafos dice textualmente: &ldquo;hermanos hondure&ntilde;os, hoy no tenemos palabras ni estilo para escribir, no queremos informar que nos asesinaron de manera cobarde a uno de nuestros empleados. No sabemos las causas ni los motivos&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Agrega el art&iacute;culo: &ldquo;se&ntilde;ores de la Polic&iacute;a Nacional, entes investigadores, gobierno de la Rep&uacute;blica, no hace falta decirles cu&aacute;l es su papel en estos casos, pero queremos dejar constancia que este viernes 10 de agosto, cuando ven&iacute;a para su trabajo, nuestro empleado Noel Canales fue asesinado a balazos&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El medio de comunicaci&oacute;n informa adem&aacute;s que desde el a&ntilde;o 2009 sus empresas y su personal han sido objeto de diversas amenazas, atentados con armas de fuego e intimidaciones, hechos que han sido denunciados a la Fiscal&iacute;a Especial de Derechos Humanos; situaciones que los ha obligado a cambiar sus rutinas diarias de trabajo.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El texto del peri&oacute;dico digital finaliza con las interrogantes siguientes, &ldquo;Que podemos pedir? que podemos hacer?</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Mientras el medio afectado se cuestiona as&iacute; mismo, un Plan de Acci&oacute;n para proteger periodistas, propuesto por mesas de trabajo del foro sobre Libertad de Expresi&oacute;n, era le&iacute;do por Ricardo Trotti, de la Sociedad Interamericana de Prensa.&nbsp;</span></span></p>
</div>
<p>
&nbsp;</p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-08-13 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-04 00:00:00',
				'updated_at' => '2013-02-04 22:22:00',
			),
			70 => 
			array (
				'id' => 97,
				'title' => 'Alcalde de Trujillo obstruye la labor periodística de reportero',
				'number' => '0071',
				'mes_id' => 8,
				'year' => 2012,
				'departamentos_id' => 2,
				'municipios_id' => 9,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">Miguel Dub&oacute;n, periodista en el municipio de Trujillo, departamento de Col&oacute;n, denunci&oacute; ante el Comit&eacute; por la Libre Expresi&oacute;n (C-Libre), ser objeto de agresiones, hostigamiento judicial y censura por parte del Alcalde Municipal, Jos&eacute; Antonio La&iacute;nez.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Dub&oacute;n, cuenta con 13 a&ntilde;os de experiencia en el ejercicio del periodismo y&nbsp; actualmente es el director del &ldquo;Noticiero Independiente&rdquo;, un espacio informativo transmitido de lunes a viernes por canal 12 (cablevisi&oacute;n Cristales). El comunicador tambi&eacute;n se desempe&ntilde;a como corresponsal de Radio Globo.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n Dub&oacute;n las agresiones a la libertad de prensa provenientes del edil se deben al abordaje de temas sobre la trasparencia en el manejo de los fondos p&uacute;blicos. &ldquo;El alcalde no tiene ning&uacute;n respeto por la libertad de prensa, por ser una persona intolerante a las cr&iacute;ticas&rdquo;, expres&oacute; el afectado.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Una de la criticas m&aacute;s recientes fue &ldquo;difundir p&uacute;blicamente, que a los empleados de la corporaci&oacute;n municipal les sacaba dinero de su salario como aportaci&oacute;n para financiar su campa&ntilde;a pol&iacute;tica para la reelecci&oacute;n a la alcald&iacute;a por parte del movimiento azules unidos del presidenciable Juan Orlando Hern&aacute;ndez&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">En su declaraci&oacute;n a C-Libre, Dub&oacute;n narra que &eacute;l edil lo llev&oacute; ante los juzgados locales para que revelara el nombre de la fuente que le facilita la informaci&oacute;n interna de la alcald&iacute;a. Por otra parte denunci&oacute; que en una ocasi&oacute;n, mientras&nbsp; conversaba con unos j&oacute;venes, el alcalde casi lo atropella con su veh&iacute;culo.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Hace cuatro meses tuve que retirar mi programa de Estereo Casillas, debido a que el alcalde presion&oacute; al propietario de la estaci&oacute;n radial&rdquo;. Tambi&eacute;n destac&oacute; haber sido objeto de diversas agresiones, f&iacute;sicas y verbales, por parte de empleados de la corporaci&oacute;n municipal, &ldquo;los env&iacute;an a agredirme para que yo reaccion&eacute; con violencia y otros empleados est&aacute;n con c&aacute;maras listos para filmarme y con ello desprestigiarme&rdquo;, asegur&oacute;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Ante la grave denuncia del periodista, C-Libre intent&oacute; dialogar con el alcalde Jos&eacute; Antonio La&iacute;nez, pero sus empleados nos comunicaron, en repetidas ocasiones, que &eacute;l devolver&iacute;a las llamadas, comunicaci&oacute;n que no se concreto. &nbsp;&nbsp;</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-08-15 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-08 00:00:00',
				'updated_at' => '2013-02-08 19:02:00',
			),
			71 => 
			array (
				'id' => 98,
				'title' => 'Periodista y defensor del medio ambiente temen por su vida',
				'number' => '0072',
				'mes_id' => 8,
				'year' => 2012,
				'departamentos_id' => 1,
				'municipios_id' => 1,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">Roberto Garc&iacute;a corresponsal de Radio Progreso y el micro empresario Cesar Alvarenga, miembros del Movimiento Amplio Por la Dignidad y la Justicia responsabilizan a pol&iacute;ticos y empresarios mineros del sector de Tela y Arizona, departamento de Atl&aacute;ntida, de ser los autores de las amenazas e intimidaciones en su contra, debido a &nbsp;su lucha contra la instalaci&oacute;n de las compa&ntilde;&iacute;as mineras en esa zona litoral.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Garc&iacute;a y Alvarenga, revelaron a C-Libre, que el actual alcalde del municipio de Tela, David Zacaro; Armando Ram&iacute;rez, coordinador de campa&ntilde;a del movimiento pol&iacute;tico &ldquo;Azules Unidos&rdquo;, que postula al actual presidente del Congreso Nacional, Juan Orlando Hern&aacute;ndez, a la presidencia de la Rep&uacute;blica y Lenir P&eacute;rez, empresario minero y supuesto yerno del empresario &nbsp;Miguel Facusse son los responsables del &quot;an&oacute;nimo&quot; d&oacute;nde se les amenaza de muerte.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n los afectados, el pasado viernes (17 de agosto) dos hombres les entregaron, en la &nbsp;terminal de buses propiedad de Cesar Alvarenga, un manuscrito donde se les exige desistir de su prop&oacute;sito en contra de la instalaci&oacute;n de las compa&ntilde;&iacute;as mineras.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Alvarenga asegur&oacute; que seg&uacute;n el reporte de las personas que se encontraban en el punto de buses, los hombres de edad mediana preguntaron por &eacute;l y mientras esperaban su llegada dejaban mostrar las armas que portaban como un mecanismo de intimidaci&oacute;n. &ldquo;Yo creo que si hubiese llegado en ese momento me hubieran matado pues ese mismo d&iacute;a llegaron a mi casa por horas de la noche y al no encontrar a nadie, solamente se llevaron una cajetilla de cigarros&rdquo;, cont&oacute; Alvarenga.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Desde ya d&iacute;as sabemos que Lenir P&eacute;rez, utiliza a Armando Ram&iacute;rez como intermediario. El 2 de agosto me reun&iacute;, por insistencia de Armando, con Lenir, en una gasolinera a la salida de Tela. El prop&oacute;sito de Lenir era persuadirme para que yo a la vez convenciera a las comunidades de aceptar a las mineras, recuerdo que me dijo: &acute;Ustedes son pura m&hellip;. Yo les pongo electricidad en la zona y no me ayudan&acute;&rdquo;, precis&oacute; Alvarenga.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">En la conversaci&oacute;n, Alvarenga le hizo saber al empresario que el proyecto de electrificaci&oacute;n de 12 kil&oacute;metros en la zona de la comunidad de Florida, era ejecutado por la Alcald&iacute;a de Tela, &ldquo;pero Lenir me asegur&oacute; que &eacute;l le entrego al alcalde David Zacaro siete millones de lempiras, porque Zacaro le pidi&oacute; que le demostrara que era un empresario de verdad y no de malet&iacute;n&rdquo;, denunci&oacute; Alvarenga.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El comunicador Roberto Garc&iacute;a, asegur&oacute; que al &ldquo;destapar la olla&rdquo; (develar los hechos) y dar a conocer los nombres de los pol&iacute;ticos y empresarios que los han tratado de chantajear para que desistan de su lucha y que permitan la explotaci&oacute;n minera en 16 comunidades del departamento de Atl&aacute;ntida, sus vidas est&aacute;n en peligro, por lo que se hace necesario de la solidaridad de las organizaciones defensoras de los derechos humanos nacionales e internacionales.</span></span></p>
<div>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El 27 de julio de 2011, C-Libre emiti&oacute; una alerta donde el periodista radial denunciaba ser objeto de amenazas y agresiones suscitadas a ra&iacute;z de sus reportajes donde denunciaba las anomal&iacute;as en la otorgaci&oacute;n de concesiones para la explotaci&oacute;n de los recursos naturales de la zona.</span></span></p>
</div>
<p>
&nbsp;</p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-08-21 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-08 00:00:00',
				'updated_at' => '2013-02-08 19:02:00',
			),
			72 => 
			array (
				'id' => 99,
				'title' => 'Por cobertura periodística y denunciar anomalías, reportero es acusado de sedición por la empresa Aguas de Choloma   ',
				'number' => '0073',
				'mes_id' => 8,
				'year' => 2012,
				'departamentos_id' => 5,
				'municipios_id' => 63,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">Temeroso por su vida el reportero televisivo de la ciudad de Choloma departamento de Cort&eacute;s, Alex Roberto Sabill&oacute;n Ch&aacute;vez realiz&oacute; un largo viaje hasta Tegucigalpa para denunciar ante C-Libre, una campa&ntilde;a de intimidaci&oacute;n, de agresiones y amenazas a muerte por desconocidos enviados seg&uacute;n el afectado por el gerente de la empresa mercantil &quot;Aguas de Choloma&quot;, Alexis Garc&iacute;a.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&nbsp;Durante el viaje de regreso a su comunidad, el comunicador fue notificado v&iacute;a celular, por el Jefe de Recursos Humanos de canal 10 Multicanal, que agentes de la Direcci&oacute;n General de Investigaci&oacute;n Criminal (DGIC) de la ciudad de San Pedro Sula, dejaron un Acta de Citaci&oacute;n en la que se le obliga a presentarse a esa dependencia el lunes 27 de agosto a las 9:30 de la ma&ntilde;ana, para responder supuestamente por el delito de sedici&oacute;n, seg&uacute;n acusaci&oacute;n interpuesta por Aguas de Choloma.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n el comunicador, las acciones anteriores por parte de la empresa privada, que administra un recurso natural p&uacute;blico, como lo es el agua, responde a las denuncias que la comunidad realiza por su medio de comunicaci&oacute;n en contra de la instalaci&oacute;n de micro medidores por parte de la empresa proveedora de agua. &quot;La gente empez&oacute; a quitar y destruir los medidores y al ver que yo les di cobertura al suceso, empezaron a enviarme una serie de documentos que evidencian actos de corrupci&oacute;n a lo interno de Aguas de Choloma. Las denuncias de viva vos, son constantes, eso ha desatado una serie de intimidaciones en mi contra&quot;, narro el afectado.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&quot;Me env&iacute;an a desconocidos a decirme; Alex te van a matar o ya te van a demandar. Despu&eacute;s de una caminata en apoyo a mi persona el s&aacute;bado pasado (18 de agosto), me hicieron llegar, con un joven en bicicleta, un documento que se supone es el borrador de una denuncia que se present&oacute; ante la fiscal&iacute;a y donde Aguas de Choloma me acusa de sedici&oacute;n&quot;, inform&oacute; Sabill&oacute;n.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El reportero de canal 10 Multicanal, asegur&oacute; que la justicia local esta coludida con &quot;los poderosos&quot;. El periodista ejemplificando esta denuncia nos manifest&oacute; que ha interpuesto denuncias por agresiones y amenazas a muerte ante la Fiscal&iacute;a, pero que nunca se han hecho&nbsp; investigaciones, mucho menos justicia. &quot;Hace un a&ntilde;o un polic&iacute;a municipal me puso la pistola en la sien, mi camar&oacute;grafo lo grab&oacute; y yo con las im&aacute;genes fui a poner la denuncia ante la fiscal&iacute;a y hasta la fecha, jam&aacute;s se han comunicado conmigo y el polic&iacute;a sigue tranquilo en la calle trabajando&quot;, testific&oacute;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&quot;Todos los d&iacute;as recibo mensajes de texto en mi celular en donde me dicen que me van a matar. Tambi&eacute;n recibo llamadas donde me dicen que tengo que negociar con Aguas de Choloma, o en la calle me gritan Alex te van a matar te andan buscando para fregarte, ese es mi diario vivir desde hace unos seis meses.&quot; Lament&oacute;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Tambi&eacute;n declar&oacute; que interpuso una denuncia por amenazas a muerte, contra el regidor Alexander Mej&iacute;a, ante la DGIC de Choloma pero no hubo respuesta alguna de este ente del Estado.&nbsp;&nbsp;</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&quot;Soy un periodista que vivo de mi salario como reportero, no cobro publicidad a nadie. Lo &uacute;nico que quiero es que el gobierno me garantice el libre ejercicio de mi profesi&oacute;n y mi integridad f&iacute;sica, yo practico el periodismo comunitario, de denuncia fehaciente, pues lo hago con las pruebas necesarias. Hacer un periodismo &eacute;tico y apegado a&nbsp; la verdad me ha costado el marginamiento por parte de los pol&iacute;ticos municipales&quot;, concluy&oacute; Sabill&oacute;n.</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-08-24 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-08 00:00:00',
				'updated_at' => '2013-02-08 19:05:00',
			),
			73 => 
			array (
				'id' => 100,
				'title' => 'Reportero se refugia en estación policial para salvaguardar su vida',
				'number' => '0074',
				'mes_id' => NULL,
				'year' => 2012,
				'departamentos_id' => 5,
				'municipios_id' => 63,
				'body' => '<p>
<span style="text-align: justify;">Ante el temor de ser asesinado, despu&eacute;s de haber acudido a una audiencia acusado por el delito de sedici&oacute;n por ejecutivos de Aguas de Choloma, el reportero de televisi&oacute;n, Alex Roberto Sabill&oacute;n Ch&aacute;vez, paso la noche de ayer (lunes 27 de agosto), refugiado en la estaci&oacute;n policial de la ciudad de Choloma, departamento de Cort&eacute;s.</span></p>
<p style="text-align: justify;">
Horas despu&eacute;s de su declaraci&oacute;n, el lunes 27 de agosto, ante la Direcci&oacute;n General de Investigaci&oacute;n Criminal (DGIC) de la ciudad de San Pedro Sula, Sabill&oacute;n fue advertido por un hombre que se conduc&iacute;a en bicicleta, que lo&nbsp; iban a asesinar.</p>
<p style="text-align: justify;">
Ese mismo d&iacute;a, Sabill&oacute;n denunci&oacute; a C-Libre, v&iacute;a telef&oacute;nica, ser objeto de seguimiento e intimidaci&oacute;n, &nbsp;&ldquo;tengo la sensaci&oacute;n de que me est&aacute;n persiguiendo y se ha difundido un globo sonda (rumor), de que me han secuestrado&rdquo;. Referente a lo anterior a las 5:41 de la tarde, el reportero nos envi&oacute; el siguiente mensaje de texto: &ldquo;Solo le comunico ke yo se ke tengo las horas contadas, hoy me mandaron un emisario a decirme ke me van a matar. Responsabilizo al se&ntilde;or alexis garcia&rdquo;.</p>
<p style="text-align: justify;">
Debido a la gravedad de las amenazas, Sabill&oacute;n &nbsp;solicit&oacute; al Jefe de la Polic&iacute;a Preventiva de la ciudad de Choloma, Encarnaci&oacute;n Guerra, le permitiera pasar la noche en la estaci&oacute;n policial bajo su custodia.</p>
<p style="text-align: justify;">
Al d&iacute;a siguiente (martes 28 de agosto) fue trasladado con escolta policial a su casa de habitaci&oacute;n. Luego el reportero interpuso ante la DGIC de la ciudad de Choloma una denuncia en contra de la empresa mercantil Aguas de Choloma y de su gerente Alexis Garc&iacute;a, por ser seg&uacute;n Sabill&oacute;n, los responsables de las amenazas a muerte en su contra.</p>
<p style="text-align: justify;">
C-Libre emiti&oacute; el 24 de agosto la alerta &ldquo;Por cobertura period&iacute;stica y denunciar anomal&iacute;as, reportero es acusado de sedici&oacute;n por la empresa Aguas de Choloma&rdquo;, en donde Sabill&oacute;n denunci&oacute; que dicha empresa lo acus&oacute; ante la DGIC por actos de sedici&oacute;n.</p>
<p style="text-align: justify;">
En esta primera declaraci&oacute;n tambi&eacute;n denunci&oacute; ser v&iacute;ctima de una campa&ntilde;a de intimidaci&oacute;n, de agresiones y amenazas a muerte por desconocidos, enviados por Alexis Garc&iacute;a.&nbsp;</p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-08-28 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-01-09 00:00:00',
				'updated_at' => '2013-01-10 00:48:00',
			),
			74 => 
			array (
				'id' => 101,
				'title' => 'Portavoz de campesinos denuncia ser víctima de persecución policial y militar',
				'number' => '0075',
				'mes_id' => 8,
				'year' => 2012,
				'departamentos_id' => 2,
				'municipios_id' => 9,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">Vitalino &Aacute;lvarez, portavoz del Movimiento Unificado Campesino del Aguan (MUCA), denunci&oacute; a su salida de la posta policial de la ciudad de Tocoa, departamento de Col&oacute;n, donde se encontraba detenido, que debido a su rol como vocero de la problem&aacute;tica campesina en el Bajo Aguan, se ha convertido en v&iacute;ctima de persecuci&oacute;n por parte de elementos militares y policiales.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;No me voy a ir del pa&iacute;s porque lo amo&rdquo;, dijo con firmeza el comunicador. &ldquo;Tampoco me esconder&eacute; como rata porque desde el lunes pasado (20 agosto), los aparatos de seguridad del Estado me est&aacute;n acosando, pero no les voy a dar el gusto de irme de mi patria y desde ya les digo que con matarme no van a lograr absolutamente nada&rdquo;, manifest&oacute;, &Aacute;lvarez.</span></span></p>
<div>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El vocero del MUCA, narr&oacute; que el lunes frente a la Corte Suprema de Justicia en la ciudad capital del pa&iacute;s, elementos de la polic&iacute;a nacional le propinaron tres toletazos en las manos con la intenci&oacute;n de quebrarle la c&aacute;mara con la que tomaba fotograf&iacute;as a los agentes polic&iacute;acos que golpeaban a sus compa&ntilde;eros, pero que aun as&iacute; sigui&oacute; realizando su trabajo de cobertura informativa.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Al d&iacute;a siguiente, siempre en Tegucigalpa, me pegaron una pedrada, mientras filmaba el desarrollo de la toma de los campesinos de MUCA, luego que la Corte Suprema se negara a recibirnos y hablar sobre el tema agrario en el pa&iacute;s y el conflicto que se vive en la regi&oacute;n del Aguan&rdquo;, inform&oacute; &Aacute;lvarez.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El mi&eacute;rcoles 21 de agosto, cuando se trasladaba a la cooperativa La Confianza, fue arrestado y encarcelado junto a otros compa&ntilde;eros durante dos d&iacute;as en la posta policial de Tocoa. El domingo (26), &ldquo;me bajan de un taxi para pedirme la c&eacute;dula de identidad y al no portarla me acusan de extranjero y me encierran nuevamente&rdquo;, lament&oacute; el afectado.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Al respecto el dirigente campesino se pregunta &ldquo;&iquest;qu&eacute; desde cu&aacute;ndo se hacen estas cosas? Creo que es puras ganas de molestar, la verdad es que ya me tienen harto, pero no abandonare a mis compa&ntilde;eros ni mi tierra&rdquo;, asegur&oacute;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El 31 de enero del presente a&ntilde;o, C-Libre denunci&oacute; las amenazas y agresiones contra Vitalino &Aacute;lvarez y por consiguiente la situaci&oacute;n de riesgo que corre su vida.</span></span></p>
</div>
<p>
&nbsp;</p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-08-29 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-08 00:00:00',
				'updated_at' => '2013-02-08 19:07:00',
			),
			75 => 
			array (
				'id' => 102,
				'title' => 'Periodista y Sub Inspector Policial victima 33 del periodismo hondureño',
				'number' => '0076',
				'mes_id' => 8,
				'year' => 2012,
				'departamentos_id' => 8,
				'municipios_id' => 110,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">El Sub Inspector Policial y licenciado en periodismo, Julio Cesar Guifarro Casaleno de 30 a&ntilde;os de edad, uno de los voceros de la Direcci&oacute;n Nacional de Tr&aacute;nsito (DNT), se convirti&oacute; la noche del martes 28 de agosto en la victima n&uacute;mero 33 del periodismo Hondure&ntilde;o.</span></span></span></p>
<div>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Desconocidos, ultimaron a balazos al periodista Guifarro Casaleno, alrededor de las 9:30 de anoche, cuando se dirig&iacute;a a una pulper&iacute;a ubicada a escasos metros de su casa de habitaci&oacute;n en la colonia Cerro Grande Zona 2 en Comayag&uuml;ela, ciudad capital del pa&iacute;s. Un d&iacute;a antes de su asesinato, el portavoz policial hizo p&uacute;blicas las estad&iacute;sticas&nbsp; sobre la detenci&oacute;n y decomiso de veh&iacute;culos y motocicletas a nivel nacional.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Guifarro Casaleno, actualmente se despe&ntilde;aba como vocero en la oficina de Relaciones P&uacute;blicas de Tr&aacute;nsito, desde donde brindaba diariamente el reporte del tr&aacute;fico vehicular de la ciudad capital y tambi&eacute;n era el conductor de un programa de televisi&oacute;n de la Polic&iacute;a Nacional en canal 66-Maya TV.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n las declaraciones del comisionado H&eacute;ctor Iv&aacute;n Mej&iacute;a, &nbsp;testigos oculares aseguraron que dos individuos armados abordaron a la v&iacute;ctima y sin mediar palabras dispararon en su contra, quit&aacute;ndole la vida en el acto.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El ahora occiso es egresado de la Escuela de Periodismo de la Universidad Nacional Aut&oacute;noma de Honduras (UNAH), y en mayo de este a&ntilde;o egreso como subinspector en el &aacute;rea de Comunicaciones del Centro de Instrucci&oacute;n Policial (CIP), con sede en La Paz, La Paz.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Durante el a&ntilde;o 2012, &nbsp;C-Libre ha registrado el asesinato de nueve comunicadores sociales a nivel nacional: Sayda Almendarez (22), Fausto Elio Hern&aacute;ndez (58), Noel Alexander Valladares (28), Erick Mart&iacute;nez &Aacute;vila (32), &Aacute;ngel Villatoro (49), Adonis Bueso (24), Jos&eacute; Noel Canales (34) y Julio Cesar Guifarro Casaleno (30).</span></span></p>
</div>
<p>
&nbsp;</p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-08-29 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-08 00:00:00',
				'updated_at' => '2013-02-08 19:08:00',
			),
			76 => 
			array (
				'id' => 103,
				'title' => 'Magistrados del Poder Judicial obstruyen labor periodística.',
				'number' => '0077',
				'mes_id' => 9,
				'year' => 2012,
				'departamentos_id' => 8,
				'municipios_id' => 110,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">Magistrados de la Corte Suprema de Justicia (CSJ), &nbsp;ordenaron a los guardias de seguridad de ese organismo, impedir el ingreso de periodistas a la presentaci&oacute;n de un Recurso de Inconstitucionalidad en contra de las Ciudades Modelos por parte de diversas organizaciones de la ciudad capital, la ma&ntilde;ana del d&iacute;a cinco de septiembre.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Miembros de la prensa nacional denunciaron, que por un periodo aproximado de dos horas el poder judicial a trav&eacute;s de su m&aacute;xima representaci&oacute;n los mantuvo &ldquo;secuestrados&rdquo; y &nbsp;&ldquo;limitados&rdquo; al negarles&nbsp; la entrada y salida al edificio de la CSJ.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n Eleana Borjas, reportera de conexihion.info, ella fue una de las pocas periodistas que pudo ingresar al edificio sin ning&uacute;n problema, pero minutos despu&eacute;s de manera repentina el guardia de seguridad les dijo que por instrucciones superiores ya no se pod&iacute;a dejar entrar ni salir a nadie incluidos los periodistas y abogados.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Junto al coordinador de Radio Gualcho, tuvimos que ayudar a la colega, Fidelina Sandoval de Globo TV, quien se salto el muro para poder realizar su trabajo period&iacute;stico, unos guardias la empujaron para evitar su ingreso, pero la gente grito y ellos desistieron&rdquo;, narr&oacute; Borjas. &ldquo;tuve que auxiliarla con el micr&oacute;fono para que ella filmar&aacute;, porque a su&nbsp; camar&oacute;grafo no lo dejaron saltar&rdquo;, concluy&oacute; la comunicadora.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Otra de las periodistas afectadas fue Gilda Silvestrucci, corresponsal en Tegucigalpa de Radio Progreso, quien dijo que la actitud de lis magistrados de la CSJ, &ldquo;es un nuevo atentado contra la libertad de expresi&oacute;n, la libre emisi&oacute;n del pensamiento y&nbsp; el derecho de circulaci&oacute;n&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n uno de los oficiales que encabezaba un grupo de polic&iacute;as y militares que bloquearon la entrada a la CSJ, su presencia respond&iacute;a al llamado, por parte de autoridades de dicho poder estatal, para preservar el orden p&uacute;blico. No obstante el n&uacute;mero de personas que interpusieron el recurso no superaba las 20.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Por su parte el abogado Jary Dixon Herrera de la Asociaci&oacute;n de Juristas por el Estado de Derecho, manifest&oacute; que &ldquo;este es el primer ejemplo de lo que ser&aacute;n las ciudades modelo. Aqu&iacute; un muro separa a la sociedad hondure&ntilde;a, esto evidencia que lo que pierde el Estado con la venta del pa&iacute;s, es nada menos que su soberan&iacute;a&rdquo;.</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-09-05 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-08 00:00:00',
				'updated_at' => '2013-02-08 19:09:00',
			),
			77 => 
			array (
				'id' => 104,
				'title' => 'Periodista radial denuncia acciones intimidatorias en su contra',
				'number' => '0078',
				'mes_id' => 9,
				'year' => 2012,
				'departamentos_id' => 5,
				'municipios_id' => 63,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">Eduardo Coto Barnica, periodista de la emisora Radio Uno de la ciudad de San Pedro Sula, departamento de Cort&eacute;s, denunci&oacute; ante el Comit&eacute; por la Libre Expresi&oacute;n (C-libre), que el jueves (6 de septiembre) un desconocido trat&oacute; de intimidarlo en el parque central a eso de las 7:30 de la noche, amedrent&aacute;ndole con un objeto oculto debajo de su camisa, el que se presume era una pistola.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Al cuestionarle del porque de la intimidaci&oacute;n hacia su persona, el periodista contest&oacute;, que &ldquo;todo se debe a mi posici&oacute;n beligerante y cr&iacute;tica frente al golpe de Estado ocasionado en junio del 2009, adem&aacute;s porque en el espacio de 11:00 a 12:00 del mediod&iacute;a, hora en que se transmite el noticiero de la radio abordamos temas de inter&eacute;s pol&iacute;tico, social y econ&oacute;mico de forma muy cr&iacute;tica&rdquo;, sostuvo.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Coto Barnica, afirm&oacute; que este tipo de incidentes en su contra datan desde el a&ntilde;o de 1992, cuando tuvo que salir del pa&iacute;s hacia Espa&ntilde;a, debido a que el Batall&oacute;n 3-16 le mont&oacute; una persecuci&oacute;n, al enterarse que &eacute;l&nbsp; film&oacute; en calidad de reportero de Canal 6, justo en el momento cuando era acribillado a balazos el empresario Eduardo Pi&ntilde;a Van Tuyl&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El reportero record&oacute; que un elemento de la antigua Direcci&oacute;n Nacional de Investigaci&oacute;n (DNI), le quit&oacute; la vida por equivocaci&oacute;n, al confundirlo con su persona, al vigilante Pedro Rosales de la emisora HRN. &ldquo;Ese d&iacute;a vest&iacute;amos ropa del mismo color y su muerte fue en reacci&oacute;n a mi trabajo period&iacute;stico.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Tambi&eacute;n hace un a&ntilde;o, &ldquo;dos individuos armados a bordo de una motocicleta me esperaban en el punto donde me deja el autob&uacute;s, pero logre esquivarlos y llegar a mi casa sin problemas, mi sorpresa fue, que media hora despu&eacute;s, los mismos hombres estuvieron pasando frente a mi casa, por lo que ped&iacute; apoyo a la polic&iacute;a, quienes llegaron dos horas despu&eacute;s, pero al menos llegaron&rdquo;, dijo preocupado Coto.</span></span></p>
<div>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El veterano periodista concluy&oacute; su denuncia indicando que &ldquo;tenemos que buscar una forma de protegernos, considerando que la situaci&oacute;n se pondr&aacute; peor para los periodistas del pa&iacute;s&rdquo;.</span></span></p>
</div>
<p>
&nbsp;</p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-09-12 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-08 00:00:00',
				'updated_at' => '2013-02-08 19:10:00',
			),
			78 => 
			array (
				'id' => 105,
				'title' => 'Continúa intimidaciones contra reportero',
				'number' => '0079',
				'mes_id' => 9,
				'year' => 2012,
				'departamentos_id' => 5,
				'municipios_id' => 63,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">Alex Sabill&oacute;n, reportero de &ldquo;Multidata&rdquo; en la ciudad de Choloma, departamento de Cort&eacute;s, fue v&iacute;ctima nuevamente de intimidaciones y obstrucciones a su trabajo informativo por parte de empleados de la empresa mercantil &ldquo;Aguas de Choloma&rdquo;, mientras daba cobertura a la devoluci&oacute;n de micromedidores por parte de pobladores.</span></span></span></p>
<div>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Los ataques en contra del reportero, ocurrieron el d&iacute;a martes 11 de septiembre, frente a las oficinas de &ldquo;Aguas de Choloma&rdquo;, cuando unas 80 personas residentes de la Colonia Canad&aacute;, se apersonaron para devolver varios micromedidores a la empresa prestadora de agua de dicha ciudad.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El reportero, en el ejercicio de su profesi&oacute;n, grabo las im&aacute;genes, lo que molest&oacute; a varios empleados, de la mencionada empresa, quienes insultaron a Sabill&oacute;n al tiempo de fotografiarle mientras realizaba su trabajo.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&nbsp;&ldquo;Me gritaban, por tu culpa nos se&ntilde;alan de ma&ntilde;osos y nos dicen que somos corruptos. Otros, me tapaban con sus manos el lente de mi c&aacute;mara fotogr&aacute;fica.&nbsp; Ante tales acciones les dije que yo simplemente hacia mi trabajo de informar, por lo que tuvo que intervenir la Polic&iacute;a Nacional, para que me dejaran trabajar&rdquo;, detall&oacute; Sabill&oacute;n.&nbsp; <a href="http://www.facebook.com/video/video.php?v=330074777089071">http://www.facebook.com/video/video.php?v=330074777089071</a></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Por otra parte asegur&oacute; que debido a las agresiones de los empleados de Aguas de Choloma, se vio obligado a grabarlos como una medida de seguridad.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Actualmente Alex Sabill&oacute;n, cuenta con medidas de seguridad otorgadas por la Secretaria de Seguridad debido a las amenazas a muerte por parte de desconocidos, quienes seg&uacute;n el reportero son enviados por Alexis Garc&iacute;a, gerente de &ldquo;Aguas de Choloma&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">En el mes de agosto de este a&ntilde;o, empresarios de Aguas de Choloma, interpusieron&nbsp; una demanda en contra del periodista, ante la Direcci&oacute;n General de Investigaci&oacute;n Criminal (DGIC) de la ciudad de San Pedro Sula por el delito de sedici&oacute;n.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Durante el presente a&ntilde;o C-Libre ha emitido cuatro alertas que revelan diversas agresiones en contra del reportero.</span></span></p>
</div>
<p>
&nbsp;</p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-09-13 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-08 00:00:00',
				'updated_at' => '2013-02-08 19:11:00',
			),
			79 => 
			array (
				'id' => 106,
				'title' => 'Previo a su asesinato: El abogado Antonio Trejo solicitó ayuda y protección a la Secretaria de Justicia y Derechos Humanos ',
				'number' => '0080',
				'mes_id' => 9,
				'year' => 2012,
				'departamentos_id' => 8,
				'municipios_id' => 110,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">Ante las continuas amenazas a muerte, persecuciones y atentados en su contra, el apoderado legal del Movimiento Aut&eacute;ntico Reivindicador del Agu&aacute;n (MARCA), Antonio Trejo Cabrera de 41 a&ntilde;os de edad, solicit&oacute; meses antes de su asesinato protecci&oacute;n y apoyo a la Sectretaria de Justicia y Derechos Humanos (SJDH).</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n el procurador de derechos humanos, Leonel Casco, el abogado Trejo asesinado con arma de fuego por desconocidos en los predios de una iglesia la ciudad de Tegucigalpa, el 22 de septiembre, se aperson&oacute; en dos ocasiones a la SJDH &nbsp;y le solicit&oacute; a la Ministra Ana Pineda ayuda para salvaguardar su vida.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&quot;La fiscal&iacute;a tendr&aacute; que solicitarle a la Ministra Ana Pineda, el expediente del abogado Antonio Trejo, pues sin lugar a dudas ser&aacute; de mucha utilidad en la investigaci&oacute;n para dar con los responsables de su asesinato&quot;, detall&oacute; Casco.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Por otra parte tambi&eacute;n se conoci&oacute; que en junio del 2011, el abogado Trejo solicit&oacute; medidas cautelares urgentes ante la Comisi&oacute;n Interamericana de Derechos Humanos y detall&oacute; los nombres de las personas que podr&iacute;an antentar contra su vida.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Dos d&iacute;as antes de su asesinato, el abogado Trejo se present&oacute; a una audiencia inicial junto a 20 campesinos acusados de participaci&oacute;n en manifestaciones il&iacute;citas, da&ntilde;os a la Corte Suprema de Justicia y portaci&oacute;n ilegal de Armas,&nbsp; el d&iacute;a 21 de agosto cuando realizaban una manifestaci&oacute;n pac&iacute;fica frente a la CSJ.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">En esa ocasi&oacute;n, Trejo se encontraba brindando declaraciones a varios medios de comunicaci&oacute;n que televisaron su arresto y el de m&aacute;s de 20 campesinos a quienes un Juez les dej&oacute; pendiente la resoluci&oacute;n hasta para el 05 de octubre.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Durante una protesta en el mes de junio, el abogado denunci&oacute; ser v&iacute;ctima de amenazas a muerte y persecuci&oacute;n por lo que hizo p&uacute;blica la denuncia que responsabilizaba de su muerte a &nbsp;los terratenientes Miguel Facuss&eacute; Barjum y Ren&eacute; Morales.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El jurista segu&iacute;a el curso de una resoluci&oacute;n pendiente de un recurso de amparo presentado por terratenientes y emitido por la Corte de Apelaciones de Francisco Moraz&aacute;n y la de La Ceiba, por la sentencia dictada por el Juzgado de Letras de Tegucigalpa a favor de las familias campesinas, el pasado 29 de junio.&nbsp;</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-09-24 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-08 00:00:00',
				'updated_at' => '2013-02-08 19:12:00',
			),
			80 => 
			array (
				'id' => 107,
				'title' => 'Periodista del MUCA es sentenciada a muerte a través de mensajes de texto ',
				'number' => '0081',
				'mes_id' => 9,
				'year' => 2012,
				'departamentos_id' => 8,
				'municipios_id' => 110,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">El Comit&eacute; de Familiares de Detenidos y Desaparecidos de Honduras (Cofadeh), hizo p&uacute;blicos los mensajes de texto en donde desconocidos sentencian a muerte a la periodista hondure&ntilde;a del Movimiento Unificado Campesino del Agu&aacute;n, (MUCA), Karla Zelaya.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Entre los mensajes se destacan:</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&quot;Aja perra bastarda pensasr q se abian dsacid d mi, pero&nbsp; aki estoi y te sigo d serkita&quot;, dice una de las amenazas recibidas. Otros dos&nbsp; mensajes expresan : &quot;Perra te bas a morir, berdad q te asustaste&quot;. &quot;vos y tus amig se van a morir boy a comensar cn vos&quot;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Asi van a kedar todos los q ablen mas de la cuenta asi com esa perra anda abriendo la voca, cu&iacute;dense las espaldas&rdquo;, se&ntilde;ala uno de los textos. Cada mensaje fue enviado de un n&uacute;mero celular distinto.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&nbsp;&ldquo;buenos d&iacute;as, cu&iacute;dense las espaldas mui pront les dare una sorpresa k lamentar&aacute;n&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n Zelaya, los mensajes se reactivaron el 20 de septiembre pasado, dos d&iacute;as antes del asesinato del abogado Antonio Trejo y el segundo d&iacute;a de la audiencia inicial de 25 campesinos acusados de participaci&oacute;n en manifestaciones il&iacute;citas, da&ntilde;os a la Corte Suprema de Justicia y portaci&oacute;n ilegal de Armas, durante una manifestaci&oacute;n el d&iacute;a 21 de agosto.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Los campesinos y campesinas llegaron a la capital a denunciar ante la CSJ que una sentencia que hab&iacute;a resuelto devolverles las tierras a las cooperativas aglutinadas en el Movimiento Aut&eacute;ntico Reivindicador Campesino del Agu&aacute;n, (MARCA), hab&iacute;a sido revertida ilegalmente a trav&eacute;s de acciones de los terratenientes Miguel Facuss&eacute; y Ren&eacute; Morales.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Precisamente, en esta oportunidad fueron arrestados el reci&eacute;n asesinado abogado Antonio Trejo, quien hasta ese entonces fung&iacute;a como apoderado legal del Movimiento Aut&eacute;ntico Reivindicador del Agu&aacute;n (MARCA) y que fue muerto de varios disparos el pasado 22 de septiembre.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Ese d&iacute;a cuando la periodista del MUCA documentaba los hechos sobre la represi&oacute;n y detenciones contra campesinos, un grupo de agentes de la Polic&iacute;a la golpearon en la posta policial de Bel&eacute;n (Cuarta estaci&oacute;n).</span></span></p>
<p>
&nbsp;</p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-09-28 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-08 00:00:00',
				'updated_at' => '2013-02-08 19:14:00',
			),
			81 => 
			array (
				'id' => 108,
				'title' => 'Por razones de seguridad: periodista renuncia a su empleo',
				'number' => '0082',
				'mes_id' => 9,
				'year' => 2012,
				'departamentos_id' => 8,
				'municipios_id' => 110,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">Por razones de seguridad personal, el periodista Edgardo Antonio Escoto Amador, mejor conocido como &quot;El Wacho&quot;, renunci&oacute; a la empresa televisora Hondured.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El periodista hizo p&uacute;blica una denuncia que evidencia una situaci&oacute;n laboral de sabotaje, intimidaci&oacute;n y da&ntilde;os a la moral dentro de la empresa televisiva por parte del productor general Cesar Romero, quien seg&uacute;n Escoto llega al extremo de afirmar que &ldquo;A los periodistas solo asesinados&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Escoto asever&oacute;, &ldquo;Por razones de exclusiva seguridad y por lo peligro que es el se&ntilde;or Romero, me voy del canal por la puerta principal, pero dejo constancia ante los entes competentes del Estado, organismos nacionales e internacionales y ante el p&uacute;blico que nos brindaba su privilegio de seguirnos en la televisi&oacute;n los motivos de mi renuncia y de sufrir cualquier atentado el responsable es Cesar Romero&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&nbsp;&ldquo;El se&ntilde;or Romeo, es experto en boicotear transmisiones empez&oacute; afectando mi trabajo desde hace un a&ntilde;o y&nbsp; a recibir amenazas en su oficina mostrando su arma de quien siempre manifiesta que&nbsp; no la anda de juguete ni mucho menos de adorno&rdquo;, denunci&oacute; el reportero Escoto.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n el periodista, hay otros motivos por los cuales todos los periodistas que laboran en dicha empresa consideran que el productor Romero es una persona peligrosa y que cumple con sus amenazas, &ldquo;es una persona que se ufana de sentir orgullo por su amistad con el ex capit&aacute;n Billy Joya Amendola, ex oficiales de la Polic&iacute;a y de las Fuerzas Armadas de Honduras&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Por otra parte durante una transmisi&oacute;n en vivo del programa televisivo &ldquo;Mi Naci&oacute;n&rdquo;, su director, Julio Ernesto Alvarado denunci&oacute; amenazas e intimidaci&oacute;n por parte del productor de Hondured Cesar Romero.</span></span></p>
<div>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">En dicha ocasi&oacute;n el se&ntilde;or Romero, se aperson&oacute; a los estudios de Globo TV, donde se transmit&iacute;a completamente en vivo el noticiario &ldquo;Mi Naci&oacute;n&rdquo;, para desmentir las acusaciones, pero el periodista Alvarado asegur&oacute; tener evidencias que respaldaban su denuncia.</span></span></p>
</div>
<p>
&nbsp;</p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-09-28 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-08 00:00:00',
				'updated_at' => '2013-02-08 19:14:00',
			),
			82 => 
			array (
				'id' => 109,
				'title' => 'Orden de captura obliga a periodista a permanecer oculta durante tres días',
				'number' => '0083',
				'mes_id' => 10,
				'year' => 2012,
				'departamentos_id' => 6,
				'municipios_id' => 75,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">Debido a una orden de captura emitida por el Tribunal de Sentencia de la zona sur del pa&iacute;s, el d&iacute;a martes dos de octubre, la periodista Elizabeth Zuniga, directora del programa radial &ldquo;Hechos y Noticias&rdquo;, se vio en la necesidad de permanecer oculta durante tres d&iacute;as.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Cuando una fuente de mi entera confianza me dijo que a la Direcci&oacute;n General de &nbsp;Investigacion Criminal (D.G.I.C.) hab&iacute;a llegado una orden de captura en mi contra, pens&eacute; que era una broma, pero cuando verifiqu&eacute; dicha informaci&oacute;n no supe que hacer y decid&iacute;, tal cual delincuente, esconderme y ocultarme hasta de mi propia familia porque sent&iacute; mucho miedo e impotencia, pues sab&iacute;a que era en consecuencia de mi trabajo como periodista&rdquo;, relat&oacute; Zuniga.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n se constata en el expediente de Casaci&oacute;n Penal S.P. No. 61-2009, en el a&ntilde;o 2007 el entonces regidor de la Corporaci&oacute;n Municipal de Choluteca, Doctor Luis Alonzo Narvaez, interpuso una querella en contra de la periodista y catedr&aacute;tica universitaria, por comentarios emitidos a trav&eacute;s de su programa radial &ldquo;Hechos y Noticias&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seis a&ntilde;os despu&eacute;s, el 16 de agosto del 2012, la Sala de lo Penal de la Corte Suprema de Justicia, CSJ, por unanimidad de votos, resolvi&oacute; condenar, a un a&ntilde;o y cuatro meses de reclusi&oacute;n, a la se&ntilde;ora Elizabeth Zuniga Vargas, por el delito de &ldquo;Injurias Agravadas&rdquo;, en contra del ex regidor municipal, Luis Alonzo Narvaez.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Ante el veredicto de la CSJ, el Tribunal de Sentencia de Choluteca y Valle, emiti&oacute; el dos de octubre una orden de captura en contra de la periodista, misma que dejo sin valor ni efecto dos d&iacute;as despu&eacute;s (4 de octubre), dado que Zuniga se present&oacute; voluntariamente ante dicho ente de justicia.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><strong>Antecedentes</strong></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Resulta que la periodista Zuniga durante la emisi&oacute;n de su espacio radial del d&iacute;a 30 de abril de 2007, se refiri&oacute; a la existencia de funcionarios p&uacute;blicos ladrones en el departamento de Choluteca, &ldquo;que compraron bienes con el dinero del Estado&hellip;as&iacute; como el Doctor Narvaez&hellip;&rdquo;, expresiones que incomodaron al aludido.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Posteriormente el 18 de mayo de 2007 en la emisi&oacute;n del programa radial, seg&uacute;n reza en el referido expediente, la periodista asegur&oacute; que un amigo le coment&oacute; que un viejo pol&iacute;tico de Choluteca quer&iacute;a &ldquo;fregarla&rdquo;, porque le hab&iacute;a dicho casi ladr&oacute;n.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">La periodista tambi&eacute;n coment&oacute; en la trasmisi&oacute;n de su programa del d&iacute;a martes dos de octubre del 2007 que &ldquo;algunos periodistas est&aacute;n siendo intimidados, hay una escala en contra de los periodistas a nivel nacional&hellip; se trata de evitar los excesos que comenten algunos funcionarios y pol&iacute;ticos en Choluteca en el caso particular que he sido querellada por el ex regidor Narvaez, quien aduce que en una oportunidad quise decirle ladr&oacute;n&hellip;&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Basado en lo anterior, los abogados de la parte acusadora demandaron a la periodista por los delitos de calumnias difamatorias, ocurridas durante tres diferentes programas radiales de los d&iacute;as; lunes 30 de abril, 18 de mayo y dos de octubre del a&ntilde;o 2007.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El 16 de noviembre del 2009, la periodista fue sentenciada a dos a&ntilde;os y ocho meses de presi&oacute;n, por considerarla responsable del delito de injurias constitutivas de difamaci&oacute;n. Pero el abogado defensor, interpuso un recurso de casaci&oacute;n por &nbsp;quebrantamiento de forma, en vista que el ex regidor como funcionario p&uacute;blico estaba sujeto al escrutinio p&uacute;blico y tambi&eacute;n por la mala utilizaci&oacute;n del termino &ldquo;presi&oacute;n&rdquo; para una sentencia de un juicio penal&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Actualmente la periodista se encuentra a la espera de una audiencia ante el Juzgado de Ejecuci&oacute;n del departamento de Choluteca para apelar al pago de una fianza y evitar as&iacute;, ir&nbsp; a prisi&oacute;n por haber hecho uso de la libertad de expresi&oacute;n, denunciando, seg&uacute;n la afectada, el enriquecimiento il&iacute;cito de un funcionario p&uacute;blico.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">En su vida profesional la periodista Elizabeth Zuniga, recibi&oacute; en el a&ntilde;o 2007, por su labor informativa, un reconocimiento por parte del Congreso Nacional de la Rep&uacute;blica, y en el a&ntilde;o 1999 una medalla de oro a la mejor corresponsal por parte del Diario El Heraldo.</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-10-05 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-08 00:00:00',
				'updated_at' => '2013-02-08 19:15:00',
			),
			83 => 
			array (
				'id' => 110,
				'title' => 'Decreto Ejecutivo criminaliza la libertad de expresión, manifestación y protesta',
				'number' => '0084',
				'mes_id' => 10,
				'year' => 2012,
				'departamentos_id' => 8,
				'municipios_id' => 110,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">&ldquo;El autoritarismo dictatorial del Presidente Lobo Sosa lo conlleva a criminalizar v&iacute;a decreto ejecutivo, derechos universales como la manifestaci&oacute;n y protesta, pero sobretodo el derecho a la libre expresi&oacute;n de maestros, alumnos y padres de familia&rdquo;, denunci&oacute; el Secretario General del Primer Colegio Profesional Hondure&ntilde;o de Maestros (Pricphma), Orlando Mej&iacute;a.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El pol&eacute;mico decreto fue aprobado en Consejo de Ministros del 9 de octubre de 2012 y est&aacute; anunciado en la p&aacute;gina web de Casa de Gobierno.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Mej&iacute;a tambi&eacute;n expres&oacute; que el accionar del gobierno de la &ldquo;reconciliaci&oacute;n nacional, no es m&aacute;s que un distractor para no resolver la verdadera problem&aacute;tica educativa, como la falta de pagos salariales, el incumplimiento de la matricula gratis en los centros educativos, la p&eacute;rdida de conquistas y el robo a nuestra jubilaci&oacute;n, por ello no claudicaremos y continuaremos ejerciendo nuestro derecho a la protesta&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Por su parte, la Federaci&oacute;n de Organizaciones Magisteriales de Honduras (FOMH), convoc&oacute; a la realizaci&oacute;n de movilizaciones a nivel nacional para denunciar&nbsp; la persecuci&oacute;n pol&iacute;tica y la violaci&oacute;n a los derechos de libertad de expresi&oacute;n y de asociaci&oacute;n por parte del r&eacute;gimen.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">La FOMH, tambi&eacute;n inform&oacute; que se presentar&aacute;n recursos de inconstitucionalidad ante la Corte Suprema de Justicia por parte de los diferentes colegios gremiales ya que el Ejecutivo no est&aacute; facultado para emitir decretos que lesionan las garant&iacute;as constitucionales y criminalizan toda lucha encaminada a exigir derechos laborales y gremiales.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">En efecto la disposici&oacute;n faculta a la Secretaria de Educaci&oacute;n para la aplicaci&oacute;n de las sanciones administrativas respectivas para docentes y presentar formal denuncia ante el Ministerio P&uacute;blico contra estudiantes, padres de familia u organizaciones gremiales&nbsp; que infrinjan las disposiciones enmarcadas en el referido documento.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Recientemente el presidente Porfirio Lobo durante su participaci&oacute;n en la 67 Asamblea General de la Organizaci&oacute;n de las Naciones Unidas, critic&oacute; a los maestros hondure&ntilde;os y los acus&oacute; de atentar contra los derechos de los ni&ntilde;os, por lo que pidi&oacute; (a la Asamblea) declarar las aulas de clases &quot;santuarios&quot; que no deben ser tomados ni cerrados.</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-10-10 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-08 00:00:00',
				'updated_at' => '2013-02-08 19:16:00',
			),
			84 => 
			array (
				'id' => 111,
				'title' => 'Hackers atacan periódico digital  ',
				'number' => '0085',
				'mes_id' => 10,
				'year' => 2012,
				'departamentos_id' => 8,
				'municipios_id' => 110,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">Un sabotaje mantuvo por 48 horas fuera de servicio al peri&oacute;dico digital </span><a href="http://www.hondudiario.com/" style="text-align: justify;">www.hondudiario.com</a><span style="text-align: justify;"> y seg&uacute;n sus propietarios, el ataque se debe a represar&iacute;as por las recientes publicaciones investigativas sobre el excesivo uso gubernamental de helic&oacute;pteros y la deuda que se mantiene con la empresa arrendadora.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El periodista Arisitedes Aceituno uno de los socios del medio de comunicaci&oacute;n denunci&oacute; que desde la primera publicaci&oacute;n de las investigaciones referidas, recibi&oacute; llamadas telef&oacute;nicas intimidantes, en donde una persona &nbsp;le &ldquo;aclar&oacute;&rdquo; que la deuda ya se estaba pagando, y que mejor no siguiera difundiendo esa informaci&oacute;n.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Hemos tenido amenazas fuertes de parte de dos grupos pol&iacute;ticos, de forma que no podr&iacute;a identificar de donde vienen, piensan que as&iacute; me silenciar&aacute;n&rdquo;, coment&oacute; el comunicador.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Por otra parte inform&oacute; que &ldquo;al principio pensamos que se trataba de una falla t&eacute;cnica, pero el atentado fue confirmado por nuestro proveedor en el extranjero&rdquo;, asegur&oacute; Aceituno.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Por su parte la administraci&oacute;n general de Hondudiario.com, hizo p&uacute;blica una nota desde donde se aboga por el respeto a la libertad de expresi&oacute;n y la libre empresa estipulados en la Constituci&oacute;n de la Rep&uacute;blica de Honduras.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">En la publicaci&oacute;n tambi&eacute;n se hace un llamado al gobierno de la Rep&uacute;blica y a las autoridades responsables por velar por la defensa de los derechos humanos y la libertad de empresa y de prensa, &ldquo;colgaremos en el ciberespacio esta historia que se suma a las otras que revelan las agresiones y atentados que hemos recibido desde el 2009 a la fecha, &uacute;nicamente para que quede constancia y una estad&iacute;stica m&aacute;s&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">En agosto de este a&ntilde;o, el periodista Jos&eacute; No&eacute; Canales Lagos (34), quien laboraba desde hace 12 a&ntilde;os en esa empresa, en el &aacute;rea de monitoreo de Servicios Profesionales de Comunicaci&oacute;n (Seproc) fue asesinado por desconocidos cuando se trasladaba en su veh&iacute;culo tipo &ldquo;pick-up&rdquo; rojo, placas PAV-1995, de su casa de habitaci&oacute;n, en el barrio Bella Vista de Comayag&uuml;ela hacia su trabajo. Hasta la fecha el caso sigue en investigaci&oacute;n.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">En el a&ntilde;o 2009, las oficinas de hondudiario.com, situadas en la capital hondure&ntilde;a, fueron atacadas por desconocidos.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">En esa oportunidad, Aceituno, present&oacute; formal denuncia ante el Comisionado Nacional de los Derechos Humanos de Honduras (Conadeh) y el Ministerio P&uacute;blico, sobre los hechos violentos de que fueron objeto por delincuentes que con pistolas asaltaron las oficinas de este medio de comunicaci&oacute;n, en una evidente intimidaci&oacute;n. Seg&uacute;n el tambi&eacute;n Director del medio digital en esa ocasi&oacute;n pidi&oacute; protecci&oacute;n para los empleados y las instalaciones del medio de comunicaci&oacute;n.</span></span></p>
<p>
&nbsp;</p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-10-16 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-08 00:00:00',
				'updated_at' => '2013-02-08 19:17:00',
			),
			85 => 
			array (
				'id' => 112,
				'title' => 'Desde prisión agresor de periodista le continúa enviando amenazas a muerte',
				'number' => '0086',
				'mes_id' => 10,
				'year' => 2012,
				'departamentos_id' => 5,
				'municipios_id' => 68,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">Desde su celda en el Centro Penal de Puerto Cortes, departamento de Cortes, Joaquin Molina Andrade (28), el hombre que intento asesinar al periodista Selvin Mart&iacute;nez, el pasado 11 de junio ha incrementa sus amenazas a muerte contra del comunicador y de su familia.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Te vamos a dar en donde m&aacute;s te duele, tus hijos, tu madre y tu mujer&rdquo;, son las continuas amenazas que atormentan al corresponsal de la televisora JBN y miembro de la Red de Alertas de Protecci&oacute;n a Periodistas y Comunicadores Sociales (RAPCOS), &ldquo;siento un tremendo temor por mi familia, esta situaci&oacute;n de angustia no me la puedo quitar ni por un segundo&rdquo;, denunci&oacute; a C-Libre, Mart&iacute;nez.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Por la situaci&oacute;n de riesgo del reportero, la unidad de Derechos Humanos de la Secretaria de Seguridad&nbsp;&nbsp; le ha otorgado medidas de seguridad con el objetivo de resguardarle la vida al periodista.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Mart&iacute;nez ha sido v&iacute;ctima durante el presente a&ntilde;o de dos atentados con arma de fuego tambi&eacute;n intentaron secuestrarle a su esposa y le han dado persecuci&oacute;n en una carro paila tipo Tacoma.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n el periodista, Joaquin Molina quien se encuentra a la espera de una sentencia por el delito de tentativa de homicidio y portaci&oacute;n ilegal de armas se atrevi&oacute; a llamarle personalmente para amenazarlo de muerte.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Hasta donde tengo entendi&oacute; el Ministerio Publico ser&aacute; el encargado de darle sentencia a Joaquin y seg&uacute;n me han dicho piden de 18 a 20 a&ntilde;os de prisi&oacute;n, pero no s&eacute; si esta sentencia a mi me sea de utilidad o sea mi perdici&oacute;n por eso advierto p&uacute;blicamente que este tipo es el responsable de cualquier cosa que me llegue a pasar a mi o a mi familia&rdquo;, detall&oacute; Mart&iacute;nez.</span></span></p>
<div>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Esta es la sexta Alerta que C-Libre a emite a favor del periodista de 34.</span></span></p>
</div>
<p>
&nbsp;</p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-10-16 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-08 00:00:00',
				'updated_at' => '2013-02-08 19:18:00',
			),
			86 => 
			array (
				'id' => 113,
				'title' => 'Alcalde no cesa de restringir la libertad de expresión y  prensa',
				'number' => '0087',
				'mes_id' => 10,
				'year' => 2012,
				'departamentos_id' => 8,
				'municipios_id' => 110,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">El alcalde Roosevelt Avil&eacute;s del municipio de Talanga, al norte del departamento de Francisco Moraz&aacute;n, contin&uacute;a sus acciones represivas en contra de las empresas de comunicaci&oacute;n que trasmiten informaci&oacute;n de los candidatos opositores a esa gubernatura local.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Estas acciones que limitan la libertad de expresi&oacute;n y de prensa de periodistas, propietarios de medios de comunicaci&oacute;n y pre candidatos pol&iacute;ticos, han llegado al extremo de suspender la se&ntilde;al de algunos canales locales.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Ante las constantes agresiones los afectados: opositores pol&iacute;ticos y empresarios de la comunicaci&oacute;n local propiciaron la visita, in situ, al municipio de representantes del Comit&eacute; por la Libre Expresi&oacute;n (C-Libre) y seg&uacute;n la informaci&oacute;n recabada la ciudadan&iacute;a se ha cansado de realizar denuncias ante la opini&oacute;n p&uacute;blica, las que de acuerdo a los afectados &ldquo;no sirven nada m&aacute;s que para aumentar la represi&oacute;n de Avil&eacute;s&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Kennet Cruz, Gerente de &ldquo;TELECENTRO&rdquo;, un canal local que fue sacado del aire desde el lunes 15 de septiembre, a solicitud, seg&uacute;n Cruz, del Alcalde de Talanga, dijo tener sus cuentas al d&iacute;a con CONATEL por ello no comprende el motivo de la censura,&nbsp; &ldquo;no me dejan hacer un periodismo ciudadano o de denuncia, la intransigencia del Alcalde lleg&oacute; al &nbsp;extremo de comprar todos los ejemplares de un diario capitalino, en donde yo denuncie el cierre de mi canal televisivo&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Al respecto el ingeniero Gustavo Cuevas Gerente General de Telecable una de las empresas que suspendi&oacute; la se&ntilde;al de &ldquo;TELECENTRO&rdquo; expres&oacute; que todo se debe a un problema t&eacute;cnico. No obstante este mismo sistema de televisi&oacute;n por cable tiene en el aire a 110 canales, internacionales y locales, dijo Kennet Cruz. &ldquo;Es muy extra&ntilde;o que dos empresas de televisi&oacute;n por cable nos hayan suspendido la se&ntilde;al al mismo tiempo&rdquo;, concluy&oacute; Cruz.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Por su parte el Regidor Municipal por el Partido Liberal, Neptali Romero, dijo que este es el momento para sentar un precedente en la lucha por la libre expresi&oacute;n, locomoci&oacute;n y afinidad pol&iacute;tica sin ning&uacute;n temor a ser reprimido, pues &ldquo;es triste ver a nuestra familia rezando cada vez que salimos de casa no por la pol&iacute;tica si no por la lucha del bien com&uacute;n de nuestro pueblo&rdquo;, asegur&oacute;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Otro de los afectados es el periodista y director del informativo &ldquo;Ojo Cr&iacute;tico&rdquo;, Hennry Mej&iacute;a, quien denunci&oacute; que por no doblegar sus ideas y su dignidad ante el Alcalde se le han cerrado en un periodo de seis a&ntilde;os, cinco espacios pagados en canales locales y dos en radiales.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Adem&aacute;s, Francis Alberto Estrada, aspirante a la alcald&iacute;a por el movimiento &ldquo;Por mi Pa&iacute;s&rdquo; del Partido Nacional, asever&oacute; que &ldquo;no es porque estamos en campa&ntilde;a pol&iacute;tica, esto es una cosa y asunto del pueblo. En Talanga no tenemos derecho como precandidatos a publicitarnos en los medios de comunicaci&oacute;n local porque estamos reprimidos en nuestra propia ciudad. Al se&ntilde;or Alcalde no le gusta que nadie se le oponga&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">C-Libre emiti&oacute; el 23 de julio del 2012, la alerta &ldquo;Alcalde Municipal nacionalista cierra medios de comunicaci&oacute;n y censura a periodistas&rdquo;. En donde precandidatos a alcaldes de su mismo partido pol&iacute;tico acusaban al edil de amenazar y chantajear a los operadores de cable, televisoras y radioemisoras.</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-10-17 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-08 00:00:00',
				'updated_at' => '2013-02-08 19:19:00',
			),
			87 => 
			array (
				'id' => 114,
				'title' => 'Películas sustituyen la programación informativa de un medio de comunicación local',
				'number' => '0088',
				'mes_id' => 10,
				'year' => 2012,
				'departamentos_id' => 8,
				'municipios_id' => 110,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">Una programaci&oacute;n de pel&iacute;culas ha sustituido los programas informativos de TELECENTRO un canal televisivo local cuya se&ntilde;al fue suspendida del aire por las dos compa&ntilde;&iacute;as de servicio de televisi&oacute;n por cable del municipio de Talanga, departamento de Francisco Moraz&aacute;n, por supuestas instrucciones del Alcalde Municipal.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Sin embargo los representantes de las compa&ntilde;&iacute;as de cable &ldquo;Siriavision y Telecable&rdquo;, argumentaron ante la Fiscal&iacute;a de Derechos Humanos del Ministerio P&uacute;blico (MP), que debido a fallas t&eacute;cnicas este canal hab&iacute;a salido del aire.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Pero un video realizado el d&iacute;a 22 de octubre, por el gerente general de Telecentro, Kennet Cruz, evidencia que en la frecuencia de su canal se est&aacute;n transmitiendo pel&iacute;culas. El video fue entregado en condici&oacute;n de prueba a la fiscal Ver&oacute;nica Alvarenga quien lleva la denuncia del cierre de medios de comunicaci&oacute;n en ese municipio.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Cruz, demand&oacute; a las autoridades competentes el restablecimiento de la se&ntilde;al de su canal, pues considera que no hay justificaci&oacute;n para que desde hace 10 d&iacute;as se haya bloqueado la transmisi&oacute;n de su espacio de comunicaci&oacute;n.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">En ese sentido el titular de la Fiscal&iacute;a de Derechos Humanos, Germ&aacute;n Enamorado, dijo al Comit&eacute; por la Libre Expresi&oacute;n (C-Libre), que agilizaran el reporte solicitado a un perito t&eacute;cnico de la Comisi&oacute;n Nacional de Telecomunicaciones (CONATEL) y en base al dictamen proceder&aacute;n a actuar conforme a Ley.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Enamorado tambi&eacute;n se&ntilde;alo que han citado al Alcalde Municipal para rendir su declaraci&oacute;n por los hechos en menci&oacute;n, &ldquo;lamentablemente el Edil no se present&oacute; a la primera cita y ha sido imposible entregarle la segunda citaci&oacute;n&rdquo;, puntualiz&oacute; Enamorado.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Por otra parte los miembros de la Alianza Ciudadana por la Libertad de Expresi&oacute;n y de Prensa de dicho municipio interpusieron una nueva denuncia en contra del alcalde Avil&eacute;s por el delito de &nbsp;violaci&oacute;n a la libertad de expresi&oacute;n y de manifestaci&oacute;n.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Antonia Henr&iacute;quez de la Alianza Ciudadana, preciso que &ldquo;la poblaci&oacute;n de Talanga quiere defender la libertad para elegir la programaci&oacute;n de nuestra preferencia, no podemos permitir que se nos imponga una programaci&oacute;n que rinda pleites&iacute;a a la administraci&oacute;n del &nbsp;Alcalde, que est&aacute; repitiendo la historia del Golpe de Estado del 2009 cuando nos enga&ntilde;aban poniendo dibujos animados en vez de informar lo que estaba pasando&rdquo;.</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-10-23 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-08 00:00:00',
				'updated_at' => '2013-02-08 19:20:00',
			),
			88 => 
			array (
				'id' => 115,
				'title' => 'A 100 metros de operativo: Hombres armados y vestidos de policías roban el vehículo y equipo de trabajo a periodistas ',
				'number' => '0089',
				'mes_id' => 10,
				'year' => 2012,
				'departamentos_id' => 8,
				'municipios_id' => 110,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">A escasos 100 metros de un reten policial instalado en la colonia Los Llanos de la ciudad capital, los periodistas Nery Arteaga y Ninfa Gallo fueron interceptados por seis hombres con indumentaria de la Policial Nacional de Honduras (PN), quienes los redujeron a la impotencia, luego les robaron el veh&iacute;culo y el equipo period&iacute;stico, documentaci&oacute;n personal &nbsp;y objetos de valor, que iban en su interior.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El hecho ocurri&oacute; la noche del mi&eacute;rcoles 24 de octubre a eso de las 7:20 de la noche, minutos despu&eacute;s que los periodistas hab&iacute;an finalizado la emisi&oacute;n del noticiero &ldquo;Noticias y Debates 51&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Nery Arteaga quien tambi&eacute;n es el director de noticias de la cadena radial CHN, narr&oacute; detalladamente a C-Libre los pormenores del incidente.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Arteaga record&oacute; que a menos de 100 metros de haber pasado un reten donde se encontraba una patrulla junto a unos cuatro polic&iacute;as, fue interceptado por una camioneta de donde se bajaron dos hombres con armas de fuego tipo escopetas quienes les gritaron &ldquo;somos polic&iacute;a nacional&rdquo; e inmediatamente comenzaron a golpearlo.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Sinceramente dijo Arteaga, &ldquo;lo &uacute;nico que recuerdo es que les dec&iacute;a somos periodistas, somos periodistas, porque sinceramente me perturbe&hellip; no sab&iacute;a lo que suced&iacute;a, pero cuando me golpearon con el arma en el rostro y me empezaron a insultar y a pedir mis objetos de valor y nos bajaron de mi carro supe que era un asalto&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n el periodista, lo preocupante del caso fue que los ladrones escaparon en direcci&oacute;n al reten policial y no en direcci&oacute;n contraria. Inmediatamente unos conductores de &ldquo;taxi&rdquo; que observaron el robo, llevaron a ambos periodistas hacia los polic&iacute;as, quienes ante la denuncia de los comunicadores, respondieron que &ldquo;la patrulla estaba en mal estado&rdquo;.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&ldquo;Creo que podr&iacute;a haber complicidad y eso es sumamente preocupante, me atrevo a decirlo, que transcurridos unos cinco minutos y despu&eacute;s de haber encendido la patrulla a punta de empujones, los polic&iacute;as se fueron detr&aacute;s de los ladrones pero nunca regresaron&rdquo;, denunci&oacute; Arteaga.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">A los periodistas se les despojo de una c&aacute;mara de video profesional, dos computadoras port&aacute;tiles, dos tel&eacute;fonos celulares, dos c&aacute;maras fotogr&aacute;ficas, documentaci&oacute;n personal de ambos comunicadores, papeler&iacute;a legal y una camioneta color rojo vino placa PBY 6095.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El periodista Nery Arteaga, report&oacute; oficialmente el robo ante las autoridades pertinentes y en su narrativa se mencion&oacute; el reten policial, pero seg&uacute;n Arteaga ning&uacute;n oficial de la Polic&iacute;a Nacional lo ha contactado para saber sobre detalles puntuales.</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-10-31 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-08 00:00:00',
				'updated_at' => '2013-02-08 19:21:00',
			),
			89 => 
			array (
				'id' => 116,
				'title' => 'Asesinan a periodista radial',
				'number' => '0090',
				'mes_id' => 11,
				'year' => 2012,
				'departamentos_id' => 8,
				'municipios_id' => 110,
				'body' => '<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="text-align: justify;">El estudiante de la carrera de Periodismo de la Universidad Nacional Aut&oacute;noma de Honduras (UNAH), &Aacute;ngel Edgardo L&oacute;pez Fiallos de 35 a&ntilde;os de edad, fue ultimado de cuatro disparos en la cabeza, hoy jueves 8 de noviembre alrededor de las 11:30 de la ma&ntilde;ana en pleno centro de la ciudad capital del pa&iacute;s.</span></span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">&Aacute;ngel L&oacute;pez, incursion&oacute; hace ocho a&ntilde;os como locutor y operador de la radioemisora evang&eacute;lica Stereo Luz 103.7 FM, pero en la actualidad era parte del equipo period&iacute;stico de HRCV-La Voz Evang&eacute;lica de Honduras, y tambi&eacute;n se desempe&ntilde;aba como promotor de desarrollo de proyectos comunitarios en el Grupo Sociedades B&iacute;blicas de Honduras (SBH).</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El locutor sali&oacute; de su casa de habitaci&oacute;n en la Colonia San Miguel con direcci&oacute;n a su trabajo en &nbsp;SBH, ubicado en el Bulevar La Hacienda, cuando sorpresivamente, a la altura del barrio La Hoya en la ciudad capital, unos hombres que se conduc&iacute;an en motocicleta le dispararon en la cabeza.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Seg&uacute;n la hip&oacute;tesis de la polic&iacute;a, L&oacute;pez fue objeto de un intento de asalto, pero al oponerse y salir corriendo sus agresores le dispararon en repetidas ocasiones, caus&aacute;ndole la muerte de manera instant&aacute;nea. En el tiroteo result&oacute; herido el joven Gerardo Enrique Mej&iacute;a, quien fue trasladado a un centro de asistencia m&eacute;dica.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">El estudiante de periodismo qued&oacute; inerte en las gradas del c&eacute;ntrico barrio, con su mochila puesta sobre su espalda y en su interior su computadora port&aacute;til y dem&aacute;s art&iacute;culos personales.</span></span></p>
<p style="text-align: justify;">
<span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">C-Libre documento el asesinato de Adonis Felipe Bueso Guti&eacute;rrez, ocurrido el 8 de julio de 2012, un comunicador social de Radio Stereo Naranja, una emisora cristiana ubicada en el municipio de Sonaguera, departamento de Col&oacute;n.</span></span></p>
',
				'source' => 'C-Libre',
				'source_url' => NULL,
				'published_state' => 1,
				'published_date' => '2012-11-08 00:00:00',
				'estado_judicial' => NULL,
				'usuarios_id' => NULL,
				'created_at' => '2013-02-08 00:00:00',
				'updated_at' => '2013-02-08 19:22:00',
			),
		));
	}

}
