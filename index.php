<?php

$cursos = [

    1 => [
        "nombre" => "1° año",
        "materias" => [
            "Matemática",
            "Lengua y Literatura",
            "Inglés",
            "Biología",
            "Ciencias Sociales",
            "Educación Física",
            "Artes Visuales",
            "Geografía",
            "Música",
            "Dibujo Técnico",
            "Educación Tecnológica",
            "Físico-Química",
            "Formación Ética y Ciudadana",
            "Historia"
        ],
        "talleres" => [
            [ 
                "nombre" => "Taller de Herrería",
                "imagen" => "img/herreria.png",
                "descripcion" => "Introducción al pensamiento tecnológico y al uso responsable de diferentes herramientas."
            ],
            [
                "nombre" => "Taller de Carpintería",
                "imagen" => "img/carpinteria.png",
                "descripcion" => "Actividades prácticas para explorar fenómenos científicos."
            ],
             [
                "nombre" => "Taller de Electricidad",
                "imagen" => "img/electricidad.png",
                "descripcion" => "Actividades prácticas para explorar fenómenos científicos."
            ]
        ]
    ],

    2 => [
        "nombre" => "2° año",
        "materias" => [
            "Matemática",
            "Lengua y Literatura",
            "Inglés",
            "Biología",
            "Ciencias Sociales",
            "Educación Física",
            "Artes Visuales",
            "Geografía",
            "Música",
            "Dibujo Técnico",
            "Educación Tecnológica",
            "Físico-Química",
            "Formación Ética y Ciudadana",
            "Historia"
        ],
        "talleres" => [
           [ 
                "nombre" => "Taller de Herrería",
                "imagen" => "img/taller_tecnologia.png",
                "descripcion" => "Introducción al pensamiento tecnológico y al uso responsable de diferentes herramientas."
            ],
            [
                "nombre" => "Taller de Carpintería",
                "imagen" => "img/taller_ciencias.png",
                "descripcion" => "Actividades prácticas para explorar fenómenos científicos."
            ],
             [
                "nombre" => "Taller de Electricidad",
                "imagen" => "img/taller_ciencias.png",
                "descripcion" => "Actividades prácticas para explorar fenómenos científicos."
            ]
        ]
    ],

    3 => [
        "nombre" => "3° año",
        "materias" => [
            "Matemática",
            "Lengua y Literatura",
            "Inglés",
            "Biología",
            "Ciencias Sociales",
            "Educación Física",
            "Artes Visuales",
            "Geografía",
            "Música",
            "Dibujo Técnico",
            "Educación Tecnológica",
            "Físico-Química",
            "Formación Ética y Ciudadana",
            "Historia"
        ],
        "talleres" => [
          [ 
                "nombre" => "Taller de Herrería",
                "imagen" => "img/taller_tecnologia.png",
                "descripcion" => "Introducción al pensamiento tecnológico y al uso responsable de diferentes herramientas."
            ],
            [
                "nombre" => "Taller de Carpintería",
                "imagen" => "img/taller_ciencias.png",
                "descripcion" => "Actividades prácticas para explorar fenómenos científicos."
            ],
             [
                "nombre" => "Taller de Electricidad",
                "imagen" => "img/taller_ciencias.png",
                "descripcion" => "Actividades prácticas para explorar fenómenos científicos."
            ]
        ]
    ]
];

/*
|--------------------------------------------------------------------------
| Especialidades
|--------------------------------------------------------------------------
*/

