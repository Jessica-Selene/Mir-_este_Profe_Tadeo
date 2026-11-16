
<?php
$archivoPDF = "Biologia.pdf";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Biología | Temario</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --azul-oscuro: #101722;
            --azul-secundario: #182231;
            --dorado: #c49a3a;
            --dorado-claro: #ffe0a0;
            --blanco: #f5f3ee;
            --gris: #d6dce4;
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            min-height: 100vh;
            background:
                radial-gradient(
                    circle at top,
                    rgba(196, 154, 58, .10),
                    transparent 40%
                ),
                #eef0f3;
            color: #202833;
            font-family: "DM Sans", sans-serif;
        }

        /* ENCABEZADO */

        .encabezado {
            position: relative;
            overflow: hidden;
            padding: 22px clamp(18px, 5vw, 65px) 35px;
            color: var(--blanco);
            background: linear-gradient(
                145deg,
                var(--azul-oscuro),
                var(--azul-secundario)
            );
            border-bottom: 4px solid var(--dorado);
            box-shadow: 0 8px 25px rgba(0, 0, 0, .16);
        }

        .encabezado::before {
            content: "";
            position: absolute;
            width: 280px;
            height: 280px;
            right: -90px;
            top: -170px;
            border: 1px solid rgba(196, 154, 58, .25);
            border-radius: 50%;
            box-shadow:
                0 0 0 25px rgba(196, 154, 58, .04),
                0 0 0 50px rgba(196, 154, 58, .03);
        }

        .barra-superior {
            position: relative;
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
            max-width: 1250px;
            margin: 0 auto;
        }

        .volver {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            padding: 10px 16px;
            color: var(--dorado-claro);
            border: 1px solid rgba(196, 154, 58, .65);
            border-radius: 9px;
            text-decoration: none;
            font-size: .9rem;
            font-weight: 700;
            transition: .25s ease;
        }

        .volver:hover {
            color: var(--azul-oscuro);
            background: var(--dorado-claro);
            border-color: var(--dorado-claro);
            transform: translateY(-2px);
        }

        .identidad {
            color: var(--gris);
            font-size: .78rem;
            font-weight: 700;
            letter-spacing: .13em;
            text-transform: uppercase;
            text-align: right;
        }

        .titulo-contenedor {
            position: relative;
            z-index: 1;
            max-width: 1250px;
            margin: 35px auto 0;
        }

        .etiqueta {
            display: inline-block;
            margin-bottom: 10px;
            color: var(--dorado-claro);
            font-size: .78rem;
            font-weight: 700;
            letter-spacing: .17em;
            text-transform: uppercase;
        }

        h1 {
            margin: 0;
            color: #fff;
            font-family: "Montserrat", sans-serif;
            font-size: clamp(2rem, 5vw, 3.5rem);
            font-weight: 800;
            line-height: 1.15;
        }

        .subtitulo {
            max-width: 650px;
            margin: 13px 0 0;
            color: var(--gris);
            font-size: clamp(.92rem, 2vw, 1.05rem);
            line-height: 1.65;
        }

        /* CONTENIDO */

        main {
            width: min(1250px, calc(100% - 36px));
            margin: 35px auto 55px;
        }

        .introduccion {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 18px;
            margin-bottom: 20px;
        }

        .introduccion h2 {
            margin: 0 0 6px;
            color: var(--azul-oscuro);
            font-family: "Montserrat", sans-serif;
            font-size: clamp(1.15rem, 3vw, 1.5rem);
            font-weight: 800;
        }

        .introduccion p {
            margin: 0;
            color: #66717e;
            font-size: .93rem;
            line-height: 1.5;
        }

        /* BOTONES */

        .acciones {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .boton {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            gap: 8px;
            min-height: 43px;
            padding: 10px 16px;
            border-radius: 9px;
            font-family: "DM Sans", sans-serif;
            font-size: .88rem;
            font-weight: 700;
            text-decoration: none;
            transition: .25s ease;
        }

        .boton-principal {
            color: var(--azul-oscuro);
            background: var(--dorado-claro);
            border: 1px solid var(--dorado);
        }

        .boton-secundario {
            color: var(--azul-oscuro);
            background: #fff;
            border: 1px solid #cbd1d9;
        }

        .boton:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 13px rgba(0, 0, 0, .12);
        }

        /* VISOR DEL PDF */

        .visor-contenedor {
            overflow: hidden;
            background: #fff;
            border: 1px solid #d9dee5;
            border-radius: 15px;
            box-shadow: 0 12px 35px rgba(16, 23, 34, .12);
        }

        .visor-cabecera {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            padding: 15px 20px;
            color: var(--blanco);
            background: linear-gradient(
                110deg,
                var(--azul-oscuro),
                var(--azul-secundario)
            );
            border-bottom: 3px solid var(--dorado);
        }

        .visor-cabecera strong {
            font-family: "Montserrat", sans-serif;
            font-size: .92rem;
        }

        .visor-cabecera span {
            color: var(--dorado-claro);
            font-size: .78rem;
        }

        .visor-pdf {
            display: block;
            width: 100%;
            height: 850px;
            border: 0;
            background: #e8e8e8;
        }

        .alternativa {
            padding: 20px;
            text-align: center;
            color: #596575;
            font-size: .9rem;
            line-height: 1.6;
        }

        .alternativa a {
            color: #8b681c;
            font-weight: 700;
        }

        /* PIE */

        footer {
            padding: 23px 18px;
            color: #cbd1d9;
            background: var(--azul-oscuro);
            border-top: 3px solid var(--dorado);
            text-align: center;
            font-size: .82rem;
            line-height: 1.6;
        }

        footer strong {
            color: var(--dorado-claro);
        }

        /* TABLETS */

        @media (max-width: 900px) {
            main {
                width: min(100% - 28px, 850px);
                margin-top: 28px;
            }

            .visor-pdf {
                height: 750px;
            }
        }

        /* CELULARES */

        @media (max-width: 600px) {
            .encabezado {
                padding: 17px 17px 27px;
            }

            .barra-superior {
                align-items: flex-start;
            }

            .volver {
                padding: 9px 11px;
                font-size: .8rem;
            }

            .identidad {
                max-width: 125px;
                font-size: .65rem;
                line-height: 1.5;
            }

            .titulo-contenedor {
                margin-top: 29px;
            }

            main {
                width: calc(100% - 22px);
                margin: 23px auto 35px;
            }

            .introduccion {
                align-items: flex-start;
                flex-direction: column;
            }

            .acciones {
                width: 100%;
            }

            .boton {
                flex: 1;
                padding: 10px 11px;
                font-size: .8rem;
            }

            .visor-contenedor {
                border-radius: 10px;
            }

            .visor-cabecera {
                align-items: flex-start;
                flex-direction: column;
                padding: 13px 15px;
            }

            .visor-pdf {
                height: 72vh;
                min-height: 480px;
            }
        }

        @media (max-width: 360px) {
            .identidad {
                display: none;
            }

            .acciones {
                flex-direction: column;
            }

            .visor-pdf {
                min-height: 420px;
            }
        }
    </style>
