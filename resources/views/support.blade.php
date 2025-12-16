<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support - Danish Corp</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        :root {
            --apple-bg: #f5f5f7;
            --apple-text: #1d1d1f;
            --apple-blue: #0071e3;
            --card-radius: 18px;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--apple-text);
            background-color: #fff;
        }

        /* Navbar */
        .navbar {
            background-color: rgba(255, 255, 255, 0.8);
            backdrop-filter: saturate(180%) blur(20px);
            -webkit-backdrop-filter: saturate(180%) blur(20px);
            border-bottom: 1px solid #d2d2d7;
            font-size: 12px;
        }
        .nav-link { color: #333 !important; font-weight: 500; transition: 0.3s; }
        .nav-link:hover { color: var(--apple-blue) !important; }
        .nav-link.active { color: var(--apple-blue) !important; }

        /* Hero Section with Big Search */
        .support-hero {
            background-image: url('https://platform.theverge.com/wp-content/uploads/sites/2/2025/04/STK071_APPLE_H.jpg?quality=90&strip=all&crop=0,0,100,100'); 
            background-size: cover;
            background-position: center;
            padding: 100px 0 120px;
            text-align: center; 
            color: #414141ff;
        }

        .hero-title {
            font-weight: 700;
            font-size: 3rem;
            margin-bottom: 30px;
        }

        /* Custom Search Bar */
        .search-container {
            max-width: 600px;
            margin: 0 auto;
            position: relative;
        }
        .search-input {
            border-radius: 12px;
            padding: 15px 20px 15px 50px;
            border: 1px solid #d2d2d7;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            font-size: 1.1rem;
            transition: 0.3s;
        }
        .search-input:focus {
            box-shadow: 0 0 0 4px rgba(0,113,227,0.3);
            border-color: var(--apple-blue);
        }
        .search-icon {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: #86868b;
            font-size: 1.2rem;
        }

        /* Product Icons Grid */
        .product-selector {
            margin-top: -60px; /* Overlap ke atas */
            padding-bottom: 60px;
        }
        
        .device-card {
            background: #fff;
            border-radius: var(--card-radius);
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
            border: 1px solid transparent;
            height: 100%;
        }

        .device-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border-color: #d2d2d7;
        }

        .device-icon {
            font-size: 2.5rem; /* Besar ikon */
            margin-bottom: 10px;
            display: block;
            color: #1d1d1f;
        }
        .device-name {
            font-size: 0.9rem;
            font-weight: 500;
        }

        /* Topics Section */
        .topic-section {
            background-color: #f5f5f7;
            padding: 80px 0;
        }
        
        .topic-card {
            background: #fff;
            padding: 30px;
            border-radius: var(--card-radius);
            height: 100%;
            transition: 0.3s;
        }
        .topic-card:hover {
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        .topic-title {
            font-weight: 600;
            margin-bottom: 10px;
            font-size: 1.2rem;
        }
        .topic-desc {
            color: #86868b;
            font-size: 0.95rem;
            margin-bottom: 20px;
        }
        .arrow-link {
            color: var(--apple-blue);
            text-decoration: none;
            font-weight: 500;
        }
        .arrow-link:hover { text-decoration: underline; }

        /* Contact Banner */
        .contact-banner {
            padding: 80px 0;
            text-align: center;
        }
        .contact-img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
        }

        footer {
            background: #f5f5f7;
            padding: 40px 0;
            font-size: 12px;
            border-top: 1px solid #d2d2d7;
        }

    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/"><i class="bi bi-apple me-2"></i>Danish Support</a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav gap-3">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('store') }}">Store</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                <li class="nav-item"><a class="nav-link active" href="{{ route('support') }}">Support</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('product') }}">Product</a></li>A
            </ul>
        </div>
    </div>
</nav>

<section class="support-hero">
    <div class="container">
        <h1 class="hero-title">Bagaimana kami bisa membantu?</h1>
        
        <div class="search-container fade-in-up">
            <i class="bi bi-search search-icon"></i>
            <input type="text" class="form-control search-input" placeholder="Cari masalah (contoh: Lupa kata sandi, Baterai)">
        </div>
    </div>
</section>

