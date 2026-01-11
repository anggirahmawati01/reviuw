<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Explore NTB</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 70px; /* supaya konten tidak tertutup navbar */
        }

        /* Navbar */
        .nav-link.active {
            font-weight: bold;
            color: #0d6efd !important;
        }

        /* Card Hover Effect */
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 25px rgba(0,0,0,0.15);
        }

        .card-img-top {
            object-fit: cover;
        }

        /* Pagination */
        .pagination {
            gap: 6px;
        }

        .page-link {
            border-radius: 8px !important;
            border: none;
            font-weight: 500;
        }

        .page-item.active .page-link {
            background-color: #0d6efd;
        }

        /* Footer */
        footer {
            background-color: #1a1a1a;
            color: #ddd;
            padding-top: 50px;
            padding-bottom: 30px;
        }
        footer a {
            color: #ddd;
            text-decoration: none;
        }
        footer a:hover {
            color: #0d6efd;
            text-decoration: underline;
        }

        /* Hero Overlay */
        .hero-overlay {
            background: rgba(255,255,255,0.65);
            border-radius: 15px;
            padding: 30px;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">
            EXPLORE <span class="text-primary">NTB</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('destinations.*') ? 'active' : '' }}" href="{{ route('destinations.index') }}">
                        Destinations
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- CONTENT -->
@yield('content')

<!-- FOOTER -->
<footer>
    <div class="container">
        <div class="row mb-4">

            <!-- Tentang Explore NTB -->
            <div class="col-md-4 mb-4">
                <h5 class="fw-bold text-white mb-3">Explore NTB</h5>
                <p class="small text-light-50">
                    Jelajahi keindahan alam Nusa Tenggara Barat. Nikmati pengalaman wisata tak terlupakan!
                </p>
            </div>

            <!-- Navigasi -->
            <div class="col-md-4 mb-4">
                <h5 class="fw-bold text-white mb-3">Navigasi</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('home') }}" class="small d-block mb-2">Home</a></li>
                    <li><a href="{{ route('destinations.index') }}" class="small d-block mb-2">Destinations</a></li>
                </ul>
            </div>

            <!-- Sosial Media -->
            <div class="col-md-4 mb-4">
                <h5 class="fw-bold text-white mb-3">Ikuti Kami</h5>
                <div class="d-flex gap-3">
                    <a href="#" class="fs-5"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="fs-5"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="fs-5"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="fs-5"><i class="bi bi-youtube"></i></a>
                </div>
            </div>

        </div>

        <hr class="bg-secondary">

        <div class="text-center small">
            &copy; {{ date('Y') }} Explore NTB. All rights reserved.
        </div>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
