-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-04-2025 a las 02:05:21
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pawfind`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `id_articulo` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_subcategoria` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `contenido` text NOT NULL,
  `fecha` date NOT NULL,
  `imagen_url` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`id_articulo`, `id_categoria`, `id_subcategoria`, `id_usuario`, `titulo`, `contenido`, `fecha`, `imagen_url`) VALUES
(1, 1, 2, 1, 'Consejos para el baño de tu mascota', 'Bañar a tu mascota puede ser una experiencia placentera tanto para ti como para tu compañero peludo, siempre que se haga de manera adecuada. No se trata solo de higiene, sino también de fortalecer el vínculo entre ambos y asegurar su bienestar físico y emocional.\r\n\r\nAntes de comenzar, asegúrate de tener todos los implementos necesarios: champú específico para mascotas (preferiblemente sin fragancias artificiales), una toalla limpia, un cepillo adecuado, y agua tibia. Evita el uso de productos diseñados para humanos, ya que pueden alterar el pH de su piel y causar irritaciones o alergias.\r\n\r\nEl baño debe realizarse en un ambiente tranquilo, sin ruidos fuertes que puedan estresar al animal. Habla con él con voz suave, y prémialo con caricias o golosinas para que relacione el baño con una experiencia positiva. Si tienes un perro de raza pequeña o un gato, una tina o lavadero profundo funcionará bien; si es un perro grande, puede que necesites un espacio al aire libre con una manguera de presión suave.\r\n\r\nEs recomendable comenzar mojando las patas y el torso, y dejar la cabeza para el final, ya que es la parte más sensible. Frota con delicadeza y enjuaga muy bien para que no queden residuos que puedan provocar picazón. Seca a tu mascota completamente, evitando exponerla al frío o corrientes de aire.\r\n\r\nLa frecuencia del baño dependerá del tipo de mascota, su raza, el estilo de vida (si sale a pasear o vive en interiores), y condiciones médicas. Por ejemplo, un perro que sale a diario podría necesitar un baño cada tres semanas, mientras que uno casero puede esperar hasta seis semanas. Los gatos, en cambio, se asean naturalmente, y el baño solo debe aplicarse en casos necesarios.\r\n\r\nRecuerda que una mascota limpia no solo luce mejor, sino que también es menos propensa a enfermedades dermatológicas, infecciones por hongos y parásitos externos. Establece una rutina cómoda para ambos, y conviértelo en un momento de cuidado y cariño.', '2025-04-10', 'app/uploads/680607ca19916_bano.jpg'),
(2, 1, 1, 1, 'Alimentación balanceada para perros', 'Una alimentación adecuada es uno de los pilares fundamentales para asegurar una vida larga, saludable y feliz para tu perro. Los nutrientes que consume influyen directamente en su energía, peso, salud digestiva, pelaje y bienestar general. Por eso, es fundamental conocer cómo estructurar una dieta balanceada y adaptarla a las necesidades específicas de tu compañero canino.\r\n\r\nUn buen punto de partida es elegir un alimento comercial de calidad, preferiblemente que indique que cumple con los estándares nutricionales de asociaciones reconocidas como AAFCO. Sin embargo, incluso con comida comercial, no todos los productos son iguales: asegúrate de revisar los ingredientes, evitando aquellos con subproductos no identificados, conservantes artificiales o exceso de harinas procesadas.\r\n\r\nAdemás de las croquetas, algunos dueños optan por preparar alimentos caseros para sus perros. Esto puede ser una gran opción siempre y cuando se haga bajo la supervisión de un veterinario o nutricionista especializado. Las dietas caseras mal balanceadas pueden generar deficiencias de calcio, fósforo, ácidos grasos y otras vitaminas esenciales. Recuerda que alimentos como el ajo, la cebolla, el chocolate o los huesos cocidos pueden ser peligrosos, incluso en pequeñas cantidades.\r\n\r\nLa cantidad de alimento también importa. Cada perro tiene un requerimiento calórico distinto según su raza, tamaño, edad, nivel de actividad y estado de salud. Un perro joven y activo necesitará más calorías que un perro mayor o sedentario. Evitar el sobrepeso es esencial, ya que puede derivar en enfermedades articulares, cardíacas y metabólicas.\r\n\r\nFinalmente, no olvides la hidratación. Tu perro debe tener acceso a agua limpia y fresca durante todo el día. También puedes considerar snacks saludables, como zanahorias o manzanas (sin semillas), y ofrecer variedad ocasionalmente para estimular su apetito.\r\n\r\nUna alimentación balanceada no es simplemente llenar su plato: es una forma de demostrar amor, cuidado y compromiso con su salud. Consultar con profesionales, informarte constantemente y observar su comportamiento y vitalidad son claves para tomar las mejores decisiones alimenticias para tu mascota.', '2025-04-05', 'app/uploads/680608330812f_perros-dieta.png'),
(3, 1, 2, 2, 'Cuidados estéticos en mascotas pequeñas', 'Las mascotas pequeñas como perros de razas toy o gatos de tamaño compacto también necesitan una rutina estética adecuada que vaya más allá del simple baño. El cuidado estético no solo contribuye a la apariencia de tu mascota, sino que también juega un papel importante en su bienestar físico y emocional. Un animal limpio y bien arreglado es un animal más feliz, más sano y con mejor calidad de vida.\r\n\r\nUno de los aspectos esenciales es el cepillado del pelaje. Dependiendo del tipo de pelo, tu mascota puede requerir cepillados diarios para evitar la formación de nudos, especialmente en razas como el maltés o el persa. Además, el cepillado ayuda a distribuir los aceites naturales de la piel, estimula la circulación y te permite detectar parásitos o anormalidades cutáneas a tiempo.\r\n\r\nEl corte de uñas también es vital. Unas uñas largas pueden provocar dolor al caminar, deformaciones en las patas o incluso infecciones si se encarnan. Se recomienda revisar las uñas al menos una vez al mes y recortarlas cuidadosamente con herramientas adecuadas. Si no te sientes seguro haciéndolo, lo mejor es acudir a un groomer profesional.\r\n\r\nNo olvides los oídos y los dientes. Las razas pequeñas son especialmente propensas a la acumulación de sarro y a las infecciones de oído. Limpia los oídos con productos suaves y cepilla sus dientes con una pasta especial para mascotas al menos tres veces por semana. La estética en las mascotas pequeñas es también una oportunidad para reforzar el vínculo afectivo. Si realizas estas rutinas con paciencia y cariño, se convertirán en momentos de confianza y conexión mutua.', '2025-03-30', 'app/uploads/6806087071f24_esteticos.jpg'),
(4, 1, 1, 2, 'Chequeos veterinarios regulares', 'Cuando hablamos de cuidar a nuestras mascotas, solemos pensar en cosas como una buena alimentación, paseos diarios o mucho cariño. Y aunque todos esos aspectos son fundamentales, hay un elemento que muchas veces pasa desapercibido pero es absolutamente crucial: los chequeos veterinarios regulares.\r\n\r\nMuchos dueños de mascotas tienden a visitar al veterinario solo cuando notan que algo está mal. Sin embargo, al igual que en los humanos, la medicina preventiva puede marcar una gran diferencia en la calidad y duración de vida de perros y gatos. Un chequeo anual —o semestral, dependiendo de la edad o condiciones del animal— permite detectar enfermedades en etapas tempranas, ajustar tratamientos o dietas, y garantizar que tu compañero peludo se mantenga feliz y saludable.\r\n\r\nDurante una consulta veterinaria de rutina, el especialista evaluará aspectos como el peso, el estado de la piel, los dientes, el corazón, la movilidad y los ojos. Muchas veces, cambios pequeños que pasan desapercibidos en casa pueden ser señales de algo más importante. Por ejemplo, un aumento leve de peso podría ser indicio de problemas hormonales; el sarro acumulado en los dientes puede desencadenar infecciones más graves si no se trata a tiempo.\r\n\r\nAdemás, los chequeos incluyen la actualización de vacunas, la desparasitación y, en muchos casos, análisis de sangre que permiten evaluar cómo están funcionando los órganos internos. En animales de edad avanzada, esto se vuelve aún más importante: los chequeos regulares permiten detectar problemas como la artritis, el deterioro renal o las enfermedades cardíacas antes de que se agraven.\r\n\r\nTambién es un espacio ideal para hablar con tu veterinario sobre cambios de comportamiento, nuevas necesidades alimenticias, o incluso sobre salud mental y emocional del animal. Muchos comportamientos inusuales —como lamerse excesivamente, esconderse, o mostrarse más apáticos— tienen causas médicas subyacentes que pueden abordarse con el diagnóstico correcto.\r\n\r\nOtro beneficio de las visitas regulares es la creación de un historial clínico completo. Esto ayuda al veterinario a notar patrones con el paso del tiempo, hacer comparaciones objetivas y tomar decisiones mejor fundamentadas sobre el tratamiento de tu mascota.\r\n\r\nSi bien muchas personas piensan que llevar a su mascota al veterinario solo \"cuando está enferma\" ahorra dinero, en realidad puede salir más caro a largo plazo. Detectar enfermedades en etapas avanzadas no solo implica más gastos, sino también más sufrimiento para el animal y menos opciones de tratamiento. Prevenir siempre será mejor que curar.\r\n\r\nLa próxima vez que marques tu calendario, no te olvides de agendar también la cita para tu mejor amigo de cuatro patas. Una consulta de rutina puede parecer algo simple, pero puede cambiar —o incluso salvar— una vida.\r\n\r\nPorque cuidar es también prevenir, y tu mascota merece una vida larga, plena y con salud.', '2025-03-25', 'app/uploads/680608b109baf_salud.jpg'),
(5, 1, 1, 3, 'Cómo identificar señales de estrés en tu gato', 'A primera vista, los gatos pueden parecer independientes, autosuficientes e incluso imperturbables. Pero detrás de esa mirada tranquila y sus largos momentos de descanso, tu gato podría estar experimentando algo que muchos dueños no notan fácilmente: estrés.\r\n\r\nEl estrés felino es más común de lo que creemos y puede deberse a factores tan simples como un cambio de muebles, la llegada de una nueva mascota, un viaje al veterinario o incluso un cambio de horario en casa. A diferencia de los perros, los gatos tienden a reprimir o disfrazar sus emociones, lo que hace que las señales de malestar pasen desapercibidas hasta que se manifiestan con más intensidad.\r\n\r\nUna de las señales más claras de que algo no va bien es un cambio repentino en su comportamiento. ¿Tu gato ha dejado de usar la caja de arena? ¿Está más retraído de lo habitual? ¿Se esconde constantemente o ha dejado de acicalarse como antes? Estos son indicadores típicos de que su equilibrio emocional está alterado. También es común que aparezcan conductas agresivas sin motivo aparente, como arañazos o mordiscos cuando antes no reaccionaba así.\r\n\r\nLa pérdida de apetito o, por el contrario, comer de forma compulsiva también puede estar relacionada con el estrés. Algunos gatos incluso comienzan a lamerse excesivamente ciertas zonas del cuerpo, provocando áreas sin pelo, una señal conocida como “alopecia psicógena”. Este comportamiento suele ser una forma de liberar ansiedad, como si se tranquilizaran a sí mismos.\r\n\r\nOtro signo de alarma es el marcaje con orina en lugares inusuales. Aunque muchas veces se asocia con un problema de conducta o rebeldía, lo cierto es que puede ser una respuesta directa al estrés. El gato está intentando establecer control sobre su entorno, especialmente si ha habido cambios que alteran su sentido de seguridad.\r\n\r\n¿Cómo ayudarle? Primero, identifica posibles causas: ¿hubo una mudanza reciente?, ¿llegó un nuevo miembro a la familia?, ¿cambiaste su comida o moviste su caja de arena? Volver a una rutina estable, respetar sus espacios y proporcionarle escondites tranquilos puede marcar una gran diferencia. Asegúrate de que tenga acceso a zonas elevadas, ya que observar desde lo alto le brinda seguridad. El juego también es una excelente herramienta para liberar tensión y fortalecer el vínculo contigo.\r\n\r\nAdemás, hay productos que pueden ayudar, como los difusores de feromonas sintéticas (como Feliway), que imitan las sustancias que los gatos liberan cuando se sienten seguros. En casos más complejos, la asesoría de un etólogo felino o veterinario especializado en comportamiento puede ser muy útil.\r\n\r\nLo más importante es recordar que tu gato necesita más que comida y una cama: necesita sentirse seguro, amado y en control de su entorno. Prestar atención a estos pequeños cambios puede prevenir problemas mayores y, sobre todo, garantizar su bienestar físico y emocional.\r\n\r\nLos gatos no siempre maúllan cuando algo anda mal, pero su comportamiento es un lenguaje que debemos aprender a escuchar.', '2025-03-20', 'app/uploads/68060969311bc_estres.jpg'),
(6, 2, 4, 3, 'Red de apoyo para mascotas perdidas', 'Perder a una mascota es una experiencia angustiante que puede generar ansiedad, miedo y una gran sensación de impotencia. Afortunadamente, en la actualidad existen múltiples formas de apoyo comunitario y herramientas digitales que permiten aumentar considerablemente las posibilidades de reencontrarte con tu compañero peludo. En este artículo exploramos cómo funciona una red de apoyo para mascotas perdidas y cómo puedes activarla rápidamente si te encuentras en esa difícil situación.\r\n\r\nUna red de apoyo no es solamente un grupo de personas solidarias, es una estructura compuesta por vecinos, refugios, clínicas veterinarias, plataformas digitales y redes sociales, que trabajan de forma colaborativa para localizar a animales extraviados. En muchos casos, esta red se activa de manera espontánea: alguien ve una publicación en Facebook, lo comparte en grupos de WhatsApp, y pronto cientos de personas en la zona están al tanto del caso.\r\n\r\nLo primero que debes hacer al notar que tu mascota está perdida es no entrar en pánico. Regresa al lugar donde la viste por última vez, llama su nombre con calma y revisa los alrededores. Muchas veces los animales se esconden por miedo, y es posible que estén más cerca de lo que crees. Si la búsqueda inmediata no da resultado, es hora de poner en marcha la red de apoyo.\r\n\r\nComienza generando un cartel digital claro: incluye una foto reciente de tu mascota, su nombre, descripción física, zona donde se extravió y un número de contacto. Usa un tono empático, sin juzgar ni culpar. Luego, comparte ese cartel en redes sociales (Facebook, Instagram, Twitter), en grupos vecinales, foros locales e incluso en plataformas especializadas como PawFind, PerdidosCR o Alerta Mascotas.\r\n\r\nLos refugios y veterinarias locales también forman parte esencial de la red. Llama o visita personalmente a los más cercanos y entrégales una copia del cartel. En algunos casos, los animales encontrados por vecinos o funcionarios municipales terminan ahí temporalmente. Dejar tus datos de contacto aumenta las probabilidades de que te avisen si tu mascota aparece.\r\n\r\nAdemás, es recomendable caminar por la comunidad y hablar directamente con vecinos, transeúntes y comerciantes. Muéstrales la imagen, explícales la situación y pídeles que te contacten si la ven. La conexión humana sigue siendo una de las formas más efectivas para recibir información rápida y relevante.\r\n\r\nEn los últimos años, la tecnología también ha transformado esta red de apoyo. Aplicaciones como PetAlert o Nextdoor permiten emitir alertas en tiempo real a personas que estén cerca del área de pérdida. Incluso, algunos collares GPS te permiten rastrear la última ubicación de tu mascota si estaba usando el dispositivo al momento de extraviarse.\r\n\r\nNo subestimes el poder de la solidaridad. Personas que nunca has conocido podrían convertirse en la clave para encontrar a tu compañero. Cada mensaje compartido, cada repost, cada volante entregado hace que tu mascota tenga más ojos buscándola.\r\n\r\nY si tú encuentras una mascota perdida, puedes convertirte en parte activa de esta red. Llévala a un veterinario para escanear su microchip, publica su foto en redes y resguárdala con cuidado. Esa acción puede cambiar la historia de una familia entera.\r\n\r\nLas redes de apoyo para mascotas perdidas no solo están formadas por recursos, sino por corazones. Cuando trabajamos juntos, la esperanza de un reencuentro se mantiene viva.', '2025-04-07', 'app/uploads/680607ecb05cc_perdidos.jpg'),
(7, 2, 3, 3, 'El reencuentro de Max con su familia', 'Max era más que una mascota para la familia Ramírez. Desde que llegó siendo apenas un cachorro, se convirtió en un miembro más del hogar: juguetón, fiel, protector y especialmente cercano a los niños. Durante casi cinco años compartieron risas, caminatas en el parque y tardes enteras acurrucados en el sillón. Sin embargo, un día cualquiera, la historia de Max dio un giro inesperado.\r\n\r\nTodo ocurrió durante un paseo rutinario. Max, emocionado como siempre, corrió tras una ardilla y, en cuestión de segundos, desapareció entre la maleza del bosque urbano cercano. La familia lo buscó desesperadamente durante horas. Luego días. Después semanas. Pusieron carteles, alertaron en redes sociales, notificaron a refugios, clínicas y organizaciones. Pero Max no aparecía.\r\n\r\nEl vacío que dejó en casa fue profundo. Los niños lloraban cada noche, y los padres, aunque intentaban mantener la esperanza viva, comenzaban a resignarse. Pasaron casi tres meses. Tres meses de incertidumbre, tristeza y recuerdos constantes. Hasta que un día, una llamada inesperada cambió todo.\r\n\r\nUn refugio local, que trabajaba junto a una red de apoyo para mascotas perdidas, había recibido a un perro con un leve parecido al de los carteles que aún seguían colgados en algunos postes. Estaba más delgado, un poco asustado, pero sano. Llevaba un collar sin placa, pero lo curioso fue su reacción al escuchar el nombre “Max”. Se detuvo. Miró fijamente al cuidador. Y movió la cola.\r\n\r\nGracias a la fotografía del cartel que una voluntaria aún guardaba en su teléfono, y a la visita inmediata de la familia Ramírez, se confirmó: ¡era Max! En cuanto lo vio, corrió hacia ellos, brincando, llorando y dando vueltas sin parar. El reencuentro fue uno de esos momentos que hacen que el corazón se te encoja y luego se expanda con fuerza.\r\n\r\nLos niños no podían creerlo. El papá se arrodilló, abrazando a Max como si se tratara de un hijo perdido. La mamá lloraba y reía al mismo tiempo. Y Max… Max no dejaba de mover la cola, de lamer rostros, de emitir pequeños aullidos de emoción. Durante todo ese día, no se separó ni un instante de su familia. Era como si supiera que, después de tanto, finalmente estaba en casa.\r\n\r\nEste reencuentro fue más que una historia feliz. Fue una lección sobre la importancia de no rendirse, de las redes de apoyo comunitario, y del poder del amor entre humanos y animales. También fue una muestra del valor que tienen los refugios, las personas que cuidan sin esperar nada a cambio, y los voluntarios que no bajan los brazos.\r\n\r\nMax volvió a su hogar con una nueva placa, un chip de identificación y una historia que ahora forma parte de todas esas historias que inspiran. Su regreso no solo trajo alegría a una familia, sino que recordó a toda una comunidad que nunca debemos subestimar la fuerza del vínculo que tenemos con nuestras mascotas.\r\n\r\nMax ya no se pierde de vista… y su historia seguirá siendo contada como prueba de que, a veces, los finales felices sí existen.', '2025-03-29', 'app/uploads/6806089f4cd59_exito.jpg'),
(8, 2, 5, 4, '¿Cómo actuar si encuentras una mascota perdida?', 'Te sucede caminando por el parque, saliendo de casa o de camino al trabajo: ves a un perro o un gato solo, desorientado, sin collar y claramente sin su humano cerca. ¿Qué hacer en ese momento? Para muchos, la duda y la confusión pueden paralizar. Sin embargo, saber cómo actuar puede ser la diferencia entre que esa mascota regrese a casa o quede expuesta al peligro.\r\n\r\nLo primero es mantener la calma. Acércate con suavidad, sin movimientos bruscos ni ruidos fuertes. Las mascotas perdidas suelen estar asustadas y a la defensiva. Si logras que confíe en ti, evita sujetarla de forma agresiva. En el caso de perros, es útil ofrecer la mano para que la huelan; con gatos, conviene agacharse y hablar con voz suave. Si el animal tiene collar con placa, eso facilita todo: llama al número de contacto o verifica si tiene dirección. Pero muchas veces no es así.\r\n\r\nUna vez que hayas logrado acercarte o asegurarte de que no está en peligro inmediato, el siguiente paso es llevarlo a un lugar seguro. Puede ser tu casa, una veterinaria o un refugio cercano. Si no puedes llevarla contigo, al menos quédate cerca para evitar que se exponga al tráfico o a situaciones riesgosas mientras buscas ayuda.\r\n\r\nLlevarla a una clínica veterinaria es una excelente opción, ya que allí pueden revisar si tiene microchip. Este dispositivo, que se coloca bajo la piel, permite identificar rápidamente al dueño con un lector especial. Es un procedimiento que no daña al animal y que puede ahorrarle horas o incluso días de angustia a su familia.\r\n\r\nUna vez a salvo, comienza la búsqueda activa de su hogar. Saca fotos claras y compártelas en redes sociales, especialmente en grupos locales de mascotas perdidas o vecinales. Incluye detalles como el lugar y hora en que la encontraste, características físicas y cualquier comportamiento que pueda ayudar a identificarla (¿es juguetona?, ¿tiene alguna marca especial?, ¿cojea?). Sitios como PawFind, páginas comunitarias y hasta WhatsApp pueden ser canales muy efectivos.\r\n\r\nTambién puedes colocar afiches en la zona, especialmente en veterinarias, supermercados y parques. No olvides contactar refugios de animales de tu ciudad; muchas personas que pierden a sus mascotas lo primero que hacen es llamar a estos lugares.\r\n\r\nAlgo muy importante: no asumas de inmediato que el animal fue abandonado. Aunque lamentablemente esto ocurre, la mayoría de las veces se trata de mascotas que se escaparon por miedo (fuegos artificiales, tormentas, portones abiertos). También puede tratarse de animales mayores o con problemas de orientación.\r\n\r\nMientras esperas una respuesta, asegúrate de cubrir sus necesidades básicas: comida, agua, un lugar seguro para dormir y, si es posible, una revisión veterinaria general. Si después de un tiempo prudente nadie la reclama, podrías considerar la posibilidad de ponerla en adopción responsable —ya sea por medio de un refugio o de manera personal— asegurándote de que vaya a un hogar donde recibirá el amor que merece.\r\n\r\nEncontrarse con una mascota perdida es una oportunidad para ayudar, para hacer una diferencia real. No necesitas ser rescatista profesional, solo tener empatía, sentido común y voluntad de actuar.\r\n\r\nPorque detrás de cada mascota hay una familia que la está esperando.', '2025-03-21', 'app/uploads/6806091729c78_perdida.jpg'),
(9, 2, 4, 4, 'Voluntariado en refugios: tu ayuda cuenta', 'Los refugios de animales son espacios que dan una segunda oportunidad a miles de mascotas que han sido abandonadas, maltratadas o simplemente nacieron en la calle. Detrás de cada refugio, hay historias conmovedoras, jornadas agotadoras y una misión en común: brindar amor, cuidados y una nueva vida a quienes no pueden hablar por sí mismos. Y en esa misión, el voluntariado juega un papel crucial. Tu ayuda, por pequeña que parezca, puede cambiar la vida de muchos animales.\r\n\r\nCuando pensamos en voluntariado, muchas veces imaginamos tareas físicas como limpiar jaulas o pasear perros. Y sí, esas labores son parte importante del día a día en un refugio, pero el impacto del voluntariado va mucho más allá. Los animales que llegan a estos lugares no solo necesitan alimento y techo: necesitan cariño, confianza, socialización y una rutina que les permita recuperarse emocionalmente.\r\n\r\nHay perros que han pasado años encadenados, gatos que han sido abandonados varias veces, animales que no conocen lo que es una caricia o una cama limpia. Tú puedes ser la primera persona que les muestre que existe otra forma de vivir. Pasearlos, jugar con ellos, sentarte simplemente a su lado, les ayuda a volver a confiar en los humanos y los prepara para ser adoptados.\r\n\r\nAdemás, no todos los refugios cuentan con personal fijo o suficiente. El trabajo se acumula y muchas veces los cuidadores no dan abasto para atender a todos los animales. Aquí es donde el voluntariado se vuelve vital: puedes colaborar organizando jornadas de limpieza, eventos de adopción, campañas de recolección de alimentos o incluso ayudando con labores administrativas o de difusión en redes sociales.\r\n\r\nLo mejor del voluntariado es que se adapta a ti. Si tienes tiempo libre los fines de semana, puedes comprometerte con algunas horas semanales. Si eres diseñador, fotógrafo, veterinario, community manager o simplemente una persona con ganas de ayudar, hay un espacio para ti. Todo aporte es valioso: desde sacar una buena foto para redes sociales hasta ayudar a bañar a los animales.\r\n\r\nY el impacto no es solo en los animales. El voluntariado también transforma a las personas. Desarrollas empatía, responsabilidad, te conectas con otros amantes de los animales y sientes que estás siendo parte de algo más grande. Muchas personas aseguran que el refugio se convirtió en su refugio emocional: un lugar donde encontraron propósito, comunidad y paz.\r\n\r\nSi estás considerando ser voluntario, te recomendamos visitar un refugio local, hablar con los encargados, entender sus necesidades y ver cómo puedes colaborar. También puedes unirte a campañas de concientización, donar insumos o simplemente compartir sus publicaciones.\r\n\r\nRecuerda: no necesitas tener mucho tiempo, ni experiencia previa. Solo necesitas tener disposición, respeto por los animales y ganas de aportar. Tu presencia puede significar que un perro con miedo salga por fin a caminar, que un gato aprenda a confiar en los humanos, o que una adopción se concrete gracias a tu ayuda.\r\n\r\nPorque cada acción cuenta, cada minuto suma y cada corazón dispuesto puede hacer una diferencia enorme. El voluntariado en refugios no solo mejora vidas… las salva.', '2025-04-01', 'app/uploads/680608038411c_ayudar.jpg'),
(14, 2, 5, 3, '¿Qué hacer cuando tu mascota se pierde?', 'Perder a una mascota puede ser una de las experiencias más angustiantes para cualquier dueño. A continuación, te presentamos una guía rápida y efectiva para aumentar las probabilidades de reencontrarte con tu compañero peludo:\r\n1. Actúa de inmediato. No esperes a que vuelva sola. Cuanto antes comiences la búsqueda, más posibilidades tendrás.\r\n2. Revisa tu entorno cercano. Camina por tu vecindario, llama su nombre y lleva contigo su juguete favorito o un premio.\r\n3. Notifica a tus vecinos. Ellos pueden haberla visto o incluso tenerla resguardada.\r\n4. Usa redes sociales y grupos locales. Publica en grupos de Facebook, WhatsApp y páginas de comunidades de tu zona con una foto clara, su nombre, zona donde se perdió y cómo contactarte.\r\n5. Visita refugios y veterinarias cercanas. Deja una descripción, tu información y verifica constantemente si alguien la ha llevado.\r\n6. Crea carteles físicos. Aunque lo digital es rápido, los carteles impresos en postes, tiendas o parques aún son muy efectivos.\r\n7. No pierdas la calma. Muchas mascotas regresan en pocas horas o días. Mantente alerta y no dejes de buscar.\r\nLa prevención es clave: asegurate siempre de que tu mascota tenga identificación con tu número de contacto. También considerá el uso de un microchip o collar GPS si es posible.\r\nNo estás solo en esto. Si lo necesitas, contacta con organizaciones locales de rescate o utiliza plataformas como PawFind para reportar y encontrar mascotas perdidas.', '2025-04-19', 'app/uploads/68060747f24d0_perdido.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_articulo`
--

CREATE TABLE `categoria_articulo` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria_articulo`
--

INSERT INTO `categoria_articulo` (`id_categoria`, `nombre`) VALUES
(1, 'Cuidado'),
(2, 'Articulo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_evento`
--

CREATE TABLE `categoria_evento` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria_evento`
--

INSERT INTO `categoria_evento` (`id_categoria`, `nombre`) VALUES
(1, 'Jornadas de Adopción'),
(2, 'Charlas Educativas'),
(3, 'Campañas de Vacunación'),
(4, 'Voluntariado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `id_evento` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `fecha` date NOT NULL,
  `hora` varchar(20) NOT NULL,
  `ubicacion` varchar(250) NOT NULL,
  `imagen_url` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`id_evento`, `id_usuario`, `id_categoria`, `nombre`, `descripcion`, `fecha`, `hora`, `ubicacion`, `imagen_url`) VALUES
(1, 1, 1, 'Adopta un Amigo', 'Jornada de adopción de perros y gatos. Habrá veterinarios, charlas y espacios para conocer a las mascotas.', '2025-09-15', '10:00', 'Parque Central, Zona Verde', 'app/uploads/680328ca837ba_Evento.jpg'),
(2, 2, 2, 'Cuidado Responsable', 'Charla educativa sobre el cuidado, alimentación y salud de las mascotas. Abierta a todo público.', '2025-09-28', '17:00', 'Centro Cultural Municipal', 'app/uploads/680328d92e9e0_Evento2.jpeg'),
(3, 3, 3, 'Vacunación Gratuita', 'Campaña de vacunación antirrábica y desparasitación para perros y gatos. Lleva a tu mascota con correa o transportadora.', '2025-10-18', '09:00', 'Plaza San Martín', 'app/uploads/680328e234e5c_Evento3.jpg'),
(4, 4, 4, 'Voluntarios al Rescate', 'Sesión informativa y actividades de integración para nuevos voluntarios en el refugio de animales.', '2025-11-08', '14:30', 'Refugio PawFind', 'app/uploads/680328e977c9f_Evento4.jpg'),
(5, 1, 2, 'Mascotas Felices', 'Charla interactiva para niños sobre cómo cuidar a sus mascotas. Incluye actividades lúdicas y premios.', '2025-11-22', '11:00', 'Biblioteca Infantil', 'app/uploads/680328f3518fd_Evento5.jpg'),
(6, 1, 2, 'Coffee Pet Day', 'Reúnete con otros amantes de los animales para compartir un café al aire libre. Habrá charlas breves sobre bienestar animal y una zona de juegos para mascotas.', '2025-04-25', '15:00', 'Refugio PawFind', 'app/uploads/6804430099fac_Evento6.jpg'),
(7, 3, 2, 'Arte y Patitas', 'Taller de pintura para niños donde podrán hacer huellitas artísticas junto a sus mascotas. Actividad educativa sobre la expresión emocional y el vínculo animal.', '2025-05-03', '09:30', 'Parque Central, Zona Verde', 'app/uploads/6803756e6c600_Evento7.jpg'),
(8, 2, 4, 'Yoga con Peludos', 'Sesión de yoga al aire libre en compañía de mascotas. Ideal para relajarse y fortalecer el vínculo humano-animal.', '2025-05-25', '12:15', 'Parque Central, Zona Verde', 'app/uploads/680375eca9683_Evento8.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen_adopcion`
--

CREATE TABLE `imagen_adopcion` (
  `id_imagen` int(11) NOT NULL,
  `id_mascota_adopcion` int(11) NOT NULL,
  `url_uno` varchar(255) DEFAULT NULL,
  `url_dos` varchar(255) DEFAULT NULL,
  `url_tres` varchar(255) DEFAULT NULL,
  `url_cuatro` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `imagen_adopcion`
--

INSERT INTO `imagen_adopcion` (`id_imagen`, `id_mascota_adopcion`, `url_uno`, `url_dos`, `url_tres`, `url_cuatro`) VALUES
(1, 1, 'app/uploads/toby1.jpg', 'app/uploads/toby2.jpg', 'app/uploads/toby3.jpg', 'app/uploads/toby4.jpg'),
(2, 2, 'app/uploads/luna1.jpg', 'app/uploads/luna2.jpg', 'app/uploads/luna3.jpg', 'app/uploads/luna4.jpg'),
(3, 3, 'app/uploads/max1.jpg', 'app/uploads/max2.jpg', 'app/uploads/max3.jpg', 'app/uploads/max4.jpg'),
(4, 4, 'app/uploads/bella1.jpg', 'app/uploads/bella2.jpg', 'app/uploads/bella3.jpg', 'app/uploads/bella4.jpg'),
(5, 5, 'app/uploads/mia1.jpg', 'app/uploads/mia2.jpg', 'app/uploads/mia3.jpg', 'app/uploads/mia4.jpg'),
(6, 6, 'app/uploads/rocky1.jpg', 'app/uploads/rocky2.jpg', 'app/uploads/rocky3.jpg', 'app/uploads/rocky4.jpg'),
(7, 7, 'app/uploads/chloe1.jpg', 'app/uploads/chloe2.jpg', 'app/uploads/chloe3.jpg', 'app/uploads/chloe4.jpg'),
(8, 8, 'app/uploads/sophie1.jpg', 'app/uploads/sophie2.jpg', 'app/uploads/sophie3.jpg', 'app/uploads/sophie4.jpg'),
(9, 9, 'app/uploads/milo1.jpg', 'app/uploads/milo2.jpg', 'app/uploads/milo3.jpg', 'app/uploads/milo4.jpg'),
(10, 10, 'app/uploads/zara1.jpg', 'app/uploads/zara2.jpg', 'app/uploads/zara3.jpg', 'app/uploads/zara4.jpg'),
(11, 11, 'app/uploads/tina1.jpg', 'app/uploads/tina2.jpg', 'app/uploads/tina3.jpg', 'app/uploads/tina4.jpg'),
(12, 12, 'app/uploads/cleo1.jpg', 'app/uploads/cleo2.jpg', 'app/uploads/cleo3.jpg', 'app/uploads/cleo4.jpg'),
(13, 13, 'app/uploads/simba1.jpg', 'app/uploads/simba2.jpg', 'app/uploads/simba3.jpg', 'app/uploads/simba4.jpg'),
(14, 14, 'app/uploads/fiona1.jpg', 'app/uploads/fiona2.jpg', 'app/uploads/fiona3.jpg', 'app/uploads/fiona4.jpg'),
(15, 15, 'app/uploads/nala1.jpg', 'app/uploads/nala2.jpg', 'app/uploads/nala3.jpg', 'app/uploads/nala4.jpg'),
(16, 16, 'app/uploads/lily1.jpg', 'app/uploads/lily2.jpg', 'app/uploads/lily3.jpg', 'app/uploads/lily4.jpg'),
(17, 17, 'app/uploads/oscar1.jpg', 'app/uploads/oscar2.jpg', 'app/uploads/oscar3.jpg', 'app/uploads/oscar4.jpg'),
(18, 21, NULL, NULL, NULL, NULL),
(19, 22, 'app/uploads/680582bf82e1a_Котик мем в очках.jpg', NULL, NULL, NULL),
(20, 23, 'app/uploads/6806c92ab8bb5_Котик мем в очках.jpg', NULL, NULL, NULL),
(21, 1, 'app/uploads/6806c9f881c70_Котик мем в очках.jpg', NULL, NULL, NULL),
(22, 24, 'app/uploads/6806ca640d0da_Котик мем в очках.jpg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascota_adopcion`
--

CREATE TABLE `mascota_adopcion` (
  `id_mascota_adopcion` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `raza` varchar(100) NOT NULL,
  `edad` varchar(30) NOT NULL,
  `peso` double NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `atencion` varchar(250) NOT NULL,
  `enfermedad` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mascota_adopcion`
--

INSERT INTO `mascota_adopcion` (`id_mascota_adopcion`, `id_usuario`, `nombre`, `raza`, `edad`, `peso`, `tipo`, `descripcion`, `estado`, `atencion`, `enfermedad`) VALUES
(1, 1, 'Toby', 'Labrador', '3 años', 28.5, 'Perro', 'Energético, sociable y perfecto para familias con niños.', 'Disponible', 'Requiere paseos diarios y juego activo.', 'Ninguna'),
(2, 2, 'Luna', 'Persa', '2 años', 4.2, 'Gato', 'Cariñosa, tranquila y adaptada a interiores.', 'Disponible', 'Cepillado frecuente por su pelaje largo.', 'Problemas digestivos menores'),
(3, 3, 'Max', 'Golden Retriever', '5 años', 32, 'Perro', 'Muy obediente, le encanta jugar en el agua y es muy leal.', 'Disponible', 'Necesita ejercicio regular y cepillado.', 'Sin enfermedades'),
(4, 4, 'Bella', 'Bulldog Francés', '4 años', 12, 'Perro', 'Agradable, ama la compañía humana y se lleva bien con otros perros.', 'Disponible', 'Requiere atención especial por su respiración corta.', 'Sin enfermedades'),
(5, 1, 'Mia', 'Siamés', '1 año', 3.5, 'Gato', 'Muy juguetona, le gusta explorar y jugar con pelotas.', 'Disponible', 'Requiere atención a su alimentación.', 'Sin enfermedades'),
(6, 2, 'Rocky', 'Pitbull', '2 años', 30, 'Perro', 'Fiel, protector y necesita ejercicio regular.', 'Disponible', 'Ideal para personas activas.', 'Sin enfermedades'),
(7, 3, 'Chloe', 'Beagle', '3 años', 12.5, 'Perro', 'Curiosa, le encanta seguir olores y hacer ejercicio.', 'Disponible', 'Le gusta estar al aire libre, requiere paseos largos.', 'Sin enfermedades'),
(8, 4, 'Sophie', 'Bichón Frisé', '4 años', 7.5, 'Perro', 'Amistosa, ideal para convivir en departamentos.', 'Disponible', 'Requiere corte de pelo frecuente.', 'Sin enfermedades'),
(9, 1, 'Milo', 'Boxer', '6 años', 29, 'Perro', 'Fiel y protector, le gusta estar con su familia.', 'Disponible', 'Requiere paseos largos y mucha actividad física.', 'Sin enfermedades'),
(10, 2, 'Zara', 'Rottweiler', '3 años', 34, 'Perro', 'Muy leal, ideal para compañía, necesita una familia activa.', 'Disponible', 'Requiere ejercicio diario y entrenamiento.', 'Sin enfermedades'),
(11, 3, 'Tina', 'Cocker Spaniel', '2 años', 10.5, 'Perro', 'Sociable, muy amigable con niños y otros animales.', 'Disponible', 'Requiere paseos diarios y cepillado semanal.', 'Sin enfermedades'),
(12, 4, 'Cleo', 'Gato Europeo', '2 años', 3.2, 'Gato', 'Es independiente, le gusta explorar y tener su espacio.', 'Disponible', 'Requiere menos atención que otros gatos.', 'Sin enfermedades'),
(13, 1, 'Simba', 'Maine Coon', '4 años', 7, 'Gato', 'Grande, cariñoso y le encanta que lo acaricien.', 'Disponible', 'Requiere cepillado frecuente.', 'Sin enfermedades'),
(14, 2, 'Fiona', 'Chihuahua', '2 años', 3, 'Perro', 'Pequeña, pero llena de energía y personalidad.', 'Disponible', 'Ideal para departamentos pequeños.', 'Sin enfermedades'),
(15, 3, 'Nala', 'Dálmata', '5 años', 25, 'Perro', 'Sociable, le encanta correr y jugar al aire libre.', 'Disponible', 'Requiere paseos largos y ejercicio diario.', 'Sin enfermedades'),
(16, 4, 'Lily', 'Basset Hound', '4 años', 18, 'Perro', 'Amistosa, muy leal y le gusta rastrear olores.', 'Disponible', 'Requiere paseos largos y supervisión.', 'Sin enfermedades'),
(17, 1, 'Oscar', 'Shih Tzu', '3 años', 8, 'Perro', 'Amable y juguetón, le gusta estar acompañado.', 'Disponible', 'Ideal para convivir en departamentos pequeños.', 'Sin enfermedades');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascota_perdida`
--

CREATE TABLE `mascota_perdida` (
  `id_mascota_perdida` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `raza` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `fecha_perdida` date NOT NULL,
  `ubicacion_perdida` varchar(200) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `comentario` varchar(250) NOT NULL,
  `imagen_url` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mascota_perdida`
--

INSERT INTO `mascota_perdida` (`id_mascota_perdida`, `id_usuario`, `nombre`, `raza`, `tipo`, `descripcion`, `fecha_perdida`, `ubicacion_perdida`, `estado`, `comentario`, `imagen_url`) VALUES
(1, 6, 'Toby', 'Pastor Alemán', 'Perro', 'Perdido en el parque local, tiene una cicatriz en la pata derecha.', '2025-04-08', 'Parque Central, cerca de la cancha de fútbol', 'Perdido', 'Es muy amigable y responde al nombre de Toby. Ayuda apreciada.', 'app/uploads/toby_perdido.jpg'),
(2, 7, 'Luna', 'Maine Coon', 'Gato', 'Gato grande y peludo, perdió su collar con identificación.', '2025-04-06', 'Barrio El Sol, calle 45', 'Perdido', 'Suele ser reservado, se esconde si está asustado. Favor de no perseguirlo.', 'app/uploads/luna_perdida.jpg'),
(3, 8, 'Max', 'Beagle', 'Perro', 'Perdido en el barrio, tiene una mancha blanca en el pecho.', '2025-04-10', 'Calle 15, cerca del supermercado', 'Perdido', 'Es muy cariñoso y le gusta seguir olores. Se le puede llamar por su nombre.', 'app/uploads/max_perdido.jpg'),
(4, 9, 'Milo', 'Bulldog Francés', 'Perro', 'Perdido el 9 de abril en la zona de restaurantes.', '2025-04-09', 'Avenida Principal, zona de restaurantes', 'Perdido', 'Responde a su nombre, suele ser tímido con extraños.', 'app/uploads/milo_perdido.jpg'),
(5, 10, 'Chloe', 'Schnauzer', 'Perro', 'Perdida durante la tormenta, tiene una cicatriz en el oído izquierdo.', '2025-04-07', 'Avenida del Sol, cerca de la farmacia', 'Perdido', 'Muy amigable pero temerosa. Si la ven, por favor manténganla segura.', 'app/uploads/chloe_perdido.jpg'),
(6, 11, 'Zara', 'Poodle', 'Perro', 'Se perdió mientras paseaba por el barrio. Lleva un collar rosa.', '2025-04-08', 'Barrio Las Palmas, calle 23', 'Perdido', 'Muy amigable, le gusta que la acaricien.', 'app/uploads/zara_perdida.jpg'),
(7, 12, 'Simba', 'Labrador', 'Perro', 'Perdido cerca de un centro comercial, tiene una pata trasera más corta.', '2025-04-05', 'Centro Comercial La Terraza', 'Perdido', 'Le encanta el agua, no suele ladrar mucho, pero puede ser asustadizo.', 'app/uploads/simba_perdido.jpg'),
(8, 13, 'Lily', 'Chihuahua', 'Perro', 'Perdida el 6 de abril, se escapó por la puerta del jardín.', '2025-04-06', 'Calle La Paz, entre las tiendas', 'Perdido', 'Es muy pequeña, tiene un collar con su nombre y número de contacto.', 'app/uploads/lily_perdido.jpg'),
(9, 14, 'Oscar', 'Dachshund', 'Perro', 'Perdido mientras caminaba por la zona del parque, tiene orejas largas.', '2025-04-04', 'Parque Regional, junto al lago', 'Perdido', 'Muy juguetón, se le puede llamar por su nombre.', 'app/uploads/oscar_perdido.jpg'),
(10, 15, 'Penny', 'Cocker Spaniel', 'Perro', 'Perdida cerca del parque, es de color marrón claro y tiene un lazo azul en su collar.', '2025-04-02', 'Parque Los Olivos', 'Perdido', 'Le gusta correr y jugar con otros perros, suele seguir a la gente.', 'app/uploads/penny_perdido.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `nombre`) VALUES
(1, 'administrador'),
(2, 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE `solicitud` (
  `id_solicitud` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_mascota_adopcion` int(11) NOT NULL,
  `acuerdo` tinyint(1) NOT NULL,
  `tipo_vivienda` varchar(50) NOT NULL,
  `descripcion_vivienda` varchar(500) NOT NULL,
  `patio` tinyint(1) NOT NULL,
  `mudanza` varchar(250) NOT NULL,
  `cuido` varchar(250) NOT NULL,
  `gastos` tinyint(1) NOT NULL,
  `post_adopcion` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `solicitud`
--

INSERT INTO `solicitud` (`id_solicitud`, `id_usuario`, `id_mascota_adopcion`, `acuerdo`, `tipo_vivienda`, `descripcion_vivienda`, `patio`, `mudanza`, `cuido`, `gastos`, `post_adopcion`) VALUES
(1, 7, 2, 1, 'Alquilada', 'Vivo en un departamento de dos habitaciones, con una pequeña terraza. El departamento tiene una buena ventilación, pero no mucho espacio exterior.', 1, 'No tengo planes de mudarme en el corto plazo.', 'Si ya no puedo cuidar a la mascota, buscaría un nuevo hogar donde puedan brindarle el cuidado necesario.', 1, 1),
(2, 9, 3, 1, 'Propia', 'Casa con jardín y patio trasero. El espacio es amplio y seguro para una mascota. La zona es tranquila y con pocas calles transitadas.', 1, 'Estoy planeando mudarme el próximo año a una casa más grande.', 'Si ya no pudiera cuidar de la mascota, consideraría ponerla en adopción a alguien de confianza o buscar ayuda en un refugio.', 1, 1),
(3, 11, 4, 1, 'Alquilada', 'Vivo en un departamento pequeño, pero tengo un balcón que podría ser adecuado para una mascota pequeña. El área común tiene un parque cercano.', 0, 'No tengo planes de mudarme pronto, mi contrato de arrendamiento es por dos años más.', 'Si no pudiera cuidar a la mascota en el futuro, buscaría un nuevo hogar para ella en un refugio o con conocidos.', 1, 0),
(4, 13, 5, 1, 'Propia', 'Casa con jardín grande. El patio tiene espacio suficiente para que un perro corra y juegue, y la casa está en un vecindario tranquilo.', 1, 'No tengo planes de mudarme, vivo en la casa de mis padres.', 'Si en algún momento no pudiera cuidar de la mascota, intentaría encontrarle una buena familia o una opción de cuidado a largo plazo.', 1, 1),
(5, 15, 6, 1, 'Alquilada', 'Departamento en el centro de la ciudad. Aunque es pequeño, hay varios parques cercanos. El lugar es bastante tranquilo, pero sin un patio propio.', 0, 'Estoy buscando mudarme a una casa más grande, probablemente dentro de seis meses.', 'Si ya no pudiera cuidar a la mascota, buscaría un lugar adecuado donde puedan darle el cuidado necesario o consideraría la adopción por parte de otra persona.', 1, 1),
(6, 16, 7, 1, 'Propia', 'Vivo en una casa con jardín grande, completamente cercado, ideal para mascotas. La casa está situada en una zona tranquila con pocos ruidos.', 1, 'No tengo planes de mudarme, llevo varios años en esta propiedad.', 'Si no pudiera seguir cuidando de la mascota, me aseguraría de encontrarle un hogar amoroso o contactaría con un refugio.', 1, 0),
(7, 19, 8, 0, 'Alquilada', 'Apartamento pequeño en el quinto piso, sin acceso a áreas comunes al aire libre. Aunque el lugar es pequeño, me comprometo a pasear a la mascota regularmente.', 0, 'No tengo planes de mudarme en este momento, pero podría ser en un par de años.', 'Si no pudiera seguir cuidando a la mascota, haría todo lo posible para encontrarle un hogar adecuado.', 1, 1),
(16, 2, 1, 1, 'Alquilada', 'dfgdfg', 1, 'sdfsd', 'sdfsd', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategoria_articulo`
--

CREATE TABLE `subcategoria_articulo` (
  `id_subcategoria` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `subcategoria_articulo`
--

INSERT INTO `subcategoria_articulo` (`id_subcategoria`, `nombre`, `id_categoria`) VALUES
(1, 'Salud y Bienestar', 1),
(2, 'Higiene y Estética', 1),
(3, 'Historias de Éxito', 2),
(4, 'Cómo Ayudar', 2),
(5, 'Seguimiento: Mascotas Pérdidas', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `correo` varchar(250) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `telefono` varchar(250) NOT NULL,
  `direccion` varchar(250) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `password` varchar(100) NOT NULL,
  `img_url` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `id_rol`, `correo`, `nombre`, `apellido`, `telefono`, `direccion`, `estado`, `password`, `img_url`) VALUES
(1, 1, 'anny.acevedo@gmail.com', 'Anny', 'Acevedo', '345345', 'San Jose', 1, '$2y$10$XNpGOt8R2Qop/LXT/Ip.vO5J0bYjv6oIOQGVk2Mnm4wZWZvwglUkW', 'app/uploads/6803fae796f0f_descarga (1).jpg'),
(2, 1, 'mel.gutierrez@gmail.com', 'Melany', 'Gutierrez', '  222222', 'San Jose', 1, '$2y$10$bq01bZOQCHdFpFhJ9tD8/.5fW.F/IzOGecKmBuUawJOFIq..C8UJm', 'app/uploads/6806d51078d3f_Котик мем в очках.jpg'),
(3, 1, 'isa.gutierrez@gmail.com', 'Isabel', 'Gutierrez', '69874521', 'Heredia, San Pablo', 1, '$2y$10$dFED8zkCD7uYdacM3WdiFeNxU4/APCRJsW9p04T4W9PiQrUrBUpm2', ''),
(4, 1, 'wishman.gaitan@gmail.com', 'Wishman', 'Gaitan', '87112233', 'Cartago, Paraíso', 1, '$2y$10$kWv/emhDOAzaQxo34xFABex9Z4XjmyYlpjUGpvhCHCAg/yRP7RGWm', ''),
(5, 2, 'maria.lopez@gmail.com', 'Maria', 'Lopez', '70001122', 'Alajuela, San Ramón', 1, '$2y$10$DK3affBCCG/Knirx6KIywunKfhSlRhuATSwFGppfNM3s.Qd.t3P92', ''),
(6, 2, 'daniel.mora@gmail.com', 'Daniel', 'Mora', '63457890', 'Guanacaste, Liberia', 1, '$2y$10$qOH9ZXCxH/UhFYePSOc7m.aPgI7LbZllf8zhKp4R./a5ac7RqgJ5e', ''),
(7, 2, 'sofia.castro@gmail.com', 'Sofia', 'Castro', '89871234', 'San José, Desamparados', 1, '$2y$10$xDs7JYl9rx4t0a4qO7omcO4H8ljL5bFXh1HHlCc9pGSq57ZPC6QD6', ''),
(8, 2, 'diego.perez@gmail.com', 'Diego', 'Perez', '75007891', 'Heredia, San Rafael', 1, '$2y$10$o8GieiwzT213nDV6.IgQCOG.7OsUvsCiIybqc7ir6R11JE982vbEi', ''),
(9, 2, 'karla.martinez@gmail.com', 'Karla', 'Martinez', '69002211', 'Puntarenas, Esparza', 1, '$2y$10$qIAJ/Ttl8OpdRKy7EpR7su3wFbYFa4RSMlX338qdwa/fGbpntBfL.', ''),
(10, 2, 'ricardo.vargas@gmail.com', 'Ricardo', 'Vargas', '87789900', 'Cartago, El Guarco', 1, '$2y$10$gPlFiwQRIsQdFLgf0ROTjObdXKCVkWvLpDh5k0X5/BMe/YAcAjl2O', ''),
(11, 2, 'elena.soto@gmail.com', 'Elena', 'Soto', '67891234', 'San José, Tibás', 1, '$2y$10$jaMPVm1Siot4OtIINCe0wOQpFL5sJpKtG4Q6.cuLFS0TdPyxdDaAC', ''),
(12, 2, 'jorge.ramirez@gmail.com', 'Jorge', 'Ramirez', '65544332', 'Alajuela, Grecia', 1, '$2y$10$1TNsJPJuPk4khEYb9fP/Ve8eaJKQZu1iYC31oi/.bBr.PkK7bCvlq', ''),
(13, 2, 'veronica.navarro@gmail.com', 'Veronica', 'Navarro', '66778899', 'Heredia, Belén', 1, '$2y$10$ZITp7NOI2sJbdmTNw1EyK.vTIvjBM/H9OZBMrU0cHyHjwcl4j5Zq.', ''),
(14, 2, 'luis.fuentes@gmail.com', 'Luis', 'Fuentes', '71239876', 'Cartago, Turrialba', 1, '$2y$10$21eI6vhS6T.nX4aR0cxPMeTDnatrv54tjwar1Ky6hoDWPIZMXvzxi', ''),
(15, 2, 'andrea.salazar@gmail.com', 'Andrea', 'Salazar', '79870012', 'Limón, Pococí', 1, '$2y$10$K/LfWKyq8o8pZWiwPFtxC.q02MnyNXbizyKJBjOPzodjVq1Axxtli', ''),
(16, 2, 'alejandro.acuna@gmail.com', 'Alejandro', 'Acuña', '64445566', 'San José, Goicoechea', 1, '$2y$10$kxrzR74c.kfNrIBFrlVnYevz4TX1hHnitmPtilsDTSMd2zr1M3qRm', ''),
(17, 2, 'rebeca.campos@gmail.com', 'Rebeca', 'Campos', '85556677', 'Alajuela, Naranjo', 1, '$2y$10$p0iEr5qaRgMiFuidLii.3uCZRV8ZFfZNfyRaP6cO5LKikqnM4liUG', ''),
(18, 2, 'felipe.rodriguez@gmail.com', 'Felipe', 'Rodriguez', '89998877', 'Heredia, Santo Domingo', 1, '$2y$10$EPBnY/a2vx3foY/.s8D9M.JTFZ4coWbJz4xxfDxKVYTWLUVRbrIue', ''),
(19, 2, 'monica.murillo@gmail.com', 'Monica', 'Murillo', '68887766', 'Puntarenas, Buenos Aires', 1, '$2y$10$I6Cw7RVYhkBfMJEj6O7DsebfaYXJTn7/Zd8WStkT7sJ5iDFq55Ode', ''),
(20, 2, 'victor.marin@gmail.com', 'Victor', 'Marin', '61119900', 'Cartago, Jiménez', 1, '$2y$10$IQVewUQ8jdXCQ92cMP4QDOygMdh4GFkUk5JhVECN9CJWJjZb3OAAa', ''),
(21, 2, 'camila.alpizar@gmail.com', 'Camila', 'Alpizar', '73332211', 'San José, Santa Ana', 1, '$2y$10$obxlf3NYzyVOW4Se3ArGd.LBD99hHhBWxj6n.CT18J7VsiZLKFP6i', ''),
(22, 2, 'esteban.sequeira@gmail.com', 'Esteban', 'Sequeira', '87880099', 'Alajuela, Palmares', 1, '$2y$10$FNtgRFjQifIyOXgahfc9fuLejI2zasGLjirnmG2c06T9ioH3BWJE2', ''),
(23, 2, 'diana.rojas@gmail.com', 'Diana', 'Rojas', '66554433', 'Heredia, Flores', 1, '$2y$10$oIpUkTZyH2LRHKTG4R43ZOzCEDlM3vdk5sCD2CBYDm3OQ/ANUv1cO', ''),
(24, 2, 'marco.chavez@gmail.com', 'Marco', 'Chavez', '62223344', 'Cartago, Oreamuno', 1, '$2y$10$NO2VC3f7YBTIN1gSE6.kn.cLh0mkwwYI3SzQIam/gQ5so/Mab4ViW', ''),
(25, 2, 'paula.araya@gmail.com', 'Paula', 'Araya', '81129008', 'San José, Montes de Oca', 1, '$2y$10$2gv63qbs1y3bHDX1QWZ5ZeUrv05VlNNZLVk4zlRkidX3C/FxwfL.u', ''),
(26, 2, 'cristian.leon@gmail.com', 'Cristian', 'León', '68884455', 'Puntarenas, Coto Brus', 1, '$2y$10$oR0QnsB9jiWni15HSytf2eRMiMobdlRC/60IUuAtA2vSAuyZ5hw2S', ''),
(27, 2, 'nancy.brenes@gmail.com', 'Nancy', 'Brenes', '78889922', 'Limón, Siquirres', 1, '$2y$10$gz3Hls5RjnJKZMiGs/scFeMNyiVQhluGYSPU/jDXswKu8ebPF/NUi', ''),
(28, 2, 'franklin.solano@gmail.com', 'Franklin', 'Solano', '61114477', 'San José, Curridabat', 1, '$2y$10$sd8fxVJGnQeWP29eJykpK.6hGI01IGMpFld/UU8BoPP1BodWatYPG', ''),
(29, 2, 'melissa.quiros@gmail.com', 'Melissa', 'Quiros', '69006677', 'Alajuela, Atenas', 1, '$2y$10$i36O8Re.mOEVdqG96VDE.eT7WJB4QsGWRjuLOnh/ER6ZoI/u91BLC', ''),
(30, 2, 'henry.murillo@gmail.com', 'Henry', 'Murillo', '72221100', 'Cartago, Cartago Centro', 1, '$2y$10$Ib9x8Z5Bs.j4qNOjmVStZuDoCf5gm/B4ZHpslWVJTqFA9dcKG8dN2', ''),
(31, 2, 'beatriz.hernandez@gmail.com', 'Beatriz', 'Hernandez', '79997788', 'Heredia, Barva', 1, '$2y$10$t2ajr3TCkPJNY5JyU8zvvuB8C0KzgRvr31xvwkVXL46hnnOqKQtsi', ''),
(50, 2, 'user@gmail.com', 'Melany', 'PRUEBA', '5555555', '', 1, '$2y$10$ad4a49iZgMaoTm9uvLvsCer4v6KuPjHjz1I1bTi2s3/WOMS6T5RLW', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`id_articulo`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_subcategoria` (`id_subcategoria`);

--
-- Indices de la tabla `categoria_articulo`
--
ALTER TABLE `categoria_articulo`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `categoria_evento`
--
ALTER TABLE `categoria_evento`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`id_evento`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `imagen_adopcion`
--
ALTER TABLE `imagen_adopcion`
  ADD PRIMARY KEY (`id_imagen`);

--
-- Indices de la tabla `mascota_adopcion`
--
ALTER TABLE `mascota_adopcion`
  ADD PRIMARY KEY (`id_mascota_adopcion`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `mascota_perdida`
--
ALTER TABLE `mascota_perdida`
  ADD PRIMARY KEY (`id_mascota_perdida`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`id_solicitud`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `subcategoria_articulo`
--
ALTER TABLE `subcategoria_articulo`
  ADD PRIMARY KEY (`id_subcategoria`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `id_articulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `categoria_articulo`
--
ALTER TABLE `categoria_articulo`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `categoria_evento`
--
ALTER TABLE `categoria_evento`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `evento`
--
ALTER TABLE `evento`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `imagen_adopcion`
--
ALTER TABLE `imagen_adopcion`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `mascota_adopcion`
--
ALTER TABLE `mascota_adopcion`
  MODIFY `id_mascota_adopcion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `mascota_perdida`
--
ALTER TABLE `mascota_perdida`
  MODIFY `id_mascota_perdida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `id_solicitud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `subcategoria_articulo`
--
ALTER TABLE `subcategoria_articulo`
  MODIFY `id_subcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD CONSTRAINT `categoria_articulo` FOREIGN KEY (`id_categoria`) REFERENCES `categoria_articulo` (`id_categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usuario_rol` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `evento`
--
ALTER TABLE `evento`
  ADD CONSTRAINT `id_categoria_evento` FOREIGN KEY (`id_categoria`) REFERENCES `categoria_evento` (`id_categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `mascota_adopcion`
--
ALTER TABLE `mascota_adopcion`
  ADD CONSTRAINT `usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `mascota_perdida`
--
ALTER TABLE `mascota_perdida`
  ADD CONSTRAINT `usuario_id_rol` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD CONSTRAINT `rol_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_rol_id` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
