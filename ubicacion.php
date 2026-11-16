<?php
$direccion = "Av. Jorge Newbery 4200, Paraná, Entre Ríos, Argentina";
$mapa = "https://www.google.com/maps?q=" . rawurlencode($direccion) . "&output=embed";
$enlaceMapa = "https://www.google.com/maps/search/?api=1&query=" . rawurlencode($direccion);
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="theme-color" content="#101722">
<title>Ubicación | E.E.T. N.º 3</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<style>
:root{--navy:#101722;--navy2:#182231;--gold:#c49a3a;--goldlight:#ffd78e;--text:#202833;--bg:#f3f5f8}*{box-sizing:border-box}body{margin:0;min-height:100vh;display:flex;flex-direction:column;color:var(--text);background:radial-gradient(circle at 10% 14%,rgba(196,154,58,.12),transparent 28%),radial-gradient(circle at 92% 32%,rgba(38,91,151,.10),transparent 30%),var(--bg);font-family:"DM Sans",sans-serif}.site-header{color:#fff;background:var(--navy);border-bottom:3px solid var(--gold);box-shadow:0 8px 24px #10172226}.header-inner{width:min(1200px,calc(100% - 36px));min-height:92px;margin:auto;padding:14px 0;display:flex;align-items:center;justify-content:space-between;gap:20px}.brand{display:flex;align-items:center;gap:14px;min-width:0;color:inherit;text-decoration:none}.school-logo{width:62px;height:62px;flex:0 0 62px;display:grid;place-items:center;overflow:hidden;border-radius:50%;background:#fff;border:1px solid #ffd78eb3}.school-logo img{width:100%;height:100%;object-fit:contain;padding:4px}.school-name span{display:block;margin-bottom:3px;color:var(--goldlight);font-size:.78rem;font-weight:700;letter-spacing:.13em;text-transform:uppercase}.school-name strong{display:block;font-family:Montserrat,sans-serif;font-size:clamp(.9rem,2vw,1.12rem);line-height:1.35}.back-button,.map-button{display:inline-flex;align-items:center;justify-content:center;gap:9px;padding:11px 17px;border:1px solid var(--gold);border-radius:10px;background:#0000002e;color:var(--goldlight);text-decoration:none;font-weight:700;transition:background .25s,color .25s,transform .25s}.back-button{white-space:nowrap}.back-button:hover,.back-button:focus-visible,.map-button:hover,.map-button:focus-visible{background:var(--gold);color:var(--navy);transform:translateY(-2px)}main{flex:1;width:100%;padding:clamp(36px,6vw,76px) 0}.location-container{width:min(1100px,calc(100% - 36px));margin:0 auto}.page-heading{max-width:780px;margin:0 auto 32px;text-align:center}.eyebrow{display:inline-block;margin-bottom:12px;color:#946d1d;font-size:.76rem;font-weight:800;letter-spacing:.17em;text-transform:uppercase}.page-heading h1{margin:0 0 14px;color:var(--navy);font-family:Montserrat,sans-serif;font-size:clamp(2rem,5vw,3.15rem);font-weight:800;line-height:1.12}.page-heading h1 span{color:#a77d24}.page-heading p{margin:0;color:#5d6672;font-size:clamp(1rem,2vw,1.1rem);line-height:1.75}.location-card{overflow:hidden;border:1px solid #c49a3a7a;border-radius:24px;background:#fff;box-shadow:0 22px 60px #1017221f}.location-top{display:flex;align-items:center;justify-content:space-between;gap:20px;padding:clamp(22px,4vw,34px);color:#fff;background:linear-gradient(120deg,var(--navy),#22364d)}.address-info{display:flex;align-items:flex-start;gap:17px;min-width:0}.pin-icon{width:54px;height:54px;flex:0 0 54px;display:grid;place-items:center;border:1px solid #ffd78e99;border-radius:15px;color:var(--goldlight);background:#ffffff12}.pin-icon svg{width:27px;height:27px}.address-info h2{margin:0 0 7px;color:#fff;font-family:Montserrat,sans-serif;font-size:clamp(1.1rem,2.5vw,1.5rem);font-weight:800;line-height:1.4}.address-info p{margin:0;color:#d9e0e8;line-height:1.65;overflow-wrap:anywhere}.map-button{flex-shrink:0;background:var(--gold);color:var(--navy)}.map-button:hover,.map-button:focus-visible{background:var(--goldlight)}.map-frame{width:100%;height:clamp(340px,52vw,540px);background:#e4e9ef}.map-frame iframe{display:block;width:100%;height:100%;border:0}.map-caption{display:flex;align-items:center;gap:10px;padding:16px 22px;color:#5d6672;background:#fff;font-size:.9rem;line-height:1.55}.map-caption svg{flex:0 0 20px;width:20px;height:20px;color:#9b751f}.site-footer{padding:30px 0 18px;color:#e8edf3;background:var(--navy);border-top:3px solid var(--gold)}.footer-inner{width:min(1100px,calc(100% - 36px));margin:0 auto}.footer-title{margin:0 0 18px;color:#fff;font-family:Montserrat,sans-serif;font-size:1.05rem;font-weight:700;text-align:center}.footer-links{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:12px}.footer-links a{display:flex;align-items:center;justify-content:center;min-height:48px;padding:11px 14px;border:1px solid #c49a3a94;border-radius:10px;background:#ffffff09;color:var(--goldlight);text-align:center;text-decoration:none;font-size:.93rem;font-weight:600;line-height:1.35;overflow-wrap:anywhere;transition:background .25s,color .25s,transform .25s}.footer-links a:hover,.footer-links a:focus-visible{background:var(--gold);color:var(--navy);transform:translateY(-2px)}.footer-copy{margin:22px 0 0;color:#aeb8c5;text-align:center;font-size:.84rem}@media(max-width:760px){.location-top{align-items:flex-start;flex-direction:column}.map-button{align-self:flex-start}.footer-links{grid-template-columns:repeat(2,minmax(0,1fr))}}@media(max-width:520px){.header-inner{width:calc(100% - 24px);align-items:flex-start;gap:12px}.brand{gap:9px}.school-logo{width:46px;height:46px;flex-basis:46px}.school-name span{font-size:.65rem;letter-spacing:.08em}.school-name strong{font-size:.78rem}.back-button{padding:9px 10px;font-size:.82rem}.location-container,.footer-inner{width:calc(100% - 24px)}.location-card{border-radius:17px}.location-top{padding:23px 19px}.address-info{gap:12px}.pin-icon{width:44px;height:44px;flex-basis:44px;border-radius:12px}.map-frame{height:390px}.map-caption{align-items:flex-start;padding:14px 16px}.footer-links{gap:9px}.footer-links a{min-height:46px;padding:10px 8px;font-size:.84rem}}@media(max-width:360px){.header-inner{flex-direction:column;align-items:stretch}.header-inner>.back-button{align-self:flex-start}.footer-links{grid-template-columns:minmax(0,1fr)}}@media(prefers-reduced-motion:reduce){*,*::before,*::after{transition-duration:.01ms!important}}
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
         <span>Escuela Técnica</span><strong>E.E.T. N.º 3 Teniente Luis Cenobio Candelaria</strong>
       </div>
      </a>

  <a class="back-button" href="index.php">← Volver al inicio</a>
 </div>
</header>

<main>
    <div class="location-container">
     <section class="page-heading" aria-labelledby="tituloUbicacion">
      <span class="eyebrow">Encontranos</span>
        <h1 id="tituloUbicacion">Nuestra <span>ubicación</span></h1>
      <p>Consultá dónde se encuentra nuestra institución y abrí el mapa para planificar cómo llegar.</p>
     </section>
<section class="location-card" aria-label="Mapa y dirección de la escuela">
  <div class="location-top">
    <div class="address-info">
      <div class="pin-icon" aria-hidden="true">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z"></path>
            <circle cx="12" cy="10" r="2.5"></circle>
        </svg>
      </div>

    <div>
      <h2>E.E.T. N.º 3 “Tte. Don Luis Cenobio Candelaria”</h2>
      <p><?= htmlspecialchars($direccion, ENT_QUOTES, 'UTF-8') ?></p>
    </div>
  </div>

   <a class="map-button" href="<?= htmlspecialchars($enlaceMapa, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer">Abrir en Google Maps ↗</a>
</div>

<div class="map-frame">
    <iframe src="<?= htmlspecialchars($mapa, ENT_QUOTES, 'UTF-8') ?>" title="Mapa de ubicación de la E.E.T. N.º 3 en Paraná" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
</div>

<div class="map-caption">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
        <circle cx="12" cy="12" r="9"></circle>
        <path d="M12 11v5"></path>
        <path d="M12 7h.01"></path>
    </svg>
    <span>La ubicación se muestra mediante Google Maps. Para consultar indicaciones de viaje, seleccioná “Abrir en Google Maps”.</span>
</div>

</section>
</div>
</main>


<footer class="site-footer">
    <div class="footer-inner">
        <h2 class="footer-title">Explorá nuestra institución</h2>
        <nav class="footer-links" aria-label="Enlaces institucionales">
         <a href="contactanos.php">Contactanos</a>
         <a href="nosotros.php">Acerca de nosotros</a>
         <a href="ubicacion.php" aria-current="page">Ubicación</a>
         <a href="instagram.php">Instagram</a>
         <a href="acuerdo_escolar.php">Acuerdo escolar de convivencia</a>
         <a href="historia.php">Historia de la escuela</a>
        </nav>

        <p class="footer-copy">E.E.T. N.º 3 Teniente Luis Cenobio Candelaria · Paraná, Entre Ríos</p>
    </div>
</footer>

</body>
</html>
