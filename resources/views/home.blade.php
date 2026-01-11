@extends('layouts.app')

@section('content')
<!-- HERO CAROUSEL -->
<div id="homeCarousel" class="carousel slide position-relative" data-bs-ride="carousel">
    <!-- Carousel Indicators -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active" aria-current="true"></button>
        <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="2"></button>
    </div>

    <!-- Carousel Images -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/bg1.jpg') }}" class="d-block w-100" style="height: 80vh; object-fit: cover;" alt="Slide 1">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/bg2.jpg') }}" class="d-block w-100" style="height: 80vh; object-fit: cover;" alt="Slide 2">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/bg3.jpg') }}" class="d-block w-100" style="height: 80vh; object-fit: cover;" alt="Slide 3">
        </div>
    </div>

    <!-- Carousel Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>

    <!-- Overlay Kotak Putih Transparan -->
    <div class="position-absolute top-50 start-50 translate-middle w-75 text-center"
         style="background: rgba(255,255,255,0.55); padding: 30px 30px; border-radius: 15px;">
        <h1 class="fw-bold display-4 text-dark">Explore NTB</h1>
        <p class="lead text-dark mt-3">
            Jelajahi keindahan alam Nusa Tenggara Barat.
        </p>
        <a href="{{ route('destinations.index') }}" class="btn btn-primary btn-lg mt-3 px-4">
            Lihat Destinasi
        </a>
    </div>
</div>

<!-- INFO CARD SECTION -->
<div class="container my-5">
    <div class="row g-4">

        <!-- CARD 1 -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('images/2.jpg') }}" class="card-img-top" style="height:220px; object-fit:cover;">
                <div class="card-body text-center">
                    <h5 class="fw-bold">Pantai</h5>
                    <p class="text-muted mt-2">
                        Pantai, dan panorama alam terbaik di NTB.
                    </p>
                    <a href="{{ route('destinations.index') }}" class="btn btn-outline-primary mt-2">
                        Lihat Destinasi
                    </a>
                </div>
            </div>
        </div>

        <!-- CARD 2 -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('images/3.jpg') }}" class="card-img-top" style="height:220px; object-fit:cover;">
                <div class="card-body text-center">
                    <h5 class="fw-bold">Gunung</h5>
                    <p class="text-muted mt-2">
                        Gunung Tercantik dan Terunik di NTB.
                    </p>
                    <a href="{{ route('destinations.index') }}" class="btn btn-outline-primary mt-2">
                        Lihat Destinasi
                    </a>
                </div>
            </div>
        </div>

        <!-- CARD 3 -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('images/1.jpg') }}" class="card-img-top" style="height:220px; object-fit:cover;">
                <div class="card-body text-center">
                    <h5 class="fw-bold">Air Terjun</h5>
                    <p class="text-muted mt-2">
                        Air Terjun dengan view berbeda di NTB.
                    </p>
                    <a href="{{ route('destinations.index') }}" class="btn btn-outline-primary mt-2">
                        Lihat Destinasi
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
