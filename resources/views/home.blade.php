@extends('layouts.app')

@section('content')
<!-- HERO SECTION -->
<div class="home-hero d-flex align-items-center justify-content-center text-center text-white">
    <div>
        <h1 class="fw-bold display-4">Explore NTB</h1>
        <p class="lead mt-3">
            Jelajahi keindahan alam Nusa Tenggara Barat
        </p>

        <a href="{{ route('destinations.index') }}"
           class="btn btn-primary btn-lg mt-4 px-4 shadow-sm">
            Lihat Destinasi
        </a>
    </div>
</div>

<!-- CARD SECTION -->
<div class="container my-5">
    <div class="row g-4">

        <!-- CARD 1 -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm rounded-4">
                <img src="{{ asset('images/1.png') }}"
                     class="card-img-top rounded-top-4"
                     height="220"
                     style="object-fit:cover;"
                     alt="Wisata Alam">

                <div class="card-body text-center">
                    <h5 class="fw-bold">Wisata Alam</h5>
                    <p class="text-muted mt-2">
                        Pantai, gunung, dan panorama alam terbaik di NTB.
                    </p>
                </div>

                <div class="card-footer bg-white border-0 text-center pt-0 pb-3">
                    <a href="{{ route('destinations.index') }}"
                       class="btn btn-primary btn-sm shadow-sm px-4">
                        Lihat Destinasi
                    </a>
                </div>
            </div>
        </div>

        <!-- CARD 2 -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm rounded-4">
                <img src="{{ asset('images/2.png') }}"
                     class="card-img-top rounded-top-4"
                     height="220"
                     style="object-fit:cover;"
                     alt="Budaya Lokal">

                <div class="card-body text-center">
                    <h5 class="fw-bold">Budaya Lokal</h5>
                    <p class="text-muted mt-2">
                        Budaya, tradisi, dan adat khas masyarakat NTB.
                    </p>
                </div>

                <div class="card-footer bg-white border-0 text-center pt-0 pb-3">
                    <a href="{{ route('destinations.index') }}"
                       class="btn btn-primary btn-sm shadow-sm px-4">
                        Lihat Destinasi
                    </a>
                </div>
            </div>
        </div>

        <!-- CARD 3 -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm rounded-4">
                <img src="{{ asset('images/kuliner-ntb.jpg') }}"
                     class="card-img-top rounded-top-4"
                     height="220"
                     style="object-fit:cover;"
                     alt="Kuliner NTB">

                <div class="card-body text-center">
                    <h5 class="fw-bold">Kuliner Khas</h5>
                    <p class="text-muted mt-2">
                        Aneka kuliner khas NTB yang menggugah selera.
                    </p>
                </div>

                <div class="card-footer bg-white border-0 text-center pt-0 pb-3">
                    <a href="{{ route('destinations.index') }}"
                       class="btn btn-primary btn-sm shadow-sm px-4">
                        Lihat Destinasi
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