<section class="product-selector">
    <div class="container">
        <div class="row g-3 justify-content-center">
            
            <div class="col-4 col-md-2">
                <div class="device-card">
                    <i class="bi bi-phone device-icon"></i>
                    <span class="device-name">iPhone</span>
                </div>
            </div>

            <div class="col-4 col-md-2">
                <div class="device-card">
                    <i class="bi bi-laptop device-icon"></i>
                    <span class="device-name">Mac</span>
                </div>
            </div>

            <div class="col-4 col-md-2">
                <div class="device-card">
                    <i class="bi bi-tablet device-icon"></i>
                    <span class="device-name">iPad</span>
                </div>
            </div>

            <div class="col-4 col-md-2">
                <div class="device-card">
                    <i class="bi bi-smartwatch device-icon"></i>
                    <span class="device-name">Watch</span>
                </div>
            </div>

            <div class="col-4 col-md-2">
                <div class="device-card">
                    <i class="bi bi-tv device-icon"></i>
                    <span class="device-name">TV</span>
                </div>
            </div>

            <div class="col-4 col-md-2">
                <div class="device-card">
                    <i class="bi bi-earbuds device-icon"></i> <span class="device-name">AirPods</span>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="topic-section">
    <div class="container">
        <h3 class="fw-bold mb-4">Topik Populer</h3>
        <div class="row g-4">
            
            <div class="col-md-4">
                <div class="topic-card">
                    <i class="bi bi-key fs-3 text-primary mb-3 d-block"></i>
                    <h5 class="topic-title">Lupa Kata Sandi</h5>
                    <p class="topic-desc">Atur ulang kata sandi ID Elektronik Anda jika lupa atau terkunci.</p>
                    <a href="#" class="arrow-link">Mulai pemulihan <i class="bi bi-chevron-right small"></i></a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="topic-card">
                    <i class="bi bi-tools fs-3 text-primary mb-3 d-block"></i>
                    <h5 class="topic-title">Perbaikan & Fisik</h5>
                    <p class="topic-desc">Mulai perbaikan untuk layar retak, baterai, atau kerusakan fisik lainnya.</p>
                    <a href="#" class="arrow-link">Opsi perbaikan <i class="bi bi-chevron-right small"></i></a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="topic-card">
                    <i class="bi bi-shield-check fs-3 text-primary mb-3 d-block"></i>
                    <h5 class="topic-title">Garansi & Perlindungan</h5>
                    <p class="topic-desc">Cek status garansi perangkat Anda atau beli paket perlindungan tambahan.</p>
                    <a href="#" class="arrow-link">Cek cakupan <i class="bi bi-chevron-right small"></i></a>
                </div>
            </div>

            <div class="col-12">
                <div class="topic-card d-flex align-items-center justify-content-between flex-wrap">
                    <div>
                        <h5 class="topic-title mb-1">Berlangganan & Penagihan</h5>
                        <p class="topic-desc mb-0">Kelola langganan aplikasi atau lihat riwayat pembelian.</p>
                    </div>
                    <a href="#" class="arrow-link mt-3 mt-md-0">Kelola <i class="bi bi-chevron-right small"></i></a>
                </div>
            </div>
            @foreach ($supports as $key => $support)
            <div class="col-md-4">
                <div class="topic-card">
                    <i class="bi {{ $icon['icon' . ($key + 1)] }} fs-3 text-primary mb-3 d-block"></i>
                    <h5 class="topic-title">{{ $support['judul'] }}</h5>
                    <p class="topic-desc">{{ $support['deskripsi'] }}</p>
                    <a href="#" class="arrow-link">Mulai pemulihan <i class="bi bi-chevron-right small"></i></a>
                </div>
            </div>
        @endforeach

        </div>
        
    </div>
</section>

<section class="contact-banner bg-white">
    <div class="container">
        <h2 class="fw-bold mb-3">Kami di sini untuk Anda.</h2>
        <p class="text-secondary mb-4" style="max-width: 500px; margin: 0 auto;">
            Hubungi Dukungan Elektronik Corp melalui telepon, chat, atau email. Kami siap membantu menyelesaikan masalah Anda.
        </p>
        
        <div class="d-flex justify-content-center gap-3">
            <a href="#" class="btn btn-primary rounded-pill px-4 py-2">Chat Sekarang</a>
            <a href="#" class="btn btn-outline-primary rounded-pill px-4 py-2">Jadwalkan Panggilan</a>
        </div>
    </div>
</section>

<footer class="text-center">
    <div class="container">
        <p class="mb-2">&copy; 2025 Danish Corp Support.</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#" class="text-secondary text-decoration-none">Peta Situs</a></li>
            <li class="list-inline-item">|</li>
            <li class="list-inline-item"><a href="#" class="text-secondary text-decoration-none">Status Sistem</a></li>
        </ul>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>