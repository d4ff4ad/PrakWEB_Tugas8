<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Danish Corp</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        :root {
            --apple-bg: #f5f5f7;
            --apple-text: #1d1d1f;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--apple-text);
            background-color: #fff;
            overflow-x: hidden;
        }

        /* Navbar Glassmorphism */
        .navbar {
            background-color: rgba(255, 255, 255, 0.8); /* Versi Light untuk About */
            backdrop-filter: saturate(180%) blur(20px);
            -webkit-backdrop-filter: saturate(180%) blur(20px);
            font-size: 12px;
            border-bottom: 1px solid rgba(0,0,0,0.1);
        }
        .nav-link { color: #333 !important; transition: 0.3s; font-weight: 500; }
        .nav-link:hover,.nav-link.active { color: #0071e3 !important; }
        

        /* Hero Text */
        .about-hero {
            padding: 120px 0 80px;
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }
        .about-hero h1 {
            font-weight: 700;
            font-size: 3.5rem;
            letter-spacing: -1px;
            margin-bottom: 20px;
        }
        .about-hero p {
            font-size: 1.5rem;
            color: #86868b;
            font-weight: 400;
            line-height: 1.4;
        }

        /* Cinematic Image */
        .hero-image {
            width: 100%;
            height: 500px;
            object-fit: cover;
            border-radius: 30px;
            margin-bottom: 80px;
        }

        /* Sections */
        .content-section {
            padding: 80px 0;
        }
        
        /* Typography for Sections */
        .section-label {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 1rem;
            display: block;
        }

        .section-text {
            font-size: 1.2rem;
            color: #424245;
            line-height: 1.6;
        }

        /* Values Grid */
        .value-card {
            background-color: var(--apple-bg);
            padding: 40px;
            border-radius: 24px;
            height: 100%;
            transition: 0.3s;
        }
        .value-card:hover {
            transform: scale(1.02);
        }
        .value-icon {
            font-size: 2.5rem;
            margin-bottom: 20px;
            display: block;
        }

        /* Stats */
        .stat-number {
            font-size: 4rem;
            font-weight: 700;
            display: block;
            line-height: 1;
            background: -webkit-linear-gradient(#000, #555);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .stat-label {
            font-size: 1rem;
            font-weight: 600;
            color: #86868b;
            margin-top: 10px;
            display: block;
        }

        /* Team Image */
        .team-img {
            border-radius: 18px;
            margin-bottom: 15px;
            transition: 0.3s;
        }
        .team-card:hover .team-img {
            filter: brightness(0.9);
        }

        footer {
            background: #f5f5f7;
            color: #86868b;
            font-size: 12px;
            padding: 40px 0;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold text-dark" href="/"><i class="bi bi-apple me-2"></i>Danish</a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav gap-3">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('store') }}">Store</a></li>
                <li class="nav-item"><a class="nav-link active" href="{{ route('about') }}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('support') }}">Support</a></li>
            </ul>
        </div>
    </div>
</nav>

<section class="container">
    <div class="about-hero fade-in">
        <h1>Kami percaya teknologi dapat memajukan umat manusia.</h1>
        <p>Di Danish Corp, kami tidak hanya membuat perangkat. Kami menciptakan alat yang membantu orang mengubah dunia.</p>
    </div>
    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=2301&auto=format&fit=crop" class="hero-image shadow-sm" alt="Office Culture">
</section>

<section class="content-section bg-light">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-md-6">
                <span class="section-label text-primary">Misi Kami</span>
                <h2 class="display-5 fw-bold mb-4">Inovasi di setiap detail.</h2>
                <p class="section-text">
                    Kami terobsesi dengan kesempurnaan. Mulai dari desain sirkuit terkecil hingga cara produk terasa di tangan Anda. Tujuan kami sederhana: menciptakan pengalaman yang begitu mulus sehingga teknologi terasa seperti sihir.
                </p>
            </div>
            <div class="col-md-6">
                <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=2664&auto=format&fit=crop" class="img-fluid rounded-4 shadow-sm" alt="Meeting">
            </div>
        </div>
    </div>
</section>

<section class="content-section">
    <div class="container">
        <h2 class="fw-bold mb-5 text-center">Nilai Nilai Kami</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="value-card">
                    <i class="bi bi-globe-americas value-icon text-success"></i>
                    <h4>Lingkungan</h4>
                    <p class="text-secondary">Kami berkomitmen untuk menjadi 100% netral karbon pada tahun 2030.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="value-card">
                    <i class="bi bi-shield-lock value-icon text-dark"></i>
                    <h4>Privasi</h4>
                    <p class="text-secondary">Privasi adalah hak asasi manusia yang mendasar. Kami mendesain produk untuk melindunginya.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="value-card">
                    <i class="bi bi-people value-icon text-primary"></i>
                    <h4>Inklusivitas</h4>
                    <p class="text-secondary">Teknologi paling kuat jika bisa digunakan oleh semua orang.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="content-section text-center" style="background-color: #fbfbfd;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <span class="stat-number">10jt+</span>
                <span class="stat-label">Pengguna Aktif</span>
            </div>
            <div class="col-md-4 mb-4">
                <span class="stat-number">50+</span>
                <span class="stat-label">Negara</span>
            </div>
            <div class="col-md-4 mb-4">
                <span class="stat-number">100%</span>
                <span class="stat-label">Energi Terbarukan</span>
            </div>
        </div>
    </div>
</section>

<section class="content-section">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="fw-bold">Para Visioner</h2>
                <p class="text-secondary">Orang-orang di balik layar.</p>
            </div>
        </div>
        <div class="row g-4 justify-content-center">
            
            <div class="col-md-3 col-6 text-center team-card">
                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=1000&auto=format&fit=crop" class="img-fluid team-img" alt="CEO">
                <h5 class="fw-bold mb-1">{{ $about['CEO'] }}</h5>
                <small class="text-secondary">{{ $jabatan['CEO'] }}</small>
            </div>

            <div class="col-md-3 col-6 text-center team-card">
                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=1000&auto=format&fit=crop" class="img-fluid team-img" alt="Designer">
                <h5 class="fw-bold mb-1">{{ $about['CTO'] }}</h5>
                <small class="text-secondary">{{ $jabatan['CTO'] }}</small>
            </div>

            <div class="col-md-3 col-6 text-center team-card">
                <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?q=80&w=1000&auto=format&fit=crop" class="img-fluid team-img" alt="Tech">
                <h5 class="fw-bold mb-1">{{ $about['COO'] }}</h5>
                <small class="text-secondary">{{ $jabatan['COO'] }}</small>
            </div>

        </div>
    </div>
</section>

<footer class="text-center py-4 mt-5">
    <div class="container">
        <p class="mb-0">&copy; 2025 Danish Corp. <span class="text-secondary">Designed in Indonesia style.</span></p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>