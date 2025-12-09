<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store - Danish</title>
    
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
            background-color: #fff;
        }

        /* Navbar Glassmorphism */
        .navbar {
            background-color: rgba(22, 22, 23, 0.8);
            backdrop-filter: saturate(180%) blur(20px);
            -webkit-backdrop-filter: saturate(180%) blur(20px);
            font-size: 12px;
            padding: 12px 0;
        }
        .nav-link { color: #d5d5d5 !important; transition: 0.3s; }
        .nav-link:hover, .nav-link.active { color: #fff !important; }

        /* Header Store */
        .store-header {
            padding-top: 100px;
            padding-bottom: 60px;
            background-color: #fbfbfd;
        }
        .store-title {
            font-weight: 700;
            font-size: 3rem;
        }

        /* Product Card - Apple Style */
        .product-card {
            background-color: var(--apple-bg); 
            border: none;
            border-radius: var(--card-radius);
            padding: 40px 20px;
            text-align: center;
            transition: all 0.4s ease;
            height: 100%;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        .product-card:hover {
            transform: scale(1.02); 
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            background-color: #fff; 
        }

        .product-card img {
            max-height: 200px;
            object-fit: contain;
            margin-bottom: 30px;
            filter: drop-shadow(0 10px 15px rgba(0,0,0,0.1));
            transition: 0.4s;
        }

        .product-card:hover img {
            transform: scale(1.05);
        }

        .card-title {
            font-weight: 600;
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .card-text {
            color: #86868b;
            font-size: 0.95rem;
            margin-bottom: 25px;
            min-height: 40px; 
        }

        /* Tombol Beli - Pill Shape */
        .btn-buy {
            background-color: var(--apple-blue);
            color: white;
            border-radius: 50px;
            padding: 8px 24px;
            font-size: 0.9rem;
            font-weight: 500;
            border: none;
            transition: 0.3s;
        }

        .btn-buy:hover {
            background-color: var(--apple-blue-hover);
            transform: translateY(-2px);
        }
        
        /* Badge "New" */
        .badge-new {
            color: #bf4800;
            font-size: 0.8rem;
            font-weight: 600;
            margin-bottom: 5px;
            display: block;
            text-transform: uppercase;
        }

        footer {
            background: #f5f5f7;
            color: #86868b;
            font-size: 12px;
            border-top: 1px solid #d2d2d7;
        }
    </style>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/"><i class="bi bi-apple me-2"></i>Danish</a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav gap-3">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link active" href="{{ route('store') }}">Store</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('support') }}">Support</a></li>
            </ul>
        </div>
    </div>
</nav>

<section class="store-header text-center">
    <div class="container fade-in">
        <h2 class="store-title">Store.</h2>
        <p class="text-secondary fs-5">Cara terbaik untuk membeli produk yang Anda cintai.</p>
    </div>
</section>

<div class="container pb-5">
    <div class="row gy-4">

        @foreach ($produk as $item)
        <div class="col-lg-4 col-md-6">
            <div class="product-card">
                <span class="badge-new">{{ $item['label'] }}</span>
                <h5 class="card-title">{{ $item['nama'] }}</h5>
                <p class="card-text">{{ $item['deskripsi'] }}</p>
                <img src="{{ $item['gambar'] }}" alt="{{ $item['nama'] }}">
                <div class="mt-auto">
                    <button class="btn btn-buy">Beli</button>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>

<footer class="text-center py-4 mt-5">
    <div class="container">
        <p class="mb-0">&copy; 2025 Danish Store. <span class="text-secondary">You Allright.</span></p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>