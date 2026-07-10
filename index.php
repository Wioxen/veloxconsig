<!--
  ============================================================
  VELOX CONSIG — Landing Page
  ------------------------------------------------------------
  ANTES DE PUBLICAR, TROQUE:
  1) WHATSAPP_NUMBER (logo abaixo, no <script>) pelo número real
     no formato: 55 + DDD + número. Ex.: 5573999999999
  2) A foto da Caroline: substitua o bloco <svg class="promoter-photo">
     por <img src="caroline.jpg" alt="Caroline dos Santos Moreira" class="promoter-photo">
  3) O CNPJ e a razão social no rodapé.
  4) Os depoimentos por avaliações reais de clientes.
  ============================================================
-->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Velox Consig — Crédito Consignado Rápido para CLT, Aposentados e Pensionistas</title>
<meta name="description" content="Empréstimo consignado com as menores taxas para trabalhadores CLT, aposentados e pensionistas do INSS. Simulação gratuita e atendimento humanizado com a Caroline. Fale agora no WhatsApp.">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sora:wght@500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
  :root{
    --ink:#0C2B33;        /* teal-tinta: títulos e seções escuras */
    --brand:#0E6E63;      /* verde-petróleo: marca */
    --brand-deep:#0A5249; /* verde mais profundo */
    --accent:#F4A62A;     /* âmbar: destaques, estrelas, CTA */
    --accent-deep:#D98A0E;
    --wa:#25D366;         /* verde WhatsApp */
    --wa-deep:#128C7E;
    --bg:#FAFAF6;         /* off-white quente */
    --surface:#FFFFFF;
    --surface-2:#F1F5F3;
    --muted:#54666A;
    --line:#E3E9E7;
    --shadow:0 18px 40px -18px rgba(12,43,51,.28);
    --shadow-sm:0 6px 20px -10px rgba(12,43,51,.25);
    --radius:20px;
  }

  *{box-sizing:border-box}
  html{scroll-behavior:smooth;-webkit-text-size-adjust:100%;scroll-padding-top:88px}
  body{
    margin:0;
    font-family:'Inter',system-ui,-apple-system,Segoe UI,Roboto,sans-serif;
    color:var(--ink);
    background:var(--bg);
    font-size:17px;
    line-height:1.6;
    -webkit-font-smoothing:antialiased;
    overflow-x:hidden;
  }
  @media(max-width:600px){body{font-size:16px}}
  h1,h2,h3,.display{font-family:'Sora','Inter',sans-serif;line-height:1.1;letter-spacing:-.02em}
  a{color:inherit;text-decoration:none}
  img{max-width:100%;display:block}
  .wrap{width:min(1120px,92%);margin-inline:auto}
  .eyebrow{
    font-family:'Sora',sans-serif;font-weight:700;font-size:.8rem;letter-spacing:.14em;
    text-transform:uppercase;color:var(--brand);display:inline-flex;align-items:center;gap:.5rem;
  }
  .eyebrow::before{content:"›››";color:var(--accent);letter-spacing:-.1em;font-weight:800}

  /* ---------- Botões ---------- */
  .btn{
    display:inline-flex;align-items:center;justify-content:center;gap:.6rem;
    font-family:'Sora',sans-serif;font-weight:700;font-size:1.02rem;
    padding:.95rem 1.5rem;border-radius:999px;cursor:pointer;border:0;
    transition:transform .15s ease, box-shadow .2s ease, background .2s ease;
    text-align:center;
  }
  .btn:active{transform:translateY(1px)}
  .btn-wa{background:var(--wa);color:#062b23;box-shadow:0 12px 24px -10px rgba(37,211,102,.7)}
  .btn-wa:hover{background:#20c15c}
  .btn-accent{background:var(--accent);color:#3a2400;box-shadow:0 12px 24px -10px rgba(244,166,42,.75)}
  .btn-accent:hover{background:var(--accent-deep)}
  .btn-ghost{background:transparent;color:var(--ink);border:1.5px solid var(--line)}
  .btn-ghost:hover{border-color:var(--brand);color:var(--brand)}
  .btn svg{width:20px;height:20px;flex:none}
  .btn-lg{padding:1.1rem 1.9rem;font-size:1.1rem}

  :focus-visible{outline:3px solid var(--accent);outline-offset:3px;border-radius:6px}

  /* ---------- Header ---------- */
  header.site{
    position:sticky;top:0;z-index:50;background:rgba(250,250,246,.9);
    backdrop-filter:blur(10px);border-bottom:1px solid var(--line);
  }
  .nav{display:flex;align-items:center;justify-content:space-between;padding:.85rem 0;gap:1rem}
  .logo{display:flex;align-items:center;gap:.55rem;font-family:'Sora',sans-serif;font-weight:800;font-size:1.18rem}
  .logo .mark{width:34px;height:34px;flex:none;display:block;filter:drop-shadow(0 5px 12px rgba(14,110,99,.3))}
  .logo b{color:var(--brand)}
  .nav-links{display:none;gap:2rem;font-weight:600;font-size:.98rem}
  .nav-links a{color:var(--muted);transition:color .15s}
  .nav-links a:hover{color:var(--brand)}
  .nav .btn{padding:.7rem 1.15rem;font-size:.95rem}
  @media(min-width:900px){.nav-links{display:flex}}

  /* ---------- Hero ---------- */
  .hero{position:relative;overflow:hidden;padding:3.5rem 0 3rem}
  .hero::before{
    content:"";position:absolute;inset:0;z-index:0;
    background:
      radial-gradient(900px 500px at 78% -10%, rgba(14,110,99,.10), transparent 60%),
      radial-gradient(600px 400px at 0% 110%, rgba(244,166,42,.12), transparent 60%);
  }
  /* traços de velocidade (assinatura) */
  .speed{position:absolute;right:-40px;top:22%;z-index:0;opacity:.5;pointer-events:none}
  .speed i{display:block;height:6px;border-radius:6px;background:var(--accent);margin:12px 0;transform:skewX(-24deg)}
  .speed i:nth-child(1){width:120px}
  .speed i:nth-child(2){width:190px;background:var(--brand)}
  .speed i:nth-child(3){width:90px}
  .hero-grid{position:relative;z-index:2;display:grid;gap:2.5rem;align-items:center}
  @media(min-width:960px){.hero-grid{grid-template-columns:1.15fr .85fr}}
  .hero h1{font-size:clamp(2.1rem,6vw,3.5rem);font-weight:800;margin:1rem 0}
  .hero h1 em{font-style:normal;color:var(--brand);position:relative;white-space:nowrap}
  .hero h1 em::after{content:"";position:absolute;left:0;right:0;bottom:.05em;height:.28em;background:rgba(244,166,42,.4);z-index:-1;border-radius:4px}
  .hero p.lead{font-size:1.2rem;color:var(--muted);max-width:34ch;margin:0 0 1.8rem}
  .hero-cta{display:flex;flex-wrap:wrap;gap:.9rem}
  .trust-row{display:flex;flex-wrap:wrap;gap:1.2rem 1.6rem;margin-top:1.8rem;font-size:.92rem;color:var(--muted);font-weight:600}
  .trust-row span{display:inline-flex;align-items:center;gap:.45rem}
  .trust-row svg{width:18px;height:18px;color:var(--brand)}

  /* card destaque no hero */
  .hero-card{
    background:var(--ink);color:#eaf4f1;border-radius:26px;padding:1.6rem;box-shadow:var(--shadow);
    position:relative;overflow:hidden;
  }
  .hero-card::after{content:"›";position:absolute;font-family:'Sora';font-weight:800;font-size:16rem;color:rgba(255,255,255,.04);right:-2rem;bottom:-5rem;line-height:1}
  .hero-card .tag{font-size:.8rem;letter-spacing:.12em;text-transform:uppercase;color:var(--accent);font-weight:700}
  .hero-card h3{font-size:1.5rem;margin:.4rem 0 1rem;color:#fff}
  .mini{display:flex;gap:.9rem;align-items:flex-start;padding:.85rem 0;border-top:1px solid rgba(255,255,255,.1)}
  .mini:first-of-type{border-top:0}
  .mini .n{font-family:'Sora';font-weight:800;color:var(--accent);font-size:1.15rem;flex:none;width:1.6rem}
  .mini p{margin:0;font-size:.96rem;color:#cfe0dc}
  .mini b{color:#fff}

  /* ---------- Section base ---------- */
  section{padding:4rem 0}
  .sec-head{max-width:52ch;margin-bottom:2.5rem}
  .sec-head h2{font-size:clamp(1.7rem,4vw,2.5rem);font-weight:800;margin:.7rem 0 .6rem}
  .sec-head p{color:var(--muted);font-size:1.12rem;margin:0}
  .center{text-align:center;margin-inline:auto}
  .center .eyebrow{justify-content:center}

  /* ---------- Serviços ---------- */
  #servicos{background:linear-gradient(180deg,var(--bg),var(--surface-2))}
  .cards{display:grid;gap:1.4rem}
  @media(min-width:820px){.cards{grid-template-columns:1fr 1fr}}
  .service{
    background:var(--surface);border:1px solid var(--line);border-radius:var(--radius);
    padding:2rem;box-shadow:var(--shadow-sm);display:flex;flex-direction:column;
    transition:transform .2s ease, box-shadow .2s ease;position:relative;overflow:hidden;
  }
  .service:hover{transform:translateY(-4px);box-shadow:var(--shadow)}
  .service .icon{
    width:56px;height:56px;border-radius:15px;display:grid;place-items:center;margin-bottom:1.1rem;
    background:rgba(14,110,99,.1);color:var(--brand);
  }
  .service.alt .icon{background:rgba(244,166,42,.15);color:var(--accent-deep)}
  .service .icon svg{width:28px;height:28px}
  .service h3{font-size:1.4rem;margin:0 0 .5rem}
  .service p{color:var(--muted);margin:0 0 1.1rem}
  .service ul{list-style:none;padding:0;margin:0 0 1.6rem;display:grid;gap:.6rem}
  .service li{display:flex;gap:.6rem;align-items:flex-start;font-weight:500;font-size:.98rem}
  .service li svg{width:20px;height:20px;color:var(--brand);flex:none;margin-top:.1rem}
  .service .btn{margin-top:auto;width:100%}

  /* ---------- Promotora (Caroline) ---------- */
  #promotora{background:var(--ink);color:#e9f3f0}
  .promoter{display:grid;gap:2.2rem;align-items:center}
  @media(min-width:820px){.promoter{grid-template-columns:280px 1fr}}
  .promoter-photo-wrap{position:relative;justify-self:center;width:min(260px,70vw)}
  .promoter-photo{
    width:100%;height:auto;aspect-ratio:1/1;border-radius:28px;box-shadow:var(--shadow);
    border:4px solid rgba(255,255,255,.12);background:#dfeae7;overflow:hidden;object-fit:cover;
  }
  .promoter-badge{
    position:absolute;bottom:-16px;right:-10px;background:var(--accent);color:#3a2400;
    font-family:'Sora';font-weight:800;font-size:.82rem;padding:.55rem .9rem;border-radius:12px;
    box-shadow:var(--shadow-sm);display:flex;align-items:center;gap:.35rem;
  }
  .promoter-info .eyebrow{color:var(--accent)}
  .promoter-info .eyebrow::before{color:#fff}
  .promoter-info h2{font-size:clamp(1.7rem,4vw,2.4rem);color:#fff;margin:.6rem 0 .2rem}
  .promoter-role{color:var(--accent);font-weight:700;font-family:'Sora';margin-bottom:1rem;font-size:1.05rem}
  .promoter-info p{color:#c8dcd7;font-size:1.08rem;max-width:56ch}
  .promoter-info .btn{margin-top:1.5rem}

  /* ---------- Como funciona ---------- */
  .steps{display:grid;gap:1.2rem;counter-reset:step}
  @media(min-width:480px){.steps{grid-template-columns:1fr 1fr}}
  @media(min-width:760px){.steps{grid-template-columns:repeat(4,1fr)}}
  .step{position:relative;padding:1.6rem 1.3rem;background:var(--surface);border:1px solid var(--line);border-radius:16px}
  .step .num{
    font-family:'Sora';font-weight:800;font-size:1.05rem;width:2.4rem;height:2.4rem;border-radius:50%;
    display:grid;place-items:center;background:var(--brand);color:#fff;margin-bottom:.9rem;
  }
  .step h4{font-family:'Sora';font-size:1.1rem;margin:0 0 .35rem}
  .step p{margin:0;color:var(--muted);font-size:.96rem}

  /* ---------- Depoimentos (carrossel) ---------- */
  #depoimentos{background:linear-gradient(180deg,var(--surface-2),var(--bg))}
  .carousel{position:relative;max-width:660px;margin-inline:auto}
  .car-viewport{overflow:hidden;border-radius:var(--radius)}
  .car-track{display:flex;transition:transform .55s cubic-bezier(.65,.05,.36,1)}
  .car-slide{min-width:100%;box-sizing:border-box;padding:6px}
  .car-slide .review{height:100%}
  .car-arrow{
    position:absolute;top:42%;transform:translateY(-50%);z-index:3;
    width:46px;height:46px;border-radius:50%;border:1px solid var(--line);
    background:var(--surface);color:var(--brand);cursor:pointer;
    display:grid;place-items:center;box-shadow:var(--shadow-sm);
    transition:background .2s,color .2s,transform .15s;
  }
  .car-arrow:hover{background:var(--brand);color:#fff}
  .car-arrow:active{transform:translateY(-50%) scale(.94)}
  .car-arrow svg{width:22px;height:22px}
  .car-arrow.prev{left:-8px}
  .car-arrow.next{right:-8px}
  @media(min-width:920px){.car-arrow.prev{left:-64px}.car-arrow.next{right:-64px}}
  .car-dots{display:flex;gap:.5rem;justify-content:center;margin-top:1.6rem}
  .car-dot{width:9px;height:9px;border-radius:50%;border:0;padding:0;cursor:pointer;background:var(--line);transition:width .25s,background .25s}
  .car-dot.active{width:26px;border-radius:999px;background:var(--brand)}

  .review{background:var(--surface);border:1px solid var(--line);border-radius:var(--radius);padding:1.9rem;box-shadow:var(--shadow-sm);display:flex;flex-direction:column;min-height:230px}
  .stars{display:flex;gap:2px;margin-bottom:.9rem}
  .stars svg{width:20px;height:20px;color:var(--accent)}
  .review blockquote{margin:0 0 1.3rem;font-size:1.08rem;color:var(--ink);line-height:1.55}
  .reviewer{display:flex;align-items:center;gap:.75rem;margin-top:auto}
  .review-avatar{width:50px;height:50px;border-radius:50%;flex:none;box-shadow:0 3px 8px rgba(12,43,51,.16);border:2px solid #fff}
  .reviewer b{display:block;font-family:'Sora';font-size:.98rem}
  .reviewer small{color:var(--muted)}
  @media(max-width:520px){.car-arrow{width:40px;height:40px}.car-arrow.prev{left:-4px}.car-arrow.next{right:-4px}}

  /* ---------- FAQ ---------- */
  .faq{max-width:760px;margin-inline:auto;display:grid;gap:.8rem}
  details{background:var(--surface);border:1px solid var(--line);border-radius:14px;padding:.3rem 1.3rem;transition:box-shadow .2s}
  details[open]{box-shadow:var(--shadow-sm)}
  summary{list-style:none;cursor:pointer;font-family:'Sora';font-weight:600;font-size:1.06rem;padding:1.1rem 0;display:flex;justify-content:space-between;align-items:center;gap:1rem}
  summary::-webkit-details-marker{display:none}
  summary::after{content:"+";font-size:1.6rem;color:var(--brand);font-weight:400;transition:transform .2s}
  details[open] summary::after{transform:rotate(45deg)}
  details p{margin:0 0 1.2rem;color:var(--muted)}

  /* ---------- CTA final ---------- */
  .cta-band{background:var(--brand);color:#fff;border-radius:28px;padding:3rem 2rem;text-align:center;position:relative;overflow:hidden;box-shadow:var(--shadow)}
  .cta-band::before{content:"›››";position:absolute;font-family:'Sora';font-weight:800;font-size:20rem;color:rgba(255,255,255,.06);left:-3rem;top:-6rem;letter-spacing:-.1em}
  .cta-band h2{font-size:clamp(1.7rem,4vw,2.6rem);margin:0 0 .7rem;position:relative}
  .cta-band p{font-size:1.15rem;color:#d7ece7;max-width:48ch;margin:0 auto 1.8rem;position:relative}
  .cta-band .btn{position:relative}

  /* ---------- Footer ---------- */
  footer.site{background:var(--ink);color:#a9c2bc;padding:3rem 0 6.5rem;font-size:.94rem}
  .foot-grid{display:grid;gap:2rem;margin-bottom:2rem}
  @media(min-width:760px){.foot-grid{grid-template-columns:1.4fr 1fr 1fr}}
  footer.site .logo{color:#fff;margin-bottom:.8rem}
  footer.site .logo b{color:var(--accent)}
  footer .col h5{font-family:'Sora';color:#fff;font-size:.85rem;letter-spacing:.1em;text-transform:uppercase;margin:0 0 1rem}
  footer .col a,footer .col p{color:#a9c2bc;margin:.4rem 0}
  footer .col a:hover{color:#fff}
  .legal{border-top:1px solid rgba(255,255,255,.1);padding-top:1.6rem;font-size:.84rem;color:#7f9b95;line-height:1.7}

  /* ---------- WhatsApp flutuante ---------- */
  .wa-float{
    position:fixed;right:18px;bottom:18px;z-index:80;background:var(--wa);color:#fff;
    width:auto;padding:.85rem 1.2rem;border-radius:999px;display:inline-flex;align-items:center;gap:.55rem;
    font-family:'Sora';font-weight:700;box-shadow:0 14px 30px -8px rgba(18,140,126,.7);
    animation:pulse 2.6s infinite;
  }
  .wa-float svg{width:26px;height:26px}
  .wa-float .label{display:none}
  @media(min-width:520px){.wa-float .label{display:inline}}
  @keyframes pulse{0%,100%{box-shadow:0 14px 30px -8px rgba(18,140,126,.7)}50%{box-shadow:0 14px 30px -8px rgba(18,140,126,.7),0 0 0 12px rgba(37,211,102,.12)}}
  @media(prefers-reduced-motion:reduce){*{animation:none!important;scroll-behavior:auto!important}}

  /* ---------- Ajustes finos de responsividade ---------- */
  @media(max-width:600px){
    section{padding:2.9rem 0}
    .hero{padding:2.4rem 0 2.2rem}
    .sec-head{margin-bottom:1.8rem}
    .service{padding:1.6rem}
    .hero-card{padding:1.3rem}
    .cta-band{padding:2.2rem 1.2rem}
    .cta-band::before{font-size:13rem;top:-4rem}
    .speed{display:none}
    footer.site{padding:2.4rem 0 6rem}
  }
  @media(max-width:430px){
    .logo{font-size:1.05rem;gap:.45rem}
    .logo .mark{width:30px;height:30px}
    .nav{gap:.6rem}
    .nav .btn{padding:.6rem .85rem;font-size:.85rem;gap:.4rem}
    .nav .btn svg{width:17px;height:17px}
    .hero-cta .btn{width:100%}
    .btn-lg{font-size:1.02rem;padding:1rem 1.4rem}
    .wa-float{right:12px;bottom:12px;padding:.8rem}
  }
</style>

<!-- ======================= HEADER ======================= -->
<header class="site">
  <div class="wrap nav">
    <a class="logo" href="#top" aria-label="Velox Consig — início">
      <svg class="mark" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Logo Velox Consig">
        <defs>
          <linearGradient id="vlxG" x1="0" y1="0" x2="1" y2="1">
            <stop offset="0" stop-color="#12897C"/><stop offset="1" stop-color="#0A4E45"/>
          </linearGradient>
        </defs>
        <rect x="2" y="2" width="44" height="44" rx="13" fill="url(#vlxG)"/>
        <path d="M11 16 L16 27" stroke="#fff" stroke-width="2.6" stroke-linecap="round" opacity=".38"/>
        <path d="M7.5 19 L11.5 27" stroke="#fff" stroke-width="2.6" stroke-linecap="round" opacity=".22"/>
        <path d="M17 14 L25 33" stroke="#fff" stroke-width="5.2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M25 33 L33 14" stroke="#F4A62A" stroke-width="5.2" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
      Velox <b>Consig</b>
    </a>
    <nav class="nav-links" aria-label="Navegação principal">
      <a href="#servicos">Serviços</a>
      <a href="#promotora">Quem atende</a>
      <a href="#como-funciona">Como funciona</a>
      <a href="#depoimentos">Depoimentos</a>
    </nav>
    <a class="btn btn-wa wa" data-msg="Olá! Vim pelo site e quero saber mais sobre o crédito consignado da Velox Consig." href="#">
      <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.5 14.4c-.3-.2-1.7-.9-2-1-.3-.1-.5-.2-.7.1-.2.3-.7 1-.9 1.1-.2.2-.3.2-.6.1-.3-.2-1.2-.5-2.3-1.4-.9-.8-1.4-1.7-1.6-2-.2-.3 0-.5.1-.6l.5-.5c.1-.2.2-.3.3-.5.1-.2 0-.4 0-.5 0-.2-.7-1.6-.9-2.2-.2-.6-.5-.5-.7-.5h-.6c-.2 0-.5.1-.8.4-.3.3-1 1-1 2.5s1.1 2.9 1.2 3.1c.2.2 2.1 3.3 5.2 4.6.7.3 1.3.5 1.7.6.7.2 1.4.2 1.9.1.6-.1 1.7-.7 2-1.4.2-.7.2-1.2.2-1.4-.1-.1-.3-.2-.6-.3zM12 2C6.5 2 2 6.5 2 12c0 1.8.5 3.4 1.3 4.9L2 22l5.3-1.4c1.4.8 3 1.2 4.7 1.2 5.5 0 10-4.5 10-10S17.5 2 12 2z"/></svg>
      WhatsApp
    </a>
  </div>
</header>

<a id="top"></a>

<!-- ======================= HERO ======================= -->
<section class="hero">
  <div class="speed" aria-hidden="true"><i></i><i></i><i></i></div>
  <div class="wrap hero-grid">
    <div>
      <span class="eyebrow">Crédito consignado sem enrolação</span>
      <h1>Seu dinheiro na conta com <em>rapidez</em> e as menores taxas.</h1>
      <p class="lead">Empréstimo consignado para quem é <strong>CLT</strong>, <strong>aposentado</strong> ou <strong>pensionista</strong>. Simulação gratuita e atendimento humano, do começo ao fim.</p>
      <div class="hero-cta">
        <a class="btn btn-wa btn-lg wa" data-msg="Olá! Quero fazer uma simulação gratuita do meu empréstimo consignado." href="#">
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.5 14.4c-.3-.2-1.7-.9-2-1-.3-.1-.5-.2-.7.1-.2.3-.7 1-.9 1.1-.2.2-.3.2-.6.1-.3-.2-1.2-.5-2.3-1.4-.9-.8-1.4-1.7-1.6-2-.2-.3 0-.5.1-.6l.5-.5c.1-.2.2-.3.3-.5.1-.2 0-.4 0-.5 0-.2-.7-1.6-.9-2.2-.2-.6-.5-.5-.7-.5h-.6c-.2 0-.5.1-.8.4-.3.3-1 1-1 2.5s1.1 2.9 1.2 3.1c.2.2 2.1 3.3 5.2 4.6.7.3 1.3.5 1.7.6.7.2 1.4.2 1.9.1.6-.1 1.7-.7 2-1.4.2-.7.2-1.2.2-1.4-.1-.1-.3-.2-.6-.3zM12 2C6.5 2 2 6.5 2 12c0 1.8.5 3.4 1.3 4.9L2 22l5.3-1.4c1.4.8 3 1.2 4.7 1.2 5.5 0 10-4.5 10-10S17.5 2 12 2z"/></svg>
          Simular no WhatsApp
        </a>
        <a class="btn btn-ghost btn-lg" href="#servicos">Ver serviços</a>
      </div>
      <div class="trust-row">
        <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M20 6 9 17l-5-5"/></svg> Correspondente bancário</span>
        <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M20 6 9 17l-5-5"/></svg> Simulação sem custo</span>
        <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M20 6 9 17l-5-5"/></svg> Seus dados protegidos</span>
      </div>
    </div>

    <aside class="hero-card" aria-label="Resumo dos serviços">
      <span class="tag">Para quem é</span>
      <h3>Descubra quanto você pode liberar</h3>
      <div class="mini"><span class="n">01</span><p><b>Trabalhador CLT</b><br>Desconto direto na folha, com taxas menores que o crédito comum.</p></div>
      <div class="mini"><span class="n">02</span><p><b>Aposentado ou pensionista</b><br>Parcela fixa descontada do benefício do INSS, sem susto no fim do mês.</p></div>
      <div class="mini"><span class="n">03</span><p><b>Atendimento humano</b><br>Você fala direto com a Caroline, sem robô e sem letra miúda.</p></div>
    </aside>
  </div>
</section>

<!-- ======================= SERVIÇOS ======================= -->
<section id="servicos">
  <div class="wrap">
    <div class="sec-head">
      <span class="eyebrow">Nossos serviços</span>
      <h2>O crédito certo para o seu perfil</h2>
      <p>Trabalhamos com instituições financeiras parceiras para encontrar a melhor condição para você. Escolha abaixo e faça sua simulação gratuita.</p>
    </div>
    <div class="cards">

      <article class="service">
        <div class="icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
        </div>
        <h3>Empréstimo CLT</h3>
        <p>Para quem trabalha de carteira assinada. Crédito com desconto direto na folha de pagamento e taxas bem menores que o empréstimo tradicional.</p>
        <ul>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6 9 17l-5-5"/></svg> Taxas reduzidas e parcelas que cabem no bolso</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6 9 17l-5-5"/></svg> Liberação rápida, direto na sua conta</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6 9 17l-5-5"/></svg> Simulação gratuita e sem compromisso</li>
        </ul>
        <a class="btn btn-accent wa" data-msg="Olá! Quero simular o Empréstimo Consignado CLT." href="#">Simular Empréstimo CLT</a>
      </article>

      <article class="service alt">
        <div class="icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 21s-7-4.5-7-9.5a4 4 0 0 1 7-2.6A4 4 0 0 1 19 11.5C19 16.5 12 21 12 21z"/></svg>
        </div>
        <h3>Aposentados e Pensionistas</h3>
        <p>Para quem recebe benefício do INSS. Empréstimo com parcela fixa descontada direto do benefício, com tranquilidade e sem comprometer o orçamento.</p>
        <ul>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6 9 17l-5-5"/></svg> Parcelas fixas do início ao fim do contrato</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6 9 17l-5-5"/></svg> Atendimento paciente e sem pressa</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6 9 17l-5-5"/></svg> Ajuda em cada passo, do começo ao dinheiro na conta</li>
        </ul>
        <a class="btn btn-accent wa" data-msg="Olá! Sou aposentado(a)/pensionista e quero simular meu empréstimo consignado." href="#">Simular meu empréstimo</a>
      </article>

    </div>
  </div>
</section>

<!-- ======================= PROMOTORA / CAROLINE ======================= -->
<section id="promotora">
  <div class="wrap promoter">
    <div class="promoter-photo-wrap">
      <!-- ===== TROQUE ESTE SVG PELA FOTO REAL DA CAROLINE =====
           Ex.: <img class="promoter-photo" src="caroline.jpg" alt="Caroline dos Santos Moreira"> -->
      <svg class="promoter-photo" viewBox="0 0 260 260" role="img" aria-label="Foto de Caroline dos Santos Moreira">
        <defs>
          <clipPath id="ph"><rect width="260" height="260" rx="28"/></clipPath>
          <linearGradient id="bgp" x1="0" y1="0" x2="0" y2="1">
            <stop offset="0" stop-color="#E7F0EE"/><stop offset="1" stop-color="#CFE0DB"/>
          </linearGradient>
        </defs>
        <g clip-path="url(#ph)">
          <rect width="260" height="260" fill="url(#bgp)"/>
          <!-- blazer -->
          <path d="M55 260 C60 205 95 182 130 182 C165 182 200 205 205 260 Z" fill="#0E6E63"/>
          <path d="M130 182 L112 214 L118 260 L108 260 L100 210 Z" fill="#0A5249"/>
          <path d="M130 182 L148 214 L142 260 L152 260 L160 210 Z" fill="#0A5249"/>
          <!-- blusa -->
          <path d="M112 200 L130 226 L148 200 L148 260 L112 260 Z" fill="#F7FAF9"/>
          <!-- pescoço -->
          <path d="M116 168 h28 v22 c0 10 -28 10 -28 0 Z" fill="#E7B394"/>
          <!-- cabelo (trás) -->
          <path d="M78 118 C78 66 182 66 182 118 C182 160 176 190 168 200 C168 150 160 120 130 120 C100 120 92 150 92 200 C84 190 78 160 78 118 Z" fill="#3A2A22"/>
          <!-- rosto -->
          <ellipse cx="130" cy="120" rx="42" ry="48" fill="#F1C6A7"/>
          <!-- orelhas + brincos -->
          <circle cx="89" cy="124" r="8" fill="#F1C6A7"/><circle cx="171" cy="124" r="8" fill="#F1C6A7"/>
          <circle cx="89" cy="136" r="3.4" fill="#F4A62A"/><circle cx="171" cy="136" r="3.4" fill="#F4A62A"/>
          <!-- cabelo (frente) -->
          <path d="M86 116 C86 74 174 74 174 116 C174 104 162 92 130 92 C120 108 100 104 92 128 C90 124 86 120 86 116 Z" fill="#43312A"/>
          <path d="M170 110 C176 130 172 158 166 172 C170 150 168 128 160 112 Z" fill="#43312A"/>
          <!-- sobrancelhas -->
          <path d="M104 110 q10 -6 20 -1" stroke="#4A362C" stroke-width="3.2" fill="none" stroke-linecap="round"/>
          <path d="M136 109 q10 -5 20 1" stroke="#4A362C" stroke-width="3.2" fill="none" stroke-linecap="round"/>
          <!-- olhos -->
          <ellipse cx="114" cy="122" rx="4.6" ry="5.4" fill="#3A2A22"/>
          <ellipse cx="146" cy="122" rx="4.6" ry="5.4" fill="#3A2A22"/>
          <circle cx="115.4" cy="120.5" r="1.5" fill="#fff"/><circle cx="147.4" cy="120.5" r="1.5" fill="#fff"/>
          <!-- nariz -->
          <path d="M130 126 q-4 8 -1 12" stroke="#D89B78" stroke-width="2.4" fill="none" stroke-linecap="round"/>
          <!-- sorriso -->
          <path d="M117 146 q13 12 26 0" stroke="#B76A52" stroke-width="3" fill="none" stroke-linecap="round"/>
          <!-- blush -->
          <ellipse cx="103" cy="138" rx="7" ry="4" fill="#EEA98A" opacity=".5"/>
          <ellipse cx="157" cy="138" rx="7" ry="4" fill="#EEA98A" opacity=".5"/>
        </g>
      </svg>
      <span class="promoter-badge">
        <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6 9 17l-5-5"/></svg>
        Especialista
      </span>
    </div>
    <div class="promoter-info">
      <span class="eyebrow">Quem vai te atender</span>
      <h2>Caroline dos Santos Moreira</h2>
      <div class="promoter-role">Promotora de Crédito · Especialista em Consignado</div>
      <p>À frente da Velox Consig, a Caroline atende cada cliente de forma próxima e transparente. Ela entende sua necessidade, compara as condições das instituições parceiras e explica tudo em linguagem simples — sem letra miúda, sem promessa que não se cumpre. O objetivo é um só: fazer o melhor crédito caber no seu bolso, com agilidade e confiança.</p>
      <a class="btn btn-wa btn-lg wa" data-msg="Olá, Caroline! Vim pelo site e quero falar sobre crédito consignado." href="#">
        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.5 14.4c-.3-.2-1.7-.9-2-1-.3-.1-.5-.2-.7.1-.2.3-.7 1-.9 1.1-.2.2-.3.2-.6.1-.3-.2-1.2-.5-2.3-1.4-.9-.8-1.4-1.7-1.6-2-.2-.3 0-.5.1-.6l.5-.5c.1-.2.2-.3.3-.5.1-.2 0-.4 0-.5 0-.2-.7-1.6-.9-2.2-.2-.6-.5-.5-.7-.5h-.6c-.2 0-.5.1-.8.4-.3.3-1 1-1 2.5s1.1 2.9 1.2 3.1c.2.2 2.1 3.3 5.2 4.6.7.3 1.3.5 1.7.6.7.2 1.4.2 1.9.1.6-.1 1.7-.7 2-1.4.2-.7.2-1.2.2-1.4-.1-.1-.3-.2-.6-.3zM12 2C6.5 2 2 6.5 2 12c0 1.8.5 3.4 1.3 4.9L2 22l5.3-1.4c1.4.8 3 1.2 4.7 1.2 5.5 0 10-4.5 10-10S17.5 2 12 2z"/></svg>
        Falar com a Caroline
      </a>
    </div>
  </div>
</section>

<!-- ======================= COMO FUNCIONA ======================= -->
<section id="como-funciona">
  <div class="wrap">
    <div class="sec-head center">
      <span class="eyebrow">Simples assim</span>
      <h2>Do primeiro contato ao dinheiro na conta</h2>
    </div>
    <div class="steps">
      <div class="step"><div class="num">1</div><h4>Chame no WhatsApp</h4><p>Você fala com a Caroline e conta o que precisa. Sem formulário chato.</p></div>
      <div class="step"><div class="num">2</div><h4>Simulação gratuita</h4><p>A gente busca a melhor condição entre as instituições parceiras.</p></div>
      <div class="step"><div class="num">3</div><h4>Envio dos documentos</h4><p>Você manda os documentos com segurança, tudo de forma orientada.</p></div>
      <div class="step"><div class="num">4</div><h4>Dinheiro liberado</h4><p>Após a aprovação, o valor cai direto na sua conta. Rápido e seguro.</p></div>
    </div>
  </div>
</section>

<!-- ======================= DEPOIMENTOS ======================= -->
<section id="depoimentos">
  <div class="wrap">
    <div class="sec-head center">
      <span class="eyebrow">O que dizem os clientes</span>
      <h2>Confiança que rende bons depoimentos</h2>
      <p>Avaliações reais de quem já resolveu a vida com a Velox Consig.</p>
    </div>
    <div class="carousel" id="carousel">
      <button class="car-arrow prev" id="carPrev" aria-label="Depoimento anterior">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M15 5l-7 7 7 7"/></svg>
      </button>
      <div class="car-viewport">
        <div class="car-track" id="track"><!-- slides via script --></div>
      </div>
      <button class="car-arrow next" id="carNext" aria-label="Próximo depoimento">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M9 5l7 7-7 7"/></svg>
      </button>
      <div class="car-dots" id="dots"></div>
    </div>
  </div>
</section>

<!-- ======================= FAQ ======================= -->
<section>
  <div class="wrap">
    <div class="sec-head center">
      <span class="eyebrow">Dúvidas frequentes</span>
      <h2>Perguntas que todo mundo faz</h2>
    </div>
    <div class="faq">
      <details><summary>A simulação tem algum custo?</summary><p>Não. A simulação é totalmente gratuita e sem compromisso. Você só segue em frente se as condições fizerem sentido para você.</p></details>
      <details><summary>Quem pode contratar o consignado?</summary><p>Trabalhadores CLT (carteira assinada) e aposentados ou pensionistas do INSS. Fale com a Caroline para confirmar as condições para o seu caso.</p></details>
      <details><summary>Em quanto tempo o dinheiro cai na conta?</summary><p>Depende da instituição financeira e da análise, mas o consignado costuma ser bem mais rápido que o empréstimo comum. Assim que aprovado, o valor é depositado diretamente na sua conta.</p></details>
      <details><summary>A Velox Consig é o banco que empresta o dinheiro?</summary><p>Não. A Velox Consig é correspondente bancário: intermediamos e buscamos a melhor condição junto às instituições financeiras parceiras. Não emprestamos com recursos próprios.</p></details>
      <details><summary>Meus dados ficam seguros?</summary><p>Sim. Tratamos suas informações com sigilo e de acordo com a LGPD. Seus dados são usados apenas para a simulação e a contratação do crédito.</p></details>
    </div>
  </div>
</section>

<!-- ======================= CTA FINAL ======================= -->
<section>
  <div class="wrap">
    <div class="cta-band">
      <h2>Pronto para liberar seu crédito?</h2>
      <p>Faça agora sua simulação gratuita. É rápido, sem compromisso e você fala direto com quem entende do assunto.</p>
      <a class="btn btn-accent btn-lg wa" data-msg="Olá! Quero fazer minha simulação gratuita agora." href="#">
        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.5 14.4c-.3-.2-1.7-.9-2-1-.3-.1-.5-.2-.7.1-.2.3-.7 1-.9 1.1-.2.2-.3.2-.6.1-.3-.2-1.2-.5-2.3-1.4-.9-.8-1.4-1.7-1.6-2-.2-.3 0-.5.1-.6l.5-.5c.1-.2.2-.3.3-.5.1-.2 0-.4 0-.5 0-.2-.7-1.6-.9-2.2-.2-.6-.5-.5-.7-.5h-.6c-.2 0-.5.1-.8.4-.3.3-1 1-1 2.5s1.1 2.9 1.2 3.1c.2.2 2.1 3.3 5.2 4.6.7.3 1.3.5 1.7.6.7.2 1.4.2 1.9.1.6-.1 1.7-.7 2-1.4.2-.7.2-1.2.2-1.4-.1-.1-.3-.2-.6-.3zM12 2C6.5 2 2 6.5 2 12c0 1.8.5 3.4 1.3 4.9L2 22l5.3-1.4c1.4.8 3 1.2 4.7 1.2 5.5 0 10-4.5 10-10S17.5 2 12 2z"/></svg>
        Falar no WhatsApp agora
      </a>
    </div>
  </div>
</section>

<!-- ======================= FOOTER ======================= -->
<footer class="site">
  <div class="wrap">
    <div class="foot-grid">
      <div class="col">
        <a class="logo" href="#top">
          <svg class="mark" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Logo Velox Consig">
            <defs>
              <linearGradient id="vlxG2" x1="0" y1="0" x2="1" y2="1">
                <stop offset="0" stop-color="#12897C"/><stop offset="1" stop-color="#0A4E45"/>
              </linearGradient>
            </defs>
            <rect x="2" y="2" width="44" height="44" rx="13" fill="url(#vlxG2)"/>
            <path d="M11 16 L16 27" stroke="#fff" stroke-width="2.6" stroke-linecap="round" opacity=".38"/>
            <path d="M7.5 19 L11.5 27" stroke="#fff" stroke-width="2.6" stroke-linecap="round" opacity=".22"/>
            <path d="M17 14 L25 33" stroke="#fff" stroke-width="5.2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M25 33 L33 14" stroke="#F4A62A" stroke-width="5.2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg> Velox <b>Consig</b></a>
        <p>Crédito consignado rápido e transparente para trabalhadores CLT, aposentados e pensionistas.</p>
      </div>
      <div class="col">
        <h5>Serviços</h5>
        <a href="#servicos">Empréstimo CLT</a>
        <a href="#servicos">Aposentados e Pensionistas</a>
        <a href="#como-funciona">Como funciona</a>
      </div>
      <div class="col">
        <h5>Contato</h5>
        <a class="wa" data-msg="Olá! Vim pelo site da Velox Consig." href="#">WhatsApp</a>
        <p>Atendimento com Caroline dos Santos Moreira</p>
        <p>Seg. a Sex. · horário comercial</p>
      </div>
    </div>
    <div class="legal">
      <strong>Velox Consig</strong> — [Razão Social] · CNPJ 00.000.000/0001-00.<br>
      A Velox Consig atua como correspondente bancário (promotor de crédito) e realiza a intermediação de operações de crédito junto a instituições financeiras parceiras, não concedendo empréstimos com recursos próprios. Taxas, prazos e condições estão sujeitos à análise e aprovação da instituição financeira. Não solicitamos depósitos ou pagamentos antecipados para liberação de crédito. Tratamos seus dados conforme a Lei Geral de Proteção de Dados (LGPD).
    </div>
  </div>
</footer>

<!-- ======================= WHATSAPP FLUTUANTE ======================= -->
<a class="wa-float wa" data-msg="Olá! Vim pelo site e quero saber mais sobre o crédito consignado da Velox Consig." href="#" aria-label="Falar no WhatsApp">
  <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.5 14.4c-.3-.2-1.7-.9-2-1-.3-.1-.5-.2-.7.1-.2.3-.7 1-.9 1.1-.2.2-.3.2-.6.1-.3-.2-1.2-.5-2.3-1.4-.9-.8-1.4-1.7-1.6-2-.2-.3 0-.5.1-.6l.5-.5c.1-.2.2-.3.3-.5.1-.2 0-.4 0-.5 0-.2-.7-1.6-.9-2.2-.2-.6-.5-.5-.7-.5h-.6c-.2 0-.5.1-.8.4-.3.3-1 1-1 2.5s1.1 2.9 1.2 3.1c.2.2 2.1 3.3 5.2 4.6.7.3 1.3.5 1.7.6.7.2 1.4.2 1.9.1.6-.1 1.7-.7 2-1.4.2-.7.2-1.2.2-1.4-.1-.1-.3-.2-.6-.3zM12 2C6.5 2 2 6.5 2 12c0 1.8.5 3.4 1.3 4.9L2 22l5.3-1.4c1.4.8 3 1.2 4.7 1.2 5.5 0 10-4.5 10-10S17.5 2 12 2z"/></svg>
  <span class="label">Fale conosco</span>
</a>

<script>
  /* ===== TROQUE PELO NÚMERO REAL: 55 + DDD + número (só dígitos) ===== */
  const WHATSAPP_NUMBER = "5573999999999";

  // Monta todos os links de WhatsApp com a mensagem de cada botão
  document.querySelectorAll("a.wa").forEach(a => {
    const msg = a.getAttribute("data-msg") || "Olá! Vim pelo site da Velox Consig.";
    a.href = `https://wa.me/${WHATSAPP_NUMBER}?text=${encodeURIComponent(msg)}`;
    a.target = "_blank";
    a.rel = "noopener";
  });

  // Avatares ilustrados para os depoimentos (substitua por fotos reais quando tiver)
  const avatarWoman = (id,bg,cloth,skin,hair) => `
    <svg class="review-avatar" viewBox="0 0 88 88" role="img" aria-label="Avatar do cliente">
      <defs><clipPath id="${id}"><circle cx="44" cy="44" r="44"/></clipPath></defs>
      <g clip-path="url(#${id})">
        <rect width="88" height="88" fill="${bg}"/>
        <path d="M16 88 C18 66 32 58 44 58 C56 58 70 66 72 88 Z" fill="${cloth}"/>
        <path d="M38 51 h12 v11 c0 6 -12 6 -12 0 Z" fill="${skin}"/>
        <path d="M24 46 C24 22 64 22 64 46 C64 60 61 68 57 71 C57 50 54 42 44 42 C34 42 31 50 31 71 C27 68 24 60 24 46 Z" fill="${hair}"/>
        <ellipse cx="44" cy="44" rx="18" ry="20" fill="${skin}"/>
        <path d="M27 43 C27 24 61 24 61 43 C61 34 54 30 44 30 C40 40 32 38 28 50 C27 47 27 45 27 43 Z" fill="${hair}"/>
        <circle cx="37" cy="45" r="2.1" fill="#4A362C"/><circle cx="51" cy="45" r="2.1" fill="#4A362C"/>
        <path d="M39 53 q5 5 10 0" stroke="#B76A52" stroke-width="2" fill="none" stroke-linecap="round"/>
      </g>
    </svg>`;

  const avatarMan = (id,bg,cloth,skin,hair) => `
    <svg class="review-avatar" viewBox="0 0 88 88" role="img" aria-label="Avatar do cliente">
      <defs><clipPath id="${id}"><circle cx="44" cy="44" r="44"/></clipPath></defs>
      <g clip-path="url(#${id})">
        <rect width="88" height="88" fill="${bg}"/>
        <path d="M16 88 C18 66 32 58 44 58 C56 58 70 66 72 88 Z" fill="${cloth}"/>
        <path d="M38 51 h12 v11 c0 6 -12 6 -12 0 Z" fill="${skin}"/>
        <ellipse cx="44" cy="44" rx="18" ry="20" fill="${skin}"/>
        <path d="M26 43 C26 22 62 22 62 43 C62 36 60 32 58 30 C54 35 34 35 30 30 C28 33 26 38 26 43 Z" fill="${hair}"/>
        <path d="M34 41 h7" stroke="${hair}" stroke-width="2" stroke-linecap="round"/>
        <path d="M47 41 h7" stroke="${hair}" stroke-width="2" stroke-linecap="round"/>
        <circle cx="37.5" cy="45" r="2.1" fill="#33251E"/><circle cx="50.5" cy="45" r="2.1" fill="#33251E"/>
        <path d="M39 53 q5 4 10 0" stroke="#B76A52" stroke-width="2" fill="none" stroke-linecap="round"/>
      </g>
    </svg>`;

  const avatarSenior = (id,bg,cloth,skin,hair) => `
    <svg class="review-avatar" viewBox="0 0 88 88" role="img" aria-label="Avatar do cliente">
      <defs><clipPath id="${id}"><circle cx="44" cy="44" r="44"/></clipPath></defs>
      <g clip-path="url(#${id})">
        <rect width="88" height="88" fill="${bg}"/>
        <path d="M16 88 C18 66 32 58 44 58 C56 58 70 66 72 88 Z" fill="${cloth}"/>
        <path d="M38 51 h12 v11 c0 6 -12 6 -12 0 Z" fill="${skin}"/>
        <ellipse cx="44" cy="44" rx="18" ry="20" fill="${skin}"/>
        <path d="M27 45 C25 31 30 25 34 25 C31 31 30 37 30 45 Z" fill="${hair}"/>
        <path d="M61 45 C63 31 58 25 54 25 C57 31 58 37 58 45 Z" fill="${hair}"/>
        <path d="M30 28 C36 23 52 23 58 28 C51 25 37 25 30 28 Z" fill="${hair}"/>
        <circle cx="37" cy="45" r="5.6" fill="none" stroke="#3E4750" stroke-width="1.7"/>
        <circle cx="51" cy="45" r="5.6" fill="none" stroke="#3E4750" stroke-width="1.7"/>
        <path d="M42.6 45 h2.8" stroke="#3E4750" stroke-width="1.7"/>
        <circle cx="37" cy="45" r="1.7" fill="#4A362C"/><circle cx="51" cy="45" r="1.7" fill="#4A362C"/>
        <path d="M39 54 q5 4 10 0" stroke="#9AA0A6" stroke-width="2" fill="none" stroke-linecap="round"/>
      </g>
    </svg>`;

  // Depoimentos (5 estrelas). Substitua por avaliações reais quando tiver.
  const reviews = [
    { txt: "Atendimento nota 10! A Caroline explicou tudo com paciência e o dinheiro caiu rapidinho na conta. Recomendo demais a Velox Consig.", name: "Marta Ribeiro", role: "Aposentada", avatar: avatarWoman("avm","#E7F0EE","#E08A6B","#F1C6A7","#B9B3AE") },
    { txt: "Consegui uma taxa muito melhor do que eu esperava no meu consignado CLT. Processo simples, tudo pelo WhatsApp, sem burocracia.", name: "Rafael Oliveira", role: "Trabalhador CLT", avatar: avatarMan("avr","#EAF1F0","#2E6E63","#E7B28C","#33251E") },
    { txt: "Fui muito bem atendido, sem enrolação e sem letra miúda. A Velox Consig passa segurança de verdade. Já indiquei para a família toda.", name: "José Carlos Souza", role: "Pensionista", avatar: avatarSenior("avj","#EEEAE4","#5A6067","#E7B28C","#A49E98") },
  ];
  const star = '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.9 6.3 6.9.7-5.1 4.6 1.4 6.8L12 17.8 5.9 20.4l1.4-6.8L2.2 9l6.9-.7L12 2z"/></svg>';

  // Monta os slides do carrossel
  const track = document.getElementById("track");
  track.innerHTML = reviews.map(r => `
    <div class="car-slide">
      <article class="review">
        <div class="stars" aria-label="5 de 5 estrelas">${star.repeat(5)}</div>
        <blockquote>“${r.txt}”</blockquote>
        <div class="reviewer">
          ${r.avatar}
          <span><b>${r.name}</b><small>${r.role}</small></span>
        </div>
      </article>
    </div>`).join("");

  // Indicadores (dots)
  const dotsBox = document.getElementById("dots");
  dotsBox.innerHTML = reviews.map((_, i) =>
    `<button class="car-dot${i === 0 ? " active" : ""}" data-i="${i}" aria-label="Ir para o depoimento ${i + 1}"></button>`
  ).join("");

  // Lógica do carrossel
  const total = reviews.length;
  let idx = 0;
  const dots = [...dotsBox.children];

  function go(n){
    idx = (n + total) % total;
    track.style.transform = `translateX(-${idx * 100}%)`;
    dots.forEach((d, i) => d.classList.toggle("active", i === idx));
  }

  document.getElementById("carPrev").addEventListener("click", () => { go(idx - 1); reset(); });
  document.getElementById("carNext").addEventListener("click", () => { go(idx + 1); reset(); });
  dots.forEach(d => d.addEventListener("click", () => { go(+d.dataset.i); reset(); }));

  // Avanço automático a cada 3s (pausa ao passar o mouse ou arrastar)
  let timer;
  function play(){ clearInterval(timer); timer = setInterval(() => go(idx + 1), 3000); }
  function stop(){ clearInterval(timer); }
  function reset(){ play(); }
  const car = document.getElementById("carousel");
  car.addEventListener("mouseenter", stop);
  car.addEventListener("mouseleave", play);

  // Suporte a gesto de arrastar / swipe no celular
  let startX = null;
  car.addEventListener("touchstart", e => { startX = e.touches[0].clientX; stop(); }, { passive: true });
  car.addEventListener("touchend", e => {
    if (startX === null) return;
    const dx = e.changedTouches[0].clientX - startX;
    if (Math.abs(dx) > 40) go(idx + (dx < 0 ? 1 : -1));
    startX = null; play();
  });

  play();
</script>