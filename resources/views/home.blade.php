@extends('layouts.app')

@section('content')

<!-- ================= CAROUSEL ================= -->
<div id="homeCarousel"
     class="carousel slide position-relative"
     data-bs-ride="carousel"
     data-bs-interval="1500">

    <!-- Indicators -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="2"></button>
    </div>

    <!-- Slides (CLICKABLE) -->
    <div class="carousel-inner">

        <div class="carousel-item active">
            <a href="{{ route('destinations.index') }}">
                <img src="{{ asset('images/bg1.jpg') }}"
                     class="d-block w-100"
                     style="height:80vh; object-fit:cover; cursor:pointer;">
            </a>
        </div>

        <div class="carousel-item">
            <a href="{{ route('kategori.detail', 'pantai') }}">
                <img src="{{ asset('images/bg2.jpg') }}"
                     class="d-block w-100"
                     style="height:80vh; object-fit:cover; cursor:pointer;">
            </a>
        </div>

        <div class="carousel-item">
            <a href="{{ route('kategori.detail', 'gunung') }}">
                <img src="{{ asset('images/bg3.jpg') }}"
                     class="d-block w-100"
                     style="height:80vh; object-fit:cover; cursor:pointer;">
            </a>
        </div>

    </div>

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>

    <!-- Overlay -->
    <div class="position-absolute top-50 start-50 translate-middle w-75 text-center"
         style="background: rgba(255,255,255,0.6); padding:40px; border-radius:18px;">
        <h1 class="fw-bold display-4 text-dark">Explore NTB</h1>
        <p class="lead text-dark mt-3">
            Jelajahi keindahan alam Nusa Tenggara Barat
        </p>
        <a href="{{ route('destinations.index') }}"
           class="btn btn-primary btn-lg mt-3 px-4">
            Lihat Destinasi
        </a>
    </div>
</div>

<!-- ================= INFO CARD ================= -->
<div class="container my-5">

    <h3 class="fw-bold text-center mb-4">
        Kategori Wisata Unggulan
    </h3>

    <div class="d-flex justify-content-between gap-3">

        <!-- Pantai -->
        <div style="width:20%">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('images/2.jpg') }}" class="card-img-top"
                     style="height:200px; object-fit:cover;">
                <div class="card-body text-center">
                    <h6 class="fw-bold">Pantai</h6>
                    <p class="text-muted small mt-2">
                        Pantai eksotis dengan panorama terbaik di NTB.
                    </p>
                    <a href="{{ route('kategori.detail', 'pantai') }}"
                       class="btn btn-outline-primary btn-sm">
                        Detail
                    </a>
                </div>
            </div>
        </div>

        <!-- Gunung -->
        <div style="width:20%">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('images/3.jpg') }}" class="card-img-top"
                     style="height:200px; object-fit:cover;">
                <div class="card-body text-center">
                    <h6 class="fw-bold">Gunung</h6>
                    <p class="text-muted small mt-2">
                        Gunung tercantik dan menantang di NTB.
                    </p>
                    <a href="{{ route('kategori.detail', 'gunung') }}"
                       class="btn btn-outline-primary btn-sm">
                        Detail
                    </a>
                </div>
            </div>
        </div>

        <!-- Air Terjun -->
        <div style="width:20%">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('images/1.jpg') }}" class="card-img-top"
                     style="height:200px; object-fit:cover;">
                <div class="card-body text-center">
                    <h6 class="fw-bold">Air Terjun</h6>
                    <p class="text-muted small mt-2">
                        Air terjun alami dengan suasana sejuk.
                    </p>
                    <a href="{{ route('kategori.detail', 'air-terjun') }}"
                       class="btn btn-outline-primary btn-sm">
                        Detail
                    </a>
                </div>
            </div>
        </div>

        <!-- Hutan -->
        <div style="width:20%">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('images/5.jpg') }}" class="card-img-top"
                     style="height:200px; object-fit:cover;">
                <div class="card-body text-center">
                    <h6 class="fw-bold">Rumah Adat</h6>
                    <p class="text-muted small mt-2">
                        Rumah Adat Yang Ada Di NTB.
                    </p>
                    <a href="{{ route('kategori.detail', 'hutan') }}"
                       class="btn btn-outline-primary btn-sm">
                        Detail
                    </a>
                </div>
            </div>
        </div>

        <!-- Pulau -->
        <div style="width:20%">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('images/4.jpg') }}" class="card-img-top"
                     style="height:200px; object-fit:cover;">
                <div class="card-body text-center">
                    <h6 class="fw-bold">Wisata Buatan</h6>
                    <p class="text-muted small mt-2">
                        Wisata Buatan Yang Ada Di NTB.
                    </p>
                    <a href="{{ route('kategori.detail', 'pulau') }}"
                       class="btn btn-outline-primary btn-sm">
                        Detail
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
