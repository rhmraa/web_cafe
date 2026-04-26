<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Galeri & Reservasi - Noir & Gold Café</title>
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
      background: var(--navy-mid);
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
    .btn-gold-solid {
      background:var(--gold); border:1px solid var(--gold);
      color:var(--navy-deep); font-family:'Josefin Sans',sans-serif;
      font-size:.68rem; letter-spacing:.22em; text-transform:uppercase;
      padding:.85rem 2.4rem; font-weight:400; transition:all .35s ease;
      text-decoration: none;
      display: inline-block;
    }
    .btn-gold-solid:hover { background:var(--gold-pale); border-color:var(--gold-pale); color:var(--navy-deep); }
    .more-page { padding:5rem 0; }
    .gallery-grid {
      display:grid; grid-template-columns:repeat(4,1fr); gap:4px;
    }
    .gallery-item { overflow:hidden; position:relative; }
    .gallery-item:first-child { grid-column:span 2; grid-row:span 2; }
    .gallery-item img { width:100%; height:100%; object-fit:cover; min-height:180px; filter:brightness(.72) saturate(.7); transition:filter .5s, transform .5s; }
    .gallery-item:hover img { filter:brightness(.9) saturate(1); transform:scale(1.07); }
    .contact-card {
      background:var(--navy-deep); padding:1.8rem;
      border-left:2px solid var(--gold); margin-bottom:1rem;
    }
    .contact-card .icon { color:var(--gold); font-size:1.3rem; margin-bottom:.5rem; }
    .contact-card h6 { font-size:.58rem; letter-spacing:.22em; text-transform:uppercase; color:rgba(245,237,216,.4); margin-bottom:.3rem; }
    .contact-card p { font-size:.85rem; color:var(--cream); margin:0; }
    .social-link {
      display:inline-flex; align-items:center; justify-content:center;
      width:36px; height:36px; border:1px solid rgba(137,111,61,.3);
      color:rgba(245,237,216,.5); text-decoration:none; font-size:.85rem;
      transition:all .3s; margin-right:5px;
    }
    .social-link:hover { background:var(--gold); border-color:var(--gold); color:var(--navy-deep); }
    .form-control, .form-select {
      background:rgba(16,33,52,.8) !important;
      border:1px solid rgba(137,111,61,.25) !important;
      color:var(--cream) !important;
      font-family:'Josefin Sans',sans-serif; font-size:.8rem;
      letter-spacing:.06em; border-radius:0 !important;
      padding:.75rem 1rem; transition:border-color .3s;
    }
    .form-control::placeholder { color:rgba(245,237,216,.3); }
    .form-control:focus, .form-select:focus {
      border-color:var(--gold) !important;
      box-shadow:0 0 0 2px rgba(137,111,61,.12) !important; outline:none;
    }
    .form-label { font-size:.6rem; letter-spacing:.2em; text-transform:uppercase; color:rgba(245,237,216,.5); }
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

<div class="more-page">
  <div class="container">
    <div class="text-center mb-5">
      <p class="section-eyebrow">Atmosfer</p>
      <h2 class="section-title"><em>Galeri</em> Noir & Gold</h2>
      <span class="gold-rule"></span>
    </div>

    <div class="gallery-grid mb-5">
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?w=900&q=80" alt="Interior"/>
      </div>
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1507914372368-b2b085b925a1?w=600&q=80" alt="Coffee"/>
      </div>
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1543332164-6e82f355badc?w=600&q=80" alt="Barista"/>
      </div>
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1511920170033-f8396924c348?w=600&q=80" alt="Coffee Art"/>
      </div>
      <div class="gallery-item">
        <img src="https://images.unsplash.com/photo-1521017432531-fbd92d768814?w=600&q=80" alt="Lounge"/>
      </div>
    </div>

    <div class="text-center my-5">
      <p class="section-eyebrow">Hubungi Kami</p>
      <h2 class="section-title">Buat <em>Reservasi</em> Sekarang</h2>
      <span class="gold-rule"></span>
    </div>

    <div class="row g-5">
      <div class="col-lg-4">
        <div class="contact-card">
          <div class="icon"><i class="bi bi-geo-alt"></i></div>
          <h6>Alamat</h6>
          <p>Jl. Pelita Hdl.8 Muara Jawa<br>Kutai Kartanegara, Kalimantan Timur, Indonesia</p>
        </div>
        <div class="contact-card">
          <div class="icon"><i class="bi bi-clock"></i></div>
          <h6>Jam Operasional</h6>
          <p>Senin – Jumat: 07.00 – 22.00<br>Sabtu – Minggu: 07.00 – 23.00</p>
        </div>
        <div class="contact-card">
          <div class="icon"><i class="bi bi-telephone"></i></div>
          <h6>Kontak</h6>
          <p>+62 821 2653 1440<br>hello.noirandgold@gmail.com</p>
        </div>
        <div class="d-flex gap-2 mt-3">
          <a href="#" class="social-link"><i class="bi bi-instagram"></i></a>
          <a href="#" class="social-link"><i class="bi bi-facebook"></i></a>
          <a href="#" class="social-link"><i class="bi bi-tiktok"></i></a>
          <a href="#" class="social-link"><i class="bi bi-whatsapp"></i></a>
        </div>
      </div>
      <div class="col-lg-8">
        <div style="background:var(--navy-deep); border:1px solid rgba(137,111,61,.2); padding:2.5rem;">
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" placeholder="Nama Anda"/>
            </div>
            <div class="col-md-6">
              <label class="form-label">Nomor WhatsApp</label>
              <input type="tel" class="form-control" placeholder="+62 ..."/>
            </div>
            <div class="col-md-6">
              <label class="form-label">Tanggal</label>
              <input type="date" class="form-control"/>
            </div>
            <div class="col-md-6">
              <label class="form-label">Jam</label>
              <input type="time" class="form-control"/>
            </div>
            <div class="col-md-6">
              <label class="form-label">Jumlah Tamu</label>
              <select class="form-select">
                <option>1 – 2 orang</option>
                <option>3 – 4 orang</option>
                <option>5 – 6 orang</option>
                <option>7+ orang</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label">Acara Khusus</label>
              <select class="form-select">
                <option>Tidak ada</option>
                <option>Ulang Tahun</option>
                <option>Anniversary</option>
                <option>Meeting / Bisnis</option>
                <option>Lainnya</option>
              </select>
            </div>
            <div class="col-12">
              <label class="form-label">Catatan Tambahan</label>
              <textarea class="form-control" rows="3" placeholder="Permintaan khusus, alergi, dll..."></textarea>
            </div>
            <div class="col-12 pt-1">
              <button class="btn-gold-solid w-100 py-3" style="width:100%">
                <i class="bi bi-calendar-check me-2"></i>Konfirmasi Reservasi
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>