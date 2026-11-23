<?php
$archivoPDF = "musica.pdf";
$existePDF = file_exists(__DIR__ . DIRECTORY_SEPARATOR . $archivoPDF);
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Música | 2.º año</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Montserrat:wght@500;600;700;800&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="../../css/style.css?v=4">
<style>
:root{--art-navy:#101722;--art-navy-light:#182536;--art-gold:#c49a3a;--art-gold-light:#ffd78e;--art-cream:#f5f3ee}
*{box-sizing:border-box}html,body{min-height:100%;margin:0}
body{display:flex;flex-direction:column;background:#f3f5f8;color:#202833;font-family:"DM Sans",sans-serif}
main{flex:1}
.art-header{position:relative;overflow:hidden;padding:clamp(38px,6vw,72px) 20px;color:var(--art-cream);text-align:center;background:radial-gradient(circle at 15% 20%,rgba(196,154,58,.16),transparent 32%),radial-gradient(circle at 85% 80%,rgba(196,154,58,.12),transparent 30%),linear-gradient(135deg,var(--art-navy),var(--art-navy-light));border-bottom:3px solid var(--art-gold)}
.art-header:before,.art-header:after{content:"";position:absolute;width:190px;height:190px;border:1px solid rgba(255,215,142,.15);border-radius:50%;pointer-events:none}
.art-header:before{top:-115px;left:-55px}.art-header:after{right:-65px;bottom:-135px;width:250px;height:250px}
.art-header-content{position:relative;z-index:1}
.art-eyebrow{display:inline-block;margin-bottom:12px;color:var(--art-gold-light);font-size:.78rem;font-weight:700;letter-spacing:.2em;text-transform:uppercase}
.art-header h1{margin:0;color:#fff;font-family:"Montserrat",sans-serif;font-size:clamp(2rem,5vw,3.35rem);font-weight:800;letter-spacing:.02em}
.art-header p{max-width:680px;margin:14px auto 0;color:#d8dee8;font-size:clamp(.95rem,2vw,1.08rem);line-height:1.6}
.art-main{width:min(1120px,calc(100% - 32px));margin:clamp(24px,5vw,48px) auto}
.art-home-wrap{margin-bottom:18px}
.art-home-btn{display:inline-flex;align-items:center;justify-content:center;gap:9px;min-height:44px;padding:11px 18px;color:#fff;background:var(--art-navy);border:1px solid var(--art-gold);border-radius:10px;font-weight:700;text-decoration:none;transition:.2s ease}
.art-home-btn:hover,.art-home-btn:focus-visible{color:var(--art-navy);background:var(--art-gold-light);transform:translateY(-2px)}
.art-document-card{overflow:hidden;width:100%;background:#fff;border:1px solid #e0e5ec;border-radius:18px;box-shadow:0 16px 42px rgba(16,23,34,.09)}
.art-document-top{display:flex;align-items:center;justify-content:space-between;gap:16px;flex-wrap:wrap;padding:20px 24px;background:linear-gradient(110deg,#fff,#fbf8f0);border-bottom:1px solid #e9e3d5}
.art-document-heading{display:flex;align-items:center;gap:13px;min-width:0}
.art-document-icon{display:grid;flex:0 0 46px;width:46px;height:46px;place-items:center;color:var(--art-gold-light);background:var(--art-navy);border:1px solid rgba(196,154,58,.65);border-radius:13px;font-size:1.25rem}
.art-document-heading h2{margin:0;color:var(--art-navy);font-family:"Montserrat",sans-serif;font-size:clamp(1rem,2vw,1.2rem);font-weight:700}
.art-document-heading span{display:block;margin-top:3px;color:#687386;font-size:.86rem}
.art-actions{display:flex;flex-wrap:wrap;gap:9px}
.art-btn{display:inline-flex;align-items:center;justify-content:center;min-height:42px;padding:10px 16px;border:1px solid var(--art-gold);border-radius:9px;font-size:.88rem;font-weight:700;text-decoration:none;transition:.2s ease}
.art-btn-primary{color:#fff;background:var(--art-navy)}.art-btn-secondary{color:var(--art-navy);background:#fff}
.art-btn:hover,.art-btn:focus-visible{color:var(--art-navy);background:var(--art-gold-light);border-color:var(--art-gold);transform:translateY(-2px)}
.pdf-viewer{width:100%;padding:14px;background:#e9edf2}
.pdf-toolbar{display:flex;align-items:center;justify-content:center;flex-wrap:wrap;gap:10px;width:100%;margin-bottom:14px;padding:12px;background:var(--art-navy);border:1px solid rgba(196,154,58,.6);border-radius:10px}
.pdf-toolbar button{min-width:40px;min-height:38px;padding:7px 12px;color:#fff;background:#253448;border:1px solid var(--art-gold);border-radius:7px;font-weight:700;cursor:pointer}
.pdf-toolbar button:hover:not(:disabled){color:var(--art-navy);background:var(--art-gold-light)}
.pdf-toolbar button:disabled{opacity:.4;cursor:not-allowed}
.pdf-page-info{color:#fff;font-size:.9rem;font-weight:600;white-space:nowrap}
.pdf-stage{display:flex;justify-content:center;align-items:flex-start;width:100%;min-height:300px;overflow:auto;padding:10px;background:#dce2e9;border-radius:9px}
#pdfCanvas{display:block;max-width:100%;height:auto;background:#fff;box-shadow:0 3px 15px rgba(0,0,0,.16)}
.pdf-status{padding:28px 12px;color:#465366;text-align:center;font-size:.95rem}
.art-missing{padding:42px 24px;text-align:center}.art-missing h2{color:var(--art-navy);font-family:"Montserrat",sans-serif;font-size:1.25rem;font-weight:700}.art-missing p{margin:10px 0 0;color:#596579}
.site-footer{position:relative;margin-top:28px;padding:0;color:var(--art-cream);background:linear-gradient(135deg,#101722 0%,#182536 55%,#101722 100%);border-top:2px solid var(--art-gold);overflow:hidden}
.site-footer:before{content:"";display:block;width:100%;height:3px;background:linear-gradient(90deg,transparent,#c49a3a,#ffe0a0,#c49a3a,transparent)}
.footer-inner{display:flex;flex-direction:column;align-items:center;gap:22px;padding-block:38px 30px;text-align:center}
.footer-title{margin:0;color:#ffe0a0;font-family:"Montserrat",sans-serif;font-size:clamp(1rem,2vw,1.2rem);font-weight:700;letter-spacing:.3px;line-height:1.5}
.footer-inner:after{content:"";display:block;width:min(180px,45%);height:1px;background:linear-gradient(90deg,transparent,rgba(196,154,58,.8),transparent)}
.footer-links{display:flex;flex-wrap:wrap;justify-content:center;align-items:center;gap:12px;width:100%}
.footer-link{display:inline-flex;align-items:center;justify-content:center;min-height:42px;max-width:100%;padding:10px 17px;color:#e8eaf0;background:rgba(255,255,255,.04);border:1px solid rgba(196,154,58,.45);border-radius:8px;font-family:"DM Sans",sans-serif;font-size:.88rem;font-weight:500;line-height:1.4;text-align:center;text-decoration:none;overflow-wrap:anywhere;transition:all .25s ease}
.footer-link:hover,.footer-link:focus-visible{color:#101722;background:#c49a3a;border-color:#ffe0a0;transform:translateY(-3px);outline:none}
@media(max-width:767px){.art-document-top{align-items:flex-start;padding:17px}.art-actions{width:100%}.art-btn{flex:1 1 auto}.pdf-viewer{padding:8px}.pdf-toolbar{gap:6px;padding:9px 5px}.pdf-toolbar button{min-width:36px;padding:7px 9px;font-size:.82rem}}
@media(max-width:575px){.art-main{width:calc(100% - 22px)}.art-document-card{border-radius:13px}.art-document-heading{align-items:flex-start}.art-document-icon{flex-basis:40px;width:40px;height:40px}.pdf-stage{padding:4px;min-height:220px}.pdf-page-info{font-size:.78rem}.site-footer{margin-top:22px}.footer-inner{gap:18px;padding:30px 16px 24px}.footer-links{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:9px}.footer-link{min-height:46px;padding:9px 7px;font-size:.79rem;border-radius:9px}}
</style>
</head>
<body>
<header class="art-header">
 <div class="art-header-content container">
  <span class="art-eyebrow">Material de estudio · 2.º año</span>
  <h1>Música</h1>
  <p>Programa de contenidos, materiales, formatos, trazados geométricos y técnicas de representación gráfica.</p>
 </div>
</header>
<main>
 <section class="art-main" aria-label="Material de Dibujo Técnico">
  <div class="art-home-wrap"><a class="art-home-btn" href="../../index.php">← Volver al inicio</a></div>
  <div class="art-document-card">
   <div class="art-document-top">
    <div class="art-document-heading">
     <div class="art-document-icon" aria-hidden="true">🎺</div>
     <div><h2>Programa de Música</h2><span>Planificación anual · 2.º año</span></div>
    </div>
    <?php if ($existePDF): ?>
    <div class="art-actions">
     <a class="art-btn art-btn-primary" href="<?= htmlspecialchars($archivoPDF, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener">Abrir PDF</a>
     <a class="art-btn art-btn-secondary" href="<?= htmlspecialchars($archivoPDF, ENT_QUOTES, 'UTF-8') ?>" download>Descargar PDF</a>
    </div>
    <?php endif; ?>
   </div>
   <?php if ($existePDF): ?>
   <div class="pdf-viewer">
    <div class="pdf-toolbar">
     <button type="button" id="prevPage" disabled aria-label="Página anterior">❮</button>
     <span class="pdf-page-info">Página <span id="pageNum">1</span> de <span id="pageCount">...</span></span>
     <button type="button" id="nextPage" disabled aria-label="Página siguiente">❯</button>
     <button type="button" id="zoomOut" aria-label="Reducir">−</button>
     <button type="button" id="zoomIn" aria-label="Ampliar">+</button>
     <button type="button" id="fitWidth">Ajustar</button>
    </div>
    <div class="pdf-stage" id="pdfStage">
     <p class="pdf-status" id="pdfStatus">Cargando documento...</p>
     <canvas id="pdfCanvas" hidden></canvas>
    </div>
   </div>
   <?php else: ?>
   <div class="art-missing"><h2>No se encontró el documento</h2><p>Colocá el archivo <strong>musica.pdf</strong> en la misma carpeta que este archivo PHP para visualizarlo.</p></div>
   <?php endif; ?>
  </div>
 </section>
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
<?php if ($existePDF): ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>
<script>
(() => {
 const url = <?= json_encode($pdfUrl) ?>;
 const canvas = document.getElementById("pdfCanvas");
 const context = canvas.getContext("2d");
 const stage = document.getElementById("pdfStage");
 const status = document.getElementById("pdfStatus");
 const pageNumElement = document.getElementById("pageNum");
 const pageCountElement = document.getElementById("pageCount");
 const previousButton = document.getElementById("prevPage");
 const nextButton = document.getElementById("nextPage");
 const zoomInButton = document.getElementById("zoomIn");
 const zoomOutButton = document.getElementById("zoomOut");
 const fitWidthButton = document.getElementById("fitWidth");
 let pdfDocument = null, currentPage = 1, zoom = 1, fitToWidth = true;
 let rendering = false, renderPending = false, resizeTimeout;

 pdfjsLib.GlobalWorkerOptions.workerSrc =
  "https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js";

 function updateControls() {
  pageNumElement.textContent = currentPage;
  previousButton.disabled = currentPage <= 1;
  nextButton.disabled = !pdfDocument || currentPage >= pdfDocument.numPages;
 }

 async function renderPage() {
  if (!pdfDocument) return;
  if (rendering) { renderPending = true; return; }
  rendering = true;
  renderPending = false;
  try {
   const page = await pdfDocument.getPage(currentPage);
   const baseViewport = page.getViewport({scale: 1});
   const availableWidth = Math.max(100, stage.clientWidth - 20);
   const scale = fitToWidth ? availableWidth / baseViewport.width : zoom;
   const viewport = page.getViewport({scale});
   const pixelRatio = Math.min(window.devicePixelRatio || 1, 2);
   canvas.width = Math.floor(viewport.width * pixelRatio);
   canvas.height = Math.floor(viewport.height * pixelRatio);
   canvas.style.width = viewport.width + "px";
   canvas.style.height = viewport.height + "px";
   context.setTransform(pixelRatio, 0, 0, pixelRatio, 0, 0);
   await page.render({canvasContext: context, viewport}).promise;
   canvas.hidden = false;
   status.hidden = true;
   updateControls();
  } catch (error) {
   console.error("Error al mostrar el PDF:", error);
   status.hidden = false;
   status.textContent = "No se pudo visualizar esta página. Probá recargar el sitio.";
  } finally {
   rendering = false;
   if (renderPending) renderPage();
  }
 }

 async function loadPDF() {
  try {
   pdfDocument = await pdfjsLib.getDocument(url).promise;
   pageCountElement.textContent = pdfDocument.numPages;
   await renderPage();
  } catch (error) {
   console.error("Error al cargar el PDF:", error);
   status.textContent = "No se pudo cargar el documento. Verificá que dibujo_tecnico.pdf esté junto a esta página.";
  }
 }

 previousButton.addEventListener("click", () => {
  if (currentPage > 1) { currentPage--; renderPage(); }
 });
 nextButton.addEventListener("click", () => {
  if (pdfDocument && currentPage < pdfDocument.numPages) { currentPage++; renderPage(); }
 });
 zoomInButton.addEventListener("click", () => {
  fitToWidth = false; zoom = Math.min(zoom + .2, 3); renderPage();
 });
 zoomOutButton.addEventListener("click", () => {
  fitToWidth = false; zoom = Math.max(zoom - .2, .5); renderPage();
 });
 fitWidthButton.addEventListener("click", () => { fitToWidth = true; renderPage(); });
 window.addEventListener("resize", () => {
  if (!fitToWidth) return;
  clearTimeout(resizeTimeout);
  resizeTimeout = setTimeout(renderPage, 180);
 });
 loadPDF();
})();
</script>
<?php endif; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
