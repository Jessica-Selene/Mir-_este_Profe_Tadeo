<?php
// Página de contacto de la E.E.T. N.º 3 Teniente Luis Cenobio Candelaria.
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#101722">
  <title>Contactanos | E.E.T. N.º 3</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
 
 
 <style>
    :root{--navy:#101722;--navy2:#182a40;--gold:#c49a3a;--gold-light:#ffd78e;--blue:#087fc1;--ink:#202d40;--muted:#5c6878;--paper:#f3f6fa}
    *{box-sizing:border-box} html{scroll-behavior:smooth}
    body{margin:0;min-height:100vh;display:flex;flex-direction:column;font-family:"DM Sans",sans-serif;color:var(--ink);background:radial-gradient(circle at 8% 8%,rgba(196,154,58,.12),transparent 27%),radial-gradient(circle at 95% 32%,rgba(8,127,193,.1),transparent 30%),var(--paper)}
    .site-header{background:var(--navy);color:#fff;border-bottom:3px solid var(--gold);box-shadow:0 8px 24px #10172220}
    .header-inner{width:min(1180px,calc(100% - 36px));min-height:88px;margin:auto;display:flex;align-items:center;justify-content:space-between;gap:18px;padding:14px 0}
    .brand{display:flex;align-items:center;gap:13px;min-width:0;color:inherit;text-decoration:none}
    .logo{width:58px;height:58px;flex:0 0 58px;display:grid;place-items:center;border:1px solid #ffd78e99;border-radius:50%;background:#fff;overflow:hidden}
    .logo img{width:100%;height:100%;object-fit:contain;padding:4px}
    .school-name span{display:block;margin-bottom:3px;color:var(--gold-light);font-size:.75rem;font-weight:700;letter-spacing:.14em;text-transform:uppercase}
    .school-name strong{display:block;font-family:Montserrat,sans-serif;font-size:clamp(.85rem,2vw,1.08rem);line-height:1.35}
    .back-button{display:inline-flex;align-items:center;justify-content:center;gap:8px;padding:11px 16px;border:1px solid var(--gold);border-radius:10px;background:#0003;color:var(--gold-light);text-decoration:none;font-weight:700;white-space:nowrap;transition:background .2s,color .2s,transform .2s}
    .back-button:hover,.back-button:focus-visible{background:var(--gold);color:var(--navy);transform:translateY(-2px)}
    main{flex:1;width:100%;padding:clamp(34px,6vw,70px) 0}
    .container{width:min(1120px,calc(100% - 36px));margin:auto}
    .heading{text-align:center;max-width:800px;margin:0 auto 30px}
    .eyebrow{display:inline-block;margin-bottom:10px;color:#91691a;font-size:.76rem;font-weight:800;letter-spacing:.17em;text-transform:uppercase}
    h1{margin:0 0 13px;color:var(--navy);font-family:Montserrat,sans-serif;font-size:clamp(2rem,5vw,3.25rem);font-weight:800;line-height:1.12}
    h1 span{color:#087fc1}
    .heading p{margin:0;color:var(--muted);font-size:clamp(1rem,2vw,1.1rem);line-height:1.75}
    .contact-card{display:grid;grid-template-columns:minmax(0,1.2fr) minmax(280px,.8fr);align-items:stretch;overflow:hidden;border:1px solid #c49a3a70;border-radius:22px;background:#fff;box-shadow:0 22px 60px #10172217}
    .photo-wrap{position:relative;min-width:0;display:flex;align-items:center;background:#e7f2fc;padding:clamp(12px,2.5vw,24px)}
    .photo-wrap img{display:block;width:100%;height:auto;max-height:620px;object-fit:contain;border-radius:13px;box-shadow:0 12px 28px #1017221c}
    .details{display:flex;flex-direction:column;justify-content:center;padding:clamp(26px,4vw,44px);background:linear-gradient(145deg,#fff,#f8fafc)}
    .details .mini-label{color:#91691a;font-size:.74rem;font-weight:800;letter-spacing:.14em;text-transform:uppercase}
    .details h2{margin:9px 0 12px;color:var(--navy);font-family:Montserrat,sans-serif;font-size:clamp(1.45rem,2.7vw,2rem);font-weight:800;line-height:1.25}
    .details>p{margin:0 0 22px;color:var(--muted);line-height:1.7}
    .contact-list{display:grid;gap:12px;margin:0;padding:0;list-style:none}
    .contact-list li{display:grid;grid-template-columns:42px minmax(0,1fr);align-items:center;gap:12px;padding:13px;border:1px solid #dbe5ef;border-radius:12px;background:#fff;overflow-wrap:anywhere}
    .contact-icon{width:42px;height:42px;display:grid;place-items:center;border-radius:50%;background:#e3f2ff;color:#075b9c;font-size:1.15rem;font-weight:800}
    .contact-list strong{display:block;margin-bottom:2px;color:var(--navy);font-family:Montserrat,sans-serif;font-size:.9rem}
    .contact-list a,.contact-list span.value{color:#344b66;text-decoration:none;line-height:1.45}
    .contact-list a:hover{text-decoration:underline;color:#087fc1}
    .details .back-button{align-self:flex-start;margin-top:24px;background:var(--navy);color:var(--gold-light)}
    .details .back-button:hover,.details .back-button:focus-visible{background:var(--gold);color:var(--navy)}
    .site-footer{padding:29px 0 17px;color:#e8edf3;background:var(--navy);border-top:3px solid var(--gold)}
    .footer-inner{width:min(1100px,calc(100% - 36px));margin:auto}
    .footer-title{margin:0 0 17px;color:#fff;font-family:Montserrat,sans-serif;font-size:1.05rem;font-weight:700;text-align:center}
    .footer-links{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:12px}
    .footer-links a{display:flex;align-items:center;justify-content:center;min-height:47px;padding:11px 13px;border:1px solid #c49a3a94;border-radius:10px;background:#ffffff08;color:var(--gold-light);text-align:center;text-decoration:none;font-size:.92rem;font-weight:600;line-height:1.35;overflow-wrap:anywhere;transition:background .2s,color .2s,transform .2s}
    .footer-links a:hover,.footer-links a:focus-visible{background:var(--gold);color:var(--navy);transform:translateY(-2px)}
    .footer-copy{margin:21px 0 0;color:#aeb8c5;text-align:center;font-size:.83rem}
    @media(max-width:850px){.contact-card{grid-template-columns:minmax(0,1fr)}.photo-wrap{justify-content:center}.photo-wrap img{max-height:none}.details{padding:30px}}
    @media(max-width:600px){.header-inner{width:calc(100% - 24px);align-items:flex-start;gap:10px}.logo{width:45px;height:45px;flex-basis:45px}.brand{gap:9px}.school-name span{font-size:.63rem;letter-spacing:.08em}.school-name strong{font-size:.78rem}.back-button{padding:9px 10px;font-size:.82rem}.container,.footer-inner{width:calc(100% - 24px)}.heading{margin-bottom:22px}.contact-card{border-radius:16px}.photo-wrap{padding:10px}.details{padding:25px 19px}.footer-links{grid-template-columns:repeat(2,minmax(0,1fr));gap:9px}.footer-links a{padding:10px 8px;font-size:.84rem}}
    @media(max-width:370px){.header-inner{flex-direction:column;align-items:stretch}.header-inner>.back-button{align-self:flex-start}.footer-links{grid-template-columns:minmax(0,1fr)}}
    @media(prefers-reduced-motion:reduce){html{scroll-behavior:auto}*,*::before,*::after{transition:none!important}}
  </style>
</head>
<body>
  <header class="site-header">
    <div class="header-inner">
      <a class="brand" href="index.php" aria-label="Volver al inicio">
        <div class="logo"><img src="img/logo_candelaria.png" alt="Escudo de la escuela"></div>
        <div class="school-name"><span>Escuela Técnica</span><strong>E.E.T. N.º 3 Teniente Luis Cenobio Candelaria</strong></div>
      </a>
      <a class="back-button" href="index.php">← Volver a inicio</a>
    </div>
  </header>

  <main>
    <div class="container">
      <section class="heading" aria-labelledby="contact-title">
        <span class="eyebrow">Estamos para ayudarte</span>
        <h1 id="contact-title">Contactanos</h1>
        <p>¿Tenés alguna consulta? Encontrá aquí los datos de contacto de nuestra institución. ¡Te esperamos!</p>
      </section>

      <section class="contact-card" aria-label="Datos de contacto de la escuela">
        <div class="photo-wrap">
          <!-- Guardá la imagen proporcionada como Escuela.png en la misma carpeta que contactanos.php. -->
          <img src="img/Escuela.png" alt="Banner institucional de Contactanos de la E.E.T. N.º 3, con dirección, teléfono y correo electrónico">
        </div>
        <div class="details">
          <span class="mini-label">Canales oficiales</span>
          <h2>Estamos para escucharte</h2>
          <p>Podés comunicarte con la escuela o acercarte a nuestra sede. Para consultas específicas, indicá el motivo de tu comunicación.</p>
          <ul class="contact-list">
            <li><span class="contact-icon" aria-hidden="true">⌖</span><div><strong>Dirección</strong><span class="value">Av. Jorge Newbery 4200 · Paraná (E.R.)</span></div></li>
            <li><span class="contact-icon" aria-hidden="true">☎</span><div><strong>Teléfono</strong><a href="tel:+543434362963">(0343) 436-2963</a></div></li>
            <li><span class="contact-icon" aria-hidden="true">✉</span><div><strong>Correo electrónico</strong><a href="mailto:enet3.pn@entrerios.edu.ar">enet3.pn@entrerios.edu.ar</a></div></li>
          </ul>
        </div>
      </section>
    </div>
  </main>

  <footer class="site-footer">
    <div class="footer-inner">
      <h2 class="footer-title">Explorá nuestra institución</h2>
      <nav class="footer-links" aria-label="Enlaces institucionales">
        <a href="contactanos.php" aria-current="page">Contactanos</a>
        <a href="nosotros.php">Acerca de nosotros</a>
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
