<?php
// Página institucional para consultar el Acuerdo Escolar de Convivencia.
$documento = 'acuerdo_escolar_2026.pdf';
$documentoExiste = is_file(__DIR__ . DIRECTORY_SEPARATOR . $documento);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#101722">
    <title>Acuerdo Escolar de Convivencia | E.E.T. N.º 3</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --navy: #101722;
            --navy-light: #182231;
            --gold: #c49a3a;
            --gold-light: #ffd78e;
            --text: #202833;
            --muted: #5d6672;
            --page: #f3f5f8;
        }
        * { box-sizing: border-box; }
        body {
            margin: 0; min-height: 100vh; display: flex; flex-direction: column;
            color: var(--text); font-family: "DM Sans", sans-serif;
            background: radial-gradient(circle at 10% 14%, rgba(196,154,58,.12), transparent 28%),
                        radial-gradient(circle at 92% 32%, rgba(38,91,151,.10), transparent 30%), var(--page);
        }
        a { -webkit-tap-highlight-color: transparent; }
        .site-header { color: #fff; background: var(--navy); border-bottom: 3px solid var(--gold); box-shadow: 0 8px 24px rgba(16,23,34,.15); }
        .header-inner { width: min(1200px, calc(100% - 36px)); min-height: 92px; margin: auto; padding: 14px 0; display: flex; align-items: center; justify-content: space-between; gap: 20px; }
        .brand { display: flex; align-items: center; gap: 14px; min-width: 0; color: inherit; text-decoration: none; }
        .school-logo { width: 62px; height: 62px; flex: 0 0 62px; display: grid; place-items: center; overflow: hidden; border-radius: 50%; background: #fff; border: 1px solid rgba(255,215,142,.7); }
        .school-logo img { width: 100%; height: 100%; object-fit: contain; padding: 4px; }
        .school-name span { display: block; margin-bottom: 3px; color: var(--gold-light); font-size: .78rem; font-weight: 700; letter-spacing: .13em; text-transform: uppercase; }
        .school-name strong { display: block; font-family: "Montserrat", sans-serif; font-size: clamp(.9rem, 2vw, 1.12rem); line-height: 1.35; }
        .back-button, .action-button { display: inline-flex; align-items: center; justify-content: center; gap: 9px; padding: 11px 17px; border: 1px solid var(--gold); border-radius: 10px; background: rgba(0,0,0,.18); color: var(--gold-light); text-decoration: none; font-weight: 700; transition: background .25s ease, color .25s ease, transform .25s ease; }
        .back-button { white-space: nowrap; }
        .back-button:hover, .back-button:focus-visible { background: var(--gold); color: var(--navy); transform: translateY(-2px); }
        main { flex: 1; width: 100%; padding: clamp(34px, 5vw, 64px) 0; }
        .container { width: min(1100px, calc(100% - 36px)); margin: 0 auto; }
        .intro { max-width: 800px; margin: 0 auto 30px; text-align: center; }
        .eyebrow { display: inline-block; margin-bottom: 12px; color: #946d1d; font-size: .76rem; font-weight: 800; letter-spacing: .17em; text-transform: uppercase; }
        h1 { margin: 0 0 14px; color: var(--navy); font-family: "Montserrat", sans-serif; font-size: clamp(1.9rem, 5vw, 3rem); font-weight: 800; line-height: 1.15; }
        h1 span { color: #a77d24; }
        .intro p { margin: 0; color: var(--muted); font-size: clamp(1rem, 2vw, 1.1rem); line-height: 1.75; }
        .document-card { overflow: hidden; border: 1px solid rgba(196,154,58,.48); border-radius: 22px; background: #fff; box-shadow: 0 22px 60px rgba(16,23,34,.12); }
        .document-toolbar { display: flex; align-items: center; justify-content: space-between; gap: 18px; padding: 20px 24px; color: #fff; background: linear-gradient(120deg, var(--navy), #22364d); }
        .document-heading { display: flex; align-items: center; gap: 13px; min-width: 0; }
        .document-icon { width: 46px; height: 46px; flex: 0 0 46px; display: grid; place-items: center; border: 1px solid rgba(255,215,142,.6); border-radius: 12px; color: var(--gold-light); background: rgba(255,255,255,.07); }
        .document-icon svg { width: 24px; height: 24px; }
        .document-heading h2 { margin: 0 0 4px; font-family: "Montserrat", sans-serif; font-size: clamp(1rem, 2vw, 1.2rem); line-height: 1.35; }
        .document-heading p { margin: 0; color: #cbd5e1; font-size: .88rem; }
        .document-actions { display: flex; flex-wrap: wrap; gap: 10px; }
        .action-button { border-color: transparent; background: var(--gold); color: var(--navy); white-space: nowrap; }
        .action-button:hover, .action-button:focus-visible { background: var(--gold-light); transform: translateY(-2px); }
        .pdf-viewer { width: 100%; height: clamp(520px, 78vh, 900px); background: #e8edf3; }
        .pdf-viewer iframe { display: block; width: 100%; height: 100%; border: 0; }
        .document-note { padding: 15px 22px; color: var(--muted); background: #fff; font-size: .9rem; line-height: 1.6; }
        .missing-document { padding: 30px; text-align: center; }
        .missing-document p { color: var(--muted); line-height: 1.7; }
        .site-footer { padding: 30px 0 18px; color: #e8edf3; background: var(--navy); border-top: 3px solid var(--gold); }
        .footer-inner { width: min(1100px, calc(100% - 36px)); margin: 0 auto; }
        .footer-title { margin: 0 0 18px; color: #fff; font-family: "Montserrat", sans-serif; font-size: 1.05rem; font-weight: 700; text-align: center; }
        .footer-links { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 12px; }
        .footer-links a { display: flex; align-items: center; justify-content: center; min-height: 48px; padding: 11px 14px; border: 1px solid rgba(196,154,58,.58); border-radius: 10px; background: rgba(255,255,255,.035); color: var(--gold-light); text-align: center; text-decoration: none; font-size: .93rem; font-weight: 600; line-height: 1.35; overflow-wrap: anywhere; transition: background .25s ease, color .25s ease, transform .25s ease; }
        .footer-links a:hover, .footer-links a:focus-visible { background: var(--gold); color: var(--navy); transform: translateY(-2px); }
        .footer-copy { margin: 22px 0 0; color: #aeb8c5; text-align: center; font-size: .84rem; }
        @media (max-width: 760px) { .document-toolbar { align-items: flex-start; flex-direction: column; } .document-actions { width: 100%; } .document-actions .action-button { flex: 1; } .footer-links { grid-template-columns: repeat(2, minmax(0, 1fr)); } .pdf-viewer { height: 72vh; min-height: 480px; } }
        @media (max-width: 520px) {
            .header-inner { width: calc(100% - 24px); align-items: flex-start; gap: 12px; }
            .brand { gap: 9px; }
            .school-logo { width: 46px; height: 46px; flex-basis: 46px; }
            .school-name span { font-size: .65rem; letter-spacing: .08em; }
            .school-name strong { font-size: .78rem; }
            .back-button { padding: 9px 10px; font-size: .82rem; }
            .container, .footer-inner { width: calc(100% - 24px); }
            .document-card { border-radius: 16px; }
            .document-toolbar { padding: 18px; }
            .document-heading { align-items: flex-start; }
            .document-actions { flex-direction: column; }
            .document-actions .action-button { width: 100%; }
            .pdf-viewer { height: 68vh; min-height: 420px; }
            .document-note { padding: 13px 16px; }
            .footer-links { gap: 9px; }
            .footer-links a { min-height: 46px; padding: 10px 8px; font-size: .84rem; }
        }
        @media (max-width: 360px) { .header-inner { flex-direction: column; align-items: stretch; } .header-inner > .back-button { align-self: flex-start; } .footer-links { grid-template-columns: minmax(0, 1fr); } }
        @media (prefers-reduced-motion: reduce) { *, *::before, *::after { transition-duration: .01ms !important; } }
    </style>
</head>
<body>
<header class="site-header">
    <div class="header-inner">
        <a class="brand" href="index.php" aria-label="Volver al inicio">
            <div class="school-logo"><img src="img/logo_candelaria.png" alt="Escudo de la E.E.T. N.º 3"></div>
            <div class="school-name"><span>Escuela Técnica</span><strong>E.E.T. N.º 3 Teniente Luis Cenobio Candelaria</strong></div>
        </a>
        <a class="back-button" href="index.php">← Volver al inicio</a>
    </div>
</header>
<main>
    <div class="container">
        <section class="intro" aria-labelledby="page-title">
            <span class="eyebrow">Convivencia institucional</span>
            <h1 id="page-title">Acuerdo Escolar <span>de Convivencia</span></h1>
            <p>Consultá el documento institucional completo. Este acuerdo reúne pautas y compromisos que acompañan la convivencia respetuosa de nuestra comunidad educativa.</p>
        </section>

        <section class="document-card" aria-label="Documento Acuerdo Escolar de Convivencia 2026">
            <?php if ($documentoExiste): ?>
                <div class="document-toolbar">
                    <div class="document-heading">
                        <div class="document-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><path d="M14 2v6h6M8 13h8M8 17h8"></path></svg>
                        </div>
                        <div><h2>Acuerdo Escolar de Convivencia · 2026</h2><p>Documento completo en formato PDF</p></div>
                    </div>
                    <div class="document-actions">
                        <a class="action-button" href="<?= htmlspecialchars($documento, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer">Abrir en otra pestaña ↗</a>
                        <a class="action-button" href="<?= htmlspecialchars($documento, ENT_QUOTES, 'UTF-8') ?>" download>Descargar PDF ↓</a>
                    </div>
                </div>
                <div class="pdf-viewer">
                    <iframe src="<?= htmlspecialchars($documento, ENT_QUOTES, 'UTF-8') ?>#view=FitH" title="Acuerdo Escolar de Convivencia 2026 en PDF">Tu navegador no puede mostrar el PDF integrado. Usá el botón para abrirlo o descargarlo.</iframe>
                </div>
                <div class="document-note">Si el documento no se visualiza dentro de esta página en tu dispositivo, utilizá los botones para abrirlo o descargarlo.</div>
            <?php else: ?>
                <div class="missing-document"><h2>No se encontró el documento PDF</h2><p>Colocá <strong>acuerdo_escolar_2026.pdf</strong> en la misma carpeta que este archivo PHP para mostrarlo aquí.</p></div>
            <?php endif; ?>
        </section>
    </div>
</main>
<footer class="site-footer">
    <div class="footer-inner">
        <h2 class="footer-title">Explorá nuestra institución</h2>
        <nav class="footer-links" aria-label="Enlaces institucionales">
            <a href="contactanos.php">Contactanos</a>
            <a href="nosotros.php">Acerca de nosotros</a>
            <a href="ubicacion.php">Ubicación</a>
            <a href="instagram.php">Instagram</a>
            <a href="acuerdo_escolar.php" aria-current="page">Acuerdo escolar de convivencia</a>
            <a href="historia.php">Historia de la escuela</a>
        </nav>
        <p class="footer-copy">E.E.T. N.º 3 Teniente Luis Cenobio Candelaria · Paraná, Entre Ríos</p>
    </div>
</footer>
</body>
</html>
