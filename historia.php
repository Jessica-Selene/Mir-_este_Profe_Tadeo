<?php
$historia = [
    [
        "anio" => "1946",
        "titulo" => "Fundación",
        "texto" => "La escuela nace como \"Escuela de Aprendices Operarios de Talleres\" dentro del predio de la II Brigada Aérea, con el objetivo de formar técnicos para los talleres aeronáuticos de la Fuerza Aérea Argentina. Sus primeros alumnos fueron jóvenes que se iniciaban en oficios como herrero, carpintero y electricista."
    ],
    [
        "anio" => "1950",
        "titulo" => "Primeros egresados",
        "texto" => "Se producen los primeros egresados de la institución, consolidando la propuesta formativa orientada a la industria aeronáutica. La escuela se vuelve un referente en la formación técnica de la región."
    ],
    [
        "anio" => "1963",
        "titulo" => "Homenaje al Teniente Candelaria",
        "texto" => "La escuela adopta el nombre \"Teniente Don Luis Cenobio Candelaria\" en homenaje al pionero de la aeronáutica argentina, quien en 1918 cruzó la cordillera de los Andes en un Morane-Saulnier Parasol, uniendo Zapala (Argentina) con Cunco (Chile)."
    ],
    [
        "anio" => "1970",
        "titulo" => "Ampliación de orientaciones",
        "texto" => "Se incorporan nuevas especialidades al plan de estudios, ampliando la oferta educativa más allá de la aeronáutica. Se fortalecen las carreras de mecánica y electricidad industrial."
    ],
    [
        "anio" => "1980",
        "titulo" => "Carrera de Aerofotogrametría",
        "texto" => "Se crea la especialidad de Aerofotogrametría, única en Latinoamérica, orientada a la captura, análisis y representación del territorio mediante técnicas fotográficas y cartográficas."
    ],
    [
        "anio" => "1994",
        "titulo" => "Paso a gestión provincial",
        "texto" => "La escuela pasa de la jurisdicción de la Fuerza Aérea Argentina a la gestión del gobierno de la Provincia de Entre Ríos, manteniendo su identidad y vocación aeronáutica."
    ],
    [
        "anio" => "2000",
        "titulo" => "Carrera de Informática",
        "texto" => "Se incorpora la especialidad de Informática (Bachiller en Informática), respondiendo a la demanda de formación en tecnología, programación y sistemas."
    ],
    [
        "anio" => "2014",
        "titulo" => "50° Aniversario – Bodas de Oro",
        "texto" => "La escuela celebró sus Bodas de Oro con actos conmemorativos, concursos internos de fotografía, entrega de premios y un almuerzo en el Casino de Suboficiales de la II Brigada Aérea."
    ],
    [
        "anio" => "2024",
        "titulo" => "60° Aniversario",
        "texto" => "La escuela celebró sus 60 años de vida institucional el 6 de septiembre en el predio de la II Brigada Aérea. El acto fue declarado de interés por la Cámara de Diputados de Entre Ríos y contó con la presencia de la vicegobernadora Alicia Aluani, el jefe de la II Brigada Aérea, brigadier Hugo Marcelo Fiocca, y autoridades provinciales. Se descubrió una placa conmemorativa y se realizó una demostración de la Escuadrilla Histórica Mentor."
    ],
    [
        "anio" => "2026",
        "titulo" => "Presente",
        "texto" => "La escuela continúa formando técnicos en Aviación, Aerofotogrametría e Informática, con un equipo directivo comprometido con la calidad educativa y la formación integral de sus alumnos."
    ]
];
?>   

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historia de la Escuela - E.E.T N°3 Luis C. Candelaria</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&family=Orbitron:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <style>
        .historia-section {
            min-height: calc(100vh - 200px);
            padding: 60px 0 80px;
        }

        .historia-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .historia-header .eyebrow {
            display: inline-block;
            margin-bottom: 12px;
            color: #e0a331;
            font-family: "DM Sans", sans-serif;
            font-size: .8rem;
            font-weight: 700;
            letter-spacing: .14em;
            text-transform: uppercase;
        }

        .historia-header h1 {
            color: #c0a355;
            font-family: "Montserrat", sans-serif;
            font-size: clamp(1.8rem, 4vw, 2.8rem);
            font-weight: 700;
            margin-bottom: 16px;
        }

        .historia-header p {
            color: #694d27;
            font-size: 1.05rem;
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.7;
        }

        .timeline {
            position: relative;
            max-width: 900px;
            margin: 0 auto;
            padding: 0;
            list-style: none;
        }

        .timeline::before {
            content: "";
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 3px;
            background: linear-gradient(180deg, #c49a3a, rgba(196, 154, 58, .2));
            transform: translateX(-50%);
        }

        .timeline-item {
            position: relative;
            width: 50%;
            padding: 20px 40px;
            opacity: 0;
            transform: translateY(30px);
            transition: opacity .6s ease, transform .6s ease;
        }

        .timeline-item.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .timeline-item:nth-child(odd) {
            left: 0;
            text-align: right;
        }

        .timeline-item:nth-child(even) {
            left: 50%;
            text-align: left;
        }

        .timeline-item::after {
            content: "";
            position: absolute;
            top: 32px;
            width: 16px;
            height: 16px;
            background: #c49a3a;
            border: 3px solid #101722;
            border-radius: 50%;
            z-index: 2;
        }

        .timeline-item:nth-child(odd)::after {
            right: -8px;
        }

        .timeline-item:nth-child(even)::after {
            left: -8px;
        }

        .timeline-card {
            display: inline-block;
            padding: 24px 28px;
            background: linear-gradient(145deg, rgba(16, 23, 34, .97), rgba(24, 34, 49, .95));
            border: 1px solid rgba(196, 154, 58, .4);
            border-radius: 14px;
            max-width: 380px;
            text-align: left;
            transition: border-color .3s ease, box-shadow .3s ease;
        }

        .timeline-card:hover {
            border-color: rgba(196, 154, 58, .8);
            box-shadow: 0 8px 30px rgba(0, 0, 0, .3);
        }

        .timeline-card .timeline-anio {
            display: inline-block;
            margin-bottom: 8px;
            color: #ffd78e;
            font-family: "Orbitron", sans-serif;
            font-size: 1.1rem;
            font-weight: 700;
        }

        .timeline-card h3 {
            margin: 0 0 10px;
            color: #fff;
            font-family: "Montserrat", sans-serif;
            font-size: 1.05rem;
            font-weight: 600;
        }

        .timeline-card p {
            margin: 0;
            color: #a0aab8;
            font-size: .9rem;
            line-height: 1.65;
        }

        @media (max-width: 767px) {
            .timeline::before {
                left: 20px;
            }

            .timeline-item,
            .timeline-item:nth-child(odd),
            .timeline-item:nth-child(even) {
                width: 100%;
                left: 0;
                text-align: left;
                padding: 16px 16px 16px 56px;
            }

            .timeline-item:nth-child(odd)::after,
            .timeline-item:nth-child(even)::after {
                left: 12px;
                right: auto;
            }

            .timeline-card {
                max-width: 100%;
                padding: 18px 20px;
            }
        }
    </style>
</head>

<body>

    <!-- ENCABEZADO -->
    <header class="site-header">
        <div class="header-inner">
            <a href="index.php" class="brand">
                <div class="school-logo">
                    <img src="img/logo_candelaria.png">
                </div>
                <div class="school-name">
                    <span>Escuela Técnica</span>
                    <strong>E.E.T N°3 Teniente Luis Cenobio Candelaria</strong>
                </div>
            </a>
            <div class="header-actions">
                <a href="index.php" class="btn-inscripcion btn-requisitos">← Volver al inicio</a>
            </div>
        </div>
    </header>

    <!-- CONTENIDO -->
    <main>
        <section class="historia-section">
            <div class="container">
                <div class="historia-header">
                    <span class="eyebrow">Nuestra historia</span>
                    <h1>Trayectoria de la Escuela</h1>
                    <p>
                        Desde 1946, la E.E.T. N°3 forma técnicos con vocación aeronáutica
                        y tecnológica. Conocé los hitos que marcaron su camino.
                    </p>
                </div>

                <div class="timeline">
                    <?php foreach ($historia as $item): ?>
                        <div class="timeline-item">
                            <div class="timeline-card">
                                <span class="timeline-anio"><?= $item["anio"] ?></span>
                                <h3><?= $item["titulo"] ?></h3>
                                <p><?= $item["texto"] ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Animación de aparición al hacer scroll
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add("visible");
                    }, index * 100);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.2 });

        document.querySelectorAll(".timeline-item").forEach((item) => {
            observer.observe(item);
        });
    </script>

</body>
</html>   
