<?php
// Página institucional "Acerca de nosotros" de la E.E.T. N.º 3.
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#101722">
    <title>Acerca de nosotros | E.E.T. N.º 3</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --azul-oscuro: #101722;
            --azul-medio: #182231;
            --dorado: #c49a3a;
            --dorado-claro: #ffd78e;
            --texto: #202833;
            --fondo: #f3f5f8;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            color: var(--texto);
            background:
                radial-gradient(circle at 10% 14%, rgba(196,154,58,.12), transparent 28%),
                radial-gradient(circle at 92% 32%, rgba(38,91,151,.10), transparent 30%),
                var(--fondo);
            font-family: "DM Sans", sans-serif;
        }

        .site-header {
            color: #fff;
            background: var(--azul-oscuro);
            border-bottom: 3px solid var(--dorado);
            box-shadow: 0 8px 24px rgba(16,23,34,.15);
        }

        .header-inner {
            width: min(1200px, calc(100% - 36px));
            min-height: 92px;
            margin: 0 auto;
            padding: 14px 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 14px;
            min-width: 0;
            color: inherit;
            text-decoration: none;
        }

        .school-logo {
            width: 62px;
            height: 62px;
            flex: 0 0 62px;
            display: grid;
            place-items: center;
            overflow: hidden;
            border-radius: 50%;
            background: #fff;
            border: 1px solid rgba(255,215,142,.7);
        }

        .school-logo img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            padding: 4px;
        }

        .school-name span {
            display: block;
            margin-bottom: 3px;
            color: var(--dorado-claro);
            font-size: .78rem;
            font-weight: 700;
            letter-spacing: .13em;
            text-transform: uppercase;
        }

        .school-name strong {
            display: block;
            font-family: "Montserrat", sans-serif;
            font-size: clamp(.9rem, 2vw, 1.12rem);
            line-height: 1.35;
        }

        .back-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            padding: 11px 17px;
            border: 1px solid var(--dorado);
            border-radius: 10px;
            background: rgba(0,0,0,.18);
            color: var(--dorado-claro);
            text-decoration: none;
            font-weight: 700;
            white-space: nowrap;
            transition: background .25s ease, color .25s ease, transform .25s ease;
        }

        .back-button:hover, .back-button:focus-visible {
            background: var(--dorado);
            color: var(--azul-oscuro);
            transform: translateY(-2px);
        }

        main {
            flex: 1;
            width: 100%;
            padding: clamp(36px, 6vw, 78px) 0;
        }

        .about-container {
            width: min(1100px, calc(100% - 36px));
            margin: 0 auto;
        }

        .about-card {
            display: grid;
            grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
            overflow: hidden;
            border: 1px solid rgba(196,154,58,.48);
            border-radius: 24px;
            background: #fff;
            box-shadow: 0 22px 60px rgba(16,23,34,.12);
        }

        .about-visual {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 480px;
            padding: clamp(30px, 5vw, 54px);
            overflow: hidden;
            color: #fff;
            text-align: center;
            background: linear-gradient(145deg, #101722, #22364d);
        }

        .about-visual::before,
        .about-visual::after {
            content: "";
            position: absolute;
            border: 1px solid rgba(255,215,142,.18);
            border-radius: 50%;
            pointer-events: none;
        }

        .about-visual::before {
            width: 350px;
            height: 350px;
            top: -140px;
            right: -130px;
        }

        .about-visual::after {
            width: 260px;
            height: 260px;
            bottom: -130px;
            left: -90px;
        }

        .emblem-frame {
            position: relative;
            z-index: 1;
            display: grid;
            place-items: center;
            width: min(260px, 76%);
            aspect-ratio: 1 / 1;
            padding: 15px;
            margin-bottom: 28px;
            border: 1px solid rgba(255,215,142,.8);
            border-radius: 26px;
            background: #fff;
            box-shadow: 0 16px 34px rgba(0,0,0,.25);
        }

        .emblem-frame img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .visual-kicker {
            position: relative;
            z-index: 1;
            margin: 0 0 9px;
            color: var(--dorado-claro);
            font-size: .75rem;
            font-weight: 800;
            letter-spacing: .16em;
            text-transform: uppercase;
        }

        .about-visual h2 {
            position: relative;
            z-index: 1;
            margin: 0;
            font-family: "Montserrat", sans-serif;
            font-size: clamp(1.25rem, 2.5vw, 1.7rem);
            font-weight: 800;
            line-height: 1.3;
        }

        .about-copy {
            align-self: center;
            padding: clamp(30px, 5vw, 56px);
        }

        .eyebrow {
            display: inline-block;
            margin-bottom: 12px;
            color: #946d1d;
            font-size: .76rem;
            font-weight: 800;
            letter-spacing: .17em;
            text-transform: uppercase;
        }

        .about-copy h1 {
            margin: 0 0 22px;
            color: var(--azul-oscuro);
            font-family: "Montserrat", sans-serif;
            font-size: clamp(2rem, 4.2vw, 3rem);
            font-weight: 800;
            line-height: 1.12;
        }

        .about-copy h1 span { color: #a77d24; }

        .about-copy p {
            margin: 0 0 17px;
            color: #525e6b;
            font-size: clamp(.98rem, 1.5vw, 1.06rem);
            line-height: 1.85;
        }

        .motto {
            margin-top: 26px;
            padding: 20px 22px;
            border-left: 4px solid var(--dorado);
            border-radius: 0 13px 13px 0;
            background: #fbf7ed;
            color: var(--azul-oscuro);
            font-family: "Montserrat", sans-serif;
            font-size: clamp(1.02rem, 2vw, 1.18rem);
            font-weight: 800;
            line-height: 1.55;
        }

        .about-actions { margin-top: 27px; }

        .site-footer {
            padding: 30px 0 18px;
            color: #e8edf3;
            background: var(--azul-oscuro);
            border-top: 3px solid var(--dorado);
        }

        .footer-inner {
            width: min(1100px, calc(100% - 36px));
            margin: 0 auto;
        }

        .footer-title {
            margin: 0 0 18px;
            color: #fff;
            font-family: "Montserrat", sans-serif;
            font-size: 1.05rem;
            font-weight: 700;
            text-align: center;
        }

        .footer-links {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 12px;
        }

        .footer-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 48px;
            padding: 11px 14px;
            border: 1px solid rgba(196,154,58,.58);
            border-radius: 10px;
            background: rgba(255,255,255,.035);
            color: var(--dorado-claro);
            text-align: center;
            text-decoration: none;
            font-size: .93rem;
            font-weight: 600;
            line-height: 1.35;
            overflow-wrap: anywhere;
            transition: background .25s ease, color .25s ease, transform .25s ease;
        }

        .footer-links a:hover, .footer-links a:focus-visible {
            background: var(--dorado);
            color: var(--azul-oscuro);
            transform: translateY(-2px);
        }

        .footer-copy {
            margin: 22px 0 0;
            color: #aeb8c5;
            text-align: center;
            font-size: .84rem;
        }

        @media (max-width: 850px) {
            .about-card { grid-template-columns: minmax(0, 1fr); }
            .about-visual { min-height: 0; padding: 34px 24px; }
            .emblem-frame { width: 180px; margin-bottom: 20px; }
            .about-copy { padding: 34px clamp(22px, 6vw, 44px); }
            .footer-links { grid-template-columns: repeat(2, minmax(0, 1fr)); }
        }

        @media (max-width: 520px) {
            .header-inner {
                width: calc(100% - 24px);
                align-items: flex-start;
                gap: 12px;
            }

            .brand { gap: 9px; }
            .school-logo { width: 46px; height: 46px; flex-basis: 46px; }
            .school-name span { font-size: .65rem; letter-spacing: .08em; }
            .school-name strong { font-size: .78rem; }
            .back-button { padding: 9px 10px; font-size: .82rem; }
            .about-container, .footer-inner { width: calc(100% - 24px); }
            .about-card { border-radius: 17px; }
            .about-copy { padding: 28px 21px; }
            .about-copy p { line-height: 1.75; }
            .footer-links { gap: 9px; }
            .footer-links a { min-height: 46px; padding: 10px 8px; font-size: .84rem; }
        }

        @media (max-width: 360px) {
            .header-inner { flex-direction: column; align-items: stretch; }
            .header-inner > .back-button { align-self: flex-start; }
            .footer-links { grid-template-columns: minmax(0, 1fr); }
        }

        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after { transition-duration: .01ms !important; }
        }
    </style>
