<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Danish Corp</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        :root {
            --apple-bg: #f5f5f7;
            --apple-text: #1d1d1f;
            --apple-blue: #0071e3;
            --apple-blue-hover: #0077ed;
            --card-radius: 20px;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--apple-text);
            background-color: var(--apple-bg); 
        }

        /* Navbar Glassmorphism */
        .navbar {
            background-color: rgba(255, 255, 255, 0.8);
            backdrop-filter: saturate(180%) blur(20px);
            -webkit-backdrop-filter: saturate(180%) blur(20px);
            border-bottom: 1px solid #d2d2d7;
            font-size: 12px;
        }
        .nav-link { color: #333 !important; font-weight: 500; transition: 0.3s; }
        .nav-link:hover, .nav-link.active { color: var(--apple-blue) !important; }

        /* Header Section */
        .contact-header {
            background-color: #fff;
            padding: 120px 0 60px;
            text-align: center;
            border-bottom: 1px solid #d2d2d7;
        }
        .contact-title {
            font-weight: 700;
            font-size: 3rem;
            margin-bottom: 15px;
        }
        .contact-desc {
            font-size: 1.2rem;
            color: #86868b;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Card Styles (Bento Grid) */
        .contact-section {
            padding: 80px 0;
        }
        
        .contact-card {
            background: #fff;
            border-radius: var(--card-radius);
            padding: 40px 30px;
            height: 100%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: left;
        }

        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.05);
        }

        .icon-box {
            font-size: 2rem;
            color: var(--apple-text);
            margin-bottom: 20px;
        }

        .card-heading {
            font-weight: 600;
            font-size: 1.5rem;
            margin-bottom: 10px;
        }
        
        .card-text {
            color: #86868b;
            font-size: 1rem;
            margin-bottom: 20px;
            line-height: 1.5;
        }

        .contact-link {
            color: var(--apple-blue);
            text-decoration: none;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
        }
        .contact-link:hover { text-decoration: underline; }

        /* Form Styling (Apple Style Inputs) */
        .form-container {
            background: #fff;
            padding: 50px;
            border-radius: var(--card-radius);
        }

        .form-control {
            border-radius: 12px;
            padding: 15px;
            border: 1px solid #d2d2d7;
            font-size: 1rem;
            margin-bottom: 20px;
            background-color: #fff;
        }

        .form-control:focus {
            box-shadow: 0 0 0 4px rgba(0,113,227,0.1);
            border-color: var(--apple-blue);
        }

        .form-label {
            font-weight: 600;
            font-size: 0.9rem;
            color: #1d1d1f;
            margin-bottom: 8px;
        }

        .btn-submit {
            background-color: var(--apple-blue);
            color: white;
            border-radius: 50px;
            padding: 12px 30px;
            font-weight: 500;
            border: none;
            transition: 0.3s;
        }
        .btn-submit:hover {
            background-color: var(--apple-blue-hover);
        }

        /* Footer */
        footer {
            background: #f5f5f7;
            padding: 40px 0;
            font-size: 12px;
            border-top: 1px solid #d2d2d7;
            color: #86868b;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/"><i class="bi bi-apple me-2"></i>Danish Contact</a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav gap-3">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('store') }}">Store</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                <li class="nav-item"><a class="nav-link active" href="{{ route('contact') }}">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('support') }}">Support</a></li>
            </ul>
        </div>
    </div>
</nav>

<header class="contact-header">
    <div class="container fade-in">
        <h1 class="contact-title">Menghubungi Danish Corp.</h1>
        <p class="contact-desc">Pilih cara yang paling tepat untuk menghubungi kami. Kami siap membantu pertanyaan seputar produk, dukungan, atau bisnis.</p>
    </div>
</header>

<section class="contact-section">
    <div class="container">
        <div class="row g-4 mb-5">
            
            <div class="col-md-4">
                <div class="contact-card">
                    <i class="bi bi-bag icon-box"></i>
                    <h3 class="card-heading">Penjualan</h3>
                    <p class="card-text">Ingin membeli produk untuk perusahaan atau pendidikan? Hubungi tim penjualan kami.</p>
                    <a href="tel:+628001234567" class="contact-link mb-2"><i class="bi bi-telephone me-2"></i> 0800-1234-5678</a><br>
                    <a href="#" class="contact-link">Chat dengan Spesialis <i class="bi bi-chevron-right ms-1" style="font-size: 0.8em;"></i></a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-card">
                    <i class="bi bi-tools icon-box"></i>
                    <h3 class="card-heading">Dukungan Produk</h3>
                    <p class="card-text">Butuh bantuan dengan perangkat Anda? Mulai permohonan dukungan secara online.</p>
                    <a href="#" class="contact-link">Kunjungi Support <i class="bi bi-chevron-right ms-1" style="font-size: 0.8em;"></i></a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-card">
                    <i class="bi bi-newspaper icon-box"></i>
                    <h3 class="card-heading">Media & Info</h3>
                    <p class="card-text">Untuk pertanyaan pers, relasi investor, dan informasi korporat lainnya.</p>
                    <a href="mailto:press@Danishcorp.com" class="contact-link">press@Danishcorp.com <i class="bi bi-chevron-right ms-1" style="font-size: 0.8em;"></i></a>
                </div>
            </div>

        </div>

        <div class="row justify-content-center mt-5">
            <div class="col-lg-8">
                <div class="text-center mb-4">
                    <h2 class="fw-bold">Kirim Pesan</h2>
                    <p class="text-secondary">Kami akan membalas email Anda dalam 1x24 jam kerja.</p>
                </div>
                
                <div class="form-container shadow-sm">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="name" placeholder="Nama Anda">
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="nama@contoh.com">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="subject" class="form-label">Topik</label>
                            <select class="form-select form-control" id="subject">
                                <option selected>Pilih Topik...</option>
                                <option value="1">Pertanyaan Produk</option>
                                <option value="2">Status Pesanan</option>
                                <option value="3">Masalah Website</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="message" class="form-label">Pesan</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Tuliskan detail pertanyaan Anda di sini..."></textarea>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-submit">Kirim Pesan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="bg-white py-5 border-top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5 mb-4 mb-md-0">
                <h3 class="fw-bold mb-3">Kantor Pusat</h3>
                <p class="text-secondary mb-1">{{ $contact['alamat'] }}</p>
                <p class="text-secondary mb-1">{{ $contact['email'] }}</p>
                <p class="text-secondary mb-4">{{ $contact['phone'] }}</p>
                
                <a href="{{ $peta['peta'] }}" class="btn btn-outline-dark rounded-pill px-4">Lihat di Peta</a>
            </div>
            <div class="col-md-7">
                <div style="width: 100%; height: 300px; background-color: #eee; border-radius: 20px; overflow: hidden; position: relative;">
                     <img src="https://images.unsplash.com/photo-1524661135-423995f22d0b?q=80&w=2674&auto=format&fit=crop" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.8;" alt="Map Location">
                     <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: #000; font-weight: bold; background: rgba(255,255,255,0.8); padding: 10px 20px; border-radius: 10px;">
                        Peta Lokasi
                     </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="text-center">
    <div class="container">
        <p class="mb-2">&copy; 2025 Danish Corp.</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#" class="text-decoration-none text-secondary">Kebijakan Privasi</a></li>
            <li class="list-inline-item">|</li>
            <li class="list-inline-item"><a href="#" class="text-decoration-none text-secondary">Ketentuan Penggunaan</a></li>
        </ul>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>