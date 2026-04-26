<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Spesial Promo - Noir & Gold Café</title>
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
      background: var(--charcoal);
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
    .special-page { padding:5rem 0; }
    .deal-card {
      background:var(--navy-mid); border:1px solid rgba(137,111,61,.2);
      overflow:hidden; transition:transform .4s, border-color .4s;
    }
    .deal-card:hover { transform:translateY(-6px); border-color:rgba(137,111,61,.5); }
    .deal-card img { width:100%; height:220px; object-fit:cover; filter:brightness(.75) saturate(.8); transition:filter .4s; }
    .deal-card:hover img { filter:brightness(.9) saturate(1); }
    .deal-body { padding:1.6rem; }
    .deal-body h4 { font-family:'Cormorant Garamond',serif; font-size:1.3rem; color:#fff; }
    .deal-body p { font-size:.78rem; color:rgba(245,237,216,.55); line-height:1.8; margin:.5rem 0 1rem; }
    .old-price { font-size:.9rem; color:rgba(245,237,216,.35); text-decoration:line-through; }
    .new-price { font-family:'Cormorant Garamond',serif; font-size:1.6rem; color:var(--gold-pale); }
    .promo-banner {
      background:linear-gradient(135deg,var(--navy-mid),var(--navy-deep));
      border:1px solid rgba(137,111,61,.3); padding:3rem;
      position:relative; overflow:hidden;
    }
    .promo-banner::before {
      content:''; position:absolute; top:-40px; right:-40px;
      width:180px; height:180px; border:1px solid rgba(137,111,61,.15); border-radius:50%;
    }
    .promo-banner::after {
      content:''; position:absolute; top:-80px; right:-80px;
      width:300px; height:300px; border:1px solid rgba(137,111,61,.08); border-radius:50%;
    }
    .countdown-box {
      background:rgba(16,33,52,.6); border:1px solid rgba(137,111,61,.25);
      padding:1rem; text-align:center; min-width:70px;
    }
    .countdown-box .num { font-family:'Cormorant Garamond',serif; font-size:2rem; color:var(--gold-pale); line-height:1; }
    .countdown-box .lbl { font-size:.55rem; letter-spacing:.18em; text-transform:uppercase; color:rgba(245,237,216,.4); }

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

<div class="special-page">
  <div class="container">
    <div class="text-center mb-5">
      <p class="section-eyebrow">Penawaran Eksklusif</p>
      <h2 class="section-title">Menu & Paket <em>Spesial</em></h2>
      <span class="gold-rule"></span>
    </div>

    <div class="promo-banner mb-5">
      <div class="row align-items-center g-4">
        <div class="col-lg-7">
          <p class="section-eyebrow">🔥 Terbatas · Sabtu & Minggu</p>
          <h3 class="section-title mb-3">Weekend <em>Brunch</em> Package</h3>
          <p style="color:rgba(245,237,216,.62); font-size:.88rem; line-height:1.9; margin-bottom:1.5rem;">
            Pukul 08.00–13.00 setiap akhir pekan. Dapatkan 1 main course + minuman pilihan + dessert. Pengalaman brunch terlengkap di Surabaya.
          </p>
          <div class="d-flex align-items-center gap-4 mb-3 flex-wrap">
            <div>
              <div class="old-price">Rp 185.000</div>
              <div class="new-price">Rp 139.000</div>
              <div style="font-size:.58rem; letter-spacing:.18em; color:var(--gold); text-transform:uppercase;">/ orang</div>
            </div>
            <div>
              <p style="font-size:.65rem; letter-spacing:.15em; text-transform:uppercase; color:rgba(245,237,216,.4); margin-bottom:.5rem;">Promo berakhir dalam</p>
              <div class="d-flex gap-2">
                <div class="countdown-box"><div class="num" id="cd-h">08</div><div class="lbl">Jam</div></div>
                <div class="countdown-box"><div class="num" id="cd-m">45</div><div class="lbl">Mnt</div></div>
                <div class="countdown-box"><div class="num" id="cd-s">00</div><div class="lbl">Det</div></div>
              </div>
            </div>
          </div>
          <a href="reservasi.html" class="btn-gold-solid">Reservasi Sekarang</a>
        </div>
        <div class="col-lg-5">
          <img src="https://images.unsplash.com/photo-1600093463592-8e36ae95ef56?w=700&q=80"
               style="width:100%; height:300px; object-fit:cover; filter:brightness(.75) saturate(.8);" alt="Brunch"/>
        </div>
      </div>
    </div>

    <div class="row g-4">
      <div class="col-md-6 col-lg-4">
        <div class="deal-card">
          <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?w=600&q=80" alt="Happy Hour"/>
          <div class="deal-body">
            <h4>Happy Hour Espresso</h4>
            <p>Setiap Senin–Jumat pukul 15.00–17.00. Beli 1 espresso gratis 1 dessert pilihan.</p>
            <div class="old-price">Rp 96.000</div>
            <div class="new-price mb-3">Rp 38.000</div>
            <a href="reservasi.html" class="btn-gold" style="display: block; text-align: center;">Klaim Promo</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="deal-card">
          <img src="https://images.unsplash.com/photo-1511920170033-f8396924c348?w=600&q=80" alt="Anniversary"/>
          <div class="deal-body">
            <h4>6th Anniversary Bundle</h4>
            <p>Rayakan ulang tahun ke-6 kami! Bundle 2 minuman + 1 cake slice dengan harga spesial.</p>
            <div class="old-price">Rp 160.000</div>
            <div class="new-price mb-3">Rp 99.000</div>
            <a href="reservasi.html" class="btn-gold" style="display: block; text-align: center;">Klaim Promo</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="deal-card">
          <img src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?w=600&q=80" alt="Member"/>
          <div class="deal-body">
            <h4>Member Loyalty Card</h4>
            <p>Kumpulkan 10 stamp, dapatkan 1 minuman gratis pilihan. Daftar gratis di kasir kami.</p>
            <div style="font-size:.72rem; color:rgba(245,237,216,.45); margin-bottom:.8rem;">Program berlaku selamanya</div>
            <div class="new-price mb-3">Gratis</div>
            <a href="reservasi.html" class="btn-gold" style="display: block; text-align: center;">Daftar Sekarang</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

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
          <a href="index.html">Beranda</a>
          <a href="tentang.html">Tentang</a>
          <a href="menu.html">Menu</a>
          <a href="spesial.html">Spesial</a>
          <a href="reservasi.html">Galeri & Reservasi</a>
        </div>
      </div>
      <div class="col-6 col-lg-2">
        <p class="section-eyebrow mb-3" style="font-size:.62rem; letter-spacing:.32em; text-transform:uppercase; color:var(--gold);">Menu Andalan</p>
        <div class="footer-links">
          <a href="menu.html">Signature Espresso</a>
          <a href="menu.html">Gold Latte</a>
          <a href="menu.html">Wagyu Burger</a>
          <a href="menu.html">Truffle Pasta</a>
          <a href="menu.html">Tiramisu</a>
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
<script>
  let total = 8 * 3600 + 45 * 60;
  setInterval(() => {
    if (total <= 0) { total = 8 * 3600 + 45 * 60; return; }
    total--;
    const h = document.getElementById('cd-h');
    const m = document.getElementById('cd-m');
    const s = document.getElementById('cd-s');
    if (h) h.textContent = String(Math.floor(total / 3600)).padStart(2,'0');
    if (m) m.textContent = String(Math.floor((total % 3600) / 60)).padStart(2,'0');
    if (s) s.textContent = String(total % 60).padStart(2,'0');
  }, 1000);



</script>
</body>
</html>