</head>

<body>

    <header class="encabezado">

        <div class="barra-superior">

            <a class="volver" href="../../index.php">
                <span aria-hidden="true">←</span>
                Volver al inicio
            </a>

            <div class="identidad">
                Material de estudio
            </div>

        </div>

        <div class="titulo-contenedor">

            <span class="etiqueta">Espacio curricular</span>

            <h1>Biología</h1>

            <p class="subtitulo">
                Conocé los contenidos de la asignatura y consultá
                el temario completo durante el desarrollo del año.
            </p>

        </div>

    </header>


    <main>

        <section class="introduccion">

            <div>
                <h2>Temario de la materia</h2>

                <p>
                    Documento oficial con las unidades y contenidos
                    correspondientes a Biología.
                </p>
            </div>

            <div class="acciones">

                <a
                    class="boton boton-principal"
                    href="<?php echo htmlspecialchars($archivoPDF); ?>"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    ↗ Abrir PDF
                </a>

                <a
                    class="boton boton-secundario"
                    href="<?php echo htmlspecialchars($archivoPDF); ?>"
                    download
                >
                    ↓ Descargar
                </a>

            </div>

        </section>


        <section class="visor-contenedor">

            <div class="visor-cabecera">

                <strong>Biología — Contenidos</strong>

                <span>Documento PDF</span>

            </div>

            <iframe
                class="visor-pdf"
                src="<?php echo htmlspecialchars($archivoPDF); ?>#toolbar=1&navpanes=0&view=FitH"
                title="Temario de Biología"
                loading="lazy"
            >
                <p class="alternativa">
                    Tu navegador no permite visualizar este documento.
                    <a href="<?php echo htmlspecialchars($archivoPDF); ?>">
                        Abrir el temario aquí.
                    </a>
                </p>
            </iframe>

            <div class="alternativa">
                Si el documento no se visualiza correctamente,
                utilizá el botón <strong>«Abrir PDF»</strong>
                para consultarlo directamente.
            </div>

        </section>

    </main>


    <footer>
        <strong>Biología</strong> · Material de estudio
        <br>
        Institución educativa
    </footer>

</body>
</html>
