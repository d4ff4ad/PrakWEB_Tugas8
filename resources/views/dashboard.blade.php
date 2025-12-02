<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danish Corp - Pro</title>

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

        /* Navbar - Glassmorphism */
        .navbar {
            background-color: rgba(22, 22, 23, 0.8);
            backdrop-filter: saturate(180%) blur(20px);
            -webkit-backdrop-filter: saturate(180%) blur(20px);
            height: 48px;
            font-size: 12px;
        }
        .navbar-brand { font-weight: 600; font-size: 18px; letter-spacing: -0.5px; color: #fff !important; }
        .nav-link { color: #d5d5d5 !important; transition: color 0.3s ease; }
        .nav-link:hover { color: #fff !important; }

        /* Hero Section Updated */
        .hero {
            background-color: #fbfbfd;
            padding-top: 100px; /* Jarak dari navbar */
            padding-bottom: 50px;
            text-align: center;
            overflow: hidden;
        }

        .hero h1 {
            font-weight: 700;
            font-size: 4rem; /* Lebih besar */
            letter-spacing: -1.5px;
            margin-bottom: 0.5rem;
            color: #1d1d1f;
        }

        .hero p {
            font-size: 1.7rem;
            color: #1d1d1f;
            font-weight: 400;
        }

        .cta-links a {
            color: var(--apple-blue);
            text-decoration: none;
            font-size: 1.2rem;
            margin: 0 15px;
            font-weight: 500;
        }
        .cta-links a:hover { text-decoration: underline; }

        /* Carousel Customization */
        .hero-carousel {
            margin-top: 50px;
            max-width: 900px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .carousel-item img {
            max-height: 500px; /* Tinggi maksimal gambar */
            object-fit: contain;
            filter: drop-shadow(0 20px 40px rgba(0,0,0,0.2)); /* Bayangan halus */
        }

        /* Bento Grid Cards */
        .apple-card {
            background-color: var(--apple-bg);
            border-radius: var(--card-radius);
            overflow: hidden;
            transition: transform 0.4s ease;
            height: 100%;
            padding-top: 50px;
            text-align: center;
            cursor: pointer;
        }
        .apple-card:hover { transform: scale(1.02); }
        .apple-card h3 { font-weight: 600; font-size: 2rem; }
        .apple-card img { width: 80%; margin: 30px auto 50px; object-fit: contain; }

        /* Footer & Misc */
        .feature-icon { font-size: 3rem; margin-bottom: 20px; }
        footer { background-color: #f5f5f7; color: #86868b; font-size: 12px; padding: 40px 0; border-top: 1px solid #d2d2d7; }
        .btn-apple { background-color: var(--apple-blue); color: white; border-radius: 980px; padding: 10px 25px; transition: 0.3s; }
        .btn-apple:hover { background-color: var(--apple-blue-hover); color: white; }

    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top px-4">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="bi bi-apple me-2"></i>Danish Corp</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item mx-2"><a class="nav-link" href="#produk">Store</a></li>
                   
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero">
        <div class="container">
            <div class="fade-in-up">
                <h1 class="display-3">iPhone 17 Pro</h1>
                <p>Titanium. Begitu kuat. Begitu ringan.</p>
                <div class="cta-links mt-3">
                    <a href="#produk">Selengkapnya <i class="bi bi-chevron-right" style="font-size: 0.8em;"></i></a>
                    <a href="#beli">Beli <i class="bi bi-chevron-right" style="font-size: 0.8em;"></i></a>
                </div>
            </div>

            <div id="heroCarousel" class="carousel slide hero-carousel carousel-dark" data-bs-ride="carousel">
                
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://cdn.tgdd.vn/Files/2023/08/21/1543753/appleinsidercopy-210823-160539.jpg" class="d-block w-100" alt="iPhone Front">
                        <div class="carousel-caption d-none d-md-block">
                            </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://m.media-amazon.com/images/S/al-na-9d5791cf-3faf/5bf55230-5e6f-4478-86be-16ad2629c9e2._CR0%2C0%2C3000%2C1500_SX1500_.jpg" class="d-block w-100" alt="iPhone Angle">
                    </div>
                    <div class="carousel-item">
                        <img src="https://pngimg.com/d/iphone_14_PNG22.png" class="d-block w-100" alt="iPhone Back">
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            </div>
    </section>

    <section id="produk" class="py-5 bg-white">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold display-6">Terbaru.</h2>
            <div class="row g-4">
                
                <div class="col-12">
                    <div class="apple-card pt-5">
                        <span class="badge rounded-pill text-bg-warning mb-2" style="font-weight: 500;">New M3 Chip</span>
                        <h3>MacBook Pro</h3>
                        <p>Bertenaga. Menakjubkan.</p>
                        <div class="cta-links mb-4">
                            <a href="#">Beli ></a>
                        </div>
                        <img src="https://www.filme.fr/cdn/shop/products/location-apple-macbook-pro-16-intel-a-paris-et-montreuil-chez-filme.jpg?v=1705010904" alt="Laptop" height="250" width="250">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="apple-card pt-5">
                        <h3>Apple Watch</h3>
                        <p>Lebih pintar. Lebih cerah. Lebih tangguh.</p>
                         <div class="cta-links mb-4">
                            <a href="#">Beli ></a>
                        </div>
                        <img src="https://www.apple.com/id/watch/images/meta/apple-watch__ywfuk5wnf1u2_og.png" alt="Watch" style="max-height: 250px;">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="apple-card pt-5" style="background-color: #000; color: white;">
                        <h3 class="text-white">iPad Pro</h3>
                        <p style="color: #a1a1a6;">Tipis yang mustahil.</p>
                        <div class="cta-links mb-4">
                            <a href="#">Beli ></a>
                        </div>
                        <img src="https://macstore.id/wp-content/uploads/2024/01/ipad-pro-finish-select-202212-12-9inch-space-gray-wifi_AV1.jpeg" alt="iPad" style="max-height: 250px;">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="fitur" class="py-5 text-center">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-4 mb-4">
                    <i class="bi bi-shield-check feature-icon"></i>
                    <h4 class="fw-bold">Privasi</h4>
                    <p class="text-secondary px-4">Apa yang ada di perangkat Anda, tetap di perangkat Anda. Privasi adalah prioritas.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <i class="bi bi-cpu feature-icon"></i>
                    <h4 class="fw-bold">M3 Chip</h4>
                    <p class="text-secondary px-4">Kecepatan pemrosesan tak tertandingi untuk setiap pekerjaan berat.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <i class="bi bi-tools feature-icon"></i>
                    <h4 class="fw-bold">Genius Support</h4>
                    <p class="text-secondary px-4">Bantuan teknis langsung dari ahlinya.</p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container text-center">
            <p class="mb-2">Hak Cipta © 2025 Danish Corp.</p>
            
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>