</head>
<body>
    <header class="site-header">
        <div class="header-inner">
            <a class="brand" href="index.php" aria-label="Volver al inicio">
                <div class="school-logo">
                    <img src="img/logo_candelaria.png" alt="Escudo de la E.E.T. N.º 3">
                </div>
                <div class="school-name">
                    <span>Escuela Técnica</span>
                    <strong>E.E.T. N.º 3 Teniente Luis Cenobio Candelaria</strong>
                </div>
            </a>
            <a class="back-button" href="index.php">← Volver al inicio</a>
        </div>
    </header>

    <main>
        <div class="about-container">
            <section class="about-card" aria-labelledby="tituloBienvenidos">
                <div class="about-visual">
                    <div class="emblem-frame">
                        <img src="img/logo_candelaria.png" alt="Escudo institucional de la escuela">
                    </div>
                    <p class="visual-kicker">Nuestra identidad</p>
                    <h2>Educación técnica<br>con visión de futuro</h2>
                </div>

                <div class="about-copy">
                    <span class="eyebrow">E.E.T. N.º 3 · Paraná</span>
                    <h1 id="tituloBienvenidos">BIENVENI<span>DOS</span></h1>

                    <p>La E.E.T. N.º 3 “Tte. Don Luis Cenobio Candelaria” es una institución educativa comprometida con la formación integral de jóvenes, brindándoles conocimientos, herramientas y experiencias para desenvolverse en un mundo en constante transformación.</p>

                    <p>Promovemos una educación basada en la formación técnica, la innovación, el compromiso y el trabajo en comunidad, acompañando a nuestros estudiantes en el desarrollo de sus capacidades y en la construcción de su proyecto de vida.</p>

                    <div class="motto">Educamos hoy, formando a quienes construirán el futuro.</div>

                   
                </div>
            </section>
        </div>
    </main>

    <footer class="site-footer">
        <div class="footer-inner">
            <h2 class="footer-title">Explorá nuestra institución</h2>
            <nav class="footer-links" aria-label="Enlaces institucionales">
                <a href="contactanos.php">Contactanos</a>
                <a href="nosotros.php" aria-current="page">Acerca de nosotros</a>
                <a href="ubicacion.php">Ubicación</a>
                <a href="instagram.php">Instagram</a>
                <a href="acuerdo_escolar.php">Acuerdo escolar de convivencia</a>
                <a href="historia.php">Historia de la escuela</a>
            </nav>
            <p class="footer-copy">E.E.T. N.º 3 Teniente Luis Cenobio Candelaria · Paraná, Entre Ríos</p>
        </div>
    </footer>
</body>
</html>
