<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Menu - Noir & Gold Café</title>
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
    .menu-page { padding:5rem 0; }
    .menu-tabs .nav-link {
      color:rgba(245,237,216,.45) !important; font-size:.65rem;
      letter-spacing:.22em; text-transform:uppercase; border:none !important;
      padding:.5rem 1.3rem !important;
      border-bottom:1px solid transparent !important; border-radius:0 !important;
      text-decoration: none;
    }
    .menu-tabs .nav-link.active, .menu-tabs .nav-link:hover {
      color:var(--gold-pale) !important; background:transparent !important;
      border-bottom-color:var(--gold) !important;
    }
    .menu-card {
      background:var(--navy-mid); border:1px solid rgba(137,111,61,.15);
      overflow:hidden; transition:transform .4s, box-shadow .4s, border-color .4s;
    }
    .menu-card:hover { transform:translateY(-6px); box-shadow:0 24px 48px rgba(0,0,0,.5); border-color:rgba(137,111,61,.4); }
    .menu-card img { width:100%; height:190px; object-fit:cover; filter:brightness(.82) saturate(.8); transition:filter .4s, transform .5s; }
    .menu-card:hover img { filter:brightness(.92) saturate(1); transform:scale(1.06); }
    .menu-card-body { padding:1.3rem; }
    .menu-card-title { font-family:'Cormorant Garamond',serif; font-size:1.15rem; color:#fff; }
    .menu-card-desc { font-size:.72rem; color:rgba(245,237,216,.5); line-height:1.7; margin:.4rem 0 .8rem; }
    .menu-price { font-family:'Cormorant Garamond',serif; font-size:1.05rem; color:var(--gold-pale); }
    .menu-badge { background:var(--gold); color:var(--navy-deep); font-size:.55rem; letter-spacing:.12em; text-transform:uppercase; padding:.2rem .5rem; display: inline-block; }

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

<div class="menu-page">
  <div class="container">
    <div class="text-center mb-5">
      <p class="section-eyebrow">Sajian Kami</p>
      <h2 class="section-title">Pilihan <em>Menu</em> Terbaik</h2>
      <span class="gold-rule"></span>
    </div>

    <ul class="nav menu-tabs justify-content-center mb-5" id="menuTab">
      <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#kopi">☕ Kopi</a></li>
      <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nonkopi">🍵 Non-Kopi</a></li>
      <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#makanan">🍽 Makanan</a></li>
      <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#dessert">🍰 Dessert</a></li>
    </ul>

    <div class="tab-content">
      <div class="tab-pane fade show active" id="kopi">
        <div class="row g-4">
          <div class="col-md-6 col-lg-3">
            <div class="menu-card">
              <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?w=600&q=80" alt="Espresso"/>
              <div class="menu-card-body">
                <div class="d-flex justify-content-between align-items-start mb-1">
                  <div class="menu-card-title">Signature Espresso</div>
                  <span class="menu-badge">Best</span>
                </div>
                <p class="menu-card-desc">Blend eksklusif arabika single origin, body penuh dan aftertaste cokelat gelap.</p>
                <span class="menu-price">Rp 38.000</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="menu-card">
              <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=600&q=80" alt="Latte"/>
              <div class="menu-card-body">
                <div class="menu-card-title mb-1">Gold Latte</div>
                <p class="menu-card-desc">Espresso lembut, susu segar pilihan, latte art eksklusif oleh barista kami.</p>
                <span class="menu-price">Rp 45.000</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="menu-card">
              <img src="https://images.unsplash.com/photo-1461023058943-07fcbe16d735?w=600&q=80" alt="Cold Brew"/>
              <div class="menu-card-body">
                <div class="menu-card-title mb-1">Midnight Cold Brew</div>
                <p class="menu-card-desc">Diseduh 18 jam dalam suhu dingin. Bold, smooth, dan refreshing.</p>
                <span class="menu-price">Rp 52.000</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="menu-card">
              <img src="https://images.unsplash.com/photo-1534778101976-62847782c213?w=600&q=80" alt="Cappuccino"/>
              <div class="menu-card-body">
                <div class="menu-card-title mb-1">Velvet Cappuccino</div>
                <p class="menu-card-desc">Busa susu silky berpadu sempurna dengan espresso double shot.</p>
                <span class="menu-price">Rp 42.000</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-pane fade" id="nonkopi">
        <div class="row g-4">
          <div class="col-md-6 col-lg-4">
            <div class="menu-card">
              <img src="https://images.unsplash.com/photo-1556679343-c7306c1976bc?w=600&q=80" alt="Matcha"/>
              <div class="menu-card-body">
                <div class="d-flex justify-content-between align-items-start mb-1">
                  <div class="menu-card-title">Premium Matcha</div>
                  <span class="menu-badge">Fav</span>
                </div>
                <p class="menu-card-desc">Matcha grade ceremonial Jepang, creamy dan earthy dengan sentuhan madu Sumbawa.</p>
                <span class="menu-price">Rp 48.000</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="menu-card">
              <img src="https://images.unsplash.com/photo-1544145945-f90425340c7e?w=600&q=80" alt="Mocktail"/>
              <div class="menu-card-body">
                <div class="menu-card-title mb-1">Tropical Mocktail</div>
                <p class="menu-card-desc">Perpaduan buah-buahan tropis segar dengan soda dan sirup rempah khas rumahan.</p>
                <span class="menu-price">Rp 40.000</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="menu-card">
              <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=600&q=80" alt="Hot Choco"/>
              <div class="menu-card-body">
                <div class="menu-card-title mb-1">Dark Chocolate</div>
                <p class="menu-card-desc">Cokelat 70% Sulawesi dilelehkan sempurna, kaya rasa dan menghangatkan jiwa.</p>
                <span class="menu-price">Rp 44.000</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-pane fade" id="makanan">
        <div class="row g-4">
          <div class="col-md-6 col-lg-4">
            <div class="menu-card">
              <img src="https://images.unsplash.com/photo-1484723091739-30a097e8f929?w=600&q=80" alt="Toast"/>
              <div class="menu-card-body">
                <div class="menu-card-title mb-1">Avocado Toast</div>
                <p class="menu-card-desc">Sourdough panggang, alpukat segar, telur setengah matang, fleur de sel.</p>
                <span class="menu-price">Rp 62.000</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="menu-card">
              <img src="https://images.unsplash.com/photo-1565299585323-38d6b0865b47?w=600&q=80" alt="Pasta"/>
              <div class="menu-card-body">
                <div class="d-flex justify-content-between align-items-start mb-1">
                  <div class="menu-card-title">Truffle Pasta</div>
                  <span class="menu-badge">Chef's Pick</span>
                </div>
                <p class="menu-card-desc">Fettuccine saus krim truffle Italia, parmesan aged 18 bulan.</p>
                <span class="menu-price">Rp 88.000</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="menu-card">
              <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?w=600&q=80" alt="Burger"/>
              <div class="menu-card-body">
                <div class="menu-card-title mb-1">Wagyu Burger</div>
                <p class="menu-card-desc">Patty wagyu lokal, keju cheddar, saus mushroom truffle, roti brioche homemade.</p>
                <span class="menu-price">Rp 115.000</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-pane fade" id="dessert">
        <div class="row g-4">
          <div class="col-md-6 col-lg-4">
            <div class="menu-card">
              <img src="https://images.unsplash.com/photo-1565958011703-44f9829ba187?w=600&q=80" alt="Cake"/>
              <div class="menu-card-body">
                <div class="menu-card-title mb-1">Noir Chocolate Cake</div>
                <p class="menu-card-desc">Moist chocolate cake berlapis ganache 70%, dihias gold flake.</p>
                <span class="menu-price">Rp 58.000</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="menu-card">
              <img src="https://images.unsplash.com/photo-1551024506-0bccd828d307?w=600&q=80" alt="Tiramisu"/>
              <div class="menu-card-body">
                <div class="d-flex justify-content-between align-items-start mb-1">
                  <div class="menu-card-title">Tiramisu Al Caffè</div>
                  <span class="menu-badge">Best</span>
                </div>
                <p class="menu-card-desc">Resep asli Italia, ladyfinger direndam espresso kami, mascarpone lembut.</p>
                <span class="menu-price">Rp 55.000</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="menu-card">
              <img src="https://images.unsplash.com/photo-1488477181946-6428a0291777?w=600&q=80" alt="Crepe"/>
              <div class="menu-card-body">
                <div class="menu-card-title mb-1">Crêpe Suzette</div>
                <p class="menu-card-desc">Crêpe tipis dengan saus jeruk karamel hangat dan vanilla ice cream.</p>
                <span class="menu-price">Rp 62.000</span>
              </div>
            </div>
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
</body>
</html>