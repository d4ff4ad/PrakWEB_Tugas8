<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product - Danish</title>
    
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
            background-color: #f5f5f7;
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

        .form-container {
            background: #fff;
            padding: 40px;
            border-radius: var(--card-radius);
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            max-width: 600px;
            margin: 120px auto 60px;
        }

        .form-label {
            font-weight: 600;
            font-size: 0.9rem;
            color: #86868b;
        }

        .form-control {
            border-radius: 12px;
            border: 1px solid #d2d2d7;
            padding: 12px 16px;
            font-size: 1rem;
            background-color: #fff;
            transition: 0.2s;
        }

        .form-control:focus {
            border-color: var(--apple-blue);
            box-shadow: 0 0 0 4px rgba(0, 113, 227, 0.1);
        }

        .btn-submit {
            background-color: var(--apple-blue);
            color: white;
            border-radius: 50px;
            padding: 12px 30px;
            font-size: 1rem;
            font-weight: 500;
            border: none;
            width: 100%;
            transition: 0.3s;
        }

        .btn-submit:hover {
            background-color: var(--apple-blue-hover);
            transform: translateY(-2px);
        }

        .section-title {
            font-weight: 700;
            font-size: 2rem;
            margin-bottom: 30px;
            text-align: center;
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
                <li class="nav-item"><a class="nav-link" href="{{ route('store') }}">Store</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('support') }}">Support</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('product') }}">Product</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="form-container fade-in">
        <h2 class="section-title">Tambah Produk Baru</h2>
        
        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="mb-3">
                <label for="model" class="form-label">Model iPhone</label>
                <input type="text" class="form-control" id="model" name="model" placeholder="Contoh: iPhone 15 Pro" required>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="color" class="form-label">Warna</label>
                    <input type="text" class="form-control" id="color" name="color" placeholder="Contoh: Titanium Blue">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="storage" class="form-label">Penyimpanan (GB)</label>
                    <input type="number" class="form-control" id="storage" name="storage" placeholder="Contoh: 256">
                </div>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Harga (Rp)</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Contoh: 20000000" required>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Upload Gambar</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
            </div>

            <div class="mb-4">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="description" name="description" rows="4" placeholder="Tulis spesifikasi singkat..." required></textarea>
            </div>

            <button type="submit" class="btn btn-submit">Simpan Produk</button>
            <div class="text-center mt-3">
                <a href="{{ route('product') }}" class="text-decoration-none" style="color: var(--apple-blue); font-size: 0.9rem;">Batal</a>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