$especialidades = [

    "informatica" => [
        "nombre" => "Informática",
        "descripcion" => "Tecnología, programación, redes y herramientas digitales.",
        "clase" => "tema-informatica",
        "imagen_principal" => "img/compu_silueta.png",
        "imagen_secundaria" => "img/internet_silueta.png",

        "materias" => [
            4 => [
                "Programación",
                "Matemática",
                "Sistemas Operativos",
                "Algoritmos"
            ],
            5 => [
                "Programación",
                "Matemática",
                "Desarrollo Web",
                "Algoritmos"
            ],
            6 => [
                "Programación",
                "Matemática",
                "Desarrollo Web",
                "Organización de Empresas y Legislación del Trabajo"
            ],
            7 => [
                "Programación 3",
                "Contabilidad de Costos",
                "Psicoloía aplicada a la empresa",
                "Simulación",
                "Analisis de sistemas",
                "Algoritmos estadísticos",
                "Investigación operativa",
                "Matemática",
                "Inglés",
                "Ed. Física",
                "Introducción a la Economía Política"
            ]
        ],

        "talleres" => [
            [
                "nombre" => "Taller de Programación",
                "imagen" => "img/taller_programacion.png",
                "descripcion" => "Desarrollo de soluciones mediante lenguajes de programación."
            ],
            [
                "nombre" => "Taller de Redes",
                "imagen" => "img/taller_redes.png",
                "descripcion" => "Introducción al funcionamiento y configuración de redes."
            ],
            [
                "nombre" => "Taller de Desarrollo Web",
                "imagen" => "img/taller_web.png",
                "descripcion" => "Creación de sitios web utilizando diferentes tecnologías."
            ]
        ]
    ],

    "aviacion" => [
        "nombre" => "Aviación",
        "descripcion" => "Formación orientada al mundo aeronáutico y sus tecnologías.",
        "clase" => "tema-aviacion",
        "imagen_principal" => "img/avion.png",
        "imagen_secundaria" => "",

        "materias" => [
            4 => [
                "Aerodinámica",
                "Navegación Aérea",
                "Meteorología",
                "Mecánica Aeronáutica"
            ],
            5 => [
                "Aerodinámica",
                "Navegación Aérea",
                "Seguridad Operacional",
                "Instrumentos de Vuelo"
            ],
            6 => [
                "Navegación Aérea",
                "Seguridad Operacional",
                "Instrumentos de Vuelo"
            ],
            7 => [
                "Seguridad Operacional",
                "Instrumentos de Vuelo"
            ]
        ],

        "talleres" => [
            [
                "nombre" => "Taller Aeronáutico",
                "imagen" => "img/taller_aeronautico.png",
                "descripcion" => "Introducción práctica al funcionamiento y mantenimiento de aeronaves."
            ],
            [
                "nombre" => "Taller de Navegación",
                "imagen" => "img/taller_navegacion.png",
                "descripcion" => "Trabajo con conceptos y herramientas relacionadas con la navegación aérea."
            ],
            [
                "nombre" => "Taller de Seguridad",
                "imagen" => "img/taller_seguridad.png",
                "descripcion" => "Conceptos fundamentales de seguridad y procedimientos aeronáuticos."
            ]
        ]
    ],

    "aerofotogrametria" => [
        "nombre" => "Aerofotogrametría",
        "descripcion" => "Tecnología aplicada a la captura, análisis y representación del territorio.",
        "clase" => "tema-aerofotogrametria",
        "imagen_principal" => "img/dron.png",
        "imagen_secundaria" => "img/camara.png",

        "materias" => [
            4 => [
                "Fotogrametría",
                "Topografía",
                "Cartografía",
                "Teledetección"
            ],
            5 => [
                "Fotogrametría",
                "Topografía",
                "Sistemas de Información Geográfica",
                "Procesamiento de Imágenes"
            ],
            6 => [
                "Sistemas de Información Geográfica",
                "Procesamiento de Imágenes",
                "Cartografía"
            ],
            7 => [
                "Análisis del discurso",
                "Geomorfología",
                "Sensores remotos",
                "Cartografía",
                "Fotointerpretación",
                "Fotogrametría 3",
                "Fotografía 3",
                "Técnicas audiovisuales",
                "Organización Industrial"
            ]
        ],

        "talleres" => [
            [
                "nombre" => "Fotogrametría digital",
                "imagen" => "img/taller_fotografia.png",
                "descripcion" => "Captura y análisis de imágenes obtenidas desde plataformas aéreas."
            ],
            [
                "nombre" => "Topografía",
                "imagen" => "img/taller_drones.png",
                "descripcion" => "Introducción al uso de drones para relevamiento y captura de información."
            ],
            [
                "nombre" => "Cartografía",
                "imagen" => "img/taller_cartografia.png",
                "descripcion" => "Elaboración e interpretación de representaciones cartográficas."
            ],
            [
                "nombre" => "Geodesia",
                "imagen" => "img/taller_cartografia.png",
                "descripcion" => "Elaboración e interpretación de representaciones cartográficas."
            ]
        ]
    ]

];

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E.E.T N°3 Luis.C.Candelaria</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&family=Orbitron:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css?v=4">

    <style>
        .header-actions {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 10px;
            flex-wrap: wrap;
        }

        /* Aviso informativo sobre materias y temarios */
