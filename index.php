<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu Desa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
    body {
        background-color: #f8f9fa;
        color: #00274d;
    }

    .hero {
        padding: 2rem 0;
        /* Kurangi padding untuk memperpendek tinggi hero */
        background-color: #f8f9fa;
        /* Warna latar opsional */
    }

    .hero-title {
        font-size: 2rem;
        /* Perkecil ukuran font judul */
    }

    .hero-subtitle {
        font-size: 1rem;
        /* Perkecil ukuran font subjudul */
    }

    .hero-button {
        padding: 0.5rem 1rem;
        /* Perkecil ukuran tombol */
        font-size: 0.875rem;
    }

    .hero {
        background: linear-gradient(to bottom, #0066cc, #004d99);
        color: white;
        padding: 100px 0;
    }

    .hero {
        background: linear-gradient(to bottom, #007bff, #0056b3);
        color: white;
        padding: 100px 0;
        position: relative;
        overflow: hidden;
    }

    .hero-title,
    .hero-subtitle {
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 1s ease-out forwards;
    }

    .hero-title {
        animation-delay: 0.3s;
        font-size: 2.5rem;
        font-weight: bold;
    }

    .hero-subtitle {
        animation-delay: 0.5s;
        font-size: 1.2rem;
        margin-top: 10px;
    }

    /* Tombol Animasi */
    .hero-button {
        margin-top: 20px;
        padding: 12px 25px;
        font-size: 1.2rem;
        color: #0056b3;
        background-color: #ffffff;
        border: none;
        border-radius: 8px;
        transition: transform 0.3s ease, background-color 0.3s ease;
    }

    .hero-button:hover {
        transform: translateY(-5px);
        background-color: #f0f8ff;
    }

    /* Animasi Keyframes */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .features {
        padding: 60px 0;
    }

    .feature-card {
        border: none;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background-color: #ffffff;
        border-radius: 12px;
        padding: 20px;
    }

    .feature-card:hover {
        transform: translateY(-10px);
        /* Mengangkat card saat di-hover */
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        /* Bayangan lebih dalam */
    }

    .feature-card i {
        margin-bottom: 15px;
        transition: color 0.3s ease;
    }

    .feature-card:hover i {
        color: #004d99;
        /* Warna ikon berubah */
    }

    .card-title {
        font-weight: 600;
    }

    .card-text {
        font-size: 14px;
        color: #6c757d;
    }

    .developer-card img {
        border-radius: 50%;
        height: 120px;
        width: 120px;
    }

    .carousel-inner img {
        max-height: 500px;
        /* Mengatur tinggi maksimum carousel */
        object-fit: cover;
        /* Memastikan gambar memenuhi area tanpa distorsi */
    }

    footer {
        background: #004d99;
        color: white;
        padding: 20px 0;
    }

    .developer-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: none;
        border-radius: 12px;
    }

    /* Animasi Hover */
    .developer-card:hover {
        transform: translateY(-10px);
        /* Mengangkat card */
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        /* Bayangan lebih tegas */
    }

    /* Gambar Profil */
    .developer-card img {
        transition: transform 0.3s ease;
    }

    /* Animasi Gambar */
    .developer-card:hover img {
        transform: scale(1.1);
        /* Memperbesar gambar */
    }

    /* Text Styling */
    .card-title {
        font-weight: bold;
    }

    .card-text {
        font-size: 14px;
        color: #6c757d;
    }
    </style>
</head>

<body>

    <!-- Hero Section -->
    <section class="hero text-center">
        <div class="container">
            <h1 class="hero-title">Selamat Datang di Buku Tamu Desa</h1>
            <p class="lead hero-subtitle">Catatan tamu desa yang modern dan profesional.</p>
            <a href="#guestbook" class="btn btn-light btn-lg hero-button">Isi Buku Tamu</a>
        </div>
    </section>
    <!-- Carousel Section -->
    <section class="carousel mt-5">
        <div id="desaCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/bg1.jpg" class="d-block w-100" alt="Desa 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Keindahan Desa</h5>
                        <p>Panorama desa yang asri dan memukau.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/bg2.jpg" class="d-block w-100" alt="Desa 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Fasilitas Desa</h5>
                        <p>Fasilitas lengkap untuk kenyamanan masyarakat.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/bg3.jpeg" class="d-block w-100" alt="Desa 3">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Budaya Desa</h5>
                        <p>Tradisi dan budaya lokal yang kaya.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#desaCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#desaCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <h2 class="text-center mb-5">Fitur Unggulan</h2>
            <div class="row text-center">
                <!-- Kemudahan Pengisian -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm feature-card">
                        <div class="card-body">
                            <i class="bi bi-pencil-square fs-1 text-primary"></i>
                            <h5 class="card-title mt-3">Kemudahan Pengisian</h5>
                            <p class="card-text">Isi buku tamu dengan cepat dan mudah.</p>
                        </div>
                    </div>
                </div>
                <!-- Keamanan Data -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm feature-card">
                        <div class="card-body">
                            <i class="bi bi-shield-lock fs-1 text-primary"></i>
                            <h5 class="card-title mt-3">Keamanan Data</h5>
                            <p class="card-text">Data tamu dijamin aman dan terlindungi.</p>
                        </div>
                    </div>
                </div>
                <!-- Analisis Statistik -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm feature-card">
                        <div class="card-body">
                            <i class="bi bi-bar-chart-line fs-1 text-primary"></i>
                            <h5 class="card-title mt-3">Analisis Statistik</h5>
                            <p class="card-text">Pantau data tamu dengan grafik yang mudah dipahami.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Guest Book Section -->
    <section id="guestbook" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Isi Buku Tamu</h2>
            <form action="process.php" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Pesan</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                </div>
                <div class="d-flex justify-content-center mt-4">
                    <button type="submit" class="btn btn-primary me-2">Kirim</button>
                    <a href="tabelbukutamu.php" class="btn btn-secondary">Lihat Tamu</a>
                </div>
            </form>
        </div>
    </section>


    <!-- Developer Card Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Pengembang</h2>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card developer-card shadow-sm text-center">
                        <div class="card-body">
                            <img src="img/seli.jpeg" alt="Seli Marlina" class="rounded-circle mb-3">
                            <h5 class="card-title">Seli Marlina</h5>
                            <p class="card-text">Spesialis Web dan Aplikasi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="text-center">
        <div class="container">
            <p>&copy; 2025 Buku Tamu Desa. Dikembangkan oleh Seli Marlina.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
</body>

</html>