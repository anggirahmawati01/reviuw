<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Explore NTB</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 70px;
        }

        /* Navbar */
        .nav-link.active {
            font-weight: bold;
            color: #0d6efd !important;
        }

        /* Card */
        .card-img-top {
            object-fit: cover;
        }

        .card {
            transition: transform .3s ease, box-shadow .3s ease;
        }

        .card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 25px rgba(0,0,0,.15);
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
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                       href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('destinations.*') ? 'active' : '' }}"
                       href="{{ route('destinations.index') }}">Destinations</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- CONTENT -->
@yield('content')

<!-- FOOTER -->
<footer class="mt-5 py-4 bg-white border-top">
    <div class="container text-center">
        <p class="mb-1 fw-semibold">© {{ date('Y') }} Explore NTB</p>
        <small class="text-muted">Jelajahi keindahan Nusa Tenggara Barat</small>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