.aviso-materias {
    display: flex;
    align-items: flex-start;
    gap: 14px;
    margin-top: 24px;
    padding: 17px 20px;
    background: rgba(196, 154, 58, .09);
    border: 1px solid rgba(196, 154, 58, .55);
    border-left: 4px solid #c49a3a;
    border-radius: 12px;
    color: #77603e;
    font-family: "DM Sans", sans-serif;
    font-size: .92rem;
    line-height: 1.6;
}

.aviso-materias .aviso-icono {
    flex-shrink: 0;
    color: #ad8232;
    font-size: 1.35rem;
    line-height: 1.4;
}

.aviso-materias p {
    margin: 0;
}

.aviso-materias strong {
    color: #db9b10;
    font-weight: 700;
}

@media (max-width: 575px) {
    .aviso-materias {
        gap: 10px;
        padding: 14px;
        font-size: .85rem;
    }
}

        .btn-requisitos {
            cursor: pointer;
            font: inherit;
            white-space: normal;
            text-align: center;
            background-color: #00000086 !important;
            color: #ffd78e !important;
            border: 1px solid #c49a3a !important;
            transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease;
        }

        .btn-requisitos:hover,
        .btn-requisitos:focus-visible {
            background-color: #c49a3a !important;
            color: #101722 !important;
            border-color: #c49a3a !important;
        }

        #modalRequisitos .modal-content {
            border: 1px solid rgba(190, 151, 70, .5);
            border-radius: 14px;
            overflow: hidden;
        }

        #modalRequisitos .modal-header {
            background: #101722;
            color: #fff;
            align-items: flex-start;
        }

        #modalRequisitos .modal-title {
            font-family: "Montserrat", sans-serif;
            font-size: clamp(1rem, 2.5vw, 1.25rem);
            line-height: 1.45;
            font-weight: 700;
            padding-right: 12px;
        }

        #modalRequisitos .btn-close {
            filter: invert(1);
            flex-shrink: 0;
        }

        #modalRequisitos .modal-body {
            color: #202833;
            font-size: .98rem;
            line-height: 1.6;
            overflow-wrap: anywhere;
        }

        #modalRequisitos .requisitos-lista {
            padding-left: 1.25rem;
            margin-bottom: 1rem;
        }

        #modalRequisitos .requisitos-lista li {
            margin-bottom: .45rem;
        }

        #modalRequisitos .aviso-final {
            font-weight: 800;
            text-transform: uppercase;
            margin-top: 1.25rem;
        }

        @media (max-width: 767px) {
            .header-actions { gap: 6px; max-width: 58%; }
            .header-actions .btn-inscripcion { padding: 8px 10px; font-size: 11px; line-height: 1.25; }
            .btn-requisitos { max-width: 155px; }
            #modalRequisitos .modal-dialog { margin: .75rem; }
        }

        @media (max-width: 400px) {
            .header-actions { max-width: 62%; }
            .header-actions .btn-inscripcion { padding: 7px 8px; font-size: 10px; }
        }

        #pantallaInicio .intro-layout {
            display: grid;
            grid-template-columns: minmax(0, 1.15fr) minmax(300px, .85fr);
            align-items: center;
            gap: clamp(24px, 4vw, 56px);
            width: 100%;
            padding-block: clamp(32px, 5vw, 64px);
        }

        #pantallaInicio .intro-content { width: 100%; max-width: none; min-width: 0; margin: 0; }

        .equipo-directivo {
            position: relative;
            min-width: 0;
            padding: clamp(22px, 3vw, 32px);
            color: #f5f3ee;
            background: linear-gradient(145deg, rgba(16, 23, 34, .97), rgba(24, 34, 49, .95));
            border: 1px solid rgba(196, 154, 58, .7);
            border-radius: 20px;
            box-shadow: 0 18px 45px rgba(0, 0, 0, .22);
            overflow: hidden;
        }

        .equipo-directivo::before {
            content: "";
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 4px;
            background: linear-gradient(90deg, #c49a3a, #ffe0a0, #c49a3a);
        }

        .equipo-directivo .equipo-etiqueta {
            display: inline-block;
            margin-bottom: 8px;
            color: #ffd78e;
            font-family: "DM Sans", sans-serif;
            font-size: .75rem;
            font-weight: 700;
            letter-spacing: .14em;
            text-transform: uppercase;
        }

        .equipo-directivo h2 {
            margin: 0 0 8px;
            color: #fff;
            font-family: "Montserrat", sans-serif;
            font-size: clamp(1.35rem, 2.2vw, 1.8rem);
            font-weight: 700;
            line-height: 1.25;
        }

        .equipo-directivo .equipo-intro {
            margin: 0 0 20px;
            color: #d6dce4;
            font-size: .94rem;
            line-height: 1.55;
        }

        .equipo-lista { display: grid; gap: 0; margin: 0; padding: 0; list-style: none; }

        .equipo-lista li {
            display: grid;
            grid-template-columns: minmax(0, .9fr) minmax(0, 1.1fr);
            gap: 12px;
            padding: 11px 0;
            border-top: 1px solid rgba(255, 255, 255, .12);
            line-height: 1.4;
            overflow-wrap: anywhere;
        }

        .equipo-lista .equipo-cargo { color: #ffd78e; font-size: .88rem; font-weight: 700; }
        .equipo-lista .equipo-nombre { color: #f5f3ee; font-size: .9rem; text-align: right; }

        @media (max-width: 991px) {
            #pantallaInicio .intro-layout { grid-template-columns: minmax(0, 1fr); gap: 28px; max-width: 760px; margin-inline: auto; }
            .equipo-directivo { width: 100%; }
        }

        @media (max-width: 575px) {
            #pantallaInicio .intro-layout { padding-block: 28px; gap: 22px; }
            .equipo-directivo { padding: 22px 18px; border-radius: 16px; }
            .equipo-lista li { grid-template-columns: minmax(0, 1fr); gap: 3px; padding: 12px 0; }
            .equipo-lista .equipo-nombre { text-align: left; }
        }

        .footer-inner {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 18px;
            padding-block: 28px;
            text-align: center;
        }

        .footer-title {
            margin: 0;
            color: #f5f3ee;
            font-family: "Montserrat", sans-serif;
            font-size: clamp(1rem, 2vw, 1.15rem);
            font-weight: 600;
        }

        .footer-links { display: flex; flex-wrap: wrap; justify-content: center; gap: 10px; width: 100%; }

        .footer-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 42px;
            max-width: 100%;
            padding: 10px 16px;
            border: 1px solid rgba(196, 154, 58, .75);
            border-radius: 999px;
            background: rgba(0, 0, 0, .18);
            color: #ffd78e;
            font-family: "DM Sans", sans-serif;
            font-size: .9rem;
            font-weight: 600;
            line-height: 1.35;
            text-align: center;
            text-decoration: none;
            overflow-wrap: anywhere;
            transition: background-color .25s ease, color .25s ease, border-color .25s ease, transform .25s ease;
        }

        .footer-link:hover,
        .footer-link:focus-visible {
            background: #c49a3a;
            color: #101722;
            border-color: #ffd78e;
            transform: translateY(-2px);
            outline: none;
        }

        .footer-link:focus-visible { box-shadow: 0 0 0 3px rgba(255, 215, 142, .3); }

        @media (max-width: 575px) {
            .footer-inner { gap: 14px; padding-block: 24px; }
            .footer-links { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 8px; }
            .footer-link { padding: 10px 8px; border-radius: 12px; font-size: .82rem; }
        }
    </style>

</head>

<body>

    <!-- ENCABEZADO -->
    <header class="site-header">
        <div class="header-inner">
            <a href="#" class="brand" id="volverInicio">
                <div class="school-logo">
                    <img src="img/logo_candelaria.png">
                </div>
                <div class="school-name">
                    <span>Escuela Técnica</span>
                    <strong>E.E.T N°3 Teniente Luis Cenobio Candelaria</strong>
                </div>
            </a>
            <div class="header-actions">
                <button type="button" class="btn-inscripcion btn-requisitos" data-bs-toggle="modal" data-bs-target="#modalRequisitos">
                    Requisitos para inscribir
                </button>
            </div>
        </div>
    </header>

    <!-- Modal Requisitos -->
    <div class="modal fade" id="modalRequisitos" tabindex="-1" aria-labelledby="modalRequisitosTitulo" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="modalRequisitosTitulo">
                        SÍ O SÍ DEBERÁ HACERSE LA INSCRIPCIÓN PRESENCIAL acercándose a la institución educativa. De querer inscribirlo en 1er año, a la hora de la inscripción presencial deberá hacerlo presentando estos datos:
                    </h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <ol class="requisitos-lista">
                        <li>Constancia de alumno regular de 6° grado.</li>
                        <li>Partida de nacimiento (legalizada).</li>
                        <li>Fotocopia del frente y dorso del D.N.I.</li>
                        <li>Constancia de CUIL.</li>
                        <li>2 fotos 4x4.</li>
                        <li>Electrocardiograma.</li>
                        <li>Grupo sanguíneo.</li>
                        <li>Fotocopia de la planilla de salud o troquel "DPTO SALUD ESCOLAR" (debe incluir controles de buena salud, aptitud física, bucodental, vacuna completa y visual. <strong>Si falta algún control, deberá realizarse de forma particular.</strong>)</li>
                        <li>1 carpeta de tres solapas.</li>
                        <li>Fotocopia del DNI del padre, madre o tutor.</li>
                        <li>Constancia de CUIL del padre, madre o tutor.</li>
                        <li>Certificado de aprobación de 6° año (a presentar al inicio del ciclo 2027).</li>
                        <li>Informe anual de 6° año cursado (a presentar al inicio del ciclo 2027).</li>
                        <li>Cuota anual de la cooperadora al momento de la inscripción (no excluyente): <strong>valor $30.000.</strong></li>
                    </ol>
                    <p class="aviso-final">No se recibirán inscripciones en las que no se adjunten todos los requisitos mencionados.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- NAVEGACIÓN DE CURSOS -->
    <nav class="course-nav">
        <div class="container">
            <div class="course-nav-inner">
                <?php for ($i = 1; $i <= 7; $i++): ?>
                    <div class="dropdown">
                        <button class="course-button dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" data-bs-boundary="viewport" type="button">
                            <?= $i ?>° año
                        </button>
                        <ul class="dropdown-menu">
                            <?php if ($i <= 3): ?>
                                <li>
                                    <button class="dropdown-item opcion-contenido" data-curso="<?= $i ?>" data-tipo="materias">Materias</button>
                                </li>
                                <li>
                                    <button class="dropdown-item opcion-contenido" data-curso="<?= $i ?>" data-tipo="talleres">Talleres</button>
                                </li>
                            <?php else: ?>
                                <li>
                                    <button class="dropdown-item opcion-especialidad" data-curso="<?= $i ?>" data-especialidad="informatica">Informática</button>
                                </li>
                                <li>
                                    <button class="dropdown-item opcion-especialidad" data-curso="<?= $i ?>" data-especialidad="aerofotogrametria">Aerofotogrametría</button>
                                </li>
                                <li>
                                    <button class="dropdown-item opcion-especialidad" data-curso="<?= $i ?>" data-especialidad="aviacion">Aviación</button>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </nav>

    <!-- CONTENIDO PRINCIPAL -->
    <main>

        <!-- PANTALLA INICIAL -->
        <section id="pantallaInicio" class="intro-section">
            <div class="intro-decoration intro-decoration-one"></div>
            <div class="intro-decoration intro-decoration-two"></div>
            <div class="container">
                <div class="intro-layout">
                    <div class="intro-content">
                        <span class="eyebrow">INSTITUCIÓN EDUCATIVA</span>
                        <h1>Conocé nuestra <span>propuesta educativa</span></h1>
                        <p>
                            Seleccioná un año para consultar las materias, talleres y especialidades disponibles.
                            Aunque si ya buscas incribirte o incribir a tu hijo/a selecciona el boton "Requisitos para inscribir"
                            en la parte superior a la derecha para saber que debes hacer.
                        </p>
                        <div class="intro-line"></div>
                        <p class="intro-small">Para 4°, 5°, 6° y 7° también podrás elegir una orientación especializada.</p>
                        <div class="aviso-materias" role="note">
    <span class="aviso-icono" aria-hidden="true">ℹ</span>
    <p>
        Todos los cursos cuentan con <strong>14 materias</strong>, incluidos los talleres.
        En algunas materias podrás consultar el temario una vez seleccionado
        el año y la materia correspondiente. si le aparece en blanco un mensaje "not found" es porque 
        no tiene temario cargado, vuelva al incio y revise otras.
    </p>
</div>
                    </div>
                    <aside class="equipo-directivo" aria-labelledby="tituloEquipoDirectivo">
                        <span class="equipo-etiqueta">Nuestra institución</span>
                        <h2 id="tituloEquipoDirectivo">Equipo Directivo</h2>
                        <p class="equipo-intro">Las Autoridades Escolares Actuales son:</p>
                        <ul class="equipo-lista">
                            <li><span class="equipo-cargo">Rector</span><span class="equipo-nombre">Prof. Machado Sebastian</span></li>
                            <li><span class="equipo-cargo">Vice Rectora</span><span class="equipo-nombre">Prof. Gatti Emma</span></li>
                            <li><span class="equipo-cargo">Secretaria</span><span class="equipo-nombre">Prof. Torres Fernanda</span></li>
                            <li><span class="equipo-cargo">Regente Turno Mañana</span><span class="equipo-nombre">Prof. Rivarossa Gabriel</span></li>
                            <li><span class="equipo-cargo">Regente Turno Tarde</span><span class="equipo-nombre">Prof. Barzola Ana</span></li>
                            <li><span class="equipo-cargo">Jefe de Taller</span><span class="equipo-nombre">Prof. Giambirtone Sara</span></li>
                            <li><span class="equipo-cargo">Asesora Pedagógica</span><span class="equipo-nombre">Prof. Formentti Soledad</span></li>
                        </ul>
                    </aside>
                </div>
            </div>
        </section>

        <!-- PANEL DE ESPECIALIDAD -->
        <section id="especialidadPanel" class="specialty-section d-none">
            <div class="specialty-background-element"></div>
            <div class="container">
                <div class="specialty-layout">
                    <div class="specialty-text">
                        <span class="specialty-eyebrow" id="especialidadCurso">4° AÑO</span>
                        <h1 id="especialidadTitulo">Informática</h1>
                        <p id="especialidadDescripcion">Tecnología, programación, redes y herramientas digitales.</p>
                        <div class="specialty-options">
                            <button class="specialty-option" id="btnMateriasEspecialidad">
                                <span>Materias</span>
                                <small>Ver materias de la especialidad</small>
                            </button>
                            <button class="specialty-option" id="btnTalleresEspecialidad">
                                <span>Talleres</span>
                                <small>Ver talleres disponibles</small>
                            </button>
                        </div>
                    </div>
                    <div class="specialty-visual">
                        <img id="imagenEspecialidadPrincipal" class="specialty-main-image" src="" alt="">
                        <img id="imagenEspecialidadSecundaria" class="specialty-secondary-image" src="" alt="">
                    </div>
                </div>
            </div>
        </section>

        <!-- CONTENIDO -->
        <section id="contenido" class="content-section d-none">
            <div class="container">
                <div class="content-heading">
                    <div>
                        <span id="etiquetaCurso">1° AÑO</span>
                        <h2 id="tituloContenido">Materias</h2>
                    </div>
                    <button id="volverEspecialidad" class="back-button d-none">← Volver a especialidad</button>
                </div>

                <div id="materiasContainer" class="d-none">
                    <div id="materiasGrid" class="row g-4"></div>
                </div>

                <div id="talleresContainer" class="d-none">
                    <div id="talleresGrid" class="row g-4"></div>
                </div>
            </div>
        </section>

    </main>

    <!-- FOOTER -->
    <footer class="site-footer">
        <div class="container footer-inner">
            <p class="footer-title">Escuela Técnica · E.E.T. N.º 3 Teniente Luis Cenobio Candelaria</p>
            <nav class="footer-links" aria-label="Enlaces institucionales">
                <a class="footer-link" href="contactanos.php">Contactanos</a>
                <a class="footer-link" href="nosotros.php">Acerca de nosotros</a>
                <a class="footer-link" href="ubicacion.php">Ubicación</a>
                <a class="footer-link" href="instagram.php">Instagram</a>
                <a class="footer-link" href="acuerdo_escolar.php">Acuerdo escolar de convivencia</a>
                <a class="footer-link" href="historia.php">Historia de la escuela</a>
            </nav>
        </div>
    </footer>

    <script>
        const cursos = <?= json_encode($cursos, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?>;
        const especialidades = <?= json_encode($especialidades, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?>;
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>

    <!-- Enlaces a materias de 1° año -->
    <script>
    (() => {
        const carpetaMaterias = "materias/1ero/";
        const normalizar = (texto) => (texto || "").normalize("NFD").replace(/[\u0300-\u036f]/g, "").toLowerCase().trim();
        const crearNombreArchivo = (nombre) => normalizar(nombre).replace(/[^a-z0-9]+/g, "_").replace(/^_+|_+$/g, "");

        function enlazarMateriasDePrimerAnio() {
            const grilla = document.getElementById("materiasGrid");
            const etiqueta = document.getElementById("etiquetaCurso");
            if (!grilla || !etiqueta) return;
            const anioSeleccionado = normalizar(etiqueta.textContent);
            if (!anioSeleccionado.includes("1") || !anioSeleccionado.includes("ano")) return;

            Array.from(grilla.children).forEach((columna) => {
                if (columna.querySelector("a[data-enlace-materia]") || columna.querySelector("a[href]")) return;
                const titulo = columna.querySelector(".card-title, h2, h3, h4, h5, h6");
                if (!titulo) return;
                const nombreMateria = titulo.textContent.trim();
                if (!nombreMateria) return;
                const archivo = crearNombreArchivo(nombreMateria) + ".php";
                const enlace = document.createElement("a");
                enlace.href = carpetaMaterias + archivo;
                enlace.target = "_blank";
                enlace.rel = "noopener noreferrer";
                enlace.dataset.enlaceMateria = "true";
                enlace.setAttribute("aria-label", "Abrir el material de " + nombreMateria + " de 1° año");
                enlace.style.display = "block";
                enlace.style.height = "100%";
                enlace.style.color = "inherit";
                enlace.style.textDecoration = "none";
                while (columna.firstChild) enlace.appendChild(columna.firstChild);
                columna.appendChild(enlace);
            });
        }

        const grilla = document.getElementById("materiasGrid");
        if (grilla) {
            const observador = new MutationObserver(enlazarMateriasDePrimerAnio);
            observador.observe(grilla, { childList: true, subtree: true });
            enlazarMateriasDePrimerAnio();
        }
        document.addEventListener("click", () => setTimeout(enlazarMateriasDePrimerAnio, 150));
    })();
    </script>

</body>
</html>   