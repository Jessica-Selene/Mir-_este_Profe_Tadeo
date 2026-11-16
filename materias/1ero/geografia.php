
<?php
$archivoPDF = "Geografia.pdf";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Geografía | E.E.T. N.º 3</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&family=Orbitron:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Hoja de estilos general de la página -->
    <link rel="stylesheet" href="../../css/style.css?v=4">

    <style>
        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background: #eef0f3;
        }

        main {
            flex: 1;
            width: 100%;
            padding: clamp(25px, 4vw, 50px) 0;
        }

        .geografia-container {
            width: min(1200px, calc(100% - 32px));
            margin: 0 auto;
        }

        /* ENCABEZADO */

        .geografia-encabezado {
            position: relative;
            overflow: hidden;
            padding: clamp(25px, 5vw, 48px);
            margin-bottom: 28px;
            color: #f5f3ee;
            background: linear-gradient(145deg, #101722, #182231);
            border: 1px solid rgba(196, 154, 58, .65);
            border-radius: 18px;
            box-shadow: 0 12px 35px rgba(0, 0, 0, .15);
        }

        .geografia-encabezado::before {
            content: "";
            position: absolute;
            width: 250px;
            height: 250px;
            top: -150px;
            right: -70px;
            border: 1px solid rgba(196, 154, 58, .35);
            border-radius: 50%;
            box-shadow:
                0 0 0 25px rgba(196, 154, 58, .05),
                0 0 0 50px rgba(196, 154, 58, .04);
        }

        .geografia-contenido-titulo {
            position: relative;
            z-index: 1;
        }

        .geografia-etiqueta {
            display: inline-block;
            margin-bottom: 12px;
            color: #ffd78e;
            font-size: .78rem;
            font-weight: 700;
            letter-spacing: .15em;
            text-transform: uppercase;
        }

        .geografia-encabezado h1 {
            margin: 0 0 12px;
            color: #fff;
            font-family: "Montserrat", sans-serif;
            font-size: clamp(2rem, 5vw, 3.2rem);
            font-weight: 700;
        }

        .geografia-encabezado p {
            max-width: 680px;
            margin: 0;
            color: #d6dce4;
            font-size: clamp(.9rem, 2vw, 1rem);
            line-height: 1.7;
        }

        .geografia-volver {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-top: 25px;
            padding: 10px 17px;
            color: #ffd78e;
            background: rgba(0, 0, 0, .2);
            border: 1px solid #c49a3a;
            border-radius: 8px;
            text-decoration: none;
            font-size: .88rem;
            font-weight: 700;
            transition: .25s ease;
        }

        .geografia-volver:hover {
            color: #101722;
            background: #ffd78e;
        }

        /* INTRODUCCIÓN DEL TEMARIO */

        .temario-intro {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 16px;
            margin-bottom: 18px;
        }

        .temario-intro h2 {
            margin: 0 0 6px;
            color: #101722;
            font-family: "Montserrat", sans-serif;
            font-size: clamp(1.15rem, 3vw, 1.5rem);
            font-weight: 700;
        }

        .temario-intro p {
            margin: 0;
            color: #657080;
            font-size: .9rem;
            line-height: 1.5;
        }

        /* BOTONES */

        .temario-acciones {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .temario-boton {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            min-height: 42px;
            padding: 10px 16px;
            border-radius: 8px;
            font-size: .85rem;
            font-weight: 700;
            text-decoration: none;
            transition: .25s ease;
        }

        .temario-boton-abrir {
            color: #101722;
            background: #ffd78e;
            border: 1px solid #c49a3a;
        }

        .temario-boton-descargar {
            color: #182231;
            background: #fff;
            border: 1px solid #cbd1d9;
        }

        .temario-boton:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 13px rgba(0, 0, 0, .12);
        }

        /* VISOR PDF */

        .visor-contenedor {
            overflow: hidden;
            background: #fff;
            border: 1px solid #d9dee5;
            border-radius: 14px;
            box-shadow: 0 12px 35px rgba(16, 23, 34, .12);
        }

        .visor-cabecera {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 10px;
            padding: 15px 20px;
            color: #f5f3ee;
            background: linear-gradient(110deg, #101722, #182231);
            border-bottom: 3px solid #c49a3a;
        }

        .visor-cabecera strong {
            font-family: "Montserrat", sans-serif;
            font-size: .92rem;
        }

        .visor-cabecera span {
            color: #ffd78e;
            font-size: .78rem;
        }

        .visor-pdf {
            display: block;
            width: 100%;
            height: 850px;
            border: 0;
            background: #e8e8e8;
        }

        .visor-ayuda {
            padding: 15px;
            color: #657080;
            background: #fff;
            text-align: center;
            font-size: .85rem;
            line-height: 1.6;
        }

        .visor-ayuda a {
            color: #8b681c;
            font-weight: 700;
        }

        /* TABLETS */

        @media (max-width: 768px) {
            .visor-pdf {
                height: 750px;
            }
        }

        /* CELULARES */

        @media (max-width: 600px) {
            main {
                padding: 22px 0 32px;
            }

            .geografia-container {
                width: calc(100% - 22px);
            }

            .geografia-encabezado {
                padding: 25px 20px;
                border-radius: 13px;
            }

            .temario-intro {
                align-items: flex-start;
                flex-direction: column;
            }

            .temario-acciones {
                width: 100%;
            }

            .temario-boton {
                flex: 1;
                padding: 10px;
                font-size: .8rem;
            }

            .visor-cabecera {
                padding: 13px 15px;
            }

            .visor-pdf {
                height: 72vh;
                min-height: 480px;
            }
        }

        @media (max-width: 360px) {
            .temario-acciones {
                flex-direction: column;
            }

            .visor-pdf {
                min-height: 420px;
            }
        }

        .footer-inner{display:flex;flex-direction:column;align-items:center;gap:22px;padding-block:38px 30px;text-align:center}
.footer-title{margin:0;color:#ffe0a0;font-family:"Montserrat",sans-serif;font-size:clamp(1rem,2vw,1.2rem);font-weight:700;letter-spacing:.3px;line-height:1.5}
.footer-inner:after{content:"";display:block;width:min(180px,45%);height:1px;background:linear-gradient(90deg,transparent,rgba(196,154,58,.8),transparent)}
.footer-links{display:flex;flex-wrap:wrap;justify-content:center;align-items:center;gap:12px;width:100%}
.footer-link{display:inline-flex;align-items:center;justify-content:center;min-height:42px;max-width:100%;padding:10px 17px;color:#e8eaf0;background:rgba(255,255,255,.04);border:1px solid rgba(196,154,58,.45);border-radius:8px;font-family:"DM Sans",sans-serif;font-size:.88rem;font-weight:500;line-height:1.4;text-align:center;text-decoration:none;overflow-wrap:anywhere;transition:all .25s ease}
.footer-link:hover,.footer-link:focus-visible{color:#101722;background:#c49a3a;border-color:#ffe0a0;transform:translateY(-3px);outline:none}
    </style>
</head>

<body>

    <main>

        <div class="geografia-container">

            <!-- ENCABEZADO DE LA MATERIA -->

            <section class="geografia-encabezado">

                <div class="geografia-contenido-titulo">

                    <span class="geografia-etiqueta">
                        Espacio curricular · 1.º año
                    </span>

                    <h1>Geografía</h1>

                    <p>
                        Conocé los contenidos de la asignatura y explorá
                        los distintos aspectos del espacio geográfico:
                        su representación, sus características, sus
                        transformaciones y la relación entre la sociedad
                        y el ambiente.
                    </p>

                    <a class="geografia-volver" href="../../index.php">
                        ← Volver al inicio
                    </a>

                </div>

            </section>


            <!-- ACCIONES DEL DOCUMENTO -->

            <section class="temario-intro">

                <div>

                    <h2>Temario de la materia</h2>

                    <p>
                        Consultá los contenidos organizados por trimestre.
                    </p>

                </div>

                <div class="temario-acciones">

                    <a
                        class="temario-boton temario-boton-abrir"
                        href="<?php echo htmlspecialchars($archivoPDF); ?>"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        ↗ Abrir PDF
                    </a>

                    <a
                        class="temario-boton temario-boton-descargar"
                        href="<?php echo htmlspecialchars($archivoPDF); ?>"
                        download
                    >
                        ↓ Descargar PDF
                    </a>

                </div>

            </section>


            <!-- VISOR DEL TEMARIO -->

            <section class="visor-contenedor">

                <div class="visor-cabecera">

                    <strong>Geografía · Contenidos</strong>

                    <span>Documento PDF</span>

                </div>

                <iframe
                    class="visor-pdf"
                    src="<?php echo htmlspecialchars($archivoPDF); ?>#toolbar=1&navpanes=0&view=FitH"
                    title="Temario de Geografía"
                    loading="lazy"
                >
                    Tu navegador no permite visualizar el documento.
                    Podés utilizar el botón Abrir PDF.
                </iframe>

                <div class="visor-ayuda">

                    Si el documento no se visualiza correctamente
                    en tu dispositivo, utilizá la opción

                    <a
                        href="<?php echo htmlspecialchars($archivoPDF); ?>"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        Abrir PDF
                    </a>.

                </div>

            </section>

        </div>

    </main>


   <footer class="site-footer">
 <div class="container footer-inner">
  <p class="footer-title">Escuela Técnica · E.E.T. N.º 3 Teniente Luis Cenobio Candelaria</p>
  <nav class="footer-links" aria-label="Enlaces institucionales">
   <a class="footer-link" href="../../contactanos.php">Contactanos</a>
   <a class="footer-link" href="../../nosotros.php">Acerca de nosotros</a>
   <a class="footer-link" href="../../ubicacion.php">Ubicación</a>
   <a class="footer-link" href="../../instagram.php">Instagram</a>
   <a class="footer-link" href="../../acuerdo_escolar.php">Acuerdo escolar de convivencia</a>
   <a class="footer-link" href="../../historia.php">Historia de la escuela</a>
  </nav>
 </div>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
