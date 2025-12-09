<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danish Corp - Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        :root {
            --apple-bg: #f5f5f7;
            --apple-text: #1d1d1f;
            --apple-blue: #0071e3;
            --apple-blue-hover: #0077ed;
            --card-radius: 28px;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--apple-text);
            background-color: #fff;
            overflow-x: hidden;
        }

        .navbar {
            background-color: rgba(22, 22, 23, 0.8);
            backdrop-filter: saturate(180%) blur(20px);
            -webkit-backdrop-filter: saturate(180%) blur(20px);
            font-size: 12px;
            padding: 12px 0;
        }
        .navbar-brand { font-weight: 600; color: #fff !important; }
        .nav-link { color: #d5d5d5 !important; }
        .nav-link:hover { color: #fff !important; }
        .nav-link.active { color: #fff !important; }

        .hero {
            background-color: #fbfbfd;
            padding-top: 100px;
            padding-bottom: 50px;
            text-align: center;
        }
        .hero h1 {
            font-weight: 700;
            font-size: 4rem;
            color: #1d1d1f;
        }
        .hero p {
            font-size: 1.6rem;
            font-weight: 400;
        }

        .carousel-item img {
            max-height: 480px;
            object-fit: contain;
            filter: drop-shadow(0 20px 40px rgba(0,0,0,0.2));
        }

        .apple-card {
            background-color: var(--apple-bg);
            border-radius: var(--card-radius);
            text-align: center;
            transition: transform 0.3s ease;
            padding: 40px 20px;
        }
        .apple-card:hover {
            transform: scale(1.03);
        }

        footer {
            background-color: #f5f5f7;
            padding: 20px;
            text-align: center;
            color: #7a7a7e;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top px-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}"><i class="bi bi-apple"></i> Danish Corp</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav gap-3">
                <li class="nav-item"><a class="nav-link active" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('store') }}">Store</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('support') }}">Support</a></li>
            </ul>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section class="hero">
        <div class="container">
            <h1>{{ $data['product'] }}</h1>
            <p>{{ $data['description'] }}</p>

            <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner mt-4">
                    <div class="carousel-item active">
                        <img src="https://cdn.tgdd.vn/Files/2023/08/21/1543753/appleinsidercopy-210823-160539.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="https://m.media-amazon.com/images/S/al-na-9d5791cf-3faf/5bf55230-5e6f-4478-86be-16ad2629c9e2._CR0%2C0%2C3000%2C1500_SX1500_.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="https://pngimg.com/d/iphone_14_PNG22.png" class="d-block w-100">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-slide="prev" data-bs-target="#heroCarousel">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-slide="next" data-bs-target="#heroCarousel">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </section>

    <!-- Produk -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center fw-bold mb-5">Produk Terbaru</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="apple-card">
                        <h5>{{ $produk['produk1'] }}</h5>
                        <img src="https://www.filme.fr/cdn/shop/products/location-apple-macbook-pro-16-intel-a-paris-et-montreuil-chez-filme.jpg?v=1705010904" width="260">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="apple-card">
                        <h5>{{ $produk['produk2'] }}</h5>
                        <img src="https://www.apple.com/id/watch/images/meta/apple-watch__ywfuk5wnf1u2_og.png" width="230">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="apple-card bg-dark text-white">
                        <h5>{{ $produk['produk3'] }}</h5>
                        <img src="https://macstore.id/wp-content/uploads/2024/01/ipad-pro-finish-select-202212-12-9inch-space-gray-wifi_AV1.jpeg" width="230">
                    </div>
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
