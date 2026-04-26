<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Beranda - Noir & Gold Café</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=Josefin+Sans:wght@200;300;400&display=swap" rel="stylesheet"/>
  <style>
    :root {
      --navy-deep:  #102134;
      --navy-mid:   #1a293f;
      --charcoal:   #404751;
      --gold:       #896f3d;
      --gold-light: #b8914f;
      --gold-pale:  #d4aa6a;
      --cream:      #f5edd8;
    }

    * { margin:0; padding:0; box-sizing:border-box; }
    body {
      background: var(--navy-deep);
      color: var(--cream);
      font-family: 'Josefin Sans', sans-serif;
      font-weight: 300;
      letter-spacing: .04em;
    }

        /* ── NAVBAR ── */
    .navbar {
      background: rgba(16,33,52,.95) !important;
      backdrop-filter: blur(14px);
      border-bottom: 1px solid rgba(137,111,61,.25);
      padding: 1rem 0;
      position: sticky; top:0; z-index:1000;
      transition: padding .4s;
    }
    .navbar-brand {
      font-family:'Cormorant Garamond',serif;
      font-size:1.55rem; font-weight:600;
      color: var(--gold-pale) !important; letter-spacing:.1em;
      text-decoration: none;
    }
    .navbar-brand span { color:#fff; }

    .nav-link {
      color: rgba(245,237,216,.65) !important;
      font-size:.68rem; letter-spacing:.18em; text-transform:uppercase;
      padding: .4rem 1rem !important; position:relative; transition:color .3s;
      text-decoration: none;
    }
    .nav-link::after {
      content:''; position:absolute; bottom:0; left:1rem; right:1rem;
      height:1px; background:var(--gold);
      transform:scaleX(0); transition:transform .3s ease;
    }
    .nav-link:hover { color:var(--gold-pale) !important; }
    .nav-link:hover::after { transform:scaleX(1); }

    .navbar-toggler { border-color:rgba(137,111,61,.4); }
    .navbar-toggler-icon {
      background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28212,170,106,0.9%29' stroke-linecap='round' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    .section-eyebrow {
      font-size:.62rem; letter-spacing:.32em; text-transform:uppercase;
      color:var(--gold); margin-bottom:.6rem;
    }
    .section-title {
      font-family:'Cormorant Garamond',serif;
      font-size:clamp(2rem,4vw,3.2rem); font-weight:300;
      color:#fff; line-height:1.15;
    }
    .section-title em { font-style:italic; color:var(--gold-pale); }
    .gold-rule {
      display:block; width:48px; height:1px;
      background:var(--gold); margin:1.4rem auto;
    }
    .btn-gold {
      background:transparent; border:1px solid var(--gold);
      color:var(--gold-pale); font-family:'Josefin Sans',sans-serif;
      font-size:.68rem; letter-spacing:.22em; text-transform:uppercase;
      padding:.85rem 2.4rem; transition:all .35s ease;
      text-decoration: none;
      display: inline-block;
    }
    .btn-gold:hover { background:var(--gold); color:var(--navy-deep); }
    .btn-gold-solid {
      background:var(--gold); border:1px solid var(--gold);
      color:var(--navy-deep); font-family:'Josefin Sans',sans-serif;
      font-size:.68rem; letter-spacing:.22em; text-transform:uppercase;
      padding:.85rem 2.4rem; font-weight:400; transition:all .35s ease;
      text-decoration: none;
      display: inline-block;
    }
    .btn-gold-solid:hover { background:var(--gold-pale); border-color:var(--gold-pale); color:var(--navy-deep); }

    .hero-bg {
      position:absolute; inset:0;
      background-image:url('https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=1600&q=80');
      background-size:cover; background-position:center;
      filter:brightness(.28) saturate(.7);
      animation:heroZoom 18s ease-in-out infinite alternate;
    }
    @keyframes heroZoom {
      from { transform:scale(1.04); } to { transform:scale(1.12); }
    }
    .hero-overlay {
      position:absolute; inset:0;
      background:linear-gradient(160deg,rgba(16,33,52,.55),rgba(137,111,61,.12));
    }
    .hero-line {
      display:block; width:1px; height:80px;
      background:linear-gradient(to bottom,transparent,var(--gold));
      margin:0 auto 2rem;
    }
    .hero-title {
      font-family:'Cormorant Garamond',serif;
      font-size:clamp(3.2rem,8vw,7rem);
      font-weight:300; line-height:1.06; color:#fff;
    }
    .hero-title em { font-style:italic; color:var(--gold-pale); }

    .feat-card {
      background:rgba(26,41,63,.7);
      border:1px solid rgba(137,111,61,.18);
      padding:2rem 1.5rem; text-align:center;
      transition:border-color .3s, transform .3s;
    }
    .feat-card:hover { border-color:rgba(137,111,61,.5); transform:translateY(-4px); }
    .feat-card .icon { font-size:1.8rem; color:var(--gold); margin-bottom:1rem; }
    .feat-card h5 { font-family:'Cormorant Garamond',serif; font-size:1.1rem; color:#fff; }
    .feat-card p { font-size:.75rem; color:rgba(245,237,216,.5); line-height:1.8; margin-top:.4rem; }

    .testi-card {
      background:var(--navy-mid);
      border:1px solid rgba(137,111,61,.15); padding:2rem;
    }
    .testi-card p { font-family:'Cormorant Garamond',serif; font-size:1.05rem; color:rgba(245,237,216,.8); font-style:italic; line-height:1.7; }
    .testi-card .author { font-size:.65rem; letter-spacing:.18em; text-transform:uppercase; color:var(--gold); margin-top:1rem; }

    footer {
      background:var(--navy-deep);
      border-top:1px solid rgba(137,111,61,.2);
      padding:3rem 0 1.5rem;
    }
    .footer-brand { font-family:'Cormorant Garamond',serif; font-size:1.8rem; color:var(--gold-pale); }
    .footer-links a { display:block; color:rgba(245,237,216,.45); font-size:.72rem; text-decoration:none; margin-bottom:.4rem; transition:color .3s; }
    .footer-links a:hover { color:var(--gold-pale); }
    .social-link {
      display:inline-flex; align-items:center; justify-content:center;
      width:36px; height:36px; border:1px solid rgba(137,111,61,.3);
      color:rgba(245,237,216,.5); text-decoration:none; font-size:.85rem;
      transition:all .3s; margin-right:5px;
    }
    .social-link:hover { background:var(--gold); border-color:var(--gold); color:var(--navy-deep); }
    .footer-copy { font-size:.6rem; letter-spacing:.1em; color:rgba(245,237,216,.22); border-top:1px solid rgba(137,111,61,.1); padding-top:1.2rem; margin-top:2.5rem; }

    ::-webkit-scrollbar { width:4px; }
    ::-webkit-scrollbar-track { background:var(--navy-deep); }
    ::-webkit-scrollbar-thumb { background:var(--gold); }    
  </style>
</head>
<body>

<!-- ══ NAVBAR ══ -->
<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="index.html">Noir <span>&</span> Gold</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navMenu">
      <ul class="navbar-nav gap-1">
        <li class="nav-item"><a class="nav-link" href="beranda">Beranda</a></li>
        <li class="nav-item"><a class="nav-link" href="tentang">Tentang</a></li>
        <li class="nav-item"><a class="nav-link" href="menu">Menu</a></li>
        <li class="nav-item"><a class="nav-link" href="spesial">Spesial</a></li>
        <li class="nav-item"><a class="nav-link" href="galerireservasi">Galeri & Reservasi</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero -->
<section style="min-height:100vh; position:relative; display:flex; align-items:center; overflow:hidden;">
  <div class="hero-bg"></div>
  <div class="hero-overlay"></div>
  <div class="container position-relative text-center py-5" style="z-index:2">
    <span class="hero-line"></span>
    <p class="section-eyebrow mb-3">Surabaya · Est. 2018</p>
    <h1 class="hero-title mb-3">Where Every Cup<br>Tells a <em>Story</em></h1>
    <p style="font-size:.78rem; letter-spacing:.18em; color:rgba(245,237,216,.6);" class="mb-5">Kopi pilihan · Suasana elegan · Cita rasa autentik</p>
    <div class="d-flex justify-content-center gap-3 flex-wrap">
      <a href="menu" class="btn-gold">Lihat Menu</a>
      <a href="galerireservasi" class="btn-gold-solid">Reservasi Meja</a>
    </div>
  </div>
</section>

<!-- Feature strip -->
<section style="background:var(--navy-mid); padding:5rem 0;">
  <div class="container">
    <div class="row g-4">
      <div class="col-md-4">
        <div class="feat-card">
          <div class="icon"><i class="bi bi-cup-hot"></i></div>
          <h5>Kopi Premium</h5>
          <p>Single origin terbaik dari Aceh, Flores, dan Toraja, diracik oleh barista berpengalaman.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="feat-card">
          <div class="icon"><i class="bi bi-stars"></i></div>
          <h5>Suasana Eksklusif</h5>
          <p>Interior yang memadukan nuansa gelap elegan dengan sentuhan emas yang hangat dan nyaman.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="feat-card">
          <div class="icon"><i class="bi bi-egg-fried"></i></div>
          <h5>Kuliner Berkualitas</h5>
          <p>Menu all-day dining dari brunch hingga dinner, menggunakan bahan-bahan lokal terpilih.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Sekilas -->
<section style="background:var(--navy-deep); padding:5rem 0;">
  <div class="container">
    <div class="row g-5 align-items-center">
      <div class="col-lg-6">
        <img src="https://images.unsplash.com/photo-1559305616-3f99cd43e353?w=900&q=80"
             style="width:100%; height:420px; object-fit:cover; filter:brightness(.8) saturate(.8);" alt="Interior"/>
      </div>
      <div class="col-lg-6">
        <p class="section-eyebrow">Sekilas</p>
        <h2 class="section-title mb-3">Lebih dari Sekadar<br><em>Secangkir Kopi</em></h2>
        <span class="gold-rule" style="margin:1.2rem 0; display:block;"></span>
        <p style="color:rgba(245,237,216,.62); font-size:.88rem; line-height:1.9; margin-bottom:1.5rem;">
          Noir & Gold lahir dari kecintaan mendalam terhadap seni meracik kopi. Setiap sudut café kami dirancang untuk menciptakan momen yang tak terlupakan — ruang di mana ide-ide besar lahir dan percakapan bermakna mengalir.
        </p>
        <a href="tentang.html" class="btn-gold">Selengkapnya</a>
      </div>
    </div>
  </div>
</section>

<!-- Testimoni -->
<section style="background:var(--charcoal); padding:5rem 0;">
  <div class="container">
    <div class="text-center mb-5">
      <p class="section-eyebrow">Kata Mereka</p>
      <h2 class="section-title"><em>Ulasan</em> Tamu Setia</h2>
      <span class="gold-rule"></span>
    </div>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="testi-card">
          <p>"Kopi terbaik yang pernah saya coba di Surabaya. Atmosfernya luar biasa, seperti masuk ke dunia lain."</p>
          <div class="author">— Rizky A., Food Blogger</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="testi-card">
          <p>"Tempat favorit untuk meeting bisnis. Suasananya profesional tapi tetap nyaman dan hangat."</p>
          <div class="author">— Shinta M., Entrepreneur</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="testi-card">
          <p>"Gold Latte dan Tiramisu mereka adalah kombinasi sempurna. Wajib dikunjungi setiap weekend!"</p>
          <div class="author">— Deni P., Pelanggan Setia</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ FOOTER ══ -->
<footer>
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-4">
        <div class="footer-brand mb-1">Noir & Gold</div>
        <p style="font-size:.62rem; letter-spacing:.18em; color:rgba(245,237,216,.35); margin-bottom:.8rem;">Where Every Cup Tells a Story</p>
        <p style="font-size:.78rem; color:rgba(245,237,216,.38); line-height:1.8;">Café eksklusif di Surabaya yang menghadirkan perpaduan sempurna antara kopi premium, kuliner berkualitas, dan suasana tak terlupakan.</p>
        <div class="mt-3">
          <a href="#" class="social-link"><i class="bi bi-instagram"></i></a>
          <a href="#" class="social-link"><i class="bi bi-facebook"></i></a>
          <a href="#" class="social-link"><i class="bi bi-tiktok"></i></a>
          <a href="#" class="social-link"><i class="bi bi-whatsapp"></i></a>
        </div>
      </div>
      <div class="col-6 col-lg-2">
        <p class="section-eyebrow mb-3" style="font-size:.62rem; letter-spacing:.32em; text-transform:uppercase; color:var(--gold);">Navigasi</p>
        <div class="footer-links">
          <a href="beranda">Beranda</a>
          <a href="tentang">Tentang</a>
          <a href="menu">Menu</a>
          <a href="spesial">Spesial</a>
          <a href="galerireservasi">Galeri & Reservasi</a>
        </div>
      </div>
      <div class="col-6 col-lg-2">
        <p class="section-eyebrow mb-3" style="font-size:.62rem; letter-spacing:.32em; text-transform:uppercase; color:var(--gold);">Menu Andalan</p>
        <div class="footer-links">
          <a href="menu">Signature Espresso</a>
          <a href="menu">Gold Latte</a>
          <a href="menu">Wagyu Burger</a>
          <a href="menu">Truffle Pasta</a>
          <a href="menu">Tiramisu</a>
        </div>
      </div>
      <div class="col-lg-4">
        <p class="section-eyebrow mb-3" style="font-size:.62rem; letter-spacing:.32em; text-transform:uppercase; color:var(--gold);">Newsletter</p>
        <p style="font-size:.75rem; color:rgba(245,237,216,.4); line-height:1.7; margin-bottom:1rem;">Dapatkan info promo eksklusif & menu terbaru di inbox Anda.</p>
        <div class="d-flex">
          <input type="email" class="form-control me-2" placeholder="email@anda.com" style="background:rgba(16,33,52,.8) !important; border:1px solid rgba(137,111,61,.25) !important; color:var(--cream) !important;"/>
          <button class="btn btn-gold-solid px-3 text-nowrap" style="background:var(--gold); border:1px solid var(--gold); color:var(--navy-deep); font-size:.62rem;">Daftar</button>
        </div>
      </div>
    </div>
    <div class="footer-copy d-flex justify-content-between flex-wrap gap-2">
      <span>© 2026 Noir & Gold Café. Seluruh hak cipta dilindungi.</span>
      <span>Dibuat dengan <i class="bi bi-heart-fill" style="color:var(--gold)"></i> di Surabaya</span>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>