<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Tentang - Noir & Gold Café</title>
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
    .about-page { padding:5rem 0; }
    .about-badge {
      position:absolute; bottom:-20px; right:-20px;
      width:120px; height:120px; background:var(--gold);
      display:flex; flex-direction:column; align-items:center; justify-content:center;
    }
    .about-badge .num { font-family:'Cormorant Garamond',serif; font-size:2.2rem; font-weight:600; color:var(--navy-deep); line-height:1; }
    .about-badge .lbl { font-size:.55rem; letter-spacing:.18em; text-transform:uppercase; color:var(--navy-mid); text-align:center; }
    .stat-item .num2 { font-family:'Cormorant Garamond',serif; font-size:2rem; color:var(--gold-pale); }
    .stat-item .lbl2 { font-size:.6rem; letter-spacing:.18em; text-transform:uppercase; color:rgba(245,237,216,.45); }
    .value-card {
      background:var(--navy-deep); border-left:2px solid var(--gold);
      padding:1.5rem; margin-bottom:1rem;
    }
    .value-card h6 { font-family:'Cormorant Garamond',serif; font-size:1rem; color:#fff; margin-bottom:.4rem; }
    .value-card p { font-size:.78rem; color:rgba(245,237,216,.55); line-height:1.7; margin:0; }
  </style>
</head>
<body>

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

<div class="about-page">
  <div class="container">
    <div class="text-center mb-5">
      <p class="section-eyebrow">Siapa Kami</p>
      <h2 class="section-title"><em>Kisah</em> di Balik Noir & Gold</h2>
      <span class="gold-rule"></span>
    </div>

    <div class="row g-5 align-items-center mb-5">
      <div class="col-lg-5">
        <div class="position-relative">
          <img src="https://images.unsplash.com/photo-1559305616-3f99cd43e353?w=900&q=80"
               style="width:100%; height:420px; object-fit:cover; filter:brightness(.85) saturate(.8);" alt="Interior"/>
          <div class="about-badge">
            <span class="num">6</span>
            <span class="lbl">Tahun<br>Bersama</span>
          </div>
        </div>
      </div>
      <div class="col-lg-7" style="padding-left:2.5rem;">
        <p style="color:rgba(245,237,216,.65); font-size:.88rem; line-height:1.9; margin-bottom:1rem;">
          Noir & Gold berdiri pada tahun 2018 dengan satu visi sederhana: menciptakan ruang di mana kopi bukan sekadar minuman, melainkan sebuah pengalaman yang menggerakkan jiwa.
        </p>
        <p style="color:rgba(245,237,216,.65); font-size:.88rem; line-height:1.9; margin-bottom:1rem;">
          Berlokasi di jantung Surabaya Barat, kami membangun setiap detail café dengan penuh kesadaran — dari pemilihan biji kopi single origin Nusantara, hingga kurasi musik yang mengalun lembut.
        </p>
        <p style="color:rgba(245,237,216,.65); font-size:.88rem; line-height:1.9; margin-bottom:1.8rem;">
          Enam tahun berjalan, kami telah melayani ribuan tamu dan menjadi bagian dari cerita mereka.
        </p>
        <div class="row g-3">
          <div class="col-4 stat-item"><div class="num2">40+</div><div class="lbl2">Varian Menu</div></div>
          <div class="col-4 stat-item"><div class="num2">12</div><div class="lbl2">Barista Ahli</div></div>
          <div class="col-4 stat-item"><div class="num2">98%</div><div class="lbl2">Kepuasan Tamu</div></div>
        </div>
      </div>
    </div>

    <div class="row g-5 align-items-start">
      <div class="col-lg-6">
        <p class="section-eyebrow">Nilai Kami</p>
        <h3 class="section-title mb-4">Prinsip yang <em>Kami Pegang</em></h3>
        <div class="value-card">
          <h6><i class="bi bi-patch-check me-2" style="color:var(--gold)"></i>Kualitas Tanpa Kompromi</h6>
          <p>Setiap bahan baku kami pilih dengan teliti, dari biji kopi hingga rempah dapur.</p>
        </div>
        <div class="value-card">
          <h6><i class="bi bi-heart me-2" style="color:var(--gold)"></i>Kehangatan yang Tulus</h6>
          <p>Setiap tamu diperlakukan seperti keluarga — hangat, penuh perhatian, tak terlupakan.</p>
        </div>
        <div class="value-card">
          <h6><i class="bi bi-leaf me-2" style="color:var(--gold)"></i>Keberlanjutan Lokal</h6>
          <p>Kami bermitra langsung dengan petani kopi lokal untuk mendukung ekosistem yang berkelanjutan.</p>
        </div>
      </div>
      <div class="col-lg-6">
        <p class="section-eyebrow">Tim Kami</p>
        <h3 class="section-title mb-4"><em>Para Maestro</em> di Balik Cangkir</h3>
        <div class="row g-3">
          <div class="col-6">
            <div style="background:var(--navy-deep); border:1px solid rgba(137,111,61,.15); padding:1.5rem; text-align:center;">
              <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=200&q=80" style="width:70px;height:70px;object-fit:cover;border-radius:50%;border:2px solid var(--gold);margin-bottom:.8rem;filter:saturate(.8);" alt=""/>
              <div style="font-family:'Cormorant Garamond',serif; color:#fff; font-size:1rem;">Arif Santoso</div>
              <div style="font-size:.58rem; letter-spacing:.18em; color:var(--gold); text-transform:uppercase;">Head Barista</div>
            </div>
          </div>
          <div class="col-6">
            <div style="background:var(--navy-deep); border:1px solid rgba(137,111,61,.15); padding:1.5rem; text-align:center;">
              <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?w=200&q=80" style="width:70px;height:70px;object-fit:cover;border-radius:50%;border:2px solid var(--gold);margin-bottom:.8rem;filter:saturate(.8);" alt=""/>
              <div style="font-family:'Cormorant Garamond',serif; color:#fff; font-size:1rem;">Dewi Kartika</div>
              <div style="font-size:.58rem; letter-spacing:.18em; color:var(--gold); text-transform:uppercase;">Executive Chef</div>
            </div>
          </div>
          <div class="col-6">
            <div style="background:var(--navy-deep); border:1px solid rgba(137,111,61,.15); padding:1.5rem; text-align:center;">
              <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=200&q=80" style="width:70px;height:70px;object-fit:cover;border-radius:50%;border:2px solid var(--gold);margin-bottom:.8rem;filter:saturate(.8);" alt=""/>
              <div style="font-family:'Cormorant Garamond',serif; color:#fff; font-size:1rem;">Budi Prasetyo</div>
              <div style="font-size:.58rem; letter-spacing:.18em; color:var(--gold); text-transform:uppercase;">Operations Manager</div>
            </div>
          </div>
          <div class="col-6">
            <div style="background:var(--navy-deep); border:1px solid rgba(137,111,61,.15); padding:1.5rem; text-align:center;">
              <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=200&q=80" style="width:70px;height:70px;object-fit:cover;border-radius:50%;border:2px solid var(--gold);margin-bottom:.8rem;filter:saturate(.8);" alt=""/>
              <div style="font-family:'Cormorant Garamond',serif; color:#fff; font-size:1rem;">Sinta Rahayu</div>
              <div style="font-size:.58rem; letter-spacing:.18em; color:var(--gold); text-transform:uppercase;">Pastry Chef</div>
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